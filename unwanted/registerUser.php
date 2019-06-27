     	
    	<?php

		include 'dbCon.php';

	
	if(isset($_POST['usr']) && isset($_POST['email']) && isset($_POST['pwd']) && isset($_POST['Cpwd']) && isset($_POST['con_no']) && isset($_POST['address']) && isset($_POST['dob'])){
	
			$Uname=$_POST['usr'];
			$Uemail=$_POST['email'];
			$Upwd=$_POST['pwd'];
			$UCpwd=$_POST['Cpwd'];
			$UcoNo=$_POST['con_no'];
			$Uaddress=$_POST['address'];
			$Udob=$_POST['dob'];
			
			if(!empty($Uname) && !empty($Uemail) && !empty($Upwd) && !empty($UCpwd) && !empty($UcoNo) && !empty($Uaddress) && !empty($Udob) ){
				
				if($Upwd != $UCpwd){
					
?>
					<script>alert("Password dosen't match");</script>
<?php
				}
				else {
					$sql="SELECT Full_Name FROM User WHERE Full_Name='$Uname'";
					
					$sql_run=mysqli_query($conn, $sql);
					
					if($result=mysqli_num_rows($sql_run)==1){
?>

	
						<script>alert("User name exist");</script>
						
						
<?php
					}
					else{
						
						$query="INSERT INTO User(U_Id, Full_Name, Password, Address, BirthDate, Contact_No, Email) 
									VALUES ( '','$Uname','$Upwd','$Uaddress','$Udob','$UcoNo','$Uemail' )";
						
						
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












<?php session_start();
include'beforeLoginNav.php';

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
	<h1 class="bg-primary">Registration Form</h1>
</div>


         </div>

	
	<div class="row">
	
	 <div class="col-sm-4"> <!--space row for the main css row 1-->
         </div>


	<div class="col-sm-4">

	 <form name="formReg" action="registerUser.php" method="POSt">
	
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
  <input type="Date" class="form-control" name="dob">
</div>


<div class="radio">
  <label><input type="radio" name="optradio" value="Male">Male</label>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

  <label><input type="radio" name="optradio" value="Female">Female</label>
</div>

 


  <button type="submit" class="btn btn-default" name="submit">Register</button>
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
   <button type="reset" class="btn btn-default">Reset</button>
</form>

	<label>Allready Have an Account ??<a href="loginForm.php">Login</a></label> 
	</div>

	<div class="col-sm-4">
	</div>

	</div>




	</div>
    </body>
</html>






