<?php session_start();
include("db.php");
$uname=$_POST["uname"];
$pass=$_POST["pass"];
 
if($uname=="ecommer" && $pass=="123")
{
	 
  
  
 header("location:ecommerhome.php");
}

 
else
{
header("Location:index.php?a=Invalid user Try again");
}
?>


 