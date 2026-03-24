@extends('layouts.app')
@section('title'){{ $gName }} | {{ $sName }}@endsection
@section('gName', $gName)
@section('sName', $sName)
@section('description', '구축부터 운영까지 책임지는 홈페이지 유지보수 서비스. 홈페이지코리아입니다.')
@section('keywords', '홈페이지 유지보수(386), 홈페이지 관리업체(113), 홈페이지 유지보수 업체(76), 홈페이지 수정(213), 홈페이지 오류(50), 웹사이트 관리(356)')
@section('sga_plus')
,"mainEntity": [
    {
        "@@type": "Question",
        "name": "홈페이지 제작 비용은 어떻게 산정되나요?",
        "acceptedAnswer": {
            "@@type": "Answer",
            "text": "프로젝트 규모와 요구 기능에 따라 비용이 결정됩니다. 로그인 기능이 없는 기본 홈페이지도 가능하며, 회원 관리, 예약 시스템, ERP 연동 등 복잡한 기능이 추가될 경우 비용이 추가됩니다."
        }
    },
	{
		"@@type": "Question",
		"name": "다른 업체에서 제작한 홈페이지도 유지보수가 가능한가요?",
		"acceptedAnswer": {
			"@@type": "Answer",
			"text": "가능합니다. 기존 소스 코드와 기술 스택을 검토한 후 유지보수 범위를 안내드립니다. 구조에 따라 난이도 차이가 있을 수 있으며, 필요 시 리뉴얼이나 구조 개선도 제안드립니다."
		}
	}
	{
        "@@type": "Question",
        "name": "홈페이지 유지보수 계약 없이 건별로 의뢰할 수 있나요?",
        "acceptedAnswer": {
            "@@type": "Answer",
            "text": "건별로는 진행이 어렵습니다. 월 50만 원부터 최대 500만 원까지 고객사별 시스템 규모, 요청 빈도, 월 투입 공수를 기준으로 유지보수 요금을 산정하여 운영하고 있습니다."
        }
    },
	{
        "@@type": "Question",
        "name": "긴급 상황 발생 시 얼마나 빨리 대응하나요?",
        "acceptedAnswer": {
            "@@type": "Answer",
            "text": "영업일 기준 24시간 이내 1차 확인 및 처리를 원칙으로 합니다. 서버 다운, 결제 오류 등 치명적 오류는 즉시 대응하여 비즈니스 중단 시간을 최소화합니다."
        }
    },
	{
        "@@type": "Question",
        "name": "유지보수 범위에 포함되지 않는 작업은 무엇인가요?",
        "acceptedAnswer": {
            "@@type": "Answer",
            "text": "신규 페이지 추가, 대규모 기능 개발, 디자인 전면 개편 등 구조 변경을 동반하는 작업은 별도 개발 프로젝트로 진행됩니다. 유지보수는 기존 기능 수정, 오류 대응, 경미한 개선에 한정되며, 작업 전 범위와 비용을 사전 안내드립니다."
        }
    },
	{
        "@@type": "Question",
        "name": "유지보수 관리 계약 방식은 어떻게 되나요?",
        "acceptedAnswer": {
            "@@type": "Answer",
            "text": "월 단위 또는 연간 계약으로 진행되며, 실제 투입된 작업 공수를 기준으로 관리합니다. 계약 조건에 따라 디자인·퍼블리싱 공수만 포함하거나, 기획·디자인·퍼블리싱·개발 공수를 모두 포함하는 방식으로 구성할 수 있습니다. 월별 작업 내역과 공수는 투명하게 리포트로 제공됩니다."
        }
    }
]
@endsection

@section('content')
<main class="sub_contents_wrap infopage_wrap">

	<section class="infopage_head service_head main_service" aria-labelledby="service-head-title" data-header="dark">
		<div class="inner">
			<h1 id="service-head-title" class="mojo_aos">개발사가 직접 관리하는 홈페이지 유지보수 <br/>홈페이지코리아에게 맡기세요.</h1>
			<p class="tb mojo_aos"><strong>27년 업력의 홈페이지코리아</strong>가 홈페이지 제작뿐만 아니라 <strong>유지보수, 운영까지 책임집니다.</strong></p>
			<div class="btns flex_center mojo_aos">
				<a href="/portfolio/" class="btn_link slim">포트폴리오 보러가기</a>
				<a href="/contact/" class="btn_link slim">프로젝트 문의하기</a>
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
				<h2 id="service-problem-title" data-aos="zoom-out-up">홈페이지 배포는 됐는데<br/> <strong>이런 문제를 경험하셨나요?</strong></h2>
				<ul class="problem_list">
					<li data-aos="zoom-out-up">
						<h3>긴급 오류가 발생했는데 개발사 연락이 안 돼요 <img src="/images/emoji_anger.png" alt="" aria-hidden="true"></h3>
						<p>갑작스러운 서버 다운, 결제 오류, 페이지 접속 불가. 비즈니스가 멈추는 순간을 경험했어요.</p>
					</li>
					<li data-aos="zoom-out-up">
						<h3>자체 개발팀이 없어서 작은 수정도 어려워요 <img src="/images/emoji_sad.png" alt="" aria-hidden="true"></h3>
						<p>텍스트 하나, 이미지 하나 바꾸는데도 외주 의뢰가 필요합니다.</p>
					</li>
					<li data-aos="zoom-out-up">
						<h3>보안 업데이트와 성능 관리가 불안해요 <img src="/images/emoji_tears.png" alt="" aria-hidden="true"></h3>
						<p>문제가 생긴 뒤에 대응하면 이미 늦습니다. 전문가의 선제적인 점검과 관리가 필요합니다.</p>
					</li>
				</ul>
				<div class="dots" aria-hidden="true" data-aos="zoom-out-up"><i class="t"></i><i class="m"></i><i class="b"></i></div>
			</div>
		</div>
	</section>

	<section class="infopage_solution service_solution bg_white" aria-labelledby="service-solution-title" data-header="light">
		<div class="inner">
			<p class="tit_label" data-aos="zoom-out-up">SOLUTION</p>
			<h2 id="service-solution-title" data-aos="zoom-out-up">홈페이지 제작, 끝이 아닙니다.<br/> <strong>지속적인 관리로 비즈니스를 성장시키세요.</strong></h2>
			<ul class="solution_list" data-aos="zoom-out-up">
				<li class="i_c1">
					<h3>긴급 대응 및 홈페이지 오류 처리</h3>
					<p>모든 홈페이지 유지보수 요청은 <br class="pc_vw">영업일 기준 24시간 이내에 <br class="pc_vw">1차적으로 확인하고 처리합니다.</p>
				</li>
				<li class="i_c2">
					<h3>콘텐츠 및 기능 수정 지원</h3>
					<p>텍스트, 이미지, 배너 제작 등 콘텐츠 수정부터 <br class="pc_vw">기능 개선, 버그 수정까지 빠르게 처리하고 <br class="pc_vw">운영 업무도 함께 지원합니다.</p>
				</li>
				<li class="i_c3">
					<h3>선제적 보안·성능 관리</h3>
					<p>보안 업데이트, 성능 최적화 등 <br class="pc_vw">권장 사항을 투명하게 안내하여 <br class="pc_vw">예상치 못한 장애와 보안 위험을 사전에 차단합니다.</p>
				</li>
			</ul>
		</div>
	</section>

	<section class="infopage_how service_how" aria-labelledby="service-how-title" data-header="dark">
		<div class="inner">
			<p class="tit_label" data-aos="zoom-out-up">HOW</p>
			<h2 id="service-how-title" data-aos="zoom-out-up"><strong>제작만큼 중요한 홈페이지 유지보수,</strong><br/>홈페이지코리아가 이렇게 책임집니다</h2>
			<ul class="how_step_list">
				<li class="i_c1" data-aos="zoom-out-up">
					<span>STEP 01</span>
					<h3>문제 발생 및 유지보수 요청</h3>
					<ul>
						<li>유지보수 전담 PM이 직접 요청 접수하여 불필요한 커뮤니케이션 비용 최소화</li>
					</ul>
				</li>
				<li class="i_c2" data-aos="zoom-out-up">
					<span>STEP 02</span>
					<h3>유지보수 접수 및 안내</h3>
					<ul>
						<li>영업일 기준 24시간 이내 확인</li>
						<li>유지보수 범위를 넘어서는 작업은 건별 개발로 분리하여 별도 안내</li>
					</ul>
				</li>
				<li class="i_c3" data-aos="zoom-out-up">
					<span>STEP 03</span>
					<h3>유지보수 처리</h3>
					<ul>
						<li>서버 다운, 결제 오류, 페이지 접속 불가 등 긴급한 문제의 경우 즉시 대응</li>
					</ul>
				</li>
			</ul>
		</div>
	</section>
	
	<section class="infopage_review service_review bg_white" aria-labelledby="service-review-title" data-header="light">
		<div class="line_wrap">
			<i class="t1" aria-hidden="true"></i><i class="b1" aria-hidden="true"></i>
			<svg class="line_svg" aria-hidden="true"></svg>
		</div>
		<div class="inner">
			<p class="tit_label" data-aos="zoom-out-up">REVIEW</p>
			<h2 id="service-review-title" data-aos="zoom-out-up">1,100개+ 고객사가 <br/><strong>홈페이지코리아를 추천합니다.</strong></h2>
			<ul class="review_list">
				<li data-aos="zoom-out-up">
					<h3 class="sound_only">공공기관</h3>
					<div class="flex_tit">
						<h4>박물관 특성상 주말에도 운영되는데, 갑자기 예약  시스템에 오류가 발생했을 때 즉시 대응해주셔서 관람객 불편을 최소화할 수 있었어요. <strong>전담 PM이 배정</strong>되어 있어 <strong>매번 상황을 새로 설명할 필요 없이 빠르게 소통</strong>할 수 있는 점이 가장 만족스럽습니다.</h4>
					</div>
					<p><i><img src="/images/icon_review_logo_blank.svg" alt="" aria-hidden="true"></i>00박물관<span aria-hidden="true">공공기관</span></p>
				</li>
				<li data-aos="zoom-out-up">
					<h3 class="sound_only">재단</h3>
					<div class="flex_tit">
						<h4>B2B 거래 특성상 고객사별 맞춤 가격 설정, 재고 관리 등 복잡한 시스템을 운영하고 있는데요. 홈페이지코리아가 구축 당시부터 <strong>우리 업무 프로세스를 완벽히 이해</strong>하고 있어서, <strong>작은 수정이나 개선 사항도 정확하게 반영</strong>됩니다.</h4>
					</div>
					<p><i><img src="/images/icon_review_logo_blank.svg" alt="" aria-hidden="true"></i>00기업<span aria-hidden="true">재단</span></p>
				</li>
				<li data-aos="zoom-out-up">
					<h3 class="sound_only">학회</h3>
					<div class="flex_tit">
						<h4>연구 장비 예약 시스템이라 보안이 무엇보다 중요한데, 정기적으로 보안 점검 결과를 리포트로 받고 있어요. <strong>문제가 생기기 전에 미리 조치</strong>해주셔서 지금까지 큰 장애 없이 <strong>안정적으로 운영하고 있습니다.</strong></h4>
					</div>
					<p><i><img src="/images/icon_review_logo_blank.svg" alt="" aria-hidden="true"></i>00학교<span aria-hidden="true">학회</span></p>
				</li>
			</ul>
			<div class="flex_center" data-aos="zoom-out-up">
				<a href="/portfolio/" class="btn_link slim">유지 보수 사례 더보기</a>
			</div>
		</div>
	</section>

	<section class="infopage_contact service_contact page_contact" aria-label="service-contact-title" data-header="dark">
		<div class="inner">
			<p class="tit_label sound_only">CTA</p>
			<h2 id="service-contact-title" class="port_tit" data-aos="zoom-out-up"><strong>홈페이지 제작부터 유지보수까지 </strong><br/>홈페이지코리아와 상의하세요</h2>
			<div class="btns flex_center">
				<a href="/portfolio/" class="btn_link" data-aos="zoom-out-up">포트폴리오 보러가기</a>
				<a href="/contact/" class="btn_link" data-aos="zoom-out-up">프로젝트 문의하기</a>
			</div>
		</div>
	</section>

	<section class="infopage_faq service_faq" aria-label="service-faq-title" data-header="dark">
		<div class="inner">
			<p class="tit_label" data-aos="zoom-out-up">FAQ</p>
			<h2 id="service-faq-title" data-aos="zoom-out-up"><strong>자주 묻는 질문</strong></h2>
			<ul class="faq_list" data-aos="zoom-out-up">
				<li>
					<h3><button type="button">홈페이지 유지보수 계약 없이 건별로 의뢰할 수 있나요?</button></h3>
					<div class="con">건별로는 진행이 어렵습니다. 월 50만 원부터 최대 500만 원까지 고객사별 시스템 규모, 요청 빈도, 월 투입 공수를 기준으로 유지보수 요금을 산정하여 운영하고 있습니다.</div>
				</li>
				<li>
					<h3><button type="button">다른 업체에서 제작한 홈페이지도 유지보수가 가능한가요?</button></h3>
					<div class="con">네, 가능합니다.<br>
						타 업체에서 제작된 홈페이지라도 구조와 개발 환경을 검토한 후 유지보수 진행이 가능합니다.<br>
						기존 소스 코드의 구조나 사용된 기술 스택, 관리자 기능 구성 등에 따라 일부 기능은 수정 난이도가 높거나 추가 개발이 필요할 수 있습니다.<br>
						초기 검토를 통해 유지보수 가능 범위와 개선이 필요한 부분을 함께 안내드리며 필요 시 안정적인 운영을 위한 리뉴얼 또는 구조 개선도 제안드립니다.
					</div>
				</li>
				<li>
					<h3><button type="button">긴급 상황 발생 시 얼마나 빨리 대응하나요?</button></h3>
					<div class="con">영업일 기준 24시간 이내 1차 확인 및 처리를 원칙으로 합니다. 서버 다운, 결제 오류 등 치명적 오류는 즉시 대응하여 비즈니스 중단 시간을 최소화합니다.</div>
				</li>
				<li>
					<h3><button type="button">유지보수 범위에 포함되지 않는 작업은 무엇인가요?</button></h3>
					<div class="con">신규 페이지 추가, 대규모 기능 개발, 디자인 전면 개편 등 구조 변경을 동반하는 작업은 별도 개발 프로젝트로 진행됩니다. 유지보수는 기존 기능 수정, 오류 대응, 경미한 개선에 한정되며, 작업 전 범위와 비용을 사전 안내드립니다.</div>
				</li>
				<li>
					<h3><button type="button">유지보수 관리 계약 방식은 어떻게 되나요?</button></h3>
					<div class="con">월 단위 또는 연간 계약으로 진행되며, 실제 투입된 작업 공수를 기준으로 관리합니다. 계약 조건에 따라 디자인·퍼블리싱 공수만 포함하거나, 기획·디자인·퍼블리싱·개발 공수를 모두 포함하는 방식으로 구성할 수 있습니다. 월별 작업 내역과 공수는 투명하게 리포트로 제공됩니다.</div>
				</li>
			</ul>
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
		const $mainService  = $(".infopage_head");
		const $bgRound      = $(".bg_round");
		const $marquee      = $(".infopage_head .marquee_banner");
		const scrollTop     = $(window).scrollTop();
		const windowHeight  = $(window).height();
		const serviceTop    = $mainService.offset().top;
		const paddingTop    = parseInt($mainService.css("padding-top"));
		const marqueeHeight = $marquee.outerHeight();
		const marqueeMargin = parseInt($marquee.css("margin-bottom"));
		const initY         = -(paddingTop + marqueeHeight + marqueeMargin);

		const offset       = 200; // ← 이 값으로 기준점 조정 (높일수록 더 아래에서 시작)
		const scrollStart  = serviceTop - windowHeight + offset;
		const scrollEnd    = serviceTop + offset;

		if (scrollTop >= scrollStart) {
			$mainService.addClass("start");
		} else {
			$mainService.removeClass("start");
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
// step_list
    const $items   = $(".how_step_list > li");
    const interval = 3000;
    let current    = 0;
    let timer      = null;
    let started    = false;
    function stepNext() {
        $items.removeClass("on");
        $items.eq(current).addClass("on");
        current = (current + 1) % $items.length;
    }
    function startStep() {
        if (started) return;
        started = true;
        stepNext();
        timer = setInterval(stepNext, interval);
    }
    function checkStepList() {
        if (started) return;
        const $list     = $(".how_step_list");
        if (!$list.length) return;
        const listBottom = $list.offset().top + $list.outerHeight();
        const viewBottom = $(window).scrollTop() + $(window).height();
        if (viewBottom >= listBottom) {
            startStep();
        }
    }
    $(window).on("scroll", checkStepList);
    checkStepList();
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
// FAQ
	$(".faq_list button").click(function(){
		$(this).parent().next(".con").stop(true,true).slideToggle("fast").parent().stop(true,true).toggleClass("on").siblings().removeClass("on").children(".con").slideUp("fast");
		$(".faq_list li").removeClass("on_before");
		$(".faq_list li.on").prev("li").addClass("on_before");
	});
	$(".faq_list li:first-child").addClass("on").children(".con").show();
	$(".faq_list li:first-child").prev("li").addClass("on_before");
// AOS
	AOS.init({
		duration: 1000,
	});
});
</script>

@endsection