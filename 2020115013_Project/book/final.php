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
$food = $_SESSION["food"];
$allseats = array();
$billno = rand(10000,99999);
$ticketcount = 0;
$totalamt = 0;
$img = "";
$ticketstr = "";
$datestr = "";
$timestr = "";
if($moviecode=="endgame")
{
    $img = "endgame.jfif";
}
else{
    $img = $moviecode."jpg";
}

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
        <h2 class="booking-title">Bill</h2>
        <div class="whole-bill">
            <h2 class="bill-title">DREAMWORLD CINEMAS</h2>
            <div class="bill-flex">
            <div class="bill-line">Movie Name : <?php echo $movie;?></div>
            <div class="bill-line">Date : <?php if($date=="aug2")
            {
            echo "August 2nd";
            $datestr = "August 2nd";
            }
        else if($date=="aug1")
        {
            echo "August 1st";
            $datestr = "August 1st";
        }
        else if($date=="aug3")
        {
            echo "August 3rd";
            $datestr = "August 3rd";
        }?>
        </div>
        <div class="bill-line">Show Time : <?php if($time=="morn")
        {
                            echo "4:30 PM";
                            $timestr = "4:30 PM";
        }
                            else
                            {
                                echo "7:30 PM";
                                $timestr = "7:30 PM";
                            }?></div>
        <div class="bill-line">Bill No : <?php echo $billno;?></div></div>
        <div class="bill-subtitle">Amount</div>
        <div class="bill-flexx">
        <div class="bill-line">Seats Selected : 
        <?php
        $topay = "select * from ".$date.$time.$moviecode." where paid='not' and name='".$name."'";
        $result=$conn->query($topay);
        if($result->num_rows>0)
        {
            while($row=$result->fetch_assoc())
            {
                $ticketcount = $ticketcount+1;
                if($row["seat"][0]=="1" && $row["seat"][1]!=0)
                {
                    echo "A".substr($row["seat"],1)." ";
                    $ticketstr = $ticketstr." "."A".substr($row["seat"],1)." ";
                    array_push($allseats,$row["seat"]);
                }
                else if($row["seat"][0]=="2")
                {
                    echo "B".substr($row["seat"],1)." ";
                    array_push($allseats,$row["seat"]);
                    $ticketstr = $ticketstr." "."B".substr($row["seat"],1)." ";
                }
                else if($row["seat"][0]=="3")
                {
                    echo "C".substr($row["seat"],1)." ";
                    array_push($allseats,$row["seat"]);
                    $ticketstr = $ticketstr." "."C".substr($row["seat"],1)." ";
                }
                else if($row["seat"][0]=="4")
                {
                    echo "D".substr($row["seat"],1)." ";
                    array_push($allseats,$row["seat"]);
                    $ticketstr = $ticketstr." "."D".substr($row["seat"],1)." ";
                }
                else if($row["seat"][0]=="5")
                {
                    echo "E".substr($row["seat"],1)." ";
                    array_push($allseats,$row["seat"]);
                    $ticketstr = $ticketstr." "."E".substr($row["seat"],1)." ";
                }
                else if($row["seat"][0]=="6")
                {
                    echo "F".substr($row["seat"],1)." ";
                    array_push($allseats,$row["seat"]);
                    $ticketstr = $ticketstr." "."F".substr($row["seat"],1)." ";
                }
                else if($row["seat"][0]=="7")
                {
                    echo "G".substr($row["seat"],1)." ";
                    array_push($allseats,$row["seat"]);
                    $ticketstr = $ticketstr." "."G".substr($row["seat"],1)." ";
                }
                else if($row["seat"][0]=="8")
                {
                    echo "H".substr($row["seat"],1)." ";
                    array_push($allseats,$row["seat"]);
                    $ticketstr = $ticketstr." "."H".substr($row["seat"],1)." ";
                }
                else if($row["seat"][0]=="9")
                {
                    echo "I".substr($row["seat"],1)." ";
                    array_push($allseats,$row["seat"]);
                    $ticketstr = $ticketstr." "."I".substr($row["seat"],1)." ";
                }
                else if($row["seat"][0]=="1" && $row["seat"][1]=="0")
                {
                    echo "J".substr($row["seat"],2)." ";
                    array_push($allseats,$row["seat"]);
                    $ticketstr = $ticketstr." "."J".substr($row["seat"],2)." ";
                }                
            }
        }
        echo "</div><div class='amt-disp'>&#8377;";
        echo $ticketcount*200;
        
        echo "</div></div>";
        $total = 0;
        if(isset($_SESSION["food"]))
        {
            echo "<div class='bill-line'>Food and Beverages : <div class='food-disp'>";
            foreach($food as $key)
            {
                $total = $total+(int)substr($key,0,3);
                echo substr($key,3)."<br>";
            }
            echo "<div class='food-amt-disp'>&#8377;";
            echo $total;
            echo "</div></div></div>";
        }
        else{
            echo "<br>";
        }
        $totalamt = $ticketcount*200+$total;
        $tax = $totalamt;
        if(isset($gold))
        {
            if($gold=="gold")
            {
                echo "<div class='another-flex'><div class='bill-line'>Gold Membership Discount(15%)</div>";
                echo "<div class='disp-bill'>-&#8377;";
                printf("%d",0.15*$totalamt);
                echo "</div></div>";
                $disc = 0.15*$totalamt;
                $totalamt = $totalamt-$disc;
            }
            else if($gold=="silver")
            {
                echo "<div class='another-flex'><div class='bill-line'>Silver Membership Discount(8%)</div>";
                echo "<div class='disp-bill'>-&#8377;";
                printf("%d",0.08*$totalamt);
                echo "</div></div>";
                $disc = 0.08*$totalamt;
                $totalamt = $totalamt-$disc;
            }
            else{
                echo "<br>";
            }
        }
        ?>
        <div class="bill-line">GST(18%)</div><div class="tax">&#8377;<?php printf("%d",0.18*$tax);
            
            $totalamt = $totalamt+0.18*$tax; ?></div>
        <br><div class="bill-line">Total Amount </div><div class="tax">&#8377;<?php printf("%d",$totalamt);?></div>
        
        
        
        <form method="POST">
            <input type="submit" name="book" value="Confirm Booking" class="continue-button align4">
        </form>
        <div id="ans"></div>
        <?php
        if(isset($_POST["book"]))
        {
            foreach($allseats as $item)
            {
                $finalbook = "update ".$date.$time.$moviecode." set paid='paid' where seat='".$item."'";
                $result = $conn->query($finalbook);
            }
            echo "<script>alert('Booking Successful! We have sent an e-ticket to your registered email-id')</script>";
            require '../PHPMailerAutoload.php';

$mail = new PHPMailer;

// $mail->SMTPDebug = 4;                               // Enable verbose debug output

$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = "donotreplydwcinemas@gmail.com";                 // SMTP username
$mail->Password = 'dreamworldcinemas';                           // SMTP password
$mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
$mail->Port = 587;                                    // TCP port to connect to

$mail->setFrom("donotreplydwcinemas@gmail.com", 'DreamWorld Cinemas');
$mail->addAddress($email);     // Add a recipient

$mail->addReplyTo('donotreplydwcinemas@gmail.com');
// $mail->addCC('cc@example.com');
// $mail->addBCC('bcc@example.com');

// $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
// $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
$mail->isHTML(true);                                  // Set email format to HTML
if($gold=="gold")
{
    $goldmsg = "As you are our GOLD Member, you can come 2 hours early and use our Premium Lounge.";
}
else if($gold=="silver")
{
    $goldmsg = "As you are our SILVER Member, you can come 1 hour early and use our Premium Lounge.";
}
else{
    $goldmsg = "<br>";
}
$mail->Subject = 'Your tickets';
if($moviecode=="endgame")
{
    $mail->Body    = "<div><img src='https://hips.hearstapps.com/hmg-prod.s3.amazonaws.com/images/d1pklzbuyaab0la-1552597012.jpg' alt='images' height='150' width='100'>"."<br><br><h2>Movie Name : ".$movie."</h2><h2>Date : ".$datestr."</h2><h2  >Show Time : ".$timestr."</h2><h2  >Seats Selected :".$ticketstr."</h2><h4  >".$goldmsg."</h4><h2  >Thank you for visiting DREAMWORLD CINEMAS</h2></div>";
}
else if($moviecode=="black")
{
    $mail->Body    = "<div'><img src='https://images-na.ssl-images-amazon.com/images/I/61Fm%2BN%2BNncL._AC_SY679_.jpg' alt='images' height='150' width='100'>"."<br><br><h2  >Movie Name : ".$movie."</h2><h2  >Date : ".$datestr."</h2><h2  >Show Time : ".$timestr."</h2><h2  >Seats Selected :".$ticketstr."</h2><h4  >".$goldmsg."</h4><h2  >Thank you for visiting DREAMWORLD CINEMAS</h2></div>";
}
else if($moviecode=="doctor")
{
    $mail->Body    = "<div><img src='https://i2.wp.com/www.socialnews.xyz/wp-content/uploads/2020/02/17/SivaKarthikeyan-s-Doctor-Movie-First-Look-HD-Posters-.jpg?quality=90&zoom=1&ssl=1' alt='images' height='150' width='100'>"."<br><br><h2  >Movie Name : ".$movie."</h2><h2  >Date : ".$datestr."</h2><h2  >Show Time : ".$timestr."</h2><h2  >Seats Selected :".$ticketstr."</h2><h4  >".$goldmsg."</h4><h2  >Thank you for visiting DREAMWORLD CINEMAS</h2></div>";
}
$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

if(!$mail->send()) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
    echo '';
}
            echo "<script>window.location.replace('../index/index.php');</script>";
        }
        ?>
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