<?php
include_once('head.php');

$member_id = $_GET['member_id'];
$get_comp_cd = $_GET['comp_cd'];

//회원 정보 확인
$sql = "select * from users where user_email='$member_id'";
$result = mysqli_query($aws_conn, $sql);

//전시 예매 건수 확인
$sql2 = "select * from user_exhbt_info where user_email='$member_id'";
$result2 = mysqli_query($aws_conn, $sql2);

//성향분석 확인
$sql3 = "select * from customized_answer where user_email='$member_id'&&comp_cd='$get_comp_cd'";
$result3 = mysqli_query($aws_conn, $sql3);


$row = mysqli_fetch_array($result);
$count = mysqli_num_rows($result2);
$row3 = mysqli_fetch_array($result3);

//comp_cd 1 카카오 2 구글 3 애플
if ($get_comp_cd == "01") {
    $comp_cd = '<label class="badge badge-warning">카카오</label>';
} elseif ($get_comp_cd == "02") {
    $comp_cd = '<label class="badge badge-success">구글</label>';
} elseif ($get_comp_cd == "03") {
    $comp_cd = '<label class="badge badge-danger">애플</label>';
} else {
    $comp_cd = '오류';
}

if($row3['answer_idx'] == ""){
    $answer = "미실시";
}else{
    $answer = $row3['answer_idx'];
}

?>
<div class="main-panel">
    <div class="content-wrapper">
        <div class="row" style="float: none; margin:100 auto;">
        <div class="col-md-6 grid-margin stretch-card"  style="float: none; margin:0 auto;">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">회원 정보</h4>
                  <p class="card-description">
                  <?php echo $comp_cd; ?> <? echo $member_id; ?>
                  </p>
                  <form class="forms-sample">
                    <div class="form-group">
                      <label for="exampleInputUsername1">멤버십</label>
                      <input type="text" class="form-control" id="exampleInputUsername1" placeholder="<?php echo $row['mbs_grd']?>" readonly>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputUsername1">이름</label>
                      <input type="text" class="form-control" id="exampleInputUsername1" value="<?php echo $row['user_nm']?>" readonly>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputUsername1">가입일(<a href="#">접속로그</a>)</label>
                      <input type="text" class="form-control" id="exampleInputUsername1" value="2021.." readonly>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputUsername1">온보딩(맞춤전시)</label>
                      <input type="text" class="form-control" id="exampleInputUsername1" value="<?php echo $answer?>" readonly>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputUsername1">예매 전시</label>
                      <input type="text" class="form-control" id="exampleInputUsername1" placeholder="<?php echo $count?>건" readonly>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputUsername1">refresh_token</label>
                      <input type="text" class="form-control" id="exampleInputUsername1" value="<?php echo $row['refresh_token']?>" readonly>
                    </div>
                  </form>
                </div>
              </div>
            </div>
        </div>
    </div>

            <?php
            include('footer.php');
            ?>