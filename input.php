<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>XX公司XX系统</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Le styles -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">
	
    <style type="text/css">
      body {
        padding-top: 60px;
        padding-bottom: 40px;
      }
    </style>
    <link href="assets/css/bootstrap-responsive.css" rel="stylesheet">
    
  </head>

  <body>

    <div class="navbar navbar-inverse navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container">
          <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="brand" href="#公司网站" >XX公司</a>
          <div class="nav-collapse collapse">
            <ul class="nav">
              <li><a href="index.php">网站首页</a></li>
              <li><a href="view.php">信息查询</a></li>
              <li class="active"><a href="input.php">信息录入</a></li>
              <li><a href="logout.php">退出登录</a></li>
              <li><a href="change.php">修改密码</a></li>
            </ul>
            <form action="##" class="navbar-form pull-right" rol="search">
              <div class="form-group">
				<input type="text" class="form-control" placeholder="请输入关键词" />
				<button type="submit" class="btn btn-default">搜索</button>
			  </div>
              
            </form>
          </div><!--/.nav-collapse -->
        </div>
      </div>
    </div>

    <div class="container">
	  <div class="well bs-component">
	<form class="form-horizontal" novalidate >
		<fieldset>
			<legend>信息录入</legend>
			
			<div class="form-group control-group">
					<label for="time" class="col-lg-2 control-label">简历填写时间*</label>
					<div class="col-lg-10">
						<div class="controls">
							<input type="date" class="form-control" id="time" placeholder="" name="time" data-validation-required-message="请输入简历填写时间." required>
							<p class="help-block"></p>
						</div>
						
					</div>
				</div>
			<div class="form-group control-group">
					<label for="name" class="col-lg-2 control-label">姓名*</label>
					<div class="col-lg-10">
						<div class="controls">
							<input type="text" class="form-control" id="name" placeholder="" name="name" data-validation-required-message="请输入姓名." required>
							<p class="help-block"></p>
						</div>
						
					</div>
				</div>
			<div class="form-group control-group">
					<label for="gender" class="col-lg-2 control-label">性别*</label>
					<div class="col-lg-10">
						<div class="controls">
							<input type="text" class="form-control" id="gender" placeholder="" name="gender" data-validation-required-message="请输入性别." required>
							<p class="help-block"></p>
						</div>
					</div>
				</div>
			<div class="form-group control-group">
					<label for="subject" class="col-lg-2 control-label">应聘科目*</label>
					<div class="col-lg-10">
						<div class="controls">
							<input type="text" class="form-control" id="subject" placeholder="" name="subject" data-validation-required-message="请输入应聘科目." required>
							<p class="help-block"></p>
						</div>
					</div>
				</div>
			<div class="form-group control-group">
					<label for="university" class="col-lg-2 control-label">本科学校（全称）*</label>
					<div class="col-lg-10">
						<div class="controls">
							<input type="text" class="form-control" id="university" placeholder="" name="university" data-validation-required-message="请输入本科学校." required>
							<p class="help-block"></p>
						</div>
					</div>
				</div>
			<div class="form-group control-group">
					<label for="major" class="col-lg-2 control-label">本科专业*</label>
					<div class="col-lg-10">
						<div class="controls">
							<input type="text" class="form-control" id="major" placeholder="" name="major" data-validation-required-message="请输入本科专业." required>
							<p class="help-block"></p>
						</div>
					</div>
				</div>
			<div class="form-group control-group">
					<label for="univer" class="col-lg-2 control-label">硕/博学校（全称）*</label>
					<div class="col-lg-10">
						<div class="controls">
							<input type="text" class="form-control" id="univer" placeholder="" name="univer" data-validation-required-message="请输入硕博学校." required>
							<p class="help-block"></p>
						</div>
					</div>
				</div>
			<div class="form-group control-group">
					<label for="education" class="col-lg-2 control-label">最高学历*</label>
					<div class="col-lg-10">
						<div class="controls">
							<input type="text" class="form-control" id="education" placeholder="" name="education" data-validation-required-message="请输入最高学历." required>
							<p class="help-block"></p>
						</div>
					</div>
				</div>
			<div class="form-group control-group">
					<label for="phone" class="col-lg-2 control-label">手机号*</label>
					<div class="col-lg-10">
						<div class="controls">
							<input type="text" class="form-control" id="phone" placeholder="" name="phone" data-validation-required-message="请输入手机号." required>
							<p class="help-block"></p>
						</div>
					</div>
				</div>
			<div class="form-group control-group">
					<label for="email" class="col-lg-2 control-label">邮箱*</label>
					<div class="col-lg-10">
						<div class="controls">
							<input type="text" class="form-control" id="email" placeholder="" name="email" data-validation-required-message="请输入邮箱." required>
							<p class="help-block"></p>
						</div>
					</div>
				</div>
			<div class="form-group control-group">
					<label for="schoolnum" class="col-lg-2 control-label">分校*</label>
					<div class="col-lg-10">
						<div class="controls">
							<input type="text" class="form-control" id="schoolnum" placeholder="" name="schoolnum" data-validation-required-message="请输入分校." required>
							<p class="help-block"></p>
						</div>
					</div>
				</div>
			<div class="form-group control-group">
					<label for="position" class="col-lg-2 control-label">申请职位性质*</label>
					<div class="col-lg-10">
						<div class="controls">
							<input type="text" class="form-control" id="position" placeholder="" name="position" data-validation-required-message="请输入申请职位性质." required>
							<p class="help-block"></p>
						</div>
					</div>
				</div>
			
			
			
			
			
			
			
			<div class="bs-component" id="subErr">
				<div class="alert alert-dismissible alert-warning">
					<button type="button" class="close" data-dismiss="alert">&times;</button>
					<h4>警告</h4>
					<p> 连接服务器失败,请 <a href="help.php" class="alert-link">联系站务</a>.</p>
				</div>
			</div>
			<div class="bs-component" id="subSuc">
				<div class="alert alert-dismissible alert-success">
					<button type="button" class="close" data-dismiss="alert">&times;</button>
					<h4>提交成功!</h4>
					<p> 将于几秒后跳转至 录入 页面.</p>
				</div>
			</div>
			<div class="form-group control-group">
				<div class="col-lg-10 col-lg-offset-2">
					<button type="reset" class="btn btn-default">重置</button>
					<button type="submit" class="btn btn-primary">提交</button>
				</div>
			</div>
			
		</fieldset>
	</form>
</div>
	  
	  
      <!-- Main hero unit for a primary marketing message or call to action -->
      

      <footer>
        <p>&copy; Company 2016</p>
      </footer>

    </div> <!-- /container -->

	
    <script src="http://libs.baidu.com/jquery/1.9.0/jquery.js"></script>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script> 
	
  </body>
</html>