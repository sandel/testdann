<?php

	include_once('./class.MySQL.php');
	define("MYSQL_NAME", "mypage");
	define("MYSQL_USER", "stat");
	define("MYSQL_PASS", "stat2014");
	define("MYSQL_HOST", "112.124.44.162");
	$sql=new MySQL(MYSQL_NAME, MYSQL_USER, MYSQL_PASS, MYSQL_HOST);

	$id=$_POST["id"];
	$ele=$_POST["ele"];
	$time=$_POST["time"];
	echo $time;
	$rec=array('idx' => $id,"ele"=>$ele,"time"=>$time );
	$sql-> Insert($rec,"eagle_fromip_click");
	//$lastid = $sql-> LastInsertID();
	
	$return=json_encode($rec);

	//echo $return;

?>