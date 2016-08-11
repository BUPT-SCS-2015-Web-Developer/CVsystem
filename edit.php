<?php
	session_start();
	if(!isset($_SESSION['username'])||!isset($_SESSION['type'])){
		exit('illegal access!');
	}
	else if($_SESSION['type']!="admin")
		exit('illegal access!');

	include_once "API/db_config.php";

	$id = $_POST['id'];
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
    <link rel="stylesheet" href="css/bootstrap.min.css" media="screen">
    <link rel="stylesheet" href="skins/eden.css" media="screen">
    <link href="css/useso.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
    <link href="css/input.css" rel="stylesheet">

    <style>
        .navbar-holder-dark{
            padding: 20px 20px 200px 20px;
            background: #333333;
        }
    </style>

	<script type="text/javascript" src="js/jquery.min.js"></script>
	<script type="text/javascript" src="js/jquery.jeditable.js"></script>
	<script>
		$(function(){
			$('.edit').editable('API/save.php?idbig=<?php echo $id; ?>', {
				width     :450,
				height    :25,
				cancel    : '取消',
				submit    : '确定',
				tooltip   : '单击可以编辑...'
			});
		});
	</script>
</head>

<body>
<!-- 导航-->
	<?php include_once("API/header.php") ?>



<div class="container">

<br><br><br>
	<div class="col-md-12">
		<div>
<?php
	$sql = "SELECT * FROM `cvinformation` WHERE ID='$id' ";//查询语句
	mysql_query("set names utf8");
	$result = mysql_query($sql,$con) or die("查询失败！错误是：".mysql_error());
	$row = mysql_fetch_array($result);

?>
            <h1 class="mb-2">编辑信息</h1>
                <!-- $STRIPED TABLE -->
                <!-- ========================================= -->
                <table class="table table-striped table-responsive">
                    <thead>
                    <tr>
                        <th>项目</th>
                        <th>Value(点击以编辑）</th>

                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>姓名</td>
                        <td class="edit" id="name"><?php echo $row["name"];?></td>
                    </tr>
                    <tr>
                        <td>性别</td>
                        <td class="edit" id="gender"><?php echo $row["gender"];?></td>
                    </tr>
                    <tr>
                        <td>应聘科目</td>
                        <td class="edit" id="subject"><?php echo $row["subject"];?></td>
                    </tr>
					<tr>
                        <td>本科学校（全称）</td>
                        <td class="edit" id="university"><?php echo $row["university"];?></td>
                    </tr>
					<tr>
                        <td>本科专业</td>
                        <td class="edit" id="major"><?php echo $row["major"];?></td>
                    </tr>
					<tr>
                        <td>硕/博学校（全称）</td>
                        <td class="edit" id="college"><?php echo $row["college"];?></td>
                    </tr>
					<tr>
                        <td>最高学历</td>
                        <td class="edit" id="education"><?php echo $row["education"];?></td>
                    </tr>
					<tr>
                        <td>手机号</td>
                        <td class="edit" id="phone"><?php echo $row["phone"];?></td>
                    </tr>
					<tr>
                        <td>邮箱</td>
                        <td class="edit" id="email"><?php echo $row["email"];?></td>
                    </tr>
					<tr>
                        <td>分校</td>
                        <td class="edit" id="schoolnum"><?php echo $row["schoolnum"];?></td>
                    </tr>
					<tr>
                        <td>申请职位性质</td>
                        <td class="edit" id="position"><?php echo $row["position"];?></td>
                    </tr>

		<?php if($_SESSION['type']=='interviewer'){ ?>
			<?php if($row["result1"]){?>
					<tr>
                        <td>面谈（一面）结果</td>
                        <td class="edit" id="result1"><?php echo $row["result1"];?></td>
                    </tr>
			<?php } ?>
			<?php if($row["time2"]){?>
					<tr>
                        <td>初试（二面）时间</td>
                        <td class="edit" id="time2"><?php echo $row["time2"];?></td>
                    </tr>
			<?php } ?>
			<?php if($row["remark2"]){?>
					<tr>
                        <td>二面评价</td>
                        <td class="edit" id="remark2"><?php echo $row["remark2"];?></td>
                    </tr>
			<?php } ?>
			<?php if($row["result2"]){?>
					<tr>
                        <td>二面结果</td>
                        <td class="edit" id="result2"><?php echo $row["result2"];?></td>
                    </tr>
			<?php } ?>
			<?php if($row["time3"]){?>
					<tr>
                        <td>复试指导（三面）时间</td>
                        <td class="edit" id="time3"><?php echo $row["time3"];?></td>
                    </tr>
			<?php } ?>
			<?php if($row["remark3"]){?>
					<tr>
                        <td>三面评价</td>
                        <td class="edit" id="remark3"><?php echo $row["remark3"];?></td>
                    </tr>
			<?php } ?>
			<?php if($row["result3"]){?>
					<tr>
                        <td>复试指导（三面）结果</td>
                        <td class="edit" id="result3"><?php echo $row["result3"];?></td>
                    </tr>
			<?php } ?>
			<?php if($row["time4"]){?>
					<tr>
                        <td>复试（四面）时间</td>
                        <td class="edit" id="time4"><?php echo $row["time4"];?></td>
                    </tr>
			<?php } ?>
			<?php if($row["result4"]){?>
					<tr>
                        <td>复试（四面）结果</td>
                        <td class="edit" id="result4"><?php echo $row["result4"];?></td>
                    </tr>
            <?php } ?>
		<?php } ?> <!--  对应if是面试官   -->
                    </tbody>
                </table>
        </div>
    </div>
	<a href="detail.php?id=<?php echo $id; ?>" class="btn btn-primary">完成</a>

	<footer>
		<div class="row">
			<div class="col-lg-12">
				<hr/>
				<p>&copy; <a href="##" rel="nofollow">Company</a>2016.</p><!--连到公司网站-->

			</div>
		</div>
	</footer>
</div>

</body>
</html>
