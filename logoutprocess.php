<?php
// Start the session
session_start();

// Destroy the session
session_destroy();

session_start();

$_SESSION['logout_message'] = "Logged Out";

header("Location: login.php");
exit();
?>
