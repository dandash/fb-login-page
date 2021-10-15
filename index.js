$(document).ready(function () {
    $('#signup-account').click(function () {


        $('.modal').show();

    });

    $('.modal-close').click(function () {


        $('.modal').hide();

    });
    $(document).on('click', ".facebook__form .form__btn", function () {

        var email = $(".facebook__form .form__mail").val(),
            password = $(".facebook__form .form__password").val(),
            error = false;
        if (email == '') {
            console.log("email")
            $(".facebook__form .email_error_msg").html("من فضلك ادخل البريد الالكتروني");
            error = true;
        }
        if (password == '') {
            console.log("password")
            $(".facebook__form .password_error_msg").html("من فضلك ادخل الرقم السري ");
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
                            window.location.replace('home.php')
                        } else {
                            $('.facebook__form .server__errors').html(data);
                        }
                    } else {
                        alert("something went wrong");
                    }
                });
        }
    });


    /* signup validation*/
    $(document).on('click', ".modal-signup .signup_btn", function (e) {
        //  e.preventDefault();

        var firstname = $(".modal-signup .modal-signup-name .first_name").val(),
            lastname = $(".modal-signup .modal-signup-name .last_name").val(),
            signupemail = $(".modal-signup .modal-signup-email .signup_email").val(),
            emailconfirm = $(".modal-signup .modal-signup-email .emailConfirm").val(),
            signup_password = $(".modal-signup .modal-signup-password .signup_password").val(),
            day = $(".select-choice .day").val(),
            month = $(".select-choice .month").val(),
            year = $(".select-choice .year").val(),
            gender = $(".modal-signup .modal-gender-choice .modal-gender-name .gender").val();
        console.log("gender is" + gender);
        error = false;
        if (firstname == '' || lastname == '') {
            console.log("name")
            $(".modal-signup  .signup_name_error_msg").html("من فضلك ادخل الاسم الاول واسم العائله ");
            error = true;
        }
        if (signupemail == '') {
            console.log("email")
            $(".modal-signup .signup_email_error_msg").html("من فضلك ادخل البريد الالكتروني");
            error = true;
        }
        var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
        if (!signupemail.match(mailformat)) {
            $(".modal-signup .signup_email_error_msg").html("لقد ادخلت بريد الكتروني غير صالح  ");
            error = true;
        }
        if (emailconfirm == '') {
            console.log("emaemail")
            $(".modal-signup .signup_confirmemail_error_msg").html("من فضلك اعد ادخال البريد الالكتروني");
            error = true;
        }
        if (signupemail != emailconfirm) {
            alert('الايميل غير متطابق !');
        }
        if (signup_password == '') {
            console.log("password")
            $(".modal-signup .signup_password_error_msg").html("من فضلك ادخل الرقم السري ");
            error = true;
        }
        if (day == 0 || month == 0 || year == 0) {
            console.log("birthdate")
            $(".modal-signup  .signup_birthdate_error_msg").html("من فضلك اكمل تاريخ الميلاد ");
        }
        if ((gender[0].checked == false && gender[1].checked == false && gender[2].checked == false)) {
            console.log("gender")
            $(".modal-signup .signup_gender_error_msg").html("من فضلك ادخل النوع ");
            error = true;
        }


        if (!error) {
            $(".modal-signup .signup_name_error_msg").html("");
            $(".modal-signup .signup_email_error_msg").html("");
            $(".modal-signup .signup_confirmemail_error_msg").html("");
            $(".modal-signup  .signup_password_error_msg").html("");
            $(".modal-signup .signup_birthday_error_msg").html("");
            $(".modal-signup .signup_gender_error_msg").html("");

            $.post("signup.php",
                {
                    signupformSubmit: true,
                    email: signupemail,
                    firstName: firstname,
                    lastName: lastname,
                    password: signup_password,
                    day: day,
                    month: month,
                    year: year,
                    gender: gender


                },
                function (data, status) {
                    if (status == 'success') {
                        if (data == 'ok') {
                            console.log("you have signedup");
                        } else {
                            $('.modal-signup .signup_server__errors').html(data);
                        }
                    } else {
                        alert("something went wrong");
                    }
                });
        }
    });




});
