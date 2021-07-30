<?php
session_start();
if(!isset($_SESSION["name"]))
header("location:../login.php");
$name=$gender=$phone=$email=$city = "";
$name=$_SESSION["name"];
$gender=$_SESSION["gender"];
$phone=$_SESSION["phone"];
$city=$_SESSION["city"];
$email=$_SESSION["email"];
$gold=$_SESSION["member"];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="Login Page">
    <meta name="keywords" content="DreamWorld Cinemas,Movies">
    <meta name="author" content="Arunachalam M">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dining</title>
    <link href='../css/style.css' rel="stylesheet">
    <link rel="icon" href="../img/logo2.png">
    <link href="https://fonts.googleapis.com/css2?family=Alegreya+Sans&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=IBM+Plex+Sans:wght@500&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Oswald&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/d3a7f46eb0.js" crossorigin="anonymous"></script>
    <script src="../js/index.js"></script>
    <script src="../js/slider.js"></script>
</head>
<body>
    <header class="wholenavbar">
        <a id="top"></a>
        <nav class="navbar">
            <div class="logo"><img src="../img/logo2.png" alt="login" height="80" width="100" class="dwlogo"></div>
            <div class="item hover" id="a1"><a href="../index/index.php" class="remove-link">Home</a></div>
            <div class="item hover" id="a3"><a href="../dining/dining.php" class="remove-link">Dining</a></div>
            <div class="item hover" id="a4"><a href="../membership/membership.php" class="remove-link">Membership</a></div>
            <div class="item" id="hiddenlogotitle">DreamWorld Cinemas</div>
            <div class="item hover" id="a5"><a href="../aboutus/aboutus.php" class="remove-link">About Us</a></div>
            <div class="item welcome"><a href="../profile/profile.php" class="remove-link">Welcome 
            <?php 
            if($gold=="gold")
            echo "<div class='gold'>".$name."</div>";
            else if($gold=="silver")
            echo "<div class='silver'>".$name."</div>";
            else
            echo $name; ?></a></div>
            <div class="item"><i class="fas fa-sign-out-alt"></i><a href="../logout.php" class="logoutlink">Log Out</a></div>
        </nav>
    </header>
    <br>
    <main class="dining-whole">
    <div class="image-slider">
            <div class="lefticon black"><i class="fas fa-chevron-left" onclick="slider(-1)"></i></div>
            <div class="righticon black"><i class="fas fa-chevron-right" onclick="slider(1)"></i></div>
            <div class="photo" id="photo1">
                <img src="../img/dining/dominos.png" alt="image" width="1060" height="450">
                <h3 class="text1">Experience the Original Dominos Flavor at DreamWorld Cinemas</h3>
            </div>
            <div class="photo" id="photo2">
                <img src="../img/dining/star3.png" alt="image" width="1060" height="450">
                <h3 class="text1">Introducing the newest addition to the Starbucks Menu #SanjeevKapoorMenuAtStarbucks</h3>
            </div>
            <div class="photo" id="photo3">
                <img src="../img/dining/burger2.jfif" alt="image" width="1060" height="400">
                <h3 class="text1">Burger King is back with exciting offers.</h3>
            </div>
        </div>
    <div class="starbucks-collab">
        <h2 class="collab-title">DreamWorld Cinemas X StarBucks</h2>
        <div class="food-text-flex">
            <img src="../img/dining/starfood.jpg" alt="image" class="food-photo">
            <div class="food-content">
                <h2 class="food-title">
                    "It’s just a moment in time – just one hand reaching over the counter to present a cup to another outstretched hand." - Starbucks</h2>
                <div class="the-food-content">Delicious, handcrafted beverages and great-tasting food. The secret to making life better.Amazing coffees from around the world. Handcrafted beverages to discover and enjoy. We love bringing you these things</div>
                <div class="visitus"><a href="https://www.starbucks.in/" class="removed" target="_blank">Visit Us</a></div>
            </div>
        </div>
        <div class="starbucks-collab">
            <h2 class="collab-title">DreamWorld Cinemas X Dominos Pizza</h2>
            <div class="food-text-flex">
                
                <div class="food-content">
                    <h2 class="food-title">
                        "Haath badhao India, Vaccine lagao India" - Domino's Pizza</h2>
                    <div class="the-food-content">Domino's Pizza is a pizza delivery company founded in the United States. It is the biggest pizza company in the United States. They are now a world-wide company with 17,100 stores in more than 90 countries. Domino's menu has pizza, pasta, oven-baked sandwiches, chicken wings, boneless chicken, salads, breadsticks, cheesesticks, and a variety of desserts.</div>
                    <div class="visitus"><a href="https://www.dominos.co.in/" class="removed" target="_blank">Visit Us</a></div>
                </div>
                <img src="../img/dining/dominofood.jpg" alt="image" class="food-photo" height="270" width="600">
            </div>
            <div class="starbucks-collab">
                <h2 class="collab-title">DreamWorld Cinemas X Burger King</h2>
                <div class="food-text-flex">
                    <img src="../img/dining/burgerphoto.jfif" alt="image" class="food-photo" height="270" width="470">
                    <div class="food-content">
                        <h2 class="food-title">
                            "Great Food Comes First" - Burger King</h2>
                        <div class="the-food-content">Our restaurants are known for serving high-quality, great-tasting, and affordable food. Founded in 1954, BURGER KING® is the second largest fast food hamburger chain in the world with about 18,000 restaurants operating in more than 100 countries and US territories as at June 30, 2019. </div><br>
                        <div class="visitus"><a href="https://www.burgerking.in/" class="removed" target="_blank">Visit Us</a></div>
                    </div>
                </div>
    </div>
    </main>
    <footer class="wholefooter">
       <div class="gototop"><a href="#top" class="gotop">Go Back To Top</a></div> 
       <div class="footer-container">
           <div class="to-flex">
            <h2 class="footer-title">
                DreamWorld <br>Cinemas
            </h2>
            <br><div class="address">
                <i class="fas fa-phone-alt"></i>
                <div class='the-actualadd'>+91 9876543210</div>
            </div>
            <br><div class="address">
                <i class="fas fa-envelope"></i>
                <div class='the-actualadd'><a href="mailto:donotreplydwcinemas@gmail.com" class="mail">dreamworldcinemas@gmail.com</a></div>
            </div>
            <br><div class="address">
                <i class="fas fa-map-marker-alt"></i>
                <div class='the-actualadd'>No 21 Ramnagar Street<br>Adyar<br>Chennai-600020<br>Tamilnadu</div>
            </div>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d62203.19846790429!2d80.1820296191794!3d12.991036042861277!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a52674a257d782b%3A0xa5e84dc8a4337528!2sDream%20World!5e0!3m2!1sen!2sin!4v1625224787116!5m2!1sen!2sin" width="300" height="200" style="border:0;" loading="lazy" class="iframe"></iframe>
           </div>
           <div class="to-flex">
               <br>
               <span class="equip">Our Theatres are equipped with</span><br><br><br>
               <img src="../img/loginpage/dolby.png" alt="image"><br><br><br>
               <img src="../img/loginpage/imax.png" alt="image" class="imaxx" width="250"><br>
               <img src="../img/loginpage/fourdx.png" alt="image" width="250" height="100" class="fourdx"><br><br>
                <span class="diningpartner">Meet Our Dining Partners</span>
                <br><br><br>
                <div class="photoflex">
                    <img src="../img/loginpage/blackburger.png" alt="image" width="70" class="burger1">
                    <img src="../img/loginpage/blackdomino.png" alt="image" width="70">
                    <img src="../img/loginpage/blackstar.jfif" alt="image" width="70" class="star1">
                </div>
            </div>
            <div class="to-flex">
                <br>
                <div class="Subscribe">Subscribe To Our Newsletter</div>
                <input type="email" placeholder="Enter your email" class="subscribe-email"><br>
                <input type="submit" value= "Subscribe"  onclick="mail()" class="subbutton"><br>
                <div class="welovesocial">Because,We Love Social Media</div>
                <div class="theicons">
                    <a href="http://facebook.com" target="_blank" class="iconlink"><i class="fab icon fa-facebook-f"></i></a>
                    <a href="http://twitter.com" target="_blank" class="iconlink"><i class="fab icon fa-twitter"></i></a>
                    <a href="http://instagram.com" target="_blank" class="iconlink"><i class="fab icon fa-instagram"></i></a>
                    <a href="http://youtube.com" target="_blank" class="iconlink"><i class="fab icon fa-youtube"></i></a>
                </div>
                <div class="download-app">Download Our Official DW App<br>Now Available on</div>
                <div class="theicons">
                    <a href="https://play.google.com/store/apps" target="_blank" class="iconlink"><i class="fab store fa-google-play"></i></a>
                    <a href="https://www.apple.com/in/app-store/" target="_blank" class="iconlink"><i class="fab store fa-apple"></i></a>
                </div>
            </div>
       </div>
       <div class="copy-right">
            COPYRIGHT &copy; 2021 DREAMWORLD CINEMAS. ALL RIGHTS RESERVED. Refer <a href="#" class="terms">Terms and Conditions</a>
       </div>
    </footer>
</body>
</html>