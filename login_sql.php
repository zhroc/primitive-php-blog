<?php
//1.取提交的数据
$uid=$_POST["log"];
$pwd=$_POST["pwd"];
$code=$_POST["code"];
// $a = password_hash($pwd,PASSWORD_DEFAULT);

session_start();
$recode = strval($_SESSION["authcode"]);
$code = strval(md5($code));

if ($code != $recode) {
      echo "<script language='javascript' type='text/javascript'>";
      echo "alert('验证码不正确');";
      echo "location.href='./login.php';"; 
      echo "</script>";
      exit();
    }

else {
    include("./sql_conn/conn.php");
    $sql = "select * from adminuser where regname = '$uid' and islock = 0;";
    $result = mysqli_query($conn,$sql);

    if(mysqli_num_rows($result)>0){
        $row=mysqli_fetch_assoc($result);
        if (password_verify($pwd,$row['regpwd'])){

            session_start();
            $_SESSION["uid"] = $uid;
            setcookie("user_Id", md5("eryueyixun"));
            header("location:user_center.php");
        } 
        else
            {
            echo "<script language='javascript' type='text/javascript'>";
            echo "alert('密码不正确');";
            echo "location.href='login.php';"; 
            echo "</script>";
            }
        }
    else
    {
        echo "<script language='javascript' type='text/javascript'>";
        echo "alert('用户名不正确或此用户被冻结');";
        echo "location.href='login.php';"; 
        echo "</script>";
    }
}



mysqli_free_result($result);
mysqli_close($conn);
?>
