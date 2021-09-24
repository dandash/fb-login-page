<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title></title>
    <link rel="stylesheet" href="fb_login.css">
</head>
<body>
    <h1 class="welcome_msg">مرحبا بك في شبكه التواصل الاجتماعي فيس بوك </h1>
    <h2 id="your_mail_is">بريدك الالكتروني هو :<?php     session_start();
 echo isset($_SESSION['email']) ? $_SESSION['email'] : "not logged in" ?></h2>
</body>
</html>
