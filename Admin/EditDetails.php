






<?php
include 'dbCon.php';
include 'afterlogin.php';

$newId=$_SERVER['QUERY_STRING'];

$sql="SELECT * FROM User WHERE U_Id='$newId'";

$result=mysqli_query($conn,$sql);
?>

 
<div class="row">
			<div class="col-sm-2">
			</div>
			
			<div class="col-sm-8">
			
			<img src="images/edit.png" width="600px" height="200px" />
			</div>
	
		
</div>
	 <div class="row">			
<div class="col-sm-2">
</div>

<div class="col-sm-3">
	
</div>
</div>


	 <div class="row">
<div class="col-sm-3">
</div>
	 				
<div class="col-sm-5">
	
	

<form name="formEdit" action="edit.php" method="POST">

	<div class="form-group">
    <label for="fName">Full Name:</label>
    <input type="text" class="form-control" name="fname"  value="<?php echo $_SESSION['username'] ?>">
  </div>
  
  <div class="form-group">
    <label for="addr">Address:</label>
    <input type="text" class="form-control" name="addr" value="<?php echo $_SESSION['addr'] ?>">
  </div>
  
  	<div class="form-group">
    <label for="Bdate">Birth Date:</label>
    <input type="date" class="form-control" name="bDate"value="<?php echo $_SESSION['BDate'] ?>">
  </div>
  
  	<div class="form-group">
    <label for="Cno">Contact No:</label>
    <input type="text" class="form-control" name="Cno" value="<?php echo $_SESSION['conNo'] ?>">
  </div>
  
  	<div class="form-group">
    <label for="email">Email:</label>
    <input type="email" class="form-control" name="email"  value="<?php echo $_SESSION['emai'] ?>">
  </div>
  
  
 
  <button type="submit" class="btn btn-primary" name="update">Update</button>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <button type="reset" class="btn btn-primary" name="">Reset</button>
  


</form>

</div>
</div>


<div class="row">
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


</div>





<?php
include 'dbCon.php';

		if(isset($_POST['update'])){

		$uId= $_SESSION['uname'];
		

		$fname=$_POST['fname'];
		$add=$_POST['addr'];
		$bDate=$_POST['bDate'];
		$contnO=$_POST['Cno'];
		$email=$_POST['email'];
		
				
		$sql="UPDATE User
				SET Full_Name='$fname',
					Address='$add',
					BirthDate='$bDate',
					Contact_No='$contnO',
					Email='$email' 
					
					WHERE U_Id='$uId'      ";
					
		if($result=mysqli_query($conn, $sql)){
?>	
			<script>
				alert("Successfully Updated your record");
			</script>
			
			
<?php
			
		}
		else{
			
			echo "Badd";
		}
		
		//header("Location: afterloginHome.php");
		}
?>




