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

	<link rel='stylesheet' type='text/css' href='css/style.css' />
	<link rel='stylesheet' type='text/css' href='css/print.css' media="print" />
	<script type='text/javascript' src='js/jquery-1.3.2.min.js'></script>
	<script type='text/javascript' src='js/example.js'></script>



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

    <script src="jquery-1.12.0.min.js" type="text/javascript"></script>

    <link rel="stylesheet" href="css/jquery-ui.min.css">
<link rel="stylesheet" href="css/jquery.timepicker.css">
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
                        <a  href="pharmacy-dashboard.php"><i class="fa fa-dashboard"></i> Home</a>
                    </li>
                    <li>
                        <a  href="view-prescription.php"><i class="fa fa-dashboard"></i> View Prescription</a>
                    </li>
       


                    <li>
                        <a href="#"class="active-menu"><i class="fa fa-sitemap"></i> Bill<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="generate-bill.php"class="active-menu">Bill calculator</a>
                            </li>
                            <li>
                                <a href="add-bill.php">Record Amount Of Bill</a>
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
                    <li class="active">Generate Bill</li>
                </ol>

            </div>

            <div class="container text-center c1" style="margin-bottom: 120px;">
               
           
           <textarea id="header" style="height:30px;">INVOICE</textarea>

<div id="identity">

    <textarea id="address"style="background-color: rgb(237, 237, 237);">Chris Coyier
123 Appleseed Street
Appleville, WI 53719

Phone: (555) 555-5555</textarea>

    
<div style="clear:both"></div>

<div id="customer">

    <textarea id="customer-title" style="background-color: rgb(237, 237, 237);" Name = "username">Widget Corp.
c/o Steve Widget</textarea>

    <table id="meta">
        <tr>
            <td class="meta-head">Invoice #</td>
            <td><textarea style="background-color: rgb(237, 237, 237);" name="ino">000123</textarea></td>
        </tr>
        <tr>

            <td class="meta-head">Date</td>
            <td><textarea style="background-color: rgb(237, 237, 237);" id="date" name="date" >December 15, 2009</textarea></td>
        </tr>
        <tr>
            <td class="meta-head">Amount Due</td>
            <td><div class="due"name ="due">$2175.00</div></td>
        </tr>

    </table>

</div>

<table id="items">

  <tr>
      <th>Item</th>
      <th>Description</th>
      <th>Unit Cost</th>
      <th>Quantity</th>
      <th>Price</th>
  </tr>
  
  <tr class="item-row">
      <td class="item-name"><div class="delete-wpr"><textarea style="background-color: rgb(237, 237, 237);">Web Updates</textarea><a class="delete" href="javascript:;" title="Remove row">X</a></div></td>
      <td class="description"><textarea style="background-color: rgb(237, 237, 237);">Monthly web updates </textarea></td>
      <td><textarea class="cost"style="background-color: rgb(237, 237, 237);">$650.00</textarea></td>
      <td><textarea class="qty"style="background-color: rgb(237, 237, 237);">1</textarea></td>
      <td><span class="price"style="background-color: rgb(237, 237, 237);">$650.00</span></td>
  </tr>
  <tr class="item-row">
      <td class="item-name"><div class="delete-wpr"><textarea style="background-color: rgb(237, 237, 237);">Web Updates</textarea><a class="delete" href="javascript:;" title="Remove row">X</a></div></td>
      <td class="description"><textarea style="background-color: rgb(237, 237, 237);">Monthly web updates </textarea></td>
      <td><textarea class="cost"style="background-color: rgb(237, 237, 237);">$650.00</textarea></td>
      <td><textarea class="qty"style="background-color: rgb(237, 237, 237);">1</textarea></td>
      <td><span class="price"style="background-color: rgb(237, 237, 237);">$650.00</span></td>
  </tr>
  <tr class="item-row">
      <td class="item-name"><div class="delete-wpr"><textarea style="background-color: rgb(237, 237, 237);">Web Updates</textarea><a class="delete" href="javascript:;" title="Remove row">X</a></div></td>
      <td class="description"><textarea style="background-color: rgb(237, 237, 237);">Monthly web</textarea></td>
      <td><textarea class="cost"style="background-color: rgb(237, 237, 237);">$650.00</textarea></td>
      <td><textarea class="qty"style="background-color: rgb(237, 237, 237);">1</textarea></td>
      <td><span class="price"style="background-color: rgb(237, 237, 237);">$650.00</span></td>
  </tr>
  
  <tr class="item-row">
      <td class="item-name"><div class="delete-wpr"><textarea style="background-color: rgb(237, 237, 237);">SSL Renewals</textarea><a class="delete" href="javascript:;" title="Remove row">X</a></div></td>

      <td class="description"><textarea style="background-color: rgb(237, 237, 237);">Yearly renewals of SSL certificates on main domain and several subdomains</textarea></td>
      <td><textarea class="cost" style="background-color: rgb(237, 237, 237);">$75.00</textarea></td>
      <td><textarea class="qty" style="background-color: rgb(237, 237, 237);">3</textarea></td>
      <td><span class="price" style="background-color: rgb(237, 237, 237);">$225.00</span></td>
  </tr>
  
  <tr id="hiderow">
    <td colspan="5"><a id="addrow" href="javascript:;" title="Add a row">Add a row</a></td>
  </tr>
  
  <tr>
      <td colspan="2" class="blank"> </td>
      <td colspan="2" class="total-line">Subtotal</td>
      <td class="total-value"><div id="subtotal">$2175.00</div></td>
  </tr>
  <tr>

      <td colspan="2" class="blank"> </td>
      <td colspan="2" class="total-line">Total</td>
      <td class="total-value"><div id="total" name="total">$2175.00</div></td>
  </tr>
  <tr>
      <td colspan="2" class="blank"> </td>
      <td colspan="2" class="total-line">Amount Paid</td>

      <td class="total-value"><textarea id="paid" name ="paid">$0.00</textarea></td>
  </tr>
  <tr>
      <td colspan="2" class="blank"> </td>
      <td colspan="2" class="total-line balance">Balance Due</td>
      <td class="total-value balance"><div class="due">$2175.00</div></td>
  </tr>

</table>

<div id="terms">
  <h5>Terms</h5>
  <textarea style="background-color: rgb(237, 237, 237);">NET 30 Days. Finance Charge of 1.5% will be made on unpaid balances after 30 days.</textarea>
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

    <script src="js/jquerry.js"></script>


</body>

</html>
















