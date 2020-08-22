<?php include('server.php') ?>

<!DOCTYPE html>

<html lang="zxx">

<head>
    <title>Hospital Management System</title>
    <!-- Meta tag Keywords -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="UTF-8" />
    <meta name="keywords" content="Medic Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design"
    />
    <script src="https://kit.fontawesome.com/38d1f664a0.js" crossorigin="anonymous"></script>

    <link rel="icon" href="images/logo.png" type="images/png" sizes="16x16">
    <script>
        addEventListener("load", function() {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>
    <!--// Meta tag Keywords -->

    <!-- Custom-Files -->
    <link rel="stylesheet" href="css/bootstrap.css">
    <!-- Bootstrap-Core-CSS -->
    <link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
    <!-- Style-CSS -->
    <link rel="stylesheet" href="css/fontawesome-all.css">
    <!-- Font-Awesome-Icons-CSS -->
    <!-- //Custom-Files -->


    <!-- <link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i&amp;subset=cyrillic,cyrillic-ext,greek,greek-ext,latin-ext,vietnamese" rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i&amp;subset=cyrillic,cyrillic-ext,greek,greek-ext,latin-ext,vietnamese" rel="stylesheet"> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>

<body>
    <!-- header -->
    <header>
        <!-- top-bar -->
        <div class="top-bar py-3">
            <div class="container">
                <div class="row">
                    <div class="col-lg-7 top-social-agile">
                        <div class="row">
                            <!-- social icons -->
                            <ul class="col-lg-4 col-6 top-right-info text-center">
                                <li>
                                    <a href="#">
                                        <i class="fa fa-facebook-f"></i>
                                    </a>
                                </li>
                                <li class="mx-3">
                                    <a href="#">
                                        <i class="fa fa-twitter"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fa fa-google-plus"></i>
                                    </a>
                                </li>
                                <li class="ml-3">
                                    <a href="#">
                                        <i class="fa fa-pinterest-p"></i>
                                    </a>
                                </li>
                            </ul>
                            <!-- //social icons -->
                            <div class="col-6 header-top_layouts pl-3 text-lg-left text-center">
                                <p class="text-white">
                                    <i class="fa fa-map-marker mr-2"></i>Children Hospital Main Saddar Karachi,Pakistan</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5 top-social-agile text-lg-right text-center">
                        <div class="row">
                            <div class="col-lg-7 col-6 top-layouts">
                                <p class="text-white">
                                    <i class="fa fa-envelope-open mr-2"></i>
                                    <a href="mailto:info@example.com" class="text-white">C-Hospital@gmail.com</a>
                                </p>
                            </div>
                            <div class="col-lg-5 col-6 header-layouts pl-4 text-lg-left">
                                <p class="text-white">
                                    <i class="fa fa-phone mr-2"></i>021-3821973</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- //top-bar -->

    <!-- header 2 -->
    <div id="home">
        <!-- navigation -->
        <div class="main-top py-1">
            <nav class="navbar navbar-expand-lg navbar-light fixed-navi">
                <div class="container">

                    <!-- logo -->
                    <a class="navbar-brand font-weight-bold font-italic" href="index.html">
                        <img src="images/logo.png" alt="No logo" width="160px" height="60px">
                    </a>

                    <!-- //logo -->
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
						<span class="navbar-toggler-icon"></span>
					</button>
                    <div class="collapse navbar-collapse text-center" id="navbarSupportedContent">
                        <ul class="navbar-nav ml-lg-auto">
                            <li class="nav-item  mt-lg-0 mt-3">
                                <a class="nav-link" href="index.html">Home
									<span class="sr-only">(current)</span>
								</a>
                            </li>
                            <li class="nav-item  mx-lg-4 my-lg-0 my-2">
                                <a class="nav-link" href="about.html">About Us</a>
                            </li>
                            <li class="nav-item  mx-lg-4 my-lg-0 my-2">
                                <a class="nav-link" href="News.html">News</a>
                            </li>
                            <li class="nav-item  mx-lg-4 my-lg-0 my-2">
                                <a class="nav-link" href="gallery.html">Gallery</a>
                            </li>
                            <li class="nav-item active mx-lg-4 my-lg-0 my-3">
                                <a class="nav-link" href="appointment.php">Appointment</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="contact.php">Contact Us</a>
                            </li>
                            <li>
                                <!-- login -->
                                <a href="login.php" class="login-button ml-lg-5 mt-lg-0 mt-4 mb-lg-0 mb-3">
                                    <i class="fas fa-sign-in-alt mr-2"></i>Login</a>
                                <!-- //login -->
                            </li>
                            <li>
                                <!-- Signup -->
                                <a href="signup.php" class="login-button ml-lg-5 mt-lg-0 mt-4 mb-lg-0 mb-3">
                                    <i class="fa fa-user-plus mr-2"></i>Signup</a>
                                <!-- //Signup -->

                            </li>
                        </ul>


                    </div>

                </div>
            </nav>
        </div>
        <!-- //navigation -->

    </div>
    <!-- //header 2 -->

    <!-- banner 2 -->
    <div class="inner-banner-w3ls">
        <div class="container">

        </div>
        <!-- //banner 2 -->
    </div>
    <!-- page details -->
    <div class="breadcrumb-agile">
        <div aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="index.html">Home</a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">Appointment</li>
            </ol>
        </div>
    </div>
    <!-- //page details -->

    <!-- contact -->
    <div class="appointment py-5">
        <div class="py-xl-5 py-lg-3">
            <div class="w3ls-titles text-center mb-5">
                <h3 class="title">Appointment</h3>
                <span>
					<i class="fas fa-user-md"></i>
				</span>
                <p class="mt-2">Form for patient Appointment</p>
            </div>
            <div class="d-flex">
                <div class="appoint-img">

                </div>
                <div class="contact-right-w3l appoint-form">
                    <h5 class="title-w3 text-center mb-5">Fill your appointment form</h5>
                    <form action="appointment.php" method="POST">
                    <?php include('errors.php'); ?>      
                    <div class="form-group">
                            <label for="recipient-name" class="col-form-label">Your Name</label>
                            <input type="text" class="form-control" placeholder="Your Name " name="username" id="recipient-name" required="">
                        </div>
                        <div class="form-group">
                            <label for="recipient-phone" class="col-form-label">Your Email</label>
                            <input type="email" class="form-control" placeholder="Your Email" name="email" id="recipient-phone" required="">
                        </div>
                        <div class="form-group">
                            <label for="datepicker" class="col-form-label">Select your doctor</label>
                            <select required="" class="form-control" name="doctor">
                            <option value="0">- Select -</option>
                            <?php 
                               // Fetch Department
                                     $sql_department = "SELECT * FROM registration WHERE type='doctor'";
                                        $department_data = mysqli_query($db,$sql_department);
                                          while($row = mysqli_fetch_assoc($department_data) ){
                                             
                                                  $depart_name = $row['username'];
              
                                                 // Option
                                             echo "<option value='".$depart_name."' >".$depart_name."</option>";
                                            }
                            ?>
    </select>
                        </div>

                        <div class="form-group">
                            <label for="datepicker" class="col-form-label">Select Day</label>
                            <select required="" class="form-control" name="day">
								<option value="">Select your day</option>
								<option value="Monday">Monday</option>
								<option value="Tuesday">Tuesday</option>
								<option value="Wednesday">Wednesday</option>
								<option value="Thursday">Thursday</option>
                                <option value="Friday">Friday</option>
                                <option value="Saturday">Saturday</option>				
                                <option value="Sunday">Sunday</option>
							</select>
                        </div>


                        <div class="form-group">
                            <label for="datepicker" class="col-form-label">Select appointment date</label>
                            <input placeholder="Date" name="date" class="date form-control" id="datepicker" type="text" value="" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '';}" required="" />
                        </div>
                        <div class="form-group">
                            <label for="datepicker" class="col-form-label">Select appointment time</label>
                            <select required="" name="time" class="form-control">
								<option value="">Select Time</option>
								<option value="08:00-8:30">08:00-8:30</option>
								<option value="08:30-9:00">08:30-9:00</option>
								<option value="09:00-9:30"> 09:00-9:30</option>
								<option value="09:30-10:00">09:30-10:00</option>
							</select>
                        </div>

                        <div class="form-group">
                            <label for="recipient-phone" class="col-form-label">Reason</label>
                            <input type="text" class="form-control" placeholder="Your Reason" name="reason" id="recipient-phone" required="">
                        </div>

                        <div class="form-group">
                            <label for="recipient-phone" class="col-form-label">Contact Number</label>
                            <input type="text" class="form-control" placeholder="Your Contact number" name="number" id="recipient-phone" required="">
                        </div>


                        <input type="submit" value="Book Appointment" class="btn_apt" name="appoint">
                    </form>
                </div>
                <div class="clerafix"></div>
            </div>
        </div>
    </div>
    <!-- //contact -->
    <!-- footer -->
    <footer>
        <div class="w3ls-footer-grids pt-sm-4 pt-3">
            <div class="container py-xl-5 py-lg-3">
                <div class="row">
                    <div class="col-md-4 w3l-footer">
                        <h2 class="mb-sm-3 mb-2">
                            <img src="images/logo.png" alt="not found" width="250px" height="50px">
                        </h2>
                        <p style="text-align: justify;"> A hospital management system (HMS) is a computer or web based system that facilitates managing the functioning of the hospital or any medical set up. This system or software will help in making the whole functioning paperless.It
                            integrates all the information regarding patients, doctors, staff, hospital administrative details etc. into one software4. It has sections for various professionals that make up a hospital.
                        </p>
                    </div>
                    <div class="col-md-4 w3l-footer my-md-0 my-4">
                        <h3 class="mb-sm-3 mb-2 text-white">Address</h3>
                        <ul class="list-unstyled">
                            <li>
                                <i class="fas fa-location-arrow float-left"></i>
                                <p class="ml-4">Children Hospital
                                    <span>Main Saddar </span>Karachi,Pakistan </p>
                                <div class="clearfix"></div>
                            </li>
                            <li class="my-3">
                                <i class="fas fa-phone float-left"></i>
                                <p class="ml-4">021-3821973</p>
                                <div class="clearfix"></div>
                            </li>
                            <li>
                                <i class="far fa-envelope-open float-left"></i>
                                <a href="mailto:\ C-Hospital@gmail.com" class="ml-3"> C-Hospital@gmail.com</a>
                                <div class="clearfix"></div>
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-4 w3l-footer">
                        <h3 class="mb-sm-3 mb-2 text-white">Quick Links</h3>
                        <div class="nav-w3-l">
                            <ul class="list-unstyled">
                                <li>
                                    <a href="index.html">Home</a>
                                </li>
                                <li class="mt-2">
                                    <a href="about.html">About Us</a>
                                </li>
                                <li class="mt-2">
                                    <a href="gallery.html">Gallery</a>
                                </li>
                                <li class="mt-2">
                                    <a href="appointment.html">Appointment</a>
                                </li>
                                <li class="mt-2">
                                    <a href="contact.html">Contact Us</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="border-top mt-5 pt-lg-4 pt-3 pb-lg-0 pb-3 text-center">
                    <p class="copy-right-grids mt-lg-1">© 2020 Hospital Management System. All Rights Reserved | Design by
                        <a href="#" target="_blank">Bahroz Javed</a>
                    </p>
                </div>
            </div>
        </div>
    </footer>
    <!-- //footer -->



    <!-- Js files -->
    <!-- JavaScript -->
    <script src="js/jquery-2.2.3.min.js"></script>
    <!-- Default-JavaScript-File -->

    <!--start-date-piker-->
    <link rel="stylesheet" href="css/jquery-ui.css" />
    <script src="js/jquery-ui.js"></script>
    <script>
        $(function() {
            $("#datepicker,#datepicker1").datepicker();
        });
    </script>
    <!-- //End-date-piker -->

    <!-- fixed navigation -->
    <script src="js/fixed-nav.js"></script>
    <!-- //fixed navigation -->

    <!-- smooth scrolling -->
    <script src="js/SmoothScroll.min.js"></script>
    <!-- move-top -->
    <script src="js/move-top.js"></script>
    <!-- easing -->
    <script src="js/easing.js"></script>
    <!--  necessary snippets for few javascript files -->
    <script src="js/medic.js"></script>

    <script src="js/bootstrap.js"></script>
    <!-- Necessary-JavaScript-File-For-Bootstrap -->

    <!-- //Js files -->

</body>

</html>- //Js files -->

</body>

</html>