<!DOCTYPE html>
<html lang ="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial scale =1.0">
    <title> Street Paws</title>
    <link rel="stylesheet" href="style2.css">
</head>
<body>
    <?php
       session_start();     
       if(isset($_SESSION['loginstatus']))
        {        
            echo "<script>alert('" . $_SESSION['loginstatus'] . "');</script>";
            unset($_SESSION['loginstatus']);
        }  
    ?>

    <header>
        <div class="headercontent"style="position: absolute;"> 
            <h2> WHERE EVERY PAW <br>FIND ITS WAY HOME</h2>
        </div>

        <button onclick="prevSlide()"><</button>

        <div id="slider-container">
            <div id="slider">
                <div class="slide"><img src="images/1.jpg" alt="Slide 1"></div>
                <div class="slide"><img src="images/2.jpg" alt="Slide 2"></div>
                <div class="slide"><img src="images/3.jpg" alt="Slide 3"></div>
            </div>
        </div>
        
        <button onclick="nextSlide()">></button>
   
        <nav class ="navbar">
            <a href="" class="logo">
                <img src="images/logo3.png" alt="logo">

            </a>
            <ul class="navlinks">
                <li><a href ="home.php">HOME</a></li>
                <li ><a href ="#">ADOPT</a></li>
                <li><a href="#section1">ABOUT US</a></li>
                <li><a href ="#">DONATE</a></li>
                <li><a href ="#">ADD PETS</a></li>
                <li><a href ="#">HELP</a></li>
                <li><a href ="#">BLOG</a></li>
                <li>
                    <a href="#" class="dropdown-trigger">
                        <img class="userimage" src="../images/user.png" alt="My Account">
                    </a>
                    <ul class="dropdown">
                        <li><a href='profile.php'  style="color: black;" onmouseover="this.style.color='#FF811B'" onmouseout="this.style.color='black'"> 
                            <?php 
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

        

<script>
    let currentSlide = 0;

    function showSlide(index) {
        const slider = document.getElementById('slider');
        currentSlide = index;
        slider.style.transform = `translateX(${-currentSlide * 100}%)`;
    }

    function nextSlide() {
        const totalSlides = document.querySelectorAll('.slide').length;
        currentSlide = (currentSlide + 1) % totalSlides;
        showSlide(currentSlide);
    }

    function prevSlide() {
        const totalSlides = document.querySelectorAll('.slide').length;
        currentSlide = (currentSlide - 1 + totalSlides) % totalSlides;
        showSlide(currentSlide);
    }
</script>
    </header>

    <section id="section1">
    <div class="about-us">
        <h2>About Us</h2><br><br>
        
        <p>High above the bustling streets of Horana, where the sounds of traffic fade into the background, lies a haven for the furry souls in need – Street Paws. Nestled amongst the serene landscapes of Sri Lanka, our pet rescue organization stands as a beacon of hope for the abandoned, the forgotten, and the unloved. Here, amidst the rustling leaves and gentle breezes, we dedicate ourselves to the noble cause of rescuing and rehabilitating stray animals, providing them with a second chance at a life filled with love and compassion. With every wag of a tail and every purr of contentment, we are reminded that the bond between human and animal transcends boundaries, and together, we create a brighter tomorrow for our four-legged friends."</p>
    </div>
    </section>
    <div class ="mainssBox">
        <h2>Success Stories</h2>
    <div class="Successstories">
        <div class="ssbox">
            <img src="images/kelly.png" alt="Success Story 1">
            <p>Kelly's Story:<br>

                Kelly, a timid and trembling puppy, was found shivering in a cardboard box on a chilly winter morning. Her eyes, filled with fear and uncertainty, spoke volumes about her past struggles. Despite her rough start, we welcomed her into our home with open arms, determined to show her a life filled with love and security. With each passing day, Kelly's confidence grew, and soon she was bounding around the yard with joyous abandon. Today, she's the heart and soul of our family, her tail wagging furiously as she greets us with sloppy kisses and unwavering devotion. Kelly's transformation from a frightened stray to a beloved companion is a testament to the transformative power of compassion and care.

                </p>
        </div>
        <div class="ssbox">
            <img src="images/ss1.png" alt="Success Story 2">
            <p>Rambo's Story:<br>

               
                Rambo, with his scars and weary eyes, had clearly endured more than his fair share of hardships when we found him scavenging for scraps in the streets. Despite his tough exterior, there was a gentle spirit within him that captured our hearts from the moment we met. With patience and understanding, we helped Rambo overcome his fears and insecurities, and soon he was prancing around our home like he owned the place. Whether he's chasing after tennis balls in the backyard or snuggling up with us on the couch, Rambo's boundless energy and unwavering loyalty bring warmth and joy to our lives every single day. He may have started his journey as a stray, but in our eyes, Rambo is nothing short of a hero.
                
                </p>
        </div>
        <div class="ssbox">
            <img src="images/ss3.jpg" alt="Success Story 3">
            <p>Sudu's Story:<br>
                Sudu, with her soulful eyes and wagging tail, had been waiting patiently for a forever home at the shelter when we stumbled upon her picture online. There was an instant connection between us, as if Sudu knew she had finally found her people. From the moment we brought her home, Sudu has been a source of endless laughter and unconditional love. Whether she's accompanying us on long hikes through the woods or simply snuggling up with us on lazy Sunday afternoons, Sudu's presence fills our home with warmth and happiness. Her journey from a lonely shelter dog to a cherished member of our family is a reminder that sometimes, the most precious things in life come from unexpected places</p>
        </div>
    </div>
</div>
<footer>
    @all rights reserved
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