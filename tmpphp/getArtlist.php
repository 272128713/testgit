
<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/2/16 0016
 * Time: 下午 3:09
 */
header("Content-type:text/html;charset=utf-8");
include "common.php";
    if($_POST){
        $id = $_POST['id'];
        if(isset($_POST['page'])){
            $page = $_POST['page'];
        }else{
            $page = 1;
        }
        $ch = curl_init();
        $url = 'http://apis.baidu.com/tngou/info/list?id='.$id.'&page='.$page.'&rows='.$pagenum;
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
    }else{
        $result = array(
            'code'=>1001,
            'msg'=>'error'
        );
    }
?>