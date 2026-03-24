<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Str;

class BlogPost extends Model
{
    use SoftDeletes;

    public const CATEGORY_TEAM_STORY = 'team_story';
    public const CATEGORY_WEB_INSIGHT = 'web_insight';
    public const CATEGORY_HOMEPAGE_TREND = 'homepage_trend';
    public const CATEGORY_SUCCESS_CASE = 'success_case';

    public const CATEGORIES = [
        self::CATEGORY_TEAM_STORY => '팀스토리',
        self::CATEGORY_WEB_INSIGHT => '웹 개발 인사이트',
        self::CATEGORY_HOMEPAGE_TREND => '홈페이지 트렌드',
        self::CATEGORY_SUCCESS_CASE => '성공사례',
    ];

    protected $fillable = [
        'is_notice',
        'category',
        'title',
        'slug',
        'tags',
        'thumbnail_path',
        'is_published',
        'sort_order',
        'author_id',
        'published_at',
        'score_30d',
        'score_calculated_at',
    ];

    protected $casts = [
        'is_notice' => 'boolean',
        'tags' => 'array',
        'is_published' => 'boolean',
        'published_at' => 'datetime',
        'score_calculated_at' => 'datetime',
    ];

    public function sections(): HasMany
    {
        return $this->hasMany(BlogPostSection::class)->orderBy('sort_order');
    }

    public function recommendations(): HasMany
    {
        return $this->hasMany(BlogPostRecommendation::class)->orderBy('sort_order');
    }

    public function recommendedPosts(): BelongsToMany
    {
        return $this->belongsToMany(
            BlogPost::class,
            'blog_post_recommendations',
            'blog_post_id',
            'recommended_post_id'
        )->withPivot('sort_order')->orderByPivot('sort_order');
    }

    public function dailyStats(): HasMany
    {
        return $this->hasMany(BlogPostDailyStat::class);
    }

    public function eventLogs(): HasMany
    {
        return $this->hasMany(BlogPostEventLog::class);
    }

    public function getCategoryLabelAttribute(): string
    {
        return self::CATEGORIES[$this->category] ?? $this->category;
    }

    public static function makeSlug(string $title): string
    {
        $base = Str::slug($title);
        if ($base === '') {
            $base = 'blog-post';
        }

        return $base.'-'.Str::lower(Str::random(6));
    }
}
