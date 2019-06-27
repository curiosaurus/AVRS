<?php
	
	
	include 'dbCon.php';
	include 'navBar.php';
	
	$newCarId=$_SERVER['QUERY_STRING'];
			
	
		$sql="DELETE FROM `car` WHERE C_Id='$newCarId'";
	
	//$sql="DELETE FROM Car WHERE  ";
	
	$result=mysqli_query($conn,$sql);

	$result=$conn->query($sql);
	
	
	if($result){
		?>
		<script>alert("Done");</script>
<?php
		header("Location: cars.php");
	
	}
	else{

		echo "NOT DONE";
	}
?> 
