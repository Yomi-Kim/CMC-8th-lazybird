<?php
include_once('head.php');

$exhbt_cd = $_GET['exhbt_cd'];

$sql = "select * from exhbt_info where exhbt_cd =$exhbt_cd";
$result = mysqli_query($aws_conn, $sql);

$count = mysqli_num_rows($result);

$row = mysqli_fetch_array($result);


$exhbt_date = $row['exhbt_from_dt'] . " ~ " . $row['exhbt_to_dt'];


if ($row['dc_percent']) {
    $price = $row['dc_prc'] . "<del class = 'text-muted'>" . $row['exhbt_prc'] . "</del><label class='text-danger'>(" . $row['dc_percent'] . ")</label>";
} else {
    $price = $row['exhbt_prc'];
}

$exhbt_expnt = explode('\n', $row['exhbt_expnt']);
$notice_expnt = "";
$i = 0;
foreach ($exhbt_expnt as $key) {
    $notice_expnt .= "&#10".$exhbt_expnt[$i];
    $i++;
}

$exhbt_notice = explode('\n', $row['exhbt_notice']);
$notice_text = "";
$i = 0;
foreach ($exhbt_notice as $key) {
    $notice_text .= "&#10".$exhbt_notice[$i];
    $i++;
}

switch ($row['exhbt_type_cd']) {
    case 1:
        $type = "<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"BurlyWood\" class=\"bi bi-easel-fill\" viewBox=\"0 0 16 16\">
        <path d=\"M8.473.337a.5.5 0 0 0-.946 0L6.954 2H2a1 1 0 0 0-1 1v7a1 1 0 0 0 1 1h1.85l-1.323 3.837a.5.5 0 1 0 .946.326L4.908 11H7.5v2.5a.5.5 0 0 0 1 0V11h2.592l1.435 4.163a.5.5 0 0 0 .946-.326L12.15 11H14a1 1 0 0 0 1-1V3a1 1 0 0 0-1-1H9.046L8.473.337z\"/>
      </svg> &nbsp회화전시";
      
      $category_array = array(
        "101" => "정적인",
        "102" => "동적인",
        "103" => "몽환적",
        "104" => "고요한",
        "105" => "밝은",
        "106" => "어두운", 
        "107" => "모던한",
        "201" => "유화",
        "202" => "아크릴",
        "203" => "추상적",
        "204" => "사실적",
        "205" => "초상,정물",
        "206" => "풍경,포스터,일러스트",
        "301" => "서울",
        "302" => "경기,인천",
        "303" => "강원",
        "304" => "부산,울산,경남",
        "305" => "대구,경북",
        "306" => "광주,전라",
        "307" => "대전,충청,세종",
        "308" => "제주",
        "401" => "사진촬영가능",
        "402" => "주차공간제공",
        "403" => "오디오제공",
        "404" => "무료",
        "405" => "온라인",
        "406" => "공휴일운영",
        "407" => "18시이후운영"
    );

        break;
    case 2:
        $type = "<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"green\" class=\"bi bi-cup-straw\" viewBox=\"0 0 16 16\">
        <path d=\"M13.902.334a.5.5 0 0 1-.28.65l-2.254.902-.4 1.927c.376.095.715.215.972.367.228.135.56.396.56.82 0 .046-.004.09-.011.132l-.962 9.068a1.28 1.28 0 0 1-.524.93c-.488.34-1.494.87-3.01.87-1.516 0-2.522-.53-3.01-.87a1.28 1.28 0 0 1-.524-.93L3.51 5.132A.78.78 0 0 1 3.5 5c0-.424.332-.685.56-.82.262-.154.607-.276.99-.372C5.824 3.614 6.867 3.5 8 3.5c.712 0 1.389.045 1.985.127l.464-2.215a.5.5 0 0 1 .303-.356l2.5-1a.5.5 0 0 1 .65.278zM9.768 4.607A13.991 13.991 0 0 0 8 4.5c-1.076 0-2.033.11-2.707.278A3.284 3.284 0 0 0 4.645 5c.146.073.362.15.648.222C5.967 5.39 6.924 5.5 8 5.5c.571 0 1.109-.03 1.588-.085l.18-.808zm.292 1.756C9.445 6.45 8.742 6.5 8 6.5c-1.133 0-2.176-.114-2.95-.308a5.514 5.514 0 0 1-.435-.127l.838 8.03c.013.121.06.186.102.215.357.249 1.168.69 2.438.69 1.27 0 2.081-.441 2.438-.69.042-.029.09-.094.102-.215l.852-8.03a5.517 5.517 0 0 1-.435.127 8.88 8.88 0 0 1-.89.17zM4.467 4.884s.003.002.005.006l-.005-.006zm7.066 0-.005.006c.002-.004.005-.006.005-.006zM11.354 5a3.174 3.174 0 0 0-.604-.21l-.099.445.055-.013c.286-.072.502-.149.648-.222z\"/>
      </svg> &nbsp조형전시";

      $category_array = array(
        "101" => "정적인",
        "102" => "동적인",
        "103" => "몽환적",
        "104" => "고요한",
        "105" => "밝은",
        "106" => "어두운", 
        "107" => "모던한",
        "201" => "건축",
        "202" => "유리",
        "203" => "금속",
        "204" => "조화",
        "205" => "반복",
        "206" => "강조",
        "301" => "서울",
        "302" => "경기,인천",
        "303" => "강원",
        "304" => "부산,울산,경남",
        "305" => "대구,경북",
        "306" => "광주,전라",
        "307" => "대전,충청,세종",
        "308" => "제주",
        "401" => "사진촬영가능",
        "402" => "주차공간제공",
        "403" => "오디오제공",
        "404" => "무료",
        "405" => "온라인",
        "406" => "공휴일운영",
        "407" => "18시이후운영"
    );

        break;
    case 3:
        $type = "<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"currentColor\" class=\"bi bi-camera-fill\" viewBox=\"0 0 16 16\">
        <path d=\"M10.5 8.5a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z\"/>
        <path d=\"M2 4a2 2 0 0 0-2 2v6a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V6a2 2 0 0 0-2-2h-1.172a2 2 0 0 1-1.414-.586l-.828-.828A2 2 0 0 0 9.172 2H6.828a2 2 0 0 0-1.414.586l-.828.828A2 2 0 0 1 3.172 4H2zm.5 2a.5.5 0 1 1 0-1 .5.5 0 0 1 0 1zm9 2.5a3.5 3.5 0 1 1-7 0 3.5 3.5 0 0 1 7 0z\"/>
      </svg> &nbsp사진전시";
      
      $category_array = array(
        "101" => "정적인",
        "102" => "동적인",
        "103" => "몽환적",
        "104" => "고요한",
        "105" => "밝은",
        "106" => "어두운", 
        "107" => "모던한",
        "201" => "풍경",
        "202" => "흑백",
        "203" => "포토저널리즘",
        "204" => "천체",
        "205" => "패션",
        "206" => "컨셉",
        "301" => "서울",
        "302" => "경기,인천",
        "303" => "강원",
        "304" => "부산,울산,경남",
        "305" => "대구,경북",
        "306" => "광주,전라",
        "307" => "대전,충청,세종",
        "308" => "제주",
        "401" => "사진촬영가능",
        "402" => "주차공간제공",
        "403" => "오디오제공",
        "404" => "무료",
        "405" => "온라인",
        "406" => "공휴일운영",
        "407" => "18시이후운영"
    );
    
        break;

    case 4:
        $type = "<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"CornflowerBlue\" class=\"bi bi-images\" viewBox=\"0 0 16 16\">
        <path d=\"M4.502 9a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3z\"/>
        <path d=\"M14.002 13a2 2 0 0 1-2 2h-10a2 2 0 0 1-2-2V5A2 2 0 0 1 2 3a2 2 0 0 1 2-2h10a2 2 0 0 1 2 2v8a2 2 0 0 1-1.998 2zM14 2H4a1 1 0 0 0-1 1h9.002a2 2 0 0 1 2 2v7A1 1 0 0 0 15 11V3a1 1 0 0 0-1-1zM2.002 4a1 1 0 0 0-1 1v8l2.646-2.354a.5.5 0 0 1 .63-.062l2.66 1.773 3.71-3.71a.5.5 0 0 1 .577-.094l1.777 1.947V5a1 1 0 0 0-1-1h-10z\"/>
      </svg> &nbsp복합전시";
      
      $category_array = array(
        "101" => "정적인",
        "102" => "동적인",
        "103" => "몽환적",
        "104" => "고요한",
        "105" => "밝은",
        "106" => "어두운", 
        "107" => "모던한",
        "301" => "서울",
        "302" => "경기,인천",
        "303" => "강원",
        "304" => "부산,울산,경남",
        "305" => "대구,경북",
        "306" => "광주,전라",
        "307" => "대전,충청,세종",
        "308" => "제주",
        "401" => "사진촬영가능",
        "402" => "주차공간제공",
        "403" => "오디오제공",
        "404" => "무료",
        "405" => "온라인",
        "406" => "공휴일운영",
        "407" => "18시이후운영"
    );
    
        break;
    case 5:
        $type = "<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"currentColor\" class=\"bi bi-controller\" viewBox=\"0 0 16 16\">
        <path d=\"M11.5 6.027a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0zm-1.5 1.5a.5.5 0 1 0 0-1 .5.5 0 0 0 0 1zm2.5-.5a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0zm-1.5 1.5a.5.5 0 1 0 0-1 .5.5 0 0 0 0 1zm-6.5-3h1v1h1v1h-1v1h-1v-1h-1v-1h1v-1z\"/>
        <path d=\"M3.051 3.26a.5.5 0 0 1 .354-.613l1.932-.518a.5.5 0 0 1 .62.39c.655-.079 1.35-.117 2.043-.117.72 0 1.443.041 2.12.126a.5.5 0 0 1 .622-.399l1.932.518a.5.5 0 0 1 .306.729c.14.09.266.19.373.297.408.408.78 1.05 1.095 1.772.32.733.599 1.591.805 2.466.206.875.34 1.78.364 2.606.024.816-.059 1.602-.328 2.21a1.42 1.42 0 0 1-1.445.83c-.636-.067-1.115-.394-1.513-.773-.245-.232-.496-.526-.739-.808-.126-.148-.25-.292-.368-.423-.728-.804-1.597-1.527-3.224-1.527-1.627 0-2.496.723-3.224 1.527-.119.131-.242.275-.368.423-.243.282-.494.575-.739.808-.398.38-.877.706-1.513.773a1.42 1.42 0 0 1-1.445-.83c-.27-.608-.352-1.395-.329-2.21.024-.826.16-1.73.365-2.606.206-.875.486-1.733.805-2.466.315-.722.687-1.364 1.094-1.772a2.34 2.34 0 0 1 .433-.335.504.504 0 0 1-.028-.079zm2.036.412c-.877.185-1.469.443-1.733.708-.276.276-.587.783-.885 1.465a13.748 13.748 0 0 0-.748 2.295 12.351 12.351 0 0 0-.339 2.406c-.022.755.062 1.368.243 1.776a.42.42 0 0 0 .426.24c.327-.034.61-.199.929-.502.212-.202.4-.423.615-.674.133-.156.276-.323.44-.504C4.861 9.969 5.978 9.027 8 9.027s3.139.942 3.965 1.855c.164.181.307.348.44.504.214.251.403.472.615.674.318.303.601.468.929.503a.42.42 0 0 0 .426-.241c.18-.408.265-1.02.243-1.776a12.354 12.354 0 0 0-.339-2.406 13.753 13.753 0 0 0-.748-2.295c-.298-.682-.61-1.19-.885-1.465-.264-.265-.856-.523-1.733-.708-.85-.179-1.877-.27-2.913-.27-1.036 0-2.063.091-2.913.27z\"/>
      </svg> &nbsp체험/컨셉전시";
      
      $category_array = array(
        "101" => "정적인",
        "102" => "동적인",
        "103" => "몽환적",
        "104" => "고요한",
        "105" => "밝은",
        "106" => "어두운", 
        "107" => "모던한",
        "201" => "자유관람",
        "202" => "단체관람",
        "203" => "3D/4D",
        "204" => "직접체험",
        "205" => "간접체험",
        "301" => "서울",
        "302" => "경기,인천",
        "303" => "강원",
        "304" => "부산,울산,경남",
        "305" => "대구,경북",
        "306" => "광주,전라",
        "307" => "대전,충청,세종",
        "308" => "제주",
        "401" => "사진촬영가능",
        "402" => "주차공간제공",
        "403" => "오디오제공",
        "404" => "무료",
        "405" => "온라인",
        "406" => "공휴일운영",
        "407" => "18시이후운영"
    );
    
        break;
    case 6:
        $type = "<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"currentColor\" class=\"bi bi-emoji-smile\" viewBox=\"0 0 16 16\">
        <path d=\"M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z\"/>
        <path d=\"M4.285 9.567a.5.5 0 0 1 .683.183A3.498 3.498 0 0 0 8 11.5a3.498 3.498 0 0 0 3.032-1.75.5.5 0 1 1 .866.5A4.498 4.498 0 0 1 8 12.5a4.498 4.498 0 0 1-3.898-2.25.5.5 0 0 1 .183-.683zM7 6.5C7 7.328 6.552 8 6 8s-1-.672-1-1.5S5.448 5 6 5s1 .672 1 1.5zm4 0c0 .828-.448 1.5-1 1.5s-1-.672-1-1.5S9.448 5 10 5s1 .672 1 1.5z\"/>
      </svg> &nbsp아동전시";
      
      $category_array = array(
        "101" => "정적인",
        "102" => "동적인",
        "103" => "몽환적",
        "104" => "고요한",
        "105" => "밝은",
        "106" => "어두운", 
        "107" => "모던한",
        "201" => "프로그램",
        "202" => "자유관람",
        "203" => "일반아동체험",
        "301" => "서울",
        "302" => "경기,인천",
        "303" => "강원",
        "304" => "부산,울산,경남",
        "305" => "대구,경북",
        "306" => "광주,전라",
        "307" => "대전,충청,세종",
        "308" => "제주",
        "401" => "사진촬영가능",
        "402" => "주차공간제공",
        "403" => "오디오제공",
        "404" => "무료",
        "405" => "온라인",
        "406" => "공휴일운영",
        "407" => "18시이후운영"
    );
    
        break;
    default:
        $type = "error";
}

$category_detail = explode(',', $row['exhbt_type_cd_sub']);


for ($i = 0; $category_detail[$i]; $i++) {


    if (substr($category_detail[$i], 0, 1) == "1") {
        $category .= "&nbsp<label class=\"badge badge-warning badge-sm\">" . $category_array["$category_detail[$i]"] . "</label>";
    } elseif (substr($category_detail[$i], 0, 1) == "2") {
        $category .= "&nbsp<label class=\"badge badge-success badge-sm\">" . $category_array["$category_detail[$i]"] . "</label>";
    } elseif (substr($category_detail[$i], 0, 1) == "3") {
        $category .= "&nbsp<label class=\"badge badge-danger badge-sm\">" . $category_array["$category_detail[$i]"] . "</label>";
    } elseif (substr($category_detail[$i], 0, 1) == "4") {
        $category .= "&nbsp<label class=\"badge badge-info badge-sm\">" . $category_array["$category_detail[$i]"] . "</label>";
    } else {
        $category .= "&nbsp<label class=\"badge badge-info badge-sm\">" . $category_array["$category_detail[$i]"] . "</label>";
    }
}

if($category==""){
    $category = "&nbsp<label class=\"badge badge-dark badge-sm\">태그없음</label>";
}

?>
<div class="main-panel">
    <div class="content-wrapper">
        <div class="row" style="float: none; margin:100 auto;">
            <div class="col-md-8 grid-margin stretch-card" style="float: none; margin:0 auto;">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">전시 정보</h4>
                        <p class="card-description">
                            <?php echo $price ?><br>
                        <h3><b><?php echo $row['exhbt_nm'] ?></b>/<? echo $row['exhbt_sub_nm']; ?></h3><?php echo $type ?>/<?php echo $category ?><br>
                        </p>
                        <form class="forms-sample">
                            <div class="form-group">
                                <img src="<?php echo $row['exhbt_sn'] ?>">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputUsername1">위치</label>
                                <input type="text" class="form-control" id="exampleInputUsername1" value="<?php echo $row['exhbt_lct'] ?>" readonly>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputUsername1">기간</label>
                                <input type="text" class="form-control" id="exampleInputUsername1" value="<?php echo $exhbt_date ?>" readonly>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputUsername1">연령</label>
                                <input type="text" class="form-control" id="exampleInputUsername1" value="<?php echo $row['exhbt_age'] ?>" readonly>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputUsername1">전시 설명</label>
                                <textarea class="form-control" id="exampleTextarea1" cols="100" style="height:10%" readonly><?php echo $notice_expnt ?></textarea>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputUsername1">전시 공지</label>
                                <textarea class="form-control" id="exampleTextarea1" cols="100" style="height:10%" readonly><?php echo $notice_text ?></textarea>
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