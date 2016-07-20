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
<!--    <link href="http://libs.useso.com/js/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">  -->
    <link href="css/animate.css" rel="stylesheet">

    <!-- DataTables CSS -->
    <link rel="stylesheet" type="text/css" href="css/jquery.dataTables.css">

    <!-- jQuery -->
    <script type="text/javascript" charset="utf8" src="js/jquery.js"></script>

    <!-- DataTables -->
    <script type="text/javascript" charset="utf8" src="js/jquery.dataTables.js"></script>



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

<br/><br/><br/>
<div class="container">
    <h1>kkkkkk</h1>
    <hr/>
<table id="table_id" class="display">
    <thead>
        <tr>
            <th>Column 1</th>
            <th>Column 2</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>Row 1 Data 1</td>
            <td>Row 1 Data 2</td>
        </tr>
        <tr>
            <td>Row 2 Data 1</td>
            <td>Row 2 Data 2</td>
        </tr>
    </tbody>
</table>


<script type="text/javascript">
$(document).ready( function () {
  $('#table_id').DataTable();
} );
</script>













    <footer>
        <div class="row">
            <div class="col-lg-12">
                <hr/>
                <p>&copy; <a href="##" rel="nofollow">Company</a>2016.</p><!--连到公司网站-->

            </div>
        </div>

    </footer>

</div>




<!--  <script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
  <script src="js/bootstrap.min.js"></script>-->
</body>
</html>
