<?php
    session_start();
    if(!isset($_SESSION['user_ID']) || !isset($_SESSION['user_type']))
    {
        echo "<script language=javascript>alert('请先登录!');window.location.href='login.php';</script>";
        exit(0);
    }

    if (isset($_GET['id']))
		$id = addslashes($_GET['id']);//!!!
	else {
		die("请勿直接访问此页面！");
	}

	include_once("API/db_config.php");
	$db = new mysqli($db_host,$db_user,$db_password,$db_database);
	if (!$db)
	  {
	  die('Could not connect: ' . mysql_error());
	  }
      $sql_query = "SELECT * FROM `cvinformation` WHERE id = $id";//查询语句

    	if (!($result = $db->query($sql_query)))
    	{
    		die("未能查询到相关人员！");
    	}
    	$row = $result->fetch_array(MYSQLI_ASSOC);
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
    <link href="css/insert.css" rel="stylesheet">
    <link href="css/bootstrap-datetimepicker.min.css" rel="stylesheet" media="screen">
    <style>
        .navbar-holder-dark{
            padding: 20px 20px 200px 20px;
            background: #333333;
        }
    </style>

</head>
<body>
<?php include"API/header.php"; ?>
<br/><br/><br/><br/>

<div class="container">

	<!-- Forms
================================================== -->
    <div class="bs-docs-section">
        <div class="row">
            <div class="col-lg-12">
                <div class="well bs-component">
                    <form class="form-horizontal" id="settime">
                        <fieldset>
                            <div class="container-fluid">
                                <div class="col-lg-4"></div>
                                <div class="col-lg-4" style="text-align:center;font-size:35px">设定面试时间</div>
                                <div class="col-lg-4" style="text-align:center;font-size:20px">面试人员:<br/><?php echo $row['name'];?></div>
                            </div>
                            <hr/>
                            <div class="container-fluid">
    							<div class="">
    								<label for="time2" class="control-label col-lg-2" style="font-size:20px">用户ID</label>
    								<div align="left" class="col-lg-9" data-date="" data-date-format="yyyy-mm-dd hh:00" data-link-field="dtp_input2" data-link-format="yyyy-mm-dd hh:00">
    									<input  style="BACKGROUND:#FFFFFF;height:40px" class="form-control" type="text" value="<?php echo $id;?>" id='id' readonly />

    								</div>
    							</div>
    						</div><br/>
                            <div class="container-fluid">
                                <div class="">
                                    <label for="time1" class="control-label col-lg-2" style="font-size:20px">一面时间</label>
                                    <div align="left" class="div controls input-append date form_date col-lg-9" data-date="" data-date-format="yyyy-mm-dd_hh-00" data-link-field="dtp_input2" data-link-format="yyyy-mm-dd_hh:00">
                                        <input  style="BACKGROUND:#FFFFFF;height:40px" class="form-control" type="text" value="<?php if($row['time1']!=NULL) echo $row['time1']; else echo "未设定";?>" id ='time1' readonly />
                                        <span class="add-on"><i class="icon-th"></i></span>
                                    </div>
                                </div>
                            </div>
                            <br/>
                            <div class="container-fluid">
    							<div class="">
    								<label for="time2" class="control-label col-lg-2" style="font-size:20px">二面时间</label>
    								<div align="left" class="div controls input-append date form_date col-lg-9" data-date="" data-date-format="yyyy-mm-dd_hh-00" data-link-field="dtp_input2" data-link-format="yyyy-mm-dd_hh:00">
    									<input  style="BACKGROUND:#FFFFFF;height:40px" class="form-control" type="text" value="<?php if($row['time2']!=NULL) echo $row['time2']; else echo "未设定";?>" id ='time2' readonly />
    									<span class="add-on"><i class="icon-th"></i></span>
    								</div>
    							</div>
    						</div><br/>
                            <div class="container-fluid">
                                <div class="">
                                    <label for="time1" class="control-label col-lg-2" style="font-size:20px">三面时间</label>
                                    <div align="left" class="div controls input-append date form_date col-lg-9" data-date="" data-date-format="yyyy-mm-dd_hh-00" data-link-field="dtp_input2" data-link-format="yyyy-mm-dd_hh:00">
                                        <input  style="BACKGROUND:#FFFFFF;height:40px" class="form-control" type="text" value="<?php if($row['time3']!=NULL) echo $row['time3']; else echo "未设定";?>" id ='time3' readonly />
                                        <span class="add-on"><i class="icon-th"></i></span>
                                    </div>
                                </div>
                            </div><br/>
                            <div class="container-fluid">
                                <div class="">
                                    <label for="time2" class="control-label col-lg-2" style="font-size:20px">四面时间</label>
                                    <div align="left" class="div controls input-append date form_date col-lg-9" data-date="" data-date-format="yyyy-mm-dd_hh-00" data-link-field="dtp_input2" data-link-format="yyyy-mm-dd_hh:00">
                                        <input  style="BACKGROUND:#FFFFFF;height:40px" class="form-control" type="text" value="<?php if($row['time4']!=NULL) echo $row['time4']; else echo "未设定";?>" id ='time4' readonly />
                                        <span class="add-on"><i class="icon-th"></i></span>
                                    </div>
                                </div>
                            </div>
                            <br/>
                            <div class="form-group">
                                <div class="col-lg-10 col-lg-offset-9 col-md-offset-9">
                                    <input type="button" id="submit" class="btn btn-primary " value="提交"/>
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
                <p style="text-align:center">&copy; <a href="##" rel="nofollow">Company</a>2016.</p><!--连到公司网站-->

            </div>
        </div>
    </footer>

</div>



<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/setTime.js"></script>
<script type="text/javascript" src="js/bootstrap-datetimepicker.js" charset="UTF-8"></script>
<script>
    //datetimepicker 参数
    $('.form_date').datetimepicker
    ({
        language:  'zh',
        weekStart: 1,
        todayBtn:  1,
    autoclose: 1,
    todayHighlight: 1,
    startView: 2,
    minView: 1,
    forceParse: 0
    });
</script>

</body>
</html>
