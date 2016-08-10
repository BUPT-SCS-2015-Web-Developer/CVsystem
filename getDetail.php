<?php
	session_start();
	if(!isset($_SESSION['username'])||!isset($_SESSION['type'])){
		exit('illegal access!');
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

					<div class="panel panel-default">
						<div class="panel-heading">面谈（一面）结果</div>
						<div class="panel-body">
							<?php
								if($row["result1"]!=NULL)
									echo $row['result1'];
								else
									echo "未评价";
							?>
						</div>
					</div>
					<div class="panel panel-default">
						<div class="panel-heading">二面时间</div>
						<div class="panel-body">
							<?php
								if($row["time2"]!=NULL)
									echo $row['time2'];
								else
									echo "未设定";
							?>
						</div>
					</div>
					<div class="panel panel-default">
						<div class="panel-heading">二面结果</div>
						<div class="panel-body">
							<?php
								if($row["result2"]!=NULL)
									echo $row['result2'];
								else
									echo "未评价";
							?>
						</div>
					</div>
					<div class="panel panel-default">
						<div class="panel-heading">二面评价</div>
						<div class="panel-body">
							<?php
								if($row["remark2"]!=NULL)
									echo $row['remark2'];
								else
									echo "未评价";
							?>
						</div>
					</div>
					<div class="panel panel-default">
						<div class="panel-heading">三面时间</div>
						<div class="panel-body">
							<?php
								if($row["time3"]!=NULL)
									echo $row['time3'];
								else
									echo "未设定";
							?>
						</div>
					</div>
					<div class="panel panel-default">
						<div class="panel-heading">三面结果</div>
						<div class="panel-body">
							<?php
								if($row["result3"]!=NULL)
									echo $row['result3'];
								else
									echo "未评价";
							?>
						</div>
					</div>
					<div class="panel panel-default">
						<div class="panel-heading">三面评价</div>
						<div class="panel-body">
							<?php
								if($row["remark3"]!=NULL)
									echo $row['remark3'];
								else
									echo "未评价";
							?>
						</div>
					</div>
					<div class="panel panel-default">
						<div class="panel-heading">四面时间</div>
						<div class="panel-body">
							<?php
								if($row["time4"]!=NULL)
									echo $row['time4'];
								else
									echo "未设定";
							?>
						</div>
					</div>
					<div class="panel panel-default">
						<div class="panel-heading">四面结果</div>
						<div class="panel-body">
							<?php
								if($row["result4"]!=NULL)
									echo $row['result4'];
								else
									echo "未评价";
							?>
						</div>
					</div>


                    <a href="edit.php?id=<?php echo $id; ?>" class="btn btn-info">编辑</a> <!-- 编辑 -->
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



<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>

</body>
</html>
