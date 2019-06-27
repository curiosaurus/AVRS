<?php

session_start();
session_destroy();

header("Location: AdminLoginPage.php");

?>
