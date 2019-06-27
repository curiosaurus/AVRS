

<?php
	session_start();

require 'dbCon.php';


$username="akash";
$pwd=16988;

	$sql="SELECT U_Id FROM User WHERE Full_Name='$username' AND  Password='$pwd' ";


		if(!empty($username)==TRUE && !empty($pswd)==TRUE){
			
			
		
	echo "1";
			if ($query_run=mysqli_query( $conn,$sql)){
				
				echo "b";
				$row=$query_run->fetch_assoc();
				echo "fetch";
				
				$query_num_rows=mysqli_num_rows($query_run);
			
				if(@$query_num_rows==0){
					
					echo"Invalid user name password";
				}
				else if(@$query_num_rows==1){
					
					echo "you are loged in as $username  <a href='logout.php'>logout</a>";
					//echo $user_id=mysql_result($query_run, 0,U_Id);
					
					$_SESSION['UID']=$row['U_Id'];

					//header("Location :index.php");
					
				}
			}
			
		}	
		else{
			
			echo"please supply a  valid user name and password";
		}
	


?>
