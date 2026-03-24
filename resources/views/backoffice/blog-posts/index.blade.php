@extends('backoffice.layouts.app')

@section('title', '블로그 관리')

@section('styles')
<link rel="stylesheet" href="{{ asset('css/backoffice/boards.css') }}">
@endsection

@section('content')
@if (session('success'))
    <div class="alert alert-success board-hidden-alert">{{ session('success') }}</div>
@endif

<div class="board-container">
    <div class="board-page-header">
        <div class="board-page-buttons">
            <a href="{{ route('backoffice.blog-posts.create') }}" class="btn btn-success">
                <i class="fas fa-plus"></i> 블로그 등록
            </a>
        </div>
    </div>

    <div class="board-card">
        <div class="board-card-body">
            <div class="board-filter">
                <form method="GET" action="{{ route('backoffice.blog-posts.index') }}" class="filter-form">
                    <div class="filter-row">
                        <div class="filter-group">
                            <label for="category" class="filter-label">카테고리</label>
                            <select id="category" name="category" class="filter-select">
                                <option value="">전체</option>
                                @foreach($categories as $value => $label)
                                    <option value="{{ $value }}" @selected(request('category') === $value)>{{ $label }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="filter-group">
                            <label for="keyword" class="filter-label">검색어</label>
                            <input id="keyword" type="text" name="keyword" value="{{ request('keyword') }}" class="filter-input" placeholder="제목 검색">
                        </div>
                        <div class="filter-group">
                            <div class="filter-buttons">
                                <button type="submit" class="btn btn-primary"><i class="fas fa-search"></i> 검색</button>
                                <a href="{{ route('backoffice.blog-posts.index') }}" class="btn btn-secondary"><i class="fas fa-undo"></i> 초기화</a>
                            </div>
                        </div>
                    </div>
                </form>
            </div>

            <div class="board-list-header">
                <div class="list-info">
                    <span class="list-count">Total : {{ $posts->total() }}</span>
                </div>
            </div>

            <div class="table-responsive">
                <table class="board-table">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>공지</th>
                            <th>카테고리</th>
                            <th>제목</th>
                            <th>30일 점수</th>
                            <th>노출</th>
                            <th>관리</th>
                        </tr>
                    </thead>
                    <tbody>
                    @forelse($posts as $index => $post)
                        <tr>
                            <td>{{ $posts->total() - ($posts->currentPage() - 1) * $posts->perPage() - $index }}</td>
                            <td>{{ $post->is_notice ? 'Y' : 'N' }}</td>
                            <td>{{ $post->category_label }}</td>
                            <td>{{ $post->title }}</td>
                            <td>{{ number_format($post->score_30d) }}</td>
                            <td>{{ $post->is_published ? '노출' : '비노출' }}</td>
                            <td>
                                <div class="board-btn-group">
                                    <a href="{{ route('backoffice.blog-posts.edit', $post) }}" class="btn btn-primary btn-sm"><i class="fas fa-edit"></i> 수정</a>
                                    <form action="{{ route('backoffice.blog-posts.destroy', $post) }}" method="POST" onsubmit="return confirm('삭제하시겠습니까?');">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i> 삭제</button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @empty
                        <tr><td colspan="7" class="text-center">데이터가 없습니다.</td></tr>
                    @endforelse
                    </tbody>
                </table>
            </div>
            <x-pagination :paginator="$posts" />
        </div>
    </div>
</div>
@endsection
