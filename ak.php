<?php session_start();

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
  	.banner{
  		width:100%;
  		height: auto;
  	}
  	body{
  		
  		background-color:;
  	}
  	
  
  	
  	
  	
  </style>




</head>
<body>
<div class="container" style="background-color: #e3e3e3; ">	
	<div class="row">


<nav class="navbar navbar-inverse">
  	<div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="afterloginHome.php">Cargo Services</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="afterloginHome.php">Home</a></li>
	<li class="active"><a href="items.php">Book Now</a></li>
       
	      
      
      

     
    </ul>
    <ul class="nav navbar-nav navbar-right">
    	
	<li><a href="viewcart.php"><span class="glyphicon glyphicon-log-in"></span> Booking details</a></li>
      <li><a href="userdetail.php"><span class="glyphicon glyphicon-user"></span> <?php echo $_SESSION['username'];?></a></li>
      <li><a href="home.php"><span class="glyphicon glyphicon-log-in"></span> Sign out</a></li>
    </ul>
</div>
</nav>

</div>

<div class="row">
	
		<img class="banner" src="images/banner1.gif">

	

	
</div>


<div class="row" style="background-color: black; border-bottom-right-radius:15px;border-bottom-left-radius:15px;color: white" >
	
		
		
		<div id="footerblurb">
				<div id="footerblurb-inner">
					
					
				<div class="col-sm-4">
					<div class="column">
						<h2>No hidden fees</h2>
						<p>As a professional service providing company We are very genuine with our customers.</p>
					</div>
				</div>
					
				<div class="col-sm-4">	
					<div class="column">
						<h2>On time</h2>
						<p>Time is worth as Golden and We care about the punctuality</p>
					</div>
				</div>
				
				<div class="col-sm-4">
					<div class="column">
						<h2>Safety first</h2>
						<p>Safety is always first and Our vehicles are well maintained and with any emergency such as First Aids etc...</p>
					</div>	
				</div>
					
					
				
				</div>
			</div>
		
	</div>

	


 
 
 		<div class="row">
			<div class="col-sm-4">
			</div>
	
			<div class="col-sm-4">
					<footer id="footer">
				<div id="footer-inner">
					<p>&copy; Copyright <a href="#">Cargo</a> &#124; <a href="#">Terms of Use</a> &#124; <a href="#">Privacy Policy</a></p>
					<div class="clr"></div>
				</div>
			</footer>
			</div>	
	</div>
</div>

</div>




</body>
</html>

</div>

