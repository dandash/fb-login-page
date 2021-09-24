<?php

if(isset($_POST['formSubmit']) &&  isset($_POST['email']) 
&& isset($_POST['password'])){

    if(empty($_POST['email'])){
        echo 'fill the email';
        die();
    }

    if(empty($_POST['password'])){
        echo 'fill the password';
        die();
    }
    session_start();
    $_SESSION['email'] = $_POST['email'];
    
    echo 'ok';
    exit();
}


?>

