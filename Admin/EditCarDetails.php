<?php
	
	
	include 'dbCon.php';
	include'afterlognav.php';
	
	$newCarId=$_SERVER['QUERY_STRING'];
			
	

	$sql="SELECT * FROM `car` WHERE C_Id='$newCarId'";
	//$sql="SELECT * FROM Car WHERE C_Id='$newCarId' ";
	
	$result=mysqli_query($conn,$sql);

	//$result=$conn->query($sql);
	
	
	if(!$row=$result->fetch_assoc()){
		?>
		<script>alert("Not Done");</script>
<?php

	
	}
	else{
		$_SESSION['C_Id']=$row['C_Id'];
		$_SESSION['Model_Name']=$row['Model_Name'];
		$_SESSION['Color']=$row['Color'];
		$_SESSION['No_Of_Pas']=$row['No_Of_Pas'];
		$_SESSION['price']=$row['price'];
		$_SESSION['FuelType']=$row['FuelType'];
		$_SESSION['image']=$row['image'];
		$_SESSION['Brand']=$row['Brand'];
	
	}
?> 




		

    	

	 <div class="row">			
<div class="col-sm-2">
</div>

<div class="col-sm-3">
	<h3>Update Your Details</h3>
</div>
</div>


	 <div class="row">
<div class="col-sm-3">
</div>
	 				
<div class="col-sm-5">
	
	

<form name="formEdit" action="EditCarDetails.php" method="POST">

	<div class="form-group">
    <label for="Model_Name">Model Name:</label>
    <input type="text" class="form-control" name="Model_Name"  value="<?php echo $_SESSION['Model_Name'] ?>">
  </div>
  
  <div class="form-group">
    <label for="Brand">Brand:</label>
    <input type="text" class="form-control" name="Brand" value="<?php echo $_SESSION['Brand'] ?>">
  </div>
  
  	<div class="form-group">
    <label for="Color">Color:</label>
    <input type="text" class="form-control" name="Color" value="<?php echo $_SESSION['Color'] ?>">
  </div>
  
  	<div class="form-group">
    <label for="No_Of_Pas">No_Of_Passengers:</label>
    <input type="text" class="form-control" name="No_Of_Pas" value="<?php echo $_SESSION['No_Of_Pas'] ?>">
  </div>
  
  	<div class="form-group">
    <label for="price">Price:</label>
    <input type="text" class="form-control" name="price"  value="<?php echo $_SESSION['price'] ?>">
  </div>
  
  
   <div class="form-group">
    <label for="FuelType">FuelType:</label>
    <input type="text" class="form-control" name="FuelType" value="<?php echo $_SESSION['FuelType'] ?>">
  </div>
  
     <div class="form-group">
    <label for="image">Image:</label>
    <input type="text" class="form-control" name="image" value="<?php echo $_SESSION['image'] ?>">
  </div>
  
 
  
  <button type="submit" class="btn btn-default" name="update">Update</button>  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  <button type="reset" class="btn btn-default">Reset</button>


</form>

</div>
</div>



<?php

	
	if(isset($_POST['update'])){
		$C_Id= $_SESSION['C_Id'];
		

		$Model_Name=$_POST['Model_Name'];
		$Brand=$_POST['Brand'];
		$Color=$_POST['Color'];
		$No_Of_Pas=$_POST['No_Of_Pas'];
		$price=$_POST['price'];
		$FuelType=$_POST['FuelType'];
		$image=$_POST['image'];
		
		$sql="UPDATE `car` SET 
		`C_Id`='',
		`Model_Name`='$Model_Name',
		`Brand`= '$Brand' ,
		`Color`= '$Color' ,
		`No_Of_Pas`= '$No_Of_Pas' ,
		`price`= '$price' ,
		`FuelType`= '$FuelType' ,
		`image`= '$image' 
		
		 WHERE C_Id='$C_Id' ";
		
		
		
			
					
					
		if($result=mysqli_query($conn, $sql)){
?>	
			<script>
				alert("Successfully Updated your record");
			</script>
			
			
<?php
		//header("Location: AdminHomePage.php");
			
		}
		else{
			
			echo "Badd";
		}
		
		//header("Location: afterloginHome.php");
	}
?>






