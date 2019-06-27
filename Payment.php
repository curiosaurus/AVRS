<?php
include'dbCon.php';


include 'afterlogin.php';



$sql="select Price from cart";
$result=mysqli_query($conn,$sql);
$sum=0;
while ($row=mysqli_fetch_array($result)){
    $sum = $sum + $row['Price'];
}
?> 
<!DOCTYPE HTML>
<html>
	<body>
		
			 <div class="row">
	 	
	 	 	<div class="col-sm-2"></div>
	 	<div class="col-sm-4">
	 		
	 		<h2>Payment Details</h2>
	 		</div>
	 		</div>
		
		
			 <div class="row">
	 	
	 	
	 	<div class="col-sm-3">
</div>
<div class="col-sm-8">
		<form name="payment" onsubmit="return formValidate" method="POST" action="UserPay.php">
			
			<table>
				<h3> Card Data </h3>
				<tr>
					<td>Card Number : </td>
					<td><input type="text" name="cardno" required/> </td>
				</tr>
				<tr>
					<td>Card Type : </td> 
					<td><select name="type" required/>
						<option selected > --Select--
						<option> Visa </option>
						<option> Master Card </option>
						<option> Paypal </option>
						<option> American Express </option>
						</select><td/>
				</tr>
				<tr>
					<td>Billing Date : </td>
					<td><input type="date" name="date" value="<?php echo date("Y/m/d") ?>" readonly/> </td>
				</tr>
				<tr>
					<td>Billing Time : </td>
					<td><input type="time" name="time" value="<?php echo date("h:i:sa") ?>" readonly/> </td>
				</tr>
				<tr>
					<td>Net Amount : </td>
					<td><input type="time" name="net" value="<?php echo $sum ?>" readonly/> </td>
				</tr>
			</table>
			<table>
					<h3> Billing Address </h3>
				<tr>
					<td>First Name : </td>
					<td><input type="text" name="fname" required/> </td>
				</tr>
				<tr>
					<td>Last Name : </td>
					<td><input type="text" name="lname" required/></td>
				</tr>
				<tr>
					<td>Address : </td>
					<td><textarea name="address" cols="40" rows="4" required></textarea></td>
				</tr>
				<tr>
					<td>Country : </td>
					<td><input type="text" name="country" required/></td>
				</tr>
				<tr>
					<td>Phone Number : </td>
					<td><input type="text" name="phonum" required/></td>
				</tr>
				<tr>
					<td>Email : </td>
					<td><input type="email" name="email" required/></td>
				</tr>
			</table>
			<table>
					<h3> Additional Information </h3>
				<tr>
					<td> Secial Notes : </td>
					<td><textarea name="special" cols="40" rows="4"></textarea></td>
				</tr>
			</table>
			<table>
				<tr><br/><br/>
					<td><input type="submit" class="btn btn-primary" value="Pay Now" name="but1" /></td>
				</tr>
			</table>
		</form>
		
		
		</div>
		</div>
	</body>
</html>


<div class="row"><br/><br/></div>

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
