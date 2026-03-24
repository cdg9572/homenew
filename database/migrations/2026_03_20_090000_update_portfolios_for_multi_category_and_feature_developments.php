<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('portfolios', function (Blueprint $table) {
            if (! Schema::hasColumn('portfolios', 'categories')) {
                $table->json('categories')->nullable()->after('category');
            }

            $table->dropUnique('portfolios_category_unique');
        });

        if (! Schema::hasTable('portfolio_feature_developments')) {
            Schema::create('portfolio_feature_developments', function (Blueprint $table) {
                $table->id();
                $table->unsignedBigInteger('portfolio_id');
                $table->string('title')->nullable();
                $table->text('content')->nullable();
                $table->string('image_path')->nullable();
                $table->integer('sort_order')->default(0);
                $table->timestamps();

                $table->index(['portfolio_id', 'sort_order']);
                $table->foreign('portfolio_id')->references('id')->on('portfolios')->onDelete('cascade');
            });
        }

        $portfolios = DB::table('portfolios')->select(['id', 'category', 'feature_title', 'feature_content'])->get();

        foreach ($portfolios as $portfolio) {
            $categories = $portfolio->category ? [$portfolio->category] : [];

            DB::table('portfolios')
                ->where('id', $portfolio->id)
                ->update(['categories' => json_encode($categories, JSON_UNESCAPED_UNICODE)]);

            $hasFeature = ! empty($portfolio->feature_title) || ! empty($portfolio->feature_content);
            if ($hasFeature) {
                DB::table('portfolio_feature_developments')->insert([
                    'portfolio_id' => $portfolio->id,
                    'title' => $portfolio->feature_title,
                    'content' => $portfolio->feature_content,
                    'image_path' => null,
                    'sort_order' => 0,
                    'created_at' => now(),
                    'updated_at' => now(),
                ]);
            }
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        if (Schema::hasTable('portfolio_feature_developments')) {
            Schema::dropIfExists('portfolio_feature_developments');
        }

        Schema::table('portfolios', function (Blueprint $table) {
            if (Schema::hasColumn('portfolios', 'categories')) {
                $table->dropColumn('categories');
            }
            $table->unique('category');
        });
    }
};
