<?php
include_once('./_common.php');
include_once(G5_THEME_PATH.'/head.php');
?>


	<!-------------------------- 상단배경 수정 -------------------------->
	<?php
	$background_images = G5_URL.'/pages/img/7.jpg';
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
		<p class="lead font-weight-normal ks3">
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
							<option value="<?php echo G5_URL?>/pages/product.php">사업안내 1</option>
							<option value="<?php echo G5_URL?>/pages/product-2.php">사업안내 2</option>
							<option value="<?php echo G5_URL?>/pages/service.php" selected>서비스</option>
						</select>
					</div>

				</div><!-- /col -->
			</div><!-- /row -->
		</div><!-- /container -->
	</div><!-- /container-fluid -->



	<div class="container ks4">
		<div class="center-heading margin-top-50">
			<h2>SERVICE</h2>
			<span class="center-line"></span>
		</div>
		<div class="row">
			<div class="col-xs-12 col-sm-6 col-lg-4 margin-top-30">
				<div class="box">							
					<div class="icon">
						<div class="info">
							<h3 class="title">BOOTSTRAP4</h3>
							<p class="ks3" style='height:130px;'>
								현재 최신버전인 부트스트랩4로 제작되어 있습니다. 완벽한 반응형을 지원합니다.
								또한 폰트어썸5 가 적용되어 있습니다.
							</p>
						</div>
					</div>
					<div class="space"></div>
				</div> 
			</div>
			<div class="col-xs-12 col-sm-6 col-lg-4 margin-top-30">
				<div class="box">							
					<div class="icon">
						<div class="info">
							<h3 class="title">GNUBOARD5</h3>
							<p class="ks3" style='height:130px;'>
								그누보드 5.3/5.4 에서 모두 적용 가능합니다. 설치후 관리자 페이지에서 테마로 모두 설정하셔야 사용이 가능하며 게시판의 스킨들도 모두 테마로 변경하셔야 합니다.
							</p>
						</div>
					</div>
					<div class="space"></div>
				</div> 
			</div>
			<div class="col-xs-12 col-sm-6 col-lg-4 margin-top-30">
				<div class="box">							
					<div class="icon">
						<div class="info">
							<h3 class="title">MOBILE</h3>
							<p class="ks3" style='height:130px;'>
								모바일에서 반응형이 되지 않는다면 CONFIG.PHP 파일에 [define('G5_USE_MOBILE', false)] 에서 처럼 FALSE 값으로 변경해주세요.
							</p>
						</div>
					</div>
					<div class="space"></div>
				</div> 
			</div>		    
		</div><!-- /row -->
		<div class="row">
			<div class="col-xs-12 col-sm-6 col-lg-4 margin-top-30">
				<div class="box">							
					<div class="icon">
						<div class="info">
							<h3 class="title">QA</h3>
							<p class="ks3" style='height:130px;'>
								에티테마에 대해서 궁금하신점은 질문답변게시판을 이용해주세요. http://ety.kr/board/qa
							</p>
						</div>
					</div>
					<div class="space"></div>
				</div> 
			</div>
			<div class="col-xs-12 col-sm-6 col-lg-4 margin-top-30">
				<div class="box">							
					<div class="icon">
						<div class="info">
							<h3 class="title">SMS/EMAIL</h3>
							<p class="ks3" style='height:130px;'>
								문자메시지(SMS)/이메일 연동등은 별도 Contact US 파일을 만드셔서 작업하셔야 합니다. 
							</p>
						</div>
					</div>
					<div class="space"></div>
				</div> 
			</div>
			<div class="col-xs-12 col-sm-6 col-lg-4 margin-top-30">
				<div class="box">							
					<div class="icon">
						<div class="info">
							<h3 class="title">MESSAGE</h3>
							<p class="ks3" style='height:130px;'>
								에티테마는 소프트존에게 연락주시면 됩니다. 궁금증이나 추가 개발건이 있으실경우<BR />
								SOFTZONECOKR@NAVER.COM 으로 연락주세요. 감사합니다.
							</p>
						</div>
					</div>
					<div class="space"></div>
				</div> 
			</div>		    
		</div><!-- /row -->



	<div class="center-heading margin-top-50">
		<h2>PRICE</h2>
		<span class="center-line"></span>
	</div>

      <!-- Content Row -->
      <div class="row">
        <div class="col-lg-4 mb-4">
          <div class="card h-100">
            <h3 class="card-header">LIGHT</h3>
            <div class="card-body">
              <div class="display-4">&#8361; 110,000</div>
            </div>
            <ul class="list-group list-group-flush">
              <li class="list-group-item">20 여개의 스킨제공</li>
              <li class="list-group-item">로그인/회원가입 반응형</li>
              <li class="list-group-item">Contact US 제공</li>
			  <li class="list-group-item">&nbsp;</li>
			  <li class="list-group-item">&nbsp;</li>
              <li class="list-group-item">
                <a href="#" class="btn btn-danger">GO!</a>
              </li>
            </ul>
          </div>
        </div>
        <div class="col-lg-4 mb-4">
          <div class="card card-outline-primary h-100">
            <h3 class="card-header bg-danger text-white">FULL</h3>
            <div class="card-body">
              <div class="display-4">&#8361; 250,000</div>
            </div>
            <ul class="list-group list-group-flush">
              <li class="list-group-item">20 여개의 스킨제공</li>
              <li class="list-group-item">로그인/회원가입 반응형</li>
              <li class="list-group-item">Contact US 제공</li>
			  <li class="list-group-item">80 여개의 서브페이지 제공</li>
			  <li class="list-group-item">호스팅 세팅 무료</li>
              <li class="list-group-item">
                <a href="#" class="btn btn-danger">GO!</a>
              </li>
            </ul>
          </div>
        </div>
        <div class="col-lg-4 mb-4">
          <div class="card h-100">
            <h3 class="card-header">DEVLOPMENT</h3>
            <div class="card-body">
              <div class="display-4">&#8361; 0</div>
            </div>
            <ul class="list-group list-group-flush">
              <li class="list-group-item">협의</li>
              <li class="list-group-item">&nbsp;</li>
              <li class="list-group-item">&nbsp;</li>
			  <li class="list-group-item">&nbsp;</li>
			  <li class="list-group-item">&nbsp;</li>
              <li class="list-group-item">
                <a href="#" class="btn btn-danger">GO!</a>
              </li>
            </ul>
          </div>
        </div>
      </div>
      <!-- /.row -->
	</div><!-- /container -->


<?php
include_once(G5_THEME_PATH.'/tail.php');
?>