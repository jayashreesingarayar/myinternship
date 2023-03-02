<?php session_start();
include("db.php");
$uname=$_POST["uname"];
$pass=$_POST["pass"];
$rs=mysql_query("select * from tb_reg where uname='$uname' and pass='$pass'");
$r=mysql_fetch_array($rs);

$n=mysql_num_rows($rs);
if($r['uname']==$uname && $r['pass']==$pass)
{
	 
 $_SESSION['uname'] = $r["uname"]; 
  
   
 header("location:userhome.php");
}

 
else
{
header("Location:index.php?a=Invalid user Try again");
}
?>


 