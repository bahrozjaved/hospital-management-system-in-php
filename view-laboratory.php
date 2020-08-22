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
    <!-- Morris Chart Styles-->
    <!-- Custom Styles-->
    <link href="assets/css/add.css" rel="stylesheet" />
    <!-- Google Fonts-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

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
                        <a href="admin-dashboard.php"><i class="fa fa-dashboard"></i> Home</a>
                    </li>
                    <!-- <li>
                        <a href="#"><i class="fa fa-desktop"></i> UI Elements</a>
                    </li> -->

                    <li>
                        <a  href="#"><i class="fa fa-sitemap"></i> Admin<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="Add-Admin.php">Add Admin</a>
                            </li>
                            <li>
                                <a  href="view-admin.php">View All Admin</a>
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
                                <a  href="view-account.php">View Accountant</a>
                            </li>
                        </ul>
                    </li>

                    <li>
                        <a href="#"class="active-menu"><i class="fa fa-sitemap"></i>Laboratory<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="add-lab.php">Add laboratory doctor</a>
                            </li>
                            <li>
                                <a href="view-laboratory.php"class="active-menu">View all lab doctor</a>
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


                    <li><a href="#">Laboratory</a></li>
                    <li class="active">View All Lab doctor</li>
                </ol>

            </div>
        <div class="container text-center">
<h1 class="heading1" style="padding-bottom:20px;">View All Laboratory</h1>
            <button id="displaydata" class="button"style="margin-bottom:30px;">View All laboratory</button>
    <table class="table table-striped table-bordered text-centre">
    <thead>
    
    <th class="text-center">ID</th>
    <th class="text-center">Username</th>
    <th class="text-center">Email</th>
    <th class="text-center">Mobile</th>
    <th class="text-center">Type</th>
    
   
    </thead>
   <tbody id="response">
   </tbody> 
    
    </table>
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
<script>
$(document).ready(function(){
$('#displaydata').click(function(){
$.ajax({
url:'lab.php',
type:'post',
success:function(responsedata){
$('#response').html(responsedata);
}
});
});
});
</script>


</body>

</html>