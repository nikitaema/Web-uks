<?php
session_start(); // Start the session

// Destroy all session data
session_unset();
session_destroy();

// Redirect to login page or home page
header("Location: cek_login.php"); // Change to your desired redirect page
exit();
?>
