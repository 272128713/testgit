<?php

if(isset($_FILES['file'])){
    if($_FILES['file']['error']==0){

        $tmp_name = $_FILES["file"]["tmp_name"];
//        echo $tmp_name;
        $name = $_FILES["file"]["name"];
//        echo $name;
        move_uploaded_file($tmp_name, "./upload/$name");
        $urlpath = $_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
        $urlpath= str_replace("upload.php","",$urlpath);
        $urlpath = $urlpath."upload/$name";
        echo $urlpath;
    }
}






?>