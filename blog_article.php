<?php 
    include("./sql_conn/conn.php");
    require("./header.php");

    $sql = "select * from article";
    $result = mysqli_query($conn,$sql);
    $res_num = mysqli_num_rows($result);
    // echo $res_num;

    @$list = intval($_GET["list"]);
    if (empty($list) || $list > $res_num) {
        header("location:./blog_article.php?list=1");
        exit();
    }

    $sql = "select * from article where id = ".$list." ";
    $result = mysqli_query($conn,$sql);
    $article_info=mysqli_fetch_array($result);
    

 ?>
 <!DOCTYPE html>
 <html>
 <head>
     <title>文章内容</title>
     <link rel="stylesheet" type="text/css" href="./css/blog_article.css">
 </head>
    <div class="bg">
        <div class="bloginfo">
            <div class="article_title">
                <h2><?php echo $article_info['title']; ?></h2>
                <div class="author_time">
                    <?php  
                         echo '<a>发布时间：'.mb_substr($article_info['pubtime'],0,10,'UTF-8').'</a>';
                         echo '<a>作者：'.$article_info["author"].'</a>';
                     ?>
                </div>
                <p><?php echo $article_info['content']; ?></p>
            </div>
        </div>
    </div>
    <?php include("./comment.php") ?>
    <?php require("./footer.php"); ?>
 </html>
