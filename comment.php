 <!DOCTYPE html>
 <html>
 <head>
    <link rel='stylesheet' type='text/css' href='./css/comment.css'>
 </head>
    <div id="comments" class="bg_comment">
        <?php 
            if (empty($article_info)) {
                header("Location:./index.php"); 
                exit();
            }
         ?>

        <?php 
            $fileid = $article_info['id'];
            $comment_sql = "select * from comment where fileid=".$fileid." order by comtime desc ";
            // echo $comment_sql;
            $res_comment = mysqli_query($conn,$comment_sql);
            $a = mysqli_num_rows($res_comment);
            // echo $a;
            
            echo "<div class='comment'>";
            echo "<h2>评论区</h2>";
            include("./send_comment.php");
            while ($comment_row = mysqli_fetch_array($res_comment)) {
        ?>
            <div class="comment_info">
                <p><?php echo " ".$comment_row['username']."：".$comment_row['content']." "; ?>
                    <a id="time"><?php echo mb_substr($comment_row['comtime'],0,10,'UTF-8') ; ?></a>
                </p>
            </div>

         <?php
            } 
            echo "</div>";
            
        ?>
    </div>
 </html>