<?php
include("db.php");
echo $pid=$_GET["id"];
 

$q = "update tb_request set status='Accept' where id='$pid'";
mysql_query($q) or die (mysql_error());

header("location:requestaccept.php");
?>