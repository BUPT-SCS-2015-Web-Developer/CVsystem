<?php

	session_start();
	if(!isset($_SESSION['username'])||!isset($_SESSION['type'])){
		exit('illegal access!');
	}
	
	include_once "db_config.php";
	$id = $_GET['id'];
	$con = mysql_connect($db_host, $db_user, $db_password) or die ("不能连接数据库:");
	mysql_select_db($db_database, $con);
	
	$sql = "SELECT * FROM `cvinformation` WHERE ID='$id' ";//查询语句
	mysql_query("set names utf8");
	$result = mysql_query($sql,$con) or die("查询失败！错误是：".mysql_error());
	$row = mysql_fetch_array($result);
	
	if (!$row["time2"]){
	    $time2=$_POST['time2'];
		mysql_query("UPDATE cvinformation SET time2='$time2' WHERE id=$id ");
	}
	else if ($row["time2"]&&(!$row["time3"])){
	    $time3=$_POST['time3'];
		mysql_query("UPDATE cvinformation SET time3='$time3' WHERE id=$id ");
	}
	else if ($row["time3"]&&(!$row["time4"])){
	    $time4=$_POST['time4'];
		mysql_query("UPDATE cvinformation SET time4='$time4' WHERE id=$id ");
	}
	
	
	echo json_encode(mysql_error());//json那边需要返回数组
    mysql_close($con);
?>