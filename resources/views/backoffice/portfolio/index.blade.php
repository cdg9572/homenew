@extends('backoffice.layouts.app')

@section('title', '포트폴리오 관리')

@section('styles')
<link rel="stylesheet" href="{{ asset('css/backoffice/boards.css') }}">
<link rel="stylesheet" href="{{ asset('css/backoffice/portfolio.css') }}">
@endsection

@section('scripts')
<script src="{{ asset('js/backoffice/portfolio-index.js') }}"></script>
@endsection

@section('content')
@if (session('success'))
    <div class="alert alert-success board-hidden-alert">{{ session('success') }}</div>
@endif

<div class="board-container">
    <div class="board-page-header">
        <div class="board-page-buttons">
            <button type="button" id="btnDeleteMultiple" class="btn btn-danger">
                <i class="fas fa-trash"></i> 선택 삭제
            </button>
            <a href="{{ route('backoffice.portfolio.create') }}" class="btn btn-success">
                <i class="fas fa-plus"></i> 포트폴리오 등록
            </a>
        </div>
    </div>

    <div class="board-card">
        <div class="board-card-body">
            <div class="board-filter">
                <form method="GET" action="{{ route('backoffice.portfolio.index') }}" class="filter-form">
                    <div class="filter-row">
                        <div class="filter-group">
                            <label for="category" class="filter-label">카테고리</label>
                            <select id="category" name="category" class="filter-select">
                                <option value="">전체 카테고리</option>
                                @foreach($categories as $category)
                                    <option value="{{ $category }}" @selected(request('category') === $category)>{{ $category }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="filter-group">
                            <label for="keyword" class="filter-label">검색어</label>
                            <input id="keyword" type="text" name="keyword" value="{{ request('keyword') }}" class="filter-input" placeholder="제목 검색">
                        </div>
                        <div class="filter-group">
                            <div class="filter-buttons">
                                <button type="submit" class="btn btn-primary">
                                    <i class="fas fa-search"></i> 검색
                                </button>
                                <a href="{{ route('backoffice.portfolio.index') }}" class="btn btn-secondary">
                                    <i class="fas fa-undo"></i> 초기화
                                </a>
                            </div>
                        </div>
                    </div>
                </form>
            </div>

            <div class="board-list-header">
                <div class="list-info">
                    <span class="list-count">Total : {{ $portfolios->total() }}</span>
                </div>
                <div class="list-controls">
                    <form method="GET" action="{{ route('backoffice.portfolio.index') }}" class="per-page-form">
                        @foreach(request()->except('per_page') as $key => $value)
                            <input type="hidden" name="{{ $key }}" value="{{ $value }}">
                        @endforeach
                        <label for="per_page" class="per-page-label">표시 개수:</label>
                        <select id="per_page" name="per_page" class="per-page-select" onchange="this.form.submit()">
                            <option value="10" @selected((int) request('per_page', 10) === 10)>10개</option>
                            <option value="20" @selected((int) request('per_page') === 20)>20개</option>
                            <option value="50" @selected((int) request('per_page') === 50)>50개</option>
                            <option value="100" @selected((int) request('per_page') === 100)>100개</option>
                        </select>
                    </form>
                </div>
            </div>

            <form id="bulkDeleteForm" method="POST" action="{{ route('backoffice.portfolio.delete-multiple') }}">
                @csrf
                <div class="table-responsive">
                    <table class="board-table">
                        <thead>
                            <tr>
                                <th class="w5 board-checkbox-column">
                                    <input type="checkbox" id="select-all" class="form-check-input">
                                </th>
                                <th>No</th>
                                <th>카테고리</th>
                                <th>제목</th>
                                <th>노출순서</th>
                                <th>메인표시</th>
                                <th>상태</th>
                                <th>관리</th>
                            </tr>
                        </thead>
                        <tbody>
                        @forelse($portfolios as $index => $portfolio)
                            <tr>
                                <td>
                                    <input type="checkbox" name="ids[]" value="{{ $portfolio->id }}" class="form-check-input portfolio-checkbox">
                                </td>
                                <td>{{ $portfolios->total() - ($portfolios->currentPage() - 1) * $portfolios->perPage() - $index }}</td>
                                <td>{{ implode(', ', $portfolio->categories ?? array_filter([$portfolio->category])) }}</td>
                                <td>{{ $portfolio->title }}</td>
                                <td>{{ $portfolio->sort_order }}</td>
                                <td>{{ $portfolio->is_main_display ? 'Y' : 'N' }}</td>
                                <td>{{ $portfolio->is_active ? '노출' : '숨김' }}</td>
                                <td>
                                    <div class="board-btn-group">
                                        <a href="{{ route('backoffice.portfolio.edit', $portfolio) }}" class="btn btn-primary btn-sm">
                                            <i class="fas fa-edit"></i> 수정
                                        </a>
                                        <button class="btn btn-danger btn-sm btn-delete-single" type="button" data-action="{{ route('backoffice.portfolio.destroy', $portfolio) }}">
                                            <i class="fas fa-trash"></i> 삭제
                                        </button>
                                    </div>
                                </td>
                            </tr>
                        @empty
                            <tr><td colspan="8" class="text-center">데이터가 없습니다.</td></tr>
                        @endforelse
                        </tbody>
                    </table>
                </div>
            </form>
            <form id="singleDeleteForm" method="POST" style="display:none;">
                @csrf
                @method('DELETE')
            </form>
            <x-pagination :paginator="$portfolios" />
        </div>
    </div>
</div>
@endsection

