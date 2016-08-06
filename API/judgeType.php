<?php
    if(!isset($_POST['username']) || !isset($_POST['inputPassword']))
    {
        echo "<script language=javascript>alert('请先登录!');</script>";
        header("Location: index.php");
    }


 ?>
