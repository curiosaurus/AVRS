<?php
	
	
	include 'dbCon.php';
	include 'afterlogin.php';
	
	$newCarId=$_SERVER['QUERY_STRING'];
			
	

	
	$sql="SELECT * FROM car WHERE C_Id='$newCarId' ";
	
	$result=mysqli_query($conn,$sql);

	$result=$conn->query($sql);
	
	
	if(!$row=$result->fetch_assoc()){
		?>
		<script>alert("Not Done");</script>
<?php

	
	}
	else{
		$_SESSION['C_Id']=$row['C_Id'];
		$Model_Name=$row['Model_Name'];
		$Brand=$row['Brand'];
		$_SESSION['Color']=$row['Color'];
		$_SESSION['No_Of_Pas']=$row['No_Of_Pas'];
		$price=$row['price'];
		$_SESSION['FuelType']=$row['FuelType'];
		$_SESSION['image']=$row['image'];
	
		$C_Id= $_SESSION['C_Id'];
		
		$sql="update car set booked=1 where C_Id=$C_Id";
		$result=mysqli_query($conn,$sql);
		$result=$conn->query($sql);
	
	}
?> 





	
<?php				
		$sql="INSERT INTO `cart`(`C_Id`, `Model_Name`, `Price`) VALUES ('$C_Id','$Model_Name','$price')";
						
					
			
					
		if($result=mysqli_query($conn, $sql)){
?>	
			<script>
				alert("Successfully Updated your record");
			</script>
			
			
<?php
		header("Location: items.php");
			
		}
		else{
			
			echo "Badd";
		}
		
		//header("Location: afterl.php");
?>




