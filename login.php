<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
<link rel="stylesheet" href="login.css">

</head>

<body>
    <?php 
    session_start();
    if(isset($_SESSION['logout_message'])) {
        echo "<script>alert('" . $_SESSION['logout_message'] . "');</script>"; 
        unset($_SESSION['logout_message']);
    }
    ?>

	
	
	<div class="loginform">
	<form action="loginprocess.php" method="POST">
		<div style="font-family:'Copperplate', 'Copperplate Gothic Light'; font-size: 40px">JOIN THE FAMILY!</div>
		<div style="color: #DC4272; font-family: 'Copperplate', 'Copperplate Gothic Light'">Be a part of amazing paw-sibilities!</div>
	  	<input class="username" type="text" name="username" placeholder="Username" required>
		<input class="password" type="password" name="password" placeholder="Password" required>
      	<input class="login" type="submit" value="Login">
		<div style="color:#7E685A; font-family:'Copperplate', 'Copperplate Gothic Light'">Join the Family!&nbsp; &nbsp; &nbsp;<a href="signup.php" style="color: black; font-size:20px;">Sign Up</a></div><br>
		<a href="guesthome/home.php" style="color:brown; font-family:'Copperplate', 'Copperplate Gothic Light'">Continue without login</a>
        <div>
        <a href="admin/login.php" style="color:brown; font-family:'Copperplate', 'Copperplate Gothic Light'">Login as an admin</a>
</div>
		</form>
		<?php	
            if(isset($_SESSION['loginstatus'])) {
			echo "<script>alert('" . $_SESSION['loginstatus'] . "');</script>";
			unset($_SESSION['loginstatus']);
		}
		?>
	</div>

	<img id="dog" src="images\login.png">
	<img id="logo1" src="images\logo.png">
	
	
	<script src="signIn.js"></script>

		
</body>
</html>
