<?php
include_once('./_common.php');
include_once(G5_THEME_PATH.'/head.php');
?>



	<!-------------------------- 상단배경 수정 -------------------------->
	<?php
	$background_images = G5_URL.'/pages/img/1.jpg';
	?>
	<style>
	/* mobile */
	@media (min-width: 1px) and (max-width: 1089px) {
			.about-bg{background-image:url('<?php echo $background_images?>');width:100%;-webkit-background-size:100% auto;-moz-background-size:100% auto;-o-background-size:100% auto;background-position:center; background-size: cover; background-repeat:no-repeat;color:#fff;height:100%;padding-top: 70px;}.ml-auto,.mx-auto{padding-top:10px;padding-bottom:10px}.lead{font-size:12px;font-weight:300}.display-4{ font-size:1.5rem;font-weight:300;}.btn,a.btn{line-height:20px!important;height:20px!important;padding:0 5px;text-align:center;font-weight:700;border:0;-webkit-transition:background-color .3s ease-out;-moz-transition:background-color .3s ease-out;-o-transition:background-color .3s ease-out;transition:background-color .3s ease-out}.btn-outline-secondary{font-size:11px;padding:0 5px}
	}
	/* desktop */
	@media (min-width: 1090px) {
		.about-bg{background-image:url('<?php echo $background_images?>');background-position:center center;background-repeat:no-repeat;color:#fff;height:300px}.lead{font-size:1.25rem;font-weight:300}.display-4{font-size:2.5rem;font-weight:300;line-height:1.2}
	}



	</style>


	<div class="position-relative overflow-hidden p-md-5 text-center bg-dark bg-sub-1 ety-mt-main about-bg">

	  <div class="col-md-5 p-lg-5 mx-auto my-5">
		<h1 class="display-4 font-weight-normal"><?php echo $title?></h1>
		<p class="lead font-weight-normal ko1">
			<?php echo $title_sub?>
		</p>
	  </div>
	  <div class="product-device shadow-sm d-none d-md-block"></div>
	  <div class="product-device product-device-2 shadow-sm d-none d-md-block"></div>
	</div>
	<!-------------------------- ./상단배경 수정 -------------------------->


		<style>
		@media only screen and (max-width: 320px) {
			.SF_board{
				overflow-x: auto;white-space: nowrap;
			}
		}

		@media only screen and (min-width: 321px) and (max-width: 768px){
			.SF_board{
				overflow-x: auto;white-space: nowrap;
			}
		}

		/* 페이지 selec 박스 */
		/* mobile */
		@media (min-width: 1px) and (max-width: 1089px) {
			.mb-5, .my-5 {
				margin-bottom: 0rem!important;
			}
			.select-menu{width:190px; height:58px; padding:17px 70px 17px 5px; border-top:none; border-bottom:1px solid #fff; border-left: 1px solid #e1e1e1;border-right: 1px solid #f2f2f2;}
			.home{display:inline; width:140px; padding:17px 45px 17px 15px; border-left:1px solid #e1e1e1;}
			.menu{display:inline;}
		}
		/* desktop */
		@media (min-width: 1090px) {
			.select-menu{width:190px; height:58px; padding:17px 70px 17px 5px; border-top:none; border-bottom:1px solid #fff; border-left: 1px solid #e1e1e1;border-right: 1px solid #f2f2f2;}
			.home{display:inline; width:140px; padding:17px 45px 17px 15px; border-left:1px solid #e1e1e1;}
			.menu{display:inline;}
		}
	</style>
	<div class="container-fluid" style="background:#f5f5f5; border-bottom:1px solid #e1e1e1;">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="home">
						<i class="fas fa-home"></i> HOME
					</div>
					<div class="menu">
						<select name="" class="select-menu" onchange="location.href=this.value">
							<option value="<?php echo G5_URL?>/pages/about.php" selected>인사말</option>
							<option value="<?php echo G5_URL?>/pages/history.php">연혁</option>
							<option value="<?php echo G5_URL?>/pages/pages-1.php">페이지</option>
						</select>
					</div>

				</div><!-- /col -->
			</div><!-- /row -->
		</div><!-- /container -->
	</div><!-- /container-fluid -->



	<div class="container margin-top-80">
		
		<div class="center-heading en1">
			<h2>ABOUT US</h2>
			<span class="center-line"></span>
		</div>

		<img src="<?php echo G5_URL?>/pages/img/about_01.jpg" class="img-fluid">
		<ul class="list-unstyled margin-top-50">
		  <li class="media">
			<div class="media-body">
			  <h5 class="mt-0 mb-1">GREETING</h5>
			  <p class="ks3">
				이스라엘 민족의 조상은 메소포타미아로부터 가나안 지방으로 이동하였던 것이나, 요셉을 중심으로 한 일부가 힉소스 지배(B.C.1730 ~ B.C.1570)의 이집트(영어: Egypt, 한국 한자: 埃及-애급)에 들어가 나일강의 델타 지역 동쪽에 머물러 살게 되었다.
				〈출애굽기〉에 의하면 요셉의 후손들은 그 뒤 새로운 파라오가 즉위하자 이집트의 노예로서 토목사업에 혹사당하게 되었다. 이때 이스라엘 민족해방의 지도자로 나타난 사람이 모세이다. [출처 위키백과]
			  </p>
			</div>
		  </li>
		</ul>
	</div>


    <!-- Page Content -->
    <div class="container-fluid bg-gray2 margin-top-80">
		<div class="container">
			<div class="row margin-top-50 margin-bottom-50">
				<div class="col-md-6 col-md-offset-1 item"><i class="icon-cursor-move icon"></i>
					<h4 class="">RESPONSIVE</h4>
					<p class="ks3">
					에티테마에서는 특별한 프로그램이 동작해야 하는 상황이 아니라면 반응형으로 모든것을 제작하고 있습니다. 이는 모든 기기와 브라우저에 대응하기 위해서 내려진 결론입니다.
					</p>
				</div>
				<div class="col-md-6 item"><i class="icon-docs icon"></i>
					<h4 class="">DEVELOPMENT</h4>
					<p class="ks3">
					반응형으로 제작되어 지는 테마&템플릿등을 이용하여 웹개발을 진행하고 있습니다. 앞으로 무료테마 유료테마등을 지속적으로 배포할 예정 입니다.
					</p>
				</div>
				<div class="clearfix hidden-xs hidden-sm"></div>
				<div class="col-md-6 col-md-offset-1 item"><i class="icon-layers icon"></i>
					<h4 class="">THEME</h4>
					<p class="ks3">
					CMS 웹인 GNUBOARD 를 이용하여 테마를 제작하는 이유는 추세에 맞는 오픈소스와 활용도, 생산성, 비용절감등에 있습니다. 그러므로 앞으로 오픈소스를 이용한 테마 개발 , 프로그램 개발등을 지속할 예정 입니다.
					</p>
				</div>
				<div class="col-md-6 item"><i class="icon-link icon"></i>
					<h4 class="">SOLUTION</h4>
					<p class="ks3">
					에티테마는 소프트존에서 운영되는 커뮤니티 입니다. 현재는 두종류의 테마만 있지만 지속적으로 새로운 유료테마 & 무료테마들이 업데이트 될 예정 입니다.
					</p>
				</div>
			</div>

		</div>
	</div><!-- /container -->
	<div class="container margin-top-80 margin-bottom-80">
      <div class="row">
        <div class="col-lg-6">
          <iframe width="100%" height="315" src="https://www.youtube.com/embed/edZW-pAPJzU" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
        <div class="col-lg-6 ks4">
          <h2>ABOUT BUSINESS</h2>
		  <p><strong>테마적용은 비슷비슷하므로 영상을 참고해주세요.</strong></p>
          <p>에티테마에서는 무료 커뮤니티 테마, 비즈니스 테마를 배포하고 있습니다.</p>
          <p>작업 되는 모든 테마는 돈을 받고 작업하셔도 됩니다. 배포는 소프트존만 가능하며 배포처는 에티테마,SIR 만 제한하고 있습니다.</p>
          <p>질문게시판은 <strong><a href="http://ety.kr/board/qa" target="_blank">http://ety.kr/board/qa</a></strong> 에서 진행하고 있으므로 궁금점이나 문의사항이 있으시면 해당 게시판을 이용해주세요.</p>
        </div>
      </div>
    </div>
<?php
include_once(G5_THEME_PATH.'/tail.php');
?>