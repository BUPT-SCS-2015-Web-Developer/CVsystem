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
                    <form class="form-horizontal" id="evaluate">
                        <fieldset>
                            <div class="container-fluid">
                                <div class="col-lg-4"></div>
                                <div class="col-lg-4" style="text-align:center;font-size:35px">面试评价</div>
                                <div class="col-lg-4" style="text-align:center;font-size:20px"><br/>面试人员:<br/><?php echo $row['name'];?></div>
                            </div>
                            <hr/>
                            <div class="container-fluid">
    							<div class="">
    								<label for="time2" class="control-label col-lg-2" style="font-size:20px">用户编号</label>
    								<div align="left" class="col-lg-9" data-date="" data-date-format="yyyy-mm-dd hh:00" data-link-field="dtp_input2" data-link-format="yyyy-mm-dd hh:00">
    									<input  style="BACKGROUND:#FFFFFF;height:40px" class="form-control" type="text" value="<?php echo $id;?>" id='id' readonly />

    								</div>
    							</div>
    						</div><br/>
                            <div class="container-fluid">
    							<div class="">
                                    <label for="result1" class="control-label col-lg-2" style="font-size:20px">一面结果</label>
                                    <div align="left" class="div controls input-append date form_date col-lg-9">
                                        <select id='result1' style="font-size:20px;height:40px" class="form-control">
                                            <option value="未评价" <?php if($row['result1']=="") echo "selected = 'selected'"; ?>>未评价</option>
                                            <option value="已通过" <?php if($row['result1']=="已通过") echo "selected = 'selected'"; ?>>已通过</option>
                                            <option value="未通过" <?php if($row['result1']=="未通过") echo "selected = 'selected'"; ?>>未通过</option>
                                        </select>
                                    </div>
                                </div>
                            </div><br/>
                            <div class="container-fluid">
                                <div class="">
                                    <label for="remark1" class="control-label col-lg-2" style="font-size:20px">一面评价</label>
                                    <div align="left" class="div controls input-append date form_date col-lg-9">
                                        <textarea style="BACKGROUND:#FFFFFF" rows=3 class="form-control" type="text" id ='remark1'><?php echo $row['remark1'];?></textarea>
                                        <span class="add-on"><i class="icon-th"></i></span>
                                    </div>
                                </div>
                            </div>
                            <hr/>
                            <div class="container-fluid">
    							<div class="">
                                    <label for="result2" class="control-label col-lg-2" style="font-size:20px">二面结果</label>
                                    <div align="left" class="div controls input-append date form_date col-lg-9">
                                        <select id='result2' style="font-size:20px;height:40px" class="form-control">
                                            <option value="未评价" <?php if($row['result2']=="") echo "selected = 'selected'"; ?>>未评价</option>
                                            <option value="已通过" <?php if($row['result2']=="已通过") echo "selected = 'selected'"; ?>>已通过</option>
                                            <option value="未通过" <?php if($row['result2']=="未通过") echo "selected = 'selected'"; ?>>未通过</option>
                                        </select>
                                    </div>
                                </div>
                            </div><br/>
                            <div class="container-fluid">
                                <div class="">
                                    <label for="remark2" class="control-label col-lg-2" style="font-size:20px">二面评价</label>
                                    <div align="left" class="div controls input-append date form_date col-lg-9">
                                        <textarea style="BACKGROUND:#FFFFFF" rows=3 class="form-control" type="text" id ='remark2'><?php echo $row['remark2'];?></textarea>
                                        <span class="add-on"><i class="icon-th"></i></span>
                                    </div>
                                </div>
                            </div>
                            <hr/>
                            <div class="container-fluid">
    							<div class="">
                                    <label for="result3" class="control-label col-lg-2" style="font-size:20px">三面结果</label>
                                    <div align="left" class="div controls input-append date form_date col-lg-9">
                                        <select id='result3' style="font-size:20px;height:40px" class="form-control">
                                            <option value="未评价" <?php if($row['result3']=="") echo "selected = 'selected'"; ?>>未评价</option>
                                            <option value="已通过" <?php if($row['result3']=="已通过") echo "selected = 'selected'"; ?>>已通过</option>
                                            <option value="未通过" <?php if($row['result3']=="未通过") echo "selected = 'selected'"; ?>>未通过</option>
                                        </select>
                                    </div>
                                </div>
                            </div><br/>
                            <div class="container-fluid">
                                <div class="">
                                    <label for="remark3" class="control-label col-lg-2" style="font-size:20px">三面评价</label>
                                    <div align="left" class="div controls input-append date form_date col-lg-9">
                                        <textarea style="BACKGROUND:#FFFFFF" rows=3 class="form-control" type="text" id ='remark3'><?php echo $row['remark3'];?></textarea>
                                        <span class="add-on"><i class="icon-th"></i></span>
                                    </div>
                                </div>
                            </div>
                            <hr/>
                            <div class="container-fluid">
    							<div class="">
                                    <label for="result4" class="control-label col-lg-2" style="font-size:20px">四面结果</label>
                                    <div align="left" class="div controls input-append date form_date col-lg-9">
                                        <select id='result4' style="font-size:20px;height:40px" class="form-control">
                                            <option value="未评价" <?php if($row['result4']=="") echo "selected = 'selected'"; ?>>未评价</option>
                                            <option value="已通过" <?php if($row['result4']=="已通过") echo "selected = 'selected'"; ?>>已通过</option>
                                            <option value="未通过" <?php if($row['result4']=="未通过") echo "selected = 'selected'"; ?>>未通过</option>
                                        </select>
                                    </div>
                                </div>
                            </div><br/>
                            <div class="container-fluid">
                                <div class="">
                                    <label for="remark4" class="control-label col-lg-2" style="font-size:20px">四面评价</label>
                                    <div align="left" class="div controls input-append date form_date col-lg-9">
                                        <textarea style="BACKGROUND:#FFFFFF" rows=3 class="form-control" type="text" id ='remark4'><?php echo $row['remark4'];?></textarea>
                                        <span class="add-on"><i class="icon-th"></i></span>
                                    </div>
                                </div>
                            </div>
                            <hr/>
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
<script src="js/evaluate.js"></script>

</body>
</html>
