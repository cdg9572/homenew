<?php

namespace App\Console\Commands;

use App\Services\BlogService;
use Illuminate\Console\Command;

class AggregateBlogStatsCommand extends Command
{
    protected $signature = 'blog:aggregate-stats {--date=}';

    protected $description = '블로그 이벤트를 일일 집계하고 최근 30일 점수를 갱신합니다.';

    public function handle(BlogService $blogService): int
    {
        $dateOption = $this->option('date');
        $targetDate = $dateOption ? now()->parse($dateOption) : now()->subDay();

        $blogService->calculateAndStoreStats($targetDate);
        $blogService->refreshRollingScoreAndRecommendations();

        $this->info('블로그 집계가 완료되었습니다.');

        return self::SUCCESS;
    }
}
