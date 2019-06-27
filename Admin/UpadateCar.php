<?php
include 'dbCon.php';
	include 'navBar.php';
	
	
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
?>


