<?php
    session_start();
    if(!isset($_SESSION['user_ID']) || !isset($_SESSION['user_type']))
    {
        echo "<script language=javascript>alert('请先登录!');window.location.href='login.php';</script>";
        exit(0);
    }
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
    <?php include_once("API/header.php"); ?>



<div class="container">

	<div class="bs-docs-section">
    <div class="row">
        <div class="col-lg-10">
            <div class="page-header">
                <h1 id="forms"></h1>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-10">
            <div class="well bs-component">
                <form class="form-horizontal" id="change">
                    <fieldset>
                        <legend>修改密码</legend>

                        <div class="form-group">
                            <label for="oldpass" class="col-lg-2 control-label">原始密码*</label>
                            <div class="col-lg-6">
                                <input class="form-control" id="oldpass" name="oldpass" data-validation-required-message="请输入原始密码." type="password" required>
                            </div>
                        </div>
						<div class="form-group">
                            <label for="newpass" class="col-lg-2 control-label">新密码*</label>

                            <div class="col-lg-6">
                                <input class="form-control" id="newpass" name="newpass" data-validation-required-message="请输入新密码." type="password" required>
                            </div>
                        </div>
						<div class="form-group">
                            <label for="queren" class="col-lg-2 control-label">新密码确认*</label>
                            <div class="col-lg-6">
                                <input class="form-control" id="queren" name="queren" data-validation-required-message="请确认新密码." type="password" required>
                            </div>
                        </div>

						<div class="form-group">
                            <div class="col-lg-6 col-lg-offset-2">
                                <input class="btn btn-primary" type="button" id="submit" value="提交">
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



<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/change.js"></script>

</body>
</html>
