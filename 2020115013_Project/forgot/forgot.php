<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="Login Page">
    <meta name="keywords" content="DreamWorld Cinemas,Movies">
    <meta name="author" content="Arunachalam M">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forgot Password</title>
    <link href='../css/loginstyle.css' rel="stylesheet">
    <link rel="icon" href="../img/logo2.png">
    <link href="https://fonts.googleapis.com/css2?family=Alegreya+Sans&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=IBM+Plex+Sans:wght@500&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Oswald&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/d3a7f46eb0.js" crossorigin="anonymous"></script>
    <script src="../js/login.js"></script>
</head>
<body>
    <div class="circle"></div>
    <div class="circle1"></div>
    <h1 class="signupmaintitle">DREAMWORLD CINEMAS</h1>
    <form method="GET" class="reg-form">
        <div class="forgot">Forgot Password</div><br><br>
        <span class="entermsg">Enter your Email-id : </span><input type="email" required name="email" placeholder="Email id"><br>
        <div id="display"></div><br>
        <input type="submit" value="Check" class="signupbutton">
    </form>
</body>
</html>
<?php
$conn = new mysqli("localhost","arun","mypasswd","dreamworld");
if(isset($_GET["email"]))
{
    $email = $_GET["email"];
    $tocheck = "select * from login where Email='$email'";
    $result=$conn->query($tocheck);
    if($result->num_rows==1)
    {
        echo "<script>setTimeout(function(){ window.location.replace('../login.php'); }, 4000);</script>";
        $newpwd = rand(100000,999999);
        $change = "update login set Password='$newpwd' where Email='$email'";
        $result=$conn->query($change);

        require '../PHPMailerAutoload.php';

$mail = new PHPMailer;

// $mail->SMTPDebug = 4;                               // Enable verbose debug output

$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = "your_gmail_id";                 // SMTP username
$mail->Password = 'your_gmail_id_password';                           // SMTP password
$mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
$mail->Port = 587;                                    // TCP port to connect to

$mail->setFrom("your_gmail_id", 'DreamWorld Cinemas');
$mail->addAddress($email);     // Add a recipient

$mail->addReplyTo('your_gmail_id');
// $mail->addCC('cc@example.com');
// $mail->addBCC('bcc@example.com');

// $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
// $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
$mail->isHTML(true);                                  // Set email format to HTML

$mail->Subject = 'Your New Password';
$mail->Body    = '<br><br>Your New Password is '.$newpwd."<br>Please do not share this Password with anyone<br>You can later change your password by clicking on your name -> Change Password button.<br>This is a system generated e-mail and please do not reply.<br><br>If you didn't initiate this password change, do secure your account.";
$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

if(!$mail->send()) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
    echo '<script>document.getElementById("display").innerHTML = "We have sent a mail containing your new password to login";</script>';
}  
    
    }
else{
    // echo "<script>alert('Account does not exist');</script>";
}
}
?>
