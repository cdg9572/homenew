@extends('layouts.app')

@section('content')
<main class="main_wrap">
    
	<!-- intro -->
	<section class="intro" aria-label="WHAT WE DO">
		<div class="intro_fixed">
			<div class="inbox">
				<p class="text" aria-hidden="true"><span>WHAT WE</span> <strong>DO</strong></p>
				<button type="button" class="btn_link">BUTTON</button>
			</div>
		</div>
	</section>
	
	<!-- main_visual -->
	<section class="main_visual" id="main_visual" aria-labelledby="visual-title">
		<video class="bg_video" autoplay muted loop playsinline aria-hidden="true">
			<source src="/video/video_main_visual.mp4" type="video/mp4">
		</video>
		<div class="inbox">
			<h1 id="visual-title" class="sound_only">대한민국 기업 성장을 함께한 27년 경력 웹 에이전시 홈페이지코리아</h1>
			<p class="tit" aria-hidden="true">대한민국 기업 성장을 함께한 <strong>27년</strong> 경력</p>
			<p class="copyright" aria-hidden="true">WEB AGENCY<br/>HOMEPAGEKOREA</p>
			<h2>1,100여 개의 공공기관과 기업이 선택한 검증된 기술력을 경험하세요.</h2>
			<a href="/contact/" class="btn_contact"><p aria-hidden="true">Contact Us</p><strong>프로젝트<br/>문의하기</strong></a>
		</div>
		<div class="after_cover" aria-hidden="true"></div>
	</section>
	
	<div class="sticky_wrap">
		<!-- Service -->
		<section class="main_service in_service" aria-labelledby="service-title" data-header="dark">
			<div class="outbox">
				<div class="marquee_banner" data-aos="zoom-out-up" data-aos-offset="200">
					<ul class="slide" aria-label="주요 고객사 목록">
						<li><img src="/images/main_service_01.svg" alt="United Nations"></li>
						<li><img src="/images/main_service_02.svg" alt="서울대학교 농생명과학공동기기원"></li>
						<li><img src="/images/main_service_03.svg" alt="파크랜드"></li>
						<li><img src="/images/main_service_04.svg" alt="국립스포츠박물관"></li>
						<li><img src="/images/main_service_05.svg" alt="KB부동산신탁"></li>
						<li><img src="/images/main_service_06.svg" alt="PARADISE CITY"></li>
						<li><img src="/images/main_service_07.svg" alt="CJ Innovation"></li>
						<li><img src="/images/main_service_08.svg" alt="한양대학교"></li>
						<li><img src="/images/main_service_09.svg" alt="세종대학교"></li>
					</ul>
				</div>
				<div class="inner" data-aos="zoom-out-up">
					<div class="bg_round"><div class="in_gradient"></div></div>
					<div class="service">
						<h2 id="service-title" class="main_title" data-aos="zoom-out-up" data-aos-offset="200"><span>HOMEPAGEKOREA</span><strong>SERVICE</strong></h2>
						<p class="tb" data-aos="zoom-out-up">각 서비스는 고객의 비즈니스 목표에 맞춰 <strong>최적화된 솔루션</strong>을 제공하며,<br/><strong>기획부터 디자인, 개발, 운영까지</strong> 전 과정을 지원합니다.</p>
						<ul class="list">
							<li class="i1" data-aos="zoom-out-up" data-aos-offset="200"><a href="/service/homepage-development" aria-label="홈페이지 제작 서비스 바로가기"><h3>홈페이지 제작</h3><p aria-hidden="true">비즈니스를 성장시키는 <br class="pc_vw">홈페이지 제작</p></a></li>
							<li class="i2" data-aos="zoom-out-up" data-aos-offset="200"><a href="/service/website-maintenance" aria-label="홈페이지 유지보수 서비스 바로가기"><h3>홈페이지 유지보수</h3><p aria-hidden="true">전문가가 직접 관리하는 <br class="pc_vw">홈페이지 유지보수</p></a></li>
							<li class="i3" data-aos="zoom-out-up" data-aos-offset="200"><a href="/service/ecommerce-website-development" aria-label="온라인 쇼핑몰 제작 서비스 바로가기"><h3>온라인 쇼핑몰 제작</h3><p aria-hidden="true">매출 성장을 만드는 <br class="pc_vw">맞춤형 자사몰</p></a></li>
							<li class="i4" data-aos="zoom-out-up" data-aos-offset="200"><a href="/service/integrated-si-system-development" aria-label="통합 SI 시스템 개발 서비스 바로가기"><h3>통합 SI 시스템 개발</h3><p aria-hidden="true">운영 효율을 높이는 <br class="pc_vw">예약, 결제, 연동 시스템 개발</p></a></li>
							<li class="i5" data-aos="zoom-out-up" data-aos-offset="200"><a href="/service/mobile-app-development" aria-label="앱 개발 서비스 바로가기"><h3>앱 개발</h3><p aria-hidden="true">설계부터 스토어 출시까지 <br class="pc_vw">책임지는 앱 개발</p></a></li>
							<li class="i6" data-aos="zoom-out-up" data-aos-offset="200"><a href="/service/ai-solution" aria-label="맞춤형 AI 솔루션 서비스 바로가기"><h3>맞춤형 AI 솔루션</h3><p aria-hidden="true">기업 생산성을 혁신하는 <br class="pc_vw">AI 솔루션</p></a></li>
						</ul>
					</div>
				</div>
			</div>
		</section>
		<div class="main_service out_service" aria-hidden="true"></div>
		
		<!-- STRENGTH -->
		<section class="page_rotate main_strength" aria-labelledby="strength-title" data-header="dark">
			<div class="outbox">
				<div class="inbox">
					<div class="left">
						<div class="main_title" aria-hidden="true"><p class="tt">STRENGTH</p><span>WHY<br/>HOMEPAGEKOREA</span><strong>IS DIFFERENT</strong></div>
						<h2 id="strength-title" class="tbbg"><strong>홈페이지코리아</strong>가 하면 다른 이유</h2>
					</div>
					<div class="right">
						<ul class="strength_list">
							<li class="i1"><h3>실무 중심 설계</h3><p>27년 노하우로 담당자가 <br class="pc_vw">사용하기 편한 시스템을 만듭니다.</p></li>
							<li class="i2"><h3>웹/앱 개발 일정 준수</h3><p>숙련된 PM이 WBS 기반으로 <br class="pc_vw">관리하여 런칭 지연이 없습니다.</p></li>
							<li class="i3"><h3>자체 웹, 앱 개발 모듈</h3><p>오픈소스가 아닌 최신 스택(React, Laravel)으로 <br class="pc_vw">보안과 속도를 잡았습니다.</p></li>
							<li class="i4"><h3>전환 최적화</h3><p>단순 개발, 디자인을 넘어 매출과 성과를 <br class="pc_vw">만드는 UX를 설계합니다.</p></li>
						</ul>
					</div>
				</div>
			</div>
		</section>
		
		<!-- PORTFOLIO -->
		<section class="page_rotate main_portfolio" aria-labelledby="Portfolio-title" data-header="light">
			<div class="svg_area">
				<i class="svg_t"></i>
				<i class="svg_b"></i>
			</div>
			<div class="outbox">
				<div class="inbox">
					<div class="main_title" aria-hidden="true"><p class="tt">PORTFOLIO</p><span>TRUSTED BY</span><strong>1,100 Companies & <br class="pc_vw">Organizations</strong></div>
					<h2 id="Portfolio-title" class="tbbg">홈페이지코리아와 함께 성장한 <strong>1,100개</strong> 의 기업·기관</h2>
				</div>
				<div class="portfolio_marquee">
					<ul class="list">
						<li>
							<a href="/portfolio/view" class="box" aria-label="한양대학교 연구장비통합관리시스템 - WEB UI/UX / Mobile / JSP 포트폴리오 보기">
								<span class="flip">
									<span class="before" aria-hidden="true"><img src="/images/img_portfolio_sample.png" alt="" class="bg"><img src="/images/main_service_08.svg" alt="" class="logo"></span>
									<span class="after" aria-hidden="true">
										<span class="type">WEB UI/UX / Mobile / JSP</span>
										<span class="tit">한양대학교 연구장비통합관리시스템</span>
										<p>웹사이트 및 백오피스 구축, UI/UX, 브랜딩, Logo Design, CI, BI, 예약 시스템</p>
										<span class="logo"><img src="/images/main_service_08.svg" alt=""></span>
									</span>
								</span>
							</a>
						</li>
						<li>
							<a href="/portfolio/view" class="box" aria-label="한양대학교 연구장비통합관리시스템 - WEB UI/UX / Mobile / JSP 포트폴리오 보기">
								<span class="flip">
									<span class="before" aria-hidden="true"><img src="/images/img_portfolio_sample.png" alt="" class="bg"><img src="/images/main_service_08.svg" alt="" class="logo"></span>
									<span class="after" aria-hidden="true">
										<span class="type">WEB UI/UX / Mobile / JSP</span>
										<span class="tit">한양대학교 연구장비통합관리시스템</span>
										<p>웹사이트 및 백오피스 구축, UI/UX, 브랜딩, Logo Design, CI, BI, 예약 시스템</p>
										<span class="logo"><img src="/images/main_service_08.svg" alt=""></span>
									</span>
								</span>
							</a>
						</li>
						<li>
							<a href="/portfolio/view" class="box" aria-label="한양대학교 연구장비통합관리시스템 - WEB UI/UX / Mobile / JSP 포트폴리오 보기">
								<span class="flip">
									<span class="before" aria-hidden="true"><img src="/images/img_portfolio_sample.png" alt="" class="bg"><img src="/images/main_service_08.svg" alt="" class="logo"></span>
									<span class="after" aria-hidden="true">
										<span class="type">WEB UI/UX / Mobile / JSP</span>
										<span class="tit">한양대학교 연구장비통합관리시스템</span>
										<p>웹사이트 및 백오피스 구축, UI/UX, 브랜딩, Logo Design, CI, BI, 예약 시스템</p>
										<span class="logo"><img src="/images/main_service_08.svg" alt=""></span>
									</span>
								</span>
							</a>
						</li>
						<li>
							<a href="/portfolio/view" class="box" aria-label="한양대학교 연구장비통합관리시스템 - WEB UI/UX / Mobile / JSP 포트폴리오 보기">
								<span class="flip">
									<span class="before" aria-hidden="true"><img src="/images/img_portfolio_sample.png" alt="" class="bg"><img src="/images/main_service_08.svg" alt="" class="logo"></span>
									<span class="after" aria-hidden="true">
										<span class="type">WEB UI/UX / Mobile / JSP</span>
										<span class="tit">한양대학교 연구장비통합관리시스템</span>
										<p>웹사이트 및 백오피스 구축, UI/UX, 브랜딩, Logo Design, CI, BI, 예약 시스템</p>
										<span class="logo"><img src="/images/main_service_08.svg" alt=""></span>
									</span>
								</span>
							</a>
						</li>
						<li>
							<a href="/portfolio/view" class="box" aria-label="한양대학교 연구장비통합관리시스템 - WEB UI/UX / Mobile / JSP 포트폴리오 보기">
								<span class="flip">
									<span class="before" aria-hidden="true"><img src="/images/img_portfolio_sample.png" alt="" class="bg"><img src="/images/main_service_08.svg" alt="" class="logo"></span>
									<span class="after" aria-hidden="true">
										<span class="type">WEB UI/UX / Mobile / JSP</span>
										<span class="tit">한양대학교 연구장비통합관리시스템</span>
										<p>웹사이트 및 백오피스 구축, UI/UX, 브랜딩, Logo Design, CI, BI, 예약 시스템</p>
										<span class="logo"><img src="/images/main_service_08.svg" alt=""></span>
									</span>
								</span>
							</a>
						</li>
						<li>
							<a href="/portfolio/view" class="box" aria-label="한양대학교 연구장비통합관리시스템 - WEB UI/UX / Mobile / JSP 포트폴리오 보기">
								<span class="flip">
									<span class="before" aria-hidden="true"><img src="/images/img_portfolio_sample.png" alt="" class="bg"><img src="/images/main_service_08.svg" alt="" class="logo"></span>
									<span class="after" aria-hidden="true">
										<span class="type">WEB UI/UX / Mobile / JSP</span>
										<span class="tit">한양대학교 연구장비통합관리시스템</span>
										<p>웹사이트 및 백오피스 구축, UI/UX, 브랜딩, Logo Design, CI, BI, 예약 시스템</p>
										<span class="logo"><img src="/images/main_service_08.svg" alt=""></span>
									</span>
								</span>
							</a>
						</li>
					</ul>
				</div>
				<div class="flex_center">
					<a href="/Portfolio/" class="btn_link">개발사례 더보기</a>
				</div>
			</div>
		</section>
	</div>
	
	<!-- 문의하기 -->
	<section class="main_experience" aria-labelledby="experience-title" data-header="dark">
		<video class="bg_video" autoplay muted loop playsinline aria-hidden="true">
			<source src="/video/video_main_experience.mp4" type="video/mp4">
		</video>
		<div class="inner">
			<h2 id="experience-title" class="main_title"><strong>27년의 경험은 흉내 낼 수 없습니다.</strong></h2>
			<p>홈페이지코리아와 함께 디지털 전환을 시작하세요. </p>
			<a href="/contact/" class="btn_link">문의하기</a>
		</div>
		<svg style="display:none;">
			<filter id="main_glass-refraction">
				<feTurbulence type="fractalNoise" baseFrequency="0.01 0.05" numOctaves="2" result="noise" />
				<feDisplacementMap in="SourceGraphic" in2="noise" scale="30" xChannelSelector="R" yChannelSelector="G" />
			</filter>
		</svg>
	</section>
	
	<!-- FAQ -->
	<section class="main_contact" aria-labelledby="faq-title" data-header="dark">
		<div class="inbox">
			<div class="left">
				<div class="main_title_flex">
					<h2 id="faq-title" class="main_title"><strong>FAQ</strong></h2><p class="tb">자주 묻는 질문</p>
					<a href="" class="btn_link">전체보기</a>
				</div>
				<div class="faq_wrap">
					<ul class="faq_list">
						<li><h3 class="faq_title"><button type="button" aria-expanded="false" aria-controls="faq-con-1">홈페이지 제작 기간은 얼마나 걸리나요?</button></h3>
							<div class="con" id="faq-con-1">프로젝트 규모에 따라 다르지만, 일반적인 기업 홈페이지는 4~6주, 쇼핑몰이나 복잡한 SI 시스템은 8~12주 정도 소요됩니다. 정확한 일정은 초기 상담 시 WBS 기반으로 안내해 드립니다.</div>
						</li>
						<li><h3 class="faq_title"><button type="button" aria-expanded="false" aria-controls="faq-con-2">유지보수는 어떻게 진행되나요?</button></h3>
							<div class="con" id="faq-con-2">월 단위 계약으로 콘텐츠 수정, 보안 업데이트, 서버 관리, 기능 개선 등을 전담 매니저가 관리합니다. 긴급 상황 발생 시 24시간 내 대응합니다.</div>
						</li>
						<li><h3 class="faq_title"><button type="button" aria-expanded="false" aria-controls="faq-con-3">홈페이지 제작 비용은 어떻게 책정되나요?</button></h3>
							<div class="con" id="faq-con-3">프로젝트의 규모, 기능, 디자인 복잡도에 따라 달라집니다. 기본 홈페이지부터 맞춤형 SI 시스템까지 예산에 맞는 최적의 솔루션을 제안해 드립니다. 무료 상담을 통해 견적을 안내받으실 수 있습니다.</div>
						</li>
						<li><h3 class="faq_title"><button type="button" aria-expanded="false" aria-controls="faq-con-4">반응형 웹으로 제작되나요?</button></h3>
							<div class="con" id="faq-con-4">네, 모든 프로젝트는 PC, 태블릿, 모바일에 최적화된 반응형 웹으로 제작됩니다. 각 디바이스에서 최상의 사용자 경험을 제공합니다.</div>
						</li>
						<li><h3 class="faq_title"><button type="button" aria-expanded="false" aria-controls="faq-con-5">SEO 최적화도 함께 진행되나요?</button></h3>
							<div class="con" id="faq-con-5">네, 검색 엔진 최적화를 기본으로 적용합니다. 메타 태그 설정, 사이트맵 생성, 페이지 속도 최적화, 구조화된 데이터 마크업 등 검색 노출에 필요한 모든 작업을 포함합니다.</div>
						</li>
					</ul>
				</div>
			</div>
			<div class="right">
				<div class="box contactus">
					<div class="type" aria-hidden="true">Contact Us</div>
					<h3>홈페이지코리아는 <br class="pc_vw">진심으로 짓습니다.</h3>
					<p>지금 당신의 성공 이야기를 시작해보세요.</p>
					<a href="/contact/" class="btn_link">견적 문의하기</a>
				</div>
				<div class="box blog">
					<div class="type" aria-hidden="true">Blog</div>
					<h3>홈페이지코리아 <br class="pc_vw">기술 블로그</h3>
					<p>성공적인 온라인 비즈니스를 위한 <br class="pc_vw">인사이트를 만나보세요.</p>
					<a href="/blog/" class="btn_link">블로그 보러가기</a>
				</div>
			</div>
		</div>
	</section>
	
</main>

<script>
$(document).ready(function () {
// intro 
    const $introFixed = $('.intro_fixed');
	const $intro = $('.intro');
	const $mainWrap = $('.main_wrap');
	let introOpacityZero = false;

	function introScroll() {
		const scrollTop = $(window).scrollTop();
		const introHeight = $intro.outerHeight();
		const startFade = introHeight * 0.4;
		const endFade   = introHeight * 0.8;
		const hidePoint = introHeight * 1.0;
		const scaleProgress = Math.min(scrollTop / introHeight, 1);
		const scale = 1 + scaleProgress * 40;
		let opacity = 1;
		if (scrollTop >= startFade) {
			const fadeProgress = (scrollTop - startFade) / (endFade - startFade);
			opacity = Math.max(1 - fadeProgress, 0);
		}
		$introFixed.css({ 'transform': `scale(${scale})`, 'opacity': opacity });

		if (opacity === 0) {
			if (!introOpacityZero) { $intro.addClass('opacity'); introOpacityZero = true; }
		} else {
			if (introOpacityZero) { $intro.removeClass('opacity'); introOpacityZero = false; }
		}

		if (scrollTop >= hidePoint) {
			if (!$mainWrap.hasClass('intro_hide')) $mainWrap.addClass('intro_hide');
		} else {
			if ($mainWrap.hasClass('intro_hide')) $mainWrap.removeClass('intro_hide');
		}
	}
	$(window).on('scroll', introScroll);
	introScroll();
	$(".intro .btn_link").on("click", function () {
		window.scrollTo({ top: $intro.outerHeight(), behavior: "smooth" });
	});
// Service marquee
    (function () {
        const $banner    = $(".main_service .marquee_banner");
        const $origSlide = $banner.find(".slide");
        const speed      = 2;
        let posX         = 0;
        let isPaused     = false;
        $banner.append($origSlide.clone().removeAttr("aria-label").attr("aria-hidden", "true"));
        const totalWidth = $origSlide.outerWidth(true);
        function marqueeLoop() {
            if (!isPaused) {
                posX -= speed;
                if (Math.abs(posX) >= totalWidth) posX = 0;
                $banner.find(".slide").css("transform", `translateX(${posX}px)`);
            }
            requestAnimationFrame(marqueeLoop);
        }
        marqueeLoop();
        /*$banner.on("mouseenter", function () { isPaused = true; })
               .on("mouseleave", function () { isPaused = false; });*/
    })();
// Service bg_round
    function bgRoundScroll() {
		const $mainService  = $(".main_service");
		const $bgRound      = $(".bg_round");
		const $marquee      = $(".main_service .marquee_banner");
		const scrollTop     = $(window).scrollTop();
		const windowHeight  = $(window).height();
		const serviceTop    = $mainService.offset().top;
		const paddingTop    = parseInt($mainService.css("padding-top"));
		const marqueeHeight = $marquee.outerHeight();
		const marqueeMargin = parseInt($marquee.css("margin-bottom"));
		const initY         = -(paddingTop + marqueeHeight + marqueeMargin);
		const scrollStart   = serviceTop - windowHeight;
		const scrollEnd     = serviceTop;

		if (scrollTop >= scrollStart) {
			$mainService.addClass("start");
		} else {
			$mainService.removeClass("start");
		}

		const progress     = Math.min(Math.max((scrollTop - scrollStart) / (scrollEnd - scrollStart), 0), 1);
		const translateY   = initY + (-initY * progress);
		const scale        = 1 + 3 * progress;
		const brBottom     = 50 * (1 - progress);
		const aspectW      = 1 + 1 * progress;
		const borderRadius = `50% 50% ${brBottom}% ${brBottom}%`;

		if (scrollTop >= scrollStart) {
			$bgRound.css({ "transform"    : `translate(-50%, ${translateY}px) scale(${scale})`, "border-radius": borderRadius, "aspect-ratio" : `${aspectW} / 1` });
		} else {
			$bgRound.css({ "transform"    : `translate(-50%, ${initY}px) scale(1)`, "border-radius": "50%", "aspect-ratio" : "1 / 1" });
		}

		// main_service start 시점부터 main_visual 페이드
		if (scrollTop >= scrollStart) {
			const $mainVisual = $(".main_visual");
			$mainVisual.addClass("start");

			const introHeight = $(".intro").outerHeight() || 0;
			const fadeStart   = Math.max(scrollStart, introHeight);
			const fadeEnd     = fadeStart + windowHeight * 0.5;
			const fadeProg    = Math.min(Math.max((scrollTop - fadeStart) / (fadeEnd - fadeStart), 0), 1);
			const fadeOut     = 1 - fadeProg;
			const fadeIn      = fadeProg;

			$(".intro_hide .main_visual video, .intro_hide .main_visual .inbox").css("opacity", fadeOut);
			$(".after_cover").css("opacity", fadeIn);

			// opacity 0.5 이하 시점에 header bg_white 추가
			if (fadeOut <= 0.5) {
				$(".header").addClass("bg_white");
			} else {
				$(".header").removeClass("bg_white");
			}
		} else {
			$(".main_visual").removeClass("start");
			$(".intro_hide .main_visual video, .intro_hide .main_visual .inbox").css("opacity", 1);
			$(".after_cover").css("opacity", 0);
			$(".header").removeClass("bg_white");
		}
	}
	$(window).on("scroll", bgRoundScroll);
	bgRoundScroll();
// service copy
	const $service    = $(".in_service .service").clone();
    const $outService = $(".out_service");

    // id 중복 방지
    $service.find("[id]").removeAttr("id");
    $service.find("[data-aos]").removeAttr("data-aos");

    $outService.append($service);
// Service end
	function checkServiceEnd() {
		const scrollTop     = $(window).scrollTop();
		const windowHeight  = $(window).height();
		const $service      = $(".main_service");
		const $inner        = $(".main_service .inner");
		const $inService   = $(".in_service");
		const serviceBottom = $service.offset().top + $service.outerHeight();

		if (scrollTop + windowHeight >= serviceBottom) {
			if (!$service.hasClass("end")) {
				$inner.css("height", $inner.outerHeight() + "px");
				$service.addClass("end");
				$inService.addClass("end");
			}
		} else {
			if ($service.hasClass("end")) {
				$service.removeClass("end");
				$inService.removeClass("end");
				$inner.css("height", "");
			}
		}
	}
	$(window).on("scroll", checkServiceEnd);
	checkServiceEnd();
// page_rotate
    function pageRotateScroll() {
        const scrollTop    = $(window).scrollTop();
        const windowHeight = $(window).height();
        const windowWidth  = $(window).width();
        const rad          = 15 * Math.PI / 180;
        $(".page_rotate").each(function () {
            const $pageRotate  = $(this);
            const $outbox      = $pageRotate.find(".outbox");
            const outboxTop    = $outbox.offset().top;
            const outboxHeight = $outbox.outerHeight();
            const extraUp      = (windowWidth / 2) * Math.sin(rad) + (outboxHeight / 2) * (1 - Math.cos(rad));
            const cornerTop    = outboxTop - extraUp;
            const scrollStart  = cornerTop - windowHeight;
            const scrollEnd    = $pageRotate.offset().top - windowHeight / 4;
            const progress     = Math.min(Math.max((scrollTop - scrollStart) / (scrollEnd - scrollStart), 0), 1);
            const rotate       = 15 * (1 - progress);
			const translateY = -(windowHeight / 5) * (1 - progress);
			$outbox.css("transform", `rotate(${rotate}deg) translateY(${translateY}px)`);
        });
    }
    $(window).on("scroll", pageRotateScroll);
    pageRotateScroll();
// Portfolio SVG
    function connectSvg() {
		const $svgT      = $(".svg_t");
		const $svgB      = $(".svg_b");
		const $container = $(".main_portfolio");

		if (!$svgT.length || !$svgB.length) return;
		$(".svg_connector").remove();

		// offset()은 document 기준 — 스크롤 포함
		const containerOffset = $container.offset();
		const tOffset = $svgT.offset();
		const bOffset = $svgB.offset();
		const tW      = $svgT.outerWidth();
		const tH      = $svgT.outerHeight();
		const bW      = $svgB.outerWidth();

		const x1 = (tOffset.left - containerOffset.left) + tW / 2;
		const y1 = (tOffset.top  - containerOffset.top)  + tH;
		const x2 = (bOffset.left - containerOffset.left) + bW / 2;
		const y2 = (bOffset.top  - containerOffset.top);

		const svgW = $container.outerWidth();
		const svgH = $container.outerHeight();

		const svg = `
			<svg class="svg_connector" xmlns="http://www.w3.org/2000/svg"
				width="${svgW}" height="${svgH}"
				style="position:absolute; top:0; left:0; pointer-events:none; z-index:9; overflow:visible;">
				<path d="M ${x1} ${y1} L ${x2} ${y2}" fill="none" stroke="#8A949E33" stroke-width="1"/>
			</svg>`;

		$container.css("position", "relative").append(svg);
	}

	$(window).on("load", connectSvg);
	let resizeTimer;
	$(window).on("resize", function () {
		clearTimeout(resizeTimer);
		resizeTimer = setTimeout(connectSvg, 100);
	});
// Portfolio marquee
    (function () {
        const $banner    = $(".main_portfolio .portfolio_marquee");
        const $origSlide = $banner.find(".list");
        const speed      = 1;
        let posX         = 0;
        let isPaused     = false;
        $banner.append($origSlide.clone().removeAttr("aria-label").attr("aria-hidden", "true"));
        const totalWidth = $origSlide.outerWidth(true);
        function marqueeLoop() {
            if (!isPaused) {
                posX -= speed;
                if (Math.abs(posX) >= totalWidth) posX = 0;
                $banner.find(".list").css("transform", `translateX(${posX}px)`);
            }
            requestAnimationFrame(marqueeLoop);
        }
        marqueeLoop();
        $banner.on("mouseenter", function () { isPaused = true; })
               .on("mouseleave", function () { isPaused = false; });
    })();
// FAQ
	$(".faq_list .faq_title button").click(function(){
		$(this).parent().next(".con").stop(true,true).slideToggle("fast").parent().stop(true,true).toggleClass("on").siblings().removeClass("on").children(".con").slideUp("fast");
		$(".faq_list li").removeClass("on_before");
		$(".faq_list li.on").prev("li").addClass("on_before");
	});
	$(".faq_list li:first-child").addClass("on").children(".con").show();
	$(".faq_list li:first-child").prev("li").addClass("on_before");
// AOS
	AOS.init({
		duration: 500,
	});
});
</script>

@endsection

@section('popups')
@if($popups->count() > 0)
    @foreach($popups as $popup)
        @if($popup->popup_display_type === 'normal')
            {{-- 일반팝업 (새창) --}}
            <script>
                document.addEventListener('DOMContentLoaded', function() {
                    const popupUrl = '{{ route("popup.show", $popup->id) }}';
                    const popupFeatures = 'width={{ $popup->width }},height={{ $popup->height }},left={{ $popup->position_left ?? 100 }},top={{ $popup->position_top ?? 100 }},scrollbars=yes,resizable=yes,menubar=no,toolbar=no,location=no,status=no';
                    window.open(popupUrl, 'popup_{{ $popup->id }}', popupFeatures);
                });
            </script>
        @else
            {{-- 레이어팝업 (오버레이) --}}
            <div class="popup-layer popup-fixed" 
                 id="popup-{{ $popup->id }}"
                 data-popup-id="{{ $popup->id }}"
                 data-display-type="layer"
                 style="position: absolute !important; width: {{ $popup->width }}px; height: auto; top: {{ $popup->position_top }}px; left: {{ $popup->position_left }}px; z-index: 99999;">
                
                <div class="popup-body">
                    @if($popup->popup_type === 'image' && $popup->popup_image)
                        @if($popup->url)
                            <a href="{{ $popup->url }}" target="{{ $popup->url_target }}">
                                <img src="{{ asset('storage/' . $popup->popup_image) }}" alt="{{ $popup->title }}">
                            </a>
                        @else
                            <img src="{{ asset('storage/' . $popup->popup_image) }}" alt="{{ $popup->title }}">
                        @endif
                    @elseif($popup->popup_type === 'html' && $popup->popup_content)
                        {!! $popup->popup_content !!}
                    @endif
                </div>
                
                <div class="popup-footer">
                    <label class="popup-today-label" data-popup-id="{{ $popup->id }}">
                        <input type="checkbox" class="popup-today-close" data-popup-id="{{ $popup->id }}">
                        1일 동안 보지 않음
                    </label>
                    <button type="button" class="popup-footer-close-btn" data-popup-id="{{ $popup->id }}">닫기</button>
                </div>
            </div>
        @endif
    @endforeach
@endif
@endsection