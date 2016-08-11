<?php

    session_start();
    if(!isset($_SESSION['user_ID']) || !isset($_SESSION['user_type']))
    {
        echo "<script language=javascript>alert('请先登录!');window.location.href='login.php';</script>";
        exit(0);
    }
	include_once "API/db_config.php";
	$id = $_GET['id'];
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

<?php

	$sql = "SELECT * FROM `cvinformation` WHERE ID='$id' ";//查询语句
	mysql_query("set names utf8");
	$result = mysql_query($sql,$con) or die("查询失败！错误是：".mysql_error());
	$row = mysql_fetch_array($result);

?>

    <div class="row">
        <div class="col-lg-12">
            <div class="well bs-component">
                <form class="form-horizontal" action="http://localhost/CVsystem/API/getevaluate.php ?id=<?php echo $id; ?>" method="post">
                    <fieldset>
                        <legend>评价</legend>

                         <!--                if一面结果为空          -->
						<?php if(!$row["result1"]){?>
                        <div class="form-group">
                            <label for="result1" class="col-lg-2 control-label">面谈（一面）结果</label>
                            <div class="col-lg-10">
                                <input type="text" class="form-control" id="result1" placeholder="通过 或 未通过" name="result1">
							</div>
                        </div>

						<?php } ?>
	                         <!--                          -->


    	                    <!--                if一面结果不为空  二面结果为空         -->
						<?php if($row["result1"]&&(!$row["result2"])){?>
                        <div class="form-group">
                            <label for="remark2" class="col-lg-2 control-label">初试（二面）评价</label>

                            <div class="col-lg-10">
                                <input type="text" class="form-control" id="remark2" placeholder="" name="remark2">
							</div>
                        </div>
                        <div class="form-group">
                            <label for="result2" class="col-lg-2 control-label">初试（二面）结果</label>
                            <div class="col-lg-10">
                                <input type="text" class="form-control" id="result2" placeholder="通过 或 未通过" name="result2">
							</div>
                        </div>

						<?php } ?>
                        <!--                                     -->



                        <!--                if二面结果不为空  三面结果为空         -->
                        <?php if($row["result2"]&&(!$row["result3"])){?>
						<div class="form-group">
                            <label for="remark3" class="col-lg-2 control-label">复试指导（三面）评价</label>

                            <div class="col-lg-10">
                                <input type="text" class="form-control" id="remark3" placeholder="" name="remark3">
							</div>
                        </div>
						<div class="form-group">
                            <label for="result3" class="col-lg-2 control-label">复试指导（三面）结果</label>

                            <div class="col-lg-10">
                                <input type="text" class="form-control" id="result3" placeholder="通过 或 未通过" name="result3">
							</div>
                        </div>

						<?php } ?>


                        <!--                if三面结果不为空  四面结果为空         -->
                        <?php if($row["result3"]&&(!$row["result4"])){?>
						<div class="form-group">
                            <label for="result4" class="col-lg-2 control-label">复试（四面）结果</label>

                            <div class="col-lg-10">
                                <input type="text" class="form-control" id="result4" placeholder="通过 或 未通过" name="result4">
							</div>
                        </div>
                        <?php } ?>
						<!--                                                 -->

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
                                <button type="reset" class="btn btn-default">重置</button>
                                <button type="submit" class="btn btn-primary">提交</button>
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



<script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/evaluate.js"></script>


</body>
</html>
