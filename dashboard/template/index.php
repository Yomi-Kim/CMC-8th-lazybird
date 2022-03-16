<?php
include_once('head.php');

// $sql = "select * from users";
// $sql2 = "select * from exhbt_info";
// $sql3 = "select * from user_exhbt_info";
// $sql4 = "select * from exhbt_like";
// $sql5 = "select a.exhbt_cd, count(a.exhbt_cd) as cnt,b.exhbt_nm, b.exhbt_sn from user_exhbt_info as a Left Join exhbt_info as b on a.exhbt_cd = b.exhbt_cd GROUP BY exhbt_cd ORDER BY cnt DESC Limit 5";
// $sql6 = "select comp_cd, count(comp_cd) as cnt from users GROUP BY comp_cd;";

// $result = mysqli_query($aws_conn, $sql);
// $result2 = mysqli_query($aws_conn, $sql2);
// $result3 = mysqli_query($aws_conn, $sql3);
// $result4 = mysqli_query($aws_conn, $sql4);
// $result5 = mysqli_query($aws_conn, $sql5);
// $result6 = mysqli_query($aws_conn, $sql6);

// $count = mysqli_num_rows($result);
// $count2 = mysqli_num_rows($result2);
// $count3 = mysqli_num_rows($result3);
// $count4 = mysqli_num_rows($result4);

// $count_per = (abs($count - 15) / 15) * 100;

// $count_per3 = (abs($count3 - 13) / 13) * 100;
// $count_per4 = (abs($count4 - 10) / 10) * 100;

// for($i=0;$row=mysqli_fetch_array($result6);$i++){

//     if($row['comp_cd']==01){
//       $kakao = $row['cnt'];
//     }elseif($row['comp_cd']==02){
//       $google = $row['cnt'];
//     }elseif($row['comp_cd']==03){
//       $apple = $row['cnt'];
//     }else{}

// }

?>

<!-- partial -->
<div id="sns_kakao" class="d-none" value="<?php echo $kakao?>"></div>
<div class="main-panel">
  <div class="content-wrapper">
    <div class="row">
      <div class="col-sm-12">
        <div class="home-tab">
          <div class="tab-content tab-content-basic">
            <div class="tab-pane fade show active" id="overview" role="tabpanel" aria-labelledby="overview">
              <div class="row">
                <div class="col-sm-12">
                  <h1><b>Dashboard</b></h1>
                  <div class="statistics-details d-flex align-items-center justify-content-between">

                    <div>
                      <p class="statistics-title">신규 가입</p>
                      <h3 class="rate-percentage"><? echo $count ?></h3>
                      <p class="text-success d-flex"><i class="mdi mdi-menu-up"></i><span>+<?php echo number_format($count_per, 2) ?>%</span></p>
                    </div>
                    <div>
                      <p class="statistics-title">전시 정보</p>
                      <h3 class="rate-percentage"><? echo $count2+50 ?></h3>
                      <p class="text-danger d-flex"><i class="mdi mdi-menu-up"></i><span>83</span></p>
                    </div>
                    <div>
                      <p class="statistics-title">예매 완료</p>
                      <h3 class="rate-percentage"><? echo $count3 ?></h3>
                      <p class="text-success d-flex"><i class="mdi mdi-menu-up"></i><span>+<?php echo number_format($count_per3, 2) ?>%</span></p>
                    </div>
                    <div>
                      <p class="statistics-title">찜</p>
                      <h3 class="rate-percentage"><? echo $count4 ?></h3>
                      <p class="text-success d-flex"><i class="mdi mdi-menu-up"></i><span>+<?php echo number_format($count_per4, 2) ?>%</span></p>
                    </div>
                    <div>
                      <p class="statistics-title">다운로드수</p>
                      <h3 class="rate-percentage">72</h3>
                      <p class="text-success d-flex"><i class="mdi mdi-menu-up"></i><span>31</span></p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-lg-8 d-flex flex-column">
                  <div class="row flex-grow">
                    <div class="col-12 col-lg-4 col-lg-12 grid-margin stretch-card">
                      <div class="card card-rounded">
                        <div class="card-body">
                          <div class="d-sm-flex justify-content-between align-items-start">
                            <div>
                              <h4 class="card-title card-title-dash">Member Performance</h4>
                              <h5 class="card-subtitle card-subtitle-dash">신규가입 비율</h5>
                            </div>
                            <div id="performance-line-legend"></div>
                          </div>
                          <div class="chartjs-wrapper mt-5">
                            <canvas id="performaneLine"></canvas>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-lg-4 d-flex flex-column">
                  <div class="row flex-grow">
                    <div class="col-12 grid-margin stretch-card">
                      <div class="card card-rounded">
                        <div class="card-body">
                          <div class="row">
                            <div class="col-lg-12">
                              <div class="d-flex justify-content-between align-items-center mb-3">
                                <h4 class="card-title card-title-dash">Type By Amount</h4>
                                <h5 class="card-subtitle card-subtitle-dash">플랫폼 비율</h5>

                              </div>
                              <canvas class="my-auto" id="doughnutChart" height="200"></canvas>
                              <div id="doughnut-chart-legend" class="mt-5 text-center"></div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-lg-12 d-flex flex-column">
                  <div class="row flex-grow">
                    <div class="col-12 grid-margin stretch-card">
                      <div class="card card-rounded">
                        <div class="card-body">
                          <div class="row">
                            <div class="col-lg-12">
                              <div class="d-flex justify-content-between align-items-center mb-3">
                                <div>
                                  <h4 class="card-title card-title-dash">Top 5 Exhibts</h4>
                                  <h5 class="card-subtitle card-subtitle-dash">예매별 전시</h5>
                                </div>
                              </div>
                              <div class="mt-3">
                                <?php
                                for ($i = 0; $row = mysqli_fetch_array($result5); $i++) {
                                  echo "
                                      <div class=\"wrapper d-flex align-items-center justify-content-between py-2 border-bottom\">
                                        <div class=\"d-flex\">
                                          <a href = \"exhibit_detail.php?exhbt_cd=" . $row['exhbt_cd'] . "\"><img class=\"img-lg rounded-10\" src=\"" . $row['exhbt_sn'] . "\" alt=\"profile\"></a>
                                          <div class=\"wrapper ms-3\">
                                          <a style =\"color:black;text-decoration: none;\"href = \"exhibit_detail.php?exhbt_cd=" . $row['exhbt_cd'] . "\"><p class=\"ms-1 mb-1 fw-bold\">" . $row['exhbt_nm'] . "</p></a>
                                          <a style =\"text-decoration: none;\"href = \"exhibit_detail.php?exhbt_cd=" . $row['exhbt_cd'] . "\"><small class=\"text-muted mb-0\">" . $row['exhbt_cd'] . "</small></a>
                                          </div>
                                        </div>
                                        <div>
                                        " . $row['cnt'] . "회
                                        </div>
                                      </div>";
                                }
                                ?>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="row flex-grow">
                    <div class="col-12 grid-margin stretch-card">
                      <div class="card card-rounded">
                        <div class="card-body">
                          <div class="row">
                            <div class="col-lg-12">
                              <div class="d-flex justify-content-between align-items-center mb-3">
                                <div>
                                  <h4 class="card-title card-title-dash">Book Report</h4>
                                  <h5 class="card-subtitle card-subtitle-dash">요일별 예매</h5>
                                </div>
                              </div>
                              <div class="mt-3">
                                <canvas id="leaveReport"></canvas>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>

                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- content-wrapper ends -->
    <?php
    include('footer.php');
    ?>