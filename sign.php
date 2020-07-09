<?php 
    require("./header.php");



 ?>
 <!DOCTYPE html>
 <html>
 <head>
     <title>注册</title>
     <link rel="stylesheet" type="text/css" href="./css/edit_user.css">
 </head>
 <div class="user_information">
            <div class="appointment">
                <form action="./sign_sql.php" method="post">
                    <div class="main">
                        <div class="form-left">
                            <label>
                                账号
                            </label>
                            <input type="text" class="top-up" id="uid" name="uid" required="" >
                        </div>
                        <div class="form-left">
                            <label>
                                邮 箱
                            </label>
                            <input type="email" id="email" name="email" required="">
                        </div>
                    </div>
                    <div class="main">
                        <div class="form-left">
                            <label>
                                输 入 密 码
                            </label>
                            <input type="password" id="pwd" name="pwd" required="">
                        </div>
                        <div class="form-rights ">
                            <label>
                                确 认 密 码
                            </label>
                            <input type="password" id="repwd" name="repwd" required="">
                        </div>
                    </div>
                    <div class="main">
                        <div class="form-left">
                            <label>
                                性 别
                            </label>
                            <input type="text" class="top-up" id="sex" name="sex" required="">
                        </div>
                        <div class="form-rights ">
                            <label>
                                Q Q
                            </label>
                            <input class="buttom" type="number" id="qq" name="qq" required="" >
                            <div class="clearfix">
                            </div>
                        </div>
                    </div>
                    <div class="btnn">
                        <input type="submit" name="sign" value="注册">
                    </div>
                </form>
            </div>
        </div>
        <?php require( "./footer.php"); ?>
 </html>