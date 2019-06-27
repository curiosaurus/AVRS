<?php
	

	include 'dbCon.php';
	include 'afterlogin.php';

	
	$newCarId=$_SERVER['QUERY_STRING'];
			
	

	
	$sql="DELETE FROM cart WHERE C_Id='$newCarId' ";
	
	$result=mysqli_query($conn, $sql);
	
	if($result=mysqli_query($conn, $sql))
	{
			$sql="update car set booked=0 where C_Id=$newCarId";
			$result=mysqli_query($conn,$sql);
			$result=$conn->query($sql);
			header("Location: viewcart.php");
	}
	?>
