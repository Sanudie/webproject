<?php

require 'database_connection.php';

$username = $_POST['username'];
$password = $_POST['password'];

$checkaccount = "SELECT * FROM users WHERE Username='$username' AND Password='$password'";
$result = $conn->query($checkaccount);
if ($result->num_rows == 1) {
    header("Location: homeafterlogin/home.php");
    exit;
} else {
    echo "Username or password is incorrect!";
}

$conn->close();

?>