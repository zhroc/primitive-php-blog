<?php 
    if (empty($_POST['sign_bat_bat_bat_bat_bat_bat_bat_bat_bat_bat_bat_bat_bat_bat_bat'])) {
        // header("Location:./index.php"); 
        echo "<script language='javascript' type='text/javascript'>";
        echo "alert('暂停注册');";
        echo "location.href='./index.php';"; 
        echo "</script>";
        exit();
    }
    else{
        include("./sql_conn/conn.php");
        $regname = $_POST['uid'];

        $check_sql = "select * from adminuser where regname = '".$regname."';";
        // echo $check_sql;
        $check_res = mysqli_query($conn,$check_sql);
        $row_user = mysqli_num_rows($check_res);
        if ($row_user>0) {
            echo "<script language='javascript' type='text/javascript'>";
            echo "alert('用户名已存在');";
            echo "location.href='sign.php';"; 
            echo "</script>";
        }


        $regemail = $_POST['email'];
        $regpwd = $_POST['pwd'];
        $regsex = $_POST['sex'];
        $regqq = $_POST['qq'];

        $regpwd = password_hash($regpwd,PASSWORD_DEFAULT); 

        $sign_sql = "INSERT INTO adminuser (regname, regpwd, regqq, regemail, regsex, islock, fig)
         VALUES ('".$regname."', '".$regpwd."', '".$regqq."', '".$regemail."', '".$regsex."', 0, 0);";
        // echo $sign_sql;
        $sign = mysqli_query($conn,$sign_sql);
            if ($sign) {
                echo "<script language='javascript' type='text/javascript'>";
                echo "alert('注册成功');";
                echo "location.href='login.php';"; 
                echo "</script>";
            }
            else{
                echo "<script language='javascript' type='text/javascript'>";
                echo "alert('注册失败');";
                echo "location.href='sign.php';"; 
                echo "</script>";
            }
    }

 ?>
