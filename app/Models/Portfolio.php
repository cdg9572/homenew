<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Portfolio extends Model
{
    use SoftDeletes;

    public const CATEGORIES = [
        '중견/대기업',
        '학회/협회',
        '공공기관',
        '병원/의료',
        '대학/학원',
        '일반',
    ];

    protected $fillable = [
        'category',
        'categories',
        'development_summary',
        'title',
        'keywords',
        'thumbnail_image',
        'sort_order',
        'is_main_display',
        'is_active',
        'detail_summary',
        'detail_editor',
        'site_url',
        'problem_title',
        'problem_content',
        'solution_title',
        'solution_content',
        'solution_before_image',
        'solution_after_image',
    ];

    protected $casts = [
        'categories' => 'array',
        'keywords' => 'array',
        'is_main_display' => 'boolean',
        'is_active' => 'boolean',
    ];

    public function featureImages(): HasMany
    {
        return $this->hasMany(PortfolioFeatureImage::class)->orderBy('sort_order');
    }

    public function reviews(): HasMany
    {
        return $this->hasMany(PortfolioReview::class)->orderBy('sort_order');
    }

    public function featureDevelopments(): HasMany
    {
        return $this->hasMany(PortfolioFeatureDevelopment::class)->orderBy('sort_order');
    }
}
