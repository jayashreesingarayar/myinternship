<?php session_start();
$uname= $_SESSION['uname'];

?>
<html>

<head runat="server">
  <title>VIDEO FRAUD DETECTION ON SOCIAL NETWORK</title>
  <meta name="description" content="website description" />
  <meta name="keywords" content="website keywords, website keywords" />
  <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
  <link rel="stylesheet" type="text/css" href="css/style.css" />
  <!-- modernizr enables HTML5 elements and feature detects -->
  <script type="text/javascript" src="js/modernizr-1.5.min.js"></script>
        <style type="text/css">
            .style1
            {
                width: 10%;
            }
            .style2
            {
                width: 15%;
                color: #660066;
                font-weight: bold;
            }
            .style3
            {
                color: #660066;
                font-weight: bold;
            }
        .style4 {width: 10%; font-weight: bold; }
        .style5 {width: 15%; color: #0033CC; font-weight: bold; }
.style6 {
	color: #0033CC;
	font-weight: bold;
}
.style7 {color: #0033CC}
        </style>
		
		<style>
* {
    box-sizing: border-box;
}

/* Create two equal columns that floats next to each other */
.column {
    float: left;
    width: 50%;
    padding: 20px;
    height: 300px; /* Should be removed. Only for demonstration */
}

/* Clear floats after the columns */
.row:after {
    content: "";
    display: table;
    clear: both;
}
</style>
</head>

<body>
    
  <div id="main">
      <header>
      <div id="logo">
        <div id="logo_text">
          <!-- class="logo_six", allows you to change the colour of the text -->
          <h1><a href="#">VIDEO FRAUD DETECTION ON SOCIAL NETWORK</a></h1>
          
        </div>
      </div>
      <nav>
        <div id="menu_container">
           <ul class="sf-menu" id="nav">
          <li><a href="sprofile.php">Profile View</a>             
            </li>
			 <li><a href="#">Contact</a>
			 <ul>
              <li><a href="contact.php">Friend Request</a></li>
                <li><a href="requestaccept.php">Friend Accept</a></li>
				</ul>
			 
			 </li> 
            <li><a href="search.php">Search Friends</a></li> 
             <li><a href="#">Message</a>
			 <ul>
              <li><a href="sendmessage.php">Send Message</a></li>
                <li><a href="receivedmessage.php">Received Message</a></li>
				</ul></li>
			 
			   
			   <li><a href="videoupload.php">Video Upload</a>
			   <li><a href="videoview.php">Video View</a>
			     
			 
			 
			       		  
            <li><a href="index.php">Sign Out</a></li>
          </ul>
        </div>
      </nav>
    </header>
    <div id="site_content">
    <div id="sidebar_container">
    <!--    <img class="paperclip" src="images/paperclip.png" alt="paperclip" /> -->
	<br> <br>  
        <br />
        <br />
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
      <div class="content3" style="width:100%">
	  <br>  
		        <center>
		<div class="loginhead3" style="width:85%">

		 
		<h2 style="padding:7px 20px 6px 20px; text-align:center; font-family:'Yanone Kaffeesatz', arial, sans-serif;   text-shadow: 1px 1px #7E4D0E;   text-decoration: none;   color: #FFF;  margin-right: 2px;">SEND MESSAGE</h2>
		</div>
		<div class="login3" style="width:85%">
		<br>
		 
	 
		<center>
		  <form name="f1" method="post" action="videodata.php" enctype="multipart/form-data">
	<table width="80%" border="0">
  <tr>
    <td>
	<img src="images/iMessage-Icon.jpg" height="150px">
	
	</td>
    <td>
	<table width="100%" border="0" height="250px">
  <tr>
    <td>USER NAME </td>
    <td>
	<select  name="contact"   onchange="MM_jumpMenu('parent',this,0)" class="txt">
	 <option>Select Friend</option>
		 <?php
		 include("db.php");
			  $q5=mysql_query("select * from tb_request where uname='$uname' and status='Accept'");
				while($r=mysql_fetch_assoc($q5))

			{
				 echo "<option>".$r['friend']."</option>";
								}
								 

			
		 
		   ?>	
	 </select>
	
	</td>
  </tr>
  <tr>
    <td>Upload Vieo</td>
    <td>
	 <input name="img" type="file">
	
	</td>
  </tr>
  <tr>
    <td colspan="2" align="right"><input type="submit" name="submit" class="lgnbtn" value="SEND"></td>
    
  </tr>
</table>

	</form>
	
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
