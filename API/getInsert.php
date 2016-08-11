<?php
	session_start();
	if(!isset($_SESSION['user_ID'])){
		header('Location:login.php');
        exit(0);
	}
	$registerBy = $_SESSION['user_ID'];
	$_SESSION['registerTime']=$registerTime = date("Y-m-d_H-i");
	include_once("db_config.php");
	$db = new mysqli($db_host,$db_user,$db_password,$db_database);
	if (!$db)
	{
		exit('Could not connect: ' . mysql_error());
	}
	$sumSql = "SELECT * FROM cvinformation";
	$sumresult = $db->query($sumSql);
	$id = $sumresult->num_rows+2;
	$_SESSION['name']=$name=$_POST['name'];
	$_SESSION['gender']=$gender=$_POST['gender'];
	$_SESSION['subject']=$subject=$_POST['subject'];
	$_SESSION['university']=$university=$_POST['university'];
	$_SESSION['major']=$major=$_POST['major'];
	$_SESSION['college']=$college=$_POST['college'];
	$_SESSION['education']=$education=$_POST['education'];
	$_SESSION['phone']=$phone=$_POST['phone'];
	$_SESSION['email']=$email=$_POST['email'];
	$_SESSION['schoolnum']=$schoolnum=$_POST['schoolnum'];
	$_SESSION['position']=$position=$_POST['position'];

	$sql_query="INSERT INTO `cvinformation` (`id`, `name`, `gender`, `subject`, `university`, `major`, `college`, `education`, `phone`, `email`, `schoolnum`, `position`, `result1`, `result2`, `result3`, `result4`, `remark1`, `remark2`, `remark3`, `remark4`, `registerTime`, `registerBy`) VALUES ($id, '$name', '$gender', '$subject', '$university', '$major', '$college', '$education', '$phone', '$email', '$schoolnum', '$position', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL,'$registerTime', '$registerBy')";
	if(!($db->query($sql_query)))
	 	echo json_encode(array('msg'=>$db->error));
	else {
		echo json_encode(array('msg'=>'录入成功'));
	}
    mysqli_close($db);
?>
