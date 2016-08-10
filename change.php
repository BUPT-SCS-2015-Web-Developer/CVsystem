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
                <form class="form-horizontal">
                    <fieldset>
                        <legend>修改密码</legend>

                        <div class="form-group">
                            <label for="oldpass" class="col-lg-2 control-label">原始密码*</label>

                            <div class="col-lg-6">
                                <input type="text" class="form-control" id="oldpass" placeholder="" name="oldpass" data-validation-required-message="请输入原始密码." required>
								<p class="help-block"></p>
                            </div>
                        </div>
						<div class="form-group">
                            <label for="newpass" class="col-lg-2 control-label">新密码*</label>

                            <div class="col-lg-6">
                                <input type="text" class="form-control" id="newpass" placeholder="" name="newpass" data-validation-required-message="请输入新密码." required>
								<p class="help-block"></p>
                            </div>
                        </div>
						<div class="form-group">
                            <label for="queren" class="col-lg-2 control-label">新密码确认*</label>

                            <div class="col-lg-6">
                                <input type="text" class="form-control" id="queren" placeholder="" name="queren" data-validation-required-message="请确认新密码." required>
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
                            <div class="col-lg-6 col-lg-offset-2">
                                <button type="submit" class="btn btn-primary">提交</button>
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
