<?php


    // if ( !isset($_POST['admin_id']) || !isset($_POST['admin_pw']) ) {
    //     header("Content-Type: text/html; charset=UTF-8");
    //     // echo "<script>alert('아이디 또는 비밀번호가 빠졌거나 잘못된 접근입니다.');";
    //     // echo "window.location.replace('login.php');</script>";
    //     exit;
    // }
    $admin_id = $_POST['admin_id'];
    $admin_pw = $_POST['admin_pw'];


    $id = "demo";
    $pw = "0000";
 
    if( !isset($admin_id) || $pw != $admin_pw ) {
        header("Content-Type: text/html; charset=UTF-8");
        echo "<script>alert('아이디 또는 비밀번호가 잘못되었습니다.');";
        echo "window.location.replace('login.php');</script>";
        exit;
    }
    /* If success */
    session_start();
    $_SESSION['admin_id'] = $id;
    $_SESSION['admin_name'] = "관리자";
?>
<meta http-equiv="refresh" content="0;url=index.php" />