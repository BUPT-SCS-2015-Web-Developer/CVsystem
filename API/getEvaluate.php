<?php

	session_start();
	if(!isset($_SESSION['username'])||!isset($_SESSION['type'])){
		exit('illegal access!');
	}

	include_once "db_config.php";
	$id = $_GET['id'];
	$con = mysql_connect($db_host, $db_user, $db_password) or die ("不能连接数据库:");
	mysql_select_db($db_database, $con);

	$sql = "SELECT * FROM `cvinformation` WHERE `ID`='$id' ";//查询语句
	mysql_query("set names utf8");
	$result = mysql_query($sql,$con) or die("查询失败！错误是：".mysql_error());
	$row = mysql_fetch_array($result);

	if (!$row["result1"]){
		$result1=$_POST['result1'];
	    //$time2=$_POST['time2'];
		mysql_query("UPDATE cvinformation SET result1='$result1', time2='$time2' WHERE id=$id ");
	}
	else if ($row["result1"]&&(!$row["result2"])){
		$remark2=$_POST['remark2'];
	    $result2=$_POST['result2'];
	    //$time3=$_POST['time3'];
		mysql_query("UPDATE cvinformation SET result2='$result2', remark2='$remark2', time3='$time3' WHERE id=$id ");
	}
	else if ($row["result2"]&&(!$row["result3"])){
		$remark3=$_POST['remark3'];
	    $result3=$_POST['result3'];
	   // $time4=$_POST['time4'];
		mysql_query("UPDATE cvinformation SET result3='$result3', remark3='$remark3', time4='$time4' WHERE id=$id ");
	}
	else if ($row["result3"]&&(!$row["result4"])){
		$result4=$_POST['result4'];
		mysql_query("UPDATE cvinformation SET result4='$result4' WHERE id=$id ");
	}



	echo json_encode(mysql_error());//json那边需要返回数组
    mysql_close($con);
?>
