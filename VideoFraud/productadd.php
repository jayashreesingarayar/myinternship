 <?php 
  include("db.php");
   $qry="SELECT id FROM tb_product ORDER BY id DESC";
  $set=mysql_query($qry);
  $data=mysql_fetch_assoc($set);
  $id1=$data['id'];
  $id=$id1+1; 
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
  
  <script>  
function validateform(){  
var name=document.myform.cname.value;  
var email=document.myform.email.value; 
var phone=document.myform.phone.value;  
var pass=document.myform.pass.value;  
 
  
if(name==null || name==""){  
  alert("Name can't be blank");  
  return false;  
}

if(email==null || email==""){  
  alert("Mail can't be blank");  
  return false;  
}
if(phone==null || phone==""){  
  alert("Phone can't be blank");  
  return false;  
}
 else if(pass.length<6){  
  alert("Password must be at least 6 characters long.");  
  return false;  
  }  
  
  
  
  
  
}  
</script>  
  
  
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

		 
		<h2 style="padding:7px 100px 60px 200px; text-align:center; font-family:'Yanone Kaffeesatz', arial, sans-serif;   text-shadow: 1px 1px #7E4D0E;   text-decoration: none;   color: #FFF;  margin-right: 2px;">PRODUCT ADD</h2>
		</div>
		<div class="login3" style="width:95%">
		<br>
		<center>
		<table width="100%" border="0" style="border-radius:4px;"  >
       
      <tr>
        <td>
		<center>
		<br />
		<form name="myform" method="post" onsubmit="return validateform()"  action="productdata.php"  enctype="multipart/form-data" >
		<center>
		<table width="50%" border="0" height="430px"  >
  <tr>
    <td>Product ID</td>
    <td> <input name="id" type="text" id="id"  class="txt"  value="<?php echo $id;?>" /></td>
    
	</td>
    
	 
  </tr>
  <tr>
    <td> Product Name </td>
    <td><input name="cname" type="text"  class="txt"  id="cname"/></td>
    
  </tr>
  <tr>
	 
    <td>E-Commerce </td>
    <td><label>
      <select  name="cat" class="txt" >
		<option>Select E-commerce</option>
	<option>SONY</option>
	<option>LG</option>
	<option>SAMSUNG</option>
	<option>MICROMAX</option>
	 
 
	</select>
       
        </label></td>
  </tr>
 
	<tr>
	<td>Qty </td>
    <td><input name="qty" type="text"  class="txt"  id="pass"/></td> 
 </tr>
 <tr>
	<td>Price</td>
    <td><input name="price" type="text"  class="txt"  id="pass"/></td> 
 </tr>
 
 <tr>
	<td>Description</td>
    <td><textarea name="edesc" rows="5" cold="25" class="txt1"></textarea></td> 
 </tr>
 <tr>
    <td>Upload Photo</td>
    <td><label>
     <input name="img1" type="file">
       
        </label></td>
  </tr>
  
	</tr>
   <tr>
		  <td align="right" colspan="2">
		   <input name="save" type="submit" value="Save" class="lgnbtn" />
		  
		  </td>
		  </tr>
</table>
		
		
		
		</center>
		</td>
      </tr>
	   
	  
	   
		  
		  
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
