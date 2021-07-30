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
setcookie("name",$name,time()+3600,"../cookies/");
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
    <title>Home-DW Cinemas</title>
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
            <div class="item hover" id="a1"><a href="#" class="remove-link">Home</a></div>
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
    <main class="home-page">
        <div class="image-slider">
            <div class="lefticon"><i class="fas fa-chevron-left" onclick="slider(-1)"></i></div>
            <div class="righticon"><i class="fas fa-chevron-right" onclick="slider(1)"></i></div>
            <div class="photo" id="photo1">
                <img src="../img/slider/pic2.jpg" alt="image" width="1060" height="450">
                <h3 class="text1">"DreamWorld Cinemas is one of the best theatres in India that provides customer-focused cinema experience." - <i>Firstpost</i></h3>
            </div>
            <div class="photo" id="photo2">
                <img src="../img/slider/pic1.jpg" alt="image" width="1060" height="450">
                <h3 class="text1">"DreamWorld Cinemas draws you into something as close to reality as you have ever experienced" - <i>The Hindu</i></h3>
            </div>
            <div class="photo" id="photo3">
                <img src="../img/slider/pic3.jpg" alt="image" width="1060" height="450">
                <h3 class="text1">Go Deeper Into The World's Most Innovative Movie-Going Experience</h3>
            </div>
        </div>
        <br>
        <div class="now-showing">
            <h2 class="now-showing-title">NOW SHOWING</h2>
            <div class="movie-list">
                <a href="../movies/endgame.php"><div class="the-movie">
                    <img src="../img/movies/endgame.jfif" alt="image" height="250" width="150">
                    <div class="movie-text" id="av">Avengers: Endgame</div>
                </div></a>
                <a href="../movies/doctor.php">
                <div class="the-movie">
                    <img src="../img/movies/doctor.jpg" alt="image" height="250" width="150">
                    <div class="movie-text">Doctor</div>
                </div>
                </a>
                <a href="../movies/blackwidow.php">
                <div class="the-movie">
                    <img src="../img/movies/black.jpg" alt="image" height="250" width="150">
                    <div class="movie-text">Black Widow</div>
                </div>
                </a>
            </div>
        </div>
        <div class="coming-soon">
            <h2 class="now-showing-title">COMING SOON</h2>
            <div class="movie-list">
                <div class="the-movie">
                    <img src="../img/movies/kgf2.jpg" alt="image" height="250" width="150">
                    <div class="movie-text">KGF 2</div>
                </div>
                <div class="the-movie">
                    <img src="../img/movies/beast.jpg" alt="image" height="250" width="150">
                    <div class="movie-text">Beast</div>
                </div>
                <div class="the-movie">
                    <img src="../img/movies/pushpa.jpg" alt="image" height="250" width="150">
                    <div class="movie-text">Pushpa</div>
                </div>
                <div class="the-movie">
                    <img src="../img/movies/maanadu.jpg" alt="image" height="250" width="150">
                    <div class="movie-text">Maanadu</div>
                </div>
                <div class="the-movie">
                    <img src="../img/movies/indian2.jpg" alt="image" height="250" width="150">
                    <div class="movie-text">Indian 2</div>
                </div>
            </div>
        </div>
        <br><br>
        <div class="Membership">
            <h2 class="membership-title">Membership</h2>
            <div class="member-flex">
                <div class="gold-membership">
                    <a href="../membership/membership.php#gold"><img src="../img/membership/gold.png" alt="image" height="200" class="member-photo"></a>
                    <div class="member-content">
                        <i class="fas fa-couch goldm"></i> <span class="lounge">Access to Premium lounge for 2 hours</span><br>
                        <i class="fas fa-utensils goldm"></i> <span class="lounge">Gourmet Menu with Live Kitchen</span><br>
                        <i class="fas fa-ticket-alt goldm"></i> <span class="lounge">Seperate Counter for Gold Members</span>
                        <i class="fas fa-hamburger goldm"></i> <span class="lounge">30% discount at Burger King&trade;</span>
                    </div>
                </div>
                <div class="silver-membership">
                    <img src="../img/membership/silver.png" alt="image" height="200" class="member-photo">
                    <div class="member-content">
                        <i class="fas fa-couch silverm"></i> <span class="lounge">Access to Premium lounge for 1 hour</span>
                        <i class="fas fa-utensils silverm"></i> <span class="lounge">Gourmet Menu with Live Kitchen</span>
                        <i class="fas fa-ticket-alt silverm"></i> <span class="lounge">Seperate Counter for Silver Members</span>
                        <i class="fas fa-hamburger silverm"></i> <span class="lounge">15% discount at Burger King&trade;</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="dining">
            <h2 class="dining-title">Dining</h2>
            <div class="dining-flex">
                <img src="../img/loginpage/burgerkingcolor.jpg" alt="image" class="burgerking dining-pic" height="250">
                <div class="dining-content">
                    Have it your way. It just tastes better. Your Way, Right Away. Wake up with the King.
                </div>
            </div><br>
            <div class="dining-flex">
                <img src="../img/loginpage/dominoescolor.png" alt="image" class="domino dining-pic" height="250">
                <div class="dining-content">
                    Dil, Dosti, Domino's!
                </div>
            </div>
            <div class="dining-flex">
                <img src="../img/loginpage/blackstar.jfif" alt="image" class="domino dining-pic">
                <div class="dining-content">
                    To inspire and nurture the human spirit–one person, one cup and one neighborhood at a time!!
                </div>
            </div>
        </div>
        <div class="newspaper-reviews">
            <h2 class="newspaper-title">Popular Reviews</h2>
            <div class="toflexnews">
                <div class="newspaper-review">
                    <div class="star-rating">
                        <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                    </div>
                    <div class="newspaper-content">
                        "Being a GOLD Member of DreamWorld Cinemas is almost equivalent of living like a King in a Palace" - <i>The Hindu</i>
                    </div>
                </div>
                <div class="newspaper-review">
                    <div class="star-rating">
                        <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                    </div>
                    <div class="newspaper-content">
                        "Experience the best IMAX&trade; Experience in the country only at DreamWorld Cinemas" - <i>The Times of India</i>
                    </div>
                </div>
                </div>
                <div class="toflexnews">
                <div class="newspaper-review">
                    <div class="star-rating">
                        <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star-half-alt"></i>
                    </div>
                    <div class="newspaper-content">
                        "There are very few theatres today that maintain the same standard all the time and DreamWorld Cinemas is definitely one among them" - <i>The Indian Express</i>
                    </div>
                </div>
                <div class="newspaper-review">
                    <div class="star-rating">
                        <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star-half-alt"></i>
                    </div>
                    <div class="newspaper-content">
                        "The only theatre in the country that provides the Best Cinema Viewing Experience along with delicious Gorumet Food" - <i>Filmfare</i>
                    </div>
                </div>
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