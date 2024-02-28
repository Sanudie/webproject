<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="icon" href="../images/logo.ico" type="image/x-icon">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="donate.css">
    <title>Donation</title>
    
</head>
<body>

    <nav class ="navbar">
        <a href="" class="logo">
            <img src="../images/logo.png" alt="logo">

        </a>
        <ul class="navlinks">
            <li><a href ="../homeafterlogin/home.php">HOME</a></li>
            <li ><a href ="../adopt/adopt.php">ADOPT</a></li>
            <li><a href="../homeafterlogin/home.php#section1">ABOUT US</a></li>
            <li><a href ="../donate/donatepage.php">DONATE</a></li>
            <li><a href ="../help page/help.php">HELP</a></li>
            <li><a href ="../Blog/index.php">BLOG</a></li>
            <li>
                <a href="#" class="dropdown-trigger">
                    <img class="userimage" src="../images/user.png" alt="My Account">
                </a>
                <ul class="dropdown">
                    <li><a href='../homeafterlogin/profile.php'  style="color: black;" onmouseover="this.style.color='#FF811B'" onmouseout="this.style.color='black'"> 
                        <?php 
                        session_start();
                        if(isset($_SESSION['username'])) {
                            echo "<span>" . $_SESSION['username'] . "</span>";
                        }
                        ?>
                    </a></li>
                    <li><a href='../logoutprocess.php'  style="color: black;" onmouseover="this.style.color='#FF811B'" onmouseout="this.style.color='black'">Logout</a></li>
                </ul>  
            </li>
        </ul> 
    </nav>


    <main class="main-content">

        <div class="image-container">
            <div class="image-container">
                <img class="main-image" src="../img/Pets.png" alt="">
                <h1 style="margin-top: 100px; color: rgba(220, 42, 42, 0.975);">Join Us in Giving Hope to Every Fur-ever Friend!</h1>
            </div>
            
        </div>

<div class="container">

    <form action="donate.php" method="post" autocomplete="off">

        <div class="row">

            <div class="col">

                <h3 class="title">billing address</h3>

                <div class="inputBox">
                    <span>Name :</span>
                    <input type="text" placeholder="Name" id="Name" name="Name">
                </div>
                <div class="inputBox">
                    <span>Email :</span>
                    <input type="email" placeholder="abc@gmail.com" id="Email" name="Email">
                </div>
                <div class="inputBox">
                    <span>Address :</span>
                    <input type="text" placeholder="room - street - locality" id="Address" name="Address">
                </div>
                <div class="inputBox">
                    <span>City :</span>
                    <input type="text" placeholder="City" id="City" name="City">
                </div>

                <div class="flex">
                    <div class="inputBox">
                        <span>State :</span>
                        <input type="text" placeholder="Sri Lanka" id="State" name="State">
                    </div>
                    <div class="inputBox">
                        <span>Amount :</span>
                        <input type="text" placeholder="LKR xxxx" id="Amount" name="Amount">
                    </div>
                </div>

            </div>

            <div class="col">

                <h3 class="title">payment</h3>

                <div class="inputBox">
                    <span>Select Card Type:</span>
                    <img src="../img/card_img.png" alt="" required>
                </div>
                <div class="inputBox">
                    <span>Card_name :</span>
                    <input type="text" placeholder="Cardholders Name" id="Card_name" name="Card_name" required>
                </div>
                <div class="inputBox">
                    <span>Card_number :</span>
                    <input type="number" placeholder="1111-2222-3333-4444" id="Card_number" name="Card_number" required maxlength="16">
                </div>
                <div class="inputBox">
                    <span>Exp_month :</span>
                    <input type="number" placeholder="01" id="Exp_month" name="Exp_month" required maxlength="2">
                </div>

                <div class="flex">
                    <div class="inputBox">
                        <span>Exp_year :</span>
                        <input type="number" placeholder="2024" id="Exp_year" name="Exp_year" required maxlength="4">
                    </div>
                    <div class="inputBox">
                        <span>Cvv :</span>
                        <input type="number" placeholder="1234" id="Cvv" name="Cvv" required maxlength="4">
                    </div>
                </div>

            </div>
    
        </div>

        <input type="submit" value="Proceed To Checkout" class="submit-btn">

    </form>

</div>    
    
<footer class="blogf">
    <div class="ftr">
        <div class="ftr-card">
            <a href="#"><img src="../homeafterlogin/source/logo.png" alt="" srcset=""></a>
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
            <a href="https://facebook.com"><img src="../homeafterlogin/source/FACE.png" alt="" srcset=""></a>
            <a href="https://twitter.com"><img src="../homeafterlogin/source/Vector (1).png" alt="" srcset=""></a>
            <a href="https://pinterest.com"><img src="../homeafterlogin/source/Vector (2).png" alt="" srcset=""></a>
            <a href="https://instagram.com"><img src="../homeafterlogin/source/Vector.png" alt="" srcset=""></a>
        </div>
    
    </div>
</footer>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        var dropdownTrigger = document.querySelector('.dropdown-trigger');
        var dropdownMenu = document.querySelector('.dropdown');

        dropdownTrigger.addEventListener('click', function() {
            if (dropdownMenu.style.display === 'none' || dropdownMenu.style.display === '') {
                dropdownMenu.style.display = 'block';
            } else {
                dropdownMenu.style.display = 'none';
            }
        });
    });
</script>

</body>
</html>