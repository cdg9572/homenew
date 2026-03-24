@extends('layouts.app')
@section('title', $sName)
@section('sName', $sName)
@section('description', '중견/대기업, 학회/협회, 공공기관, 병원/의료, 대학/학원 등 다양한 분야의 홈페이지 제작 포트폴리오를 확인하세요. 홈페이지제작, 유지보수, 온라인쇼핑몰, SI시스템개발, 앱개발, AI솔루션까지 제공합니다.')
@section('sga_plus')
,"mainEntity": {
    "@@type": "CreativeWork",
    "name": "신원의료재단 웹사이트 리뉴얼",
    "description": "@yield('description')",
    "url": "https://homepagekorea.com",
    "image": "https://homepagekorea.com/images/img_sample.jpg",
    "creator": {
        "@@type": "Organization",
        "name": "홈페이지코리아",
        "url": "https://homepagekorea.com"
    },
    "client": "신원의료재단"
}
@endsection

@section('content')
<main class="sub_contents_wrap">

	<section class="portfolio_head" aria-label="portfolio-head-title">
		<div class="bg imgfit"><img src="/images/img_portfolio_head_sample.jpg" alt="" aria-hidden="true"></div>
		<div class="inner">
			<span class="type mojo_aos">병원/의료</span>
			<h1 id="portfolio-head-title" class="mojo_aos">신원의료재단 <br>웹사이트 리뉴얼</h1>
			<h2 class="sound_only"><span>Industry</span>병원/의료 홈페이지 개편 / 업종</h2>
			<p class="mojo_aos">신원의료재단은 2005년 설립된 이래 진단검사, 분자진단검사, 분자병리검사, 조직병리검사, 세포병리검사, 연구용 검사 등 <br class="pc_vw">전국 병ㆍ의원으로부터 다양한 검체를 위탁받아 최고 품질의 진단검사 서비스를 제공하는 최우수 전문수탁기관으로 성장하였습니다.</p>
			<div class="tar mojo_aos">
				<a href="" class="btn_link">사이트 방문하기</a>
			</div>
		</div>
	</section>
	
	<section class="portfolio_padding portfolio_problem" aria-label="portfolio-problem-title">
		<div class="line_wrap">
			<i class="t1" aria-hidden="true"></i><i class="b1" aria-hidden="true"></i>
			<i class="t2" aria-hidden="true"></i><i class="b2" aria-hidden="true"></i>
			<i class="t3" aria-hidden="true"></i><i class="b3" aria-hidden="true"></i>
			<i class="t4" aria-hidden="true"></i><i class="b4" aria-hidden="true"></i>
			<svg class="line_svg" aria-hidden="true"></svg>
		</div>
		<div class="inner">
			<p class="tit_label" aria-hidden="true">Problem</p>
			<h3 id="portfolio-problem-title">전문 의료 기관으로서의 <br>신뢰감, 기술력 전달 필요</h3>
			<h4>신원의료재단의 기존 웹사이트는 오래된 디자인과 복잡한 정보 구조로 인해 사용자들이 필요한 검사 정보를 찾기 어려웠습니다. <br class="pc_vw">
				또한 전문 의료기관으로서의 신뢰감과 첨단 기술력을 효과적으로 전달하지 못하는 한계가 있어, <br class="pc_vw">
				브랜드 아이덴티티를 강화할 수 있는 새로운 웹사이트 구축이 요구되었습니다.
			</h4>
		</div>
	</section>
	
	<section class="portfolio_padding portfolio_solution" aria-label="portfolio-solution-title">
		<div class="inner">
			<p class="tit_label" aria-hidden="true">Solution</p>
			<h3 id="portfolio-solution-title"><strong>세련된 컬러 시스템 및 <br>정제된 디자인 톤앤매너 구축</strong></h3>
			<div class="before_after">
				<div class="before">
					<p class="tit">BEFORE</p>
					<div class="img"><img src="/images/img_before_sample.png" alt=""></div>
				</div>
				<div class="after">
					<p class="tit">AFTER</p>
					<div class="img"><img src="/images/img_after_sample.png" alt=""></div>
				</div>
			</div>
		</div>
	</section>
	
	<section class="portfolio_padding portfolio_feature_development tac" aria-label="portfolio-feature-development-title">
		<h4 id="portfolio-feature-development-title" class="tit_label">Feature development</h4>
		<h3 class="port_tit">복잡한 검사 항목을 카테고리별로 재구성하여 <br class="pc_vw">필요한 정보를 빠르게 찾을 수 있도록 개선했습니다.</h3>
		<p>간편한 온라인 예약과 보안 강화된 결과 조회 기능으로 편의성을 향상시켰으며, <br class="pc_vw">모든 디바이스에서 최적화된 사용자 경험을 제공합니다.</p>
		<!-- 관리자에서 탭 제목/이미지 삽입 가능하도록, 영역 확보 필요 -->
		<div class="wrap-tab-container">
			<ul class="wrap-tab-list" role="tablist" aria-label="탭 목록">
				<li role="presentation"><button id="tab1" class="tab-list" role="tab" aria-controls="tab-panel1" aria-selected="false" tabindex="-1">검사항목조회</button></li>
				<li role="presentation"><button id="tab2" class="tab-list" role="tab" aria-controls="tab-panel2" aria-selected="false" tabindex="-1">검사결과 조회</button></li>
				<li role="presentation"><button id="tab3" class="tab-list" role="tab" aria-controls="tab-panel3" aria-selected="false" tabindex="-1">검사의뢰 절차</button></li>
				<li role="presentation"><button id="tab4" class="tab-list" role="tab" aria-controls="tab-panel4" aria-selected="false" tabindex="-1">검사 예약</button></li>
			</ul>
			<div class="wrap-tab-contents">
				<div id="tab-panel1" class="tab-contents" role="tabpanel" aria-labelledby="tab1" tabindex="0" hidden><img src="/images/img_portfolio_feature_development_sample.jpg" alt=""></div>
				<div id="tab-panel2" class="tab-contents" role="tabpanel" aria-labelledby="tab2" tabindex="-1" hidden><img src="/images/img_portfolio_feature_development_sample.jpg" alt=""></div>
				<div id="tab-panel3" class="tab-contents" role="tabpanel" aria-labelledby="tab3" tabindex="-1" hidden><img src="/images/img_portfolio_feature_development_sample.jpg" alt=""></div>
				<div id="tab-panel4" class="tab-contents" role="tabpanel" aria-labelledby="tab4" tabindex="-1" hidden><img src="/images/img_portfolio_feature_development_sample.jpg" alt=""></div>
			</div>
		</div>
	</section>
	
	<section class="portfolio_design" aria-label="portfolio-design-title">
		<div class="bg_img">
			<div class="bg imgfit" aria-hidden="true"><img src="/images/img_portfolio_design_sample.jpg" alt=""></div>
			<div class="inner">
				<div class="left">
					<h4 id="portfolio-design-title" class="tit_label">DESIGN</h4>
					<p class="port_tit">다양한 디바이스와 브라우저 환경에서도 <br class="pc_vw">일관된 브랜드 경험을 제공하기 위해 <br class="pc_vw">표준성이 높은 프리텐다드를 사용했습니다.</p>
					<p>의료 기관 특유의 전문성이 느껴지도록 여백과 세련된 컬러 시스템을 구축했습니다. <br/>또한 정제된 디자인 톤앤매너를 통해 신원의료재단이 지향하는 <br class="pc_vw">정밀 의료의 가치를 사용자에게 직관적으로 전달하고자 했습니다.</p>
				</div>
				<div class="right img"><img src="/images/img_design_sample_mo.png" alt="신원의료재단 모바일 디자인 시안"></div>
			</div>
		</div>
		<div class="bg_white">
			<div class="inner">
				<div class="img"><img src="/images/img_design_sample_pc.png" alt="신원의료재단 PC 디자인 시안"></div>
			</div>
		</div>
	</section>
	
	<section class="portfolio_padding portfolio_mobile_ui" aria-label="portfolio-mobile-ui-title">
		<div class="inner">
			<h4 id="portfolio-mobile-ui-title" class="tit_label">MOBILE UI</h4>
			<p class="port_tit">다양한 접속 환경에서도 동일한 브랜드 경험을 제공하기 위해 <br class="pc_vw">유연한 그리드 시스템 기반의 <br class="pc_vw">반응형 레이아웃을 적용했습니다.</p>
			<div class="mobile_view_wrap">
				<div class="mobile_view_area">
					<ul class="mobile_view mobile_view1">
						<li><img src="/images/img_portfolio_mobile_ui_sample1.jpg" alt="" aria-hidden="true"></li>
						<li><img src="/images/img_portfolio_mobile_ui_sample2.jpg" alt="" aria-hidden="true"></li>
						<li><img src="/images/img_portfolio_mobile_ui_sample3.jpg" alt="" aria-hidden="true"></li>
					</ul>
					<ul class="mobile_view mobile_view2">
						<li><img src="/images/img_portfolio_mobile_ui_sample4.jpg" alt="" aria-hidden="true"></li>
						<li><img src="/images/img_portfolio_mobile_ui_sample5.jpg" alt="" aria-hidden="true"></li>
						<li><img src="/images/img_portfolio_mobile_ui_sample6.jpg" alt="" aria-hidden="true"></li>
					</ul>
					<ul class="mobile_view mobile_view3">
						<li><img src="/images/img_portfolio_mobile_ui_sample7.jpg" alt="" aria-hidden="true"></li>
						<li><img src="/images/img_portfolio_mobile_ui_sample8.jpg" alt="" aria-hidden="true"></li>
						<li><img src="/images/img_portfolio_mobile_ui_sample9.jpg" alt="" aria-hidden="true"></li>
					</ul>
				</div>
			</div>
		</div>
	</section>
	
	<section class="portfolio_review" aria-label="portfolio-review-title">
		<div class="inner">
			<h3 id="portfolio-review-title" class="tit_label">Review</h3>
			<p class="port_tit large">검사 정보 구조 재구성 후 고객 문의 30% 이상 증가</p>
			<ul class="review_list">
				<li>
					<div class="tt">
						<img src="/images/img_review_human_sample.png" alt="" aria-hidden="true" class="picture">
						<h4>신원의료재단 디지털마케팅 팀장</h4>
						<div class="star"><img src="/images/img_star5.svg" alt="별점 5점" aria-label="별점 5점"></div>
					</div>
					<p>홈페이지코리아와 함께한 웹사이트 개편 프로젝트는 기대 이상의 결과를 가져다주었습니다. 우리 재단이 추구하는 <strong>정밀 의료의 전문성과 신뢰성을 세련된 디자인으로 완벽하게 표현해주셨습니다.</strong><br/>
					특히 복잡했던 검사 정보 구조를 직관적으로 재구성해주신 덕분에 <strong>고객 문의가 30% 이상 증가</strong>했고, <strong>모바일 접속률도 크게 향상</strong>되었습니다. 전문적인 컨설팅과 세심한 커뮤니케이션에 매우 만족합니다.</p>
				</li>
			</ul>
			<div class="view_btm">
				<div class="left">
					<a href="/portfolio/" class="btn btn_list">목록으로</a>
				</div>
				<div class="right">
					<button type="button" class="btn btn_link_copy">링크 복사</button>
					<button type="button" class="btn btn_share">공유하기</button>
				</div>
			</div>
		</div>
	</section>
	
	<section class="portfolio_contact page_contact" aria-label="portfolio-contact-title">
		<div class="inner">
			<h3 id="portfolio-contact-title" class="port_tit"><strong>전문 의료기관에 최적화된 솔루션,</strong><br/>홈페이지코리아와 상의하세요.</h3>
			<a href="/contact/" class="btn_link slim">프로젝트 문의하기</a>
		</div>
	</section>

</main>

<script>
// portfolio_problem svg line
	function drawLines() {
		const $wrap = $('.line_wrap');
		const $svg  = $wrap.find('.line_svg');
		const pairs = [['t1','b1'], ['t2','b2'], ['t3','b3'], ['t4','b4']];
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
				stroke: '#CDD1D5',
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
		const target = document.querySelector('.portfolio_problem');
		if (target) observer.observe(target);
	});

	$(window).on('resize', function() {
		drawLines();
	});
// portfolio_feature_development 접근성 호환 탭
	const $tabs    = $(".wrap-tab-container .tab-list");
	const $panels  = $(".wrap-tab-container .tab-contents");
	function activateTab($tab) {
		$tabs.attr({ "aria-selected": "false", "tabindex": "-1" }).removeClass("active");
		$panels.attr("tabindex", "-1").removeClass("active").attr("hidden", true);
		$tab.attr({ "aria-selected": "true", "tabindex": "0" }).addClass("active");
		$("#" + $tab.attr("aria-controls"))
			.removeAttr("hidden")
			.attr("tabindex", "0")
			.addClass("active");
	}
	activateTab($tabs.first());
	$tabs.on("click", function () {
		activateTab($(this));
		$(this).focus();
	});
	$tabs.on("keydown", function (e) {
		const keycode = e.keyCode || e.which;
		const $all    = $tabs;
		const $current = $(this);
		let $target;

		switch (keycode) {
			case 37: // 좌
				$target = $current.parent().prev().find("[role='tab']");
				if (!$target.length) $target = $all.last();
				activateTab($target);
				$target.focus();
				e.preventDefault();
				break;

			case 39: // 우
				$target = $current.parent().next().find("[role='tab']");
				if (!$target.length) $target = $all.first();
				activateTab($target);
				$target.focus();
				e.preventDefault();
				break;

			case 13: // Enter
			case 32: // Space
				activateTab($current);
				e.preventDefault();
				break;

			case 9: // Tab — 패널로 포커스 이동
				if (!e.shiftKey) {
					const $panel = $("#" + $current.attr("aria-controls"));
					if ($panel.length) {
						$panel.focus();
						e.preventDefault();
					}
				}
				break;
		}
	});
// portfolio_mobile_ui 세로 marquee
	function initMobileMarquee() {
		const marqueeList = [
			{ selector: '.mobile_view1', speed: 0.5 },
			{ selector: '.mobile_view2', speed: 0.8 },
			{ selector: '.mobile_view3', speed: 0.6 }
		];

		marqueeList.forEach(function(item) {
			const $el = $(item.selector);

			// 무한 루프를 위해 내용 복제
			$el.append($el.html());

			const singleHeight = $el.find('li').length / 2 * $el.find('li').first().outerHeight(true);
			let pos = 0;
			let animId;

			function move() {
				pos -= item.speed;
				if (Math.abs(pos) >= singleHeight) {
					pos = 0;
				}
				$el.css('transform', 'translateY(' + pos + 'px)');
				animId = requestAnimationFrame(move);
			}

			animId = requestAnimationFrame(move);

			// 호버 시 일시정지
			/*$el.closest('.mobile_view_wrap')
				.on('mouseenter', function() { cancelAnimationFrame(animId); })
				.on('mouseleave', function() { animId = requestAnimationFrame(move); });*/
		});
	}

	$(window).on('load', function() {
		initMobileMarquee();
	});	
// contact
	const observerContact = new IntersectionObserver(function(entries) {
		entries.forEach(function(entry) {
			if (entry.isIntersecting) {
				$(".page_contact").addClass("start");
			} else {
				// 요소가 아직 아래에 있을 때만 해제
				if (entry.boundingClientRect.top > window.innerHeight / 2) {
					$(".page_contact").removeClass("start");
				}
			}
		});
	}, {
		threshold: 0.5  // 요소의 50%가 보일 때 트리거
	});

	const contactTarget = document.querySelector('.page_contact');
	if (contactTarget) observerContact.observe(contactTarget);
</script>
@endsection