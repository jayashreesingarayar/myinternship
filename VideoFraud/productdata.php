<?php
include("db.php");
$cid=$_POST["id"];

$cname=$_POST["cname"];
$cat=$_POST["cat"];
$qty=$_POST["qty"];
$price=$_POST["price"];
$edesc=$_POST["edesc"];

$img=$_FILES["img1"]["name"];

move_uploaded_file($_FILES["img1"]["tmp_name"],"home/" . $img); 

 
 
 
$quy=mysql_query("insert into tb_product values('$cid','$cname','$cat','$qty','$price','$edesc','$img')");
echo "<script language='javascript'>location.href='productview.php';</script>"; 
 

?>