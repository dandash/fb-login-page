<?php
//require_once('Connection.php');
//require_once('dbmigration.php');
include_once 'C:\wamp64\www\starkid\fb-login-page\dbstalker\core\stalker_configuration.core.php';
include_once 'C:\wamp64\www\starkid\fb-login-page\dbstalker\core\stalker_database.core.php';


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
            die();
        } elseif (!preg_match("#[0-9]+#", $_POST["password"])) {
            echo "يجب أن تحتوي كلمة مرورك على رقم واحد على الأقل!";
            die();
        } elseif (!preg_match("#[A-Z]+#", $_POST["password"])) {
            echo "يجب أن تحتوي كلمة مرورك على حرف كبير واحد على الأقل! ";
            die();
        } elseif (!preg_match("#[a-z]+#", $_POST["password"])) {
            echo "يجب أن تحتوي كلمة مرورك على حرف صغير واحد على الأقل!";
            die();
        }
        $password = sha1($_POST['password']);
    } else {
        echo "من فضلك ادخل الرقم السري ";
        die();
    }


    if (empty($_POST['date'])) {
        echo "من فضلك اكمل ادخال تاريخ الميلاد ";
        die();
    } else {
        $date = $_POST['date'];
    }

    if (empty($_POST['gender'])) {
        echo "من فضلك ادخل النوع  ";
        die();
    } else {
        $gender = $_POST['gender'];
    }
    try {

        $conn = Stalker_Database::instance();
        $stmt = $conn->execute("SELECT email FROM users where email='$email' limit 1");
        $existuser  = $stmt->fetch();

        if (!$existuser) {
            $data = $conn->execute("INSERT INTO users (firstName, lastName, email, password,birthDate ,gender) VALUES ('$firstName', '$lastName', '$email', '$password','$date','$gender')");
        } else {
            echo "هذا الايميل موجود مسبقا ";
            $data = false;
            die();
        }
        if (!$data) {
            echo "Connection error!";

            die();
        } else {
            echo "<p class='success_result'>Your have been signed up - please now Log In</p>";
            exit();
        }
    } catch (PDOException $e) {
        echo "<br>" . $e->getMessage();
    }
}
