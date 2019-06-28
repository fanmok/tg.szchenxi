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
if($version !== "1.5"){ //最新版本号  
$rsp['status'] = 6;  
$rsp['title'] = "版本更新";  
$rsp['note'] = "version 1.5";  
$rsp['url'] = "https://www.szchenxi.cf/app/cydia-impactor.html";
}}exit(json_encode($rsp));}  
$data=down($getdh);    
echo $data;  