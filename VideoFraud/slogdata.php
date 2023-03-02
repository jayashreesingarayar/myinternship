<?php session_start();
include("db.php");
$uname=$_POST["uname"];
$pass=$_POST["pass"];
$rs=mysql_query("select * from tb_student where id='$uname' and pass='$pass'");
$r=mysql_fetch_array($rs);

$n=mysql_num_rows($rs);
if($r['id']==$uname && $r['pass']==$pass)
{
	 
 $_SESSION['uname'] = $r["ename"]; 
  
 header("location:studenthome.php");
}

 
else
{
header("Location:index.php?a=Invalid user Try again");
}
?>


 