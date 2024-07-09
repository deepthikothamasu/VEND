<?php
    session_start();
    unset($_SESSION['login_username']); 
    unset($_SESSION['login_email']); 
    unset($_SESSION['login_id']); 
    unset($_SESSION['login_phone']); 
    session_unset();
    session_destroy();
    // After unsetting the all session variables it will redirected to the index page.
     echo "<script>window.location.assign('index.php?logout')</script>";
?>
