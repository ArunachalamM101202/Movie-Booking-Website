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
    <title>About Us</title>
    <link href='../css/style.css' rel="stylesheet">
    <link rel="icon" href="../img/logo2.png">
    <link href="https://fonts.googleapis.com/css2?family=Alegreya+Sans&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=IBM+Plex+Sans:wght@500&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Oswald&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/d3a7f46eb0.js" crossorigin="anonymous"></script>
    <script src="../js/index.js"></script>

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
    </header><br>
    <main class="whole-aboutus">
        <div class="aboutus-back">
            <div class="aboutus-content">
                <h2 class="aboutus-title">DREAMWORLD CINEMAS</h2>
                <div class="aboutus-para">
                    DreamWorld Cinemas is the market leader in terms of providing world-class cinema viewing experience with the latest technology.
                </div>
            </div>
        </div>
        <div class="aboutus-back2">
            <div class="position-content">
            <div class="aboutus-para2">
                Our Theatres are equipped with the latest Dolby Atmos&trade; 7.1 Surround which makes the sound deeper and more precise than other theatres.
            </div>
            </div>
        </div>
        <div class="aboutus-back3">
            <div class="position-content1">
                <div class="aboutus-para3">
                    A revolutionary cinematic experience that stimulates your senses.DreamWorld Cinema provides the world-class, immersive state-of-the-art viewing technology.
                </div>
                </div>
        </div>
        <div class="meetteam">
            <h2 class="meet-team-title">
                Meet The Team
            </h2>
            <div class="team-row">
                <div class="team-card">
                    <img src="../img/aboutus/john.jpg" width="250" alt="image">
                    <h3 class="team-title">Arunachalam M</h3>
                    <h4 class='team-position'>CEO & Founder</h4>
                    <div class="team-quote">&quot;Happiness is not in the mere possession of money; it lies in the joy of achievement, in the thrill of creative effort.&quot;</div>
                </div>
                <div class="team-card">
                    <img src="../img/aboutus/mike.jpg" width="250" alt="image">
                    <h3 class="team-title">David </h3>
                    <h4 class='team-position'>Chief Marketing Officer</h4>
                    <div class="team-quote">&quot;The man who moves a mountain begins by carrying away small stones.&quot;</div>
                </div>
                <div class="team-card">
                    <img src="../img/aboutus/anna.jpg" width="250" alt="image">
                    <h3 class="team-title">Anna Rudolf</h3>
                    <h4 class='team-position'>Chief Financial Officer</h4>
                    <div class="team-quote">&quot;Start by doing what’s necessary, then what’s possible; and suddenly you are doing the impossible.&quot;</div>
                </div>
            </div>
        </div>
        <div class="terms-conditions">
            <h2 class="terms-title">Terms and Conditions</h2>
            <div class="terms">
                <ol class="list">
                    <li class="each-term">Children aged 3 and above will require a seperate ticket.</li>
                    <li class="each-term">Items like carrybags eatables, helmets, handbags are not allowed inside the theaters are strictly prohibited.</li>
                    <li class="each-term">Items like laptop, cameras, knifes, lighter, match box, cigarettes, firearms and all types of inflammable objects are strictly prohibited.</li>
                    <li class="each-term">The user must ensure the correctness of all details of the booking before finally booking their tickets as DreamWorld Cinemas will accept no responsibility and will not issue a refund for wrong bookings that are the fault of the user. The Portal shall not cancel any bookings once the transaction is completed.</li>
                    <li class="each-term">Once the booking has been processed, the user will receive a confirmation e-mail to their e-mail address with all the relevant details of their booking. DreamWorld Cinemas is not responsible and will not issue a refund to the user for selecting the wrong tickets.</li>
                    <li class="each-term">The 3D glasses will be available at the cinema for 3D films and must be returned before you exit the premises. 3D Glasses are chargeable (refundable/non-refundable) as per individual cinema policies.</li>
                    <li class="each-term">The Memberships once purchased(GOLD or SILVER) cannot be refunded. If user is found to be violating the membership rules, his/her membership shall be immediately revoked by DreamWorld Cinemas and will be banned from becoming a member for 6 months.</li>
                </ol>
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