<?php
try {
    $conn = Stalker_Database::instance();
    if (isset($_POST['formSubmit'])) {
        $email = $_POST["email"];
        $password = sha1($_POST["password"]);


        if (empty($email) || empty($password)) {
            $message = '<label>All fields are required</label>';
        } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            echo "لقد ادخلت بريد الكتروني غير صالح ";
            die();
        } else {
            $query = "SELECT firstName FROM users WHERE email='$email' AND password= '$password'";
            $data = $conn->execute($query, array());


            if (
                $data->rowCount() > 0
            ) {
                $_SESSION["email"] = $email;
                $_SESSION["loggedIn"] = 1;
                echo 'ok';
                exit();
            } else {
                echo "user doesn't exit!";
                exit();
            }
        }
    }
} catch (PDOException $e) {
    echo "<br>" . $e->getMessage();
    $message = $e->getMessage();
    exit();
}
