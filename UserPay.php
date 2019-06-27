 
<?php
	
	
include'dbCon.php';


include 'afterlogin.php';
	
	
	if(isset($_POST['but1']))
	{
	
	
		$date=$_POST['date'];
		$time=$_POST['time'];
		$net=$_POST['net'];
		$cardno = $_POST["cardno"];
		$fname = $_POST["fname"];

		$address = $_POST["address"];
		$country = $_POST["country"];
		$phonum = $_POST["phonum"];
		$email = $_POST["email"];
		$paytype = $_POST["type"];

	$insert ="INSERT INTO `payment`(`Date`, `Time`, `Net Amount`, `Card No`, `Name`, `Address`, `Country`, `Phone No`, `Email`, `Pay Type`)
						 VALUES ('$date','$time','$net','$cardno','$fname','$address','$country','$phonum','$email','".$paytype."')";	
	
			$result=mysqli_query($conn,$insert);
	
		if($result)
		{
			
?>			
			 <div class="row">
	 	
	 	
	 	<div class="col-sm-2">
</div>
	 				
		<div class="col-sm-8">
			
			    <div class="panel panel-primary">
      <div class="panel-heading"><h4 ><?php echo $_SESSION['username']; ?> Payment Details</h4></div>
      <div class="panel-body">
			
 <table class="table">
	  <thead>
      <tr>
        <th>Name</th>
        <th>Email</th>
        <th>Pay Type</th>
        <th>Net Amount</th>
        <th>Date</th>
         <th>Time</th>
        
      </tr>
    </thead>



<?php
	if ($result) {
		
	}{
		
		    echo"<tbody>"; 
      		echo "<tr class='success'>";
        	echo"<td>".$_POST["fname"]."</td>";
        	echo"<td>".$_POST["email"]."</td>";
        	echo"<td>".$_POST["type"]."</td>";
			echo"<td>".$_POST['net']."</td>";
			echo"<td>".$_POST['date']."</td>";
			echo"<td>".$_POST['time']."</td>";
			
      		echo "</tr>";
			echo "</tbody>";
	}
	
		echo "</table>";
		
		

		

?>
		 </div>
		  </div>
		   </div>
		  </div>	
<?php			
			
			
			
			
		}

		else
		{
			echo "Fail to insert record <br/>".mysqli_error($conn);
		}
	
	}
	

?>
<div class="row" align="center">
	

	<img src="images/slip.png"  width="450px" height="300px"/>
		

	
</div> 

<div class="row" align="center">
	
	<h3>Thank You for Using Our Service</h3>
</div>
 
<div class="row">
		
	<br/><br/><br/><br/><br/><br/><br/><br/>
			
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
