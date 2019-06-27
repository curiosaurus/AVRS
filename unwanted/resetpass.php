<?php
include 'dbCon.php';
include'afterlogin.php';

	if(isset($_POST['resetPwd']) && isset($_POST['oPass']) && isset($_POST['Npwd']) &&isset($_POST['CNpwd'])){
			
		$oPass=$_POST['oPass'];
		$Npwd=$_POST['Npwd'];
		$CNpwd=$_POST['CNpwd'];
		$oldpass=$_SESSION['Password'];
		$name=$_SESSION['uname'];
				
			if(!empty($oPass) && !empty($Npwd) && !empty($CNpwd) ){
				
				if($oPass== $oldpass){
				
				
						if($Npwd != $CNpwd){
							echo "Password doesen't match";
						}
						else {
							$sql="UPDATE `User` SET `Password`='$CNpwd' WHERE Password='$oldpass'";
							$result=mysqli_query($conn,$sql);
							if ($result) {
								echo "Sucsess";
							}
							else {
								echo "not sucess";
							}
						}
				}
				else {
					echo "Wrong Old Password";
				}
			}
			else {
				echo "All fields are reqired..";
			}
	}
	else {
		echo "baddd";
	}


?>