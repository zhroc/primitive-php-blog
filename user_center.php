<?php 
    require("./login_session_check.php");
    require("./sql_conn/conn.php");
    require("./header.php");
    $uid = $_SESSION['uid'];
    $sql = "select * from adminuser where regname = '".$uid."' and fig =1";
    $result = mysqli_query($conn,$sql);
    $admin = mysqli_num_rows($result);
    // echo $admin;

 ?>

 <!DOCTYPE html>
 <html>
 <head>
     <title>个人中心</title>
     <link rel="stylesheet" type="text/css" href="./css/user_center.css">
 </head>
    <div class="user_center">
        <div class="big_menu">
            <a href="./edit_user.php"><div class="center_menu">
                <h3>修改资料<br><br><img src="./images/user_info.png" alt="修改资料" width='96'></h3></div>
            </a>
            <a href="./post_article.php"><div class="center_menu">
                <h3>发布文章<br><br><img src="./images/new_article.png" alt="发布文章" width='72'></h3></div>
            </a>
            <a href=""><div class="center_menu">
                <h3>管理文章<br><br><img src="./images/manager_article.png" alt="管理文章" width='72'></h3></div>
            </a>
            <?php 
                if ($admin = 1) {
                    echo "<a href=''><div class='center_menu'>
                    <h3>管理用户<br><br><img src='images/manager_user.png' alt='管理用户' width='60'></h3></div>
                    </a>";
                }
             ?>
            <a href="./user_exit_sql.php"><div class="center_menu">
                <h3>退出登录<br><br><img src="./images/exit.png" alt="退出登录" width='84'></h3></div>
            </a>
            <a style="pointer-events: none;" href="#"><div class="center_menu">
                <h3>正在开发<br><br><img src="./images/dev.png" alt="敬请期待" width='72'></h3></div>
            </a>
        </div>
    </div>
    <?php require("./footer.php"); ?>
 </html>