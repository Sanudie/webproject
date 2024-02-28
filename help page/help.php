<!DOCTYPE html>
<html lang ="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device width,initial scale =1.0">
    <title> Street Paws</title>
    <link rel="stylesheet" href="help.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
      integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
</head>
<body>
    <header>
        <div class="headercontent"> 
           
        </div>    
    </header>
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

    <div class="wrapper">
        <p>The Beginning of a Pretty Heart !</p>
        <h1>Frequently Asked Questions</h1>
  
        <div class="faq">
            <button class="accordion">
            How does the adoption process work?
            
            </button>
            <div class="pannel">
            <p>
                For the adoption process,typically have to follow these steps,</br>

                1.Visit the Shelter - You can visit the pet house to see the available pets and choose one they connect with.</br>
                
                2.Fill out an Application - You have to fill out an adoption application form, providing personal information and details about their living situation.</br>
                
                3.Meet and Greet - If the application is approved,you have a meet-and-greet session with the pet to ensure compatibility.</br>
                
                4.Home Check - Some places may require a home check to ensure it's a safe environment for the pet.</br>
                
                5.Finalize Adoption - Once everything is approved,you must complete the adoption paperworks.</br>
                
                6.Take the Pet Home - You can then take their new pet home and begin the adoption journey.
            </p>
            </div>
        </div>
  
        <div class="faq">
            <button class="accordion">
              What kind of support do you provide for new pet owners?
            
            </button>
            <div class="pannel">
            <p>
                For new pet owners, we provide a range of support services to help them care for their new pets,</br>

                > Adoption Counseling - We offer guidance on choosing the right pet based on lifestyle and living situation.</br>
                
                > Training Resources - We provide information on training and behavior tips to help new pets adjust to their new homes.</br>
                
                > Healthcare Information - We offer advice on pet healthcare, including vaccination schedules, parasite prevention, and general wellness.</br>
                
                > Community Resources - We can connect new pet owners with local pet-related services, such as grooming, boarding, and veterinary care.</br>
                
                > Follow-up Support - We follow up with new pet owners to ensure the adoption is going smoothly and offer assistance or advice if needed.</br>
                
                > Educational Materials - We provide educational materials on pet care, nutrition, and behavior to help new pet owners become more knowledgeable about their pets' needs.
            </p>
            </div>
        </div>
  
        <div class="faq">
            <button class="accordion">
              Are the pets up-to-date on vaccinations and spayed/neutered?
            
            </button>
            <div class="pannel">
            <p>
                Yes, all pets available for adoption at our pet house are up-to-date on vaccinations and are spayed or neutered before being adopted. We prioritize the health and well-being of our animals and ensure they receive necessary medical care before they find their forever homes.
            </p>
            </div>
        </div>
  
        <div class="faq">
            <button class="accordion">
              Can I meet the pet before making a decision?
            
            </button>
            <div class="pannel">
            <p>
                Yes, you can definitely meet the pet before making a decision. We encourage potential adopters to spend time with the pet to ensure that it's a good fit for their home and lifestyle. Meeting the pet can help you see their personality and behavior, which can be important factors in making your decision.
            </p>
            </div>
        </div>
  
        <div class="faq">
            <button class="accordion">
            Do you offer resources for pet training and behavior?
            
            </button>
        <div class="pannel">
            <p>
                Yes, we offer resources for pet training and behavior. We provide information on basic training techniques, such as house training and obedience training, as well as tips for dealing with common behavior issues. We also offer referrals to professional trainers and behaviorists if additional help is needed. Our goal is to help pet owners develop a strong bond with their pets through positive reinforcement and effective communication.
            </p>
        </div>
        </div>
  

        </div>
  
<script>
        var acc = document.getElementsByClassName("accordion");
        var i;
  
        for (i = 0; i < acc.length; i++) {
          acc[i].addEventListener("click", function () {
            this.classList.toggle("active");
            this.parentElement.classList.toggle("active");
  
            var pannel = this.nextElementSibling;
  
            if (pannel.style.display === "block") {
              pannel.style.display = "none";
            } else {
              pannel.style.display = "block";
            }
          });
        }
</script>

    <div class="Under">
    <div class="Get">
        <form >
            <h1>Get In Touch</h1>
            <h2>Enter Your Name</h2>
            <div class="text-box1">
                <input type="text" id="name" name="name" placeholder="First Name">  
                <input type="text" id="name" name="name" placeholder="Last Name">  
            </div>
            <h3>Email</h3>
            <div class="text-box2">
                <input type="text" id="name" name="name" placeholder="example123@gmail.com">  
            </div>
            <h4>Contact Number</h4>
            <div class="text-box3">
                <input type="text" id="name" name="name" placeholder="">  
            </div>
            <h5>Subject</h5>
            <div class="text-box4">
                <input type="text" id="name" name="name" placeholder="">  
            </div>
            <h6>Questions/Comments</h6>
            <div>
                <textarea name="Comments" id="" cols="30" rows="10"></textarea>
            </div>
            <button class="button">SUBMIT</button>
        </form>
    </div>
    <div class="Contact">
        <a href="#" class="logo1">
            <img src="logo3.png" alt="logo">
        </a>
        <div class="icon">
            <div class="whatsapp">
                <a class="wh1" href="#">
                    <i class='bx bxl-whatsapp' ></i>
                <p class="wh">Whatsapp</p>
                </a>
            </div>
            <div class="youtube">
                <a class="yo1" href="#">
                    <i class='bx bxl-youtube'></i>
                <p class="you">Youtube</p>
                </a>
            </div>
            <div class="facebook">
                <a class="wh1" href="#">
                    <i class='bx bxl-facebook-square'></i>
                <p class="face">Facebook
                </p>
                </a>
            </div>
            <div class="instagram">
                <a class="wh1" href="#">
                    <i class='bx bxl-instagram'></i>
                <p class="ins">Instagram</p>
                </a>
            </div>
        </div>
        <div class="Link">
        <div class="icn">
            <div class="Loc">
                <i class='bx bxs-location-plus'></i>
            </div>
            <div class="add">
            <h1>Address</h1>
            <a class="add1" href="#"><h2>50/2,Park street,Colombo 03</h2></a>
            </div>
        </div>
        <div class="icn1">
            <div class="pho">
                <i class='bx bxs-phone-call' ></i>
            </div>
            <div class="num">
            <h1>Phone</h1>
            <a class="num1" href="#"><h2>+94 786925430</h2></a>
            </div>
        </div>
        <div class="icn2">
            <div class="mail">
                <i class='bx bxl-gmail'></i>
            </div>
            <div class="email">
            <h1>Email</h1>
            <a class="email1" href="#"><h2>streetpaws756@gmail.com</h2></a>
            </div>
        </div>
    </div>
    
        </div>
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