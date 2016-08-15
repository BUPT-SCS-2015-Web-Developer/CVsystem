<?php
	session_start();
	if(!isset($_SESSION['user_ID']) || !isset($_SESSION['user_type']))
	{
		echo "<script language=javascript>alert('请先登录!');window.location.href='login.php';</script>";
		exit(0);
	}

	if (isset($_GET['id']))
		$id = $_GET['id'];//!!!
	else {
		die("请勿直接访问此页面！");
	}

	include_once("API/db_config.php");
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
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <title>XX公司XX系统</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	<link rel="stylesheet" href="css/detail.css" media ="screen">
    <link rel="stylesheet" href="css/bootstrap.min.css" media="screen">
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
<?php include("API/header.php") ?>
<div class="container">
	<div class="bs-docs-section">
		<div class="row">
			<div class="col-lg-12">
				<div class="page-header">
					<h1 id="forms"></h1>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-12">
				<div id="formtable" class="panel panel-default">
					<div class="bs-component">
					<table id="formtable">
						<tr>
							<td style = "background-color:#ecf0f1;padding:15px;font-size:30px;border-bottom:0px;" colspan="8">ID.<?php echo $row["id"];?>个人简历</td>
						</tr>

						<tr id="firstline">
							<td style="width:8%">姓名</td>
							<td style="width:12%"><?php echo $row["name"]; ?></td>
							<td style="width:8%">性别</td>
							<td style="width:12%"><?php echo $row["gender"]; ?></td>
							<td style="width:8%">录入者</td>
							<td style="width:12%"><?php echo $row["registerBy"]; ?></td>
							<td style="width:16%">上次修改时间</td>
							<td style="width:24%"><?php echo $row["registerTime"];?></td>
						</tr>
						<tr>
							<td colspan="2">最高学历</td>
							<td colspan="2"><?php echo $row["education"] ?></td>
							<td colspan="2">应聘科目</td>
							<td colspan="2"><?php echo $row["subject"] ?></td>
						</tr>
						<tr>
							<td colspan="2">本科学校</td>
							<td colspan="2"><?php echo $row["university"] ?></td>
							<td colspan="2">本科专业</td>
							<td colspan="2"><?php echo $row["major1"] ?></td>
						</tr>
						<tr>
							<td colspan="2">硕/博学校</td>
							<td colspan="2"><?php echo $row["university"] ?></td>
							<td colspan="2">硕/博专业</td>
							<td colspan="2"><?php echo $row["major1"] ?></td>
						</tr>
						<tr>
							<td colspan="2">所选分校</td>
							<td colspan="2"><?php echo $row["schoolnum"] ?></td>
							<td colspan="2">申请职位性质</td>
							<td colspan="2"><?php echo $row["position"] ?></td>
						</tr>
						<tr>
							<td colspan="2">手机号</td>
							<td colspan="2"><?php echo $row["phone"] ?></td>
							<td colspan="2">邮箱</td>
							<td colspan="2"><?php echo $row["email"] ?></td>
						</tr>
						<tr>
							<td colspan="2">一面时间</td>
							<td colspan="2"><?php if($row['time1']!=NULL)echo $row["time1"];else echo "未设定"; ?></td>
							<td colspan="2">二面时间</td>
							<td colspan="2"><?php if($row['time2']!=NULL)echo $row["time2"];else echo "未设定"; ?></td>
						</tr>
						<tr>
							<td colspan="2">三面时间</td>
							<td colspan="2"><?php if($row['time3']!=NULL)echo $row["time3"];else echo "未设定"; ?></td>
							<td colspan="2">四面时间</td>
							<td colspan="2"><?php if($row['time4']!=NULL)echo $row["time4"];else echo "未设定"; ?></td>
						</tr>
						<?php
							if($_SESSION['user_type']==="hr")
							{
								echo '<tr>
									<td colspan="2">一面结果</td>
									<td colspan="2">'.$row['result1'].'</td>
									<td colspan="2">一面评价</td>
									<td colspan="2">'.$row['remark1'].'</td>
								</tr>
								<tr>
									<td colspan="2">二面结果</td>
									<td colspan="2">'.$row['result2'].'</td>
									<td colspan="2">二面评价</td>
									<td colspan="2">'.$row['remark2'].'</td>
								</tr>
								<tr>
									<td colspan="2">三面结果</td>
									<td colspan="2">'.$row['result3'].'</td>
									<td colspan="2">三面评价</td>
									<td colspan="2">'.$row['remark3'].'</td>
								</tr>
								<tr>
									<td colspan="2">四面结果</td>
									<td colspan="2">'.$row['result4'].'</td>
									<td colspan="2">四面评价</td>
									<td colspan="2">'.$row['remark4'].'</td>
								</tr>';
							}
						 ?>
						</table>
					</div>
				</div>
			</div>
		</div>

		<div class="row">
			<div class="col-lg-12">
				<?php
					if($_SESSION['user_type']==="hr")
						echo '<a href="edit.php?id='.$row['id'].'" class="btn btn-warning">编辑</a>
						<a href="evaluate.php?id='.$row['id'].'" class="btn btn-info">评价</a> <!-- 只有面试官能评价 -->
						<a href="setTime.php?id='.$row['id'].'" class="btn btn-primary">设定面试时间</a>
						<a href="API/getDelete.php?id='.$row['id'].'" class="btn btn-danger">删除</a>
						';
					else if ($_SESSION['user_type']==="dataentry") {
						echo '<a href="edit.php?id='.$row['id'].'" class="btn btn-warning">编辑</a>
						<a href="setTime.php?id='.$row['id'].'" class="btn btn-primary">设定面试时间</a>
						<a href="API/getDelete.php?id='.$row['id'].'" class="btn btn-danger">删除</a>';
					}
					else {
						session_destroy();
						header('Location:login.php');
				}
				 ?>
			</div>
		</div>
	</div>

<footer>
    <div class="row">
        <div class="col-lg-12">
            <hr/>
            <p style="text-align:center">&copy; <a href="##" rel="nofollow">Company</a>2016.</p><!--连到公司网站-->

        </div>
    </div>
</footer>

</div>



<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>

</body>
</html>
