<?php
$servername = "localhost";
$username = "root";
$password = " ";
$dbname = "facebookdb";
if (isset($_POST['signupformSubmit'])) {
    if (empty($_POST['firstName'])) {

        echo "من فضلك ادخل الاسم الاول واسم العائله ";
        die();
    } else {
        $firstName = $_POST['firstName'];
    }
    if (empty($_POST['lastName'])) {

        echo "من فضلك ادخل الاسم الاول واسم العائله ";
        die();
    } else {
        $lastName = $_POST['lastName'];
    }
    if (empty($_POST["email"])) {
        echo "يجب ادخال البريد الالكترونى";
        die();
    } else {
        if (!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
            echo "لقد ادخلت بريد الكتروني غير صالح ";
            die();
        }
        $email = $_POST["email"];
    }
    if (empty($_POST['emailConfirm'])) {
        echo "من فضلك اعد ادخال البريد الالكترونى";
        die();
    } else {
        if ($_POST['emailConfirm'] != $email) {
            echo "البريد الالكتروني غير متطابق ";
            die();
        }
    }

    if (!empty($_POST["password"])) {
        if (strlen($_POST["password"]) <= '8') {
            echo "يجب أن تحتوي كلمة مرورك على 8 أحرف على الأقل!";
        } elseif (!preg_match("#[0-9]+#", $_POST["password"])) {
            echo "يجب أن تحتوي كلمة مرورك على رقم واحد على الأقل!";
        } elseif (!preg_match("#[A-Z]+#", $_POST["password"])) {
            echo "يجب أن تحتوي كلمة مرورك على حرف كبير واحد على الأقل! ";
        } elseif (!preg_match("#[a-z]+#", $_POST["password"])) {
            echo "يجب أن تحتوي كلمة مرورك على حرف صغير واحد على الأقل!";
        }
        $password = $_POST['password'];
    } else {
        echo "من فضلك ادخل الرقم السري ";
    }


    if (empty($_POST['date'])) {
        echo "من فضلك اكمل ادخال تاريخ الميلاد ";
    } else {
        $date = $_POST['date'];
    }

    if (empty($_POST['gender'])) {
        echo "من فضلك ادخل النوع  ";
    } else {
        $gender = $_POST['gender'];
    }
    try {
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $stmt = $conn->prepare("SELECT email FROM users where email='$email'");
        $stmt->execute();
        $existuser = $stmt->setFetchMode(PDO::FETCH_ASSOC);
        echo $existuser[0];
        if ($existuser[0] !== $email) {
            $data = $conn->exec("INSERT INTO users (firstName, lastName, email, password,birthDate ,gender) VALUES ('$firstName', '$lastName', '$email', '$password','$date','$gender')");
        } else {
            echo "هذا الايميل موجود مسبقا ";
            $data = false;
        }
        if (!$data) {
            echo "Connection error!";
        } else {
            echo "<p class='success_result'>Your have been signed up - please now Log In</p>";
        }
    } catch (PDOException $e) {
        echo "<br>" . $e->getMessage();
    }
}
