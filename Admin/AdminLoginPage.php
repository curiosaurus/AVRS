<?php 

include'beforeLoginNavAdmin.php';

?>


	

	
  <div class="row">
<div class="col-sm-3">
</div>
    <div class="col-sm-4"> <!--space row for the main css row 1-->
    
	<h1 > Admin Log In</h1>
   </div>
  </div>

<div class="row">						<!--second row-->
    <div class="col-sm-4">                                  
    </div>


	<div class="col-sm-4">
 <form class="form-horizontal" name="formAdminLog" action="AdminLoginPage.php" method="POST">
	  <div class="form-group">
	     
	  <div class="form-group">
	    <label for="name">User Name:</label>
	    <input type="text" class="form-control" name="uname">
	  </div>
	  <div class="form-group">
	    <label for="pwd">Password:</label>
	    <input type="password" class="form-control"  name="pwd">
	  </div>
	  
 <button type="submit" class="btn btn-primary" name="login">Log In</button>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
 <button type="reset" class="btn btn-primary" id="resetLog">Reset</button>
		
	  

</form>
   </div>

	<div class="col-sm-4">
	</div>
</div>

</div>
</body>
</html>

<?php
	session_start();
	
	include 'dbCon.php';
	
	if(isset($_POST['login'])){
	$Aname=$_POST['uname'];
	$Apwd=$_POST['pwd'];

	$sql="SELECT * FROM admin WHERE A_Name='$Aname' AND  Password='$Apwd' ";

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
}
	
?> 
<div class="row">

	<br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
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
