﻿ <?php session_start();
$uname= $_SESSION['uname'];
 include("db.php");

?>
 
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head runat="server">
  <title>VIDEO FRAUD DETECTION ON SOCIAL NETWORK</title>
  <meta name="description" content="website description" />
  <meta name="keywords" content="website keywords, website keywords" />
  <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
  <link rel="stylesheet" type="text/css" href="css/style.css" />
  <!-- modernizr enables HTML5 elements and feature detects -->
  <script type="text/javascript" src="js/modernizr-1.5.min.js"></script>
  <link  href="css/styletable.css" type="text/css" rel="stylesheet" />
 
<script type='text/javascript' src='js/slimtable.min.js'></script>

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
           <li><a href="userembedding.php">User Embedding</a></li> 
			<li><a href="userdetails.php">User Details</a></li>
			<li><a href="umessage.php">Message</a></li>
			<li><a href="blockvideo.php">Block Video</a></li>
            <li><a href="index.php">Sign Out</a></li>
          </ul>
        </div>
      </nav>
    </header>
    <div id="site_content">
       
     
	 <div class="content" style="width:100%">
	  <br>  
		        <center>
		<div class="loginhead3" style="width:95%">

		 
		<h2 style="text-align:center; font-family:'Yanone Kaffeesatz', arial, sans-serif;   text-shadow: 1px 1px #7E4D0E;   text-decoration: none;   color: #FFF;  margin-right: 2px;">USER EMBEDDING</h2>
		</div>
		<div class="login3" style="width:95%">
		<br>
		<center>
		 

</center>
                         
                                                  
                        </td>
                       
                         
                    </tr>
      <tr>
        <td>
		<center>
		<br />
		    
		 <table id='example1' class="bordered"  style="width:95%"  >
<thead>
<tr>
		<th>ID</th>  
        <th>USER NAME</th>  
		<th>FRIEND NAME</th>		  
        <th>DATE</th>           
		<th>STATUS</th>  
	 
</tr>
</thead>

<?php
$result=mysql_query("Select * from tb_request ");
  
	while ($row = mysql_fetch_array($result))
          {
		   $im=$row[img];
		  ?>
		  <tbody>
 <tr>
        <td ><?php echo $row['id']; ?></td>        
        <td ><?php echo $row['uname']; ?></td>
		 <td ><?php echo $row['friend']; ?></td>
		  
        <td ><?php echo $row['edate']; ?></td>
	 <td ><?php echo $row['status']; ?></td>
	 
		   
		</tr>
		</tbody> 
		 
	    
	<?php
	}
	?>				  
   

   
</tbody>
</table>
	 
		 
    </table>
		       
  
<br> <br>
</center>

		</div>
    
        

        
      </div>
    </div>
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
</body>
</html>
