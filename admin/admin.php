<?php 
	
    include 'connection.php';
/*	session_start();
    $admin_id = $_SESSION['admin_id']; // if the id is not admin directs to login php
	if (!isset($admin_id)) {
		header('location:login.php');
	}*/
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
	<link rel="stylesheet" type="text/css" href="styles3.css">
	<title>Admin Pannel</title>
</head>
<body>
	<?php include 'headeradmin.php'; ?>
    <script type="text/javascript" src= "script.js"></script>
</body>
</html>