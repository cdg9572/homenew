@extends('layouts.app')
@section('title', $sName)
@section('sName', $sName)
@section('description', '홈페이지 기획부터 SEO 최적화, 사용자 경험 개선까지, 성공적인 온라인 비즈니스를 위한 유용한 인사이트를 만나보세요.')
@section('sga_plus')
,"mainEntity": {
    "@@type": "Organization",
    "name": "홈페이지코리아",
    "url": "https://homepagekorea.com",
    "email": "sales@homepagekorea.com",
    "address": {
        "@@type": "PostalAddress",
        "addressCountry": "KR",
        "addressRegion": "서울특별시",
        "streetAddress": "영등포구 경인로 775 에이스하이테크시티 2동 202호"
    },
    "contactPoint": {
        "@@type": "ContactPoint",
        "contactType": "customer service",
        "email": "sales@homepagekorea.com",
        "availableLanguage": "Korean",
        "hoursAvailable": {
            "@@type": "OpeningHoursSpecification",
            "dayOfWeek": ["Monday","Tuesday","Wednesday","Thursday","Friday"],
            "opens": "09:00",
            "closes": "18:00"
        }
    }
}
@endsection

@section('content')
<main class="sub_contents_wrap" id="contact_page_root" data-contact-success="{{ session('contact_submitted') ? '1' : '0' }}">

	<section class="svisual g{{ $gNum }}" aria-labelledby="sub-visual-title" data-header="light">
		<div class="bg_box mojo_aos">
			<div class="inner">
				{{-- 현재 위치 정보를 제공하는 내비게이션 --}}
				<nav class="location" aria-label="현재 위치">
					<a href="/" class="home" aria-label="홈으로 이동">HOME</a>
					<span>{{ $gName }}</span>
					@if(isset($gNum) && ($gNum == '01' || $gNum == '02'))<span aria-current="location">{{ $sName }}</span>@endif
				</nav>
				<h1 class="sound_only">홈페이지코리아 문의하기</h1>
				<div id="sub-visual-title" class="title" aria-hidden="true">{{ $sName ?? '' }}</div>
				<h2 class="h2">25년 노하우로 최적의 방향을 제시해드립니다.</h2>
			</div>
		</div>
	</section>

	<section class="contact_us_wrap" aria-labelledby="contact-us-title" data-header="light">
		<div class="inner">
			<div class="contact_us_inputs">
				<div class="tit">
					<h2 id="contact-us-title" class="mojo_aos">궁금하신 사항을 남겨주시면<br>최대 2일 내 연락 드립니다.</h2>
					<p class="mojo_aos">어떤 프로젝트를 계획중이신가요?</p>
					<ul class="imgs mojo_aos">
						<li class="i1"><img src="/images/img_contact_us01.png" alt="" aria-hidden="true"><span>UI/UX Design</span></li>
						<li class="i2"><img src="/images/img_contact_us02.png" alt="" aria-hidden="true"><span>Development</span></li>
						<li class="i3"><img src="/images/img_contact_us03.png" alt="" aria-hidden="true"><span>Solution</span></li>
					</ul>
				</div>
				<div class="con mojo_aos">
					<form action="{{ route('contact.store') }}" method="post" enctype="multipart/form-data" novalidate id="contact_form">
						@csrf
						@php
							$hasServiceError = $errors->has('service')
								|| collect($errors->keys())->contains(fn ($k) => str_starts_with((string) $k, 'service.'));
						@endphp
						<div class="flex">
							<dl class="w100p">
								<dt><label for="input1">소속<i aria-hidden="true">*</i><span class="sound_only">(필수)</span></label></dt>
								<dd>
									<input type="text" id="input1" name="company" class="text w100p" placeholder="소속을 입력해주세요." value="{{ old('company') }}" required aria-required="true" autocomplete="organization" @if($errors->has('company')) aria-invalid="true" @endif>
									@error('company')
										<p class="contact_field_error" role="alert">{{ $message }}</p>
									@enderror
								</dd>
							</dl>
							<dl>
								<dt><label for="input2">담당자 성함<i aria-hidden="true">*</i><span class="sound_only">(필수)</span></label></dt>
								<dd>
									<input type="text" id="input2" name="contact_person" class="text w100p" placeholder="담당자 성함을 입력해주세요." value="{{ old('contact_person') }}" required aria-required="true" autocomplete="name" @if($errors->has('contact_person')) aria-invalid="true" @endif>
									@error('contact_person')
										<p class="contact_field_error" role="alert">{{ $message }}</p>
									@enderror
								</dd>
							</dl>
							<dl>
								<dt><label for="input3">이메일<i aria-hidden="true">*</i><span class="sound_only">(필수)</span></label></dt>
								<dd>
									<input type="email" id="input3" name="email" class="text w100p" placeholder="이메일을 입력해주세요." value="{{ old('email') }}" required aria-required="true" autocomplete="email" @if($errors->has('email')) aria-invalid="true" @endif>
									@error('email')
										<p class="contact_field_error" role="alert">{{ $message }}</p>
									@enderror
								</dd>
							</dl>
							<fieldset class="w100p" @if($hasServiceError) aria-describedby="contact_err_service" @endif>
								<legend class="dt_tit">관심 서비스 <span>(중복선택)</span> <i aria-hidden="true">*</i><span class="sound_only">(필수)</span></legend>
								<div class="checks">
									@php $oldServices = old('service', []); @endphp
									<label class="check"><input type="checkbox" name="service[]" value="홈페이지 제작" @checked(in_array('홈페이지 제작', $oldServices, true))><i aria-hidden="true"></i>홈페이지 제작</label>
									<label class="check"><input type="checkbox" name="service[]" value="홈페이지 유지보수" @checked(in_array('홈페이지 유지보수', $oldServices, true))><i aria-hidden="true"></i>홈페이지 유지보수</label>
									<label class="check"><input type="checkbox" name="service[]" value="온라인 쇼핑몰 제작" @checked(in_array('온라인 쇼핑몰 제작', $oldServices, true))><i aria-hidden="true"></i>온라인 쇼핑몰 제작</label>
									<label class="check"><input type="checkbox" name="service[]" value="시스템 개발" @checked(in_array('시스템 개발', $oldServices, true))><i aria-hidden="true"></i>시스템 개발(예약/ERP/CMS 등)</label>
									<label class="check"><input type="checkbox" name="service[]" value="앱 개발" @checked(in_array('앱 개발', $oldServices, true))><i aria-hidden="true"></i>앱 개발</label>
									<label class="check"><input type="checkbox" name="service[]" value="맞춤형 AI 솔루션" @checked(in_array('맞춤형 AI 솔루션', $oldServices, true))><i aria-hidden="true"></i>맞춤형 AI 솔루션</label>
								</div>
								@php
									$serviceErrMessage = $errors->first('service');
									if ($serviceErrMessage === null || $serviceErrMessage === '') {
										foreach (range(0, 5) as $si) {
											if ($errors->has('service.'.$si)) {
												$serviceErrMessage = $errors->first('service.'.$si);
												break;
											}
										}
									}
								@endphp
								@if ($serviceErrMessage !== null && $serviceErrMessage !== '')
									<p class="contact_field_error" id="contact_err_service" role="alert">{{ $serviceErrMessage }}</p>
								@endif
							</fieldset>
							<dl class="w100p">
								<dt><label for="input5">현재 사이트가 있는 경우 알려주세요.</label></dt>
								<dd>
									<input type="text" id="input5" name="current_site" class="text w100p" placeholder="사이트주소를 입력해주세요." value="{{ old('current_site') }}" autocomplete="url" @if($errors->has('current_site')) aria-invalid="true" @endif>
									@error('current_site')
										<p class="contact_field_error" role="alert">{{ $message }}</p>
									@enderror
								</dd>
							</dl>
							<dl class="w100p">
								<dt><label for="input6">어떤 문의가 있으신가요?</label></dt>
								<dd>
									<textarea name="message" id="input6" cols="30" rows="10" class="text w100p" placeholder="문의 내용을 입력해주세요." @if($errors->has('message')) aria-invalid="true" @endif>{{ old('message') }}</textarea>
									@error('message')
										<p class="contact_field_error" role="alert">{{ $message }}</p>
									@enderror
								</dd>
							</dl>
							<dl class="w100p">
								<dt><label for="contact_file_input">첨부파일<span>(최대 3개까지 첨부 가능)</span></label><label class="btn_file"><input type="file" name="attachments[]" id="contact_file_input" multiple accept=".pdf,.jpg,.jpeg,.png,.gif,.webp,.doc,.docx,.xls,.xlsx,.ppt,.pptx,.zip"><span>파일선택</span></label></dt>
								<dd>
									<div class="input_files contact_input_files"></div>
									@error('attachments')
										<p class="contact_field_error" role="alert">{{ $message }}</p>
									@enderror
									@for ($i = 0; $i < 3; $i++)
										@error('attachments.'.$i)
											<p class="contact_field_error" role="alert">{{ $message }}</p>
										@enderror
									@endfor
								</dd>
							</dl>
							<dl class="w100p">
								<dt><label for="input8">프로젝트 예산</label></dt>
								<dd>
									<input type="text" id="input8" name="budget" class="text w100p" placeholder="프로젝트 예산을 입력해주세요." value="{{ old('budget') }}" @if($errors->has('budget')) aria-invalid="true" @endif>
									@error('budget')
										<p class="contact_field_error" role="alert">{{ $message }}</p>
									@enderror
								</dd>
							</dl>
						</div>
						<button type="submit" class="btn_submit">문의 접수하기</button>
					</form>
				</div>
			</div>
		</div>
	</section>
	
	<div class="popup" id="popup_complete" role="dialog" aria-modal="true" aria-labelledby="popup-title" aria-describedby="popup-desc" hidden>
		<div class="dm" aria-hidden="true"></div>
		<div class="inbox">
			<button type="button" class="btn_close" aria-label="팝업 닫기"></button>
			<h2 class="tit" id="popup-title">감사합니다.<br/>접수가 완료되었습니다.</h2>
			<p id="popup-desc">컨설턴트가 확인하는 동안 최신 뉴스 구경하세요!</p>
			<a href="/blog/" class="btn_link slim">블로그 바로가기</a>
		</div>
	</div>

</main>
@endsection

@push('scripts')
<script src="{{ asset('js/contact-form.js') }}"></script>
@endpush
