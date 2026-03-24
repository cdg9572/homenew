<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (! Schema::hasTable('blog_posts')) {
            Schema::create('blog_posts', function (Blueprint $table) {
                $table->id();
                $table->boolean('is_notice')->default(false);
                $table->string('category', 50);
                $table->string('title', 255);
                $table->string('slug', 255)->unique();
                $table->json('tags')->nullable();
                $table->string('thumbnail_path', 255)->nullable();
                $table->boolean('is_published')->default(true);
                $table->integer('sort_order')->default(0);
                $table->unsignedBigInteger('author_id')->nullable();
                $table->timestamp('published_at')->nullable();
                $table->timestamp('score_calculated_at')->nullable();
                $table->integer('score_30d')->default(0);
                $table->timestamps();
                $table->softDeletes();

                $table->index(['is_published', 'is_notice']);
                $table->index(['category', 'is_published']);
                $table->index('published_at');
                $table->index('score_30d');
            });
        }

        if (! Schema::hasTable('blog_post_sections')) {
            Schema::create('blog_post_sections', function (Blueprint $table) {
                $table->id();
                $table->foreignId('blog_post_id')->constrained('blog_posts')->cascadeOnDelete();
                $table->unsignedTinyInteger('sort_order')->default(0);
                $table->string('subtitle', 255)->nullable();
                $table->longText('content')->nullable();
                $table->timestamps();

                $table->index(['blog_post_id', 'sort_order']);
            });
        }

        if (! Schema::hasTable('blog_post_recommendations')) {
            Schema::create('blog_post_recommendations', function (Blueprint $table) {
                $table->id();
                $table->foreignId('blog_post_id')->constrained('blog_posts')->cascadeOnDelete();
                $table->foreignId('recommended_post_id')->constrained('blog_posts')->cascadeOnDelete();
                $table->unsignedTinyInteger('sort_order')->default(0);
                $table->timestamps();

                $table->unique(['blog_post_id', 'recommended_post_id'], 'blog_post_recommend_unique');
                $table->index(['blog_post_id', 'sort_order']);
            });
        }

        if (! Schema::hasTable('blog_post_event_logs')) {
            Schema::create('blog_post_event_logs', function (Blueprint $table) {
                $table->id();
                $table->foreignId('blog_post_id')->constrained('blog_posts')->cascadeOnDelete();
                $table->string('event_type', 32);
                $table->string('session_key', 128);
                $table->unsignedInteger('dwell_seconds')->nullable();
                $table->unsignedTinyInteger('scroll_depth')->nullable();
                $table->string('ip_address', 45)->nullable();
                $table->text('user_agent')->nullable();
                $table->timestamp('event_at');
                $table->timestamps();

                $table->index(['blog_post_id', 'event_type', 'event_at']);
                $table->index(['event_type', 'event_at']);
                $table->index(['blog_post_id', 'session_key', 'event_at']);
            });
        }

        if (! Schema::hasTable('blog_post_daily_stats')) {
            Schema::create('blog_post_daily_stats', function (Blueprint $table) {
                $table->id();
                $table->foreignId('blog_post_id')->constrained('blog_posts')->cascadeOnDelete();
                $table->date('stat_date');
                $table->unsignedInteger('view_count')->default(0);
                $table->unsignedInteger('like_count')->default(0);
                $table->unsignedInteger('link_copy_count')->default(0);
                $table->unsignedInteger('share_count')->default(0);
                $table->unsignedInteger('dwell_total_seconds')->default(0);
                $table->decimal('dwell_avg_seconds', 10, 2)->default(0);
                $table->unsignedInteger('dwell_sessions_lt_5')->default(0);
                $table->unsignedInteger('dwell_sessions_5_20')->default(0);
                $table->unsignedInteger('dwell_sessions_20_60')->default(0);
                $table->unsignedInteger('dwell_sessions_gte_60')->default(0);
                $table->unsignedInteger('dwell_quality_sessions')->default(0);
                $table->decimal('scroll_avg_depth', 5, 2)->default(0);
                $table->unsignedInteger('scroll_sessions_lt_25')->default(0);
                $table->unsignedInteger('scroll_sessions_25_50')->default(0);
                $table->unsignedInteger('scroll_sessions_50_75')->default(0);
                $table->unsignedInteger('scroll_sessions_gte_75')->default(0);
                $table->unsignedInteger('scroll_quality_sessions')->default(0);
                $table->integer('score')->default(0);
                $table->timestamps();

                $table->unique(['blog_post_id', 'stat_date']);
                $table->index(['stat_date', 'score']);
            });
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('blog_post_daily_stats');
        Schema::dropIfExists('blog_post_event_logs');
        Schema::dropIfExists('blog_post_recommendations');
        Schema::dropIfExists('blog_post_sections');
        Schema::dropIfExists('blog_posts');
    }
};
