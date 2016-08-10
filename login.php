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
	<link rel="stylesheet" href="css/login.css">
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
    <!-- Containers
    ================================================== -->
        <div class="bs-docs-section">
    		    <div class="row">
                    <br/><br/><br/>
    			    <div class="col-lg-12">
    				    <div class="well bs-component">
							<form class="form-horizontal login-form" id="login">
								<span id="login-info" class="login-error-message">登录失败，请重试！</span>
								<div class="form-group">
									<label for="username" class="col-lg-4 control-label">用户名</label>
									<div class="col-lg-8">
										<input class="form-control" id="username" name="username" placeholder="请输入用户名" type="text">
										<span id="erroru" class="error-message">用户名不能为空！</span>
									</div>
								</div>
								<div class="form-group">
									<label for="inputPassword" class="col-lg-4 control-label">密码</label>
									<div class="col-lg-8">
										<input class="form-control" id="inputPassword" name="inputPassword" placeholder="请输入密码" type="password">
										<span id="errorp" class="error-message">密码不能为空！</span>
									</div>
								</div>
								<div class="form-group">
									<div class="col-lg-5 col-lg-offset-4">
										<input class="btn btn-primary" type="button" id="submit" value="登录">
										<button type="reset" class="btn btn-default">重置</button>
									</div>
								</div>
							</form>
    				    </div>
    			    </div>

                <footer>
                    <div class="row">
                        <div class="col-lg-12" align="center">
                            <hr/>
                            <p>&copy; <a href="##" rel="nofollow">Company</a>2016.</p><!--连到公司网站-->
                        </div>
                    </div>
                </footer>

            </div>
        </div>
    </div>

    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/login.js"></script>
</body>
</html>
