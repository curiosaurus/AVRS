<?php
	session_start();
	
	include 'dbCon.php';
	include'normalhome.php';
	
	$uname=$_POST['uname'];
	$pwd=$_POST['pwd'];

	$sql="SELECT * FROM user WHERE Full_Name='$uname' AND  Password='$pwd' ";

	$result=$conn->query($sql);
	
	if(!$row=$result->fetch_assoc()){
		?>
		<script>alert("Can't log in supply a valid user name and password");</script>
<?php

	
	}
	else{
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
?> 





    	
    	
    	
    	

	<div class="container">

	
  <div class="row">
<div class="col-sm-3">
</div>
    <div class="col-sm-2"> 
    
	<h1>Sign In</h1>
   </div>
  </div>

<div class="row">					
    <div class="col-sm-4">                                  
    </div>


	<div class="col-sm-4">
 <form class="form-horizontal" name="formLog" action="login1.php" method="POST">
	  <div class="form-group">
	     
	  <div class="form-group">
	    <label for="name">User Name:</label>
	    <input type="text" class="form-control" name="uname">
	  </div>
	  <div class="form-group">
	    <label for="pwd">Password:</label>
	    <input type="password" class="form-control"  name="pwd">
	  </div>
	  
 <button type="submit" class="btn btn-default" name="login">Log In</button>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
 <button type="reset" class="btn btn-default" id="resetLog">Reset</button>
		
<h5>No Account?  <a href='RegistrationUser.php'> Register</h5>
	  

</form>
   </div>

	<div class="col-sm-4">
	</div>
</div>

</div>
</body>
</html>
