<?php session_start();
include("db.php");
$uname=$_POST["uname"];
$pass=$_POST["pass"];
 
if($uname=="admin" && $pass=="admin")
{ 
 header("location:Adminhome.php");
}
 
else
{
header("Location:index.php?a=Invalid user Try again");
}
?>


 