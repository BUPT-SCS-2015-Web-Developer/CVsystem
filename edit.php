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
	
	<script type="text/javascript" src="js/jquery.js"></script> 
	<script type="text/javascript" src="js/jquery.jeditable.js"></script> 
	<script>
		$(function(){ 
			$('.edit').editable('API/save.php', {  
				width     :450, 
				height    :25, 
				cancel    : '取消', 
				submit    : '确定', 
				tooltip   : '单击可以编辑...' 
			}); 
		}); 
	</script>
</head>

<body>
<!-- 导航-->
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
                    <li  class="active"><a href="view.php" >信息查询</a></li>
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

<br><br><br>
	<div class="col-md-12">
		<div>
            <h1 class="mb-2">编辑信息</h1>
                <!-- $STRIPED TABLE -->
                <!-- ========================================= -->
                <table class="table table-striped table-responsive">
                    <thead>
                    <tr>
                        <th>Field</th>
                        <th>Value(点击以编辑）</th>
                        
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>姓名</td>
                        <td class="edit" id="name">Mark</td>   
                    </tr>
                    <tr>
                        <td>性别</td>
                        <td class="edit" id="gender">Mark</td>  
                    </tr>
                    <tr>
                        <td>应聘科目</td>
                        <td class="edit" id="subject">Mark</td>
                    </tr>
					<tr>
                        <td>本科学校（全称）</td>
                        <td class="edit" id="university">university</td>
                    </tr>
					<tr>
                        <td>本科专业</td>
                        <td class="edit" id="major">major</td>
                    </tr>
					<tr>
                        <td>硕/博学校（全称）</td>
                        <td class="edit" id="college">college</td>
                    </tr>
					<tr>
                        <td>最高学历</td>
                        <td class="edit" id="education">education</td>
                    </tr>
					<tr>
                        <td>手机号</td>
                        <td class="edit" id="phone">phone</td>
                    </tr>
					<tr>
                        <td>邮箱</td>
                        <td class="edit" id="email">email</td>
                    </tr>
					<tr>
                        <td>分校</td>
                        <td class="edit" id="schoolnum">schoolnum</td>
                    </tr>
					<tr>
                        <td>申请职位性质</td>
                        <td class="edit" id="position">position</td>
                    </tr>
					
	<!--                     if是面试官           －－－－－－－－－－－－－－－               -->
					<tr>
                        <td>面谈（一面）结果</td>
                        <td class="edit" id="result1">Mark</td>
                    </tr>
					<tr>
                        <td>初试（二面）时间</td>
                        <td class="edit" id="time2">Mark</td>
                    </tr>
					<tr>
                        <td>二面评价</td>
                        <td class="edit" id="remark2">Mark</td>
                    </tr>
					<tr>
                        <td>二面结果</td>
                        <td class="edit" id="result2">Mark</td>
                    </tr>
					<tr>
                        <td>复试指导（三面）时间</td>
                        <td class="edit" id="time3">Mark</td>
                    </tr>
					<tr>
                        <td>三面评价</td>
                        <td class="edit" id="remark3">Mark</td>
                    </tr>
					<tr>
                        <td>复试指导（三面）结果</td>
                        <td class="edit" id="result3">Mark</td>
                    </tr>
					<tr>
                        <td>复试（四面）时间</td>
                        <td class="edit" id="time4">Mark</td>
                    </tr>
					<tr>
                        <td>复试（四面）结果</td>
                        <td class="edit" id="result4">Mark</td>
                    </tr>
                    
   <!--                     if是面试官           －－－－－－－－－－－－－－－               -->
                    </tbody>
                </table>
        </div>
    </div>
	<a href="detail.php?id=<?php  ?>" class="btn btn-primary">完成</a>

	<footer>
		<div class="row">
			<div class="col-lg-12">
				<hr/>
				<p>&copy; <a href="##" rel="nofollow">Company</a>2016.</p><!--连到公司网站-->

			</div>
		</div>
	</footer>
</div>

</body>
</html>

