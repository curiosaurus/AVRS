<?php
session_start();
	
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


<style>
body {

}
a{
	color:black;
}


</style>


</head>
<body>

<div class="container"  style="background-color: #e3e3e3; " >
 <div class="row">
<nav class="navbar navbar-inverse">
  	<div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="AdminHomePage.php">Cargo Services</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="AdminHomePage.php">Home</a></li>
    
     
    </ul>
    <ul class="nav navbar-nav navbar-right">
    	
      <li><a href="Admindetail.php"><span class="glyphicon glyphicon-user"></span> <?php echo $_SESSION['Admin_name'];?></a></li>
      <li><a href="logout.php"><span class="glyphicon glyphicon-log-in"></span> Sign Out</a></li>
    </ul>
  </div>
</nav>
</div>


  <div class="row">
    <div class="col-sm-4">
    	
  			<a href="cars.php"> <img src="images/vh1.png"  onmouseover="this.src='images/vh2.png'" onmouseout="this.src='images/vh1.png'"/> </a>
  	</div>
  	
  	<div class="col-sm-4">
  			<a href="bookedDetails.php"> <img src="images/av1.png"  onmouseover="this.src='images/av2.png'" onmouseout="this.src='images/av1.png'"/> </a>
  	</div>
  	
  	<div class="col-sm-4">
  			<a href="AddNewAdmins.php"> <img src="images/n1.png"  onmouseover="this.src='images/n2.png'" onmouseout="this.src='images/n1.png'"/> </a>
  	</div>
  	
  </div>	
  
  
 <div class="row">
 	<div class="col-sm-2"></div>
 	<div class="col-sm-4">
  			<a href="allusers.php"> <img src="images/u1.png"  onmouseover="this.src='images/u2.png'" onmouseout="this.src='images/u1.png'"/> </a>
  	</div>
  	
  		<div class="col-sm-4">
  			<a href="admindetails.php"> <img src="images/a1(1).png"  onmouseover="this.src='images/a2(1).png'" onmouseout="this.src='images/a1(1).png'"/> </a>
  	</div>
  	<div class="col-sm-2"></div>
 	
 </div> 
     

<div class="row"><br/><br/></div>




<div class="row" style="background-color: black; color: white; border-bottom-right-radius:15px; border-bottom-left-radius:15px;">
			<div class="col-sm-4">
			</div>
	
			<div class="col-sm-4">
					<footer id="footer">
				<div id="footer-inner">
					<p>&copy; Copyright Cargo &#124; Terms of Use&#124; Privacy Policy</p>
					<div class="clr"></div>
				</div>
			</footer>
			</div>	
	</div>



</body>
</html>
