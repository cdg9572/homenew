<?php

use App\Services\BlogService;
use Illuminate\Foundation\Inspiring;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Schedule;

Artisan::command('inspire', function () {
    $this->comment(Inspiring::quote());
})->purpose('Display an inspiring quote');

Artisan::command('blog:aggregate-stats {--date=}', function (BlogService $blogService) {
    $dateOption = $this->option('date');
    $targetDate = $dateOption ? now()->parse($dateOption) : now()->subDay();

    $blogService->calculateAndStoreStats($targetDate);
    $blogService->refreshRollingScoreAndRecommendations();

    $this->info('블로그 집계가 완료되었습니다.');
})->purpose('블로그 이벤트 로그를 일 집계로 변환합니다.');

Schedule::command('blog:aggregate-stats')
    ->dailyAt('03:00');
