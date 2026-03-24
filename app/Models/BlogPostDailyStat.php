<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class BlogPostDailyStat extends Model
{
    protected $fillable = [
        'blog_post_id',
        'stat_date',
        'view_count',
        'like_count',
        'link_copy_count',
        'share_count',
        'dwell_total_seconds',
        'dwell_avg_seconds',
        'dwell_sessions_lt_5',
        'dwell_sessions_5_20',
        'dwell_sessions_20_60',
        'dwell_sessions_gte_60',
        'dwell_quality_sessions',
        'scroll_avg_depth',
        'scroll_sessions_lt_25',
        'scroll_sessions_25_50',
        'scroll_sessions_50_75',
        'scroll_sessions_gte_75',
        'scroll_quality_sessions',
        'score',
    ];

    protected $casts = [
        'stat_date' => 'date',
    ];

    public function blogPost(): BelongsTo
    {
        return $this->belongsTo(BlogPost::class);
    }
}
