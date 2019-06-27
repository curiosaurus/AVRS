<?php
include 'dbCon.php';
$sql="DROP TABLE cart";
$result=mysqli_query($conn,$sql);

session_start();
session_destroy();
header("Location : home.php");

?>
