<?php 

include'afterlogin.php';

?>




    	
    	
    	
    	



	
  <div class="row">
<div class="col-sm-3">
</div>
    <div class="col-sm-4"> <!--space row for the main css row 1-->
    		<h2>Reset Password</h2>
	
   </div>
  </div>

<div class="row">						<!--second row-->
    <div class="col-sm-4">                                  
    </div>


	<div class="col-sm-4">
 <form class="form-horizontal" name="formLog" action="resetPass.php" method="POST">
	  <div class="form-group">
	     
	  <div class="form-group">
	    <label for="oPass">Old Password:</label>
	    <input type="password" class="form-control" name="oPass">
	  </div>
	  <div class="form-group">
	    <label for="Npwd">New Password:</label>
	    <input type="password" class="form-control"  name="Npwd">
	  </div>
	  
	  <div class="form-group">
	    <label for="CNpwd">Confirm New Password:</label>
	    <input type="password" class="form-control"  name="CNpwd">
	  </div>
	  
	  <button type="submit" class="btn btn-primary" name="resetPwd">Reset Password</button>
 
 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

		

	  

</form>
   </div>

	<div class="col-sm-4">
	</div>
</div>

</div>

 <div class="row">
 	<br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>

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



<?php
include 'dbCon.php';


	if(isset($_POST['resetPwd'])){
			
		$oPass=$_POST['oPass'];
		$Npwd=$_POST['Npwd'];
		$CNpwd=$_POST['CNpwd'];
		$oldpass=$_SESSION['Password'];
		$name=$_SESSION['uname'];
		$id=$_SESSION['uname'];		
			if(!empty($oPass) && !empty($Npwd) && !empty($CNpwd) ){
				
				if($oPass== $oldpass){
				
				
						if($Npwd != $CNpwd){
?>
								<script>alert("Password doesen't match");</script>
<?php
						}
						else {
							$sql="UPDATE `User` SET `Password`='$CNpwd' WHERE U_Id='$id'";
							$result=mysqli_query($conn,$sql);
							if ($result) {
?>
							<script>alert("Successfuly Reset Your Password");</script>
								
<?php
							}
							else {
								echo "not sucess";
							}
						}
				}
				else {
?>
						<script>alert("Wrong Old Password");</script>
<?php
				}
			}
			else {
?>
				<script>alert("All fields are reqired..");</script>
<?php
			}
	}
	//else {
		//echo "baddd";
//		}


?>
