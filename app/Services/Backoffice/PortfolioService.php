<?php

namespace App\Services\Backoffice;

use App\Models\Portfolio;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class PortfolioService
{
    public function getPortfolios(Request $request)
    {
        $query = Portfolio::query()->with(['featureDevelopments', 'reviews']);

        if ($request->filled('category')) {
            $query->whereJsonContains('categories', $request->category);
        }
        if ($request->filled('keyword')) {
            $query->where('title', 'like', '%'.$request->keyword.'%');
        }

        $perPage = (int) $request->get('per_page', 10);
        if (! in_array($perPage, [10, 20, 50, 100], true)) {
            $perPage = 10;
        }

        return $query->orderBy('sort_order', 'desc')->orderBy('id', 'desc')->paginate($perPage);
    }

    public function create(array $data): Portfolio
    {
        return DB::transaction(function () use ($data) {
            $portfolio = Portfolio::create($this->mapPortfolioData($data));
            $this->syncReviews($portfolio, $data['reviews'] ?? []);
            $this->syncFeatureDevelopments($portfolio, $data['feature_developments'] ?? []);

            return $portfolio;
        });
    }

    public function update(Portfolio $portfolio, array $data): Portfolio
    {
        return DB::transaction(function () use ($portfolio, $data) {
            $portfolio->update($this->mapPortfolioData($data));
            $this->syncReviews($portfolio, $data['reviews'] ?? []);
            $this->syncFeatureDevelopments($portfolio, $data['feature_developments'] ?? []);

            return $portfolio->fresh(['featureDevelopments', 'reviews']);
        });
    }

    public function delete(Portfolio $portfolio): void
    {
        foreach ([$portfolio->thumbnail_image, $portfolio->solution_before_image, $portfolio->solution_after_image] as $file) {
            if ($file) {
                Storage::disk('public')->delete($file);
            }
        }
        foreach ($portfolio->featureImages as $image) {
            Storage::disk('public')->delete($image->image_path);
        }
        foreach ($portfolio->featureDevelopments as $featureDevelopment) {
            if ($featureDevelopment->image_path) {
                Storage::disk('public')->delete($featureDevelopment->image_path);
            }
        }
        $portfolio->delete();
    }

    public function updateOrder(array $payload): void
    {
        foreach ($payload as $row) {
            if (! isset($row['id'], $row['order'])) {
                continue;
            }
            Portfolio::where('id', $row['id'])->update(['sort_order' => (int) $row['order']]);
        }
    }

    public function deleteMultiple(array $ids): int
    {
        $portfolios = Portfolio::whereIn('id', $ids)->with(['featureImages'])->get();

        foreach ($portfolios as $portfolio) {
            $this->delete($portfolio);
        }

        return $portfolios->count();
    }

    private function mapPortfolioData(array $data): array
    {
        return [
            'category' => $data['category'],
            'categories' => $data['categories'] ?? [],
            'development_summary' => $data['development_summary'] ?? null,
            'title' => $data['title'],
            'keywords' => $data['keywords'] ?? [],
            'thumbnail_image' => $data['thumbnail_image'] ?? null,
            'sort_order' => (int) ($data['sort_order'] ?? 0),
            'is_main_display' => (bool) ($data['is_main_display'] ?? false),
            'is_active' => (bool) ($data['is_active'] ?? true),
            'detail_summary' => $data['detail_summary'] ?? null,
            'detail_editor' => $data['detail_editor'] ?? null,
            'site_url' => $data['site_url'] ?? null,
            'problem_title' => $data['problem_title'] ?? null,
            'problem_content' => $data['problem_content'] ?? null,
            'solution_title' => $data['solution_title'] ?? null,
            'solution_content' => $data['solution_content'] ?? null,
            'solution_before_image' => $data['solution_before_image'] ?? null,
            'solution_after_image' => $data['solution_after_image'] ?? null,
        ];
    }

    private function syncReviews(Portfolio $portfolio, array $reviews): void
    {
        $portfolio->reviews()->delete();
        foreach (array_values($reviews) as $idx => $review) {
            if (empty($review['title']) && empty($review['manager_name']) && empty($review['content'])) {
                continue;
            }
            $portfolio->reviews()->create([
                'title' => $review['title'] ?? null,
                'manager_name' => $review['manager_name'] ?? null,
                'content' => $review['content'] ?? null,
                'sort_order' => $idx,
            ]);
        }
    }

    private function syncFeatureDevelopments(Portfolio $portfolio, array $featureDevelopments): void
    {
        foreach ($portfolio->featureDevelopments as $featureDevelopment) {
            if ($featureDevelopment->image_path) {
                Storage::disk('public')->delete($featureDevelopment->image_path);
            }
        }
        $portfolio->featureDevelopments()->delete();

        foreach (array_values($featureDevelopments) as $idx => $featureDevelopment) {
            if (
                empty($featureDevelopment['title']) &&
                empty($featureDevelopment['content']) &&
                empty($featureDevelopment['image_path'])
            ) {
                continue;
            }
            $portfolio->featureDevelopments()->create([
                'title' => $featureDevelopment['title'] ?? null,
                'content' => $featureDevelopment['content'] ?? null,
                'image_path' => $featureDevelopment['image_path'] ?? null,
                'sort_order' => $idx,
            ]);
        }
    }
}
