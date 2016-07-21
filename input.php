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
                    <li><a href="view.php" >信息查询</a></li>
                    <li  class="active"><a href="input.php" >信息录入</a></li>
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

    <div class="row">
        <div class="col-lg-12">
            <div class="well bs-component">
                <form class="form-horizontal">
                    <fieldset>
                        <legend>信息录入</legend>

                        <div class="form-group">
                            <label for="name" class="col-lg-2 control-label">姓名*</label>

                            <div class="col-lg-10">
                                <input type="text" class="form-control" id="name" placeholder="" name="name" data-validation-required-message="请输入姓名." required>
								<p class="help-block"></p>
                            </div>
                        </div>
						<div class="form-group">
                            <label for="gender" class="col-lg-2 control-label">性别*</label>

                            <div class="col-lg-10">
                                <input type="text" class="form-control" id="gender" placeholder="" name="gender" data-validation-required-message="请输入性别." required>
								<p class="help-block"></p>
                            </div>
                        </div>
						<div class="form-group">
                            <label for="subject" class="col-lg-2 control-label">应聘科目*</label>

                            <div class="col-lg-10">
                                <input type="text" class="form-control" id="subject" placeholder="" name="subject" data-validation-required-message="请输入应聘科目." required>
								<p class="help-block"></p>
                            </div>
                        </div>
						<div class="form-group">
                            <label for="university" class="col-lg-2 control-label">本科学校（全称）*</label>

                            <div class="col-lg-10">
                                <input type="text" class="form-control" id="university" placeholder="" name="university" data-validation-required-message="请输入本科学校." required>
								<p class="help-block"></p>
                            </div>
                        </div>
						<div class="form-group">
                            <label for="major" class="col-lg-2 control-label">本科专业*</label>

                            <div class="col-lg-10">
                                <input type="text" class="form-control" id="major" placeholder="" name="major" data-validation-required-message="请输入本科专业." required>
								<p class="help-block"></p>
                            </div>
                        </div>
						<div class="form-group">
                            <label for="college" class="col-lg-2 control-label">硕/博学校（全称）*</label>

                            <div class="col-lg-10">
                                <input type="text" class="form-control" id="college" placeholder="" name="college" data-validation-required-message="请输入硕博学校." required>
								<p class="help-block"></p>
                            </div>
                        </div>
						<div class="form-group">
                            <label for="education" class="col-lg-2 control-label">最高学历*</label>

                            <div class="col-lg-10">
                                <input type="text" class="form-control" id="education" placeholder="" name="education" data-validation-required-message="请输入最高学历." required>
								<p class="help-block"></p>
                            </div>
                        </div>
						<div class="form-group">
                            <label for="phone" class="col-lg-2 control-label">手机号*</label>

                            <div class="col-lg-10">
                                <input type="text" class="form-control" id="phone" placeholder="" name="phone" data-validation-required-message="请输入手机号." required>
								<p class="help-block"></p>
                            </div>
                        </div>
						<div class="form-group">
                            <label for="email" class="col-lg-2 control-label">邮箱*</label>

                            <div class="col-lg-10">
                                <input type="text" class="form-control" id="email" placeholder="" name="email" data-validation-required-message="请输入邮箱." required>
								<p class="help-block"></p>
                            </div>
                        </div>
						<div class="form-group">
                            <label for="schoolnum" class="col-lg-2 control-label">分校*</label>

                            <div class="col-lg-10">
                                <input type="text" class="form-control" id="schoolnum" placeholder="" name="schoolnum" data-validation-required-message="请输入分校." required>
								<p class="help-block"></p>
                            </div>
                        </div>
						<div class="form-group">
                            <label for="position" class="col-lg-2 control-label">申请职位性质*</label>

                            <div class="col-lg-10">
                                <input type="text" class="form-control" id="position" placeholder="" name="position" data-validation-required-message="请输入申请职位性质." required>
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
                                <button type="reset" class="btn btn-default">重置</button>
                                <button type="submit" class="btn btn-primary">提交</button>
                            </div>
                        </div>
                    </fieldset>
                </form>
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
<script src="js/input.js"></script>


</body>
</html>
