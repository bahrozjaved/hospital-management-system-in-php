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
    <title>Pharmacy Panel</title>
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
    <script src="../jquery-1.12.0.min.js" type="text/javascript"></script>

    <link rel="stylesheet" href="../css/jquery-ui.min.css">
<link rel="stylesheet" href="../css/jquery.timepicker.css">

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
                        <a  href="pharmacy-dashboard.php"><i class="fa fa-dashboard"></i> Home</a>
                    </li>
                    <li>
                        <a  href="view-prescription.php"><i class="fa fa-dashboard"></i> View Prescription</a>
                    </li>
       


                    <li>
                        <a href="#"class="active-menu"><i class="fa fa-sitemap"></i> Bill<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="generate-bill.php">Bill calculator</a>
                            </li>
                            <li>
                                <a href="add-bill.php"class="active-menu">Record Amount Of Bill</a>
                            </li>
                            <li>
                                <a href="view-bill.php">View All Bill</a>
                            </li>
                        
                        </ul>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-sitemap"></i> Permission<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="view-member.php">Requested member</a>
                            </li>
                            <li>
                                <a href="clear.php">clearence permission</a>
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
                    Pharmacy Dashboard
                </h1>
                <ol class="breadcrumb">


                    <li><a href="#">Bill</a></li>
                    <li class="active">Add Bill record</li>
                </ol>


            </div>



            <div class="container c1" style="margin-bottom: 120px;">
                <form action="add-bill.php"method="post">
                <?php include('errors.php'); ?>  
                    <div class="form-group text-center heading1">
                        <h1>Add Bill Detail</h1>
                    </div>
                    <div class="form-group">
                        <label for="name">Name:</label>
                        <input type="text" class="form-control" id="dname"value="<?php echo $username; ?>" placeholder="Enter  Name or username" name="username">
                    </div>
                    
                   
                    <div class="form-group">
                        <label for="contact">Invoice No:</label>
                        <input type="text" class="form-control"   name="ino"placeholder=" invoice no" required>
                    </div>
                    <div class="form-group">
                  <label for="depart">Enter the date :</label>
                       
                        <input class="form-control" name="date"type="text" id="datepicker"placeholder="select the date">   
                </div>

                    <div class="form-group">
                        <label for="Password">Total Ammount:</label>
                        <input type="text" class="form-control" id="email" placeholder="Enter total ammount" name="total">
                    </div>
                    <div class="form-group">
                        <label for="depart">Ammount Paid:</label>
                        <input type="text" class="form-control" id="password" placeholder="Enter paid Ammount" name="paid">
                    </div>
                    <div class="form-group">
                        <label for="depart">Due Ammount:</label>
                        <input type="text" class="form-control" id="password" placeholder="Enter paid Ammount" name="due">
                    </div>
                   
                    <div class="form-group">
                  <label for="exampleFormControlSelect1">Status</label>
                        <select class="form-control" id="exampleFormControlSelect1" name="status">
                        <option>Select status</option>
                      
                        <option>Paid</option>
                      <option>Not paid</option>

                   </select>
                </div>
                    <button type="submit"name="reg_bill" class="button">Add bill record</button>
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

    <script src="../js/jquerry.js"></script>
    <script src="../js/jquery-ui.min.js"></script>

<script>        $("#datepicker").datepicker({changeMonth:true,showOtherMonths:true,minDate: 0});

</script>

</body>

</html>





