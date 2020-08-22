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

    <!-- Web-Fonts -->
    <!-- <link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i&amp;subset=cyrillic,cyrillic-ext,greek,greek-ext,latin-ext,vietnamese" rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i&amp;subset=cyrillic,cyrillic-ext,greek,greek-ext,latin-ext,vietnamese" rel="stylesheet"> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="icon" href="images/logo.png" type="images/png" sizes="16x16">
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
                            <li class="nav-item mx-lg-4 my-lg-0 my-3">
                                <a class="nav-link" href="appointment.php">Appointment</a>
                            </li>
                            <li class="nav-item active">
                                <a class="nav-link" href="contact.html">Contact Us</a>
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
                <li class="breadcrumb-item active" aria-current="page">Contact Us</li>
            </ol>
        </div>
    </div>
    <!-- //page details -->

    <!-- contact -->
    <div class="agileits-contact py-5">
        <div class="py-xl-5 py-lg-3">
            <div class="w3ls-titles text-center mb-5">
                <h3 class="title">Contact Us</h3>
                <span>
					<i class="fas fa-user-md"></i>
				</span>
                <p class="mt-2">For any Queries Feel Free to Contact Us.</p>
            </div>
            <div class="d-flex">
                <div class="col-lg-5 w3_agileits-contact-left">
                </div>
                <div class="col-lg-7 contact-right-w3l">
                    <h5 class="title-w3 text-center mb-5">Contact Form</h5>
                    <form action="contact.php" method="post">
                    <?php include('errors.php'); ?> 
                    <div class="d-flex space-d-flex">
                            <div class="form-group grid-inputs">
                                <input type="text" class="name form-control" name="fname" placeholder="First Name" required="">
                            </div>
                            <div class="form-group grid-inputs">
                                <input type="text" class="name form-control" name="lname" placeholder="Last Name" required="">
                            </div>
                        </div>
                        <div class="form-group">
                            <input type="email" class="name form-control" name="email" placeholder="Email" required="">
                        </div>
                        <div class="form-group">
                            <input type="text" class="name form-control" name="subject" placeholder="Subject" required="">
                        </div>

                        <div class="form-group">
                            <textarea placeholder="Your Message" required=""name="comment" class="form-control"></textarea>
                        </div>
                        <div class="form-group">
                            <input type="submit" name="reg_comment">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- //contact -->

    <!-- Map -->
    <div class="map">
        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14479.504567393258!2d67.0304481!3d24.8680795!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xe17ee037b8f21bc1!2sTaj%20Medical%20Complex!5e0!3m2!1sen!2s!4v1593940601788!5m2!1sen!2s" width="600"
            height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
    </div>
    <!-- //Map -->
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

    <!-- banner slider -->
    <script src="js/responsiveslides.min.js"></script>
    <script>
        $(function() {
            $("#slider4").responsiveSlides({
                auto: true,
                pager: true,
                nav: true,
                speed: 1000,
                namespace: "callbacks",
                before: function() {
                    $('.events').append("<li>before event fired.</li>");
                },
                after: function() {
                    $('.events').append("<li>after event fired.</li>");
                }
            });
        });
    </script>
    <!-- //banner slider -->

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

</html>