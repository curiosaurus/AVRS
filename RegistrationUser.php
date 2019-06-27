<?php 
include'normalhome.php';

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
		body{
			
		
		}

	</style>
   </head>
    <body>
    	

    	
      
	
		
		

	 <div class="row">			 <!--space row for the main css row 1-->
<div class="col-sm-2">
</div>

<div class="col-sm-4">
	<h1>Registration Form</h1>
</div>


         </div>

	
	<div class="row">
	
	 <div class="col-sm-4"> <!--space row for the main css row 1-->
         </div>


	<div class="col-sm-4">

	 <form name="formReg" action="RegistrationUser.php" method="POSt">
	
 <div class="form-group">
  <label for="usr">Full Name:</label>
  <input type="text" class="form-control" name="usr">
</div>


 <div class="form-group">
    <label for="email">Email address:</label>
    <input type="email" class="form-control" name="email" >
  </div>


 <div class="form-group">
   <label for="pwd">Password:</label>
   <input type="password" class="form-control" name="pwd">
 </div>
 
 
  <div class="form-group">
   <label for="pwd">Confirm Password:</label>
   <input type="password" class="form-control" name="Cpwd" >
 </div>

 <div class="form-group">
  <label for="contact">Contact No:</label>
  <input type="text" class="form-control" name="con_no" >
</div>

 <div class="form-group">
  <label for="address">Address:</label>
  <textarea class="form-control" rows="3" name="address"></textarea>
</div>

 <div class="form-group">
  <label for="dob">Date Of Birth:</label>
  <input type="date" class="form-control" name="dob">
</div>


  <button type="submit" class="btn btn-primary" name="submit">Register</button>
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
   <button type="reset" class="btn btn-primary">Reset</button>
</form>

	<label>Already Have an Account ??<a href="loginForm.php">Sign in</a></label> 
	</div>

	<div class="col-sm-4">
	</div>

	</div>
	
	<div class="row">
		<br/>
		<br/>
		<br/>	
	</div>

<div class="row" style="background-color: black; color: white; border-bottom-right-radius:15px; border-bottom-left-radius:15px;">
			<div class="col-sm-4">
			</div>
	
			<div class="col-sm-4">
					<footer id="footer">
				<div id="footer-inner">
					<p>&copy; Copyright AVRS &#124; Terms of Use&#124; Privacy Policy</p>
					<div class="clr"></div>
				</div>
			</footer>
			</div>	
	</div>


    </body>
</html>



    	
    	<?php

		include 'dbCon.php';

	
	if(isset($_POST['submit'])){
	
			$Uname=$_POST['usr'];
			$Uemail=$_POST['email'];
			$Upwd=$_POST['pwd'];
			$UCpwd=$_POST['Cpwd'];
			$UcoNo=$_POST['con_no'];
			$Uaddress=$_POST['address'];
			$Udob=$_POST['dob'];
			$gender=$_POST['r1'];
			
			if(!empty($Uname) && !empty($Uemail) && !empty($Upwd) && !empty($UCpwd) && !empty($UcoNo) && !empty($Uaddress) && !empty($Udob) ){
				
				if($Upwd != $UCpwd){
					
?>
					<script>alert("Password dosen't match");</script>
<?php
				}
				else {
					$sql="SELECT Full_Name FROM user WHERE Full_Name='$Uname'";
					
					$sql_run=mysqli_query($conn, $sql);
					
					if($result=mysqli_num_rows($sql_run)==1){
?>

	
						<script>alert("User name exist");</script>
						
						
<?php
					}
					else{
						
						$query="INSERT INTO user(U_Id, Full_Name, Password, Address, BirthDate, Contact_No, Email) 
									VALUES ( '','$Uname','$Upwd','$Uaddress','$Udob','$UcoNo','$Uemail')";
						
						
						if($sql_run=mysqli_query($conn, $query)){
?>
							<script>alert("Registration Sucessfull Login ");</script>
<?php
						}	
						else {
?>
							<script>alert("Registration Not Sucessfull");</script>
<?php
						}
					}
				}
			}
			else {
?>
				<script>alert("All Field Required");</script>
<?php
			
			}
	
    }
	
	
?>
