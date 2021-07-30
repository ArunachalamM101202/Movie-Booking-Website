<?php
$conn=new mysqli("localhost","arun","mypasswd","dreamworld");
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
$movie=$_SESSION["movie"];
$date = $_SESSION["date"];
$time = $_SESSION["time"];
$moviecode = $_SESSION["moviecode"];
$selectedseats = array();
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
    <title>Food and Beverages</title>
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
            <div class="item hover" id="a1"><a href="#" class="remove-link">Home</a></div>
            <div class="item hover" id="a3"><a href="#" class="remove-link">Dining</a></div>
            <div class="item hover" id="a4"><a href="../membership/membership.php" class="remove-link">Membership</a></div>
            <div class="item" id="hiddenlogotitle">DreamWorld Cinemas</div>
            <div class="item hover" id="a5">About Us</div>
            <div class="item welcome">Welcome 
            <?php 
            if($gold=="gold")
            echo "<div class='gold'>".$name."</div>";
            else if($gold=="silver")
            echo "<div class='silver'>".$name."</div>";
            else
            echo $name; ?></div>
            <div class="item"><i class="fas fa-sign-out-alt"></i><a href="../logout.php" class="logoutlink">Log Out</a></div>
        </nav>
    </header>
    <br>
    <main class="booking-part1">
        <h2 class="booking-title">Food and Beverages</h2>
        <form method="POST">
            <div class="food-container">
                <div class="food-item">
                    <img src="../img/food/popcorn1.png" alt="image" height="150" width="150">
                    <div class="food-name">Popcorn (Small)</div>
                    <div class="food-price">&#8377;150</div>
                    <div class="addbut item1" onclick="add('item1')">Add</div>
                    <input type="checkbox" id="item1" name="food[]" value="150Popcorn (Small)" hidden>
                </div>
                <div class="food-item">
                    <img src="../img/food/popcorn2.png" alt="image" height="150" width="150">
                    <div class="food-name">Popcorn (Large)</div>
                    <div class="food-price">&#8377;200</div>
                    <div class="addbut item2" onclick="add('item2')">Add</div>
                    <input type="checkbox" id="item2" name="food[]" value="200Popcorn (Large)" hidden>
                </div>
                <div class="food-item">
                    <img src="../img/food/cocola1.png" alt="image" height="150" width="75">
                    <div class="food-name">Coke</div>
                    <div class="food-price">&#8377;60</div>
                    <div class="addbut item3" onclick="add('item3')">Add</div>
                    <input type="checkbox" id="item3" name="food[]" value="060Coke" hidden>
                </div>
                <div class="food-item">
                    <img src="../img/food/cocola2.png" alt="image" height="150" width="75">
                    <div class="food-name">Diet Coke</div>
                    <div class="food-price">&#8377;80</div>
                    <div class="addbut item4" onclick="add('item4')">Add</div>
                    <input type="checkbox" id="item4" name="food[]" value="080Diet Coke" hidden>
                </div>
            </div>
            <div class="food-container">
                <div class="food-item">
                    <img src="../img/food/burger.png" alt="image" height="150" width="150">
                    <div class="food-name">Chicken Burger</div>
                    <div class="food-price">&#8377;180</div>
                    <div class="addbut item5" onclick="add('item5')">Add</div>
                    <input type="checkbox" id="item5" name="food[]" value="180Chicken Burger" hidden>
                </div>
                <div class="food-item">
                    <img src="../img/food/pizza.png" alt="image" height="150" width="150">
                    <div class="food-name">Veg Pizza</div>
                    <div class="food-price">&#8377;200</div>
                    <div class="addbut item6" onclick="add('item6')">Add</div>
                    <input type="checkbox" id="item6" name="food[]" value="200Veg Pizza" hidden>
                </div>
                <div class="food-item">
                    <img src="../img/food/pepsi.png" alt="image" height="150" width="75">
                    <div class="food-name">Pepsi (Small)</div>
                    <div class="food-price">&#8377;60</div>
                    <div class="addbut item7" onclick="add('item7')">Add</div>
                    <input type="checkbox" id="item7" name="food[]" value="060Pepsi (Small)" hidden>
                </div>
                <div class="food-item">
                    <img src="../img/food/pepsi2.png" alt="image" height="150" width="75">
                    <div class="food-name">Pepsi</div>
                    <div class="food-price">&#8377;100</div>
                    <div class="addbut item8" onclick="add('item8')">Add</div>
                    <input type="checkbox" id="item8" name="food[]" value="100Pepsi" hidden>
                </div>
            </div>
            <div class="food-container">
                <div class="food-item">
                    <img src="../img/food/sandwich.png" alt="image" height="150" width="150">
                    <div class="food-name">Veg Sandwich</div>
                    <div class="food-price">&#8377;120</div>
                    <div class="addbut item9" onclick="add('item9')">Add</div>
                    <input type="checkbox" id="item9" name="food[]" value="120Veg Sandwich" hidden>
                </div>
                <div class="food-item">
                    <img src="../img/food/sub.png" alt="image" height="150" width="150">
                    <div class="food-name">Chicken Sub</div>
                    <div class="food-price">&#8377;180</div>
                    <div class="addbut item10" onclick="add('item10')">Add</div>
                    <input type="checkbox" id="item10" name="food[]" value="180Chicken Sub" hidden>
                </div>
                <div class="food-item">
                    <img src="../img/food/sprite.png" alt="image" height="150" width="75">
                    <div class="food-name">Sprite</div>
                    <div class="food-price">&#8377;80</div>
                    <div class="addbut item11" onclick="add('item11')">Add</div>
                    <input type="checkbox" id="item11" name="food[]" value="080Sprite" hidden>
                </div>
                <div class="food-item">
                    <img src="../img/food/donut.png" alt="image" height="150" width="75">
                    <div class="food-name">Donut</div>
                    <div class="food-price">&#8377;120</div>
                    <div class="addbut item12" onclick="add('item12')">Add</div>
                    <input type="checkbox" id="item12" name="food[]" value="120Donut" hidden>
                </div>
            </div>
            <input type="submit" value="Continue" name="submit" class="continue-button align3">
        </form>
    </main>
    <?php
    if(isset($_POST["submit"]))
    {
        $_SESSION["food"] = $_POST["food"];
        echo "<script>window.location.replace('final.php');</script>";
    }
    ?>
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