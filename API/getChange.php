<?php
    //修改密码的API
    session_start();
    if(!isset($_SESSION['username'])||!isset($_SESSION['type'])){
		exit('illegal access!');
	}

    $oldpass = $_POST['oldpass'];
	$newpass = $_POST['newpass'];
	$queren = $_POST['queren'];
	$username = $_SESSION['username'];
	try {
		check_vaild_user();
		if (!filled_out($_POST)) {
			throw new Exception ('请填写完整')；
		}
		if ($newpass !=$queren) {
			throw new  Exception ('新密码两次输入不一致')；
		}
		change_password($_SESSION['username'],$oldpass,$newpass);
		echo '成功修改密码！';


		include_once "db_config.php";
		$con = mysql_connect($db_host, $db_user, $db_password) or die ("不能连接数据库:");
		mysql_select_db($db_database, $con);
		mysql_query("set names utf8");
		mysql_query("UPDATE user SET user_password='$newpass' WHERE user_ID = '$username' ");


		echo json_encode(mysql_error());//json那边需要返回数组
		mysql_close($con);

	}
	catch (Exception $e) {
		echo json_encode($e->getMessage());
	}

?>
