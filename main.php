
<?php include("./suspended.php"); ?>
<head>
    <link rel="stylesheet" type="text/css" href="./css/main.css">
</head>
<div class="main_top"></div>
<?php 
    include("./sql_conn/conn.php");
    $sql = "select * from article order by pubtime desc limit 0,5";
    $result = mysqli_query($conn,$sql);
    while ($new_blog=mysqli_fetch_array($result)) {
 ?>
<div class="main-main">
    <div class="new-blog">
        <div class="cover">
            <?php echo "<a href='./blog_article.php?list=".$new_blog["id"]." ' >" ?>
                <img src="https://uploadbeta.com/api/pictures/random/?key=BingEverydayWallpaperPicture&id=<?php echo $new_blog["id"] ?>"
                alt='<?php echo $new_blog["title"] ?>'  height="100%;"/>
            </a>
        </div>
        <div class="inner-new">
            <header class="header-new">
                <h2 class="title-new">
                    <?php echo "<a href='./blog_article.php?list=".$new_blog["id"]." ' >"; ?>
                        <?php echo $new_blog['title'] ?>
                    </a>
                </h2>
            </header>
            <div class="content-new">
                <?php echo "<a href='./blog_article.php?list=".$new_blog["id"]." ' >"; ?>
                    <p>
                        <?php 
                            if (strlen($new_blog['content'])>60) {
                                echo mb_substr($new_blog['content'],0,60,'UTF-8')."...";
                            }
                            else { echo $new_blog['content']; }
                         ?>
                    </p>
                </a>
            </div>
        </div>
        <div class="meta-new">
            <span class="pull-left">
                <a class="release-date">
                    <?php echo '发布时间：'.mb_substr($new_blog['pubtime'],0,10,'UTF-8').''; ?>
                </a>
                <a href="./#comments" class="comments">
                <?php echo "<a href='./blog_article.php?list=".$new_blog["id"]."#comments ' >"; ?>
                  <?php 
                    $comsql='select * from comment where fileid = '.$new_blog["id"].' order by comtime desc;';
                    $com_res=mysqli_query($conn,$comsql);
                    $com_num=mysqli_num_rows($com_res);
                    echo "$com_num"." 条评论"; 
                  ?>
                </a>
                <a href="/?author=1" class="user">
                    <?php echo '作者：'.$new_blog["author"].''; ?>
                </a>
            </span>
            <span class="pull-right">
                <?php echo "<a href='./blog_article.php?list=".$new_blog["id"]." ' >"; ?>
                <!-- <a class="read-more" href="https://www.cooleryue.cn/pixiv-pixshaft/" title="阅读全文"> -->
                <?php echo "<a  href='./blog_article.php?list=".$new_blog["id"]." ' title='阅读全文'' >"; ?> 
                    阅读全文
                </a>
            </span>
        </div>
    </div>
<?php } ?>
    <div class="turn_page">
        <div class="page">
            <ul id="nav">
                <?php 

                 ?>
                <li><a href="?page=1">首</a></li>
                <?php 
                    $blog_sql = "select * from article order by pubtime desc;";
                    $blog_res = mysqli_query($conn,$blog_sql);
                    $blog_num = ceil(mysqli_num_rows($blog_res)/4);
                    while ( $blog_num>4) {
                        echo "<li><a href='?page=".$blog_num."'>".$blog_num."</a></li>";
                        $blog_num--;
                    }
                     echo "<li><a href='?page=".$blog_num."'>".$blog_num."</a></li>";
                 ?>
                <li><a href="<?php  ?>">尾</a></li>
            </ul>
        </div>
    </div>
    <div class="bottom"></div>
</div>