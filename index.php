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
	<link rel="stylesheet" href="css/login.css">
    <style>
        .navbar-holder-dark{
            padding: 20px 20px 200px 20px;
            background: #333333;
        }
    </style>
</head>
<body>
    <?php include("API/header.php"); ?>
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
    						            <h3>系统说明</h3>
                						<p>欢迎使用公司简历录入及管理系统</p>
    						            <?php
                                        if($_SESSION['user_type']==="hr")
                                            echo "<p>您好，Hr！本账号可进行面试者录入及修改，以及面试时间的录入和评价！</p>";
                                        else if ($_SESSION['user_type']==="dataentry") {
                                            echo "<p>您好，本账号可以进行面试人员信息的录入及修改操作！</p>";
                                        }
                                        else {
                                            session_destroy();
                                            header('Location:login.php');
                                        }
                                        ?>
    					          </div>
    				        </div>
    		        </div>

                    <br/><br/><br/>
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
