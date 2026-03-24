<?php

namespace App\Services\Backoffice;

use App\Models\BlogPost;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class BlogPostService
{
    public function getPaginatedList(Request $request): LengthAwarePaginator
    {
        $query = BlogPost::query();

        if ($request->filled('category')) {
            $query->where('category', $request->string('category')->toString());
        }

        if ($request->filled('keyword')) {
            $keyword = $request->string('keyword')->toString();
            $query->where('title', 'like', '%'.$keyword.'%');
        }

        $perPage = (int) $request->input('per_page', 10);
        if (! in_array($perPage, [10, 20, 50, 100], true)) {
            $perPage = 10;
        }

        return $query->orderByDesc('is_notice')
            ->orderByDesc('sort_order')
            ->orderByDesc('id')
            ->paginate($perPage)
            ->withQueryString();
    }

    public function create(array $payload): BlogPost
    {
        return DB::transaction(function () use ($payload) {
            $blogPost = BlogPost::create($this->mapPostData($payload));
            $this->syncSections($blogPost, $payload['sections'] ?? []);

            return $blogPost;
        });
    }

    public function update(BlogPost $blogPost, array $payload): BlogPost
    {
        return DB::transaction(function () use ($blogPost, $payload) {
            $blogPost->update($this->mapPostData($payload, $blogPost));
            $this->syncSections($blogPost, $payload['sections'] ?? []);

            return $blogPost->fresh(['sections']);
        });
    }

    public function delete(BlogPost $blogPost): void
    {
        if ($blogPost->thumbnail_path) {
            Storage::disk('public')->delete($blogPost->thumbnail_path);
        }

        $blogPost->delete();
    }

    private function mapPostData(array $payload, ?BlogPost $blogPost = null): array
    {
        $title = trim((string) ($payload['title'] ?? ''));
        $slug = $blogPost?->slug ?? BlogPost::makeSlug($title);
        $tags = $this->parseTags($payload['tags_input'] ?? '');

        if (! empty($payload['remove_thumbnail']) && $blogPost?->thumbnail_path) {
            Storage::disk('public')->delete($blogPost->thumbnail_path);
            $thumbnailPath = null;
        } elseif (! empty($payload['thumbnail'])) {
            if ($blogPost?->thumbnail_path) {
                Storage::disk('public')->delete($blogPost->thumbnail_path);
            }
            $thumbnailPath = $payload['thumbnail']->store('blog', 'public');
        } else {
            $thumbnailPath = $blogPost?->thumbnail_path;
        }

        return [
            'is_notice' => ! empty($payload['is_notice']),
            'category' => $payload['category'],
            'title' => $title,
            'slug' => $slug,
            'tags' => $tags,
            'thumbnail_path' => $thumbnailPath,
            'is_published' => ! empty($payload['is_published']),
            'sort_order' => (int) ($payload['sort_order'] ?? 0),
            'author_id' => Auth::id(),
            'published_at' => ! empty($payload['is_published']) ? now() : null,
        ];
    }

    private function syncSections(BlogPost $blogPost, array $sections): void
    {
        $blogPost->sections()->delete();

        foreach (array_values($sections) as $index => $section) {
            $subtitle = trim((string) ($section['subtitle'] ?? ''));
            $content = trim((string) ($section['content'] ?? ''));
            if ($subtitle === '' && $content === '') {
                continue;
            }

            $blogPost->sections()->create([
                'sort_order' => $index,
                'subtitle' => $subtitle !== '' ? $subtitle : null,
                'content' => $content !== '' ? $content : null,
            ]);
        }
    }

    private function parseTags(string $tagsInput): array
    {
        if (trim($tagsInput) === '') {
            return [];
        }

        $tags = preg_split('/\s+/', trim($tagsInput));
        $normalized = [];
        foreach ($tags as $tag) {
            $value = trim((string) $tag);
            if ($value === '') {
                continue;
            }
            if (! str_starts_with($value, '#')) {
                $value = '#'.$value;
            }
            $normalized[] = $value;
        }

        return array_values(array_unique($normalized));
    }
}
