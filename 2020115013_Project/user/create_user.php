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
    <main class="reg-form">
        <h2 class="reg-form-title">Create Your Account</h2>
        <form method="POST" name="newuserform" class="new-user-form">
            <input type="text" name="name" class="input" placeholder="Full Name" id="hide1"><br>
            <select name="gender" class="input" id="hide2">
                <option value="Gender" disabled selected hidden class="drop">Gender</option>
                <option value="Male">Male</option>
                <option value="Female">Female</option>
            </select><br>
            <input type="text" name="phoneno" class="input" placeholder="Phone number" id="hide3"><br>
            <input type="email" name="email" class="input" placeholder="Email" id="hide4"><br>
            <input type="text" name="city" class="input" placeholder="City" id="hide5"><br>
            <input type="text" name="username" class="input" placeholder="Username" id="hide6"><br>
            <input type="password" name="password" class="input"
            placeholder="Password" id="hide7"><br>
            <input type="password" name="confirmpassword" class="input"
            placeholder="Confirm Password" id="hide8"><br>
            <input type="submit" value="Sign Up" class="signupbutton" onclick="validateform()" id="hide9">
            <!-- To have terms and conditions here -->
        </form>
    
<?php
$conn = new mysqli("localhost","arun","mypasswd","dreamworld");

if(isset($_POST["name"]) && isset($_POST["gender"]) && isset($_POST["phoneno"]) && isset($_POST["email"]) && isset($_POST["city"]) && isset($_POST["username"]) && isset($_POST["password"]))
{
    $name=$_POST["name"];
    $gender=$_POST["gender"];
    $phoneno=$_POST["phoneno"];
    $email=$_POST["email"];
    $city=$_POST["city"];
    $username=$_POST["username"];
    $password=$_POST["password"];
    $first = "select * from login where Email='$email'";
    $temp = $conn->query($first);
    if($temp->num_rows>0)
    {
        echo "<script>alert('Account Already exists with this Email-id. Please use some other email.');</script>";
        echo "<script>window.location.replace('create_user.php')</script>";
        goto end;
    }
    $first = "select * from login where Username='$username'";
    $temp = $conn->query($first);
    if($temp->num_rows>0)
    {
        echo "<script>alert('Account Already exists with this Username. Please use some other Username.');</script>";
        echo "<script>window.location.replace('create_user.php')</script>";
        goto end;
    }
    $insert = "INSERT INTO login values('$name','$gender','$phoneno','$email','$city','$username','$password','none')";
    $result = $conn->query($insert);
    $otp = rand(100000,999999);
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

$mail->Subject = 'Your OTP for profile creation';
$mail->Body    = 'Dear '.$name.',<br><br>Your OTP is '.$otp."<br>Please do not share this otp with anyone<br><br>This is a system generated e-mail and please do not reply.";
$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

if(!$mail->send()) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
    echo '';
}  
    session_start();
    $_SESSION["otp"]=$otp;
    header("location:otp.php");
}
end:
echo "</main>
</body>
</html>";
?>