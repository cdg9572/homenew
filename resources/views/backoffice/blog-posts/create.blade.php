@extends('backoffice.layouts.app')

@section('title', '블로그 등록')

@section('styles')
<link rel="stylesheet" href="{{ asset('css/backoffice/boards.css') }}">
<link rel="stylesheet" href="{{ asset('css/backoffice/portfolio.css') }}">
<link rel="stylesheet" href="{{ asset('css/backoffice/blog-posts.css') }}">
@endsection

@section('content')
<div class="board-container">
    <div class="board-header">
        <a href="{{ route('backoffice.blog-posts.index') }}" class="btn btn-secondary btn-sm">
            <i class="fas fa-arrow-left"></i> 목록으로
        </a>
    </div>
    <div class="board-card">
        <div class="board-card-body">
            @include('backoffice.blog-posts.form', ['categories' => $categories])
        </div>
    </div>
</div>
@endsection

@section('scripts')
<script src="{{ asset('js/backoffice/blog-post-form.js') }}"></script>
@endsection
