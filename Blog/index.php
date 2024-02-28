<html>
    <head>
        <title> Blog Section </title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width,initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="style.css">
        <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
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
        <div class="container">
            <div class="row">
                <div class="header">
                    <h1> BLOG </h1>
                    <p> Want to know how to take care of your pets?<br>Read our helpful guides,tips and tricks for pet parents</p>
                </div>
                <div class="content">
                    <div class="card">
                        <a href="blogs/blog2.html" style="text-decoration: none;">
                        <img src="source/1.jpg">
                        <h4>You’re a new pet parent. Now what?</h4>
                        <p>Congratulations! You may be wondering if you have all that you need to help your pet adjust  in their new environment.<br>You’ve already got ample amounts of love for your new pet, but in this  guide , you’ll learn that you also need a few supplies and some safety precaution</p>
                        </a>
                    </div>
                    <div class="card">
                        <a href="blogs/blog1.html" style="text-decoration: none;">
                        <img src="source/2.jpg">
                        <h4>Training, socialization, and enrichment</h4>
                        <p>Training your new pet is an exciting journey. Be patient, use positive reinforcement, and establish a routine is key to successful training.<br>If you’re a new pet parent, there are countless ways you can enrich their environment to provide mental stimulation, physical exercise, and help calm their new home nerves.<br> Celebrate small victories and create a loving bond with your furry friend.</p>
                    </a>
                    </div>
                    <div class="card">
                        <a href="blogs/blog3.html" style="text-decoration: none;">
                        <img src="source/5.jpg">
                        <h4>Introducing your new pet to other pets in your home</h4>
                        <p>While your excitement level is high, the pets currently living in your home may be less enthusiastic about welcoming a new member. To be fair, this is likely coming as a surprise (shock, even!) to them. One day it’s business as usual, the next there is a stranger living amongst them.

                            The good news is that pets can happily coexist if you oversee their introduction and support steady integration.</p>
                    </a>
                    </div>
                </div>
                <div class="content">
                    <div class="card">
                        <a href="blogs/blog4.html" style="text-decoration: none;">
                        <img src="source/3.jpg">
                        <h4>Keeping your new pet healthy</h4>
                        <p>Just as with people, pets need routine medical and dental care. Budgeting for these regular expenses as well as for emergencies is a good idea. <br>Typical medical expenses include:

                            Annual check-ups
                            ,Vaccinations
                            ,Dental cleanings
                            First-aid/emergency treatment.</p>
                        </a>
                    </div>
                    <div class="card">
                        <a href="blogs/blog5.html" style="text-decoration: none;">
                        <img src="source/7.jpg">
                        <h4>Pet Nutrition</h4>
                        <p>Good nutrition is important for pets to maintain good health and support their overall well-being. <br>Pets require a balanced diet that includes adequate amounts of protein, carbohydrates, fat, and essential vitamins and minerals. pets will have different nutritional needs depending on their size, age, activity level, and overall health, therefore what is right for one pet, may not be the best for another.</p>
                        </a>
                    </div>
                    
                    <div class="card">
                        <a href="blogs/blog6.html" style="text-decoration: none;">
                        <img src="source/08.jpg">
                        <h4>New pet parent FAQs</h4>
                        <p>Becoming a new pet parent is a big responsibility and there is a lot to know.<br> Here are some commonly asked questions from other pet parents that will help you prepare for, and welcome, your new pet.<br>Q:What are the benefits of having a pet?<br>Q:How often does my new pet need to go to the vet?<br>Q:How much exercise does my dog need?</p>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <footer class="blogf">
    <div class="ftr">
        <div class="ftr-card">
            <a href="#"><img src="source/logo.png" alt="" srcset=""></a>
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
            <a href="https://facebook.com"><img src="source/FACE.png" alt="" srcset=""></a>
            <a href="https://twitter.com"><img src="source/Vector (1).png" alt="" srcset=""></a>
            <a href="https://pinterest.com"><img src="source/Vector (2).png" alt="" srcset=""></a>
            <a href="https://instagram.com"><img src="source/Vector.png" alt="" srcset=""></a>
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
