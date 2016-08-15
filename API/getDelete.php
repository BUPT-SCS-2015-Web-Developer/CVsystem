<?php
	session_start();
	if(!isset($_SESSION['user_ID']) || !isset($_SESSION['user_type']))
	{
		echo "<script language=javascript>alert('请先登录!');window.location.href='login.php';</script>";
		exit(0);
	}

	if (isset($_GET['id']))
		$id = addslashes($_GET['id']);//!!!
	else {
		die("请勿直接访问此页面！");
	}
	$changeBy = $_SESSION['user_ID'];
	$changeTime = date("Y-m-d_H-i");
	include"db_config.php";
	$db = new mysqli($db_host,$db_user,$db_password,$db_database);
	if (!$db)
	  {
	  die('Could not connect: ' . mysql_error());
	  }
  	$sql_query = "SELECT * FROM `cvinformation` WHERE id = $id";//查询语句

  	if (!($result = $db->query($sql_query)))
  	{
  		die("未能查询到相关信息！");
  	}
  	$row = $result->fetch_array(MYSQLI_ASSOC);

	$name=$row['name'];
	$gender=$row['gender'];
	$subject=$row['subject'];
	$university=$row['university'];
	$major1=$row['major1'];
	$college=$row['college'];
	$major2=$row['major2'];
	$education=$row['education'];
	$phone=$row['phone'];
	$email=$row['email'];
	$schoolnum=$row['schoolnum'];
	$position=$row['position'];
	$registerBy=$row['registerBy'];
	$registerTime=$row['registerTime'];
	$result1=$row['result1'];
	$result2=$row['result2'];
	$result3=$row['result3'];
	$result4=$row['result4'];

	$time1=$row['time1'];
	$time2=$row['time2'];
	$time3=$row['time3'];
	$time4=$row['time4'];

	$remark1=$row['remark1'];
	$remark2=$row['remark2'];
	$remark3=$row['remark3'];
	$remark4=$row['remark4'];

	$sql_query = "INSERT INTO `datalog` (`action`, `id`, `name`, `gender`, `subject`, `university`, `major1`, `college`, `major2`, `education`, `phone`, `email`, `schoolnum`, `position`, `result1`, `result2`, `result3`, `result4`, `remark1`, `remark2`, `remark3`, `remark4`, `time1`, `time2`, `time3`, `time4`, `registerTime`, `registerBy`, `changeTime`, `changeBy`) VALUES ('删除', $id, '$name', '$gender', '$subject', '$university', '$major1', '$college', '$major2', '$education', '$phone', '$email', '$schoolnum', '$position', '$result1', '$result2', '$result3', '$result4', '$remark1', '$remark2', '$remark3', '$remark4', '$time1', '$time2', '$time3', '$time4','$registerTime', '$registerBy','$changeTime','$changeBy')";

	if(!($result = $db->query($sql_query)))
	{
		echo "删除失败";
	}
	else {
		$sql_query = "DELETE FROM `cvinformation` WHERE `cvinformation`.`id` = ".$id;
		$db->query($sql_query);
		echo "<script language=javascript>alert('删除成功!');window.location.href='localhost/cvsystem/view.php';</script>";
        exit(0);
	}

	;

?>
