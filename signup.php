<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>streetpaws</title>
	<link rel="stylesheet" href="signup.css">
</head>
	
<body>	
  <img id="logo1" src="images\logo.png">
  <div class="signInForm">
    <form action="signupprocess.php" method="POST">
      <span class="closeButton" onclick="goToLoginPage()">&times;</span>

      <h2 style="font-family: 'Copperplate', 'Copperplate Gothic Light';">Create an Account</h2>
      <input class="fname" type="text" name="fname" placeholder="First name" required>
      <input class="lname" type="text" name="lname" placeholder="Last name" required>
      <input class="address" type="text" name="Address" placeholder="Postal Address">
      <input class="email" type="text" name="email" placeholder="Email" required>
	    <input class="username" type="text" name="username" placeholder="Username" required>
      <input class="passwordSignIn" type="password" name="passwordSignIn" placeholder="Password" required>
      <input class="signIn" type="submit" value="Sign In">
  
    </form>
  </div> 
	<script src="signIn.js"></script>
</body>

</html>
