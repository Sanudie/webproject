<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
	<link rel="stylesheet" href="login.css">
	
</head>

<body>
	<header>
	  <nav class ="navbar">
       
        <ul class="navlinks">
            <li><a href ="#">HOME</a></li>
            <li ><a href ="#">ADOPT</a></li>
            <ul class ="dropdown">
            <li><a href ="#">Dogs</a></li>
            <li><a href ="#">Cats</a></li>
            <li><a href ="#">Other pets</a></li>
            </ul>
            
    
            <li><a href ="#">DONATE</a></li>
            <li><a href ="#">ADD PETS</a></li>
            <li><a href ="#">HELP</a></li>
            <li><a href ="#">BLOG</a></li>
            <button class="login0"><a href="#"></a>LOG IN</button>
        </ul> 
    </nav>
		</header>
	
	
	<div class="loginform">
	<form action="loginprocess.php" method="POST">
		<div style="font-family:'Copperplate', 'Copperplate Gothic Light'; font-size: 40px">JOIN THE FAMILY!</div>
		<div style="color: #DC4272; font-family: 'Copperplate', 'Copperplate Gothic Light'">Be a part of amazing paw-sibilities!</div>
	  	<input class="username" type="text" name="username" placeholder="Username" required>
		<input class="password" type="password" name="password" placeholder="Password" required>
      	<input class="login" type="submit" value="Login">
		<div style="color:#7E685A; font-family:'Copperplate', 'Copperplate Gothic Light'">Join the Family!&nbsp; &nbsp; &nbsp;<a href="signup.php" style="color: black; font-size:20px;">Sign Up</a></div><br>
		<a href="defauly.html" style="color:brown; font-family:'Copperplate', 'Copperplate Gothic Light'">Continue without login</a>
		</form>
		
	</div>
	
	<img id="logo1" src="images\pawlogo.png">
	<img id="dog" src="images\login.png">
	
	<script src="signIn.js"></script>

	<footer>
            <div class="ftr">
                <div class="ftr-card">
                    <img src="source/logo.png" alt="" srcset="">
                    <p>© 2024 Pets Foundation. <br>
                        All rights reserved.<br> 
                        Together,we're making tails wag <br> and hearts purr
                      </p>
                </div>
                <div class="ftr-card">
                    <h5>Contact Us</h5>

              <p>No.100 Colombo,Sri Lanka.</p>
              <p>+94-115904528</p>
              <p>+94-705674528</p>
              <p>streetpaws@gmail.com</p>
                </div>
                <div class="ftr-card">
                    <h5>Follow Us</h5>
                    <img src="source/FACE.png" alt="" srcset="">
                    <img src="source/Vector (1).png" alt="" srcset="">
                    <img src="source/Vector (2).png" alt="" srcset="">
                    <img src="source/Vector.png" alt="" srcset="">
                </div>
            
            </div>
        </footer>
	
		
</body>
</html>
