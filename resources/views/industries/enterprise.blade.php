@extends('layouts.app')
@section('title'){{ $gName }} | {{ $sName }}@endsection
@section('gName', $gName)
@section('sName', $sName)
@section('description', '대기업·중견기업 IT팀을 위한 맞춤형 웹사이트 구축. 복잡한 시스템 연동부터 보안까지, 27년 경험의 홈페이지코리아가 책임집니다.')
@section('keywords', '기업 홈페이지 제작(4,150), 대기업 홈페이지(37), 기업 웹사이트 제작(563), 전사적 자원 관리(466), ERP 개발(490), LMS 시스템(423)')

@section('content')
<main class="sub_contents_wrap infopage_wrap">

	<section class="infopage_head industry_head main_service" aria-labelledby="industry-head-title" data-header="dark">
		<div class="inner">
			<h1 id="industry-head-title" class="mojo_aos">대기업과 중견기업 IT팀을 위한 <br class="pc_vw">엔터프라이즈급 기업 홈페이지 제작</h1>
			<p class="tb mojo_aos"><strong>복잡한 요구사항과 높은 보안 수준을 충족하는 맞춤형 웹사이트 구축,</strong> <br class="pc_vw">홈페이지코리아가 귀사의 IT 팀원이 되어드립니다.</p>
			<div class="btns flex_center mojo_aos">
				<a href="/portfolio/" class="btn_link slim">포트폴리오 보러가기</a>
				<a href="/contact/" class="btn_link slim">프로젝트 문의하기</a>
			</div>
			<div class="flex_center mojo_aos">
				<div class="img"><img src="/images/img_industry_a01.jpg" alt=""></div>
			</div>
		</div>
		<div class="marquee_banner mojo_aos">
			<ul class="slide" aria-label="주요 고객사 목록">
				<li><img src="/images/main_service_a01.svg" alt="United Nations" title="United Nations"></li>
				<li><img src="/images/main_service_a02.svg" alt="서울대학교 농생명과학공동기기원" title="서울대학교 농생명과학공동기기원"></li>
				<li><img src="/images/main_service_a03.svg" alt="파크랜드" title="파크랜드"></li>
				<li><img src="/images/main_service_a04.svg" alt="국립스포츠박물관" title="국립스포츠박물관"></li>
				<li><img src="/images/main_service_a05.svg" alt="KB부동산신탁" title="KB부동산신탁"></li>
				<li><img src="/images/main_service_a06.svg" alt="PARADISE CITY" title="PARADISE CITY"></li>
				<li><img src="/images/main_service_a07.svg" alt="CJ Innovation" title="CJ Innovation"></li>
				<li><img src="/images/main_service_a08.svg" alt="한양대학교" title="한양대학교"></li>
				<li><img src="/images/main_service_a09.svg" alt="세종대학교" title="세종대학교"></li>
				<li><img src="/images/main_service_b01.png" alt="KOREAN AIR" title="KOREAN AIR"></li>
				<li><img src="/images/main_service_b02.png" alt="GS 글로벌" title="GS 글로벌"></li>
				<li><img src="/images/main_service_b03.png" alt="GS 에너지" title="GS 에너지"></li>
				<li><img src="/images/main_service_b04.svg" alt="GS 파워" title="GS 파워"></li>
				<li><img src="/images/main_service_b05.svg" alt="OMRON" title="OMRON"></li>
				<li><img src="/images/main_service_b06.svg" alt="국민체육진흥공단" title="국민체육진흥공단"></li>
			</ul>
		</div>
		<div class="inner" data-aos="fade-up">
			<div class="bg_round"><div class="in_gradient"></div></div>
			<div class="problem service">
				<p class="tit_label" data-aos="zoom-out-up">PROBLEM</p>
				<h2 id="industry-problem-title" data-aos="zoom-out-up"><strong>기업용 웹사이트 제작,</strong>이런 고민이 있으신가요?</h2>
				<ul class="problem_list">
					<li data-aos="zoom-out-up">
						<h3>복잡한 내부 시스템과 홈페이지를 연동시키고 싶어요. <img src="/images/emoji_whirl.png" alt="" aria-hidden="true"></h3>
						<p>ERP, CRM, LMS 등 기존 시스템과 웹사이트가 유기적으로 연결되어야 하는데, 데이터 호환성과 보안 이슈로 통합이 어렵습니다.</p>
					</li>
					<li data-aos="zoom-out-up">
						<h3>까다로운 보안 요구사항을 충족시킬 수 있는 업체, 어디 없을까요? <img src="/images/emoji_worry.png" alt="" aria-hidden="true"></h3>
						<p>개인정보보호법, 정보보안 정책, 내부망/외부망 분리 등 엄격한 보안 기준을 만족하는 개발사를 찾기 어렵습니다.</p>
					</li>
					<li data-aos="zoom-out-up">
						<h3>담당자 변경에도 지속 가능한 시스템이 필요합니다. <img src="/images/emoji_tears2.png" alt="" aria-hidden="true"></h3>
						<p>인사이동이 잦은 조직 특성상, 담당자가 바뀌어도 시스템을 안정적으로 운영할 수 있는 구조가 필수입니다.</p>
					</li>
				</ul>
				<div class="dots" aria-hidden="true" data-aos="zoom-out-up"><i class="t"></i><i class="m"></i><i class="b"></i></div>
			</div>
		</div>
	</section>
	
	<section class="infopage_solution industry_solution bg_white" aria-labelledby="industry-solution-title" data-header="light">
		<div class="inner">
			<p class="tit_label" data-aos="zoom-out-up">SOLUTION</p>
			<h2 id="industry-solution-title" data-aos="zoom-out-up">어떤 복잡한 요구사항도 <br class="pc_vw"><strong>홈페이지코리아가 안정적으로 구현합니다.</strong></h2>
			<ul class="solution_list" data-aos="zoom-out-up">
				<li class="i_a1">
					<h3>엔터프라이즈급 <br class="pc_vw">웹 시스템 통합 역량</h3>
					<p>내부망/외부망 분리, DMZ 구성, 폐쇄망 등 <br class="pc_vw">복잡한 네트워크 환경에서도 안정적으로 구축합니다.</p>
				</li>
				<li class="i_a2">
					<h3>검증된 <br class="pc_vw">웹, 앱 보안 체계</h3>
					<p>시큐어 코딩, SSO, 2FA 등 <br class="pc_vw">엔터프라이즈급 보안을 기본으로 설계합니다.</p>
				</li>
				<li class="i_a3">
					<h3>지속 가능한 <br class="pc_vw">유지/보수/운영 체계</h3>
					<p>체계적인 매뉴얼과 운영 교육으로 인수인계가 원활하며, <br class="pc_vw">선택적 유지보수로 불필요한 고정 비용을 최소화합니다.</p>
				</li>
			</ul>
		</div>
	</section>
	
	<section class="infopage_why industry_why" aria-labelledby="industry-why-title" data-header="dark">
		<div class="inner">
			<p class="tit_label" data-aos="zoom-out-up">WHY HOMEPAGEKOREA?</p>
			<h2 id="industry-why-title" data-aos="zoom-out-up">왜 대기업/중견기업이 <br class="pc_vw"><strong>홈페이지코리아를 선택했을까요?</strong></h2>
			<ul class="why_list">
				<li data-aos="zoom-out-up">
					<div class="imgfit"><img src="/images/industry_way_a01.png" alt="" aria-hidden="true"></div>
					<div class="txt">
						<h3><strong>1,100+</strong> <br class="pc_vw">프로젝트 완수</h3>
						<p>1999년부터 <strong>대기업, 중견기업 등 복잡한 요구사항</strong>을 가진 <br class="pc_vw">프로젝트를 수행하며 <strong>쌓은 노하우</strong>로<br class="pc_vw"> <strong>프로젝트 성공률 99%</strong>를 유지하고 있습니다.</p>
						<a href="/partfolio/" class="btn_link">포트폴리오 보러가기</a>
					</div>
				</li>
				<li data-aos="zoom-out-up">
					<div class="imgfit"><img src="/images/industry_way_a02.png" alt="" aria-hidden="true"></div>
					<div class="txt">
						<h3>평균 <strong>10년 경력</strong>의 <br class="pc_vw"><strong>전문 PM</strong> 배정</h3>
						<p>대형 프로젝트는 <strong>대기업/기관 경험이 풍부한 <br class="pc_vw">전문 PM</strong>이 전담합니다.<br/><strong>기술적 이슈를 빠르게 파악</strong>하고,<br class="pc_vw"> <strong>복잡한 요구사항도 정확히 구현</strong>합니다.</p>
					</div>
				</li>
				<li data-aos="zoom-out-up">
					<div class="imgfit"><img src="/images/industry_way_a03.png" alt="" aria-hidden="true"></div>
					<div class="txt">
						<h3>오픈소스가 아닌 <br class="pc_vw"><strong>맞춤형 웹, 앱, AI 개발</strong></h3>
						<p>자체 개발팀이 <strong>React, Laravel, Next.js 등 <br class="pc_vw">최신 기술 스택으로 자체 개발</strong>하여 <br class="pc_vw">기업의 고유한 요구사항도 정확히 구현합니다.</p>
					</div>
				</li>
				<li data-aos="zoom-out-up">
					<div class="imgfit"><img src="/images/industry_way_a04.png" alt="" aria-hidden="true"></div>
					<div class="txt">
						<h3>SEO, GEO까지 고려한 <br class="pc_vw"><strong>웹사이트 구조화</strong></h3>
						<p>디자인만 예쁜 웹사이트가 아니라, <br class="pc_vw"><strong>검색 엔진과 AI에 최적화된 구조로 설계</strong>하여 <br class="pc_vw"><strong>자연 유입 트래픽을 확보</strong>하고 <strong>온라인 가시성</strong>을 높입니다.</p>
					</div>
				</li>
				<li data-aos="zoom-out-up">
					<div class="imgfit"><img src="/images/industry_way_a05.png" alt="" aria-hidden="true"></div>
					<div class="txt">
						<h3><strong>합리적 개발 비용</strong> 과 <br class="pc_vw"><strong>명확한 일정 관리</strong> 배정</h3>
						<p><strong>타사 대비 20~30% 합리적인 비용</strong>으로 진행하며, <br class="pc_vw">WBS 기반 일정 관리로 <strong>약속된 일정을 준수</strong>합니다.</p>
					</div>
				</li>
			</ul>
		</div>
	</section>
	
	<section class="infopage_expertise industry_expertise" aria-labelledby="industry-expertisetitle" data-header="dark">
		<div class="inner">
			<p class="tit_label" data-aos="zoom-out-up">EXPERTISE</p>
			<h2 id="industry-expertisetitle" data-aos="zoom-out-up"><strong>홈페이지코리아를 우리 인하우스 IT팀으로!</strong><br/> 다양한 IT 프로젝트가 가능합니다.</h2>
			<ul class="expertise_list">
				<li class="i_a1" data-aos="zoom-out-up">
					<h3>홈페이지 제작</h3>
					<p>비즈니스를 성장시키는 <br class="pc_vw">홈페이지 제작</p>
				</li>
				<li class="i_a2" data-aos="zoom-out-up">
					<h3>홈페이지 유지보수</h3>
					<p>전문가가 직접 관리하는 <br class="pc_vw">홈페이지 유지보수</p>
				</li>
				<li class="i_a3" data-aos="zoom-out-up">
					<h3>통합 SI 시스템 개발</h3>
					<p>운영 효율을 높이는 <br class="pc_vw">시스템 개발</p>
				</li>
				<li class="i_a4" data-aos="zoom-out-up">
					<h3>앱 개발</h3>
					<p>앱 개발, 맞춤형 설계부터 <br class="pc_vw">스토어 출시까지</p>
				</li>
			</ul>
		</div>
	</section>
	
	<section class="infopage_review industry_review bg_white" aria-labelledby="industry-review-title" data-header="light">
		<div class="line_wrap">
			<i class="t1" aria-hidden="true"></i><i class="b1" aria-hidden="true"></i>
			<svg class="line_svg" aria-hidden="true"></svg>
		</div>
		<div class="inner">
			<p class="tit_label" data-aos="zoom-out-up">REVIEW</p>
			<h2 id="industry-review-title" data-aos="zoom-out-up"><strong>이미 많은 대기업/중견기업이</strong> <br>홈페이지코리아를 선택했습니다.</h2>
			<ul class="review_list">
				<li data-aos="zoom-out-up">
					<h3 class="sound_only">금융</h3>
					<div class="flex_tit">
						<h4>금융권이라 보안 요구사항이 까다로운데, <strong>전자정부프레임워크 기반</strong>으로 안정적으로 구축해주셨어요. <strong>내부망/외부망 분리 환경에서도 	문제없이 작동</strong>하고, <strong>취약점 점검까지 완료</strong>해서 보안 심사를 무사히 통과할 수 있었습니다.</h4>
					</div>
					<p><i><img src="/images/icon_review_logo_blank.svg" alt="" aria-hidden="true"></i>00기업<span aria-hidden="true">금융</span></p>
				</li>
				<li data-aos="zoom-out-up">
					<h3 class="sound_only">유통</h3>
					<div class="flex_tit">
						<h4>여러 브랜드를 운영하다 보니 마케팅팀과 IT팀의 요구사항이 달라 조율이 어려웠는데요. <strong>홈페이지코리아 PM분이 양쪽의 니즈를 모두 이해</strong>하고 <strong>최적의 방안을 제시</strong>해주셨어요.</h4>
					</div>
					<p><i><img src="/images/icon_review_logo_blank.svg" alt="" aria-hidden="true"></i>00기업<span aria-hidden="true">유통</span></p>
				</li>
				<li data-aos="zoom-out-up">
					<h3 class="sound_only">제조업</h3>
					<div class="flex_tit">
						<h4>우리 회사의 복잡한 B2B 거래 특성을 완벽히 이해하고 그에 맞게 구축해주었습니다. 요청사항을 신속하게 반영해주어 높은 만족도로 사용하고 있습니다. 구축 후  <strong>불필요한 수작업이 줄고 주문/재고 관리 시스템이  	일원화</strong>되어 <strong>업무 효율이 비약적으로 올랐습니다.</strong></h4>
					</div>
					<p><i><img src="/images/icon_review_logo_blank.svg" alt="" aria-hidden="true"></i>00기업<span aria-hidden="true">제조업</span></p>
				</li>
			</ul>
		</div>
	</section>
	
	<section class="infopage_contact industry_contact page_contact" aria-label="industry-contact-title" data-header="dark">
		<div class="inner">
			<p class="tit_label sound_only">CTA</p>
			<h2 id="industry-contact-title" class="port_tit" data-aos="zoom-out-up"><strong>대기업과 중견기업을 위한 맞춤형 홈페이지 제작</strong> <br class="pc_vw">홈페이지코리아와 상담하세요.</h2>
			<div class="btns flex_center">
				<a href="/portfolio/" class="btn_link" data-aos="zoom-out-up">포트폴리오 보러가기</a>
				<a href="/contact/" class="btn_link" data-aos="zoom-out-up">프로젝트 문의하기</a>
			</div>
		</div>
	</section>

</main>

<script>
$(document).ready(function(){
// marquee
    (function () {
        const $banner    = $(".infopage_head .marquee_banner");
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
// bg_round
    function bgRoundScroll() {
		const $mainIndustry = $(".infopage_head");
		const $bgRound      = $(".bg_round");
		const $marquee      = $(".infopage_head .marquee_banner");
		const scrollTop     = $(window).scrollTop();
		const windowHeight  = $(window).height();
		const serviceTop    = $mainIndustry.offset().top;
		const paddingTop    = parseInt($mainIndustry.css("padding-top"));
		const marqueeHeight = $marquee.outerHeight();
		const marqueeMargin = parseInt($marquee.css("margin-bottom"));
		const initY         = -(paddingTop + marqueeHeight + marqueeMargin);

		// bg_round가 화면에 보이기 시작하는 시점 기준
		const bgRoundTop   = $bgRound.offset().top;
		const scrollStart  = bgRoundTop - windowHeight;  // bg_round 상단이 뷰포트 하단에 닿는 시점
		const scrollEnd    = bgRoundTop;                  // bg_round 상단이 뷰포트 상단에 닿는 시점

		if (scrollTop >= scrollStart) {
			$mainIndustry.addClass("start");
		} else {
			$mainIndustry.removeClass("start");
		}

		const progress     = Math.min(Math.max((scrollTop - scrollStart) / (scrollEnd - scrollStart), 0), 1);
		const translateY   = initY + (-initY * progress);
		const scale        = 1 + 3 * progress;
		const brBottom     = 50 * (1 - progress);
		const borderRadius = `50% 50% ${brBottom}% ${brBottom}%`;

		if (scrollTop >= scrollStart) {
			$bgRound.css({ "transform": `translate(-50%, ${translateY}px) scale(${scale})`, "border-radius": borderRadius });
		} else {
			$bgRound.css({ "transform": `translate(-50%, ${initY}px) scale(1)`, "border-radius": "50%" });
		}
	}
	$(window).on("scroll", bgRoundScroll);
	bgRoundScroll();
// review 사선
	function drawLines() {
		const $wrap = $('.line_wrap');
		const $svg  = $wrap.find('.line_svg');
		const pairs = [['t1','b1']];
		const wrapOffset = $wrap.offset();

		$svg.empty();

		pairs.forEach(function([tClass, bClass], index) {
			const $t = $wrap.find('.' + tClass);
			const $b = $wrap.find('.' + bClass);
			if (!$t.length || !$b.length) return;

			const tOffset = $t.offset();
			const bOffset = $b.offset();

			const x1 = tOffset.left - wrapOffset.left + $t.outerWidth()  / 2;
			const y1 = tOffset.top  - wrapOffset.top  + $t.outerHeight() / 2;
			const x2 = bOffset.left - wrapOffset.left + $b.outerWidth()  / 2;
			const y2 = bOffset.top  - wrapOffset.top  + $b.outerHeight() / 2;

			const length = Math.sqrt(Math.pow(x2 - x1, 2) + Math.pow(y2 - y1, 2));

			const line = document.createElementNS('http://www.w3.org/2000/svg', 'line');
			$(line).attr({
				x1, y1, x2, y2,
				stroke: '#8A949E33',
				'stroke-width': '1',
				'stroke-dasharray': length,
				'stroke-dashoffset': length  // 초기 숨김 상태
			});
			$(line).addClass('line_item').attr('data-delay', index * 0.15);

			$svg.append(line);
		});
	}

	function startLineAnimation() {
		$('.line_wrap .line_item').each(function() {
			const delay = $(this).attr('data-delay');
			$(this).css({
				animation: `drawLine 1.2s ease forwards`,
				'animation-delay': delay + 's'
			});
		});
	}

	// IntersectionObserver로 .portfolio_problem 중앙 도달 감지
	const observer = new IntersectionObserver(function(entries) {
		entries.forEach(function(entry) {
			if (entry.isIntersecting) {
				startLineAnimation();
				observer.unobserve(entry.target); // 한 번만 실행
			}
		});
	}, {
		rootMargin: '-50% 0px -50% 0px'  // 화면 중앙에 도달할 때
	});

	$(window).on('load', function() {
		drawLines();
		const target = document.querySelector('.infopage_review');
		if (target) observer.observe(target);
	});

	$(window).on('resize', function() {
		drawLines();
	});
// review_list
	function equalReviewHeight() {
		const $items = $(".review_list .flex_tit");
		$items.css("height", ""); // 초기화
		if ($(window).width() >= 768) {
			let maxH = 0;
			$items.each(function () {
				maxH = Math.max(maxH, $(this).outerHeight());
			});
			$items.css("height", maxH + "px");
		}
	}
	$(window).on("load resize", equalReviewHeight);
// contact
	const observerContact = new IntersectionObserver(function(entries) {
		entries.forEach(function(entry) {
			if (entry.isIntersecting) {
				$(".infopage_contact").addClass("start");
			} else {
				// 요소가 아직 아래에 있을 때만 해제
				if (entry.boundingClientRect.top > window.innerHeight / 2) {
					$(".infopage_contact").removeClass("start");
				}
			}
		});
	}, {
		threshold: 0.5  // 요소의 50%가 보일 때 트리거
	});

	const contactTarget = document.querySelector('.infopage_contact');
	if (contactTarget) observerContact.observe(contactTarget);
// AOS
	AOS.init({
		duration: 1000,
	});
});
</script>

@endsection