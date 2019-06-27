

<?php

	include 'dbCon.php';
	include 'navBar.php';	

	$UID=$_SESSION['A_name'];
	
	$sql="SELECT * FROM `car` WHERE 1";
	
	$result=mysqli_query($conn, $sql);
?>  
                                                                                            
	 <div class="row">			
<div class="col-sm-2">
</div>

<div class="col-sm-2">
	<h2 > Our Car Details</h2>
</div>

</div>

	 <div class="row">
	 	
	 	
	 	<div class="col-sm-2">
</div>
	 				
		<div class="col-sm-8">
 <table class="table">
	  <thead>
      <tr>
        <th>Car Id</th>
        <th>Model Name</th>
      
        
        <th>Brand</th>
        <th>Color</th>
        <th>No_Of_Pas</th>
        <th>Price</th>
      
        <th>Fuel Type</th>
        <th>Image</th>
        <th>EDIT</th>
        <th>DELETE</th>
        
      </tr>
    </thead>



<?php
	while($row=mysqli_fetch_array($result)){
		
		    echo"<tbody>"; 
      		echo "<tr class='success'>";
        	echo"<td>".$row['C_Id']."</td>";
        	echo "<td>".$row['Model_Name']."</td>";
			echo"<td>".$row['Brand']."</td>";
			echo"<td>".$row['Color']."</td>";
			echo"<td>".$row['No_Of_Pas']."</td>";
			echo"<td>".$row['price']."</td>";
			echo"<td>".$row['FuelType']."</td>";
			echo"<td>"; ?> <img src="<?php echo $row['image']; ?>" height="100" width="100" <?php echo "</td>";
			echo"<td>"."<a href=EditCarDetails.php?".$row['C_Id']; echo">EDIT</a></td>";
			echo"<td>"."<a href=DeleteCarDetails.php?".$row['C_Id']; echo">DELETE</a></td>";
      		echo "</tr>";
			echo "<br/>";
			echo "</tbody>";
	}
	
		echo "</table>";


?>
</div>
</div>






