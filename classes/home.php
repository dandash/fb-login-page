<?php
//session_start();

if (!isset($_SESSION["email"]) || !isset($_SESSION["loggedIn"])) {

    header("Location: /starkid/fb-login-page/");
    exit();
}


?>

<!DOCTYPE html>
<html lang="ar">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title></title>
    <link rel="stylesheet" href="./styles/fb_login.css">
</head>

<body>

    <h1 class="welcome_msg"> مرحبا بك في شبكه التواصل الاجتماعي فيس بوك </h1>
    <h2 id="your_mail_is">بريدك الالكتروني هو :<?php echo  $_SESSION['email'] ?></h2>
    <a href="./classes/logout.php">تسجيل الخروج</a>

</body>

</html>