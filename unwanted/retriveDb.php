<?php
require"dbCon.php";

$sql="select * from student";

$result=mysqli_query($conn,$sql);
if($result){

    while($row=mysqli_fetch_array($result)){

        echo $row['Sid']." ".$row['Sname']." ".$row['Address'];
        echo"<br/>";
    }
}

?>