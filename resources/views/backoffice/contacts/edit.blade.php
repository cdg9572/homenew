@extends('backoffice.layouts.app')

@section('title', '문의 수정')

@section('styles')
<link rel="stylesheet" href="{{ asset('css/backoffice/boards.css') }}">
<link rel="stylesheet" href="{{ asset('css/backoffice/users.css') }}">
@endsection

@section('content')
@if ($errors->any())
    <div class="alert alert-danger board-hidden-alert">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<div class="board-container">
    <div class="board-header">
        <a href="{{ route('backoffice.contacts.index') }}" class="btn btn-secondary btn-sm">
            <i class="fas fa-arrow-left"></i> 목록으로
        </a>
    </div>

    <div class="board-card">
        <div class="board-card-body">
            <form action="{{ route('backoffice.contacts.update', $contact) }}" method="POST">
                @csrf
                @method('PUT')

                <div class="member-form-section">
                    <h3 class="member-section-title">접수 정보</h3>
                    <div class="member-form-list">
                        <div class="member-form-row">
                            <label class="member-form-label">접수일시</label>
                            <div class="member-form-field">
                                <span>{{ $contact->created_at->format('Y-m-d H:i:s') }}</span>
                            </div>
                        </div>
                        <div class="member-form-row">
                            <label class="member-form-label" for="company">소속 <span class="required">*</span></label>
                            <div class="member-form-field">
                                <input type="text" class="board-form-control" id="company" name="company" value="{{ old('company', $contact->company) }}" required>
                            </div>
                        </div>
                        <div class="member-form-row">
                            <label class="member-form-label" for="contact_person">담당자 성함 <span class="required">*</span></label>
                            <div class="member-form-field">
                                <input type="text" class="board-form-control" id="contact_person" name="contact_person" value="{{ old('contact_person', $contact->contact_person) }}" required>
                            </div>
                        </div>
                        <div class="member-form-row">
                            <label class="member-form-label" for="email">이메일 <span class="required">*</span></label>
                            <div class="member-form-field">
                                <input type="email" class="board-form-control" id="email" name="email" value="{{ old('email', $contact->email) }}" required>
                            </div>
                        </div>
                        <div class="member-form-row">
                            <label class="member-form-label">관심 서비스 <span class="required">*</span></label>
                            <div class="member-form-field">
                                @php $sel = old('service', $contact->services ?? []); @endphp
                                <div class="board-checkbox-group">
                                    @foreach($serviceOptions as $opt)
                                        <div class="board-checkbox-item">
                                            <input type="checkbox" name="service[]" value="{{ $opt }}" id="service_{{ $loop->index }}" class="board-checkbox-input" @checked(in_array($opt, $sel, true))>
                                            <label for="service_{{ $loop->index }}">{{ $opt }}</label>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                        <div class="member-form-row">
                            <label class="member-form-label" for="current_site">현재 사이트</label>
                            <div class="member-form-field">
                                <input type="text" class="board-form-control" id="current_site" name="current_site" value="{{ old('current_site', $contact->current_site) }}">
                            </div>
                        </div>
                        <div class="member-form-row">
                            <label class="member-form-label" for="message">문의 내용</label>
                            <div class="member-form-field">
                                <textarea class="board-form-control" id="message" name="message" rows="8">{{ old('message', $contact->message) }}</textarea>
                            </div>
                        </div>
                        <div class="member-form-row">
                            <label class="member-form-label" for="budget">프로젝트 예산</label>
                            <div class="member-form-field">
                                <input type="text" class="board-form-control" id="budget" name="budget" value="{{ old('budget', $contact->budget) }}">
                            </div>
                        </div>
                        <div class="member-form-row">
                            <label class="member-form-label">첨부파일</label>
                            <div class="member-form-field">
                                @if(!empty($contact->attachments) && is_array($contact->attachments))
                                    <ul>
                                        @foreach($contact->attachments as $idx => $file)
                                            <li>
                                                <a href="{{ route('backoffice.contacts.attachments.download', ['contact' => $contact, 'index' => $idx]) }}">
                                                    {{ $file['original_name'] ?? '파일' }}
                                                </a>
                                            </li>
                                        @endforeach
                                    </ul>
                                @else
                                    <span>없음</span>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>

                <div class="member-form-section">
                    <h3 class="member-section-title">관리</h3>
                    <div class="member-form-list">
                        <div class="member-form-row">
                            <label class="member-form-label" for="status">처리 상태 <span class="required">*</span></label>
                            <div class="member-form-field">
                                <select class="board-form-control" id="status" name="status" required>
                                    @foreach($statuses as $st)
                                        <option value="{{ $st }}" @selected(old('status', $contact->status) === $st)>{{ $st }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="member-form-row">
                            <label class="member-form-label" for="admin_memo">관리자 메모</label>
                            <div class="member-form-field">
                                <textarea class="board-form-control" id="admin_memo" name="admin_memo" rows="4">{{ old('admin_memo', $contact->admin_memo) }}</textarea>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="board-form-actions">
                    <button type="submit" class="btn btn-primary">
                        <i class="fas fa-save"></i> 저장
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
