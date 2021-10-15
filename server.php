<?php
if (
    isset($_POST['formSubmit']) &&  isset($_POST['email'])
    && isset($_POST['password'])
) {

    session_start();
    $connection = new mysqli("localhost", "root", "", "facebookdb");

    $email = $connection->real_escape_string($_POST["email"]);
    $password = sha1($connection->real_escape_string($_POST["password"]));
    $data = $connection->query("SELECT firstName FROM users WHERE email='$email' AND password='$password'");

    if ($data->num_rows > 0) {
        $_SESSION["email"] = $email;
        $_SESSION["loggedIn"] = 1;
        echo 'ok';

        exit();
    }
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "لقد ادخلت بريد الكتروني غير صالح ";
        die();
    }
}
