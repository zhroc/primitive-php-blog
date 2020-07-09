<head>
    <link rel="stylesheet" type="text/css" href="./css/suspended.css">
</head>

<?php 
    @session_start();
    if (!empty($_SESSION['uid'])) {
        // echo "<div class='left_menu'><h3>发布文章</h3></div>";
        // echo "<div class='right_menu'><h3>个人中心</h3></div>";
        echo "<div class='main'><div class='left_menu'>
                <a href='./post_article.php'>
                    <h3>发布文章</h3>
                    <img src='./images/new_article.png' alt='发布文章' width='72'>
                </a>
            </div>
            <div class='right_menu'>
                <a href='./user_center.php'>
                    <h3>个人中心</h3>
                    <img src='./images/manager_user.png' alt='个人中心' width='72'>
                </a>
            </div>";

    }
    else {
        echo "<div class='main'><div class='left_menu'>
                <a href='./login.php'>
                    <h3>登陆账号</h3>
                    <img src='./images/manager_user.png' alt='登陆账号' width='72'>
                </a>
            </div>
            <div class='right_menu'>
                <a href='./sign.php'>
                    <h3>注册账号</h3>
                    <img src='./images/exit.png' alt='注册账号' width='72'>
                </a>
            </div>";
    }
 ?>

