<?php
	

	include 'dbCon.php';
	include'afterlognav.php';

	
	$user=$_SERVER['QUERY_STRING'];
			
	

	
	$sql="DELETE FROM User WHERE U_Id='$user' ";
	
	$result=mysqli_query($conn, $sql);
	
	if($result=mysqli_query($conn, $sql))
	{
			header("Location: allusers.php");
	}
	?>