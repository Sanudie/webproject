<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="styles1.css">
	<title>Document</title>
</head>
<body>
	<header class="header">
		<div class="flex">
			<a href="admin.php" class="logo"><h2>Admin Pannel</h2></a>
            <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
            <link rel="stylesheet" type="text/css" href="styles1.css">

            <nav class="navbar">
				
				<a href="admin_addpets.php">Add pets</a>
				<a href="requestforms.php">Requests</a>
				<a href="admin_user.php">Users</a>
				<a href="admin_message.php">Donations</a>
				
				
			</nav>
			<div class="icons">
				<i class="bi bi-list" id="menu-btn"></i>
				<i class="bi bi-person" id="user-btn"></i>
			</div>
			<div class="user-box">
				<p>Username : <span><?php echo $_SESSION['admin_name'];?></span></p>
				<p>Email : <span><?php echo $_SESSION['admin_email'];?></span></p>
				<form method="post" class="logout">
					<button name="logout" class="logoutbutton">LOG OUT</button> <!--after clicking the logout button it should be redirected to the login page-->
				</form>
			</div>
		</div>
	</header>
</body>
</html>