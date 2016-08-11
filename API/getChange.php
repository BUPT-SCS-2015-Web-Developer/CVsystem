<?php
    //修改密码的API
    session_start();
    if(!isset($_SESSION['user_ID'])||!isset($_SESSION['user_type'])){
		exit('illegal access!');
        header('Location:login.php');
	}

    include_once("db_config.php");
    $db = new mysqli($db_host,$db_user,$db_password,$db_database);
    if (!$db)
      {
      die('Could not connect: ' . mysql_error());
      }

    $oldpass = addslashes($_POST['oldpass']);
	$newpass = addslashes($_POST['newpass']);
	$queren = addslashes($_POST['queren']);
	$user_ID = $_SESSION['user_ID'];

    $sql_query = "SELECT * FROM user WHERE user_ID='$user_ID'";

    $result = $db->query($sql_query);

    if($result->num_rows)
    {
        $sql_query = "SELECT * FROM user WHERE user_ID='$user_ID' AND user_password='$oldpass'";
        $result = $db->query($sql_query);
        if($result->num_rows)
        {
            if($queren===$newpass)
            {
                $sql_query = "UPDATE user SET user_password='$newpass' WHERE user_ID = '$user_ID'";
                $done = $db->query($sql_query);
                if($done)
                {
                    session_destroy();
                    echo json_encode(array('status'=>'success','msg'=>'修改成功，请重新登录'));
                }
            }
            else {
                echo json_encode(array('status'=>'error','msg'=>'两次输入密码不一致'));
            }
        }
        else {
            echo json_encode(array('status'=>'error','msg'=>'原始密码错误！'));
        }
    }
    else {
        echo json_encode(array('status'=>'error','msg'=>'用户不存在'));
    }
	// try {
	// 	check_vaild_user();
	// 	if (!filled_out($_POST)) {
	// 		throw new Exception ('请填写完整')；
	// 	}
	// 	if ($newpass !=$queren) {
	// 		throw new  Exception ('新密码两次输入不一致')；
	// 	}
	// 	change_password($_SESSION['username'],$oldpass,$newpass);
	// 	echo '成功修改密码！';
    //
    //
	// 	include_once "db_config.php";
	// 	$con = mysql_connect($db_host, $db_user, $db_password) or die ("不能连接数据库:");
	// 	mysql_select_db($db_database, $con);
	// 	mysql_query("set names utf8");
	// 	mysql_query("UPDATE user SET user_password='$newpass' WHERE user_ID = '$username' ");
    //
    //
	// 	echo json_encode(mysql_error());//json那边需要返回数组
	// 	mysql_close($con);
    //
	// }
	// catch (Exception $e) {
	// 	echo json_encode($e->getMessage());
	// }

?>
