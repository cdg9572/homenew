@php
    $portfolio = $portfolio ?? null;
    $isEdit = (bool) $portfolio;
    $action = $isEdit ? route('backoffice.portfolio.update', $portfolio) : route('backoffice.portfolio.store');
    $method = $isEdit ? 'PUT' : 'POST';
    $keywords = old('keywords_input', $isEdit ? implode(' ', $portfolio->keywords ?? []) : '');
    $selectedCategories = old('categories', $isEdit ? ($portfolio->categories ?? array_filter([$portfolio->category])) : []);
    $featureDevelopments = old(
        'feature_developments',
        $isEdit
            ? (
                ($portfolio->featureDevelopments->count() > 0)
                    ? $portfolio->featureDevelopments->map(fn($item) => [
                        'title' => $item->title,
                        'content' => $item->content,
                        'existing_image_path' => $item->image_path,
                    ])->toArray()
                    : [['title' => $portfolio->feature_title ?? '', 'content' => $portfolio->feature_content ?? '', 'existing_image_path' => null]]
            )
            : [['title' => '', 'content' => '', 'existing_image_path' => null]]
    );
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

<form action="{{ $action }}" method="POST" enctype="multipart/form-data" id="portfolioForm">
    @csrf
    @if($isEdit) @method($method) @endif

    <div class="member-form-section">
        <h3 class="member-section-title">기본 정보</h3>

        <div class="member-form-list">
            <div class="member-form-row">
                <label class="member-form-label">카테고리 <span class="required">*</span></label>
                <div class="member-form-field">
                    <div class="board-checkbox-group">
                        @foreach($categories as $category)
                            <label class="checkbox-label">
                                <input type="checkbox" name="categories[]" value="{{ $category }}" @checked(in_array($category, $selectedCategories, true))>
                                <span>{{ $category }}</span>
                            </label>
                        @endforeach
                    </div>
                </div>
            </div>

            <div class="member-form-row">
                <label class="member-form-label">주요 개발 내용</label>
                <div class="member-form-field">
                    <input type="text" class="board-form-control" name="development_summary" value="{{ old('development_summary', $portfolio->development_summary ?? '') }}">
                </div>
            </div>

            <div class="member-form-row">
                <label class="member-form-label">제목 <span class="required">*</span></label>
                <div class="member-form-field">
                    <input type="text" class="board-form-control" name="title" required value="{{ old('title', $portfolio->title ?? '') }}">
                </div>
            </div>

            <div class="member-form-row">
                <label class="member-form-label">키워드(# 구분)</label>
                <div class="member-form-field">
                    <input type="text" class="board-form-control" name="keywords_input" value="{{ $keywords }}" placeholder="#유지보수 #통합SI시스템개발">
                </div>
            </div>

            <div class="member-form-row">
                <label class="member-form-label">썸네일 이미지</label>
                <div class="member-form-field">
                    <div class="board-file-upload">
                        <div class="board-file-input-wrapper">
                            <input type="file" class="board-file-input" id="thumbnail_image" name="thumbnail_image" accept="image/*">
                            <div class="board-file-input-content">
                                <i class="fas fa-cloud-upload-alt"></i>
                                <span class="board-file-input-text">썸네일 파일을 선택하거나 드래그하세요</span>
                                <span class="board-file-input-subtext">이미지 파일 1개</span>
                            </div>
                        </div>
                        <div class="board-file-preview" id="thumbnailPreview"></div>
                        @if($isEdit && !empty($portfolio->thumbnail_image))
                            <div class="board-existing-files">
                                <div class="board-attachment-list">
                                    <div class="board-attachment-item existing-file" data-existing-file="thumbnail">
                                        <i class="fas fa-file-image"></i>
                                        <span class="board-attachment-name">{{ basename($portfolio->thumbnail_image) }}</span>
                                        <button type="button" class="board-attachment-remove remove-existing-file" data-target="thumbnail">
                                            <i class="fas fa-times"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <input type="hidden" name="remove_thumbnail_image" id="remove_thumbnail_image" value="0">
                        @endif
                    </div>
                </div>
            </div>

            <div class="member-form-row">
                <label class="member-form-label">메인 노출 여부</label>
                <div class="member-form-field">
                    <div class="board-checkbox-group">
                        <label class="checkbox-label">
                            <input type="checkbox" name="is_main_display" value="1" @checked(old('is_main_display', $portfolio->is_main_display ?? false))>
                            <span>메인 노출</span>
                        </label>
                    </div>
                </div>
            </div>

            <div class="member-form-row">
                <label class="member-form-label">노출 설정 여부</label>
                <div class="member-form-field">
                    <div class="board-checkbox-group">
                        <label class="checkbox-label">
                            <input type="checkbox" name="is_active" value="1" @checked(old('is_active', $portfolio->is_active ?? true))>
                            <span>노출</span>
                        </label>
                    </div>
                </div>
            </div>

            <div class="member-form-row">
                <label class="member-form-label">노출 순서</label>
                <div class="member-form-field">
                    <input type="number" class="board-form-control" name="sort_order" min="0" value="{{ old('sort_order', $portfolio->sort_order ?? 0) }}">
                </div>
            </div>
        </div>
    </div>

    <div class="member-form-section">
        <div class="member-form-list">
            <div class="member-form-row">
                <label class="member-form-label">상세 설명</label>
                <div class="member-form-field">
                    <textarea class="board-form-control board-textarea" id="detail_editor" name="detail_editor" rows="8" data-backoffice-ckeditor>{{ old('detail_editor', $portfolio->detail_editor ?? '') }}</textarea>
                </div>
            </div>
            <div class="member-form-row">
                <label class="member-form-label">사이트 링크(URL)</label>
                <div class="member-form-field">
                    <input type="url" class="board-form-control" name="site_url" value="{{ old('site_url', $portfolio->site_url ?? '') }}">
                </div>
            </div>
        </div>
    </div>

    <div class="member-form-section">
        <h3 class="member-section-title">Problem</h3>
        <div class="member-form-list">
            <div class="member-form-row">
                <label class="member-form-label">제목</label>
                <div class="member-form-field">
                    <input type="text" class="board-form-control" name="problem_title" value="{{ old('problem_title', $portfolio->problem_title ?? '') }}">
                </div>
            </div>
            <div class="member-form-row">
                <label class="member-form-label">내용</label>
                <div class="member-form-field">
                    <textarea class="board-form-control board-textarea" name="problem_content" rows="3">{{ old('problem_content', $portfolio->problem_content ?? '') }}</textarea>
                </div>
            </div>
        </div>
    </div>

    <div class="member-form-section">
        <h3 class="member-section-title">Solution</h3>
        <div class="member-form-list">
            <div class="member-form-row">
                <label class="member-form-label">제목</label>
                <div class="member-form-field">
                    <input type="text" class="board-form-control" name="solution_title" value="{{ old('solution_title', $portfolio->solution_title ?? '') }}">
                </div>
            </div>
            <div class="member-form-row">
                <label class="member-form-label">내용</label>
                <div class="member-form-field">
                    <textarea class="board-form-control board-textarea" name="solution_content" rows="3">{{ old('solution_content', $portfolio->solution_content ?? '') }}</textarea>
                </div>
            </div>
            <div class="member-form-row">
                <label class="member-form-label">Before / After</label>
                <div class="member-form-field file-row">
                    <div>
                        <label class="sub-label">Before 이미지</label>
                        <div class="board-file-upload">
                            <div class="board-file-input-wrapper">
                                <input type="file" class="board-file-input" id="solution_before_image" name="solution_before_image" accept="image/*">
                                <div class="board-file-input-content">
                                    <i class="fas fa-cloud-upload-alt"></i>
                                    <span class="board-file-input-text">Before 파일 선택</span>
                                    <span class="board-file-input-subtext">이미지 파일 1개</span>
                                </div>
                            </div>
                            <div class="board-file-preview" id="beforeImagePreview"></div>
                            @if($isEdit && !empty($portfolio->solution_before_image))
                                <div class="board-existing-files">
                                    <div class="board-attachment-list">
                                        <div class="board-attachment-item existing-file" data-existing-file="before">
                                            <i class="fas fa-file-image"></i>
                                            <span class="board-attachment-name">{{ basename($portfolio->solution_before_image) }}</span>
                                            <button type="button" class="board-attachment-remove remove-existing-file" data-target="before">
                                                <i class="fas fa-times"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <input type="hidden" name="remove_solution_before_image" id="remove_solution_before_image" value="0">
                            @endif
                        </div>
                    </div>
                    <div>
                        <label class="sub-label">After 이미지</label>
                        <div class="board-file-upload">
                            <div class="board-file-input-wrapper">
                                <input type="file" class="board-file-input" id="solution_after_image" name="solution_after_image" accept="image/*">
                                <div class="board-file-input-content">
                                    <i class="fas fa-cloud-upload-alt"></i>
                                    <span class="board-file-input-text">After 파일 선택</span>
                                    <span class="board-file-input-subtext">이미지 파일 1개</span>
                                </div>
                            </div>
                            <div class="board-file-preview" id="afterImagePreview"></div>
                            @if($isEdit && !empty($portfolio->solution_after_image))
                                <div class="board-existing-files">
                                    <div class="board-attachment-list">
                                        <div class="board-attachment-item existing-file" data-existing-file="after">
                                            <i class="fas fa-file-image"></i>
                                            <span class="board-attachment-name">{{ basename($portfolio->solution_after_image) }}</span>
                                            <button type="button" class="board-attachment-remove remove-existing-file" data-target="after">
                                                <i class="fas fa-times"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <input type="hidden" name="remove_solution_after_image" id="remove_solution_after_image" value="0">
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="member-form-section">
        <h3 class="member-section-title">Feature development</h3>
        <div id="featureDevelopmentsWrap">
            @foreach($featureDevelopments as $idx => $feature)
                <div class="review-row feature-row">
                    <div class="review-row-grid">
                        <input type="text" class="board-form-control" name="feature_developments[{{ $idx }}][title]" placeholder="제목" value="{{ $feature['title'] ?? '' }}">
                    </div>
                    <textarea class="board-form-control board-textarea" name="feature_developments[{{ $idx }}][content]" rows="3" placeholder="내용">{{ $feature['content'] ?? '' }}</textarea>
                    <div class="feature-file-row">
                        <input type="hidden" name="feature_developments[{{ $idx }}][existing_image_path]" value="{{ $feature['existing_image_path'] ?? '' }}">
                        <input type="hidden" name="feature_developments[{{ $idx }}][remove_image]" value="0" class="remove-feature-image-flag">
                        <input type="file" class="board-form-control" name="feature_developments[{{ $idx }}][image]" accept="image/*">
                        @if(!empty($feature['existing_image_path']))
                            <div class="board-existing-files">
                                <div class="board-attachment-list">
                                    <div class="board-attachment-item existing-file" data-existing-feature-image>
                                        <i class="fas fa-file-image"></i>
                                        <span class="board-attachment-name">{{ basename($feature['existing_image_path']) }}</span>
                                        <button type="button" class="board-attachment-remove remove-existing-feature-image">
                                            <i class="fas fa-times"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        @endif
                    </div>
                    <button type="button" class="btn btn-danger btn-sm remove-feature">Feature 삭제</button>
                </div>
            @endforeach
        </div>
        <button type="button" class="btn btn-secondary btn-sm" id="addFeatureDevelopmentBtn">Feature 추가</button>
    </div>

    <div class="member-form-section">
        <h3 class="member-section-title">고객 리뷰</h3>
        <div id="reviewsWrap">
            @php
                $reviews = old('reviews', $isEdit ? $portfolio->reviews->toArray() : [['title' => '', 'manager_name' => '', 'content' => '']]);
            @endphp
            @foreach($reviews as $idx => $review)
                <div class="review-row">
                    <div class="review-row-grid">
                        <input type="text" class="board-form-control" name="reviews[{{ $idx }}][title]" placeholder="제목" value="{{ $review['title'] ?? '' }}">
                        <input type="text" class="board-form-control" name="reviews[{{ $idx }}][manager_name]" placeholder="담당자명" value="{{ $review['manager_name'] ?? '' }}">
                    </div>
                    <textarea class="board-form-control board-textarea" name="reviews[{{ $idx }}][content]" rows="3" placeholder="내용 (strong 태그 가능)">{{ $review['content'] ?? '' }}</textarea>
                    <button type="button" class="btn btn-danger btn-sm remove-review">리뷰 삭제</button>
                </div>
            @endforeach
        </div>
        <button type="button" class="btn btn-secondary btn-sm" id="addReviewBtn">리뷰 추가</button>
    </div>

    <div class="board-form-actions">
        <button type="submit" class="btn btn-primary">저장</button>
        <a href="{{ route('backoffice.portfolio.index') }}" class="btn btn-secondary">취소</a>
    </div>
</form>

<script src="{{ asset('js/backoffice/portfolio.js') }}"></script>
<script src="{{ asset('js/backoffice/portfolio-file-upload.js') }}"></script>

