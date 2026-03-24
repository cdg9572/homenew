@extends('layouts.app')
@section('title', $sName)
@section('sName', $sName)
@section('description', '홈페이지 기획부터 SEO 최적화, 사용자 경험 개선까지, 성공적인 온라인 비즈니스를 위한 유용한 인사이트를 만나보세요.')
@section('sga_plus')
,"mainEntity": {
	"@@type": "ItemList",
	"name": "@yield('title', '')",
	"description": "@yield('description')",
	"numberOfItems": "999",
	"itemListElement": [
		{
			"@@type": "ListItem",
			"position": 1,
			"name": "토스 MOU를 통한 PG사 연동 관련 (최저 수수료 제안)",
			"url": "https://homepagekorea.com/blog/view"
		},
		{
			"@@type": "ListItem",
			"position": 2,
			"name": "우리 팀은 어떻게 웹사이트를 만들까? 디자인부터 개발까지의 협업 과정",
			"url": "https://homepagekorea.com/blog/view"
		},
		{
			"@@type": "ListItem",
			"position": 3,
			"name": "우리 팀은 어떻게 웹사이트를 만들까? 디자인부터 개발까지의 협업 과정",
			"url": "https://homepagekorea.com/blog/view"
		}
	]
},
@endsection

@section('content')
<main class="sub_contents_wrap">

	<section class="svisual g{{ $gNum }}" aria-labelledby="sub-visual-title" data-header="light">
		<div class="bg_box mojo_aos">
			<div class="inner">
				{{-- 현재 위치 정보를 제공하는 내비게이션 --}}
				<nav class="location" aria-label="현재 위치">
					<a href="/" class="home" aria-label="홈으로 이동">HOME</a>
					<span>{{ $gName }}</span>
					@if(isset($gNum) && ($gNum == '01' || $gNum == '02'))<span aria-current="location">{{ $sName }}</span>@endif
				</nav>
				<h1 class="sound_only">홈페이지코리아 블로그</h1>
				<div id="sub-visual-title" class="title" aria-hidden="true">{{ $sName ?? '' }}</div>
				<h2 class="h2">홈페이지 제작부터 SEO/GEO, 사용자 경험 개선까지, 성공적인 온라인 비즈니스를 위한 인사이트를 만나보세요.</h2>
			</div>
		</div>
	</section>

	<section class="board_wrap" aria-label="blog-list" data-header="light">
		<div class="inner">
			<h2 id="blog-list" class="sound_only">전체 블로그 목록</h2>
			
			<a href="/blog/view" class="blog_main_banner flex mojo_aos">
				<span class="imgfit" aria-hidden="true"><img src="/images/img_blog_top_sample.jpg" alt=""></span>
				<span class="txt">
					<span class="type">웹 개발 인사이트</span>
					<h3>토스 MOU를 통한 PG사 연동 관련 (최저 수수료 제안)</h3>
					<p>○○○ 쇼핑몰은 토스 PG 도입 후 월 평균 25만원의 수수료를 절약하고 있습니다. 1일 정산으로 현금 흐름도 개선되었죠. ○○○ 쇼핑몰은 토스 PG 도입 후 월 평균 25만원의 수수료를 절약하고 있습니다. 1일 정산으로 현금 흐름도 개선되었죠. ○○○ 쇼핑몰은 토스 PG 도입 후 월 평균 25만원의 수수료를 절약하고 있습니다. 1일 정산으로 현금 흐름도 개선되었죠. </p>
					<time class="date" datetime="2026-03-10">2026.03.10</time>
				</span>
			</a>
			
			<div class="blog_tit" data-aos="fade-up">홈페이지코리아의 소식을 만나보세요.</div>
			<div class="board_top" data-aos="fade-up">
				<nav aria-label="블로그 카테고리 필터">
					<ul class="tabs">
						<li class="on"><a href="/blog/" aria-current="page">전체</a></li>
						<li><a href="/blog/">팀스토리</a></li>
						<li><a href="/blog/">웹 개발 인사이트</a></li>
						<li><a href="/blog/">홈페이지 트렌드</a></li>
						<li><a href="/blog/">성공사례</a></li>
					</ul>
				</nav>
				<div class="search_area">
					<form action="" role="search">
						<label for="blog-search" class="sound_only">블로그 검색</label>
						<div class="flex">
							<input type="text" id="blog-search" class="text" placeholder="검색어를 입력해 주세요.">
							<button type="submit" class="btn">검색</button>
						</div>
					</form>
				</div>
			</div>
			
			<ul class="blog_list">
				<li data-aos="fade-up">
					<a href="/blog/view">
						<span class="imgfit"aria-hidden="true"><img src="/images/img_blog_sample.jpg" alt=""></span>
						<span class="txt">
							<span class="type">팀스토리</span>
							<h3>우리 팀은 어떻게 웹사이트를 만들까? 디자인부터 개발까지의 협업 과정</h3>
							<time class="date" datetime="2026-03-10">2026.03.10</time>
						</span>
					</a>
				</li>
				<li data-aos="fade-up">
					<a href="/blog/view">
						<span class="imgfit"aria-hidden="true"><img src="/images/img_blog_sample.jpg" alt=""></span>
						<span class="txt">
							<span class="type">팀스토리</span>
							<h3>우리 팀은 어떻게 웹사이트를 만들까? 디자인부터 개발까지의 협업 과정</h3>
							<time class="date" datetime="2026-03-10">2026.03.10</time>
						</span>
					</a>
				</li>
				<li data-aos="fade-up">
					<a href="/blog/view">
						<span class="imgfit"aria-hidden="true"><img src="/images/img_blog_sample.jpg" alt=""></span>
						<span class="txt">
							<span class="type">팀스토리</span>
							<h3>우리 팀은 어떻게 웹사이트를 만들까? 디자인부터 개발까지의 협업 과정</h3>
							<time class="date" datetime="2026-03-10">2026.03.10</time>
						</span>
					</a>
				</li>
				<li data-aos="fade-up">
					<a href="/blog/view">
						<span class="imgfit"aria-hidden="true"><img src="/images/img_blog_sample.jpg" alt=""></span>
						<span class="txt">
							<span class="type">팀스토리</span>
							<h3>우리 팀은 어떻게 웹사이트를 만들까? 디자인부터 개발까지의 협업 과정</h3>
							<time class="date" datetime="2026-03-10">2026.03.10</time>
						</span>
					</a>
				</li>
				<li data-aos="fade-up">
					<a href="/blog/view">
						<span class="imgfit"aria-hidden="true"><img src="/images/img_blog_sample.jpg" alt=""></span>
						<span class="txt">
							<span class="type">팀스토리</span>
							<h3>우리 팀은 어떻게 웹사이트를 만들까? 디자인부터 개발까지의 협업 과정</h3>
							<time class="date" datetime="2026-03-10">2026.03.10</time>
						</span>
					</a>
				</li>
				<li data-aos="fade-up">
					<a href="/blog/view">
						<span class="imgfit"aria-hidden="true"><img src="/images/img_blog_sample.jpg" alt=""></span>
						<span class="txt">
							<span class="type">팀스토리</span>
							<h3>우리 팀은 어떻게 웹사이트를 만들까? 디자인부터 개발까지의 협업 과정</h3>
							<time class="date" datetime="2026-03-10">2026.03.10</time>
						</span>
					</a>
				</li>
				<li data-aos="fade-up">
					<a href="/blog/view">
						<span class="imgfit"aria-hidden="true"><img src="/images/img_blog_sample.jpg" alt=""></span>
						<span class="txt">
							<span class="type">팀스토리</span>
							<h3>우리 팀은 어떻게 웹사이트를 만들까? 디자인부터 개발까지의 협업 과정</h3>
							<time class="date" datetime="2026-03-10">2026.03.10</time>
						</span>
					</a>
				</li>
				<li data-aos="fade-up">
					<a href="/blog/view">
						<span class="imgfit"aria-hidden="true"><img src="/images/img_blog_sample.jpg" alt=""></span>
						<span class="txt">
							<span class="type">팀스토리</span>
							<h3>우리 팀은 어떻게 웹사이트를 만들까? 디자인부터 개발까지의 협업 과정</h3>
							<time class="date" datetime="2026-03-10">2026.03.10</time>
						</span>
					</a>
				</li>
				<li data-aos="fade-up">
					<a href="/blog/view">
						<span class="imgfit"aria-hidden="true"><img src="/images/img_blog_sample.jpg" alt=""></span>
						<span class="txt">
							<span class="type">팀스토리</span>
							<h3>우리 팀은 어떻게 웹사이트를 만들까? 디자인부터 개발까지의 협업 과정</h3>
							<time class="date" datetime="2026-03-10">2026.03.10</time>
						</span>
					</a>
				</li>
				<li data-aos="fade-up">
					<a href="/blog/view">
						<span class="imgfit"aria-hidden="true"><img src="/images/img_blog_sample.jpg" alt=""></span>
						<span class="txt">
							<span class="type">팀스토리</span>
							<h3>우리 팀은 어떻게 웹사이트를 만들까? 디자인부터 개발까지의 협업 과정</h3>
							<time class="date" datetime="2026-03-10">2026.03.10</time>
						</span>
					</a>
				</li>
				<li data-aos="fade-up">
					<a href="/blog/view">
						<span class="imgfit"aria-hidden="true"><img src="/images/img_blog_sample.jpg" alt=""></span>
						<span class="txt">
							<span class="type">팀스토리</span>
							<h3>우리 팀은 어떻게 웹사이트를 만들까? 디자인부터 개발까지의 협업 과정</h3>
							<time class="date" datetime="2026-03-10">2026.03.10</time>
						</span>
					</a>
				</li>
				<li data-aos="fade-up">
					<a href="/blog/view">
						<span class="imgfit"aria-hidden="true"><img src="/images/img_blog_sample.jpg" alt=""></span>
						<span class="txt">
							<span class="type">팀스토리</span>
							<h3>우리 팀은 어떻게 웹사이트를 만들까? 디자인부터 개발까지의 협업 과정</h3>
							<time class="date" datetime="2026-03-10">2026.03.10</time>
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
//AOS
	AOS.init({
		duration: 2000,
	});
</script>
@endsection