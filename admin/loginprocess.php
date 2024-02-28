<?php

session_start();

require 'database_connection.php';

$username = $_POST['username'];
$password = $_POST['password'];

$checkaccount = "SELECT * FROM users WHERE Username='$username' AND Password='$password'";
$result = $conn->query($checkaccount);
if ($result->num_rows == 1) {
    $user = $result->fetch_assoc();
    $_SESSION['username'] = $username;
    $_SESSION['loginstatus'] = "Successfully Logged In.";
    header("Location: homeafterlogin/home.php");
    exit;
} else {
    $_SESSION['loginstatus'] = "Username or password is incorrect!";
    header("Location: login.php"); // Redirect to login page with error message
    exit;
}

$conn->close();

?>
