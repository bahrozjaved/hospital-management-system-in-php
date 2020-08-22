<?php include('server.php') ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/signup.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="icon" href="images/logo.png" type="images/png" sizes="16x16">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Sign up</title>
</head>

<body>
    <div class="container-fluid bg">

        <div class="row">
            <div class="col-md-4 col-sm-4 col-xs-12">
            </div>
            <div class="col-md-4 col-sm-4 col-xs-12">
                <h1 style="color: #e74423;margin-top: 3vh;text-align: center;">WELCOME TO HMS</h1>
                <div class="login-form  form-container">


                    <form method="post" action="signup.php">
                    <?php include('errors.php'); ?>    
                    <a class="navbar-brand" style="padding-left: 45px;">
                            <img src="images/logo.png" alt="no logo">
                        </a>
                        <h1 style="font-weight: bold;">SIGN UP</h1>

                        <div class="form-group">
                            <input type="username" name="username"style="outline: none;" value="<?php echo $username; ?>"placeholder="username"required>
                            <span class="input-icon"><i class="fa fa-user"></i></span>
                            
                        </div>
                        <div class="form-group">
                            <input type="username" name="mobile"style="outline: none;" placeholder=" Mobile no Prattern: 03010000000"pattern="[0-9]{4}[0-9]{7}" required>
                            <span class="input-icon"><i class="fa fa-mobile"></i></span>
                        </div>
                        <div class="form-group">
                            <input type="email" name="email"style="outline: none;"value="<?php echo $email; ?>"  pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$"placeholder="hello@example.com"required>
                            <span class="input-icon"><i class="fa fa-envelope"></i></span>
                        </div>

                        <div class="form-group">
                            <input type="password" name="password_1" style="outline: none;"placeholder="Password"required>
                            <span class="input-icon"><i class="fa fa-lock"></i></span>
                        </div>
                        <div class="form-group">
                            <input type="password" name="password_2" style="outline: none;"placeholder=" Re-Type Password"required>
                            <span class="input-icon"><i class="fa fa-lock"></i></span>
                        </div>

                        <button class="login-btn"name="reg_user" type="submit">Sign UP</button>

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