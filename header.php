<head>
    <link rel="stylesheet" type="text/css" href="./css/header.css">
</head>
<?php 
    @session_start();
    // $_SESSION["login_user"]="eryue";
    // unset($_SESSION["uid"]);
 ?>

<div class="main-header">
    <div class="container">
        <div class="navigation">
            <div class="info">
                <nav class="menu">
                    <ul class ="menu-one" >
                        <li><a href="./index.php">首页</a></li>
                        <?php 
                            if (!empty($_SESSION["uid"])) {
                                echo "<li><a href='./user_center.php'>个人中心</a></li>";
                                echo "<li><a href='./user_exit_sql.php'>退出</a></li>";
                            }
                            else {
                                echo "<li><a href='./login.php'>登陆</a></li>";
                                echo "<li><a href='./sign.php'>注册</a></li>";
                            }
                         ?>
                        <li><a href="#">关于</a></li>
                    </ul>
                </nav>
            </div>
            <a href="./index.php">
                <h2>二月一寻 | 1024黑</h2><br>
                <span>若无闲事挂心头，便是人间好时节</span>
            </a> 
        </div>
    </div>
    <!-- <div class="filter"></div> -->
</div>

</header>
</div>
