<?php

	session_start();
	if(!isset($_SESSION['username'])||!isset($_SESSION['type'])){
		exit('illegal access!');
	}
	
	include_once "db_config.php";
	$id = $_GET['idbig'];
	$con = mysql_connect($db_host, $db_user, $db_password) or die ("不能连接数据库:");
	mysql_select_db($db_database, $con);
	
	$field=$_POST['id'];  //获取前端提交的字段名 
	$val=$_POST['value']; //获取前端提交的字段对应的内容 
	$val = htmlspecialchars($val, ENT_QUOTES); //过滤处理内容 
	 
	
	if(empty($val)){ 
		echo "不能为空"; 
	}else{ 
		//更新字段信息 
		$query=mysql_query("update customer set $field='$val' where id=$id"); 
		if($query){ 
		   echo $val; 
		}else{ 
		   echo "数据出错";     
		} 
	} 

?>