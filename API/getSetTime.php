<?php
	session_start();
	if(!isset($_SESSION['user_ID'])){
		header('Location:login.php');
        exit(0);
	}

	include_once("db_config.php");
	$db = new mysqli($db_host,$db_user,$db_password,$db_database);
	if (!$db)
	{
		exit('Could not connect: ' . mysql_error());
	}
	$id = floatval(addslashes($_POST['id']));
	$sumSql = "SELECT * FROM 'cvinformation' WHERE 'id' = $id ";

	$time1=addslashes($_POST['time1']);
	if($time1==="未设定")
	{
		$time1 = "";
	}
	$time2=addslashes($_POST['time2']);
	if($time2==="未设定")
	{
		$time2 = "";
	}
	$time3=addslashes($_POST['time3']);
	if($time3==="未设定")
	{
		$time3 = "";
	}
	$time4=addslashes($_POST['time4']);
	if($time4==="未设定")
	{
		$time4 = "";
	}

	$sql_query="UPDATE cvinformation SET time1 = '$time1' ,time2 = '$time2' , time3 = '$time3' , time4 = '$time4' WHERE `cvinformation`.`id` = $id";

	if(!($db->query($sql_query)))
	 	echo json_encode(array('msg'=>$db->error));
	else {
		echo json_encode(array('msg'=>'设定成功'));
	}
    mysqli_close($db);
?>
