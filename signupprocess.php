<?php

require 'database_connection.php';

$firstname = $_POST['fname'];
$lastname = $_POST['lname'];
$address = $_POST['Address'];
$email = $_POST['email'];
$username = $_POST['username'];
$password = $_POST['passwordSignIn'];

$checkemail = "SELECT * FROM users WHERE Email = '$email'";
$result = $conn->query($checkemail);
if ($result->num_rows == 1) {
    echo "Another account is using the same email!";
    exit;
}

$checkusername = "SELECT * FROM users WHERE Username = '$username'";
$result2 = $conn->query($checkusername);
if ($result2->num_rows == 1) {
    echo "That username is taken!";
    exit;
}


$sql = "INSERT INTO users(Fname, Lname, Address, Email, Username, Password) VALUES ('$firstname', '$lastname', '$address', '$email','$username','$password')";

if ($conn->query($sql) === TRUE) {
    header("Location: login.php");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

?>