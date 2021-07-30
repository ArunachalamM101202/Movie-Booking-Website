<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment</title>
    <link rel="icon" href="../img/logo2.png">
    <link href="../css/style.css" rel="stylesheet">
</head>
<body>
    <h2 class="sometitle">Payment Details</h2>
    <form method="GET" class="payform">
        <fieldset class="field">
            <legend class="legend">Card Details</legend>
            Enter your Card No : <input type="text" name="card" required class="payline"><br>
            Enter the Expiry Date : <select required class="payline">
                <option>01</option>
                <option>02</option>
                <option>03</option>
                <option>04</option>
                <option>05</option>
                <option>06</option>
                <option>07</option>
                <option selected>08</option>
                <option>09</option>
                <option>10</option>
                <option>11</option>
                <option>12</option>
                </select>
                <select >
                    <option>2021</option>
                    <option>2022</option>
                    <option>2023</option>
                    <option>2024</option>
                    <option>2025</option>
                </select><br>
            Enter your CVV number : <input class="payline" type="password" size="5" required><br>
            Enter your name as in Card : <input class="payline" type="text" required><br>
            <input type="submit" class="continue-button align360" name="submit">
                </fieldset>
    </form>
</body>
</html>
<?php
if(isset($_GET["submit"]))
{
    echo "<script>alert('Payment is successful. Now Re-login to experience the membership.');</script>";
    echo "<script>window.location.replace('../logout.php')</script>";
}

?>