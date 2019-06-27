

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
  	
  
  	
  	
  	
  </style>
</head>
<body>
<div class="container">
	<div class="row">
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="beforeLoginNav.php">Cargo Service</a>
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

	
<div class="row">

		
		<div class="w3-content" style="width:100%;position:relative">

<img class="mySlides" src="images/banner2.jpg" >
<img class="mySlides" src="images/banner4.jpg" >
<img class="mySlides" src="images/banner3.jpg" >
<img class="mySlides" src="images/banner1.gif" >

<a class="w3-btn-floating" style="position:absolute;top:45%;left:0" onclick="plusDivs(-1)">❮</a>
<a class="w3-btn-floating" style="position:absolute;top:45%;right:0" onclick="plusDivs(1)">❯</a>

</div>

<script>
var slideIndex = 1;
showDivs(slideIndex);

function plusDivs(n) {
  showDivs(slideIndex += n);
}

function showDivs(n) {
  var i;
  var x = document.getElementsByClassName("mySlides");
  if (n > x.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = x.length}
  for (i = 0; i < x.length; i++) {
     x[i].style.display = "none";  
  }
  x[slideIndex-1].style.display = "block";  
}
</script>

	
</div>


<div class="row" style="background-color: #b4b4b4; color: black"  >
	<br/>
	


<div class="col-sm-4">
<p align="justify">Cargo.com has hundreds of listings for van rentals/hire , jeep, bus, cab/taxi services
 and car rentals/hire in Sri Lanka. If you wish to hire a car with a driver or self drive or have airport pickup
  from a luxury limousine (Airport Pickups/Transfers), you can find your</p>
</div>

<div class="col-sm-4">
 	 <p align="justify">ideal choice from onlinetaxirental.com.
   The car rental listings are suited for tourists, foreigners, expats the email address 
   or phone number provided on the 'more information' page. Advertise your rentals for free with us. contacting the provider directly, you will be able to cut</p>


</div>

<div class="col-sm-4">
  <p align="justify"> the agents and get cheap holiday accommodation or car hire. 
   If you require any further information or wish to reserve,
 simply get in touch with the advertiser through the email address 
   or phone number provided on the 'more information' page. Advertise your rentals for free with us.</p>
</div>
</div>




<div class="row" style="background-color: black; border-bottom-right-radius:15px;border-bottom-left-radius:15px;color: white"  >
	
		
		
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







	









</body>
</html>
