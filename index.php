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
    <!-- Containers
    ================================================== -->
        <div class="bs-docs-section">
    		    <div class="row">
    			      <div class="col-lg-12">
    			          <div class="page-header">
    					          <h1 id="container"></h1>
    				        </div>
    				        <div class="bs-component">
    					          <div class="jumbotron">
    						            <h1>公司简介</h1>
                						<p>balabalabalabala巴拉拉拉拉拉拉我们是茄子开发团队.</p>
    						            <p><a class="btn btn-primary btn-lg">Learn more</a></p>
    					          </div>
    				        </div>
    		        </div>


    			      <div class="col-lg-6">
    				        <div class="well bs-component">
                        <form class="form-horizontal">
                            <div class="form-group">
                                <label for="username" class="col-lg-2 control-label">用户名</label>
                                <div class="col-lg-4">
                                    <input class="form-control" id="username" placeholder="请输入用户名" type="text">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputPassword" class="col-lg-2 control-label">密码</label>
                                <div class="col-lg-4">
                                    <input class="form-control" id="inputPassword" placeholder="请输入密码" type="password">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-lg-4 col-lg-offset-2">
                                    <button type="submit" class="btn btn-primary">提交</button>
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
</body>
</html>
