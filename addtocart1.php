<?php
include 'dbCon.php';


	$sql="SELECT * FROM `car` ";
	
	$result=mysqli_query($conn, $sql);



            while($row=mysqli_fetch_array($result)){          
?>
                     <img src="<?php  echo $row['image']; ?>"  >
<?php
            }

?>