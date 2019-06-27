<?php

	include 'dbCon.php';
	include'afterlognav.php';

	
	
	$sql="SELECT * FROM User WHERE 1";
	
	$result=mysqli_query($conn, $sql);
?>

	 <div class="row">			
<div class="col-sm-2">
</div>

<div class="col-sm-3">
	<BR>
</div>

</div>

	 <div class="row">
	 	
	 	
	 	<div class="col-sm-2">
</div>
	 				
		<div class="col-sm-8">
			
			    <div class="panel panel-primary">
      <div class="panel-heading"><h4 >All User Details</h4></div>
      <div class="panel-body">
			
 <table class="table">
	  <thead>
      <tr>
        
        <th>Full Name</th>
        <th>Address</th>
        <th>Birth Date</th>
        <th>Contact No</th>
         <th>Email</th>
        <th>Delete User</th>
      </tr>
    </thead>



<?php
	while($row=mysqli_fetch_array($result)){
		
		    echo"<tbody>"; 
      		echo "<tr class='success'>";
        	
        	echo "<td>".$row['Full_Name']."</td>";
        	echo"<td>".$row['Address']."</td>";
			echo"<td>".$row['BirthDate']."</td>";
			echo"<td>".$row['Contact_No']."</td>";
			echo"<td>".$row['Email']."</td>";
			echo"<td>"."<a href=deleteUser.php?".$row['U_Id']; echo">Delete</a></td>";
      		echo "</tr>";
			echo "</tbody>";
	}
	
		echo "</table>";

		

?>
</div>
</div>

</div>
    </div>




<div class="row">
	<br/>
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
