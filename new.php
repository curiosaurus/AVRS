

<?php

	include 'dbCon.php';
	
	include 'afterlogin.php';
	


	
	$sql="SELECT * FROM `car` WHERE 1";
	
	$result=mysqli_query($conn, $sql);
?>  
 <div class="container" style="background-color: #FOFFFO>                                                                                           
	 <div class="row">			
<div class="col-sm-2">
</div>

<div class="col-sm-2">
	<h2> Car Details</h2>
</div>

</div>

	 <div class="row">
	 	
	 	
	 	<div class="col-sm-2">
</div>
	 				
		<div class="col-sm-8">
 <table class="table">
	  <thead>
      <tr>
      	  <th>Image</th>
        
        <th>Model Name</th>
      
        
        <th>Brand</th>
        <th>Color</th>
        <th>No_Of_Pas</th>
        <th>Price</th>
      
        <th>Fuel Type</th>
      
        
        
      </tr>
    </thead>



<?php
	while($row=mysqli_fetch_array($result)){
		
		    echo"<tbody>"; 
      		echo "<tr class='success'>";
			echo"<td>"; ?> <img src="<?php echo $row['image']; ?>" height="100" width="100" <?php echo "</td>";
        	//echo"<td>".$row['C_Id']."</td>";
        	echo "<td>".$row['Model_Name']."</td>";
			echo"<td>".$row['Brand']."</td>";
			echo"<td>".$row['Color']."</td>";
			echo"<td>".$row['No_Of_Pas']."</td>";
			echo"<td>".$row['price']."</td>";
			echo"<td>".$row['FuelType']."</td>";
			
			echo "<td>"."<a href=addtocart.php?".$row['C_Id'].">Add to Cart<img src=images/cart1.png height=50 width=50/></td>";
      		echo "</tr>";
			echo "<br/>";
			echo "</tbody>";
	}
	
		echo "</table>";


?>
</div>
</div>

</div>




