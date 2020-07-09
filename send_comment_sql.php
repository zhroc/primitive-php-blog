<?php 
    
    if (!empty($_SESSION['fileid']) ) {
            header("Location:./index.php"); 
            exit();
        }
    else{
        include("./sql_conn/conn.php");
        include("./login_session_check.php");

        $content = $_POST['message'];
        $username = $_SESSION['uid'];
        if (empty($_SESSION['fileid'])) {
            header("Location:./index.php"); 
            exit();
        }
        $fileid = intval($_SESSION['fileid']);
        $comtime = date('Y-m-d h:i:s', time());
        // echo $fileid;

        $comment_sql = "INSERT INTO comment (id, fileid, username, content, comtime)
         VALUES (NULL, '".$fileid."', '".$username."', '".$content."', '".$comtime."')";
        
        // echo $comment_sql;
        $res = mysqli_query($conn,$comment_sql);
        if ($res>0) {
            echo "<script language='javascript' type='text/javascript'>";
            echo "alert('留言成功');";
            echo "location.href='./blog_article.php?list=".$fileid."#comments';"; 
            echo "</script>";
            exit();
    
        }    
    }
    @session_start();
    unset($_SESSION["fileid"]);
 ?>