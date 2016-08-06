<?php

	session_start();
	if(!isset($_SESSION['username'])){
		exit('illegal access!');
	}

	$registerBy = $_SESSION['username'];
	$registerTime = date("Y-m-d");

    include_once("db_config.php");
	$con = mysql_connect($db_host,$db_user,$db_password);
    if (!$con){
        die('Could not connect: ' . mysql_error());
    }
	mysql_select_db($db_database,$con);


	$name=$_POST['name'];
	$gender=$_POST['gender'];
	$subject=$_POST['subject'];
	$university=$_POST['university'];
	$major=$_POST['major'];
	$college=$_POST['college'];
	$education=$_POST['education'];
	$phone=$_POST['phone'];
	$email=$_POST['email'];
	$schoolnum=$_POST['schoolnum'];
	$position=$_POST['position'];

	mysql_query("INSERT INTO cvinformation (name, gender, subject, university, major, college, education, phone, email, schoolnum, position, registerTime, registerBy)
        VALUES ('$name', '$gender', '$subject', '$university', '$major', '$college', '$education', '$phone', '$email', '$schoolnum', '$position', '$registerTime', '$registerBy')");

	echo json_encode(array('msg'=>'录入成功'));
    mysql_close($con);
?>
