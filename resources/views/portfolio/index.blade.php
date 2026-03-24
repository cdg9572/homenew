@extends('layouts.app')
@section('title', $sName)
@section('sName', $sName)
@section('description', '중견/대기업, 학회/협회, 공공기관, 병원/의료, 대학/학원 등 다양한 분야의 홈페이지 제작 포트폴리오를 확인하세요. 홈페이지제작, 유지보수, 온라인쇼핑몰, SI시스템개발, 앱개발, AI솔루션까지 제공합니다.')
@section('sga_plus')
,"mainEntity": {
	"@@type": "ItemList",
	"name": "@yield('title', '')",
	"description": "@yield('description')",
	"numberOfItems": "{{ $portfolioCount ?? '4400' }}",
	"itemListElement": [
		{
			"@@type": "ListItem",
			"position": 1,
			"name": "한국폐기물협회 - 생활폐기물 분리배출 누리집 신규 구축",
			"url": "https://homepagekorea.com/portfolio/view"
		},
		{
			"@@type": "ListItem",
			"position": 2,
			"name": "한국폐기물협회 - 생활폐기물 분리배출 누리집 신규 구축",
			"url": "https://homepagekorea.com/portfolio/view"
		},
		{
			"@@type": "ListItem",
			"position": 3,
			"name": "한국폐기물협회 - 생활폐기물 분리배출 누리집 신규 구축",
			"url": "https://homepagekorea.com/portfolio/view"
		}
	]
},
@endsection

@section('content')
<main class="sub_contents_wrap">

	<section class="svisual g{{ $gNum }}" aria-labelledby="sub-visual-title">
		<div class="bg_box mojo_aos">
			<div class="inner">
				{{-- 현재 위치 정보를 제공하는 내비게이션 --}}
				<nav class="location" aria-label="현재 위치">
					<a href="/" class="home" aria-label="홈으로 이동">HOME</a>
					<span>{{ $gName }}</span>
					@if(isset($gNum) && ($gNum == '01' || $gNum == '02'))<span aria-current="location">{{ $sName }}</span>@endif
				</nav>
				<h1 class="sound_only">홈페이지코리아 포트폴리오</h1>
				<div id="sub-visual-title" class="title" aria-hidden="true">{{ $sName ?? '' }}</div>
				<h2 class="h2">홈페이지코리아와 함께 성장한 1,100개의 기업·기관을 확인하세요.</h2>
			</div>
		</div>
	</section>

	<section class="board_wrap" aria-label="Portfolio-list" data-header="light">
		<div class="inner">
			<h2 id="Portfolio-list" class="sound_only">전체 포트폴리오 목록</h2>
			
			<div class="board_top mojo_aos">
				<nav aria-label="포트폴리오 카테고리 필터">
					<ul class="tabs">
						<li class="on"><a href="/portfolio/" aria-current="page">전체</a></li>
						<li><a href="/portfolio/">중견/대기업</a></li>
						<li><a href="/portfolio/">학회/협회</a></li>
						<li><a href="/portfolio/">공공기관</a></li>
						<li><a href="/portfolio/">병원/의료</a></li>
						<li><a href="/portfolio/">대학/학원</a></li>
						<li><a href="/portfolio/">일반</a></li>
					</ul>
				</nav>
				<div class="search_area">
					<form action="" role="search">
						<label for="portfolio-search" class="sound_only">포트폴리오 검색</label>
						<div class="flex">
							<input type="text" id="portfolio-search" class="text" placeholder="검색어를 입력해 주세요. #결제 #유지보수 #앱">
							<button type="submit" class="btn">검색</button>
						</div>
					</form>
				</div>
			</div>
			
			<ul class="portfolio_list mojo_aos">
				<li data-aos="fade-up">
					<a href="/portfolio/view" class="box" aria-label="한국폐기물협회 생활폐기물 분리배출 누리집 신규 구축 (WEB UI/UX / 연간 운영 · 유지보수) 포트폴리오 보기">
						<span class="img_area" aria-hidden="true">
							<span class="imgfit"><img src="/images/img_portfolio_sample.png" alt=""></span>
						</span>
						<span class="txt">
							<span class="type"><span class="industry">공공기관</span><span class="tech">WEB UI/UX / Mobile / JSP</span></span>
							<h3 class="tit">생활폐기물 분리배출 누리집 신규 구축</h3>
							<ul class="tags">
								<li>#홈페이지제작</li>
								<li>#홈페이지유지보수</li>
								<li>#맞춤형AI솔루션</li>
							</ul>
						</span>
					</a>
				</li>
				<li data-aos="fade-up">
					<a href="/portfolio/view" class="box" aria-label="한국폐기물협회 생활폐기물 분리배출 누리집 신규 구축 (WEB UI/UX / 연간 운영 · 유지보수) 포트폴리오 보기">
						<span class="img_area" aria-hidden="true">
							<span class="imgfit"><img src="/images/img_portfolio_sample.png" alt=""></span>
						</span>
						<span class="txt">
							<span class="type"><span class="industry">공공기관</span><span class="tech">WEB UI/UX / Mobile / JSP</span></span>
							<h3 class="tit">생활폐기물 분리배출 누리집 신규 구축</h3>
							<ul class="tags">
								<li>#홈페이지제작</li>
								<li>#홈페이지유지보수</li>
								<li>#맞춤형AI솔루션</li>
							</ul>
						</span>
					</a>
				</li>
				<li data-aos="fade-up">
					<a href="/portfolio/view" class="box" aria-label="한국폐기물협회 생활폐기물 분리배출 누리집 신규 구축 (WEB UI/UX / 연간 운영 · 유지보수) 포트폴리오 보기">
						<span class="img_area" aria-hidden="true">
							<span class="imgfit"><img src="/images/img_portfolio_sample.png" alt=""></span>
						</span>
						<span class="txt">
							<span class="type"><span class="industry">공공기관</span><span class="tech">WEB UI/UX / Mobile / JSP</span></span>
							<h3 class="tit">생활폐기물 분리배출 누리집 신규 구축</h3>
							<ul class="tags">
								<li>#홈페이지제작</li>
								<li>#홈페이지유지보수</li>
								<li>#맞춤형AI솔루션</li>
							</ul>
						</span>
					</a>
				</li>
				<li data-aos="fade-up">
					<a href="/portfolio/view" class="box" aria-label="한국폐기물협회 생활폐기물 분리배출 누리집 신규 구축 (WEB UI/UX / 연간 운영 · 유지보수) 포트폴리오 보기">
						<span class="img_area" aria-hidden="true">
							<span class="imgfit"><img src="/images/img_portfolio_sample.png" alt=""></span>
						</span>
						<span class="txt">
							<span class="type"><span class="industry">공공기관</span><span class="tech">WEB UI/UX / Mobile / JSP</span></span>
							<h3 class="tit">생활폐기물 분리배출 누리집 신규 구축</h3>
							<ul class="tags">
								<li>#홈페이지제작</li>
								<li>#홈페이지유지보수</li>
								<li>#맞춤형AI솔루션</li>
							</ul>
						</span>
					</a>
				</li>
				<li data-aos="fade-up">
					<a href="/portfolio/view" class="box" aria-label="한국폐기물협회 생활폐기물 분리배출 누리집 신규 구축 (WEB UI/UX / 연간 운영 · 유지보수) 포트폴리오 보기">
						<span class="img_area" aria-hidden="true">
							<span class="imgfit"><img src="/images/img_portfolio_sample.png" alt=""></span>
						</span>
						<span class="txt">
							<span class="type"><span class="industry">공공기관</span><span class="tech">WEB UI/UX / Mobile / JSP</span></span>
							<h3 class="tit">생활폐기물 분리배출 누리집 신규 구축</h3>
							<ul class="tags">
								<li>#홈페이지제작</li>
								<li>#홈페이지유지보수</li>
								<li>#맞춤형AI솔루션</li>
							</ul>
						</span>
					</a>
				</li>
				<li data-aos="fade-up">
					<a href="/portfolio/view" class="box" aria-label="한국폐기물협회 생활폐기물 분리배출 누리집 신규 구축 (WEB UI/UX / 연간 운영 · 유지보수) 포트폴리오 보기">
						<span class="img_area" aria-hidden="true">
							<span class="imgfit"><img src="/images/img_portfolio_sample.png" alt=""></span>
						</span>
						<span class="txt">
							<span class="type"><span class="industry">공공기관</span><span class="tech">WEB UI/UX / Mobile / JSP</span></span>
							<h3 class="tit">생활폐기물 분리배출 누리집 신규 구축</h3>
							<ul class="tags">
								<li>#홈페이지제작</li>
								<li>#홈페이지유지보수</li>
								<li>#맞춤형AI솔루션</li>
							</ul>
						</span>
					</a>
				</li>
				<li data-aos="fade-up">
					<a href="/portfolio/view" class="box" aria-label="한국폐기물협회 생활폐기물 분리배출 누리집 신규 구축 (WEB UI/UX / 연간 운영 · 유지보수) 포트폴리오 보기">
						<span class="img_area" aria-hidden="true">
							<span class="imgfit"><img src="/images/img_portfolio_sample.png" alt=""></span>
						</span>
						<span class="txt">
							<span class="type"><span class="industry">공공기관</span><span class="tech">WEB UI/UX / Mobile / JSP</span></span>
							<h3 class="tit">생활폐기물 분리배출 누리집 신규 구축</h3>
							<ul class="tags">
								<li>#홈페이지제작</li>
								<li>#홈페이지유지보수</li>
								<li>#맞춤형AI솔루션</li>
							</ul>
						</span>
					</a>
				</li>
				<li data-aos="fade-up">
					<a href="/portfolio/view" class="box" aria-label="한국폐기물협회 생활폐기물 분리배출 누리집 신규 구축 (WEB UI/UX / 연간 운영 · 유지보수) 포트폴리오 보기">
						<span class="img_area" aria-hidden="true">
							<span class="imgfit"><img src="/images/img_portfolio_sample.png" alt=""></span>
						</span>
						<span class="txt">
							<span class="type"><span class="industry">공공기관</span><span class="tech">WEB UI/UX / Mobile / JSP</span></span>
							<h3 class="tit">생활폐기물 분리배출 누리집 신규 구축</h3>
							<ul class="tags">
								<li>#홈페이지제작</li>
								<li>#홈페이지유지보수</li>
								<li>#맞춤형AI솔루션</li>
							</ul>
						</span>
					</a>
				</li>
				<li data-aos="fade-up">
					<a href="/portfolio/view" class="box" aria-label="한국폐기물협회 생활폐기물 분리배출 누리집 신규 구축 (WEB UI/UX / 연간 운영 · 유지보수) 포트폴리오 보기">
						<span class="img_area" aria-hidden="true">
							<span class="imgfit"><img src="/images/img_portfolio_sample.png" alt=""></span>
						</span>
						<span class="txt">
							<span class="type"><span class="industry">공공기관</span><span class="tech">WEB UI/UX / Mobile / JSP</span></span>
							<h3 class="tit">생활폐기물 분리배출 누리집 신규 구축</h3>
							<ul class="tags">
								<li>#홈페이지제작</li>
								<li>#홈페이지유지보수</li>
								<li>#맞춤형AI솔루션</li>
							</ul>
						</span>
					</a>
				</li>
				<li data-aos="fade-up">
					<a href="/portfolio/view" class="box" aria-label="한국폐기물협회 생활폐기물 분리배출 누리집 신규 구축 (WEB UI/UX / 연간 운영 · 유지보수) 포트폴리오 보기">
						<span class="img_area" aria-hidden="true">
							<span class="imgfit"><img src="/images/img_portfolio_sample.png" alt=""></span>
						</span>
						<span class="txt">
							<span class="type"><span class="industry">공공기관</span><span class="tech">WEB UI/UX / Mobile / JSP</span></span>
							<h3 class="tit">생활폐기물 분리배출 누리집 신규 구축</h3>
							<ul class="tags">
								<li>#홈페이지제작</li>
								<li>#홈페이지유지보수</li>
								<li>#맞춤형AI솔루션</li>
							</ul>
						</span>
					</a>
				</li>
				<li data-aos="fade-up">
					<a href="/portfolio/view" class="box" aria-label="한국폐기물협회 생활폐기물 분리배출 누리집 신규 구축 (WEB UI/UX / 연간 운영 · 유지보수) 포트폴리오 보기">
						<span class="img_area" aria-hidden="true">
							<span class="imgfit"><img src="/images/img_portfolio_sample.png" alt=""></span>
						</span>
						<span class="txt">
							<span class="type"><span class="industry">공공기관</span><span class="tech">WEB UI/UX / Mobile / JSP</span></span>
							<h3 class="tit">생활폐기물 분리배출 누리집 신규 구축</h3>
							<ul class="tags">
								<li>#홈페이지제작</li>
								<li>#홈페이지유지보수</li>
								<li>#맞춤형AI솔루션</li>
							</ul>
						</span>
					</a>
				</li>
				<li data-aos="fade-up">
					<a href="/portfolio/view" class="box" aria-label="한국폐기물협회 생활폐기물 분리배출 누리집 신규 구축 (WEB UI/UX / 연간 운영 · 유지보수) 포트폴리오 보기">
						<span class="img_area" aria-hidden="true">
							<span class="imgfit"><img src="/images/img_portfolio_sample.png" alt=""></span>
						</span>
						<span class="txt">
							<span class="type"><span class="industry">공공기관</span><span class="tech">WEB UI/UX / Mobile / JSP</span></span>
							<h3 class="tit">생활폐기물 분리배출 누리집 신규 구축</h3>
							<ul class="tags">
								<li>#홈페이지제작</li>
								<li>#홈페이지유지보수</li>
								<li>#맞춤형AI솔루션</li>
							</ul>
						</span>
					</a>
				</li>
			</ul>
			
			<div class="board-pagination">
				<ul class="pagination">
					<li class="page-item arw_item"><a href="#this" class="page-link" title="첫 페이지로"><i class="arrow two first"></i></a></li>
					<li class="page-item arw_item"><a href="#this" class="page-link" rel="prev" title="이전 페이지"><i class="arrow one prev"></i></a></li>
					<li class="page-item active"><span class="page-link">1</span></li>
					<li class="page-item"><a class="page-link" href="#this">2</a></li>
					<li class="page-item arw_item"><a href="#this" class="page-link" title="다음 페이지"><i class="arrow one next"></i></a></li>
					<li class="page-item arw_item"><a href="#this" class="page-link" title="끝 페이지로"><i class="arrow two last"></i></a></li>
				</ul>
			</div>
		</div>
	</section>

</main>

<script>
$(document).ready(function(){
// AOS
	AOS.init({
		duration: 2000,
	});
});
</script>

@endsection