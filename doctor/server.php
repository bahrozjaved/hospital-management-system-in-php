<?php
session_start();

// initializing variables
$username = "";
$email    = "";
$errors = array(); 

  
// connect to the database
$db = mysqli_connect('localhost', 'root', '', 'hms');

//Add appointment

if (isset($_POST['reg_med'])) {
  // receive all input values from the form
  $username = mysqli_real_escape_string($db, $_POST['username']);
  $date = mysqli_real_escape_string($db, $_POST['date']);
  $contact = mysqli_real_escape_string($db, $_POST['contact']);
  $age = mysqli_real_escape_string($db, $_POST['age']);
  $gender = mysqli_real_escape_string($db, $_POST['gender']);
  $medicine = mysqli_real_escape_string($db, $_POST['medicine']);

  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array
  if (empty($username)) { array_push($errors, "Username is required"); }
  if (empty($medicine)) { array_push($errors, "medicine is required"); }
  if (empty($gender)) { array_push($errors, "gender is required"); }
  if (empty($age)) { array_push($errors, "age is required"); }
  if (empty($date)) { array_push($errors, "date is required"); }
  if (empty($contact)) { array_push($errors, "contact is required"); }
  
  // Finally, register user if there are no errors in the form
  if (count($errors) == 0){
  	$query = "INSERT INTO medicine( `username`, `date`, `contact`, `age`, `gender`, `medicine`)
     VALUES ('$username','$date','$contact','$age','$gender','$medicine')";
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
