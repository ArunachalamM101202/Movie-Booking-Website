<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="Login Page">
    <meta name="keywords" content="DreamWorld Cinemas,Movies">
    <meta name="author" content="Arunachalam M">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login-DW Cinemas</title>
    <link href='css/loginstyle.css' rel="stylesheet">
    <link rel="icon" href="img/logo2.png">
    <link href="https://fonts.googleapis.com/css2?family=Alegreya+Sans&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=IBM+Plex+Sans:wght@500&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Oswald&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/d3a7f46eb0.js" crossorigin="anonymous"></script>
    <script src="js/login.js"></script>
</head>
<body>
    <div class="circle"></div>
    <div class="circle1"></div>
    <div class="container">
        <div class="toflex">
            <h1 class="loginmaintitle">DREAMWORLD CINEMAS</h1> 
            <div class="thethreetext">
                <div class="changing-text" id="logone">
                    <img src="img/loginpage/imax.png" width="420" height="90" id="thefirst" alt="image"><br>
                    <div class="changing-content">GO DEEPER INTO THE
                        WORLD’S MOST INNOVATIVE
                        MOVIE-GOING EXPERIENCE</div>
                </div>
                <div class="changing-text" id="logtwo">
                    <div class="photoflex">
                        <img src="img/loginpage/blackburger.png" height="120" width="100" class="foodlogos" alt="image">
                        <img src="img/loginpage/blackdomino.png" height="120" width="100" class="foodlogos" alt="image">
                        <img src="img/loginpage/blackstar.jfif" height="120" width="100" class="foodlogos" alt="image">
                    </div><br>
                    <div class="changing-content">Enjoy eating out at your favourite place after the movie</div>
                </div>
                <div class="changing-text" id="logthree">
                    <img src="img/loginpage/dolby.png" height="90" width="380" alt="image"><br>
                    <div class="changing-content" id="thethird">Experience movies like never before in our Dolby Atmos Theatres</div>
                </div>
            </div>
        </div>
        <form method="POST" name="loginform" class="loginbox">
            <h2 class="loginsubtitle">Login</h2>
            <div class="subflex">
            <i class="fas fa-user"></i><input type="text" placeholder="Username" name="username" class="logintextbox" required>
            </div>
            <div class="subflex">
            <i class="fas fa-key"></i><input type="password" placeholder="Password" name="password" class="logintextbox" required>
            </div>
            <input type="submit" value="Login" class="loginbutton"><br><br>
            <a href="forgot/forgot.php" class="forgotpwd">Forgot your password?</a><br><br>
            <a href="user/create_user.php" class="signup">Don't have an account?&nbsp; Sign up</a>
        </form>
    </div>
</body>
</html>
<?php
$conn = new mysqli("localhost","arun","mypasswd","dreamworld");
if(isset($_POST["username"]) && isset($_POST["password"]))
{
    $un = $_POST["username"];
    $pwd = $_POST["password"];
    $name=$gender=$phone=$email=$city=$gold="";
    $q = "select * from login where Username='$un' and Password='$pwd'";
    $result=$conn->query($q);
    if($result->num_rows==1)
    {   while($row=$result->fetch_assoc())
        {
            $name = $row["Name"];
            $gender = $row["Gender"];
            $phone = $row["Phone_no"];
            $email = $row["Email"];
            $city = $row["City"];
            $gold = $row["Member"];
        }
        session_start();
        $_SESSION["name"]=$name;
        $_SESSION["gender"]=$gender;
        $_SESSION["phone"]=$phone;
        $_SESSION["city"]=$city;
        $_SESSION["email"]=$email;
        $_SESSION["member"] = $gold;
        header("location:loader/loader.html");
    }
    else{
        echo "<script>alert('Wrong Username/Password');</script>";
    }
}

?>