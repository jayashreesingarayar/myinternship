<?php
include("db.php");
echo $pid=$_GET["id"];
 

$q = "delete from tb_product where id=$pid";
mysql_query($q) or die (mysql_error());

header("location:productview.php");
?>