<?php 
include'afterlognav.php';

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
	<h1>Add New Admins</h1>
</div>


         </div>

	
	<div class="row">
	
	 <div class="col-sm-4"> <!--space row for the main css row 1-->
         </div>


	<div class="col-sm-4">

	 <form name="formReg" action="AddNewAdmins.php" method="POSt">
	
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

 
<div class="radio">
  <label><input type="radio" name="r1" value="Male">Male</label>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

  <label><input type="radio" name="r1" value="Female">Female</label>
</div>

 


  <button type="submit" class="btn btn-primary" name="submit">Register</button>
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
   <button type="reset" class="btn btn-primary">Reset</button>
</form>

	 
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
					<p>&copy; Copyright Cargo &#124; Terms of Use&#124; Privacy Policy</p>
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
	
			$Aname=$_POST['usr'];
			$Aemail=$_POST['email'];
			$Apwd=$_POST['pwd'];
			$ACpwd=$_POST['Cpwd'];
			$AcoNo=$_POST['con_no'];
	
		
			
			
			
			if(!empty($Aname) && !empty($Aemail) && !empty($Apwd) && !empty($ACpwd) && !empty($AcoNo) ){
				
				if($Apwd != $ACpwd){
					
?>
					<script>alert("Password dosen't match");</script>
<?php
				}
				else {
					$sql="SELECT A_Name FROM Admin WHERE A_Name='$Aname'";
					
					$sql_run=mysqli_query($conn, $sql);
					
					if($result=mysqli_num_rows($sql_run)==1){
?>

	
						<script>alert("Admin name exist");</script>
						
						
<?php
					}
					else{
						
						$sql="INSERT INTO `Admin`(`A_Id`, `A_Name`, `Password`, `Contact_No`, `E_mail`) 
									VALUES ( '','$Aname','$Apwd','$AcoNo','$Aemail')";
						
						
						$result=mysqli_query($conn,$sql);
						if($result){
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
