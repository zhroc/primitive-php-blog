<?php 
    require( "./sql_conn/conn.php"); 
    require( "./header.php"); 
    require("./login_session_check.php"); 

    $uid = $_SESSION['uid'];
    $sql = "select * from adminuser where regname = '".$uid."'";
    $result = mysqli_query($conn,$sql);
    $res_array = mysqli_fetch_array($result);
    // echo $res_array['regqq'];

?>
    <!DOCTYPE html>
    <html>
        <head>
            <title>
                修改资料
            </title>
            <link rel="stylesheet" type="text/css" href="./css/edit_user.css">
        </head>
        <div class="user_information">
            <div class="appointment">
                <form action="./edit_user_sql.php" method="post">
                    <div class="main">
                        <div class="form-left">
                            <label>
                                账号
                            </label>
                            <input type="text" disabled="disabled" class="top-up" id="uid" name="uid"  <?php echo "value=".$uid."" ?> >
                        </div>
                        <div class="form-left">
                            <label>
                                邮 箱
                            </label>
                            <input type="email" id="email" name="email" required="" <?php echo "value=".$res_array['regemail']."" ?> >
                        </div>
                    </div>
                    <div class="main">
                        <div class="form-left">
                            <label>
                                旧 密 码
                            </label>
                            <input type="password" id="oldpwd" name="oldpwd" required="">
                        </div>
                        <div class="form-rights ">
                            <label>
                                新 密 码
                            </label>
                            <input type="password" id="pwd" name="pwd" required="">
                        </div>
                    </div>
                    <div class="main">
                        <div class="form-left">
                            <label>
                                性 别
                            </label>
                            <input type="text" class="top-up" id="sex" name="sex" required="" <?php echo "value=".$res_array['regsex']."" ?> >
                        </div>
                        <div class="form-rights ">
                            <label>
                                Q Q
                            </label>
                            <input class="buttom" type="number" id="qq" name="qq" required="" <?php echo "value=".$res_array['regqq']."" ?> >
                            <div class="clearfix">
                            </div>
                        </div>
                    </div>
                    <div class="btnn">
                        <input type="submit" id="edit" value="修改">
                    </div>
                </form>
            </div>
        </div>
        <?php require( "./footer.php"); ?>
    
    </html>