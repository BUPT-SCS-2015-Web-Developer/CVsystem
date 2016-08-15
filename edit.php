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
    <link rel="stylesheet" href="css/bootstrap.min.css" media="screen">
    <link rel="stylesheet" href="skins/eden.css" media="screen">
    <link href="css/useso.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
    <link href="css/insert.css" rel="stylesheet">

    <style>
        .navbar-holder-dark{
            padding: 20px 20px 200px 20px;
            background: #333333;
        }
    </style>

</head>
<body>
<?php include("API/header.php"); ?>
<div class="container">

	<!-- Forms
================================================== -->
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
            <div class="well bs-component">
                <form class="form-horizontal" id="edit">
                    <fieldset>
                        <legend align="center">信息修改</legend>

						<div class="form-group">
							<label for="id" class="col-lg-2 control-label">ID*</label>

							<div class="col-lg-10">
								<input type="text" class="form-control" id="id" placeholder="" name="id" data-validation-required-message="请输入姓名." value="<?php echo $id?>" readonly>
								<p class="help-block"></p>
							</div>
						</div>
                        <div class="form-group">
                            <label for="name" class="col-lg-2 control-label">姓名*</label>

                            <div class="col-lg-10">
                                <input type="text" class="form-control" id="name" placeholder="" name="name" data-validation-required-message="请输入姓名." value="<?php echo $row['name']?>" required>
								<p class="help-block"></p>
                            </div>
                        </div>
						<div class="form-group">
                            <label for="gender" class="col-lg-2 control-label">性别*</label>

                            <div class="col-lg-10">
                                <input type="text" class="form-control" id="gender" placeholder="" name="gender" data-validation-required-message="请输入性别." value="<?php echo $row['gender']?>" required>
								<p class="help-block"></p>
                            </div>
                        </div>
						<div class="form-group">
                            <label for="subject" class="col-lg-2 control-label">应聘科目*</label>

                            <div class="col-lg-10">
                                <input type="text" class="form-control" id="subject" placeholder="" name="subject" data-validation-required-message="请输入应聘科目." value="<?php echo $row['subject']?>" required>
								<p class="help-block"></p>
                            </div>
                        </div>
						<div class="form-group">
                            <label for="university" class="col-lg-2 control-label">本科学校（全称）*</label>

                            <div class="col-lg-10">
                                <input type="text" class="form-control" id="university" placeholder="" name="university" data-validation-required-message="请输入本科学校." value="<?php echo $row['university']?>" required>
								<p class="help-block"></p>
                            </div>
                        </div>
						<div class="form-group">
                            <label for="major" class="col-lg-2 control-label">本科专业*</label>

                            <div class="col-lg-10">
                                <input type="text" class="form-control" id="major1" placeholder="" name="major1" data-validation-required-message="请输入本科专业." value="<?php echo $row['major1']?>" required>
								<p class="help-block"></p>
                            </div>
                        </div>
						<div class="form-group">
                            <label for="college" class="col-lg-2 control-label">硕/博学校（全称）</label>

                            <div class="col-lg-10">
                                <input type="text" class="form-control" id="college" placeholder="" name="college" data-validation-required-message="请输入硕博学校." value="<?php echo $row['college']?>" required>
								<p class="help-block"></p>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="major2" class="col-lg-2 control-label">硕/博专业</label>
                            <div class="col-lg-10">
                                <input type="text" class="form-control" id="major2" placeholder="" name="major2" data-validation-required-message="请输入硕/博专业." value="<?php echo $row['major2']?>" required>
								<p class="help-block"></p>
                            </div>
                        </div>
						<div class="form-group">
                            <label for="education" class="col-lg-2 control-label">最高学历*</label>

                            <div class="col-lg-10">
                                <input type="text" class="form-control" id="education" placeholder="" name="education" data-validation-required-message="请输入最高学历." value="<?php echo $row['education']?>" required>
								<p class="help-block"></p>
                            </div>
                        </div>
						<div class="form-group">
                            <label for="phone" class="col-lg-2 control-label">手机号*</label>

                            <div class="col-lg-10">
                                <input type="text" class="form-control" id="phone" placeholder="" name="phone" data-validation-required-message="请输入手机号." value="<?php echo $row['phone']?>" required>
								<p class="help-block"></p>
                            </div>
                        </div>
						<div class="form-group">
                            <label for="email" class="col-lg-2 control-label">邮箱*</label>

                            <div class="col-lg-10">
                                <input type="text" class="form-control" id="email" placeholder="" name="email" data-validation-required-message="请输入邮箱." value="<?php echo $row['email']?>" required>
								<p class="help-block"></p>
                            </div>
                        </div>
						<div class="form-group">
                            <label for="schoolnum" class="col-lg-2 control-label">分校*</label>

                            <div class="col-lg-10">
                                <input type="text" class="form-control" id="schoolnum" placeholder="" name="schoolnum" data-validation-required-message="请输入分校." value="<?php echo $row['schoolnum']?>" required>
								<p class="help-block"></p>
                            </div>
                        </div>
						<div class="form-group">
                            <label for="position" class="col-lg-2 control-label">申请职位性质*</label>

                            <div class="col-lg-10">
                                <input type="text" class="form-control" id="position" placeholder="" name="position" data-validation-required-message="请输入申请职位性质." value="<?php echo $row['position']?>" required>
								<p class="help-block"></p>
                            </div>
                        </div>

                        <div class="bs-component" id="subErr">
							<div class="alert alert-dismissible alert-warning">
								<button type="button" class="close" data-dismiss="alert">&times;</button>
								<h4>警告</h4>
								<p> 连接服务器失败,请 <a href="#" class="alert-link">联系站务</a>.</p>
							</div>
						</div>
						<div class="bs-component" id="subSuc">
							<div class="alert alert-dismissible alert-success">
								<button type="button" class="close" data-dismiss="alert">&times;</button>
								<h4>提交成功!</h4>
								<p> 将于几秒后跳转.</p>
							</div>
						</div>



                        <div class="form-group">
                            <div class="col-lg-10 col-lg-offset-2">
                                <input type="button" id="submit" class="btn btn-primary" value="提交"/>
                                <button type="reset" class="btn btn-default">重置</button>
                            </div>
                        </div>
                    </fieldset>
                </form>
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



<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/edit.js"></script>


</body>
</html>
