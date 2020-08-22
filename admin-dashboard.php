<?php 
  session_start(); 

  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: login.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: login.php");
  }
?>

<!DOCTYPE html>

<head>
    <link rel="icon" href="assets/img/logo.png" type="images/png" sizes="16x16">
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta content="" name="description" />
    <meta content="webthemez" name="author" />
    <title>Admin Panel</title>
    <!-- Bootstrap Styles-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FontAwesome Styles-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
    <!-- Custom Styles-->
    <link href="assets/css/admin.css" rel="stylesheet" />
    <!-- Google Fonts-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>

<body>
    <div id="wrapper">
        <nav class="navbar navbar-default top-navbar" role="navigation">
            <div class="navbar-header">
                <a class="navbar-brand" href="index.html"><img src="assets/img/logo.png" alt="not found" width="230px" height="60px"></a>

                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="dark-blue-text"><i
                        class="fa fa-bars fa-1x"></i></span>    
                </button>

                <div id="sideNav" href="">
                    <i class="fa fa-bars icon"></i>
                </div>
            </div>

            <ul class="nav navbar-top-links navbar-right">

                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="false">
                        <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li ><a href="#"style="text-decoration: none;color: inherit;" ><i class="fa fa-user fa-fw"></i> <?php  if (isset($_SESSION['username'])) : ?>
    	<?php echo $_SESSION['username']; ?> <?php endif ?></a>
                        </li>
                        <li><a href="#"><i class="fa fa-gear fa-fw"></i> Settings</a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="admin.php?logout='1'"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
        </nav>
        <!--/. NAV TOP  -->
        <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">

                    <li>
                        <a class="active-menu" href="admin-dashboard.php"><i class="fa fa-dashboard"></i> Home</a>
                    </li>
                  

                    <li>
                        <a href="# "><i class="fa fa-sitemap"></i> Admin<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level ">
                            <li>
                                <a href="Add-Admin.php">Add Admin</a>
                            </li>
                            <li>
                                <a href="view-admin.php">View All Admin</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-sitemap"></i> Doctor<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="Add-doctor.php">Add Doctor</a>
                            </li>
                            <li>
                                <a href="view-doctor.php">View All Doctor</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-sitemap"></i> Nurse<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="add-nurse.php">Add Nurse</a>
                            </li>
                            <li>
                                <a href="view-nurse.php">View All Nurse</a>
                            </li>
                        </ul>
                    </li>

                    <li>
                        <a href="#"><i class="fa fa-sitemap"></i>Pharmacy<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="add-pharmacy.php">Register Pharmacy employee</a>
                            </li>
                            <li>
                                <a href="view-pharmacy.php">View Pharmacy details</a>
                            </li>
                        </ul>
                    </li>

                    <li>
                        <a href="#"><i class="fa fa-sitemap"></i>Receptionist<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="add-receptionist.php">Add reception member</a>
                            </li>
                            <li>
                                <a href="view-reception.php">View all member</a>
                            </li>
                        </ul>
                    </li>

                    <li>
                        <a href="#"><i class="fa fa-sitemap"></i>Account<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="add-account.php">Add Accountant</a>
                            </li>
                            <li>
                                <a href="view-account.php">View Accountant</a>
                            </li>
                        </ul>
                    </li>

                    <li>
                        <a href="#"><i class="fa fa-sitemap"></i>Laboratory<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="add-lab.php">Add laboratory doctor</a>
                            </li>
                            <li>
                                <a href="view-account.php ">View all lab doctor</a>
                            </li>
                        </ul>
                    </li>

                    <li>
                        <a href="#"><i class="fa fa-sitemap"></i> Manage Schedule<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            
                                    <li>
                                        <a href="timetable.php">Add Schedule </a>
                                    </li>
                                    <li>
                                        <a href="view-timetable.php">view Schedule </a>
            
                                    </li>
                                    </ul>
                                </li>
                    
                </ul>

            </div>

        </nav>
        <!-- /. NAV SIDE  -->

        <div id="page-wrapper">
            <div class="header">
                <h1 class="page-header">
                    Admin Dashboard
                </h1>
                <ol class="breadcrumb">
                    <li><a href="#">Home</a></li>
                </ol>

            </div>

            <!-- /. ROW  -->
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12 text-center">
                       
                    <h1 class="heading1">Welcome to Admin Dashboard Of Hospital Management System</h1>
                        <h3 class="heading2">Introduction.</h3>
                        <p class="check">A hospital management system (HMS) is a computer or web based system that facilitates managing the functioning of the hospital or any medical set up. This system or software will help in making the whole functioning paperless.
                            It integrates all the information regarding patients, doctors, staff, hospital administrative details etc. into one software. It has sections for various professionals that make up a hospital.</p>
                        <p class="check">The health system is one of essential socio-economic activities; therefore, it requires rational and effective management. For this, it is necessary to have a tool that allows adequate control of the information generated in health
                            institutions. Hospitals, as the main actors of the health system, generate an essential volume of information, but in most cases, it is dispersed or not available in the necessary time and manner.
                        </p>
                        <p class="check"> In recent years, health information systems have helped improve the quality of life of people in all sectors of our society, so it is inevitable to adhere to this dizzying technological career. Currently, clinical and administrative
                            management of hospitals and health centers is possible through a single platform, with the support of cutting-edge technology, developed to optimize the processes that allow the operation of organizations dedicated to treating
                            patients in any branch of the medicine.
                        </p>
                        <p class="check"> Hospital management systems allows us the ability to optimize and digitize all the processes within the institution, which will help to improve customer service, reduce process costs, streamline the search of medical records, bills,
                            patients, doctors, etc.
                        </p>
                        <p class="check"> Thus, having a database of each module implemented. A hospital management system is a web system developed for companies that wish to manage their processes, implementing modules for each of the required areas. It is essential
                            to mention that the information is controlled by trained personnel.

                        </p>
                        <p class="check"> Computer technology is only a tool that allows us to perfect the inveterate use of paper records (notebooks, index cards, diaries, bibliographies, record books), or more recently, cassettes or video cassettes. A PC only collects
                            and processes data; it is the individual that acquires information.
                        </p>

                        <p class="check">In the financial-accounting area, the hospital management system must unify all the departments in a single source of information, so that the accounting processes are faster, the information exports are automatic, and the non-conformities
                            are reduced, strengthening the control of billing and payment flows, decreasing the default rates and the loss of income due to accounting errors. In the clinical area, it is essential that the hospital management system controls
                            all patient records, from entry into the health service to discharge, thus ensuring information that can generate studies and statistical reports of endemic processes, specialties most requested, indicative of epidemic, etc.
                            It is essential to mention that the adoption of a Patient Electronic Clinical Record integrated into the hospital management system allows the safe registration of medical procedures, containment of expenses, detailed evaluation
                            of information, and, mainly, improves the quality of patient care. In the operational department, it is necessary that the hospital management system control the scheduling of online medical appointments to reduce ranks and
                            improve face-to-face care, in addition to prioritizing urgent and emergency care according to the degree of complexity and risk to health. The system must also reduce the bureaucratic flow during the patient care processes
                            to allow shorter time in the hospital and increase the level of satisfaction.</p>

                    </div>

                </div>

            </div>
















            <div id="page-inner">
                <footer style="text-align: center;">
                    <p>All right reserved: <a href="#">Bahroz Javed</a></p>


                </footer>
            </div>
        </div>
    </div>
    <script src="assets/js/jquery-1.10.2.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/jquery.metisMenu.js"></script>
    <script src=" assets/js/custom-scripts.js "></script>



</body>

</html>