<?php
$db = new mysqli("localhost","root","toor","cvsystem");
$i=4;
while($i<=15000)
{
$insertSQL = "INSERT INTO `cvinformation` (`id`, `name`, `gender`, `subject`, `university`, `major`, `college`, `education`, `phone`, `email`, `schoolnum`, `position`, `result1`, `result2`, `result3`, `result4`, `remark1`, `remark2`, `remark3`, `remark4`, `registerTime`, `registerBy`) VALUES ('$i', '$i', '$i', '$i', '$i', '$i', '$i', '$i', '$i', '$i', '$i', '$i', '$i', '$i', '$i', '$i', '$i', '$i', '$i', '$i', '$i', '$i');";
$db->query($insertSQL);
$i = $i+1;
}
?>
