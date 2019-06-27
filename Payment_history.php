<?php
	include 'dbCon.php';
		
	$result = mysqli_query($conn,"SELECT * FROM payment");

	echo"<table border='5'>";
	echo"<h2>Payment History</h2>";
	
		echo"<tr>";
			echo"<th>Card Number</th> <th>First Name</th> <th>Last Name</th> <th>Address</th> <th>Country</th> <th>Phone Number</th> <th>Email</th> <th>Pay Type</th>";
		echo"</tr>";
	while($row = mysqli_fetch_array($result))
	{
		echo "<tr>";
			echo "<td>".$row['cardno']."</td>";
			echo "<td>".$row['fname']."</td>";
			echo "<td>".$row['lname']."</td>";
			echo "<td>".$row['address']."</td>";
			echo "<td>".$row['country']."</td>";
			echo "<td>".$row['phone']."</td>";
			echo "<td>".$row['email']."</td>";
			echo "<td>".$row['paytype']."</td>";
		echo "</tr>";
		echo "<br/>";
	}
	echo"</table>";
	
	$num = mysqli_num_rows($result);
	
	echo"<br/><br/>";
	echo "<b>";
	echo "Number of payment done : ".$num;
	echo"</b>";
	
?>
