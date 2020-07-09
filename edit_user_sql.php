<?php 
    require("./login_session_check.php"); 
    require( "./sql_conn/conn.php");

    $uid = $_SESSION['uid'];
    $newemail = $_POST['email']; 
    $oldpwd = $_POST['oldpwd'];
    $newpwd = $_POST['pwd'];
    $newsex = $_POST['sex'];
    $newqq = $_POST['qq'];

    $sql = "select * from adminuser where regname = '".$uid."'";
    $result = mysqli_query($conn,$sql);
    $res_array = mysqli_fetch_array($result);

    if(password_verify($oldpwd,$res_array['regpwd'])){
        $newpwd = password_hash($newpwd,PASSWORD_DEFAULT);
        $update_sql = "update adminuser set regemail='".$newemail."',regpwd='".$newpwd."',regsex='".$newsex."',regqq='".$newqq."' where regname='".$uid."'";
        // echo $update_sql;
        mysqli_query($conn,$update_sql) or die('修改失败：'.mysqli_error($conn));
        header("Location:user_center.php"); 
        exit();
    }
    else {
        echo "<script language='javascript' type='text/javascript'>";
        echo "alert('旧密码错误');";
        echo "location.href='edit_user.php';"; 
        echo "</script>";
    }

 ?> 
