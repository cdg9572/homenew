<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=yes, viewport-fit=cover">
    <meta name="robots" content="index, follow">
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<title>대한민국 1세대 웹에이전시 홈페이지코리아@if(isset($gNum) && $gNum == 'main')@else | @yield('title', '')@endif</title>
	<meta name="title" content="대한민국 1세대 웹에이전시 홈페이지코리아@if(isset($gNum) && $gNum == 'main')@else | @yield('title', '')@endif" />
	<meta name="subject" content="홈페이지코리아" />
	@yield('meta_tags')
    <meta name="description" content="@yield('description', '대한민국 기업 성장을 함께한 27년 경력 웹 에이전시 홈페이지코리아. 4,400여 개 공공기관과 기업이 선택한 검증된 기술력으로 홈페이지 제작, 유지보수, 쇼핑몰 개발, SI 시스템, 앱 개발, AI 솔루션까지 제공합니다.')">
    <meta name="author" content="홈페이지코리아">
	<meta name="copyright" content="홈페이지코리아" />
    <meta property="og:title" content="대한민국 1세대 웹에이전시 홈페이지코리아@if(isset($gNum) && $gNum == 'main')@else | @yield('title', '')@endif">
	<meta property="og:subject" content="홈페이지코리아" />
    <meta property="og:description" content="@yield('description', '대한민국 기업 성장을 함께한 27년 경력 웹 에이전시 홈페이지코리아. 4,400여 개 공공기관과 기업이 선택한 검증된 기술력으로 홈페이지 제작, 유지보수, 쇼핑몰 개발, SI 시스템, 앱 개발, AI 솔루션까지 제공합니다.')">
    <meta property="og:image" content="/images/og_image.jpg">
	<link rel="icon" href="/images/favicon.png" type="image/x-icon"/>
    <meta property="og:site_name" content="홈페이지코리아">
    <link rel="canonical" href="https://homepagekorea.com" />
	<meta property="og:type" content="website">
    <meta property="og:url" content="https://homepagekorea.com">
	

	<!-- SEO,GEO 용 사이트 소개 표 - 추가되는 부분은 sga_plus로 각 페이지에서 관리합니다. -->
	<script type="application/ld+json">
	{
		"@@context": "https://schema.org",
		"@@type": "WebPage",
		"name": "대한민국 1세대 웹에이전시 홈페이지코리아@if(isset($gNum) && $gNum == 'main')@else | @yield('title', '')@endif",
		"description": "@yield('description')",
		"keywords": "@yield('keywords', '홈페이지코리아, 웹 에이전시, 홈페이지 제작 (2.6만)')",
		"url": "{{ url()->current() }}",
		"inLanguage": "ko-KR",
		"publisher": {
			"@@type": "Organization",
			"name": "대한민국 1세대 웹에이전시 홈페이지코리아@if(isset($gNum) && $gNum == 'main')@else | @yield('title', '')@endif",
			"url": "https://homepagekorea.com",
			"logo": {
				"@@type": "ImageObject",
				"url": "https://homepagekorea.com/images/logo.png"
			}
		},
		"breadcrumb": {
			"@@type": "BreadcrumbList",
			"itemListElement": [
				{ "@@type": "ListItem", "position": 1, "name": "홈", "item": "https://homepagekorea.com" },
				{ "@@type": "ListItem", "position": 2, "name": "{{ $gName ?? '' }}", "item": "https://homepagekorea.com/{{ request()->segment(1) }}" }
				@if(isset($gNum) && ($gNum == '01' || $gNum == '02' || ($page ?? '') == 'view'))
				,{ "@@type": "ListItem", "position": 3, "name": "{{ $sName ?? '' }}", "item": "{{ strtok(url()->current(), '?') }}" }
				@endif
			]
		},
		@yield('sga_plus', '')
	}
	</script>

	<?php
		$css_path		= $_SERVER['DOCUMENT_ROOT'] . '/css/styles.css';
		$reactive_path	= $_SERVER['DOCUMENT_ROOT'] . '/css/reactive.css';
		$ver_styles		= file_exists($css_path)      ? filemtime($css_path)      : date('YmdHis');
		$ver_reactive	= file_exists($reactive_path) ? filemtime($reactive_path) : date('YmdHis');
	?>
    <link rel="preload" href="/css/font/Pretendard-Regular.woff2" as="font" type="font/woff2" crossorigin>
    <link rel="preload" href="/css/font/Pretendard-Bold.woff2" as="font" type="font/woff2" crossorigin>
	<link rel="stylesheet" href="/css/font.css" media="all">
	<link rel="stylesheet" href="/css/aos.css">
    <link rel="stylesheet" href="/css/styles.css?v=<?=$ver_styles?>">
	<link rel="stylesheet" href="/css/reactive.css?v=<?=$ver_reactive?>">
    <!-- page Styles -->
    @yield('styles')
    
    <!-- jQuery -->
    <script src="//code.jquery.com/jquery-3.7.1.min.js"></script>
	<script src="/js/aos.js"></script>
    <script src="/js/com.js"></script>
</head>
<body>
	<div class="blind_link">
		@if(isset($gNum) && $gNum == 'main')
			<a href="#main_visual">본문 바로가기</a>
		@else
			<a href="#mainContent">본문 바로가기</a>
		@endif
	</div>
	
	@if(isset($gNum) && $gNum !== '99')
    <header class="header {{ (isset($gNum) && $gNum == 'main') ? 'main' : '' }} {{ (isset($gNum) && $gNum == '03' && ($page ?? '') == 'view' || $gNum == '01' || $gNum == '02') ? 'white_mode' : '' }}">
		<div class="inbox flex items-center justify-between">
			<a href="/" class="logo" aria-label="홈페이지코리아 홈으로 이동"><img src="/images/logo.svg" alt="사이트 로고"></a>
			<nav class="gnb" aria-label="주 메뉴">
				<ul class="flex">
					<li class="menu {{ ($gNum ?? '') == '01' ? 'on' : '' }}">
						<a href="/service/homepage-seo-geo" id="main-menu-01"aria-haspopup="true" aria-expanded="{{ ($gNum ?? '') == '01' ? 'true' : 'false' }}"{{ ($gNum ?? '') == '01' ? 'aria-current="page"' : '' }}>Service</a>
						<ul class="snb" aria-labelledby="main-menu-01">
							<li><a href="/service/homepage-seo-geo" @if(($gNum ?? '') == '01' && ($sNum ?? '') == '01') class="on" aria-current="page" @endif>SEO·GEO 최적화</a></li>
							<li><a href="/service/homepage-development" @if(($gNum ?? '') == '01' && ($sNum ?? '') == '02') class="on" aria-current="page" @endif>홈페이지 제작</a></li>
							<li><a href="/service/website-maintenance" @if(($gNum ?? '') == '01' && ($sNum ?? '') == '03') class="on" aria-current="page" @endif>홈페이지 유지보수</a></li>
							<li><a href="/service/ecommerce-website-development" @if(($gNum ?? '') == '01' && ($sNum ?? '') == '04') class="on" aria-current="page" @endif>온라인 쇼핑몰 제작</a></li>
							<li><a href="/service/integrated-si-system-development" @if(($gNum ?? '') == '01' && ($sNum ?? '') == '05') class="on" aria-current="page" @endif>통합 SI 시스템 개발</a></li>
							<li><a href="/service/mobile-app-development" @if(($gNum ?? '') == '01' && ($sNum ?? '') == '06') class="on" aria-current="page" @endif>앱 개발</a></li>
							<li><a href="/service/ai-solution" @if(($gNum ?? '') == '01' && ($sNum ?? '') == '07') class="on" aria-current="page" @endif>맞춤형 AI 솔루션</a></li>
						</ul>
					</li>
					<li class="menu {{ ($gNum ?? '') == '02' ? 'on' : '' }}">
						<a href="/industries/enterprise" id="main-menu-02"aria-haspopup="true" aria-expanded="{{ ($gNum ?? '') == '02' ? 'true' : 'false' }}"{{ ($gNum ?? '') == '03' ? 'aria-current="page"' : '' }}>Industry</a>
						<ul class="snb" aria-labelledby="main-menu-02">
							<li><a href="/industries/enterprise" @if(($gNum ?? '') == '02' && ($sNum ?? '') == '01') class="on" aria-current="page" @endif>중견/대기업</a></li>
							<li><a href="/industries/academic-association" @if(($gNum ?? '') == '02' && ($sNum ?? '') == '02') class="on" aria-current="page" @endif>학회/협회</a></li>
							<li><a href="/industries/government" @if(($gNum ?? '') == '02' && ($sNum ?? '') == '03') class="on" aria-current="page" @endif>공공기관</a></li>
							<li><a href="/industries/hospital-medical-website-development" @if(($gNum ?? '') == '02' && ($sNum ?? '') == '04') class="on" aria-current="page" @endif>병원/의료</a></li>
							<li><a href="/industries/university-research-lab-website" @if(($gNum ?? '') == '02' && ($sNum ?? '') == '05') class="on" aria-current="page" @endif>대학·연구실</a></li>
						</ul>
					</li>
					<li class="menu {{ ($gNum ?? '') == '03' ? 'on' : '' }}"><a href="/portfolio/" id="main-menu-03"aria-haspopup="true" aria-expanded="{{ ($gNum ?? '') == '03' ? 'true' : 'false' }}"{{ ($gNum ?? '') == '03' ? 'aria-current="page"' : '' }}>Portfolio</a></li>
					<li class="menu {{ ($gNum ?? '') == '04' ? 'on' : '' }}"><a href="/blog/" id="main-menu-04"aria-haspopup="true" aria-expanded="{{ ($gNum ?? '') == '04' ? 'true' : 'false' }}"{{ ($gNum ?? '') == '04' ? 'aria-current="page"' : '' }}>Blog</a></li>
				</ul>
			</nav>
			<a href="/contact/" class="btn_contactus">Contact Us</a>
			<button type="button" class="btn_menu" aria-label="전체 메뉴 열기" aria-controls="sitemap-menu" aria-expanded="false">
				<span class="line t" aria-hidden="true"></span>
				<span class="line m" aria-hidden="true"></span>
				<span class="line b" aria-hidden="true"></span>
			</button>
		</div>
		<svg style="display:none;">
			<filter id="glass-refraction">
				<feTurbulence type="fractalNoise" baseFrequency="0.01 0.05" numOctaves="2" result="noise" />
				<feDisplacementMap in="SourceGraphic" in2="noise" scale="30" xChannelSelector="R" yChannelSelector="G" />
			</filter>
		</svg>
	</header>
	@endif
    
	<div class="container_wrap {{ (isset($gNum) && $gNum !== 'main') ? 'sub_wrap' : '' }} {{ (isset($gNum) && $gNum !== 'main') ? 'g'.$gNum : '' }} {{ (isset($gNum) && $gNum == '03' && ($page ?? '') == 'view') ? 'portfolio_view_wrap' : '' }}" id="mainContent">
        @yield('content')
    </div>
	@if(isset($gNum) && $gNum !== '99')
    <!-- 팝업 영역 -->
    @yield('popups')
    <script src="{{ asset('js/popup.js') }}"></script>
    @stack('scripts')
	
	<footer class="footer">
		<div class="point" aria-hidden="true"></div>
		<button type="button" class="gotop" onclick="window.scrollTo({top: 0, behavior: 'smooth'})" aria-label="페이지 맨 위로 이동" aria-hidden="true">TOP</button>
		<section class="info" aria-label="협회 및 사무국 연락처 정보">
			<div class="inbox">
				<div class="address_area">
					<ul class="award_list">
						<li><img src="/images/icon_award01.png" alt="벤처확인기업"></li>
						<li><img src="/images/icon_award02.svg" alt="SA 인증"></li>
						<li><img src="/images/icon_award03.svg" alt="WA 인증"></li>
						<li><img src="/images/icon_award04.svg" alt="이노비즈 인증"></li>
						<li><img src="/images/icon_award05.svg" alt="가족친화 우수기업 인증"></li>
					</ul>
					<address>
						<div class="homepagename">홈페이지코리아</div>
						<ul class="office_info" aria-label="회사 연락처">
							<li><strong>대표</strong> <span>염하은</span></li>
							<li><strong>사업자등록번호</strong> <span>107-86-55192</span></li>
							<li class="w100p"><strong>주소</strong> <span>서울특별시 영등포구 경인로 775 에이스하이테크시티 2동 202호</span></li>
							<li class="w100p"><strong>프로젝트 문의</strong> <a href="mailto:sales@homepagekorea.com">sales@homepagekorea.com</a></li>
							<li class="w100p"><strong>유지보수 문의</strong> <a href="mailto:superweb@homepagerkorea.com ">superweb@homepagerkorea.com</a></li>
						</ul>
					</address>
					<p class="copy"><span class="sound_only">Copyright</span> © 2025 homepagekrea All Rights Reserved.</p>
				</div>
				<nav class="footer_menus" aria-label="푸터 메뉴">
					<ul class="flex">
						<li class="menu {{ ($gNum ?? '') == '01' ? 'on' : '' }}">
							<a href="/service/homepage-seo-geo" id="main-menu-01"aria-haspopup="true" aria-expanded="{{ ($gNum ?? '') == '01' ? 'true' : 'false' }}"{{ ($gNum ?? '') == '01' ? 'aria-current="page"' : '' }}>SERVICE</a>
							<ul class="snb" aria-labelledby="main-menu-01">
								<li>
									<a href="/service/homepage-seo-geo" {{ (($gNum ?? '') == '01' && ($sNum ?? '') == '01') ? 'class="on" aria-current="page"' : '' }}>SEO·GEO 최적화</a>
									<a href="/service/homepage-development" {{ (($gNum ?? '') == '01' && ($sNum ?? '') == '02') ? 'class="on" aria-current="page"' : '' }}>홈페이지 제작</a>
									<a href="/service/website-maintenance" {{ (($gNum ?? '') == '01' && ($sNum ?? '') == '03') ? 'class="on" aria-current="page"' : '' }}>홈페이지 유지보수</a>
									<a href="/service/ecommerce-website-development" {{ (($gNum ?? '') == '01' && ($sNum ?? '') == '04') ? 'class="on" aria-current="page"' : '' }}>온라인 쇼핑몰 제작</a>
									<a href="/service/integrated-si-system-development" {{ (($gNum ?? '') == '01' && ($sNum ?? '') == '05') ? 'class="on" aria-current="page"' : '' }}>통합 SI 시스템 개발</a>
									<a href="/service/mobile-app-development" {{ (($gNum ?? '') == '01' && ($sNum ?? '') == '06') ? 'class="on" aria-current="page"' : '' }}>앱 개발</a>
									<a href="/service/ai-solution" {{ (($gNum ?? '') == '01' && ($sNum ?? '') == '07') ? 'class="on" aria-current="page"' : '' }}>맞춤형 AI 솔루션</a>
								</li>	
							</ul>
						</li>
						<li class="menu {{ ($gNum ?? '') == '02' ? 'on' : '' }}">
							<a href="/industries/about" id="main-menu-02"aria-haspopup="true" aria-expanded="{{ ($gNum ?? '') == '02' ? 'true' : 'false' }}"{{ ($gNum ?? '') == '03' ? 'aria-current="page"' : '' }}>INDUSTRY</a>
							<ul class="snb" aria-labelledby="main-menu-02">
								<li>
									<a href="/industries/enterprise" {{ (($gNum ?? '') == '02' && ($sNum ?? '') == '01') ? 'class="on" aria-current="page"' : '' }}>중견/대기업</a>
									<a href="/industries/academic-association" {{ (($gNum ?? '') == '02' && ($sNum ?? '') == '02') ? 'class="on" aria-current="page"' : '' }}>학회/협회</a>
									<a href="/industries/government" {{ (($gNum ?? '') == '02' && ($sNum ?? '') == '03') ? 'class="on" aria-current="page"' : '' }}>공공기관</a>
									<a href="/industries/hospital-medical-website-development" {{ (($gNum ?? '') == '02' && ($sNum ?? '') == '04') ? 'class="on" aria-current="page"' : '' }}>병원/의료</a>
									<a href="/industries/university-research-lab-website" {{ (($gNum ?? '') == '02' && ($sNum ?? '') == '05') ? 'class="on" aria-current="page"' : '' }}>대학·연구실</a>
								</li>	
							</ul>
						</li>
						<li class="menu {{ ($gNum ?? '') == '03' ? 'on' : '' }}"><a href="/portfolio/" id="main-menu-03"aria-haspopup="true" aria-expanded="{{ ($gNum ?? '') == '03' ? 'true' : 'false' }}"{{ ($gNum ?? '') == '03' ? 'aria-current="page"' : '' }}>PORTFOLIO</a></li>
						<li class="menu {{ ($gNum ?? '') == '04' ? 'on' : '' }}"><a href="/blog/" id="main-menu-04"aria-haspopup="true" aria-expanded="{{ ($gNum ?? '') == '04' ? 'true' : 'false' }}"{{ ($gNum ?? '') == '04' ? 'aria-current="page"' : '' }}>BLOG</a></li>
					</ul>
				</nav>
				<div class="btm_space" aria-hidden="true"><img src="/images/txt_btm_space.svg" alt="HOMEPAGEKOREA"></div>
			</div>
		</section>
	</footer>
	@endif
</body>
</html>
