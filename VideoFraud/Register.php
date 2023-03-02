<?php
include("db.php");
$q = "select Max(id) as id from tb_reg";
$res = mysql_query($q);
$row = mysql_fetch_array($res);
$id1 = $row["id"] +1;
?>

<html>
<head>
  <title>VIDEO FRAUD DETECTION ON SOCIAL NETWORK</title>
  <meta name="description" content="website description" />
  <meta name="keywords" content="website keywords, website keywords" />
  <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
  <link rel="stylesheet" type="text/css" href="css/style.css" />
  <!-- modernizr enables HTML5 elements and feature detects -->
  <script type="text/javascript" src="js/modernizr-1.5.min.js"></script>
  </head>

<body>
    <form id="form1"  enctype="multipart/form-data" method="post" action="regdata.php">
  <div id="main">
      <header>
      <div id="logo">
        <div id="logo_text">
          <!-- class="logo_six", allows you to change the colour of the text -->
          <h1><a href="#">VIDEO FRAUD DETECTION ON SOCIAL NETWORK</a></h1>
          
        </div>
      </div>
      <nav>
        <div id="menu_container"> <ul class="sf-menu" id="nav">
             <li><a href="index.php">Home</a></li>
          
            <li><a href="#">Login</a>
              <ul>
              <li><a href="adminlogin.php">Admin</a></li>
                   
                
                <li><a href="userlogin.php">User</a></li> 
				</ul> </li>
				 <li><a href="Register.php">User Registration</a></li>
             
          </ul>
        </div>
      </nav>
    </header>
    <div id="site_content">
    <div id="sidebar_container">
    <!--    <img class="paperclip" src="images/paperclip.png" alt="paperclip" /> -->
	<br> <br> <br> <br><br>
        <!--<div class="sidebar">
         
		  <br>
		  <img src="images/admin_login_icon.png" width="90%" style="margin-left:15px; ">
		  <br> <br>
        
        </div> -->
		<!--
        <img class="paperclip" src="images/paperclip.png" alt="paperclip" />
        <div class="sidebar">

		  <br> 
		  <img src="images/images.jpeg" width="90%" style="margin-left:15px; border-radius:8px; border:3px solid #FF9933;">
		  <br> <br>
        </div> -->
      </div>
      <div class="content">
	  <br>  <br> <br>     
		<img src="images/register.jpeg" height="300" width="250px" style="float:left; margin-left:40px;">        
		<div class="loginhead1">

		 
		<h2 style="padding:7px 20px 6px 20px; text-align:center; font-family:'Yanone Kaffeesatz', arial, sans-serif;   text-shadow: 1px 1px #7E4D0E;   text-decoration: none;   color: #FFF;  margin-right: 2px;">Registration </h2>
		</div>
		<div class="login1" style="height:680px">
		<br>
		<center>
		
		<table width="90%" height="650px" border="0" bgcolor="#FFFFFF" style="margin-left:20px;">
  <tr>
    <td width="38%"> User ID </td>
    <td width="62%" height="55"> 
                                
                                <input name="id" type="text" class="txt" id="id"  value="<?php echo $id1?>">
                                 </td>
  </tr>
  <tr>
    <td> Name </td>
    <td height="55"> 
                                <input name="ename" type="text" class="txt" id="ename" required="Fill the required" ></td>
  </tr>
  <tr>
    <td height="45">Gender </td>
    <td>
      <input name="gender" type="radio" value="Male">
      Male 
      <input name="gender" type="radio" value="Female">
      Female</label></td>
  </tr>
  <tr>
    <td height="46">Contact No. </td>
    <td> 
                                <label>
                                <input name="phone" type="text" class="txt" id="phone" required="Fill the required" >
                                </label></td>
  </tr>
  <tr>
    <td>Address</td>
    <td height="55"> 
      <textarea name="address" class="txt1" id="address" required="Fill the required" ></textarea>
      </label></td>
  </tr>
  <tr>
    <td height="61">City</td>
    <td>   
      <select name="city" class="txt">
        <option>Select City</option>
		 <option>Trichy</option>
		  <option>Chennai</option>
		   <option>Madurai</option>
		    <option>Karur</option>
			 <option>Salem</option>
			   <option>Viruthachalam</option>
			    <option>Bangalore</option>
				<option>Kanyakumari</option>
				<option>Sivakangai</option>
				<option>Hydrabath</option>
				<option>Thanjur</option>
				<option>Tirupur</option>
				   <option>Coimbatore</option>
				    <option>palakad</option>
					<option>Erode</option>
					<option>Namakkal</option>
					<option>Nagarkovil</option>
					<option>ooty</option>
      </select>
                           </td>
  </tr>
  <tr>
    <td>Email ID </td>
    <td><label>
       
        </label>
                                <label>
                                <input name="email" type="text" class="txt" id="email"required="Fill the required" >
                                </label></td>
  </tr>
  <tr>
    <td>User Name </td>
    <td height="55"><label>
    <input name="uname" type="text" class="txt" id="uname" required="Fill the required">
       
        </label></td>
  </tr>
  <tr>
    <td>Password</td>
    <td><label>
    <input name="pass" type="password" class="txt" id="pass" required="Fill the required" >
       
        </label></td>
  </tr>
   <tr>
    <td>Upload Photo</td>
    <td><label>
     <input name="img1" type="file">
       
        </label></td>
  </tr>
  <tr>
   
    <td colspan="2">
	 
      <div align="center">
        <input type="submit" class="lgnbtn" value="Submit">  
 </div>
     </td>
  </tr>
</table>
<br> <br>
</center>

		</div>
      </div>
	  <br> <br> <br>
    </div>
	<br> <br> <br>
    <footer>
      <p> Copyright ©&nbsp;&nbsp; <a href="#"> 2020</a></p>
    </footer>
  </div>
  <p>&nbsp;</p>
  <!-- javascript at the bottom for fast page loading -->
  <script type="text/javascript" src="js/jquery.js"></script>
  <script type="text/javascript" src="js/jquery.easing-sooper.js"></script>
  <script type="text/javascript" src="js/jquery.sooperfish.js"></script>
  <script type="text/javascript">
    $(document).ready(function() {
      $('ul.sf-menu').sooperfish();
    });
  </script>
    </form>
</body>
</html>
