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
              <li class="active"><a href="view.php">信息查询</a></li>
              <li><a href="input.php">信息录入</a></li>
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
	
	  
	  <div class="col-md-6">
          <table class="table table-striped">
            <thead>
			
              <tr>
                <th>编号</th>
                <th>姓名</th>
                <th>一面</th>
                <th>二面</th>
				<th>三面</th>
				<th>四面</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th>000001</th>
                <th>阿尔法狗</th>
                <th>通过</th>
                <th>通过</th>
				<th>通过</th>
				<th>通过</th>
				<th><a href="detail.php?编号">详情</a></th>
				<th><a href="edit.php?编号">编辑</a></th>
				<th><a href="delete.php?编号">删除</a></th>
              </tr>
              <tr>
                <th>000002</th>
                <th>柯洁</th>
                <th>通过</th>
                <th>通过</th>
				<th>通过</th>
				<th>通过</th>
				<th><a href="detail.php?编号">详情</a></th>
				<th><a href="edit.php?编号">编辑</a></th>
				<th><a href="delete.php?编号">删除</a></th>
              </tr>
              <tr>
                <th>000003</th>
                <th>李在石</th>
                <th>未通过</th>
                <th>未通过</th>
				<th>未通过</th>
				<th>未通过</th>
				<th><a href="detail.php?编号">详情</a></th>
				<th><a href="edit.php?编号">编辑</a></th>
				<th><a href="delete.php?编号">删除</a></th>
              </tr>
            </tbody>
          </table>
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
