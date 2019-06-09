<?php  
error_reporting(E_ALL^E_NOTICE^E_WARNING);  
header('Content-Type:text/html;charset=utf-8');  
function down(){  
$appid = $_GET['appid'];  
$version = $_GET['version'];  
$os= $_GET['plus'];   
$imei= $_GET['imei'];   
$rsp = array('status' => 0);  
if (isset($appid) && isset($version)) {  
if($version !== "1.3"){ //最新版本号  
$rsp['status'] = 5;  
$rsp['title'] = "版本更新";  
$rsp['note'] = "version 1.3";  
if($os == 'Android'){  
$rsp['url'] = "https://www.szchenxi.cf/app/app.html"; //安卓安装包地址  
}else{  
$rsp['url'] = "https://www.szchenxi.cf/app/app.html"; //苹果点击更新后跳转的地址，可以是自己的网页的，也可以是苹果商店的  
}}}exit(json_encode($rsp));}  
$data=down($getdh);    
echo $data;  