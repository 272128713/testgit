<?php
 
// Or if you just download the medoo.php into directory, require it with the correct path.
require  'medoo.php';
 
$database = new medoo([
	// required
	'database_type' => 'mysql',
	'database_name' => 'yixin_duplicate',
	'server' => '117.34.72.251',
	'username' => 'rongke',
	'password' => 'rongke',
	'charset' => 'utf8',
 
	// [optional]
	'port' => 3306,
 
 
]);

//初始化数组
$result=array();
//省市区
//省
$data = $database->query("SELECT * FROM hat_province")->fetchAll();
foreach($data as $k=>$datav){

    //市
    $datac = $database->query("SELECT * from hat_city WHERE father = ".$datav['provinceID'])->fetchAll();

    $resultc=array();
    foreach($datac as $kc => $datavc){

        //区
        $dataarea = $database->query("SELECT * from hat_area WHERE father = ".$datavc['cityID'])->fetchAll();

        $resultarea=array();
        foreach($dataarea as $karea => $datavarea){
            //区数组
            $resultarea[$karea] = array(
                "ID" => $datavarea['areaID'],
                "NAME" => $datavarea['AREA'],
            );
        }



        //市数组
        $resultc[$kc] = array(
            "ID" => $datavc['cityID'],
            "NAME" => $datavc['city'],
            "ITEMS" => $resultarea,
        );


    }


    //省数组
    $result[$k] = array(
        "ID" => $datav['provinceID'],
        "NAME" => $datav['province'],
        "ITEMS" => $resultc,
    );




}
$datajson = json_encode($result,JSON_UNESCAPED_UNICODE);
//echo $datajson;
file_put_contents("a.js",$datajson);
?>