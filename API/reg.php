<?php
	//check if legal
	if(!isset($_POST['user_ID']) || !isset($_POST['user_password']))
	{
		echo "<script language=javascript>alert('非法访问!');</script>";
	}

	//post data
	$user_ID = addslashes($_POST['user_ID']);
	//$password = MD5($_POST['password']);
	$user_password = addslashes($_POST['user_password']);

	include_once("db_config.php");
	$db = new mysqli($db_host,$db_user,$db_password,$db_database);
	if (!$db)
	  {
	  die('Could not connect: ' . mysql_error());
	  }

//	$check_query = "SELECT * FROM user WHERE 'user_ID' = '$username'";
//	$user = $db->get_row($check_query);

//	if(!$user){
//		echo json_encode(array('msg'=>'请检查用户名输入'));
//	}
//	else{
		$sql_query = "SELECT * FROM user WHERE user_ID='$user_ID' AND user_password='$user_password'";

		$result = $db->query($sql_query);

		if($result->num_rows)
		{
			session_start();
			unset($_SESSION['user_ID']);
			unset($_SESSION['user_type']);
			while ($row = $result->fetch_array(SQLITE3_ASSOC)) {
				$_SESSION['user_ID'] = $row['user_ID'];
				$_SESSION['user_type'] = $row['user_type'];
			}
			echo json_encode(array('url'=>'index.php','msg'=>'登陆成功'));
		}
		else
		{
			echo json_encode(array('url'=>'login.php','msg'=>'用户名或密码输入错误，登陆失败'));
		}
//		}
?>
