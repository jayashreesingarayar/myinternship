﻿ <?php 
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
          <li><a href="#">Product </a>
              <ul>
                <li><a href="productadd.php">Product Add</a></li>  
                <li><a href="productview.php">Product View</a></li>                    
                
                           
              </ul>
            </li>
            <li><a href="urecomm.php">Recommendation</a></li> 
            <li><a href="userembedding.php">User Embedding</a></li> 
			<li><a href="userdetails.php">User Details</a></li>
			<li><a href="umessage.php">Message</a></li>
			
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

		 
		<h2 style="padding:7px 100px 60px 200px; text-align:center; font-family:'Yanone Kaffeesatz', arial, sans-serif;   text-shadow: 1px 1px #7E4D0E;   text-decoration: none;   color: #FFF;  margin-right: 2px;">STUDENT DETAILS</h2>
		</div>
		<div class="login3" style="width:95%">
		<br>
		<center>
		<table width="100%" border="0" style="border-radius:4px;"  >
       
      <tr>
        <td>
		<center>
		<br />
		<form name="customer" action="studentdata.php" method="post" onsubmit="return validate()">
		 <table id='example1' class="bordered"  style="width:95%"  >
<thead>
<tr>
		<th>PRODUCT ID</th>  
        <th>PRODUCT Name</th>  
		<th>CATEGORY</th>
		<th>QTY</th>	        
        <th>PRICE</th>           
		<th>DESC</th>        
		<th>IMG</th>	
		<th></th>	
		 
		 
</tr>
</thead>

<?php
$result=mysql_query("Select * from tb_product ");
  
	while ($row = mysql_fetch_array($result))
          {
		   $im=$row[img];
		  ?>
		  <tbody>
 <tr>
        <td ><?php echo $row['id']; ?></td>        
        <td ><?php echo $row['ename']; ?></td>
		 <td ><?php echo $row['cat']; ?></td>
		  <td ><?php echo $row['qty']; ?></td>
        <td ><?php echo $row['price']; ?></td>
	 <td ><?php echo $row['edesc']; ?></td>
	 <td ><?php echo "<a href=$im><img src=home/$im width=100 height=80></img></a>";?></td>
		 <td><?php echo '<a href=delete.php?id='.$row['id'].' style="color:#0000FF; font-weight:bold; text-decoration:none;"><img src=images/delete.png height=20></a>'?> </div>
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
