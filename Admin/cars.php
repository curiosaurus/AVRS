

<?php

	include 'dbCon.php';
	
	include'afterlognav.php';
	


	
	$sql="SELECT * FROM `car` WHERE 1";
	
	$result=mysqli_query($conn, $sql);
?>  
                                                                                          


	 <div class="row">
	 	<div class="col-sm-2"></div>
		
	 	
	 	
	 	<div class="col-sm-8">		
		    
      				
 



<?php
	while($row=mysqli_fetch_array($result)){
		    	
				echo "<div class='panel panel-primary'>";
      			echo "<div class='panel-heading'><h4 > ".   $row['Model_Name']   ."</h4></div>";
      			echo "<div class='panel-body' >";
				
				
	echo " <table class='table'>";
		    echo"<tbody >"; 
      		echo "<tr >";
			echo"<td>"; ?> <img src="<?php echo $row['image'];  ?>" height="200" width="170" <?php echo "</td>";
        	//echo"<td>".$row['C_Id']."</td>";
        	
			echo "<td>";
			echo  "<b>Brand:</b><br/>".$row['Brand']."<br/>";
			echo  "<b>Color:</b><br/>".$row['Color']."<br/>";
			echo  "<b>No Of Passengers:</b><br/>".$row['No_Of_Pas']."<br/>";
			echo "<b>Price:</b><br/>".$row['price']."<br/>";
			echo  "<b>Fuel Type:</b><br/>".$row['FuelType']."<br/>";
			echo "</td>";
			
						echo"<td><br/>"."<a href=EditCarDetails.php?".$row['C_Id']; echo">EDIT</a></td>";
			echo"<td><br/>"."<a href=DeleteCarDetails.php?".$row['C_Id']; echo">DELETE</a></td>";
      		echo "</tr>";
			
			
			
		
			echo "</tbody>";
			echo "</table>";
			echo "</div>";
			echo "</div>";
	}
	
		


?>


</div>

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
	
	
	
	




