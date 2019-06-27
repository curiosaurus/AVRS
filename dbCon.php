<?php
    $host="localhost";
    $Hname="root";
    $Hpwd="";
    $conn=mysqli_connect($host,$Hname,$Hpwd);

    if(!mysqli_connect($host,$Hname,$Hpwd) || !mysqli_select_db($conn,"AVRS")){

        echo "Failed";
    }
    
?>
