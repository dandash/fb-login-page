<?php
if (isset($_POST['signup'])) {
    $connection = new mysqli("localhost", "root", "", "facebookdb");
    $firstName = $connection->real_escape_string($_POST["firstName"]);
    $lastName = $connection->real_escape_string($_POST["lastName"]);
    $email = $connection->real_escape_string($_POST["signup_email"]);
    $password = sha1($connection->real_escape_string($_POST["password"]));
    $m = $connection->real_escape_string($_POST['month']);
    $d = $connection->real_escape_string($_POST['day']);
    $y = $connection->real_escape_string($_POST['year']);
    $gender = $connection->real_escape_string($_POST['gender']);
    $date = $y . '-' . $m . '-' . $d;

    echo 'You have selected: ' . $date;
    echo $email;
    echo $gender;
    if (checkdate($m, $d, $y) == TRUE) {
        echo "<p>Date of birth:$y $m $d</p>";
    }

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "لقد ادخلت بريد الكتروني غير صالح ";
        die();
    }
    $existuser = $connection->query("SELECT email FROM users ");
    if ($existuser->fetch_array()[0] !== $email) {
        $data = $connection->query("INSERT INTO users (firstName, lastName, email, password,birthDate ,gender) VALUES ('$firstName', '$lastName', '$email', '$password','$date','$gender')");
    } else {
        echo "هذا الايميل موجود مسبقا ";
        $data = false;
    }


    if ($data === false) {
        echo "Connection error!";
    } else {
        echo "Your have been signed up - please now Log In";
        // echo 'ok';
    }
    $connection->close();
}

?>
<html>


</html>