@extends('backoffice.layouts.app')

@section('title', '포트폴리오 수정')

@section('styles')
<link rel="stylesheet" href="{{ asset('css/backoffice/boards.css') }}">
<link rel="stylesheet" href="{{ asset('css/backoffice/portfolio.css') }}">
@endsection

@section('content')
<div class="board-container">
    <div class="board-header">
        <a href="{{ route('backoffice.portfolio.index') }}" class="btn btn-secondary btn-sm">
            <i class="fas fa-arrow-left"></i> 목록으로
        </a>
    </div>

    <div class="board-card">
        <div class="board-card-body">
            @include('backoffice.portfolio.form', ['portfolio' => $portfolio])
        </div>
    </div>
</div>
@endsection

@section('scripts')
    <x-backoffice-ckeditor-assets />
@endsection

