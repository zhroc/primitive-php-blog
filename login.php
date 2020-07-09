<?php 
    @session_start();
    if (!empty($_SESSION["uid"])) {
        header("Location:./index.php");
        exit();
    }
 ?>
<!DOCTYPE html>
    <head>
        <meta charset="UTF-8">
        <title>login</title>
        <link href="./css/login.css" rel='stylesheet' type='text/css' media="all">
    </head>
    <body >

    <!-- <body > -->
    <div class="bg">
        <div class = "login">
            <h1> Login </h1>
            <form name="loginform"  action="./login_sql.php" method="POST">
                <p>
                    <label for="user_login">用户名</label>
                    <input type="text" name="log" id="user_login"  class="input" value="" size="20" autocapitalize="off" required="required" />
                    
                    <label for="user_pass">密码</label>
                    <input type="password" name="pwd" id="user_pass" aria-describedby="login_error" class="input" value="" size="20" required="required" /> 
                    <label for="user_code">验证码</label>
                    <div class="code">
                        <div class="login_input"><input type="text" value="" name="code" required="required"></div><div class="captcha"><img width = "125px" src="check_code.php" style="cursor:pointer" onclick="this.src='./check_code.php?id='+Math.random()"></div>
                    </div>
                </p> 

                <p class="forgetmenot"><input name="rememberme" type="checkbox" id="rememberme" value="forever" /> <label for="rememberme">记住我的登录信息</label>
                </p>

                <p class="submit">
                    <input type="submit" name="submit"  class="button button-primary " value="登录" />
                                        <input type="hidden" name="redirect_to" value="./login.php" />
                                        <input type="hidden" name="testcookie" value="1" />
                </p>
            </form>
            <div class = "footer">
                <p class="nav"><a href="#">忘记密码？</a></p>
                <p class="backsign"><a href="./sign.php"> &larr; 注册账号</a></p>
            </div>
        </div>
    </div>
</body>
</html>
