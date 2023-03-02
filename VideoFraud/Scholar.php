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
          <li><a href="#">Student</a>
              <ul>
                <li><a href="studentadd.php">Student Add</a></li>  
                <li><a href="studentview.php">Student View</a></li>                    
                
                           
              </ul>
            </li>
            <li><a href="sponser.php">Sponser</a>
			
			  <ul>
                <li><a href="sponser.php">Sponser Details</a></li>  
                <li><a href="sponseramount.php">Sponser Amount</a></li>                    
                
                           
              </ul>
			
			
			</li> 
            <li><a href="scholarship.php">Student Scholarship </a></li> 
			<li><a href="remainder.php">Auto Reminder</a></li> <li><a href=#">Reports</a>
			   <ul>
                 <li><a href="studentreport.php">Student Report</a></li>
				   <li><a href="scholarshiprep.php">Scholarship Report</a></li> 
				     <li><a href="feedbackreport.php">Feedback</a></li>  </ul></li>
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

		 
		<h2 style="text-align:center; font-family:'Yanone Kaffeesatz', arial, sans-serif;   text-shadow: 1px 1px #7E4D0E;   text-decoration: none;   color: #FFF;  margin-right: 2px;">Student Scholarship</h2>
		</div>
		<div class="login3" style="width:95%">
		<br>
		<center>
		
		<form name="customer" action="#" method="post" >
		<table width="75%" border="0">
  <tr>
    <td>Course</td>
    <td><select  name="course" class="txt" >
	<option>Select Course</option>
	<option>MCA</option>
	<option>M.Sc(CS)</option>
	<option>MCOM</option>
	<option>MBA</option>
	</select></td>
    <td>Year</td>
    <td><select  name="year" class="txt" >
		<option>Select Year</option>
	<option>1-Year</option>
	<option>2-Year</option>
	<option>3-Year</option>
 
	</select></td>
    <td>  <input name="save" type="submit" value="Search" class="lgnbtn" /></td>
  </tr>
  
</table>
</form>
<br />

		<table width="100%" border="0" style="border-radius:4px;"  >
       
      <tr>
        <td>
		<center>
		<br />
		<?php 
		 $course=$_POST["course"];
		 $year=$_POST["year"];
		?>
		
		 <table id='example1' class="bordered"  style="width:95%"  >
<thead>
<tr>
		<th>Reg.No</th>  
        <th>Student Name</th>  
		<th>Gender</th>        
        <th>Phone</th>  
		 
        <th>Course</th>	
		<th>Year</th>	
		<th></th>	
		 
		 
</tr>
</thead>

<?php
$result=mysql_query("Select * from tb_student where course='$course' and eyear='$year' ");
  
	while ($row = mysql_fetch_array($result))
          {
		  ?>
		  <tbody>
 <tr>
        <td ><?php echo $row['id']; ?></td>        
        <td ><?php echo $row['ename']; ?></td>
		 <td ><?php echo $row['gender']; ?></td>
        <td ><?php echo $row['phone']; ?></td>
		 
        <td ><?php echo $row['course']; ?></td>
		  <td ><?php echo $row['eyear']; ?></td>
		 <td><?php echo "<a href=scholaradd.php?id=$row[id]>"; ?> Scholarship</a>		</div>		</td>
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
