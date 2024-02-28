<?php

if(isset($_POST["Name"])){
$Name = $_POST['Name'];
$Email = $_POST['Email']; 
$Address = $_POST['Address']; 
$City = $_POST['City']; 
$State = $_POST['State']; 
$Amount = $_POST['Amount']; 



if (!empty($Name)) {

    $conn = mysqli_connect('localhost', 'root', '', 'petadoption_db');


if ($conn->connect_error) {
  die("Connection failed " );
}else{
    $stmt = $conn->prepare("INSERT INTO donate (Name, Email, Address, City , State, Amount) VALUES (?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("ssssss", $Name, $Email, $Address, $City, $State, $Amount);
}


    if ($stmt->execute()) {
        echo "<p>Thank you for your donation! Your support is greatly appreciated.</p>";
    } else {
        echo "Error: " . $conn->error;
    }
    $stmt->close();
    $conn->close();


}else {
    echo "Name field cannot be empty.";
}
}else {
    echo "Form submission failed";
}

    ?>
    

