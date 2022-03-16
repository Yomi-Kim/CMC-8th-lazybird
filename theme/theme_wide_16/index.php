<?php
if (!defined('_INDEX_')) define('_INDEX_', true);
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

if (G5_IS_MOBILE) {
    include_once(G5_THEME_MOBILE_PATH.'/index.php');
    return;
}

if(G5_COMMUNITY_USE === false) {
    include_once(G5_THEME_SHOP_PATH.'/index.php');
    return;
}

include_once(G5_THEME_PATH.'/head.php');
?>




<?php 
/**************************************************************************

GNUBOARD 5.4

테마메뉴얼주소 입니다. 아래 주소에 설치 및 셋팅법이 포함되어 있습니다.
http://ety.kr/board/free_theme_manual

오류내용은 질문게시판을 이용해주세요 (오픈카톡이나 유선상 문의를 받지 않습니다.)
http://ety.kr/board/qa

팁영상 요청 주소 : softzonecokr@naver.com 
팁영상 요청을 해주시면 중복되지 않는 선에서 팁영상을 제작해드고 있습니다.

[라이선스]
자주 하는 질문이 있어서 문서내 포함시켰습니다.
해당 내용은 읽어 보시고 삭제하셔도 됩니다.

1. 배포, 재배포는 에티테마만 가능하므로 사용만 하시고 다른쪽에 배포나 재배포 하지 말아주세요.
(라이선스 위반을 하시게 되면 그에 따른 책임이 따르게 됩니다.)

2. 돈을 받고 유상으로 작업하셔도 되지만 그에 대한 책임은 돈을 받는 제작자에게 있으며 에티테마와는 무관합니다.


**************************************************************************/ 
?>




<!-------------------------- 슬라이드 -------------------------->
<header>
  <div id="carouselExampleIndicators" class="carousel slide carousel-fade" data-ride="carousel" data-interval="5000">
	<ol class="carousel-indicators">
	  <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
	  <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
	  <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
	</ol>
	<div class="carousel-inner" role="listbox">
	  <!-- Slide One - Set the background image for this slide in the line below -->
	  <div class="carousel-item active" style="background-image: url('http://rladydals333.cafe24.com/theme/theme_wide_16/img/main_1.jpg')">
		<div class="carousel-caption d-md-block">
		  <h3 class="ks4">"한계를 뛰어넘다"</h3>
		  <p class="ks4 f20">Central Makers Challenge 8th Team Limit</p>
		</div>
	  </div>
	  <!-- Slide Two - Set the background image for this slide in the line below -->
	  <div class="carousel-item" style="background-image: url('http://rladydals333.cafe24.com/theme/theme_wide_16/img/main_2.jpg')">
		<div class="carousel-caption d-md-block">
		  <h3 class="ks4">"얼리버드가 되고싶은 레이지버드"</h3>
		  <p class="ks4 f20">전시 문화 생활 큐레이터 레이지버드 입니다.</p>
		</div>
	  </div>
	  <!-- Slide Three - Set the background image for this slide in the line below -->
	  <div class="carousel-item" style="background-image: url('http://rladydals333.cafe24.com/theme/theme_wide_16/img/main_3.jpg')">
		<div class="carousel-caption d-md-block">
		  <h3 class="ks4"></h3>
		  <p class="ks4 f20"></p>
		</div>
	  </div>
	</div>
	<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
	  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
	  <span class="sr-only">Previous</span>
	</a>
	<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
	  <span class="carousel-control-next-icon" aria-hidden="true"></span>
	  <span class="sr-only">Next</span>
	</a>
  </div>
</header>
<!-------------------------- ./슬라이드 -------------------------->






<!-------------------------- 아이콘박스 -------------------------->
<div class="margin-top-100"></div>
<div class="container">
	<div class="center-heading ks4">
		<h2>About <strong> Limit</strong> </h2>
		<span class="center-line"></span>
		<p class="sub-text margin-bottom-80 ks5 f19">
		"한계"를 뛰어넘다
		</p>
	</div>

	<div class="row padding-top-20">
		<div class="col-lg-4 col-md-4 col-sm-12 col-12">
			<div class="box">							
				<div class="icon">
					<div class="info-pink">
						<i class="fas fa-lightbulb"></i>
						<p class="ks4 f15 h75">
                            Planner 요미 | 김용민<br>
                            Plan, Project Manager, Web/Admin Dev
						</p>
						<div class="margin-top-20 margin-bottom-20">
							<button type="button" class="btn btn-secondary btn-sm ks4" onclick="location.href='https://www.notion.so/Dev-Yong-c1c9e92b8b6149ce8d3d7ec6b63f56e7'">프로필</button>
						</div>
					</div>
				</div>
				<div class="space"></div>
			</div> 
		</div><!-- ./col -->
		<div class="col-lg-4 col-md-4 col-sm-14 col-12">
			<div class="box">							
				<div class="icon">
					<div class="info-pink-2">
						<i class="fas fa-palette"></i>
						<p class="ks4 f15 h75">
                            Designer 리브 | 임샛별<br>
                            Project Design, UX/UI Design, Illustration
						</p>
						<div class="margin-top-20 margin-bottom-20">
							<button type="button" class="btn btn-secondary btn-sm ks4" onclick="location.href='https://luck-octave-3f0.notion.site/Liv-s-Profile-c3f9a45bcfff48b9ba69587a4805425e'">프로필</button>
						</div>
					</div>
				</div>
				<div class="space"></div>
			</div> 
		</div><!-- ./col -->
		<div class="col-lg-4 col-md-4 col-sm-12 col-12">
			<div class="box">							
				<div class="icon">
					<div class="info">
						<i class="fas fa-server"></i>
						<p class="ks4 f15 h75">
                            Server 보리 | 전지원<br>
                            DB Design, System Dev, Back-end Dev
						</p>
						<div class="margin-top-20 margin-bottom-20">
							<button type="button" class="btn btn-secondary btn-sm ks4" onclick="location.href='https://organic-bench-eae.notion.site/ad08368c63ce418da92e2115e3187011'">프로필</button>
						</div>
					</div>
				</div>
				<div class="space"></div>
			</div> 
		</div><!-- ./col -->

	</div><!-- /row -->

	<div class="d-none d-sm-block margin-top-30"></div><!-- pc 만 적용 -->

	<!-------------------------- 두번째줄 -------------------------->
	<div class="row">
		<div class="col-lg-4 col-md-4 col-sm-12 col-12">
			<div class="box">							
				<div class="icon">
					<div class="info">
						<i class="fab fa-android"></i>
						<p class="ks4 f15 h75">
                            Designer 제믹 | 전계원<br>
                            UX/UI Desgin, AOS Dev, Front-end Dev
						</p>
						<div class="margin-top-20 margin-bottom-20">
							<button type="button" class="btn btn-secondary btn-sm ks4" onclick="location.href='https://sugary-emoji-489.notion.site/xemic-s-profile-a1b394244156457ca17d05455b45c4fb'">프로필</button>
						</div>
					</div>
				</div>
				<div class="space"></div>
			</div> 
		</div><!-- /col -->
		<div class="col-lg-4 col-md-4 col-sm-12 col-12">
			<div class="box">							
				<div class="icon">
					<div class="info-pink-2">
						<i class="fab fa-apple"></i>
						<p class="ks4 f15 h75">
                            Designer 무무 | 이숭인<br>
                            UX/UI Desgin, IOS Dev, Front-end Dev
						</p>
						<div class="margin-top-20 margin-bottom-20">
							<button type="button" class="btn btn-secondary btn-sm ks4" onclick="location.href='https://outstanding-cylinder-944.notion.site/Profile-Mumu-33681eabfc8b414cbeced077f7eff3ac'">프로필</button>
						</div>
					</div>
				</div>
				<div class="space"></div>
			</div> 
		</div><!-- /col -->

		<div class="col-lg-4 col-md-4 col-sm-12 col-12">
			<div class="box">							
				<div class="icon">
					<div class="info-pink">
						<i class="fas fa-thumbs-up"></i>
						<p class="ks4 f15 h75">
                            Special Thanks To <br>Central Makers Challenge<br>
						</p>
						<div class="margin-top-20 margin-bottom-20">
							<button type="button" class="btn btn-secondary btn-sm ks4" onclick="location.href='https://makeus.in/'">바로가기</button>
						</div>
					</div>
				</div>
				<div class="space"></div>
			</div> 
		</div><!-- /col -->
	</div><!-- /row -->
	<div class="margin-bottom-40"></div>
</div><!-- /container -->




<!-------------------------- 게시판 -------------------------->
<!-- <div class="container">
	<div class="row">
		<div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
			<?php echo latest('theme/basic_main_one', 'notice', 5, 40);?>
		</div>
		<div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
			<?php echo latest('theme/basic_main_one', 'free', 5, 40);?>
		</div>
	</div>
</div>
<div class="margin-bottom-150"></div> -->





<!-------------------------- pallax box -------------------------->
<style>
.para-box{
    height: 550px; display: grid; align-items: center;
}
</style>
<div class="parallax-window" data-parallax="scroll" data-image-src="<?php echo G5_THEME_URL?>/img/1.jpg"><!-- 이미지 주소 -->
	<div class="container">
		<div class="row">
			<div class="col-md-12 para-box text-center">
				
				<div class="">
					<h2 class='text-light ks5'>레이지버드 다운로드</h2>
					<br />
					<button type="button" style="padding:0;border:none;background:none;"onclick='window.open("about:blank").location.href="https://apps.apple.com/kr/app/%EB%A0%88%EC%9D%B4%EC%A7%80-%EB%B2%84%EB%93%9C/id1590843730"'><img style="width: 200px;" src ="<?php echo G5_THEME_URL?>/img/app_store.svg"></button>
                    <br />
					<button type="button" style="padding:0;border:none;background:none;" onclick='window.open("about:blank").location.href="https://play.google.com/store/apps/details?id=com.limit.lazybird"'><img style="width: 200px;"  src ="<?php echo G5_THEME_URL?>/img/google-play.png"></button>
				</div>
			</div>

		</div>
	</div>
</div><!-- /parallax -->



<!-------------------------- USE A LIBRARY -------------------------->
<div class="padding-top-120 padding-bottom-140" style="background:#E5E5E5;">
	<div class="container">
		<div class="center-heading">
			<h2 class="en1">About <strong>LAZYBIRD</strong> </h2>
			<span class="center-line"></span>
		</div>
	  <div class="row f16">

		<div class="col-lg-5 text-left pt-2">
			<img class="img-fluid rounded" src="<?php echo G5_THEME_URL?>/img/2.png" alt="">
		</div>
		<div class="col-lg-1 text-left">

		</div>

		<div class="col-lg-6">
		  <h2 class="ks5">당신을 위한 전시 큐레이터</h2>
		  <p class="ks4 f20">레이지버드</p>
		  <ul class="en2">
		  	<li><strong>CMC - 8th Challenger`s APP</strong></li><br />

              <p class="ks5">
		  "나에게 맞는, 얼리버드 정보를, 한번에" 라는 생각으로 시작한 레이지버드는<br> 전시회 관람자들의 불편함을 해소하고 코로나 19로 인한 경영난에 시달리는<br> 소상공인 전시 사업체를 위한 서비스 입니다.</p>
            <li><strong>SERVER</strong></li>
            <li>Aws EC2</li>
			<li>Node&Express</li>
			<li>MySQL</li>
			<li><strong>AOS</strong></li>
			<li>Kotlin</li>
            <li>MVVM Architecture</li>
            <li><strong>IOS</strong></li>
			<li>Swift</li>
            <li>MVVM Architecture</li>

		  </ul>
		  
		</div>

	  </div>
	  <!-- /.row -->
	</div>
</div>






<!-------------------------- parallax 박스 및 countdown -------------------------->
<!-- <div class="parallax-window" data-parallax="scroll" data-image-src="<?php echo G5_THEME_URL?>/img/bg/2.jpg">
	<div class="container">
		<div class="row" style="height:550px;">

			<div class="col-md-12 text-center p-center para-text">
				<h2 class='text-light ks5'>반응형 커뮤니티 , 반응형 와이드 에티테마 무료 다운로드 바로가기</h2>
				<button type="button" class="btn btn-outline-light ks4" onclick='window.open("about:blank").location.href="http://ety.kr/board/theme_update"'>바로가기</button>
			</div>
		</div>
	</div>
</div> /parallax -->





<!-------------------------- GALLERY -------------------------->
<!-- 

테마폴더/tail.php : 43 번째줄에서 수정하시면 됩니다.
owlcarousel 시간조정, 개수조정, 오토플레이 조정
-->
<!-- 
<div class="container margin-top-100 margin-bottom-120">
	<h3 class="text-left">GALLERY</h3>
	<?php echo latest('theme/pic_basic_owl', 'gallery', 9, 24); ?>
</div>
 -->





<?php
include_once(G5_THEME_PATH.'/tail.php');