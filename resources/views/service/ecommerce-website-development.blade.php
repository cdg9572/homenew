@extends('layouts.app')
@section('title'){{ $gName }} | {{ $sName }}@endsection
@section('gName', $gName)
@section('sName', $sName)
@section('description', '매출 성장을 만드는 온라인 쇼핑몰 제작. 4,400개 조직이 선택한 홈페이지코리아가 27년 경험으로 귀사에 맞는 자사몰을 설계합니다.')
@section('keywords', '이커머스 (1.3만), 온라인 쇼핑몰(4.6천), 쇼핑몰 (5만), 쇼핑몰 제작 (2천), 쇼핑몰 제작 업체(176), 자사몰(3.7천), 자사몰 제작(3백), 웹빌더(573)')
@section('sga_plus')
,"mainEntity": [
    {
        "@@type": "Question",
        "name": "웹빌더(카페24, 아임웹 등)와 맞춤형 자사몰의 차이는 무엇인가요?",
        "acceptedAnswer": {
            "@@type": "Answer",
            "text": "웹빌더는 초기 구축이 빠르고 저렴하지만 템플릿 기반이라 브랜드 차별화가 어렵고 매출이 늘어날수록 거래 수수료가 계속 발생합니다. 맞춤형 자사몰은 PG사 직접 계약으로 중간 수수료 없이 운영할 수 있어 장기적으로 훨씬 경제적입니다."
        }
    },
    {
        "@@type": "Question",
        "name": "B2B와 B2C 쇼핑몰의 차이점은 무엇인가요?",
        "acceptedAnswer": {
            "@@type": "Answer",
            "text": "B2C는 간편한 결제와 직관적인 구매 프로세스가 중요하고, B2B는 거래처별 차등 가격, 대량 주문, 견적서 발행, ERP 연동 등 복잡한 거래 구조를 지원해야 합니다."
        }
    },
    {
        "@@type": "Question",
        "name": "쇼핑몰에서 SEO(검색엔진 최적화)가 왜 중요한가요?",
        "acceptedAnswer": {
            "@@type": "Answer",
            "text": "검색엔진 상위 노출 시 광고비 없이 고객을 유입시킬 수 있습니다. 구조화된 데이터, 메타태그 최적화, 빠른 로딩 속도 등 SEO 필수 요소를 반영하여 개발합니다."
        }
    },
    {
        "@@type": "Question",
        "name": "쇼핑몰 제작 시 어떤 결제 시스템을 사용하나요?",
        "acceptedAnswer": {
            "@@type": "Answer",
            "text": "국내 주요 PG사와 직접 계약하여 카드 결제, 계좌이체, 가상계좌, 카카오페이·네이버페이 등 간편결제를 모두 지원합니다. 웹빌더를 거치지 않아 최저 수수료로 운영이 가능합니다."
        }
    },
    {
        "@@type": "Question",
        "name": "쇼핑몰 구축 후 재고 관리나 주문 관리는 어떻게 하나요?",
        "acceptedAnswer": {
            "@@type": "Answer",
            "text": "맞춤형 관리자 시스템(CMS)을 통해 상품 등록, 재고 관리, 주문 조회, 배송 처리, 회원 관리를 처리할 수 있습니다. 기존 ERP·물류 시스템 연동 및 엑셀 업로드로 대량 작업도 가능합니다."
        }
    }
]
@endsection

@section('content')
<main class="sub_contents_wrap infopage_wrap">

	<section class="infopage_head service_head main_service" aria-labelledby="service-head-title" data-header="dark">
		<div class="inner">
			<h1 id="service-head-title" class="mojo_aos">매출 성장을 만드는 온라인 쇼핑몰 홈페이지 코리아에서 맞춤형 자사몰 시작하세요.</h1>
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
				<h2 id="service-problem-title" data-aos="zoom-out-up">치열한 경쟁속에서도 성장하는 온라인 쇼핑몰을<br class="pc_vw"> <strong>제작하고 싶나요?</strong></h2>
				<ul class="problem_list">
					<li data-aos="zoom-out-up">
						<h3>제품 강점을 살린 자사몰을 만들고 싶어요. <img src="/images/emoji_smile.png" alt="" aria-hidden="true"></h3>
						<p>웹빌더나 템플릿 웹사이트는 우리 브랜드만의 차별점을 보여주기 어려워요.</p>
					</li>
					<li data-aos="zoom-out-up">
						<h3>마케팅에 효과적인 홈페이지가 필요해요. <img src="/images/emoji_worry.png" alt="" aria-hidden="true"></h3>
						<p>갈수록 검색 광고나 SNS 마케팅 효율이 떨어지는 것 같아요.</p>
					</li>
					<li data-aos="zoom-out-up">
						<h3>웹빌더 자사몰, 성장할 수록 수수료가 부담돼요. <img src="/images/emoji_tears2.png" alt="" aria-hidden="true"></h3>
						<p>매출이 커질수록 월 사용료와 거래 수수료가 계속 늘어나서 부담스러워요.</p>
					</li>
				</ul>
				<div class="dots" aria-hidden="true" data-aos="zoom-out-up"><i class="t"></i><i class="m"></i><i class="b"></i></div>
			</div>
		</div>
	</section>
	
	<section class="infopage_solution service_solution bg_white" aria-labelledby="service-solution-title" data-header="light">
		<div class="inner">
			<p class="tit_label" data-aos="zoom-out-up">SOLUTION</p>
			<h2 id="service-solution-title" data-aos="zoom-out-up">온라인 쇼핑몰도 이제 <br/><strong>맞춤형 자사몰로 구축해야 성장합니다.</strong></h2>
			<ul class="solution_list" data-aos="zoom-out-up">
				<li class="i_d1">
					<h3>제품에 맞는 고객 여정</h3>
					<p>B2C, B2B 제품 특성을 고려한 <br class="pc_vw">자사몰을 설계하면 전환율이 높아집니다.</p>
				</li>
				<li class="i_d2">
					<h3>검색 엔진 최적화</h3>
					<p>제품 정보가 구조화 된 자사몰은 <br class="pc_vw">고객이 검색할 때 발견하기 쉽습니다.</p>
				</li>
				<li class="i_d3">
					<h3>중간 마진 없는 PG</h3>
					<p>웹빌더 등 솔루션 없이 직접 자사몰을 제작하면 <br class="pc_vw">결제 수수료가 절감됩니다.</p>
				</li>
			</ul>
		</div>
	</section>
	
	<section class="infopage_how service_how" aria-labelledby="service-how-title" data-header="dark">
		<div class="inner">
			<p class="tit_label" data-aos="zoom-out-up">HOW</p>
			<h2 id="service-how-title" data-aos="zoom-out-up"><strong>이커머스를 위한 자사몰,</strong> <br/>27년 경력 홈페이지 코리아에서 제작하세요.</h2>
			<ul class="how_list p_large">
				<li class="i_d1" data-aos="zoom-out-up">
					<div class="imgfit"><img src="/images/service_how_d01.png" alt="" aria-hidden="true"></div>
					<div class="txt">
						<h3><strong>1,100개</strong> 업종 경험</h3>
						<p><strong>B2C부터 B2B까지 다양한 업종 경험</strong>으로<br class="pc_vw"> <strong>최적의 UI/UX를 디자인</strong>합니다.</p>
					</div>
				</li>
				<li class="i_d2" data-aos="zoom-out-up">
					<div class="imgfit"><img src="/images/service_how_d02.png" alt="" aria-hidden="true"></div>
					<div class="txt">
						<h3>SEO/GEO <strong>전문성</strong></h3>
						<p><strong>검색 엔진</strong>과 <strong>AI가 발견하기 쉽게 <br class="pc_vw">구조화된 홈페이지로 개발</strong>합니다.</p>
					</div>
				</li>
				<li class="i_d3" data-aos="zoom-out-up">
					<div class="imgfit"><img src="/images/service_how_d03.png" alt="" aria-hidden="true"></div>
					<div class="txt">
						<h3>PG사 <strong>직접 계약</strong></h3>
						<p>홈페이지코리아와 <strong>PG사가 직접 계약</strong>해 <br class="pc_vw"><strong>최저 수수료 설계가 가능</strong>합니다. </p>
					</div>
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
			<h2 id="service-review-title" data-aos="zoom-out-up">성장하는 쇼핑몰은 <br/><strong>홈페이지코리아와 함께합니다.</strong></h2>
			<ul class="review_list">
				<li data-aos="zoom-out-up">
					<h3 class="sound_only">제조/유통</h3>
					<div class="flex_tit">
						<h4>철근이라는 특수한 상품 특성 때문에 일반 쇼핑몰보다 <strong>복잡한 주문 구조가 필요</strong>했습니다. <strong>상품 특성을 이해</strong>하고, <strong>성능을 개선</strong>해주셔서 <strong>만족스러운 결과물</strong>을 얻을 수 있었어요.</h4>
					</div>
					<p><i><img src="/images/icon_review_logo_d1.svg" alt="" aria-hidden="true"></i>서주엔터프라이즈<span aria-hidden="true">제조/유통</span></p>
				</li>
				<li data-aos="zoom-out-up">
					<h3 class="sound_only">F&B</h3>
					<div class="flex_tit">
						<h4>복잡한 B2B 거래 특성을 완벽히 이해하고 자사몰 구축을 진행해주셨어요. <strong>구축 후 매출은 15% 상승</strong>했고요. <strong>불필요한 수작업이 줄고 주문/재고 관리 시스템이 일원화돼 업무 효율이 40% 올랐습니다.</strong></h4>
					</div>
					<p><i><img src="/images/icon_review_logo_d2.png" alt="" aria-hidden="true"></i>골든브라운<span aria-hidden="true">F&B</span></p>
				</li>
				<li data-aos="zoom-out-up">
					<h3 class="sound_only">병원/의료</h3>
					<div class="flex_tit">
						<h4>치과의사와 기공소별로 판매 상품 구조가 달라 <strong>쇼핑몰 분리가 필요했고, 국비지원 교육 신청까지 함께 운영</strong>해야 했습니다. 서로 다른 서비스 성격이 <strong>하나의 브랜드 경험 안에서 정리</strong>됐고, <strong>속도 이슈도 완벽하게 해결</strong>됐습니다.</h4>
					</div>
					<p><i><img src="/images/icon_review_logo_d3.png" alt="" aria-hidden="true"></i>하이덴탈코리아<span aria-hidden="true">병원/의료</span></p>
				</li>
			</ul>
			<div class="flex_center" data-aos="zoom-out-up">
				<a href="/portfolio/" class="btn_link slim">홈페이지 제작 사례 더보기</a>
			</div>
		</div>
	</section>
	
	<section class="infopage_contact service_contact page_contact" aria-label="service-contact-title" data-header="dark">
		<div class="inner">
			<p class="tit_label sound_only">CTA</p>
			<h2 id="service-contact-title" class="port_tit" data-aos="zoom-out-up"><strong>매출이 성장하는 온라인 쇼핑몰 제작,</strong><br/> 홈페이지 코리아에게 문의하세요.</h2>
			<div class="btns flex_center">
				<a href="/portfolio/" class="btn_link" data-aos="zoom-out-up">포트폴리오 보러가기</a>
				<a href="/contact/" class="btn_link" data-aos="zoom-out-up">쇼핑몰 제작 문의하기</a>
			</div>
		</div>
	</section>

	<section class="infopage_faq service_faq" aria-label="service-faq-title" data-header="dark">
		<div class="inner">
			<p class="tit_label" data-aos="zoom-out-up">FAQ</p>
			<h2 id="service-faq-title" data-aos="zoom-out-up"><strong>자주 묻는 질문</strong></h2>
			<ul class="faq_list" data-aos="zoom-out-up">
				<li>
					<h3><button type="button">웹빌더(카페24, 아임웹 등)와 맞춤형 자사몰의 차이는 무엇인가요?</button></h3>
					<div class="con">웹빌더는 초기 구축이 빠르고 저렴하지만, 템플릿 기반이라 브랜드 차별화가 어렵고 매출이 늘어날수록 거래 수수료가 계속 발생합니다. 반면 맞춤형 자사몰은 브랜드와 제품 특성에 맞춘 고유한 디자인과 기능 구현이 가능하며, PG사 직접 계약으로 중간 수수료 없이 운영할 수 있습니다. 장기적으로 보면 맞춤형 자사몰이 훨씬 경제적입니다.</div>
				</li>
				<li>
					<h3><button type="button">B2B와 B2C 쇼핑몰의 차이점은 무엇인가요?</button></h3>
					<div class="con">B2C 쇼핑몰은 일반 소비자 대상으로 간편한 결제와 직관적인 구매 프로세스가 중요합니다. B2B 쇼핑몰은 거래처별 차등 가격, 대량 주문, 견적서 발행, ERP 연동 등 복잡한 거래 구조를 지원해야 합니다. 홈페이지코리아는 두 유형 모두 풍부한 경험이 있어 업종 특성에 맞는 최적의 쇼핑몰을 구축해드립니다.</div>
				</li>
				<li>
					<h3><button type="button">SEO(검색엔진 최적화)가 왜 중요한가요?</button></h3>
					<div class="con">구글, 네이버 등 검색엔진에서 상위 노출되면 광고비 없이도 고객을 유입시킬 수 있습니다. 특히 제품명, 브랜드명으로 검색했을 때 자사몰이 먼저 나타나면 신뢰도가 높아지고 전환율도 향상됩니다. 홈페이지코리아는 구조화된 데이터, 메타태그 최적화, 빠른 로딩 속도 등 SEO 필수 요소를 모두 반영하여 개발합니다.</div>
				</li>
				<li>
					<h3><button type="button">쇼핑몰 제작 시 어떤 결제 시스템을 사용하나요?</button></h3>
					<div class="con">국내 주요 PG사(이니시스, KG이니시스, 나이스페이먼츠 등)와 직접 계약하여 카드 결제, 계좌이체, 가상계좌, 간편결제(카카오페이, 네이버페이 등)를 모두 지원합니다. 웹빌더를 거치지 않고 PG사와 직접 계약하므로 최저 수수료로 운영이 가능하며, 정산도 빠르게 진행됩니다.</div>
				</li>
				<li>
					<h3><button type="button">쇼핑몰 구축 후 재고 관리나 주문 관리는 어떻게 하나요?</button></h3>
					<div class="con">맞춤형 관리자 시스템(CMS)을 통해 상품 등록, 재고 관리, 주문 조회, 배송 처리, 회원 관리 등을 직관적으로 할 수 있습니다. 필요시 기존에 사용하시던 ERP나 물류 시스템과 연동도 가능하며, 엑셀 다운로드/업로드 기능으로 대량 작업도 간편하게 처리할 수 있습니다.</div>
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