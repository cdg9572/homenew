@extends('layouts.app')
@section('title'){{ $gName }} | {{ $sName }}@endsection
@section('gName', $gName)
@section('sName', $sName)
@section('description', '운영 효율을 높이는 통합 SI 시스템 개발. 4,400개 조직이 선택한 홈페이지코리아가 27년 경험으로 예약·백오피스·ERP·CMS·LMS를 하나로 연결합니다.')
@section('keywords', 'SI 개발(153), 시스템개발(193), 예약페이지 (113), 예약페이지 만들기(39), 백오피스 개발(58), ERP 개발(490), LMS 시스템(423)')
@section('sga_plus')
,"mainEntity": [
    {
        "@@type": "Question",
        "name": "통합 SI 시스템 개발에는 얼마나 걸리나요?",
        "acceptedAnswer": {
            "@@type": "Answer",
            "text": "예약 시스템은 2~3개월, 백오피스·ERP 통합 시스템은 3~6개월 정도 소요됩니다. 초기 기획 단계에서 명확한 일정과 마일스톤을 제시하며 단계별 테스트를 통해 안정적인 오픈을 보장합니다."
        }
    },
    {
        "@@type": "Question",
        "name": "기존에 사용 중인 시스템과 연동이 가능한가요?",
        "acceptedAnswer": {
            "@@type": "Answer",
            "text": "기존 ERP, CRM 등과 API 연동을 통해 데이터를 실시간 동기화할 수 있습니다. 학교·공공기관의 나이스, 행안부 시스템 연동 경험도 풍부하여 복잡한 레거시 시스템과의 통합도 안정적으로 진행합니다."
        }
    },
    {
        "@@type": "Question",
        "name": "예약 시스템에서 승인 프로세스를 커스터마이징할 수 있나요?",
        "acceptedAnswer": {
            "@@type": "Answer",
            "text": "단순 승인부터 다단계 결재, 조건부 자동 승인, 담당자 배정, 알림톡 발송 등 기관의 운영 규칙에 맞춰 예약 프로세스를 자유롭게 설계할 수 있습니다."
        }
    },
    {
        "@@type": "Question",
        "name": "보안과 개인정보 처리는 어떻게 관리되나요?",
        "acceptedAnswer": {
            "@@type": "Answer",
            "text": "행정안전부 정보보안 관리체계 기준에 따라 개발하며 2FA, SSO, SSL 암호화, 개인정보 마스킹 등 보안 기능을 기본 적용합니다. 개인정보보호법을 철저히 준수합니다."
        }
    },
    {
        "@@type": "Question",
        "name": "시스템 구축 후 유지보수는 어떻게 진행되나요?",
        "acceptedAnswer": {
            "@@type": "Answer",
            "text": "구축을 담당한 PM이 직접 유지보수를 담당합니다. 월 단위 계약을 통해 오류 수정, 기능 개선, 서버 모니터링, 보안 업데이트를 지속적으로 지원합니다."
        }
    }
]
@endsection

@section('content')
<main class="sub_contents_wrap infopage_wrap">

	<section class="infopage_head service_head main_service" aria-labelledby="service-head-title" data-header="dark">
		<div class="inner">
			<h1 id="service-head-title" class="mojo_aos">운영 효율을 높이는 시스템 개발,<br/> (예약페이지, 백오피스, ERP, CMS,  LMS)<br/> 홈페이지 코리아에서 해결하세요.</h1>
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
				<h2 id="service-problem-title" data-aos="zoom-out-up">분산된 시스템으로 인한 운영 비효율,<br class="pc_vw"> <strong>통합 솔루션이 필요하신가요?</strong></h2>
				<ul class="problem_list">
					<li data-aos="zoom-out-up">
						<h3>기업 자산 데이터가 여러 시스템에 흩어져 있어요 <img src="/images/emoji_tears.png" alt="" aria-hidden="true"></h3>
						<p>예약은 예약 페이지, 회원 정보는 CMS, 결제는 ERP, 교육은 LMS... 각 시스템이 따로 운영되다 보니 데이터를 통합해서 보거나 분석하기가 너무 어렵습니다.</p>
					</li>
					<li data-aos="zoom-out-up">
						<h3>같은 작업을 여러 번 반복해야 해요 <img src="/images/emoji_sad.png" alt="" aria-hidden="true"></h3>
						<p>한 건의 예약을 처리하려면 예약 시스템에 입력하고, 백오피스에서 승인하고, ERP에서 결제 확인하고... 같은 정보를 계속 옮겨 적어야 하는 이중·삼중 작업이 반복됩니다.</p>
					</li>
					<li data-aos="zoom-out-up">
						<h3>시스템 간 연동이 안 되어 실시간 관리가 불가능해요 <img src="/images/emoji_anger.png" alt="" aria-hidden="true"></h3>
						<p>예약·결제·교육·콘텐츠 관리가 실시간으로 동기화되지 않아, 현황 파악이 늦고 고객 응대에도 차질이 생깁니다. 통합된 백오피스가 절실합니다.</p>
					</li>
				</ul>
				<div class="dots" aria-hidden="true" data-aos="zoom-out-up"><i class="t"></i><i class="m"></i><i class="b"></i></div>
			</div>
		</div>
	</section>
	
	<section class="infopage_how service_how" aria-labelledby="service-how-title" data-header="dark">
		<div class="inner">
			<p class="tit_label" data-aos="zoom-out-up">HOW</p>
			<h2 id="service-how-title" data-aos="zoom-out-up">홈페이지코리아는 <br class="pc_vw"><strong>맞춤형 SI 시스템 개발 전문 기업입니다.</strong></h2>
			<ul class="how_list p_large si_list">
				<li class="i_e1" data-aos="zoom-out-up">
					<div class="flex">
						<div class="imgfit"><img src="/images/img_service_how_e01.png" alt="" aria-hidden="true"></div>
						<div class="txt">
							<h3><strong>예약 시스템</strong> 개발</h3>
							<p>장비 예약, 시설 예약, 교육 신청 등 <strong>다양한 예약 프로세스를 맞춤 설계</strong>하여 <br class="pc_vw"><strong>접수부터 승인, 이용, 청구까지 한 번에 처리</strong>합니다.</p>
						</div>
					</div>
					<div class="si_portfolio_list">
						<div class="tit">PORTFOLIO <a href="/portfolio/" class="btn_more">더보기</a></div>
						<ul>
							<li>
								<a href="/portfolio/view" class="box" aria-label="한양대학교 연구장비통합관리시스템 - WEB UI/UX / Mobile / JSP 포트폴리오 보기">
									<span class="before" aria-hidden="true"><img src="/images/img_portfolio_sample.png" alt="" class="bg"><img src="/images/main_service_08.svg" alt="" class="logo"></span>
								</a>
							</li>
							<li>
								<a href="/portfolio/view" class="box" aria-label="한양대학교 연구장비통합관리시스템 - WEB UI/UX / Mobile / JSP 포트폴리오 보기">
									<span class="before" aria-hidden="true"><img src="/images/img_portfolio_sample.png" alt="" class="bg"><img src="/images/main_service_08.svg" alt="" class="logo"></span>
								</a>
							</li>
							<li>
								<a href="/portfolio/view" class="box" aria-label="한양대학교 연구장비통합관리시스템 - WEB UI/UX / Mobile / JSP 포트폴리오 보기">
									<span class="before" aria-hidden="true"><img src="/images/img_portfolio_sample.png" alt="" class="bg"><img src="/images/main_service_08.svg" alt="" class="logo"></span>
								</a>
							</li>
							<li>
								<a href="/portfolio/view" class="box" aria-label="한양대학교 연구장비통합관리시스템 - WEB UI/UX / Mobile / JSP 포트폴리오 보기">
									<span class="before" aria-hidden="true"><img src="/images/img_portfolio_sample.png" alt="" class="bg"><img src="/images/main_service_08.svg" alt="" class="logo"></span>
								</a>
							</li>
							<li>
								<a href="/portfolio/view" class="box" aria-label="한양대학교 연구장비통합관리시스템 - WEB UI/UX / Mobile / JSP 포트폴리오 보기">
									<span class="before" aria-hidden="true"><img src="/images/img_portfolio_sample.png" alt="" class="bg"><img src="/images/main_service_08.svg" alt="" class="logo"></span>
								</a>
							</li>
							<li>
								<a href="/portfolio/view" class="box" aria-label="한양대학교 연구장비통합관리시스템 - WEB UI/UX / Mobile / JSP 포트폴리오 보기">
									<span class="before" aria-hidden="true"><img src="/images/img_portfolio_sample.png" alt="" class="bg"><img src="/images/main_service_08.svg" alt="" class="logo"></span>
								</a>
							</li>
						</ul>
					</div>
				</li>
				<li class="i_e2" data-aos="zoom-out-up">
					<div class="flex">
						<div class="imgfit"><img src="/images/img_service_how_e02.png" alt="" aria-hidden="true"></div>
						<div class="txt">
							<h3><strong>ERP</strong> 개발 <span>Enterprise Resource Planning</span></h3>
							<p>결제, 청구, 정산, 재고 관리 등 <br class="pc_vw"><strong>기관 운영에 필요한 전사적 자원 관리 시스템을 개발</strong>합니다.</p>
						</div>
					</div>
					<div class="si_portfolio_list">
						<div class="tit">PORTFOLIO <a href="/portfolio/" class="btn_more">더보기</a></div>
						<ul>
							<li>
								<a href="/portfolio/view" class="box" aria-label="한양대학교 연구장비통합관리시스템 - WEB UI/UX / Mobile / JSP 포트폴리오 보기">
									<span class="before" aria-hidden="true"><img src="/images/img_portfolio_sample.png" alt="" class="bg"><img src="/images/main_service_08.svg" alt="" class="logo"></span>
								</a>
							</li>
							<li>
								<a href="/portfolio/view" class="box" aria-label="한양대학교 연구장비통합관리시스템 - WEB UI/UX / Mobile / JSP 포트폴리오 보기">
									<span class="before" aria-hidden="true"><img src="/images/img_portfolio_sample.png" alt="" class="bg"><img src="/images/main_service_08.svg" alt="" class="logo"></span>
								</a>
							</li>
							<li>
								<a href="/portfolio/view" class="box" aria-label="한양대학교 연구장비통합관리시스템 - WEB UI/UX / Mobile / JSP 포트폴리오 보기">
									<span class="before" aria-hidden="true"><img src="/images/img_portfolio_sample.png" alt="" class="bg"><img src="/images/main_service_08.svg" alt="" class="logo"></span>
								</a>
							</li>
							<li>
								<a href="/portfolio/view" class="box" aria-label="한양대학교 연구장비통합관리시스템 - WEB UI/UX / Mobile / JSP 포트폴리오 보기">
									<span class="before" aria-hidden="true"><img src="/images/img_portfolio_sample.png" alt="" class="bg"><img src="/images/main_service_08.svg" alt="" class="logo"></span>
								</a>
							</li>
							<li>
								<a href="/portfolio/view" class="box" aria-label="한양대학교 연구장비통합관리시스템 - WEB UI/UX / Mobile / JSP 포트폴리오 보기">
									<span class="before" aria-hidden="true"><img src="/images/img_portfolio_sample.png" alt="" class="bg"><img src="/images/main_service_08.svg" alt="" class="logo"></span>
								</a>
							</li>
							<li>
								<a href="/portfolio/view" class="box" aria-label="한양대학교 연구장비통합관리시스템 - WEB UI/UX / Mobile / JSP 포트폴리오 보기">
									<span class="before" aria-hidden="true"><img src="/images/img_portfolio_sample.png" alt="" class="bg"><img src="/images/main_service_08.svg" alt="" class="logo"></span>
								</a>
							</li>
						</ul>
					</div>
				</li>
				<li class="i_e3" data-aos="zoom-out-up">
					<div class="flex">
						<div class="imgfit"><img src="/images/img_service_how_e03.png" alt="" aria-hidden="true"></div>
						<div class="txt">
							<h3><strong>백오피스</strong> 개발</h3>
							<p>예약 관리, 회원 관리, 통계 분석 등 <br class="pc_vw"><strong>운영에 필요한 모든 기능을 통합</strong>한 <strong>관리자 전용 시스템을 구축</strong>합니다.</p>
						</div>
					</div>
					<div class="si_portfolio_list">
						<div class="tit">PORTFOLIO <a href="/portfolio/" class="btn_more">더보기</a></div>
						<ul>
							<li>
								<a href="/portfolio/view" class="box" aria-label="한양대학교 연구장비통합관리시스템 - WEB UI/UX / Mobile / JSP 포트폴리오 보기">
									<span class="before" aria-hidden="true"><img src="/images/img_portfolio_sample.png" alt="" class="bg"><img src="/images/main_service_08.svg" alt="" class="logo"></span>
								</a>
							</li>
							<li>
								<a href="/portfolio/view" class="box" aria-label="한양대학교 연구장비통합관리시스템 - WEB UI/UX / Mobile / JSP 포트폴리오 보기">
									<span class="before" aria-hidden="true"><img src="/images/img_portfolio_sample.png" alt="" class="bg"><img src="/images/main_service_08.svg" alt="" class="logo"></span>
								</a>
							</li>
							<li>
								<a href="/portfolio/view" class="box" aria-label="한양대학교 연구장비통합관리시스템 - WEB UI/UX / Mobile / JSP 포트폴리오 보기">
									<span class="before" aria-hidden="true"><img src="/images/img_portfolio_sample.png" alt="" class="bg"><img src="/images/main_service_08.svg" alt="" class="logo"></span>
								</a>
							</li>
							<li>
								<a href="/portfolio/view" class="box" aria-label="한양대학교 연구장비통합관리시스템 - WEB UI/UX / Mobile / JSP 포트폴리오 보기">
									<span class="before" aria-hidden="true"><img src="/images/img_portfolio_sample.png" alt="" class="bg"><img src="/images/main_service_08.svg" alt="" class="logo"></span>
								</a>
							</li>
							<li>
								<a href="/portfolio/view" class="box" aria-label="한양대학교 연구장비통합관리시스템 - WEB UI/UX / Mobile / JSP 포트폴리오 보기">
									<span class="before" aria-hidden="true"><img src="/images/img_portfolio_sample.png" alt="" class="bg"><img src="/images/main_service_08.svg" alt="" class="logo"></span>
								</a>
							</li>
							<li>
								<a href="/portfolio/view" class="box" aria-label="한양대학교 연구장비통합관리시스템 - WEB UI/UX / Mobile / JSP 포트폴리오 보기">
									<span class="before" aria-hidden="true"><img src="/images/img_portfolio_sample.png" alt="" class="bg"><img src="/images/main_service_08.svg" alt="" class="logo"></span>
								</a>
							</li>
						</ul>
					</div>
				</li>
				<li class="i_e4" data-aos="zoom-out-up">
					<div class="flex">
						<div class="imgfit"><img src="/images/img_service_how_e04.png" alt="" aria-hidden="true"></div>
						<div class="txt">
							<h3><strong>CMS</strong> 개발 <span>Content Management System</span></h3>
							<p>콘텐츠 등록, 수정, 삭제를 <strong>직관적으로 관리</strong>할 수 있는 <br class="pc_vw"><strong>맞춤형 콘텐츠 관리 시스템을 제공</strong>합니다.</p>
						</div>
					</div>
					<div class="si_portfolio_list">
						<div class="tit">PORTFOLIO <a href="/portfolio/" class="btn_more">더보기</a></div>
						<ul>
							<li>
								<a href="/portfolio/view" class="box" aria-label="한양대학교 연구장비통합관리시스템 - WEB UI/UX / Mobile / JSP 포트폴리오 보기">
									<span class="before" aria-hidden="true"><img src="/images/img_portfolio_sample.png" alt="" class="bg"><img src="/images/main_service_08.svg" alt="" class="logo"></span>
								</a>
							</li>
							<li>
								<a href="/portfolio/view" class="box" aria-label="한양대학교 연구장비통합관리시스템 - WEB UI/UX / Mobile / JSP 포트폴리오 보기">
									<span class="before" aria-hidden="true"><img src="/images/img_portfolio_sample.png" alt="" class="bg"><img src="/images/main_service_08.svg" alt="" class="logo"></span>
								</a>
							</li>
							<li>
								<a href="/portfolio/view" class="box" aria-label="한양대학교 연구장비통합관리시스템 - WEB UI/UX / Mobile / JSP 포트폴리오 보기">
									<span class="before" aria-hidden="true"><img src="/images/img_portfolio_sample.png" alt="" class="bg"><img src="/images/main_service_08.svg" alt="" class="logo"></span>
								</a>
							</li>
							<li>
								<a href="/portfolio/view" class="box" aria-label="한양대학교 연구장비통합관리시스템 - WEB UI/UX / Mobile / JSP 포트폴리오 보기">
									<span class="before" aria-hidden="true"><img src="/images/img_portfolio_sample.png" alt="" class="bg"><img src="/images/main_service_08.svg" alt="" class="logo"></span>
								</a>
							</li>
							<li>
								<a href="/portfolio/view" class="box" aria-label="한양대학교 연구장비통합관리시스템 - WEB UI/UX / Mobile / JSP 포트폴리오 보기">
									<span class="before" aria-hidden="true"><img src="/images/img_portfolio_sample.png" alt="" class="bg"><img src="/images/main_service_08.svg" alt="" class="logo"></span>
								</a>
							</li>
							<li>
								<a href="/portfolio/view" class="box" aria-label="한양대학교 연구장비통합관리시스템 - WEB UI/UX / Mobile / JSP 포트폴리오 보기">
									<span class="before" aria-hidden="true"><img src="/images/img_portfolio_sample.png" alt="" class="bg"><img src="/images/main_service_08.svg" alt="" class="logo"></span>
								</a>
							</li>
						</ul>
					</div>
				</li>
				<li class="i_e5" data-aos="zoom-out-up">
					<div class="flex">
						<div class="imgfit"><img src="/images/img_service_how_e05.png" alt="" aria-hidden="true"></div>
						<div class="txt">
							<h3><strong>LMS</strong> 개발 <span>Learning Management System</span></h3>
							<p>온라인 교육, 학습 자료 관리, 수강 이력 추적 등 <br class="pc_vw"><strong>교육 운영에 최적화된 학습 관리 시스템을 구축</strong>합니다.</p>
						</div>
					</div>
					<div class="si_portfolio_list">
						<div class="tit">PORTFOLIO <a href="/portfolio/" class="btn_more">더보기</a></div>
						<ul>
							<li>
								<a href="/portfolio/view" class="box" aria-label="한양대학교 연구장비통합관리시스템 - WEB UI/UX / Mobile / JSP 포트폴리오 보기">
									<span class="before" aria-hidden="true"><img src="/images/img_portfolio_sample.png" alt="" class="bg"><img src="/images/main_service_08.svg" alt="" class="logo"></span>
								</a>
							</li>
							<li>
								<a href="/portfolio/view" class="box" aria-label="한양대학교 연구장비통합관리시스템 - WEB UI/UX / Mobile / JSP 포트폴리오 보기">
									<span class="before" aria-hidden="true"><img src="/images/img_portfolio_sample.png" alt="" class="bg"><img src="/images/main_service_08.svg" alt="" class="logo"></span>
								</a>
							</li>
							<li>
								<a href="/portfolio/view" class="box" aria-label="한양대학교 연구장비통합관리시스템 - WEB UI/UX / Mobile / JSP 포트폴리오 보기">
									<span class="before" aria-hidden="true"><img src="/images/img_portfolio_sample.png" alt="" class="bg"><img src="/images/main_service_08.svg" alt="" class="logo"></span>
								</a>
							</li>
							<li>
								<a href="/portfolio/view" class="box" aria-label="한양대학교 연구장비통합관리시스템 - WEB UI/UX / Mobile / JSP 포트폴리오 보기">
									<span class="before" aria-hidden="true"><img src="/images/img_portfolio_sample.png" alt="" class="bg"><img src="/images/main_service_08.svg" alt="" class="logo"></span>
								</a>
							</li>
							<li>
								<a href="/portfolio/view" class="box" aria-label="한양대학교 연구장비통합관리시스템 - WEB UI/UX / Mobile / JSP 포트폴리오 보기">
									<span class="before" aria-hidden="true"><img src="/images/img_portfolio_sample.png" alt="" class="bg"><img src="/images/main_service_08.svg" alt="" class="logo"></span>
								</a>
							</li>
							<li>
								<a href="/portfolio/view" class="box" aria-label="한양대학교 연구장비통합관리시스템 - WEB UI/UX / Mobile / JSP 포트폴리오 보기">
									<span class="before" aria-hidden="true"><img src="/images/img_portfolio_sample.png" alt="" class="bg"><img src="/images/main_service_08.svg" alt="" class="logo"></span>
								</a>
							</li>
						</ul>
					</div>
				</li>
			</ul>
			<div class="flex_center" data-aos="zoom-out-up">
				<a href="/portfolio/" class="btn_link slim white">SI 시스템 개발 사례 더보기</a>
			</div>
		</div>
	</section>
	
	<section class="infopage_solution service_solution bg_white" aria-labelledby="service-solution-title" data-header="light">
		<div class="inner">
			<p class="tit_label" data-aos="zoom-out-up">SOLUTION</p>
			<h2 id="service-solution-title" data-aos="zoom-out-up">홈페이지코리아와 함께하면 <br class="pc_vw"><strong>시스템의 수준이 달라집니다.</strong></h2>
			<ul class="solution_list" data-aos="zoom-out-up">
				<li class="i_e1">
					<h3>독보적인 SI 역량</h3>
					<p>학교 및 정부 시스템 연동 경험을 바탕으로 <br class="pc_vw">기관 특유의 복잡한 이해관계를 <br class="pc_vw">하나의 시스템으로 재정리합니다.</p>
				</li>
				<li class="i_e2">
					<h3>검증된 보안 및 표준 기술</h3>
					<p>JAVA, React 등 최신 스택 활용은 물론, <br class="pc_vw">웹 접근성 준수와 시큐어 코딩(2FA/SSO) 적용으로 <br class="pc_vw">가장 안전한 시스템을 구현합니다.</p>
				</li>
				<li class="i_e3">
					<h3>장기 운영 중심의 유지보수</h3>
					<p>시스템 구조를 설계한 전문 PM이 <br class="pc_vw">직접 유지보수를 담당하여, 향후 고도화 및 리뉴얼 시에도 <br class="pc_vw">시행착오 없는 운영 이력 관리를 지원합니다.</p>
				</li>
			</ul>
		</div>
	</section>
	
	<section class="infopage_contact service_contact page_contact" aria-label="service-contact-title" data-header="dark">
		<div class="inner">
			<p class="tit_label sound_only">CTA</p>
			<h2 id="service-contact-title" class="port_tit" data-aos="zoom-out-up"><strong>업무 효율을 바꾸는 통합 시스템 구축</strong>, <br/>지금 홈페이지코리아와 상담하세요.</h2>
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
					<h3><button type="button">통합 SI 시스템 개발에는 얼마나 걸리나요?</button></h3>
					<div class="con">프로젝트 규모와 요구사항에 따라 다르지만, 일반적으로 예약 시스템은 2~3개월, 백오피스·ERP 통합 시스템은 3~6개월 정도 소요됩니다. 홈페이지코리아는 초기 기획 단계에서 명확한 일정과 마일스톤을 제시하며, 단계별 테스트를 통해 안정적인 오픈을 보장합니다.</div>
				</li>
				<li>
					<h3><button type="button">기존에 사용 중인 시스템과 연동이 가능한가요?</button></h3>
					<div class="con">네, 가능합니다. 기존 ERP, CRM 등과 API 연동을 통해 데이터를 실시간으로 동기화할 수 있습니다. 기업뿐만아니라 학교·공공기관의 나이스, 행안부 시스템 연동 경험도 풍부하여 복잡한 레거시 시스템과의 통합도 안정적으로 진행합니다.</div>
				</li>
				<li>
					<h3><button type="button">예약 시스템에서 승인 프로세스를 커스터마이징할 수 있나요?</button></h3>
					<div class="con">네, 가능합니다. 단순 승인부터 다단계 결재, 조건부 자동 승인, 담당자 배정, 알림톡 발송 등 기관의 운영 규칙에 맞춰 예약 프로세스를 자유롭게 설계할 수 있습니다. 장비별·시설별 예약 규칙이 다른 경우에도 유연하게 대응 가능합니다.</div>
				</li>
				<li>
					<h3><button type="button">보안과 개인정보 처리는 어떻게 관리되나요?</button></h3>
					<div class="con">홈페이지코리아는 행정안전부 정보보안 관리체계(ISMS) 기준에 따라 개발하며, 2FA(이중 인증), SSO(통합 로그인), 암호화 전송(SSL), 개인정보 마스킹 등 보안 기능을 기본 적용합니다. 공공기관 및 교육기관 납품 경험을 바탕으로 개인정보보호법을 철저히 준수합니다.</div>
				</li>
				<li>
					<h3><button type="button">시스템 구축 후 유지보수는 어떻게 진행되나요?</button></h3>
					<div class="con">구축을 담당한 PM이 직접 유지보수를 담당하여 시스템 구조를 완벽히 이해한 상태에서 신속한 대응이 가능합니다. 월 단위 유지보수 계약을 통해 오류 수정, 기능 개선, 서버 모니터링, 보안 업데이트를 지속적으로 지원하며, 향후 고도화 시에도 일관된 품질을 유지합니다.</div>
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