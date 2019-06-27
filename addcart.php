<?php
include 'dbCon.php';

$newsid=$_SERVER['QUERY_STRING'];

$sql="select * from item where itm_ID='$newsid'";
$result=mysqli_query($conn,$sql);

?>
<html>
	<head><title></title></head>
	<body>
		<?php
		while($row=mysqli_fetch_array($result)){
			$_SESSION['itm_ID']=$row['C_Id'];
			$_SESSION['itm_name']=$row['Model_Name'];
			$_SESSION['itm_price']=$row['price'];
			
			?>
		
		<form name="form2" method="post" action="addtocart.php">
		Vehicle ID : <input type="text" name="id" value="<?php echo $_SESSION['itm_ID'];?>"/>
		<br />
		vehicle : <input type="text" name="name" value="<?php echo $_SESSION['itm_name'];?>"/>
	 	<br />
	 	Price : <input type="text" name="price" value="<?php echo $_SESSION['itm_price'];?>"/>
		
		<?php
		}
		?>
		
	
		<br />
		
		
	<input type="submit" name="submit" value="Add" />
	
	
</form>
	</body>
</html>
