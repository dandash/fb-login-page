<?php
if (isset($_POST['signupformSubmit'])) {
    $connection = new mysqli("localhost", "root", "", "facebookdb");
    // validate using conditions before using this database validateion
    // validate this way
    if(empy($_POST["signup_email"])){
        echo "يجب ادخال البريد الالكترونى";
        die();
    }else{
        if (!filter_var($_POST["signup_email"], FILTER_VALIDATE_EMAIL)) {
            echo "لقد ادخلت بريد الكتروني غير صالح ";
            die();
        }
        $email = $_POST["signup_email"];
    }

    // database validation don't use it.
    // $firstName = $connection->real_escape_string($_POST["firstName"]);
    // $lastName = $connection->real_escape_string($_POST["lastName"]);
    // $email = $connection->real_escape_string($_POST["signup_email"]);
    // $password = sha1($connection->real_escape_string($_POST["password"]));
    // $m = $connection->real_escape_string($_POST['month']);
    // $d = $connection->real_escape_string($_POST['day']);
    // $y = $connection->real_escape_string($_POST['year']);
    // $gender = $connection->real_escape_string($_POST['gender']);
    // $date = $y . '-' . $m . '-' . $d;


    $existuser = $connection->query("SELECT email FROM users "); //this query is wrong ( forgetting where caluse to specifiy the entered mail)
    // the query should be like that
    // "SELECT email from users where email = '$email' LIMIT 1"
    // this condition is wrong too
    // $existuser->fetch_array()[0]->email != $email
    if ($existuser->fetch_array()[0] !== $email) {
        $data = $connection->query("INSERT INTO users (firstName, lastName, email, password,birthDate ,gender) VALUES ('$firstName', '$lastName', '$email', '$password','$date','$gender')");
    } else {
        echo "هذا الايميل موجود مسبقا ";
        $data = false;
    }


    if (!$data) {
        echo "Connection error!";
    } else {
        echo "Your have been signed up - please now Log In";
    }
    $connection->close();
}
