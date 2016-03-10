<?php 
	include "lnk.php";
	if($_REQUEST){
		$phone = $_REQUEST['phone'];
		$sex = $_REQUEST['sex'];
		$age = $_REQUEST['age'];
		$qa = $_REQUEST['qa'];
		$qb = $_REQUEST['qb'];
		$qc = $_REQUEST['qc'];
		$qd = $_REQUEST['qd'];
		$qe = $_REQUEST['qe'];
		$qf = $_REQUEST['qf'];
		$qg = $_REQUEST['qg'];
		$qh = $_REQUEST['qh'];
		$qi = $_REQUEST['qi'];
		$qj = $_REQUEST['qj'];
		$qk = $_REQUEST['qk'];
		$ql = $_REQUEST['ql'];
		$qf = substr($qf, 0, -1);
		$qk = substr($qk, 0, -1);

        //查询是否有已插入
        $sql = "select id from hd_test WHERE phone = '$phone'";
        $restel = $database->query($sql)->fetchAll();
        if($restel){
            echo 2;
            die();
        }
		$sql = "insert into hd_test (phone,sex,age,q1,q2,q3,q4,q5,q6,q7,q8,q9,q10,q11,q12,time) 
				values 
				('$phone','$sex','$age','$qa','$qb','$qc','$qd','$qe','$qf','$qg','$qh','$qi','$qj','$qk','$ql',NOW())";
		
		$result = $database->query($sql);
		echo 1;
		
	}
	
	
	?>