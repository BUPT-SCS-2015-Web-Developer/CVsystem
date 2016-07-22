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
                    <li class="active"><a href="index.php">网站首页</a></li>
                    <li><a href="view.php" >信息查询</a></li>
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

    <div class="row">
        <div class="col-lg-12">
            <div class="well bs-component">
                <form class="form-horizontal">
                    <fieldset>
                        <legend>修改密码</legend>

                        <div class="form-group">
                            <label for="oldpass" class="col-lg-2 control-label">原始密码*</label>

                            <div class="col-lg-10">
                                <input type="text" class="form-control" id="oldpass" placeholder="" name="oldpass" data-validation-required-message="请输入原始密码." required>
								<p class="help-block"></p>
                            </div>
                        </div>
						<div class="form-group">
                            <label for="newpass" class="col-lg-2 control-label">新密码*</label>

                            <div class="col-lg-10">
                                <input type="text" class="form-control" id="newpass" placeholder="" name="newpass" data-validation-required-message="请输入新密码." required>
								<p class="help-block"></p>
                            </div>
                        </div>
						<div class="form-group">
                            <label for="confirm" class="col-lg-2 control-label">新密码确认*</label>

                            <div class="col-lg-10">
                                <input type="text" class="form-control" id="confirm" placeholder="" name="confirm" data-validation-required-message="请确认新密码." required>
								<p class="help-block"></p>
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

</body>
</html>
