<?php     
    include('server.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>facebook</title>
    <link rel="stylesheet" href="fb_login.css">
    <!-- jquery plugin -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>

<body>
    <div class="fb-login">
        <div class="container">
            <div class="row-box justify-content-between">
                <div class="right-content">
                    <img class="fb_logo" src="https://static.xx.fbcdn.net/rsrc.php/y8/r/dF5SId3UHWd.svg" alt="فيسبوك">

                    <h2> يمنحك فيسبوك إمكانية التواصل مع الأشخاص <br>ومشاركة ما تريد معهم </h2>
                </div>
                <div class="left-content">
                    <form class="facebook__form">
                        <div class="form-group">

                            <input type="text" placeholder="البريد الإلكتروني أو رقم الهاتف" name="email"  class="form__mail">
                            <p class="email_error_msg"></p>
                            <input type="password" placeholder="كلمة السر" name="password" class="form__password">
                            <p class="password_error_msg"></p>
                            <div class="login">
                              <input class="btn form__btn"  value="تسجيل الدخول" />
                            </div>
                            <div class="forgot">
                                <a href="">هل نسيت كلمة السر؟</a>
                            </div>
                            <div class="create-btn">
                                <a href="" class="btn">إنشاء حساب جديد</a>
                            </div>
                            <p class="server__errors"></p>
                    </form>

                </div>
                <p><a href="">إنشاء صفحة</a> ‏ لفرق موسيقية أو مشاهير أو أنشطة تجارية.</p>
            </div>
        </div>
    </div>



<script src="./index.js"></script>

</body>





</html>