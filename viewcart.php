<?php

	include 'dbCon.php';
	include 'afterlogin.php';	

    //$C_Id= $_SESSION['C_Id'];
	
	$sql="SELECT * FROM cart";
	
	$result=mysqli_query($conn, $sql);
?>  
                                                                                            
	 <div class="row">			
<div class="col-sm-1">
</div>

<div class="col-sm-8">
	 <h2 > &nbsp;&nbsp;&nbsp; Your Booking Details </h2>
</div>

</div>

	 <div class="row">
	 	<br/>
	 	
	 	<div class="col-sm-2">
</div>
	 				
		<div class="col-sm-8">
 <table class="table">
	  <thead>
      <tr>
        
        <th>Model Name</th>
      
        
        <th>Price</th>
      
        
        
      </tr>
    </thead>



<?php
	while($row=mysqli_fetch_array($result)){
		
		    echo"<tbody>"; 
      		echo "<tr class='success'>";
        	
        	echo "<td>".$row['Model_Name']."</td>";
			echo"<td>".$row['Price']."</td>";
			echo "<td>"."<a href=updateCart.php?".$row['C_Id'].">Remove</td>";
      		echo "</tr>";

			echo "</tbody>";
	}
	
		echo "</table>";
		


?>
			
			
</div>
</div>


<div class="row">
<br/>
</div>

<div class="row">
	
	 	<div class="col-sm-2">
</div>


 	<div class="col-sm-4">
 		
 		<form name="form1" action="items.php" method="post">
 			
 			<button type="submit" class="btn btn-primary" name="login" >Back to Shopping </button>
		
			</form>
</div>

 	<div class="col-sm-4" align="right">
 		<form name="form2" action="Payment.php" method="post">
 			<button type="submit" class="btn btn-primary" name="login" >Buy </button>
		
			</form>
</div>

 	<div class="col-sm-2">
</div>
	
</div>


<div class="row"><br/> <br/ ></div>


<div class="row" align="center">
	
	<img src="images/bookd.png" />
	
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

