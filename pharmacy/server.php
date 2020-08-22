<?php
session_start();

// initializing variables
$username = "";
$email    = "";
$errors = array(); 

  
// connect to the database
$db = mysqli_connect('localhost', 'root', '', 'hms');

//Add appointment

if (isset($_POST['reg_bill'])) {
  // receive all input values from the form
  $username = mysqli_real_escape_string($db, $_POST['username']);
  $date = mysqli_real_escape_string($db, $_POST['date']);
  $invoice = mysqli_real_escape_string($db, $_POST['ino']);
  $due = mysqli_real_escape_string($db, $_POST['due']);
  $total = mysqli_real_escape_string($db, $_POST['total']);
  $paid = mysqli_real_escape_string($db, $_POST['paid']);
  $status= mysqli_real_escape_string($db, $_POST['status']);

  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array
  if (empty($username)) { array_push($errors, "Username is required"); }
  if (empty($date)) { array_push($errors, "Date is required"); }
  if (empty($invoice)) { array_push($errors, "Invoice  id is required"); }
  if (empty($due)) { array_push($errors, "Due ammount is required"); }
  if (empty($total)) { array_push($errors, "Total is required"); }
  if (empty($paid)) { array_push($errors, "PAid ammount is required"); }
  if (empty($status)) { array_push($errors, "Status is required"); }
  
  // Finally, register user if there are no errors in the form
  if (count($errors) == 0){
  	$query = "INSERT INTO bill(`username`, `inv-no`, `date`, `paydue`, `total`, `paid`, `status`) 
    VALUES ('$username','$invoice','$date','$due','$total','$paid','$status')";
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

if (isset($_POST['permit'])) {
  // receive all input values from the form
  $username = mysqli_real_escape_string($db, $_POST['username']);
  $status= mysqli_real_escape_string($db, $_POST['status']);

  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array
  if (empty($username)) { array_push($errors, "Username is required"); }
  if (empty($status)) { array_push($errors, "Status is required"); }
  
  // Finally, register user if there are no errors in the form
  if (count($errors) == 0){
  	$query = "UPDATE bill SET `status`='$status' WHERE username='$username'";
    $query_run = mysqli_query($db, $query); 
    $_SESSION['status']="User Signed Up successfully";
      
      $_SESSION['status_code']="success";
      array_push($errors, "Successfully updated");
    
      $query = "DELETE FROM request WHERE username='$username' ";
      $query_run = mysqli_query($db, $query); 
      
      array_push($errors, "Successfully Deleted from request table");
      
  }
  else{	$_SESSION['status'] = "You are not Successfully Sign Up";
  	$_SESSION['status_code'] = "error";
    array_push($errors, "Successfully not registered some error ocurred" );

  }
}


















  ?>
