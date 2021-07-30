<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="Login Page">
    <meta name="keywords" content="DreamWorld Cinemas,Movies">
    <meta name="author" content="Arunachalam M">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Registration</title>
    <link href='../css/loginstyle.css' rel="stylesheet">
    <link rel="icon" href="../img/logo2.png">
    <link href="https://fonts.googleapis.com/css2?family=Alegreya+Sans&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=IBM+Plex+Sans:wght@500&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Oswald&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/d3a7f46eb0.js" crossorigin="anonymous"></script>
    <script src="../js/validator_create.js"></script>
</head>
<body>
    <div class="circle"></div>
    <div class="circle1"></div>
    <h1 class="signupmaintitle">DREAMWORLD CINEMAS</h1>
    <br><br>
    <form method='POST' class="otp-form">
    <h2 class="reg-form-title">Create Your Account</h2>
        <span class="otpmsg">We have sent an OTP to your registered Email-id</span><br>
        <input type='number' class='otpinput' placeholder='Enter the OTP' name='otp'><br><br><input type='submit' value='Confirm' class='signupbutton'><div id='otptimer'></div>
        <div id="finalmsg"></div>
    </form>
</body>
</html>
<?php
session_start();
$otp = $_SESSION["otp"];

echo $otp;
echo "<script>let a = 180;setInterval(function(){ 
    document.getElementById('otptimer').innerHTML = 'You have '+a+' seconds to enter the OTP';
a = a-1; 
if(a<0)
{
alert('Time Exceeded');
window.location.reload();
}
}, 1000);</script>";
if(isset($_POST["otp"]))
{   
    echo "<br>".$_POST["otp"];
    $a = $_POST["otp"];
    // echo "<br>".$a;
    if($a==$otp)
    {
        echo "<script>document.getElementById('otptimer').style.display = 'none';
        alert('Your Profile has been successfully created.Now you can login using your username and password');
        window.location.replace('../login.php');</script>";
        
    }
    else{
        echo "<script>Incorrect OTP</script>";
    }
}
?>