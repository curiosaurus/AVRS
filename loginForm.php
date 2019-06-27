<?php 

include'normalhome.php';

?>

<script type="text/javascript">
	
	function create(){
		
		<?php
			include 'dbCon.php';
			
			$sql1="CREATE TABLE cart(
			C_Id varchar(5),
			Model_Name varchar(20),
			Price double
			)";
			
			$result=mysqli_query($conn, $sql1);
		
		
		?>
		
		
	}
	
</script>


    	
    	
    	
    	

	

	
  <div class="row"  >
<div class="col-sm-3">
</div>
    <div class="col-sm-2"> <!--space row for the main css row 1-->
    
	<h1 ">Sign In</h1>
   </div>
   
   </div>
 

<div class="row">						<!--second row-->
    <div class="col-sm-4">                                  
    </div>


	<div class="col-sm-4">
 <form class="form-horizontal" name="formLog" action="loginForm.php" method="POST">
	  <div class="form-group">
	     
	  <div class="form-group">
	    <label for="name">User Name:</label>
	    <input type="text" class="form-control" name="uname">
	  </div>
	  <div class="form-group">
	    <label for="pwd">Password:</label>
	    <input type="password" class="form-control"  name="pwd">
	  </div>

 <button type="submit" class="btn btn-primary" name="login" onclick="create()">Sign In</button>
 	  
 
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
 <button type="reset" class="btn btn-primary" id="resetLog">Reset</button>
		
<h5>No Account?  <a href='RegistrationUser.php'> Register</h5>
	  

</form>
   </div>
   </div>

	<div class="col-sm-4">
	</div>



		


</div>
<div class="row" align="center" >
	
	<img src="images/login.png" width="500px" height="300px"/>
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
	
	if(isset($_POST['login']))
	{
	
	$uname=$_POST['uname'];
	$pwd=$_POST['pwd'];

	$sql="SELECT * FROM user WHERE Full_Name='$uname' AND  Password='$pwd' ";

  	$result=$conn->query($sql);
  	#$row = $result->fetch_assoc();
  	#if($row){

	$result=$conn->query($sql);
	
	if(!$row=$result->fetch_assoc()){

		?>
		<script>alert("Can't log in supply a valid user name and password");</script>
<?php

	
	}
	else{
		session_start();

		$_SESSION['Password']=$row['Password'];
		$_SESSION['uname']=$row['U_Id'];
		$_SESSION['username']=$row['Full_Name'];
		$_SESSION['addr']=$row['Address'];
		$_SESSION['BDate']=$row['BirthDate'];
		$_SESSION['conNo']=$row['Contact_No'];
		$_SESSION['emai']=$row['Email'];
		$_SESSION['U_Image']=$row['U_Image'];

		header("Location: afterloginHome.php");
	}
	
	
	}
?> 
