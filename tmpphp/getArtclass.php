
<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/2/16 0016
 * Time: 下午 3:09
 */
header("Content-type:text/html;charset=utf-8");
include "common.php";
$ch = curl_init();
$url = 'http://apis.baidu.com/tngou/info/classify';
$header = array(
    'apikey: '.$apikey,
);
// 添加apikey到header
curl_setopt($ch, CURLOPT_HTTPHEADER  , $header);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
// 执行HTTP请求
curl_setopt($ch , CURLOPT_URL , $url);
$res = curl_exec($ch);
echo $res;
?>