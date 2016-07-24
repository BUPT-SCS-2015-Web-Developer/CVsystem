<?php

	include_once("connect.php"); //连接数据库 
	
	$field=$_POST['id'];  //获取前端提交的字段名 
	$val=$_POST['value']; //获取前端提交的字段对应的内容 
	$val = htmlspecialchars($val, ENT_QUOTES); //过滤处理内容 
	 
	$time=date("Y-m-d H:i:s"); //获取系统当前时间 
	
	if(empty($val)){ 
		echo "不能为空"; 
	}else{ 
		//更新字段信息 
		$query=mysql_query("update customer set $field='$val',modifiedtime='$time' where id=1"); 
		if($query){ 
		   echo $val; 
		}else{ 
		   echo "数据出错";     
		} 
	} 

?>