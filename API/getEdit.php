<?php

	session_start();
	if(!isset($_SESSION['user_ID'])){
		header('Location:login.php');
        exit(0);
	}
	$changeBy = $_SESSION['user_ID'];
	$changeTime = date("Y-m-d_H-i");
	include_once("db_config.php");
	$db = new mysqli($db_host,$db_user,$db_password,$db_database);
	if (!$db)
	{
		exit('Could not connect: ' . mysql_error());
	}

	$id = floatval(addslashes($_POST['id']));

	$sumSql = "SELECT * FROM cvinformation WHERE id = $id";

    $sql_query = "SELECT * FROM `cvinformation` WHERE id = $id";//查询语句

  	if (!($result = $db->query($sql_query)))
  	{
  		die("未能查询到相关信息！");
  	}
  	$row = $result->fetch_array(MYSQLI_ASSOC);

	$name=$_POST['name'];
	$gender=$_POST['gender'];
	$subject=$_POST['subject'];
	$university=$_POST['university'];
	$major1=$_POST['major1'];
	$college=$_POST['college'];
	$major2=$_POST['major2'];
	$education=$_POST['education'];
	$phone=$_POST['phone'];
	$email=$_POST['email'];
	$schoolnum=$_POST['schoolnum'];
	$position=$_POST['position'];

echo $row['gender'];
//    $sql_query="INSERT INTO `datalog` (action, `id`, `name`, `gender`, `subject`, `university`, `major1`, `college`, `major2`, `education`, `phone`, `email`, `schoolnum`, `position`, `result1`, `result2`, `result3`, `result4`, `time1`, `time2`, `time3`, `time4`, `remark1`, `remark2`, `remark3`, `remark4`, `changeTime`, `changeBy`) VALUES ('更改', ".$row['id'].", $row['name'], $row['gender'], $row['$subject'], $row['university'], $row['major1'], $row['college'], $row['major2'], $row['education'], $row['phone'], $row['email'], $row['schoolnum'], $row['position'], $row['result1'], $row['result2'], $row['result3'], $row['result4'], $row['time1'], $row['time2'], $row['time3'], $row['time4'], $row['remark1'], $row['remark2'], $row['remark3'], $row['remark4'],$changeTime, $changeBy)";
//    $db->query($sql_query);

	$sql_query="UPDATE `cvinformation` (`name`, `gender`, `subject`, `university`, `major1`, `college`, `major2`, `education`, `phone`, `email`, `schoolnum`, `position`, `result1`, `result2`, `result3`, `result4`, `remark1`, `remark2`, `remark3`, `remark4`) VALUES ('$name', '$gender', '$subject', '$university', '$major1', '$college', '$major2', '$education', '$phone', '$email', '$schoolnum', '$position', $row['result1'], $row['result2'], $row['result3'], $row['result4'], $row['remark1'], $row['remark2'], $row['remark3'], $row['remark4'])";
	if(!($db->query($sql_query)))
	 	echo json_encode(array('msg'=>$db->error));
	else {
		echo json_encode(array('msg'=>'录入成功'));
	}
    mysqli_close($db);
?>
