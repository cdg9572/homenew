<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class BlogPostEventLog extends Model
{
    public const EVENT_VIEW = 'view';
    public const EVENT_DWELL = 'dwell';
    public const EVENT_SCROLL = 'scroll';
    public const EVENT_LIKE = 'like';
    public const EVENT_LINK_COPY = 'link_copy';
    public const EVENT_SHARE = 'share';

    public const EVENTS = [
        self::EVENT_VIEW,
        self::EVENT_DWELL,
        self::EVENT_SCROLL,
        self::EVENT_LIKE,
        self::EVENT_LINK_COPY,
        self::EVENT_SHARE,
    ];

    protected $fillable = [
        'blog_post_id',
        'event_type',
        'session_key',
        'dwell_seconds',
        'scroll_depth',
        'ip_address',
        'user_agent',
        'event_at',
    ];

    protected $casts = [
        'event_at' => 'datetime',
    ];

    public function blogPost(): BelongsTo
    {
        return $this->belongsTo(BlogPost::class);
    }
}
