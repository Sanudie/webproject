<?php

session_start();

require 'connection.php';

$username = $_POST['username'];
$password = $_POST['password'];

$checkaccount = "SELECT * FROM users WHERE Username='$username' AND Password='$password'";
$result = $conn->query($checkaccount);
if ($result->num_rows == 1) {
    $user = $result->fetch_assoc();
    $getusername = "SELECT username FROM users WHERE username='$username'";
    $_SESSION['admin_name'] = $getusername;
    $email = "SELECT email FROM users WHERE username='$username'";
    $_SESSION['admin_email'] = $email;
    $_SESSION['loginstatus'] = "Successfully Logged In.";
    header("Location: admin.php");
    exit;
} else {
    $_SESSION['loginstatus'] = "Username or password is incorrect!";
    header("Location: login.php"); // Redirect to login page with error message
    exit;
}

$conn->close();

?>
