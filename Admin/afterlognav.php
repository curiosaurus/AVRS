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

<div class="container" style="background-color: #e3e3e3;">
	
	 <div class="row">
<nav class="navbar navbar-inverse">
  	<div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="AdminHomePage.php">Cargo Service</a>
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
