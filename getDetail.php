<?php

	session_start();
	if(!isset($_SESSION['username'])||!isset($_SESSION['type'])){
		exit('illegal access!');
	}
	
	include_once "API/db_config.php";
	
	$id = $_POST['id'];//!!!
	$con = mysql_connect($db_host, $db_user, $db_password) or die ("不能连接数据库:");
	mysql_select_db($db_database, $con);
	
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <title>XX公司XX系统</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="css/bootstrap.css" media="screen">
    <link rel="stylesheet" href="skins/eden.css" media="screen">
    <link href="css/useso.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">

    <style>
        .navbar-holder-dark{
            padding: 20px 20px 200px 20px;
            background: #333333;
        }
    </style>

</head>
<body>
<div class="navbar navbar-default navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <a href="##" class="navbar-brand">XX公司</a> <!--连接到公司网站-->
            <button class="navbar-toggle" type="button" data-toggle="collapse" data-target="#navbar-main">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
        </div>
        <div class="navbar-collapse collapse" id="navbar-main">

            <ul class="nav navbar-nav">
                <li><a href="index.php">网站首页</a></li>
				<li class="active"><a href="view.php" >信息查询</a></li>
				<li><a href="input.php" >信息录入</a></li>
				<li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                    aria-expanded="false">设置 <span class="caret"></span></a>
                    <ul class="dropdown-menu" role="menu">
                        <li><a href="change.php">修改密码</a></li>
                        <li><a href="logout.php">退出登录</a></li> 
                    </ul>
                </li>
            </ul>
			
			<form class="navbar-form navbar-left" role="search">
                    <div class="form-group">
                        <input class="form-control" placeholder="Search" type="text">
                    </div>
                    <button type="submit" class="btn btn-primary">搜索</button>
            </form>
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="#">联系站务</a></li>
					</ul>

        </div>
    </div>
</div>


<div class="container">
	<div class="bs-docs-section">
		<div class="row">
			<div class="col-lg-12">
				<div class="page-header">
					<h1 id="forms"></h1>
				</div>
			</div>
		</div>
<?php 	

	$sql = "SELECT * FROM `cvinformation` WHERE ID='$id' ";//查询语句
	mysql_query("set names utf8");
	$result = mysql_query($sql,$con) or die("查询失败！错误是：".mysql_error());
	$row = mysql_fetch_array($result);
	
?>
		<div class="row">
			<div class="col-lg-10">
				<div class="bs-component">
					<div class="panel panel-default">
						<div class="panel-heading">编号</div>
						<div class="panel-body">
							<?php echo $id;?>
						</div>
					</div>
					<div class="panel panel-default">
						<div class="panel-heading">简历填写时间</div>
						<div class="panel-body">
							<?php echo $row["registerTime"];?>
						</div>
					</div>
					<div class="panel panel-default">
						<div class="panel-heading">姓名</div>
						<div class="panel-body">
							<?php echo $row["name"];?>
						</div>
					</div>
					<div class="panel panel-default">
						<div class="panel-heading">性别</div>
						<div class="panel-body">
							<?php echo $row["gender"];?>
						</div>
					</div>
					<div class="panel panel-default">
						<div class="panel-heading">应聘科目</div>
						<div class="panel-body">
							<?php echo $row["subject"];?>
						</div>
					</div>
					<div class="panel panel-default">
						<div class="panel-heading">本科学校（全称）</div>
						<div class="panel-body">
							<?php echo $row["university"];?>
						</div>
					</div>
					<div class="panel panel-default">
						<div class="panel-heading">本科专业</div>
						<div class="panel-body">
							<?php echo $row["major"];?>
						</div>
					</div>
					<div class="panel panel-default">
						<div class="panel-heading">硕/博学校（全称）</div>
						<div class="panel-body">
							<?php echo $row["college"];?>
						</div>
					</div>
					<div class="panel panel-default">
						<div class="panel-heading">最高学历</div>
						<div class="panel-body">
							<?php echo $row["education"];?>
						</div>
					</div>
					<div class="panel panel-default">
						<div class="panel-heading">手机号</div>
						<div class="panel-body">
							<?php echo $row["phone"];?>
						</div>
					</div>
					<div class="panel panel-default">
						<div class="panel-heading">邮箱</div>
						<div class="panel-body">
							<?php echo $row["email"];?>
						</div>
					</div>
					<div class="panel panel-default">
						<div class="panel-heading">分校</div>
						<div class="panel-body">
							<?php echo $row["schoolnum"];?>
						</div>
					</div>
					<div class="panel panel-default">
						<div class="panel-heading">申请职位性质</div>
						<div class="panel-body">
							<?php echo $row["position"];?>
						</div>
					</div>
					
					<?php if($row["result1"]){?>
					<div class="panel panel-default">
						<div class="panel-heading">面谈（一面）结果</div>
						<div class="panel-body">
							<?php echo $row["result1"];?>
						</div>
					</div>
					<?php } ?>
					<?php if($row["time2"]){?>
					<div class="panel panel-default">
						<div class="panel-heading">初试（二面）时间</div>
						<div class="panel-body">
							<?php echo $row["time2"];?>
						</div>
					</div>
					<?php } ?>
					<?php if($row["remark2"]){?>
					<div class="panel panel-default">
						<div class="panel-heading">二面评价</div>
						<div class="panel-body">
							<?php echo $row["remark2"];?>
						</div>
					</div>
					<?php } ?>
					<?php if($row["result2"]){?>
					<div class="panel panel-default">
						<div class="panel-heading">二面结果</div>
						<div class="panel-body">
							<?php echo $row["result2"];?>
						</div>
					</div>
					<?php } ?>
					<?php if($row["time3"]){?>
					<div class="panel panel-default">
						<div class="panel-heading">复试指导（三面）时间</div>
						<div class="panel-body">
							<?php echo $row["time3"];?>
						</div>
					</div>
					<?php } ?>
					<?php if($row["remark3"]){?>
					<div class="panel panel-default">
						<div class="panel-heading">三面评价</div>
						<div class="panel-body">
							<?php echo $row["remark3"];?>
						</div>
					</div>
					<?php } ?>
					<?php if($row["result3"]){?>
					<div class="panel panel-default">
						<div class="panel-heading">复试指导（三面）结果</div>
						<div class="panel-body">
							<?php echo $row["result3"];?>
						</div>
					</div>
					<?php } ?>
					<?php if($row["time4"]){?>
					<div class="panel panel-default">
						<div class="panel-heading">复试（四面）时间</div>
						<div class="panel-body">
							<?php echo $row["time4"];?>
						</div>
					</div>
					<?php } ?>
					<?php if($row["result4"]){?>
					<div class="panel panel-default">
						<div class="panel-heading">复试（四面）结果</div>
						<div class="panel-body">
							<?php echo $row["result4"];?>
						</div>
					</div>
					<?php } ?>
					
					
                    <a href="edit.php?id=<?php echo $id; ?>" class="btn btn-default">编辑</a> <!-- 编辑 -->
					<a href="API/delete.php?id=<?php echo $id; ?>" class="btn btn-danger">删除</a> <!-- 删除 -->
					
					<?php if($_SESSION['type']=='interviewer'){ ?>
					<a href="evaluate.php?id=<?php echo $id; ?>" class="btn btn-info">评价</a> <!-- 只有面试官能评价 -->
					<a href="setTime.php?id=<?php echo $id; ?>" class="btn btn-primary">设定面试时间</a>
					<?php } ?>
					
				</div>
			</div>
		</div>
	</div>

<footer>
    <div class="row">
        <div class="col-lg-12">
            <hr/>
            <p>&copy; <a href="##" rel="nofollow">Company</a>2016.</p><!--连到公司网站-->

        </div>
    </div>

</footer>

</div>



<script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
<script src="js/bootstrap.min.js"></script>

</body>
</html>