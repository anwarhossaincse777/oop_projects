<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/css/admin/login.css">
    <link rel="stylesheet" href="../assets/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="../assets/fontawesome/css/fontawesome.min.css">
</head>
<body>

<div class="container">

    <!--        Admin login Form start-->

    <div class="row justify-content-center h-100vh" id="login-from-box">
        <div class="col-lg-10 my-auto">

            <div class="card-group">
                <div class="card p-4">

                    <h2 class="text-center text-primary font-weight-bold">Login to Your Account</h2>
                    <hr class="my-3">

                    <div id="loginError"></div>

                    <form action="" method="post" id="login-form" enctype="multipart/form-data">
                        <div class="input-group input-group-lg form-group">
                            <div class="input-group-prepend">
                                    <span class="input-group-text">
                                    <i class="fas fa-envelope"></i>
                                    </span>
                            </div>
                            <input type="email" class="form-control is-invalid" name="email" id="email"
                                   placeholder="Enter Your Email">

                        </div>

                        <div class="input-group input-group-lg form-group">
                            <div class="input-group-prepend">
                                    <span class="input-group-text">
                                    <i class="fas fa-key"></i>
                                    </span>
                            </div>
                            <input type="password" class="form-control is-invalid" id="password" name="password"
                                   placeholder="Enter Your Password">

                        </div>
                        <div class="form-group">

                            <div class="float-left custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="remember">
                                <lable for="remember" class="custom-control-label">Remember Me</lable>

                            </div>

                            <div class="float-right">
                                <a href="javascript:" id="showForgetForm" class="text-decoration-none">Forget
                                    password?</a>

                            </div>
                            <div class="clearfix">
                            </div>


                        </div>

                        <div class="form-group">
                            <input type="submit" value="Sing In" id="loginBtn" class="btn-block btn-primary">

                        </div>

                    </form>

                </div>

                <div class="card justify-content-center" style="background: #1d2124"
                ">
                <h2 class="text-center text-white font-weight-bold">Welcome Back !</h2>
                <hr class="my-3 bg-light">
                <p class="text-center text-light">Please login in with your user email and password</p>

                <button class="btn btn-outline-light btn-lg align-content-lg-center" id="showSignUpForm">Sing Up
                </button>
            </div>

        </div>
    </div>

</div>

<!--        Admin login Form end-->


<!--register form  start-->

<div class="row justify-content-center h-100vh" id="register-from-box">
    <div class="col-lg-10 my-auto">

        <div class="card-group">
            <div class="card p-4">

                <h2 class="text-center text-primary font-weight-bold">Create New Account</h2>

                <hr class="my-3">

                <div id="registerError">

                </div>

                <form action="" method="post" id="register-form" enctype="multipart/form-data">


                    <div class="input-group input-group-lg form-group">
                        <div class="input-group-prepend">
                                    <span class="input-group-text">
                                    <i class="fas fa-user"></i>
                                    </span>
                        </div>
                        <input type="text" class="form-control is-invalid" name="name" id="name"
                               placeholder="Enter Your Name">

                        <div class="invalid-feedback">This name field is required</div>

                    </div>


                    <div class="input-group input-group-lg form-group">
                        <div class="input-group-prepend">
                                    <span class="input-group-text">
                                    <i class="fas fa-envelope"></i>
                                    </span>
                        </div>
                        <input type="text" class="form-control is-invalid" name="email" id="r_email"
                               placeholder="Enter Your Email">

                        <div class="invalid-feedback">This email field is required</div>

                    </div>




                    <div class="input-group input-group-lg form-group">
                        <div class="input-group-prepend">
                                    <span class="input-group-text">
                                    <i class="fas fa-key"></i>
                                    </span>
                        </div>
                        <input type="password" class="form-control is-invalid" id="r_password" name="r_password"
                               placeholder="Enter Your Password">
                        <div class="invalid-feedback">This is password field is required</div>
                    </div>


                    <div class="input-group input-group-lg form-group">
                        <div class="input-group-prepend">
                                    <span class="input-group-text">
                                    <i class="fas fa-key"></i>
                                    </span>
                        </div>
                        <input type="password" class="form-control is-invalid" id="c_password" name="c_password"
                               placeholder="Enter Confirm Password">
                        <div class="invalid-feedback">This confirm password field is required</div>
                    </div>
                    <div class="form-group">

                        <div class="float-left custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="remember">
                            <lable for="remember" class="custom-control-label">Remember Me</lable>

                        </div>

                        <div class="float-right">
                            <a href="javascript:" id="ForgetPass" class="text-decoration-none">Forget password?</a>

                        </div>
                        <div class="clearfix">
                        </div>


                    </div>

                    <div class="form-group">
                        <input type="submit" value="Register" id="registerUser" class="btn-block btn-primary">

                    </div>

                </form>

            </div>

            <div class="card justify-content-center" style="background: #1d2124"
            ">
            <h2 class="text-center text-white font-weight-bold">Welcome Back !</h2>
            <hr class="my-3 bg-light">
            <p class="text-center text-light">Please login in with your user email and password</p>

            <button class="btn btn-outline-light btn-lg align-content-lg-center" type="button" id="showSignIn">Sing In
            </button>
        </div>

    </div>
</div>

</div>

<!--register form  end-->

<!--    password start-->
<div class="row justify-content-center h-100vh" id="password-from-box">
    <div class="col-lg-10 my-auto">

        <div class="card-group">
            <div class="card p-4">

                <h2 class="text-center text-primary font-weight-bold">Forgotten Password ?</h2>
                <hr class="my-3">
                <form action="" method="post" id="password-form" enctype="multipart/form-data">
                    <div class="input-group input-group-lg form-group">
                        <div class="input-group-prepend">
                                    <span class="input-group-text">
                                    <i class="fas fa-envelope"></i>
                                    </span>
                        </div>
                        <input type="email" class="form-control" name="email" id="email" placeholder="Enter Your Email">

                    </div>

                    <div class="form-group">


                        <div class="clearfix">
                        </div>


                    </div>

                    <div class="form-group">
                        <input type="submit" value="Reset Password" class="btn-block btn-primary">

                    </div>

                </form>

            </div>

            <div class="card justify-content-center" style="background: #1d2124"
            ">
            <h2 class="text-center text-white font-weight-bold">Welcome Back !</h2>
            <hr class="my-3 bg-light">
            <p class="text-center text-light">Please login in with your user email and password</p>

            <button class="btn btn-outline-light btn-lg align-content-lg-center" type="button" id="back">Back</button>
        </div>

    </div>
</div>

</div>

<!--    forgotten password end-->


</div>


<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>

<script href="../assets/js/jquery-3.6.1.min.js"></script>
<script href="../assets/js/popper.min.js"></script>
<script href="../assets/js/bootstrap.bundle.min.js"></script>

<script href="../assets/js/admin/login.js"></script>

</body>
</html>


<script type="text/javascript">

    $(document).ready(function () {

        $('#showSignUpForm').click(function () {

            $('#login-from-box').hide();
            $('#password-from-box').hide();
            $('#register-from-box').show();

        });

        $('#showSignInForm').click(function () {
            $('#register-from-box').hide();
            $('#password-from-box').hide();
            $('#login-from-box').show();


        });


        $('#showForgetForm').click(function () {
            $('#register-from-box').hide();
            $('#login-from-box').hide();
            $('#password-from-box').show();


        });


        $('#back').click(function () {
            $('#register-from-box').hide();
            $('#login-from-box').show();
            $('#password-from-box').hide();


        });


        $('#showSignIn').click(function () {
            $('#register-from-box').hide();
            $('#password-from-box').hide();
            $('#login-from-box').show();


        });

        $('#ForgetPass').click(function () {
            $('#register-from-box').hide();
            $('#login-from-box').hide();
            $('#password-from-box').show();


        });




        //validation for use registration

        $('#registerUser').click(function (e) {

            if ($('#register-form')[0].checkValidity()) {

                e.preventDefault();
                $('#registerUser').val("Loading....").attr('disabled', true);

                if ($("#name").val() === '') {

                    $("#name").addClass("is-invalid");
                } else {

                    $("#name").removeClass("is-invalid");
                }


                if ($("#r_email").val() === '') {

                    $("#r_email").addClass("is-invalid");
                } else {

                    $("#r_email").removeClass("is-invalid");
                }


                if ($("#r_password").val() === '') {

                    $("#r_password").addClass("is-invalid");
                } else {

                    $("#r_password").removeClass("is-invalid");
                }

                if ($("#c_password").val() === '') {

                    $("#c_password").addClass("is-invalid");
                } else {

                    $("#c_password").removeClass("is-invalid");
                }


                if ($("#r_password").val() === $("#c_password").val()){


                    if ($("#name").val() !=='' && $("#r_email").val() !=='') {

                            $.ajax({
                                url:'action.php',
                                method:'POST',
                                data:$("#register-form").serialize() + '&action=register',
                                success:function (response){
                                    if(response==='ok'){

                                        window.location='index.php';
                                    }
                                    else{

                                        $('#registerError').html(response);

                                    }

                                }

                            })

                    }

                } else {


                  alert($("#name").val());
                }


                setTimeout(function () {

                    $('#registerUser').val("Register").attr('disabled', false);

                }, 1000)



            }


        });




        //login validation

        $('#loginBtn').click(function (e) {

            if ($('#login-form')[0].checkValidity()) {

                e.preventDefault();
                $('#loginBtn').val("Loading....").attr('disabled', true);


                if ($("#email").val() === '') {

                    $("#email").addClass("is-invalid");
                } else {

                    $("#email").removeClass("is-invalid");
                }


                if ($("#password").val() === '') {

                    $("#password").addClass("is-invalid");
                } else {

                    $("#password").removeClass("is-invalid");
                }


                    if ($("#email").val() !=='' && $("#password").val() !=='') {

                        $('#loginBtn').val("log In").attr('disabled', false);

                        $.ajax({
                            url:'action.php',
                            method:'POST',
                            data:$("#login-form").serialize() + '&action=login',
                            success:function (response){

                                if (response=='0k'){

                                     window.location='index.php';

                                }else {


                                    $('#loginError').html(response);
                                }

                            }

                        })

                    }



            }


        });


        });




</script>
