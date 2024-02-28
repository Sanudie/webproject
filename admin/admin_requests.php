
<?php 
include 'connection.php';

session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    
   
    $adopter_name = isset($_POST['adopter_name']) ? $_POST['adopter_name'] : '';
    $address = isset($_POST['address']) ? $_POST['address'] : '';
    $havepets = isset($_POST['havepets']) ? $_POST['havepets'] : '';
    $adopter_email = isset($_POST['adopter_email']) ? $_POST['adopter_email'] : '';
    $takingcare = isset($_POST['takingcare']) ? $_POST['takingcare'] : '';
    
    
    $sql = "INSERT INTO requests (adopter_name, address, havepets, adopter_email, takingcare)
            VALUES ('$adopter_name', '$address', '$havepets', '$adopter_email', '$takingcare')";
    
    if ($conn->query($sql) === TRUE) {
        $_SESSION['requeststatus'] = "Adoption form submitted successfully";
        header('Location: ../adopt/adopt.php');
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
?>
