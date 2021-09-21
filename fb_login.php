<?php 
if(!isset($email))
{
    $email="";
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title></title>
    <link rel="stylesheet" href="fb_login.css">
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
                    <form action="server.php" method="POST">
                        <div class="form-group">

                            <input type="text" placeholder="البريد الإلكتروني أو رقم الهاتف" name="email" <?php echo htmlspecialchars($email)?>>
                            <?php if(isset($email_error)) { ?>
                         <p class="error_msg"> <?php echo $email_error?></p>
                            <?php }?>
                            <input type="password" placeholder="كلمة السر" name="password">
                            <?php if(isset($password_error)){?>
                                <p class="error_msg"><?php echo $password_error?></p>
                            <?php }?>
                            <div class="login">
                              <input type="submit" class="btn"   value="تسجيل الدخول">
                            </div>
                            <div class="forgot">
                                <a href="">هل نسيت كلمة السر؟</a>
                            </div>
                            <div class="create-btn">
                                <a href="" class="btn">إنشاء حساب جديد</a>
                            </div>
                    </form>

                </div>
                <p><a href="">إنشاء صفحة</a> ‏ لفرق موسيقية أو مشاهير أو أنشطة تجارية.</p>
            </div>
        </div>
    </div>





</body>





</html>