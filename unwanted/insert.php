<?php
    include"dbCon.php";
if(isset($_POST['submit'])){

        $sid=$_POST['Sid'];
    $sname=$_POST['Sname'];
    $address=$_POST['address'];

    $sql="Insert into student values('$sid','$sname','$address')";

    if(!mysqli_query($conn,$sql)){

            echo"Failed";
    }  
    else{

        echo"susseccfully inserted your record";
    } 

}


?>