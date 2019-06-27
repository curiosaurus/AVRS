<?php
	session_start();
	
	include 'dbCon.php';
	include'beforeLoginNavAdmin.php';
	
	$Aname=$_POST['uname'];
	$Apwd=$_POST['pwd'];

	$sql="SELECT * FROM Admin WHERE A_Name='$Aname' AND  Password='$Apwd' ";

	$result=$conn->query($sql);
	
	if(!$row=$result->fetch_assoc()){
?>
		<script>alert("Can't log in supply a valid user name and password");</script>
<?php


	}
	else{
		$_SESSION['A_name']=$row['A_Id'];
		$_SESSION['Admin_name']=$row['A_Name'];
	
	
		$_SESSION['A_conNo']=$row['Contact_No'];
		$_SESSION['A_emai']=$row['E_mail'];
		header("Location: AdminHomePage.php");
		
	}
	
?> 





	<div class="container">

	
  <div class="row">
<div class="col-sm-3">
</div>
    <div class="col-sm-4"> <!--space row for the main css row 1-->
    
	<h1 class="bg-primary"> Admin Log In</h1>
   </div>
  </div>

<div class="row">						<!--second row-->
    <div class="col-sm-4">                                  
    </div>


	<div class="col-sm-4">
 <form class="form-horizontal" name="formAdminLog" action="Adminlogin.php" method="POST">
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
