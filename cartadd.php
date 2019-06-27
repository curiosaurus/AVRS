<?php
include 'dbCon.php';
	include 'afterlogin.php';
	
	
		$C_Id= $_SESSION['C_Id'];
		

		$Model_Name=$_POST['Model_Name'];
		$Brand=$_POST['Brand'];
		$Color=$_POST['Color'];
		$No_Of_Pas=$_POST['No_Of_Pas'];
		$price=$_POST['price'];
		$FuelType=$_POST['FuelType'];
	
		
				
		$sql="INSERT INTO `cart`(`C_Id`, `Model_Name`, `Price`) VALUES ('$C_Id','$Model_Name','$price')";
						
					
			
					
		if($result=mysqli_query($conn, $sql)){
?>	
			<script>
				alert("Successfully Updated your record");
			</script>
			
			
<?php
		//header("Location: home.php");
			
		}
		else{
			
			echo "Badd";
		}
		
		//header("Location: afterl.php");
?>


<div class="container">
	<div class="row">
		
		 <div class="col-sm-4">                                  
    </div>
    
    	 <div class="col-sm-4"> 
    	 	
    	 	<form name="form1" action="items.php" method="POST">
    	 		
    	 				<input type="submit" value="Back To Shopping">	
    	 		
    	 	</form>  
    	 	
    	 	<form name="form2" action="viewcart.php" method="POST">
    	 		
    	 				<input type="submit" value="View Cart">	
    	 		
    	 	</form>                               
    </div>
		
<div>
</div>
