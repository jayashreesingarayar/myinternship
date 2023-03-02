<?php
include("db.php");
echo $pid=$_GET["id"];
 

$q = "update tb_video set status='Videoplay' where id='$pid'";
mysql_query($q) or die (mysql_error());

header("location:receivedmessage.php");
?>