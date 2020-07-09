<?php 
    @session_start();
    if (empty($_SESSION["uid"])) {
        echo "<script language='javascript'>";
        echo "alert('您还没有登录，请先登录');";
        echo "window.location.href='login.php';";
        echo "</script>";
    }
 ?> 
