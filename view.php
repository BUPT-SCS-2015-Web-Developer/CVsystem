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
    <!-- DataTables CSS -->
    <link rel="stylesheet" type="text/css" href="css/jquery.dataTables.css">

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
<!--
                <form class="navbar-form navbar-left" role="search">
                    <div class="form-group">
                          <input class="form-control" placeholder="Search" type="text">
                    </div>
                    <button type="submit" class="btn btn-primary">搜索</button>
                </form>
-->
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="#">联系站务</a></li>
                </ul>
            </div>
        </div>
    </div>
<!--==============================正文部分=======================================-->
    <div class="container">
        <br/><br/>
        <h2>信息查询</h2>
        <hr/>
        <table id="example" class="display">
            <thead>
                <tr>
                    <th>序号</th>
                    <th>姓名</th>
                    <th>性别</th>
                    <th>一面</th>
                    <th>二面</th>
                    <th>三面</th>
                    <th>四面</th>
                    <th>操作</th>
                </tr>
            </thead>
            <tbody></tbody>
        </table>

    </div>

    <!-- jQuery -->
    <script type="text/javascript" charset="utf8" src="js/jquery.js"></script>
    <!-- DataTables -->
    <script type="text/javascript" charset="utf8" src="js/jquery.dataTables.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script type="text/javascript">
    var data = [
    [
        "2015211000",
        "Sissel",
        "男",
        "一面通过",
        "二面未进行",
        "三面未进行",
        "四面未进行"
    ],
    [
      "2015211001",
      "Missile",
      "男",
      "一面通过",
      "二面未通过",
      "三面未进行",
      "四面未进行"
    ]
];
    $(document).ready( function(){ $('#example').DataTable( {
    data: data
} );
    } );
/*    $('#example').dataTable( {
  "serverSide": true,
  "ajax": "xhr.php"
} );*/
    </script>
</body>
</html>
