@php
    $blogPost = $blogPost ?? null;
    $isEdit = (bool) $blogPost;
    $action = $isEdit ? route('backoffice.blog-posts.update', $blogPost) : route('backoffice.blog-posts.store');
    $sections = old('sections', $isEdit ? $blogPost->sections->toArray() : [['subtitle' => '', 'content' => '']]);
    $tagsInput = old('tags_input', $isEdit ? implode(' ', $blogPost->tags ?? []) : '');
@endphp

@if ($errors->any())
    <div class="alert alert-danger board-hidden-alert">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="{{ $action }}" method="POST" enctype="multipart/form-data" id="blogPostForm">
    @csrf
    @if($isEdit)
        @method('PUT')
    @endif

    <div class="member-form-section">
        <h3 class="member-section-title">기본 정보</h3>
        <div class="member-form-list">
            <div class="member-form-row">
                <label class="member-form-label">공지 여부</label>
                <div class="member-form-field">
                    <label class="checkbox-label">
                        <input type="checkbox" name="is_notice" value="1" @checked(old('is_notice', $blogPost->is_notice ?? false))>
                        <span>공지</span>
                    </label>
                </div>
            </div>

            <div class="member-form-row">
                <label class="member-form-label">카테고리 <span class="required">*</span></label>
                <div class="member-form-field">
                    <div class="board-checkbox-group">
                        @foreach($categories as $value => $label)
                            <label class="checkbox-label">
                                <input type="radio" name="category" value="{{ $value }}" @checked(old('category', $blogPost->category ?? '') === $value) required>
                                <span>{{ $label }}</span>
                            </label>
                        @endforeach
                    </div>
                </div>
            </div>

            <div class="member-form-row">
                <label class="member-form-label">제목 <span class="required">*</span></label>
                <div class="member-form-field">
                    <input type="text" class="board-form-control" name="title" value="{{ old('title', $blogPost->title ?? '') }}" required>
                </div>
            </div>

            <div class="member-form-row">
                <label class="member-form-label">태그</label>
                <div class="member-form-field">
                    <input type="text" class="board-form-control" name="tags_input" value="{{ $tagsInput }}" placeholder="#팀스토리 #홈페이지">
                    <p class="text-muted">추천 콘텐츠는 동일 카테고리·태그 기준으로 자동 노출됩니다.</p>
                </div>
            </div>

            <div class="member-form-row">
                <label class="member-form-label">썸네일 이미지</label>
                <div class="member-form-field">
                    <div class="board-file-upload">
                        <div class="board-file-input-wrapper">
                            <input type="file" class="board-file-input" id="blog_post_thumbnail" name="thumbnail" accept="image/*">
                            <div class="board-file-input-content">
                                <i class="fas fa-cloud-upload-alt"></i>
                                <span class="board-file-input-text">썸네일 파일을 선택하거나 드래그하세요</span>
                                <span class="board-file-input-subtext">이미지 파일 1개</span>
                            </div>
                        </div>
                        <div class="board-file-preview" id="blogPostThumbnailPreview"></div>
                        @if($isEdit && !empty($blogPost->thumbnail_path))
                            <div class="board-existing-files blog-existing-thumbnail">
                                <div class="board-attachment-list">
                                    <div class="board-attachment-item existing-file">
                                        <i class="fas fa-file-image"></i>
                                        <span class="board-attachment-name">{{ basename($blogPost->thumbnail_path) }}</span>
                                    </div>
                                </div>
                            </div>
                            <label class="checkbox-label blog-remove-thumbnail-check">
                                <input type="checkbox" name="remove_thumbnail" value="1">
                                <span>기존 썸네일 삭제</span>
                            </label>
                        @endif
                    </div>
                </div>
            </div>

            <div class="member-form-row">
                <label class="member-form-label">노출 여부</label>
                <div class="member-form-field">
                    <label class="checkbox-label">
                        <input type="checkbox" name="is_published" value="1" @checked(old('is_published', $blogPost->is_published ?? true))>
                        <span>노출</span>
                    </label>
                </div>
            </div>
        </div>
    </div>

    <div class="member-form-section">
        <h3 class="member-section-title">목차·본문 (최대 10구간)</h3>
        <p class="text-muted">「목차 제목」은 상세 CONTENTS에만 표시되며, 클릭 시 해당 「본문」 위치로 이동합니다. 목차에 올리지 않을 구간은 목차 제목을 비우고 본문만 입력하면 됩니다.</p>
        <div id="blogSectionsWrap">
            @foreach($sections as $index => $section)
                <div class="review-row blog-section-row">
                    <div class="review-row-grid">
                        <input type="text" class="board-form-control" name="sections[{{ $index }}][subtitle]" value="{{ $section['subtitle'] ?? '' }}" placeholder="목차 제목 (CONTENTS에 표시)">
                    </div>
                    <textarea class="board-form-control board-textarea" name="sections[{{ $index }}][content]" rows="5" placeholder="본문 (해당 위치에 출력)">{{ $section['content'] ?? '' }}</textarea>
                    <button type="button" class="btn btn-danger btn-sm remove-blog-section">구간 삭제</button>
                </div>
            @endforeach
        </div>
        <button type="button" class="btn btn-secondary btn-sm" id="addBlogSectionBtn">구간 추가</button>
    </div>

    <div class="board-form-actions">
        <button type="submit" class="btn btn-primary">저장</button>
        <a href="{{ route('backoffice.blog-posts.index') }}" class="btn btn-secondary">취소</a>
    </div>
</form>
