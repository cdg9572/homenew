<?php

use App\Http\Controllers\Auth\ForgotPasswordController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\ResetPasswordController;
use App\Http\Controllers\Backoffice\PopupController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SubController;
use Illuminate\Support\Facades\Route;

// =============================================================================
// 기본 라우트 파일
// =============================================================================

// 메인 페이지
Route::get('/', [HomeController::class, 'index'])->name('home');

// 사용자 페이지 라우트
Route::prefix('service')->name('service.')->group(function () {
    Route::get('/homepage-seo-geo', [SubController::class, 'homepage_seo_geo'])->name('homepage-seo-geo');
    Route::get('/homepage-development', [SubController::class, 'homepage_development'])->name('homepage-development');
    Route::get('/website-maintenance', [SubController::class, 'website_maintenance'])->name('website-maintenance');
    Route::get('/ecommerce-website-development', [SubController::class, 'ecommerce_website_development'])->name('ecommerce-website-development');
    Route::get('/integrated-si-system-development', [SubController::class, 'integrated_si_system_development'])->name('integrated-si-system-development');
    Route::get('/mobile-app-development', [SubController::class, 'mobile_app_development'])->name('mobile-app-development');
    Route::get('/ai-solution', [SubController::class, 'ai_solution'])->name('ai-solution');
});

Route::prefix('industries')->name('industries.')->group(function () {
    Route::get('/enterprise', [SubController::class, 'enterprise'])->name('enterprise');
    Route::get('/academic-association', [SubController::class, 'academic_association'])->name('academic-association');
    Route::get('/government', [SubController::class, 'government'])->name('government');
    Route::get('/hospital-medical-website-development', [SubController::class, 'hospital_medical_website_development'])->name('hospital-medical-website-development');
    Route::get('/university-research-lab-website', [SubController::class, 'university_research_lab_website'])->name('university-research-lab-website');
});

Route::prefix('portfolio')->name('portfolio.')->group(function () {
    Route::get('/', [SubController::class, 'portfolio_list'])->name('portfolio_list');
    Route::get('/view/{portfolio?}', [SubController::class, 'portfolio_view'])->name('portfolio_view');
});

Route::prefix('blog')->name('blog.')->group(function () {
    Route::get('/', [SubController::class, 'blog_list'])->name('blog_list');
    Route::get('/view/{slug?}', [SubController::class, 'blog_view'])->name('blog_view');
});

Route::prefix('contact')->name('contact.')->group(function () {
    Route::get('/', [SubController::class, 'contact'])->name('contact');
    Route::post('/', [ContactController::class, 'store'])
        ->middleware('throttle:12,1')
        ->name('store');
});

// 팝업 표시 (일반 팝업용)
Route::get('/popup/{popup}', [PopupController::class, 'showPopup'])->name('popup.show');

// 인증 관련 라우트
Route::prefix('auth')->name('auth.')->group(function () {
    // 로그인
    Route::get('/login', [LoginController::class, 'showLoginForm'])
        ->name('login');
    Route::post('/login', [LoginController::class, 'login']);
    Route::post('/logout', [LoginController::class, 'logout'])
        ->name('logout');

    // 회원가입
    Route::get('/register', [RegisterController::class, 'showRegistrationForm'])
        ->name('register');
    Route::post('/register', [RegisterController::class, 'register']);

    // 비밀번호 재설정
    Route::prefix('password')->name('password.')->group(function () {
        Route::get('/reset', [ForgotPasswordController::class, 'showLinkRequestForm'])
            ->name('request');
        Route::post('/email', [ForgotPasswordController::class, 'sendResetLinkEmail'])
            ->name('email');
        Route::get('/reset/{token}', [ResetPasswordController::class, 'showResetForm'])
            ->name('reset');
        Route::post('/reset', [ResetPasswordController::class, 'reset'])
            ->name('update');
    });
});

// =============================================================================
// 분리된 라우트 파일들 포함
// =============================================================================

// 백오피스 라우트 (관리자 전용)
require __DIR__.'/backoffice.php';
