<?php
session_start();
?>



<?php
include 'dbCon.php';
include 'navBar.php';

		$uId= $_SESSION['uname'];
		

		$fname=$_POST['fname'];
		$add=$_POST['addr'];
		$bDate=$_POST['bDate'];
		$contnO=$_POST['Cno'];
		$email=$_POST['email'];
		
				
		$sql="UPDATE User
				SET Full_Name='$fname',
					Address='$add',
					BirthDate='$bDate',
					Contact_No='$contnO',
					Email='$email' 
					
					WHERE U_Id='$uId'      ";
					
		if($result=mysqli_query($conn, $sql)){
?>	
			<script>
				alert("Successfully Updated your record");
			</script>
			
			
<?php
			
		}
		else{
			
			echo "Badd";
		}
		
		//header("Location: afterloginHome.php");
?>



