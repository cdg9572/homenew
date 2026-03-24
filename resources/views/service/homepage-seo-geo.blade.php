@extends('layouts.app')
@section('title'){{ $gName }} | {{ $sName }}@endsection
@section('gName', $gName)
@section('sName', $sName)
@section('description', '검색엔진과 AI가 이해하는 웹사이트 개발. Schema 마크업, sitemap 자동 생성, AI 검색 최적화까지. 4,400개 고객사가 선택한 홈페이지코리아의 SEO·GEO 솔루션을 만나보세요.')
@section('keywords', 'SEO 1.6만, GEO 1.3만, AEO 3.9천, 검색엔진 최적화 1천, AI 검색 최적화 220, SEO 최적화 3.2천, GEO 최적화 483, AI 검색 8.1천')
@section('sga_plus')
,"mainEntity": [
    {
        "@@type": "Question",
        "name": "왜 SEO · GEO · AEO가 중요한가요?",
        "acceptedAnswer": {
            "@@type": "Answer",
            "text": "검색엔진과 AI가 웹사이트의 구조와 콘텐츠를 이해할 수 있도록 설계되어야 검색 결과에 노출되고 AI 답변에서도 인용될 수 있습니다. SEO는 검색엔진 크롤링 구조 설계, GEO는 AI 검색 환경 최적화, AEO는 직접 답변 노출 설계를 담당합니다."
        }
    },
    {
        "@@type": "Question",
        "name": "AI 검색 시대에 웹사이트는 왜 필요한가요?",
        "acceptedAnswer": {
            "@@type": "Answer",
            "text": "AI는 정보를 스스로 생성하는 것이 아니라 신뢰할 수 있는 웹사이트 콘텐츠를 기반으로 답변을 생성합니다. 구조가 잘 설계된 웹사이트는 검색 결과뿐 아니라 AI 답변에서도 출처로 인용될 가능성이 높아집니다."
        }
    },
    {
        "@@type": "Question",
        "name": "SEO·GEO 최적화, 홈페이지 제작할 때 같이 하지 않으면 안 되나요?",
        "acceptedAnswer": {
            "@@type": "Answer",
            "text": "나중에 추가하는 것도 가능하지만, URL 구조를 바꾸면 기존 검색 색인이 초기화되고 콘텐츠도 다시 작성해야 하는 경우가 생깁니다. 처음부터 구조를 잡는 것이 가장 효율적입니다."
        }
    },
    {
        "@@type": "Question",
        "name": "SEO를 해도 검색 순위가 바로 오르지 않는다고 하던데, 효과가 있긴 한가요?",
        "acceptedAnswer": {
            "@@type": "Answer",
            "text": "SEO는 광고처럼 즉시 효과가 나타나지 않습니다. 구조가 제대로 설계되어 있으면 색인 속도가 빨라지고, 한 번 쌓인 신뢰도는 광고와 달리 비용 없이 유지됩니다."
        }
    },
    {
        "@@type": "Question",
        "name": "ChatGPT나 AI 검색에서 우리 회사가 노출되려면 어떻게 해야 하나요?",
        "acceptedAnswer": {
            "@@type": "Answer",
            "text": "AI는 신뢰도 있는 사이트의 콘텐츠를 학습해 답변을 생성합니다. 회사 소개, 서비스 설명, 전문 콘텐츠가 명확한 구조로 작성되어 있고 Schema 마크업이 적용되어 있을수록 AI가 인용할 가능성이 높아집니다."
        }
    },
    {
        "@@type": "Question",
        "name": "우리 사이트가 현재 SEO가 잘 되어 있는지 확인할 수 있나요?",
        "acceptedAnswer": {
            "@@type": "Answer",
            "text": "Google Search Console, PageSpeed Insights, Rich Results Test 등 무료 도구로 현재 상태를 확인할 수 있습니다. 홈페이지코리아에 문의하시면 현재 사이트의 기술 구조와 개선이 필요한 항목을 검토해 드립니다."
        }
    },
    {
        "@@type": "Question",
        "name": "개발사마다 SEO 적용 방식이 다른가요?",
        "acceptedAnswer": {
            "@@type": "Answer",
            "text": "title·description 정도만 설정하는 곳이 있는 반면, URL 구조 설계부터 sitemap 자동 생성, Schema 마크업 구현까지 시스템 레벨로 설계하는 곳도 있습니다. SEO는 퍼블리싱과 개발 양쪽 모두에서 작업이 이루어져야 제대로 동작합니다."
        }
    }
]
@endsection

@section('content')
<main class="sub_contents_wrap infopage_wrap">

	<section class="infopage_head service_head main_service" aria-labelledby="service-head-title" data-header="dark">
		<div class="inner">
			<h1 id="service-head-title" class="mojo_aos">SEO · GEO 최적화<br/>홈페이지코리아와 함께하세요.</h1>
			<p class="tb mojo_aos"><strong>검색엔진과 AI가 이해하고 인용하는 홈페이지</strong>를 개발합니다.</p>
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
				<h2 id="service-problem-title" data-aos="zoom-out-up"><strong>SEO·GEO 최적화 가능한 홈페이지 개발사,</strong><br/> 찾기 어려우셨죠?</h2>
				<!-- <p class="tb">각 서비스는 고객의 비즈니스 목표에 맞춰 <strong>최적화된 솔루션</strong>을 제공하며,<br/><strong>기획부터 디자인, 개발, 운영까지</strong> 전 과정을 지원합니다.</p> -->
				<ul class="problem_list">
					<li data-aos="zoom-out-up">
						<h3>개발사에 SEO를 요청했더니 잘 모르더라고요. <img src="/images/emoji_tears.png" alt="" aria-hidden="true"></h3>
						<p>여러 업체에 문의해봤는데 "SEO 됩니다"는 말만 하고, 정작 어떻게 하는지 물어보면 대답을 못 하더라고요.</p>
					</li>
					<li data-aos="zoom-out-up">
						<h3>콘텐츠가 검색 결과에 노출되지 않아요. <img src="/images/emoji_sad.png" alt="" aria-hidden="true"></h3>
						<p>개인정보보호법, 정보보안 정책, 내부망/외부망 분리 등 엄격한 보안 홈페이지 새로 만들고 나서 검색해봤는데 우리 회사가 안 나와요.<br/>개발사한테 물어봤더니 "시간이 지나면 된다"는 말만 하고요.기준을 만족하는 개발사를 찾기 어렵습니다.</p>
					</li>
					<li data-aos="zoom-out-up">
						<h3>사이트를 새로 만들었더니 SEO 유입이 사라졌어요. <img src="/images/emoji_anger.png" alt="" aria-hidden="true"></h3>
						<p>리뉴얼 전에는 검색에 잘 나왔는데, 새로 오픈하고 나서 순위가 전부 떨어졌어요.</p>
					</li>
				</ul>
				<div class="dots" aria-hidden="true" data-aos="zoom-out-up"><i class="t"></i><i class="m"></i><i class="b"></i></div>
			</div>
		</div>
	</section>
	
	<section class="infopage_solution service_solution bg_white" aria-labelledby="service-solution-title" data-header="light">
		<div class="inner">
			<p class="tit_label" data-aos="zoom-out-up">SOLUTION</p>
			<h2 id="service-solution-title" data-aos="zoom-out-up">홈페이지코리아는 <br/><strong>기획 단계부터 SEO·GEO 구조를 함께 설계 합니다.</strong></h2>
			<ul class="solution_list" data-aos="zoom-out-up">
				<li class="i_a1">
					<h3>SEO·GEO를 이해하는 <br class="pc_vw">홈페이지 개발 파트너</h3>
					<p>SEO를 아는 개발자는 기능을 구현하면서 <br class="pc_vw">동시에 검색 구조를 함께 설계합니다. <br class="pc_vw">나중에 따로 최적화 작업을 추가할 필요가 없습니다.</p>
				</li>
				<li class="i_a2">
					<h3>검색엔진이 정확히 읽는 <br class="pc_vw">홈페이지 구조</h3>
					<p>기술 구조를 기획 단계에서 설계합니다. <br class="pc_vw">신규 페이지가 생성될 때마다 자동으로 <br class="pc_vw">메타 정보가 생성되는 구조로 구축합니다.</p>
				</li>
				<li class="i_a3">
					<h3>AI 검색에서 인용되는 <br class="pc_vw">콘텐츠 설계</h3>
					<p>AI가 신뢰 정보로 인식하는 <br class="pc_vw">Organization·Article·FAQ Schema 마크업, <br class="pc_vw">llms.txt 설정까지 적용합니다.</p>
				</li>
			</ul>
		</div>
	</section>
	
	<section class="infopage_how service_how" aria-labelledby="service-how-title" data-header="dark">
		<div class="inner">
			<p class="tit_label" data-aos="zoom-out-up">HOW</p>
			<h2 id="service-how-title" data-aos="zoom-out-up"><strong>홈페이지코리아의 SEO·GEO 최적화</strong><br/> 이렇게 다릅니다</h2>
			<ul class="how_list">
				<li class="i_a1" data-aos="zoom-out-up">
					<div class="imgfit"><img src="/images/img_service_how_a01.png" alt="" aria-hidden="true"></div>
					<div class="txt">
						<h3>검색엔진이 <strong>사이트 전체를 수집하도록</strong> 홈페이지 시스템 개발</h3>
						<ul class="inlist">
							<li>
								<h4>SEO 친화적 URL 구조 설계</h4>
								<p>슬러그 기반 URL 설계</p>
							</li>
							<li>
								<h4>sitemap.xml 자동 생성</h4>
								<p>신규 페이지 등록 시 자동 업데이트</p>
							</li>
							<li>
								<h4>robots.txt · llms.txt 설정</h4>
								<p>검색엔진·AI 크롤러 수집 범위 제어</p>
							</li>
							<li>
								<h4>meta title · description 자동 생성 CMS</h4>
								<p>콘텐츠 등록 시 메타 정보 자동 생성</p>
							</li>
							<li>
								<h4>canonical 및 robots meta</h4>
								<p>중복 페이지 색인 오류 자동 방지</p>
							</li>
						</ul>
					</div>
				</li>
				<li class="i_a2" data-aos="zoom-out-up">
					<div class="imgfit"><img src="/images/img_service_how_a02.png" alt="" aria-hidden="true"></div>
					<div class="txt">
						<h3>검색엔진이 <strong>페이지 내용을 이해하도록</strong><br/> 콘텐츠 퍼블리싱</h3>
						<ul class="inlist">
							<li>
								<h4>HTML 구조와 마크업</h4>
								<p>시맨틱 태그로 콘텐츠 위계 설계</p>
							</li>
							<li>
								<h4>이미지 ALT 태그 및 파일 최적화</h4>
								<p>WebP 변환 · LCP 2.5초 이하 목표</p>
							</li>
							<li>
								<h4>Schema 마크업 직접 구현</h4>
								<p>JSON-LD 삽입 후 Rich Results 검증</p>
							</li>
							<li>
								<h4>내부 링크 구조 설계</h4>
								<p>앵커 텍스트 기반 크롤링 경로 설계</p>
							</li>
						</ul>
					</div>
				</li>
				<li class="i_a3" data-aos="zoom-out-up">
					<div class="imgfit"><img src="/images/img_service_how_a03.png" alt="" aria-hidden="true"></div>
					<div class="txt">
						<h3>검색 키워드 기반 <br/><strong>신뢰도 높은 콘텐츠 가이드 제공</strong></h3>
						<ul class="inlist">
							<li>
								<h4>검색 키워드 기반 콘텐츠</h4>
								<p>검색 의도에 맞는 주제 선정</p>
							</li>
							<li>
								<h4>문제 해결 콘텐츠</h4>
								<p>고객 질문에 직접 답하는 글</p>
							</li>
							<li>
								<h4>전문성 있는 설명</h4>
								<p>업종 깊이가 담긴 콘텐츠</p>
							</li>
							<li>
								<h4>백링크</h4>
								<p>외부에서 인용되는 구조</p>
							</li>
							<li>
								<h4>브랜드 언급</h4>
								<p>온라인 브랜드 노출 확대 </p>
							</li>
							<li>
								<h4>도메인 신뢰도 확인</h4>
								<p>사이트 전반의 신뢰 지표</p>
							</li>
						</ul>
						<p>고객사 콘텐츠 및 브랜드 활동을 기준으로 가이드를 제공합니다.</p>
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
			<h2 id="service-review-title" data-aos="zoom-out-up"><strong>1,100개+ 고객사가</strong> <br/>홈페이지코리아를 추천합니다.</h2>
			<ul class="review_list">
				<li data-aos="zoom-out-up">
					<h3 class="sound_only">공공기관</h3>
					<div class="flex_tit">
						<h4>대국민 이해를 돕기 위해 <br class="pc_vw">콘텐츠를 <strong>CAROUSEL 구조로 구성하고 <br class="pc_vw">FAQ SCHEMA를 적용</strong>하여 검색 결과에서 <br class="pc_vw">정보 노출이 가능하도록 설계했습니다.</h4>
					</div>
					<p><i><img src="/images/icon_review_logo_a1.svg" alt="" aria-hidden="true"></i>생활폐기물 분리배출 누리집<span aria-hidden="true">공공기관</span></p>
				</li>
				<li data-aos="zoom-out-up">
					<h3 class="sound_only">대학교</h3>
					<div class="flex_tit">
						<h4>연구 장비 정보를 <br class="pc_vw"><strong>PRODUCT SCHEMA 형태로 구조화</strong>하여<br class="pc_vw"> 검색엔진이 장비 정보를 이해할 수 있도록<br class="pc_vw"> 데이터 구조를 설계했습니다.</h4>
					</div>
					<p><i><img src="/images/icon_review_logo_a2.svg" alt="" aria-hidden="true"></i>한양대학교<span aria-hidden="true">대학교</span></p>
				</li>
				<li data-aos="zoom-out-up">
					<h3 class="sound_only">기업</h3>
					<div class="flex_tit">
						<h4>여행 상품을 <strong>PRODUCT,<br class="pc_vw"> REVIEW SCHEMA 형태로 구성</strong>하여<br class="pc_vw"> 검색 결과에서 상품 정보와<br class="pc_vw"> 리뷰가 노출될 수 있도록 설계했습니다</h4>
					</div>
					<p><i><img src="/images/icon_review_logo_a3.svg" alt="" aria-hidden="true"></i>코스모진 여행사<span aria-hidden="true">기업</span></p>
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
			<h2 id="service-contact-title" class="port_tit" data-aos="zoom-out-up"><strong>검색엔진과 AI가 이해하는 홈페이지,</strong><br/>지금 홈페이지코리아와 시작하세요.</h2>
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
					<h3><button type="button">왜 SEO · GEO · AEO가 중요한가요?</button></h3>
					<div class="con">
						검색 환경은 더 이상 단순한 <strong>검색엔진 결과 페이지</strong>에만 머물지 않습니다.<br/>
						Google, Naver 같은 포털 검색뿐 아니라 ChatGPT, Claude, Perplexity와 같은 <strong>AI 기반 검색</strong>이 정보 탐색의 중요한 채널로 빠르게 확장되고 있습니다.<br/>
						이러한 환경에서는 웹사이트의 콘텐츠가 단순히 존재하는 것만으로는 충분하지 않습니다.<br/>
						검색엔진과 AI가 <strong>웹사이트의 구조와 콘텐츠를 이해할 수 있도록 설계되어야</strong> 검색 결과에 노출되고 AI 답변에서도 인용될 수 있습니다.<br/>
						<br/>
						SEO · GEO · AEO 최적화는 각각 다음과 같은 역할을 합니다.<br/>
						<ul class="dots">
							<li><strong>SEO (Search Engine Optimization)</strong><br/>
								검색엔진이 웹사이트를 정확히 크롤링하고 색인할 수 있도록 구조를 설계합니다.</li>
							<li><strong>GEO (Generative Engine Optimization)</strong><br/>
								AI 검색 환경에서 콘텐츠가 신뢰 있는 정보로 인용될 수 있도록 콘텐츠 구조를 최적화합니다.</li>
							<li><strong>AEO (Answer Engine Optimization)</strong><br/>
								사용자의 질문에 대해 검색 결과나 AI 답변에서 직접적인 답변으로 노출될 수 있도록 설계합니다.</li>
						</ul>
						이 세 가지 최적화가 함께 적용될 때 웹사이트의 정보는 <strong>검색엔진과 AI 환경 모두에서 효과적으로 전달</strong>될 수 있습니다.
					</div>
				</li>
				<li>
					<h3><button type="button">AI 검색 시대에 웹사이트는 왜 필요한가요?</button></h3>
					<div class="con">
						AI 검색이 발전하면서 “AI가 답을 알려주는데 웹사이트가 필요한가?”라는 질문이 종종 등장합니다.<br/>
						하지만 AI는 정보를 스스로 생성하는 것이 아니라 인터넷에 존재하는 신뢰할 수 있는 웹사이트 콘텐츠를 기반으로 답변을 생성합니다.<br/>
						즉, 웹사이트는 여전히 다음과 같은 역할을 합니다.<br/>
						<ul class="dots">
							<li>기업과 서비스에 대한 공식 정보의 출처(Source)</li>
							<li>검색엔진과 AI가 참고하는 콘텐츠 데이터베이스</li>
							<li>브랜드 신뢰도를 형성하는 디지털 자산</li>
						</ul>
						구조가 잘 설계된 웹사이트는 검색 결과뿐 아니라 AI 답변에서도 출처로 인용될 가능성이 높아집니다.<br/>
						따라서 AI 시대일수록 웹사이트는 단순한 홍보 페이지가 아니라 검색엔진과 AI가 이해하고 활용할 수 있는 정보 플랫폼으로 설계되어야 합니다.
					</div>
				</li>
				<li>
					<h3><button type="button"> SEO·GEO 최적화, 홈페이지 제작할 때 같이 하지 않으면 안 되나요?</button></h3>
					<div class="con">
						나중에 추가하는 것도 가능하지만, 처음부터 함께 설계하는 것과 비교하면 비용과 시간이 크게 차이 납니다. URL 구조를 바꾸면 기존 검색 색인이 초기화되고, 콘텐츠도 다시 작성해야 하는 경우가 생깁니다. 처음부터 구조를 잡는 것이 가장 효율적입니다.
					</div>
				</li>
				<li>
					<h3><button type="button">SEO를 해도 검색 순위가 바로 오르지 않는다고 하던데, 효과가 있긴 한가요?</button></h3>
					<div class="con">
						EO는 광고처럼 즉시 효과가 나타나지 않습니다. 검색엔진이 사이트를 크롤링하고 색인하는 데 시간이 걸리기 때문입니다. 다만 구조가 제대로 설계되어 있으면 색인 속도가 빨라지고, 한 번 쌓인 신뢰도는 광고와 달리 비용 없이 유지됩니다.
					</div>
				</li>
				<li>
					<h3><button type="button">ChatGPT나 AI 검색에서 우리 회사가 노출되려면 어떻게 해야 하나요?</button></h3>
					<div class="con">
						AI는 신뢰도 있는 사이트의 콘텐츠를 학습해 답변을 생성합니다. 회사 소개, 서비스 설명, 전문 콘텐츠가 명확한 구조로 작성되어 있고 Schema 마크업이 적용되어 있을수록 AI가 인용할 가능성이 높아집니다. GEO 최적화는 이 구조를 만드는 작업입니다.
					</div>
				</li>
				<li>
					<h3><button type="button">우리 사이트가 현재 SEO가 잘 되어 있는지 확인할 수 있나요?</button></h3>
					<div class="con">
						Google Search Console, PageSpeed Insights, Rich Results Test 등 무료 도구로 현재 상태를 확인할 수 있습니다. 홈페이지코리아에 문의하시면 현재 사이트의 기술 구조와 개선이 필요한 항목을 검토해 드립니다.
					</div>
				</li>
				<li>
					<h3><button type="button">개발사마다 SEO 적용 방식이 다른가요?</button></h3>
					<div class="con">
						title·description 정도만 설정하는 곳이 있는 반면, URL 구조 설계부터 sitemap 자동 생성, Schema 마크업 구현까지 시스템 레벨로 설계하는 곳도 있습니다. SEO는 퍼블리싱과 개발 양쪽 모두에서 작업이 이루어져야 제대로 동작합니다.
					</div>
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
		const offset        = 200;
		const scrollStart   = serviceTop - windowHeight + offset;
		const scrollEnd     = serviceTop + offset;

		if (scrollTop >= scrollStart) {
			$mainService.addClass("start");
		} else {
			$mainService.removeClass("start");
		}

		const progress     = Math.min(Math.max((scrollTop - scrollStart) / (scrollEnd - scrollStart), 0), 1);
		const translateY   = initY + (-initY * progress);
		const scale        = 1 + 3 * progress;
		const brBottom     = 50 * (1 - progress);
		const aspectW      = 1 + 1 * progress;  // 1 → 2
		const borderRadius = `50% 50% ${brBottom}% ${brBottom}%`;

		if (scrollTop >= scrollStart) {
			$bgRound.css({
				"transform"    : `translate(-50%, ${translateY}px) scale(${scale})`,
				"border-radius": borderRadius,
				"aspect-ratio" : `${aspectW} / 1`
			});
		} else {
			$bgRound.css({
				"transform"    : `translate(-50%, ${initY}px) scale(1)`,
				"border-radius": "50%",
				"aspect-ratio" : "1 / 1"
			});
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