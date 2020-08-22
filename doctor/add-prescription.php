<?php include('server.php') ?>
<?php 

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
    <title>Doctor Panel</title>
    <!-- Bootstrap Styles-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FontAwesome Styles-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
    <!-- Morris Chart Styles-->
    <!-- Custom Styles-->
    <link href="assets/css/add.css" rel="stylesheet" />
    <!-- Google Fonts-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="jquery-1.12.0.min.js" type="text/javascript"></script>

    <link rel="stylesheet" href="jquery-ui.min.css">
<link rel="stylesheet" href="jquery.timepicker.css">

</head>

<body>
    <div id="wrapper">
        <nav class="navbar navbar-default top-navbar" role="navigation">
            <div class="navbar-header">
                <a class="navbar-brand" href="admin-dashboard.php"><img src="assets/img/logo.png" alt="not found" width="230px" height="60px"></a>

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
                        <li><a href="#" style="text-decoration: none;color: inherit;"><i class="fa fa-user fa-fw"></i> <?php  if (isset($_SESSION['username'])) : ?>
    	<?php echo $_SESSION['username']; ?> <?php endif ?></a>
                        </li>
                        <li><a href="#"><i class="fa fa-gear fa-fw"></i> Settings</a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="logout.php"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
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
    <a  href="doctor-dashboard.php"><i class="fa fa-dashboard"></i> Home</a>
</li>
<!-- <li>
    <a href="#"><i class="fa fa-desktop"></i> UI Elements</a>
</li> -->
<li>
    <a href="view-appointment.php"><i class="fa fa-sitemap"></i> View All OPD Appointment</a>
</li>

<li>
    <a class="active-menu" href="#"><i class="fa fa-sitemap"></i> Prescription<span class="fa arrow"></span></a>
    <ul class="nav nav-second-level">
        <li>
            <a class="active-menu" href="add-prescription.php">Add Prescription</a>
        </li>
        <li>
            <a href="view-prescription.php">View All Prescription</a>
        </li>
    </ul>
</li>
<li>
    <a href="view-schedule.php"><i class="fa fa-sitemap"></i>View Duty Schedule</a>
</li>

</ul>
            </div>

        </nav>
        <!-- /. NAV SIDE  -->

        <div id="page-wrapper">
            <div class="header">
                <h1 class="page-header">
                    Dotor Dashboard
                </h1>
                <ol class="breadcrumb">


                    <li><a href="#">Prescription</a></li>
                    <li class="active">Add Prescription</li>
                </ol>


            </div>



            <div class="container c1" style="margin-bottom: 120px;">
                <form action="add-prescription.php"method="POST">
                <?php include('errors.php'); ?>  
                    <div class="form-group text-center heading1">
                        <h1>Add Prescription</h1>
                    </div>
                    <div class="form-group">
                        <label for="name"> Name:</label>
                        <input type="text" class="form-control" id="dname"value="<?php echo $username; ?>" placeholder="Enter Nurse Name" name="username">
                    </div>
                    
                    <div class="form-group">
                  <label for="depart">Enter the date :</label>
                       
                        <input class="form-control" name="date"type="text" id="datepicker"placeholder="select the date">   
                </div>
               
                    <div class="form-group">
                        <label for="contact">Contact:</label>
                        <input type="text" class="form-control"   name="contact"placeholder=" Mobile no Prattern: 03010000000"pattern="[0-9]{4}[0-9]{7}" required>
                    </div>
                    
                    <div class="form-group">
                        <label for="age">Age</label>
                        <input type="text" class="form-control"  placeholder="Enter Age" name="age">
                    </div>

                    <div class="form-group">
                        <label >Gender</label>
                        <input type="text" class="form-control"  placeholder="Enter gender" name="gender">
                    </div>
                    <div class="form-group">
                        <label for="prescription">Prescription Detail(Medicine)</label>
                        <input type="text" class="form-control"  placeholder="Enter the medicine Names: eg panadol,paractamol etc" name="medicine">
                   </div> 
                      
       
                    <button type="submit"name="reg_med" class="button">Add Prescription</button>
                </form>
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
    <script src="jquerry.js"></script>
    <script src="jquery-ui.min.js"></script>
<script src="jquery.timepicker.js"></script>    

    <script>
             $("#datepicker").datepicker({changeMonth:true,showOtherMonths:true,minDate: 0});
   
    </script>

</body>

</html>