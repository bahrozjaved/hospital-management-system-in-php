<?php include('server.php') ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/login.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="icon" href="images/logo.png" type="images/png" sizes="16x16">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Login</title>
</head>

<body>
    <div class="container-fluid bg">

        <div class="row">
            <div class="col-md-4 col-sm-4 col-xs-12">
            </div>
            <div class="col-md-4 col-sm-4 col-xs-12">
                <h1 style="color: #e74423;margin-top: 5vh;text-align: center;">WELCOME TO HMS</h1>
                <div class="login-form  form-container">


                    <form method="post" action="login.php">
                    <?php include('errors.php'); ?> 
                        <a class="navbar-brand" style="padding-left: 45px;">
                            <img src="images/logo.png" alt="no logo">
                        </a>
                        <h1 style="font-weight: bold;">Login</h1>
                        <div class="form-group">
                            <input type="text" name="username"style="outline: none;" placeholder="Username">
                            <span class="input-icon"><i class="fa fa-envelope"></i></span>
                        </div>
                        <div class="form-group">
                            <input type="password" name="password"style="outline: none;" placeholder="Password">
                            <span class="input-icon"><i class="fa fa-lock"></i></span>
                        </div>
                        <button class="login-btn" type="submit" name="login_user">Login</button>
                        <a href="admin.php"><button type="button"style="margin-top: 10px;"class="login-btn">Admin Login</button></a>
                        <a class="reset-psw" href="forget.php">Forgot your password?</a>
                        <div class="seperator"><b>or</b></div>
                        <a href="signup.php"><button type="button"class="login-btn">Sign Up</button></a>
                    </form>
                </div>

















                <!-- form end -->
            </div>
            <div class="col-md-4 col-sm-4 col-xs-12">

            </div>


        </div>

    </div>






</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</html>