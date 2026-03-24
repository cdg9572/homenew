<?php

namespace App\Services;

use App\Models\BlogPost;
use App\Models\BlogPostDailyStat;
use App\Models\BlogPostEventLog;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;
use Illuminate\Support\Carbon;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\DB;

class BlogService
{
    public function getList(string $category = '', string $keyword = ''): LengthAwarePaginator
    {
        $query = BlogPost::query()
            ->where('is_published', true)
            ->whereNull('deleted_at');

        if ($category !== '') {
            $query->where('category', $category);
        }

        if ($keyword !== '') {
            $query->where('title', 'like', '%'.$keyword.'%');
        }

        return $query
            ->orderByDesc('is_notice')
            ->orderByDesc('score_30d')
            ->orderByDesc('published_at')
            ->paginate(12)
            ->withQueryString();
    }

    public function getFeaturedPost(string $category = ''): ?BlogPost
    {
        return BlogPost::query()
            ->where('is_published', true)
            ->when($category !== '', fn ($q) => $q->where('category', $category))
            ->orderByDesc('is_notice')
            ->orderByDesc('score_30d')
            ->orderByDesc('published_at')
            ->first();
    }

    public function getPostBySlugOrFail(string $slug): BlogPost
    {
        return BlogPost::query()
            ->where('slug', $slug)
            ->where('is_published', true)
            ->with(['sections'])
            ->firstOrFail();
    }

    public function recordView(BlogPost $blogPost, string $sessionKey): void
    {
        $today = Carbon::today();
        $alreadyExists = BlogPostEventLog::query()
            ->where('blog_post_id', $blogPost->id)
            ->where('event_type', BlogPostEventLog::EVENT_VIEW)
            ->where('session_key', $sessionKey)
            ->whereDate('event_at', $today)
            ->exists();

        if ($alreadyExists) {
            return;
        }

        BlogPostEventLog::create([
            'blog_post_id' => $blogPost->id,
            'event_type' => BlogPostEventLog::EVENT_VIEW,
            'session_key' => $sessionKey,
            'event_at' => now(),
            'ip_address' => request()->ip(),
            'user_agent' => request()->userAgent(),
        ]);
    }

    public function recordEvent(BlogPost $blogPost, string $sessionKey, string $eventType, array $payload = []): void
    {
        BlogPostEventLog::create([
            'blog_post_id' => $blogPost->id,
            'event_type' => $eventType,
            'session_key' => $sessionKey,
            'dwell_seconds' => $payload['dwell_seconds'] ?? null,
            'scroll_depth' => $payload['scroll_depth'] ?? null,
            'event_at' => now(),
            'ip_address' => request()->ip(),
            'user_agent' => request()->userAgent(),
        ]);
    }

    public function calculateAndStoreStats(Carbon $targetDate): void
    {
        $startAt = $targetDate->copy()->startOfDay();
        $endAt = $targetDate->copy()->endOfDay();

        $postIds = BlogPostEventLog::query()
            ->whereBetween('event_at', [$startAt, $endAt])
            ->distinct()
            ->pluck('blog_post_id');

        foreach ($postIds as $postId) {
            $logs = BlogPostEventLog::query()
                ->where('blog_post_id', $postId)
                ->whereBetween('event_at', [$startAt, $endAt])
                ->get();

            $views = $logs->where('event_type', BlogPostEventLog::EVENT_VIEW)
                ->groupBy('session_key')
                ->count();
            $likes = $logs->where('event_type', BlogPostEventLog::EVENT_LIKE)->count();
            $linkCopies = $logs->where('event_type', BlogPostEventLog::EVENT_LINK_COPY)->count();
            $shares = $logs->where('event_type', BlogPostEventLog::EVENT_SHARE)->count();

            $dwellLogs = $this->latestLogsBySession($logs, BlogPostEventLog::EVENT_DWELL);
            $dwellSeconds = $dwellLogs->pluck('dwell_seconds')->filter()->map(fn ($value) => (int) $value);
            $dwellTotal = (int) $dwellSeconds->sum();
            $dwellAvg = $dwellSeconds->count() > 0 ? round($dwellTotal / $dwellSeconds->count(), 2) : 0;

            $dwellLt5 = $dwellSeconds->filter(fn ($seconds) => $seconds < 5)->count();
            $dwell5To20 = $dwellSeconds->filter(fn ($seconds) => $seconds >= 5 && $seconds < 20)->count();
            $dwell20To60 = $dwellSeconds->filter(fn ($seconds) => $seconds >= 20 && $seconds < 60)->count();
            $dwellGte60 = $dwellSeconds->filter(fn ($seconds) => $seconds >= 60)->count();
            $dwellQuality = $dwellSeconds->filter(fn ($seconds) => $seconds >= 20)->count();

            $scrollLogs = $this->latestLogsBySession($logs, BlogPostEventLog::EVENT_SCROLL);
            $scrollDepths = $scrollLogs->pluck('scroll_depth')->filter()->map(fn ($value) => (int) $value);
            $scrollAvg = $scrollDepths->count() > 0 ? round($scrollDepths->sum() / $scrollDepths->count(), 2) : 0;
            $scrollLt25 = $scrollDepths->filter(fn ($depth) => $depth < 25)->count();
            $scroll25To50 = $scrollDepths->filter(fn ($depth) => $depth >= 25 && $depth < 50)->count();
            $scroll50To75 = $scrollDepths->filter(fn ($depth) => $depth >= 50 && $depth < 75)->count();
            $scrollGte75 = $scrollDepths->filter(fn ($depth) => $depth >= 75)->count();
            $scrollQuality = $scrollDepths->filter(fn ($depth) => $depth >= 50)->count();

            $score = ($views * 1)
                + ($dwellQuality * 2)
                + ($scrollQuality * 2)
                + ($likes * 4)
                + ($linkCopies * 5)
                + ($shares * 6);

            BlogPostDailyStat::updateOrCreate(
                [
                    'blog_post_id' => $postId,
                    'stat_date' => $targetDate->toDateString(),
                ],
                [
                    'view_count' => $views,
                    'like_count' => $likes,
                    'link_copy_count' => $linkCopies,
                    'share_count' => $shares,
                    'dwell_total_seconds' => $dwellTotal,
                    'dwell_avg_seconds' => $dwellAvg,
                    'dwell_sessions_lt_5' => $dwellLt5,
                    'dwell_sessions_5_20' => $dwell5To20,
                    'dwell_sessions_20_60' => $dwell20To60,
                    'dwell_sessions_gte_60' => $dwellGte60,
                    'dwell_quality_sessions' => $dwellQuality,
                    'scroll_avg_depth' => $scrollAvg,
                    'scroll_sessions_lt_25' => $scrollLt25,
                    'scroll_sessions_25_50' => $scroll25To50,
                    'scroll_sessions_50_75' => $scroll50To75,
                    'scroll_sessions_gte_75' => $scrollGte75,
                    'scroll_quality_sessions' => $scrollQuality,
                    'score' => $score,
                ]
            );
        }
    }

    public function refreshRollingScoreAndRecommendations(): void
    {
        $fromDate = now()->subDays(29)->toDateString();

        $scoreRows = BlogPostDailyStat::query()
            ->select('blog_post_id', DB::raw('SUM(score) as score_30d'))
            ->where('stat_date', '>=', $fromDate)
            ->groupBy('blog_post_id')
            ->get();

        $scores = $scoreRows->pluck('score_30d', 'blog_post_id');
        BlogPost::query()->update(['score_30d' => 0]);

        foreach ($scores as $postId => $score) {
            BlogPost::where('id', $postId)->update([
                'score_30d' => (int) $score,
                'score_calculated_at' => now(),
            ]);
        }
    }

    public function getAutoRecommendedPosts(BlogPost $blogPost): Collection
    {
        $tags = $blogPost->tags ?? [];

        $baseQuery = BlogPost::query()
            ->where('id', '!=', $blogPost->id)
            ->where('is_published', true)
            ->whereNull('deleted_at');

        $candidateQuery = (clone $baseQuery)->where(function ($query) use ($blogPost, $tags) {
            $query->where('category', $blogPost->category);
            foreach ($tags as $tag) {
                $query->orWhereJsonContains('tags', $tag);
            }
        });

        $candidates = $candidateQuery
            ->orderByDesc('score_30d')
            ->orderByDesc('published_at')
            ->limit(5)
            ->get();

        if ($candidates->count() >= 5) {
            return $candidates;
        }

        $fallback = (clone $baseQuery)
            ->whereNotIn('id', $candidates->pluck('id')->all())
            ->orderByDesc('score_30d')
            ->orderByDesc('published_at')
            ->limit(5 - $candidates->count())
            ->get();

        return $candidates->concat($fallback);
    }

    private function latestLogsBySession(Collection $logs, string $eventType): Collection
    {
        return $logs->where('event_type', $eventType)
            ->groupBy('session_key')
            ->map(function (Collection $items) {
                return $items->sortByDesc('event_at')->first();
            })->values();
    }
}
