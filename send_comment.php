<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="./css/send_comment.css">
</head>

<?php 
    @session_start();
    $_SESSION['fileid'] = $fileid;
 ?>

    <div class="send_comment">
        <div class="comment_board">
            <form action="./send_comment_sql.php" method="post" >
                <textarea id="message" name="message" required="" placeholder="留下你的足迹吧~"></textarea>
                <input type='text' hidden='hidden' name='fileid' value="<?php echo $fileid ;?>">
                <div class="btnn">
                    <?php 
                        if (!empty($_SESSION['uid'])) {
                            echo "";
                            echo "<input type='submit' id='edit' value='发表评论'>";
                        }
                        else {
                            echo "<input type='button' ";
                            echo "onclick='";
                            echo 'window.open("./login.php")'; 
                            echo "'";
                            echo "id='login' value='请先登陆'>";
                        }
                     ?>
                </div>
            </form>
        </div>
    </div>
</html>