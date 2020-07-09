<?php 
    setcookie("user_Id",'',time()-360000000);
    @session_start();
    unset($_SESSION["uid"]);
    header("location:./index.php");
    exit();
 ?>