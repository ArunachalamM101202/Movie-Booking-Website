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
$gold=$_SESSION["member"]
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
    <title>Membership</title>
    <link href='../css/style.css' rel="stylesheet">
    <link rel="icon" href="../img/logo2.png">
    <link href="https://fonts.googleapis.com/css2?family=Alegreya+Sans&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=IBM+Plex+Sans:wght@500&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Oswald&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/d3a7f46eb0.js" crossorigin="anonymous"></script>
    <script src="../js/index.js"></script>
    <script src="../js/show.js"></script>
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
    <main class="membership-main">
        <div class="member-main-flex">
            <div class="member-title">
                <div class="double-line box animLine">
                WELCOME TO DREAMWORLD CINEMAS<br>MEMBERSHIP</div>
            </div>
            <div class="member-photo-flex">
                <img src="../img/membership/goldcard.png" alt="image" height="200" width="300" class="member-image">
                <img src="../img/membership/silvercard.png" alt="image" height="200" width="300" class="member-image down">
            </div>
        </div>

        <div class="goldmember" id="goldmember">
            
            <h2 class="gold-title"><a id="gold">GOLD MEMBERSHIP</a></h2>
            <div class="gold-flex">
                <div class="gold-photo">
                    <img src="../img/membership/gold.png" alt="image" class="member-photo align11" height="250" width="250">
                </div>
                <div class="gold-content">
                    <div class="gold-subtitle">Gold Member Benefits : </div>
                    <div class="member-content align5">
                        <div class="price goldm">&#8377; 999 per month</div>
                        <i class="fas fa-couch goldm"></i> <span class="lounge">Access to Premium lounge for 2 hours</span><br>
                        <i class="fas fa-utensils goldm"></i> <span class="lounge">Gourmet Menu with Live Kitchen</span><br>
                        <i class="fas fa-ticket-alt goldm"></i> <span class="lounge">Seperate Counter for Gold Members</span>
                        <i class="fas fa-hamburger goldm"></i> <span class="lounge">30% discount at Burger King&trade;</span>
                        <i class="fas fa-tag goldm"></i>
                        <span class="lounge">15% Discount for online ticket booking</span>
                        <i class="fas fa-film goldm"></i><span class="lounge">Get a complimentary ticket every month</span>
                        <i class="fas fa-comment goldm"></i><span class="lounge">Your name will be displayed in gold</span>
                        <form method="POST">
                            <?php
                            echo "<input type='submit' value='";
                            if($gold=="silver")
                            echo "Upgrade to a Gold Member' class='buymember' name='gold'>";
                            else
                            echo "Become a Gold Member' class='buymember' name='gold'>";
                            ?>
                            
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="silvermember" id="silvermember">
            <a id="silver"></a>
            <h2 class="gold-title">SILVER MEMBERSHIP</h2>
            <div class="gold-flex">
                <div class="gold-photo">
                    <img src="../img/membership/silver.png" alt="image" class="member-photo align11" height="250" width="250">
                </div>
                <div class="gold-content">
                    <div class="gold-subtitle">Silver Member Benefits : </div>
                    
                    <div class="member-content align5">
                        <div class="price silverm">&#8377; 499 per month</div>
                        <i class="fas fa-couch silverm"></i> <span class="lounge">Access to Premium lounge for 1 hour</span><br>
                        <i class="fas fa-utensils silverm"></i> <span class="lounge">Gourmet Menu with Live Kitchen</span><br>
                        <i class="fas fa-ticket-alt silverm"></i> <span class="lounge">Seperate Counter for Silver Members</span>
                        <i class="fas fa-hamburger silverm"></i> <span class="lounge">15% discount at Burger King&trade;</span>
                        <i class="fas fa-tag silverm"></i>
                        <span class="lounge">8% Discount for online ticket booking</span>
                        <i class="fas fa-film silverm"></i><span class="lounge">Get a complimentary ticket every month</span>
                        <i class="fas fa-comment silverm"></i><span class="lounge">Your name will be displayed in silver</span>
                        <form method="POST">
                            <input type="submit" value="Become a Silver Member" class="buymember silverb" name="silver">
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <?php
            $conn=new mysqli("localhost","arun","mypasswd","dreamworld");
            if(isset($_POST["gold"]))
            {
                if($gold=="gold")
                {
                        echo "<script>alert('You are already a Gold Member');</script>";
                        echo "<script>window.location.href('#gold');</script>";
                }
                else if($gold=="silver")
                {
                    $upgrade = "update login set Member='gold' where Email='$email'";
                    $result=$conn->query($upgrade);
                    echo "<script>alert('Since you are already a Silver Member, you can become a Gold Member by paying Rs 500 (difference amount)');</script>";
                    echo "<script>window.location.replace('../payment/payment.php');</script>";
                    
                }               
                else{
                    $upgrade = "update login set Member='gold' where Email='$email'";
                    $result=$conn->query($upgrade);
                    echo "<script>window.location.replace('../payment/payment.php');</script>";
                }                
            }
            if(isset($_POST["silver"]))
            {
                if($gold=="gold")
                {
                        echo "<script>alert('You are already a Gold Member');</script>";
                        echo "<script>window.location.href('#silver');</script>";
                }
                else if($gold=="silver")
                {
                    echo "<script>alert('You are already a Silver Member');</script>";
                    echo "<script>window.location.replace('#silver');</script>";
                }               
                else{
                    $upgrade = "update login set Member='silver' where Email='$email'";
                    $result=$conn->query($upgrade);
                    echo "<script>window.location.replace('../payment/payment.php');</script>";
                }                
            }

        ?>
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