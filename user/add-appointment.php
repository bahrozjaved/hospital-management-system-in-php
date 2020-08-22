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
                        <li><a href="../login.php?logout='1'"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
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
                        <a  href="user-dashboard.php"><i class="fa fa-dashboard"></i> Home</a>
                    </li>
                    <!-- <li>
                        <a href="#"><i class="fa fa-desktop"></i> UI Elements</a>
                    </li> -->

                    <li>
                        <a class="active-menu"href="add-appointment.php"><i class="fa fa-sitemap"></i> Appointment<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a class="active-menu" href='add-appointment.php'>Add Appointment</a>
                            </li>
                            <li>
                                <a href="view-appointment.php">View All Appointment</a>
                            </li>
                        </ul>
                    </li>
                  
                    <li>
                        <a href="view-prescription.php"><i class="fa fa-sitemap"></i> View Prescription</a>

                    </li>

                    <li>
                        <a href="view-bill.php"><i class="fa fa-qrcode"></i> view Pharmacy bill</a>
                    </li>


                </ul>

            </div>

        </nav>
        
        <!-- /. NAV SIDE  -->

        <div id="page-wrapper">
            <div class="header">
                <h1 class="page-header">
                    User Dashboard
                </h1>
                <ol class="breadcrumb">
                    <li>Appointment</li>
                    <li><a href="#">Add Appointment</a></li>
               
                </ol>

            </div>


            <div class="container c1" style="margin-bottom: 120px;">
                
            <form action="add-appointment.php" method="POST">
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


                        <input type="submit" value="Book Appointment" class="button" name="appoint">
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



</body>

</html>