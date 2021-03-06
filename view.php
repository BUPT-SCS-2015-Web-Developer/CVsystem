<?php
    session_start();
    if(!isset($_SESSION['user_ID']) || !isset($_SESSION['user_type']))
    {
        echo "<script language=javascript>alert('请先登录!');window.location.href='login.php';</script>";
        exit(0);
    }
?>
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
    <!-- DataTables CSS -->
    <link rel="stylesheet" type="text/css" href="css/jquery.dataTables.min.css">

    <style>
        .navbar-holder-dark{
            padding: 20px 20px 200px 20px;
            background: #333333;
        }
    </style>
</head>
<body>
<?php include("API/header.php"); ?>
<!--==============================正文部分=======================================-->
    <div class="container">
        <br/><br/>
        <h2>信息查询</h2>
        <hr/>
        <table id="sis" class="display">
            <thead>
                <tr>
                    <th style="width:35px">序号</th>
                    <th>姓名</th>
                    <th>性别</th>
                    <th>一面</th>
                    <th>二面</th>
                    <th>三面</th>
                    <th>四面</th>
                    <th>操作</th>
                </tr>
            </thead>

        </table>

    </div>

    <!-- jQuery -->
    <script type="text/javascript" charset="utf8" src="js/jquery.min.js"></script>
    <!-- DataTables -->
    <script type="text/javascript" charset="utf8" src="js/jquery.dataTables.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {
        $('#sis').dataTable( {
            "aoColumns": [
                {"sClass": "center"},
                {"sClass": "center"},
                {"sClass": "center"},
                {"sClass": "center"},
                {"sClass": "center"},
                {"sClass": "center"},
                {"sClass": "center"},
                {
                    "sClass": "center",
                    "createdCell": function (td, cellData, rowData, row, col) {
                        $(td).html("<a href='getDetail.php?id="+rowData[0]+
                        "'>编辑</a>&nbsp;&nbsp;");
                    }
                },
            ],
            "processing": true,
            "serverSide": true,
            "ajax": "API/serverProcessingCustom.php",
            "language": {
                "lengthMenu": "每页 _MENU_ 条记录",
                "zeroRecords": "没有找到记录",
                "info": "第 _PAGE_ 页 ( 总共 _PAGES_ 页 )",
                "infoEmpty": "无记录",
                "infoFiltered": "(从 _MAX_ 条记录过滤)",
                "search": "查找",
                "loadingRecords": "查找中"
        }});
    } );
    </script>
</body>
</html>
