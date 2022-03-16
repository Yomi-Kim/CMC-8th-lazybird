<?php
include_once('head.php');


$sql = "select * from users";
$result = mysqli_query($aws_conn, $sql);

$count = mysqli_num_rows($result);
?>
<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">회원 목록</h4>
                        <p class="card-description">
                            전체<code><? echo $count; ?>명</code>
                        </p>
                        <blockquote class="blockquote blockquote-primary">
                            <ul class="list-ticked">
                                <li><label class="text-primary"><b>회원</b></label>을 클릭하시면 회원 상세 정보를 볼 수 있습니다.</li>
                            </ul>
                        </blockquote>
                        <div class="table-responsive">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th style="width:fit-content">User Email <label class="mdi mdi-sort"></label></th>
                                        <th style="width:fit-content">User Name <label class="mdi mdi-sort"></label></th>
                                        <th style="text-align:center">Platform <label class="mdi mdi-sort"></label></th>
                                        <th style="text-align:center">Membership <label class="mdi mdi-sort"></label></th>
                                        <th style="text-align:center">Onboarding <label class="mdi mdi-sort"></label></th>
                                        <!-- <th>refresh_token(뒷자리)</th> -->
                                    </tr>
                                </thead>
                                <tbody>
                                    <?
                                    for ($i = 0; $row = mysqli_fetch_array($result); $i++) {

                                        //comp_cd 1 카카오 2 구글 3 애플
                                        if ($row['comp_cd'] == 1) {
                                            $comp_cd = '<td class="text-warning" style="text-align:center"><b>카카오</b></td>';
                                        } elseif ($row['comp_cd'] == 2) {
                                            $comp_cd = '<td class="text-success" style="text-align:center"><b>구글</b></td>';
                                        } elseif ($row['comp_cd'] == 3) {
                                            $comp_cd = '<td class="text-danger" style="text-align:center"> <b>애플</b> </td>';
                                        } else {
                                            $comp_cd = '오류';
                                        }

                                        if ($row['use_yn'] == 'Y') {
                                            $onboarding = '<td class="text-success" style="text-align:center"> 완료 </td>';
                                        } else {
                                            $onboarding = '<td class="text-danger" style="text-align:center"> 미완 </td>';
                                        }

                                        // $token = substr($row['refresh_token'],120);<td>".$token."</td>


                                        echo "
                                        <tr onclick=location.href='member_detail.php?member_id=" . $row['user_email'] . "&comp_cd=" . $row['comp_cd'] . "'>
                                        <td style=\"width:20%\">" . $row['user_email'] . "</td>
                                        <td style=\"width:25%\">" . $row['user_nm'] . "</td>
                                        " . $comp_cd . "
                                        <td style='text-align:center'>" . $row['mbs_grd'] . "</td>
                                        " . $onboarding . "
                                        </tr>";
                                    }
                                    ?>

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

            <?php
            include('footer.php');
            ?>