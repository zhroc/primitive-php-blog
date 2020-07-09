<?php 
    require("./login_session_check.php");
    require("./header.php");
 ?>
 <!DOCTYPE html>
 <html>
 <head>
    <title>发布文章</title>
     <link rel="stylesheet" type="text/css" href="./css/post_article.css">
 </head>
     <div class="post_bg">
        <div class="post_fix"></div>
        <div class="post_art_main">
            <h2>发布文章</h2>
            <div class="post_form">
                <form action="./post_article_sql.php" method="post" >
                    <div class="province">
                        文章类别：
                        <select name="type_id" >
                            <option value="1" selected="selected">Android</option>
                            <option value="2">技能技巧</option>
                            <option value="3">PHP</option>
                        </select>
                    </div>
                    <input placeholder="文章标题" required="required" type="text" name="title"><br/>
                    <textarea placeholder="尽情创作吧~" required="required" name="content"></textarea>
                    <div class="btnn">
                        <input type="submit" name="submit" value="发布">
                    </div>
                </form> 
            </div>
        </div>
        <div class="post_fix"></div>
    </div>
    <?php require("./footer.php"); ?>
 </html>
