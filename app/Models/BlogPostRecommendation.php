<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class BlogPostRecommendation extends Model
{
    protected $fillable = [
        'blog_post_id',
        'recommended_post_id',
        'sort_order',
    ];

    public function blogPost(): BelongsTo
    {
        return $this->belongsTo(BlogPost::class);
    }

    public function recommendedPost(): BelongsTo
    {
        return $this->belongsTo(BlogPost::class, 'recommended_post_id');
    }
}
