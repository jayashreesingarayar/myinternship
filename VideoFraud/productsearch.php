 <?php 
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
       
     
	 <div class="content" style="width:100%">
	  <br>  
		        <center>
		<div class="loginhead3" style="width:95%">

		 
		<h2 style="text-align:center; font-family:'Yanone Kaffeesatz', arial, sans-serif;   text-shadow: 1px 1px #7E4D0E;   text-decoration: none;   color: #FFF;  margin-right: 2px;">Product Search</h2>
		</div>
		<div class="login3" style="width:95%">
		<br>
		<center>
		<table width="100%" border="0" style="border-radius:4px;"  >
       <tr>
                    <td>
					<center>
					<form name="f1"  method="get" action="#">
                         <table width="42%" border="0">
  <tr>
    <td>Search</td>
    <td><input name="pname" type="text" class="txt"></td>
    <td><input name="submit" type="submit" class="lgnbtn" value="Search"></td>
  </tr>
</table>
	</form>

</center>
                         
                                                  
                        </td>
                       
                         
                    </tr>
      <tr>
        <td>
		<center>
		<br />
		    <?php
		 
	if(isset($_GET['submit']))
{
  $pname=$_REQUEST["pname"];
  ?>
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
		 
		 
		 
</tr>
</thead>

<?php
$result=mysql_query("Select * from tb_product where ename='$pname' ");
  
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
		 
		</tr>
		</tbody> 
		 
	    
	<?php
	}
	?>				  
   

   
</tbody>
</table>
		
	<?php
		}
		?>		
		 
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
