    	
    	<?php

		include 'dbCon.php';
		include'afterlognav.php';

	
	if(isset($_POST['submit']) ){
	
			$model=$_POST['Model'];
			$barnd=$_POST['brand'];
			$color=$_POST['color'];
			$no_Pass=$_POST['no_Pass'];
			$price=$_POST['price'];
			$fuel=$_POST['fuel'];
			$image=$_POST['image'];
			
		
			
			if(!empty($model) && !empty($barnd) && !empty($color) && !empty($no_Pass) && !empty($price) && !empty($fuel) && !empty($image)  ){
				
						$query="  INSERT INTO `car`(`C_Id`, `Model_Name`, `Brand`, `Color`, `No_Of_Pas`, `price`, `FuelType`, `image`) 
												VALUES ('','$model','$barnd','$color','$no_Pass','$price','$fuel','$image')";
												
						
						
						if($sql_run=mysqli_query($conn, $query)){
?>
							<script>alert("Car Registration Sucessfull ");</script>
<?php
						}	
						else {
?>
							<script>alert("Registration Not Sucessfull");</script>
<?php
						}
					
				
			}
			else {
?>
				<script>alert("All Field Required");</script>
<?php
			
			}
	
    }
	
	
?>








<!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <script src="js/jquery.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
	<style>
		

	</style>
   </head>
    <body>
    	

    	
      
	<div class="container">

	 <div class="row">			 <!--space row for the main css row 1-->
<div class="col-sm-2">
</div>

<div class="col-sm-4">
	<h1>Car Registration Form</h1>
</div>


         </div>

	
	<div class="row">
	
	 <div class="col-sm-4"> <!--space row for the main css row 1-->
         </div>


	<div class="col-sm-4">

	 <form name="formReg" action="AddNewItems.php" method="POSt">
	
 <div class="form-group">
  <label for="Mname">Model Name:</label>
  <input type="text" class="form-control" name="Model">
</div>


 <div class="form-group">
    <label for="brand">Brand:</label>
    <input type="text" class="form-control" name="brand" >
  </div>


 <div class="form-group">
   <label for="color">Color:</label>
   <input type="text" class="form-control" name="color">
 </div>
 
 
  <div class="form-group">
   <label for="pass">No_Of_Passengers:</label>
   <input type="text" class="form-control" name="no_Pass" >
 </div>

 <div class="form-group">
  <label for="price">Price:</label>
  <input type="text" class="form-control" name="price" >
</div>


 <div class="form-group">
  <label for="fuel">Fuel Type:</label>
  <input type="text" class="form-control" name="fuel" >
</div>

   <div class="form-group">
    <label for="image">Image:</label>
    <input type="text" class="form-control" name="image" ">
  </div>



 


  <button type="submit" class="btn btn-primary" name="submit">Register</button>
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
   <button type="reset" class="btn btn-primary">Reset</button>
</form>

	 
	</div>

	<div class="col-sm-4">
	</div>

	</div>




	</div>
	
<div class="row">
	<br/><br/>
</div>	
	
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





