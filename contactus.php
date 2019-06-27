

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Case</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>
  	.mySlides{
  		width:100%;
  		height: auto;
  	}
  	body{
  		
  		background-color:#f9f7f8;
  	}

  	.btn {
    background-color: gray; 
    border: none;
    color: white;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    border-radius: 12px;
	}
  	
  	
  </style>
  <script type="text/javascript">
  	function f1{
  		alert("Your massage succesfull send!")	
  	}
  </script>
</head>
<body>
<div class="container"style="background-color: #e3e3e3; ">
	<div class="row">
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="beforeLoginNav.php">AVRS Service</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="beforeLoginNav.php">Home</a></li>
      <li class="active"><a href="aboutus1.php">About Us</a></li>
      	<li class="active"><a href="cars.php">Our Vehicles</a></li>
    	 <li class="active"><a href="contactus.php">Contact Us</a></li>
    
      
     
      
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="loginForm.php"><span class="glyphicon glyphicon-user"></span> Sign In</a></li>
      <li><a href="RegistrationUser.php"><span class="glyphicon glyphicon-log-in"></span> Register</a></li>
    </ul>
  </div>
</nav>
 </div> 

	



<div class="row" >
	<br/>
	<div class="col-sm-1"></div>
<div class="col-sm-5">
	 <form method="POST">
  <div class="form-group">
    <label for="email">Name:</label>
    <input type="text" class="form-control" id="name" required>
  </div>
  <div class="form-group">
    <label for="pwd">Contact no:</label>
    <input type="tel" class="form-control" id="cno" required>
  </div>
   <div class="form-group">
    <label for="email">Email address:</label>
    <input type="email" class="form-control" id="email" required>
  </div>
   <div class="form-group">
  <label for="comment">Massage:</label>
  <textarea class="form-control" rows="5" id="comment" required></textarea>
</div>
  <button type="submit" class="btn btn-default" name="btn">Submit</button><br/>
</form></div>
<?php
 if (isset($_POST['btn'])){
 	
?>
		<script>alert("Your massege has been send!");</script>
	
<?php	
 }
?>

<div class="col-sm-5" align="center">
	 <form>
	   <div class="form-group">
    <img src="images/contactus.png" width="450px" height="250px" />
  </div>
  <div class="form-group">
    <label for="pwd">Contact us with +91 8378909868</label>
  </div>
   <div class="form-group">
    <label for="email">Email address : kolikunalcsk@gmail.com</label>
  </div>
  <div class="form-group">
    <label for="email">Our home : MITAOE,alandi <br/> Pune,INDIA </label>
  </div>
</form></div>



</div>

<div class="row" >
<br/>	
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
		<div class="w3-content" style="width:100%;position:relative">
 </div>
		<div class="row" style="background-color: white;">
			<div class="col-sm-4">
			</div>
	
			<div class="col-sm-4">
					<footer id="footer">
				<div id="footer-inner">
					<p>&copy; Copyright <a href="#">AVRS</a> &#124; <a href="#">Terms of Use</a> &#124; <a href="#">Privacy Policy</a></p>
					<div class="clr"></div>
				</div>
			</footer>
			</div>	
	</div>
</div>







	









</body>
</html>
