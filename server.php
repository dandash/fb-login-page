<?php
//$email=$_POST['email'];
//$password=$_POST['password'];
$email=filter_input(INPUT_POST,'email');
$password=filter_input(INPUT_POST,'password');

if($email == "" || preg_match('/^\s+$/', $email) == true) { 
    $email_error = 'من فضلك ادخل البريد الالكتروني';
} 
elseif (isset($email) && !preg_match("/([\w\-]+\@[\w\-]+\.[\w\-]+)/",$email)){
        $email_error = 'لقد أدخلت عنوان بريد إلكتروني غير صالح!';
}
if(empty($password)){
    $password_error="من فضلك ادخل الرقم السري";
}
elseif(strlen($password)>6)
{
 $password_error="الرقم السري لابد ان يكون اكثر من 6 حروف";
}

if(empty($email_error)&&empty($password_error)){
    include('success.php');
}
else
{
    include('fb_login.php');
}


?>

