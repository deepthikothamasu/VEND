<?php 
session_start();
extract($_REQUEST); // Extracting the Request.

session_unset();
session_destroy();
header("Location:index.php");
?>