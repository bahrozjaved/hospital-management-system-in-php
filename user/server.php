<?php
session_start();

// initializing variables
$username = "";
$email    = "";
$errors = array(); 

  
// connect to the database
$db = mysqli_connect('localhost', 'root', '', 'hms');

//Add appointment

if (isset($_POST['appoint'])) {
  // receive all input values from the form
  $username = mysqli_real_escape_string($db, $_POST['username']);
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $type = mysqli_real_escape_string($db, $_POST['doctor']);
  $day = mysqli_real_escape_string($db, $_POST['day']);
  $date = mysqli_real_escape_string($db, $_POST['date']);
  $time = mysqli_real_escape_string($db, $_POST['time']);
  $reason = mysqli_real_escape_string($db, $_POST['reason']);
  $number = mysqli_real_escape_string($db, $_POST['number']);
  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array
  if (empty($username)) { array_push($errors, "Username is required"); }
  if (empty($email)) { array_push($errors, "Email is required"); }
  if (empty($type)) { array_push($errors, "doctro name is required"); }
  if (empty($day)) { array_push($errors, "day is required"); }
  if (empty($date)) { array_push($errors, "date is required"); }
  if (empty($time)) { array_push($errors, "time is required"); }
  if (empty($reason)) { array_push($errors, "reason is required"); }
  if (empty($number)) { array_push($errors, "number is required"); }

  // Finally, register user if there are no errors in the form
  if (count($errors) == 0){
  	$query = "INSERT INTO appointment( `username`, `email`, `doctor`, `date`, `time`, `reason`, `contact`, `day`)
     VALUES ('$username','$email','$type','$date','$time','$reason','$number','$day')";
    $query_run = mysqli_query($db, $query); 
    $_SESSION['status']="User Signed Up successfully";
      
      $_SESSION['status_code']="success";
      array_push($errors, "Successfully registered");
  
  }
  else{	$_SESSION['status'] = "You are not Successfully Sign Up";
  	$_SESSION['status_code'] = "error";
    array_push($errors, "Successfully not registered some error ocurred" );

  }
}

















  ?>
