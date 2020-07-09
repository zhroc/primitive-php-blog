<?php
 
//必须至于顶部,多服务器端记录验证码信息，便于用户输入后做校验
     session_start();
 
    //默认返回的是黑色的照片
    $image = imagecreatetruecolor(100, 30);
    //将背景设置为白色的
    $bgcolor = imagecolorallocate($image, 255, 255, 255);
    //将白色铺满地图
    imagefill($image, 0, 0, $bgcolor);
 
    //空字符串，每循环一次，追加到字符串后面  
    $captch_code='';
    $arr1 = range('a','z');
    $arr2 = range('A','Z');
    $arr3 = range(1,9);
    $arr4 = range(1,9);
    $arr5 = range(1,9);
    //array_merge — 合并一个或多个数组
    $arr0 = array_merge($arr1,$arr2,$arr3,$arr4,$arr5);
    //剔除易混淆的字符并重新给予键值
    $arr0 = array_diff($arr0, ["l", "1", "I", "0", "O", "o"]);
    $arr0 = array_values($arr0);
   //验证码为随机四个字符，数字和字母
   for ($i=0; $i <4 ; $i++) { 
    $fontsize=6;
    $fontcolor=imagecolorallocate($image,rand(0,120),rand(0,120),rand(0,120));
    $arr=implode("", $arr0);
    $fontcontent = substr($arr,rand(0,strlen($arr)) ,1);
    $captch_code.= $fontcontent;

    $x=($i*100/4)+rand(5,10);
    $y=rand(5,10);
 
    imagestring($image,$fontsize,$x,$y,$fontcontent,$fontcolor);
   }


    $captch_code = strtolower($captch_code);
    $_SESSION['authcode'] = md5($captch_code);


//为验证码增加干扰元素，控制好颜色，
//点   
    for ($i=0; $i < 200; $i++) { 
    	$pointcolor = imagecolorallocate($image,rand(50,200),rand(50,200),rand(50,200));
    	imagesetpixel($image, rand(1,99), rand(1,29), $pointcolor);
    }
 
//为验证码增加干扰元素
//线   
    for ($i=0; $i < 3; $i++) { 
    	$linecolor = imagecolorallocate($image,rand(80,220),rand(80,220),rand(80,220));
    	imageline($image, rand(1,99), rand(1,29),rand(1,99), rand(1,29) ,$linecolor);
    }
 
    header('content-type:image/png');
	imagepng($image);
 
    //销毁
    imagedestroy($image);
?>