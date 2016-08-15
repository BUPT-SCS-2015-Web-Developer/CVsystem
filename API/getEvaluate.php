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

	if($_POST['result1']==="已通过"||$_POST['result1']==="未通过")
		$result1=$_POST['result1'];
	else
		$result1="";
	$remark1=$_POST['remark1'];
	if($_POST['result2']==="已通过"||$_POST['result2']==="未通过")
		$result2=$_POST['result2'];
	else
		$result2="";
	$remark2=$_POST['remark2'];
	if($_POST['result3']==="已通过"||$_POST['result3']==="未通过")
		$result3=$_POST['result3'];
	else
		$result3="";
	$remark3=$_POST['remark3'];
	if($_POST['result4']==="已通过"||$_POST['result4']==="未通过")
		$result4=$_POST['result4'];
	else
		$result4="";
	$remark4=$_POST['remark4'];

	$sql_query="UPDATE cvinformation SET result1 = '$result1' ,result2 = '$result2' , result3 = '$result3' , result4 = '$result4' , remark1 = '$remark1' ,remark2 = '$remark2' , remark3 = '$remark3' , remark4 = '$remark4' WHERE `cvinformation`.`id` = $id";
	if(!($db->query($sql_query)))
	 	echo json_encode(array('msg'=>$db->error));
	else {
		echo json_encode(array('msg'=>'录入成功'));
	}
    mysqli_close($db);
?>
