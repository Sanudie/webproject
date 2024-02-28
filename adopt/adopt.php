<?php
include '../admin/connection.php';

// Fetch pet details from the database
$select_pets = mysqli_query($conn, "SELECT * FROM `pets`") or die('query failed');
$pets = [];

if (mysqli_num_rows($select_pets) > 0) {
    while ($fetch_pets = mysqli_fetch_assoc($select_pets)) {
        $pets[] = $fetch_pets;
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style2.css">
    <title>Adopt Pets</title>
</head>

<body>
    <?php	
        session_start();
        if(isset($_SESSION['requeststatus'])) {
        echo "<script>alert('" . $_SESSION['requeststatus'] . "');</script>";
        unset($_SESSION['requeststatus']);
        }
    ?>
    <h2>Meet Your Fur-ever Friend!</h2>
    <h4> Unleash Love and Joy with Our Adorable Adoptables! </h4>
  
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
        

    <section class="adopt-pets">
        <div class="box-container">
            <?php
            foreach ($pets as $pet) {
            ?>
                <div class="box">
                    <img src="../admin/image/<?php echo $pet['image']; ?>">
                    <p>Age: <?php echo $pet['pet_age']; ?> months</p>
                    <p>Gender: <?php echo $pet['pet_gender']; ?> </p>
                    <h4><?php echo $pet['pet_name']; ?></h4>
                    <p class="detail"><?php echo $pet['pet_details']; ?></p>
                    <button type="submit" class="adopt-button" onclick="requestform()">Request to Adopt</button>
                  
                </div>
            <?php
            }
            ?>
        </div>
        
        
    </section>
<script src="script2.js"></script>
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

</body>

</html>



