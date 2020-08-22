<?php
session_start();

// initializing variables
$username = "";
$email    = "";
$errors = array(); 

// connect to the database
$db = mysqli_connect('localhost', 'root', '', 'hms');








// // REGISTER USER
if (isset($_POST['reg_user'])) {
  // receive all input values from the form
  $username = mysqli_real_escape_string($db, $_POST['username']);
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
  $mobile = (isset($_POST['mobile']) ? $_POST['mobile'] : '');
  $password_2 = mysqli_real_escape_string($db, $_POST['password_2']);

  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array
  if (empty($username)) { array_push($errors, "Username is required"); }
 
  if (empty($email)) { array_push($errors, "Email is required"); }
  if (empty($password_1)) { array_push($errors, "Password is required"); }
  if (empty($mobile)) { array_push($errors, "mobile is required"); }
  if ($password_1 != $password_2) {
	array_push($errors, "The two passwords do not match");
  }

  // first check the database to make sure 
  // a user does not already exist with the same username and/or email
  $user_check_query = "SELECT * FROM registration WHERE username='$username' OR email='$email' LIMIT 1";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);
  
  if ($user) { // if user exists
    if ($user['username'] === $username) {
      array_push($errors, "Username already exists");
    }

    if ($user['email'] === $email) {
      array_push($errors, "email already exists");
    }
  }

  // Finally, register user if there are no errors in the form
  if (count($errors) == 0) {
  	$password = md5($password_1);//encrypt the password before saving in the database

  	$query = "INSERT INTO registration (username, email,password,mobile,type) 
  			  VALUES('$username', '$email', '$password', '$mobile','user')";
    $query_run = mysqli_query($db, $query); 
    $_SESSION['status']="User Signed Up successfully";
      
      $_SESSION['status_code']="success";
    
      header('location: Response.php');
  
  }
  else{	$_SESSION['status'] = "You are not Successfully Sign Up";
  	$_SESSION['status_code'] = "error";
  	}
  
}

// ... 
// ... 
// // REGISTER comment
if (isset($_POST['reg_comment'])) {
  // receive all input values from the form
  $fname = mysqli_real_escape_string($db, $_POST['fname']);
  $lname = mysqli_real_escape_string($db, $_POST['lname']);
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $subject = mysqli_real_escape_string($db, $_POST['subject']);
  $comment = mysqli_real_escape_string($db, $_POST['comment']);
 
  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array
  if (empty($fname)) { array_push($errors, "Username is required"); }
  if (empty($lname)) { array_push($errors, "Password is required"); }
  if (empty($subject)) { array_push($errors, "Password is required"); }
  
  if (empty($email)) { array_push($errors, "Email is required"); }
  if (empty($comment)) { array_push($errors, "Password is required"); }
  if (count($errors) == 0) {
  
  	$query = "INSERT INTO comment (firstname, lastname,email,subject,comment) 
  			  VALUES('$fname','$lname', '$email', '$subject', '$comment')";
    $query_run = mysqli_query($db, $query); 
    $_SESSION['status']="User Signed Up successfully";
      
      $_SESSION['status_code']="success";
      array_push($errors, "Congratulation");
      array_push($errors, "Your response successfully sent");
      }  
      else{	$_SESSION['status'] = "You are not Successfully Sign Up";
        $_SESSION['status_code'] = "error";
        array_push($errors, "response not sent correctly");
       
        
      }
  }
  
  


// ... 
// ... 

// LOGIN admin
if (isset($_POST['login_admin'])) {
    $username = mysqli_real_escape_string($db, $_POST['username']);
    $password = mysqli_real_escape_string($db, $_POST['password']);
  
    if (empty($username)) {
        array_push($errors, "Username is required");
    }
    if (empty($password)) {
        array_push($errors, "Password is required");
    }
  
    if (count($errors) == 0) {
        $password = md5($password);
        
        $query = "SELECT * FROM admin WHERE username='$username' AND password='$password'";
        $results = mysqli_query($db, $query);
        if (mysqli_num_rows($results) == 1) {
          $_SESSION['username'] = $username;
          $_SESSION['success'] = "You are now logged in";
          header('location: admin-dashboard.php');
        }else {
            array_push($errors, "Wrong username/password combination");
        }
    }
  }  

// LOGIN user
if (isset($_POST['login_user'])) {
    $username = mysqli_real_escape_string($db, $_POST['username']);
    $password = mysqli_real_escape_string($db, $_POST['password']);
  
    if (empty($username)) {
        array_push($errors, "Username is required");
    }
    if (empty($password)) {
        array_push($errors, "Password is required");
    }
  
    if (count($errors) == 0) {
        $password = md5($password);
        
       $query = " SELECT * FROM registration WHERE username='$username' AND password='$password'";
        $results = mysqli_query($db, $query);
        if (mysqli_num_rows($results) == 1) {
          while($result=mysqli_fetch_array($results)){
            if($result['type'] == 'user'){
              $_SESSION['username'] = $username;
              $_SESSION['success'] = "You are now logged in";
              header('location: user/user-dashboard.php');
                
            }
            else if($result['type'] == 'doctor'){
              $_SESSION['username'] = $username;
              $_SESSION['success'] = "You are now logged in";
              header('location: doctor/doctor-dashboard.php');
                
            }
            // else if($result['type'] == 'nurse'){
            //   $_SESSION['username'] = $username;
            //   $_SESSION['success'] = "You are now logged in";
            //   header('location: nurse/user-dashboard.html');
                
            // }
            else if($result['type'] == 'pharmacy'){
              $_SESSION['username'] = $username;
              $_SESSION['success'] = "You are now logged in";
              header('location: pharmacy/pharmacy-dashboard.php');
                
            }
            // else if($result['type'] == 'reception'){
            //   $_SESSION['username'] = $username;
            //   $_SESSION['success'] = "You are now logged in";
            //   header('location: reception/user-dashboard.html');
                
            // }
            // else if($result['type'] == 'account'){
            //   $_SESSION['username'] = $username;
            //   $_SESSION['success'] = "You are now logged in";
            //   header('location: account/user-dashboard.html');
                
            // }
            // else if($result['type'] == 'laboratory'){
            //   $_SESSION['username'] = $username;
            //   $_SESSION['success'] = "You are now logged in";
            //   header('location: laboratory/user-dashboard.html');
                
            // }
          }

        }else {
            array_push($errors, "Wrong username/password combination");
        }
    }
  }
//forget password
  $select = "select * from registration";
  $query =  mysqli_query($db, $select);
  $data = mysqli_fetch_assoc($query);
  $uname= $data['username'];
   
  if (isset($_POST['save'])) {
  
  // $select = "select * from registration";
  // $query =  mysqli_query($db, $select);
  // $data = mysqli_fetch_assoc($query);
  // $uname= $data['username'];
$name =  $_POST['username'];
$new = md5($_POST['new']);
$confirm = md5( $_POST['confirm']);
if ($uname==$name){
if($new==$confirm){
$update="UPDATE registration SET password='$new'WHERE username='$name'";
$query1 =  mysqli_query($db, $update);
if($query1){
  array_push($errors, "YOUR PASSWORD CHANGE SUCCESSFULLY");
}

}
else{ array_push($errors, "your both password donot match");
}
}
else{
  array_push($errors, "Username donot match");
   
}
}

// // REGISTER admin
if (isset($_POST['reg_admin'])) {
  // receive all input values from the form
  $username = mysqli_real_escape_string($db, $_POST['username']);
  $password = mysqli_real_escape_string($db, $_POST['password']);
  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array
  if (empty($username)) { array_push($errors, "Username is required"); }
  if (empty($password)) { array_push($errors, "Password is required"); }

  // first check the database to make sure 
  // a user does not already exist with the same username and/or email
  $user_check_query = "SELECT * FROM admin WHERE username='$username'LIMIT 1";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);
  
  if ($user) { // if user exists
    if ($user['username'] === $username) {
      array_push($errors, "Username already exists");
    }
  }

  // Finally, register user if there are no errors in the form
  if (count($errors) == 0) {
  	$password1 = md5($password);//encrypt the password before saving in the database

  	$query = "INSERT INTO admin (username, password) 
  			  VALUES('$username', '$password1')";
    $query_run = mysqli_query($db, $query); 
    $_SESSION['status']="User Signed Up successfully";
      
      $_SESSION['status_code']="success";
      array_push($errors, "Username Successfully added");
    
  
  }
  else{	$_SESSION['status'] = "You are not Successfully Sign Up";
  	$_SESSION['status_code'] = "error";
  	}
  
}

//add doctor
if (isset($_POST['reg_doctor'])) {
  // receive all input values from the form
  $username = mysqli_real_escape_string($db, $_POST['username']);
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
  $mobile = (isset($_POST['mobile']) ? $_POST['mobile'] : '');
  $password_2 = mysqli_real_escape_string($db, $_POST['password_2']);

  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array
  if (empty($username)) { array_push($errors, "Username is required"); }
 
  if (empty($email)) { array_push($errors, "Email is required"); }
  if (empty($password_1)) { array_push($errors, "Password is required"); }
  if (empty($mobile)) { array_push($errors, "mobile is required"); }
  if ($password_1 != $password_2) {
	array_push($errors, "The two passwords do not match");
  }

  // first check the database to make sure 
  // a user does not already exist with the same username and/or email
  $user_check_query = "SELECT * FROM registration WHERE username='$username' OR email='$email' LIMIT 1";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);
  
  if ($user) { // if user exists
    if ($user['username'] === $username) {
      array_push($errors, "Username already exists");
    }

    if ($user['email'] === $email) {
      array_push($errors, "email already exists");
    }
  }

  // Finally, register user if there are no errors in the form
  if (count($errors) == 0) {
  	$password = md5($password_1);//encrypt the password before saving in the database

  	$query = "INSERT INTO registration (username, email,password,mobile,type,department) 
  			  VALUES('$username', '$email', '$password', '$mobile','doctor',1)";
    $query_run = mysqli_query($db, $query); 
    $_SESSION['status']="User Signed Up successfully";
      
      $_SESSION['status_code']="success";
    
      array_push($errors, "Successfully registered");
  
  }
  else{	$_SESSION['status'] = "You are not Successfully Sign Up";
  	$_SESSION['status_code'] = "error";
  	}
  
}

//add nurse

if (isset($_POST['reg_nurse'])) {
  // receive all input values from the form
  $username = mysqli_real_escape_string($db, $_POST['username']);
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
  $mobile = (isset($_POST['mobile']) ? $_POST['mobile'] : '');
  $password_2 = mysqli_real_escape_string($db, $_POST['password_2']);

  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array
  if (empty($username)) { array_push($errors, "Username is required"); }
 
  if (empty($email)) { array_push($errors, "Email is required"); }
  if (empty($password_1)) { array_push($errors, "Password is required"); }
  if (empty($mobile)) { array_push($errors, "mobile is required"); }
  if ($password_1 != $password_2) {
	array_push($errors, "The two passwords do not match");
  }

  // first check the database to make sure 
  // a user does not already exist with the same username and/or email
  $user_check_query = "SELECT * FROM registration WHERE username='$username' OR email='$email' LIMIT 1";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);
  
  if ($user) { // if user exists
    if ($user['username'] === $username) {
      array_push($errors, "Username already exists");
    }

    if ($user['email'] === $email) {
      array_push($errors, "email already exists");
    }
  }

  // Finally, register user if there are no errors in the form
  if (count($errors) == 0) {
  	$password = md5($password_1);//encrypt the password before saving in the database

  	$query = "INSERT INTO registration (username, email,password,mobile,type,department) 
  			  VALUES('$username', '$email', '$password', '$mobile','nurse',2)";
    $query_run = mysqli_query($db, $query); 
    $_SESSION['status']="User Signed Up successfully";
      
      $_SESSION['status_code']="success";
      array_push($errors, "Successfully registered");
  
  }
  else{	$_SESSION['status'] = "You are not Successfully Sign Up";
  	$_SESSION['status_code'] = "error";
  	}
  
}
//add pharmacy

if (isset($_POST['reg_pharmacy'])) {
  // receive all input values from the form
  $username = mysqli_real_escape_string($db, $_POST['username']);
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
  $mobile = (isset($_POST['mobile']) ? $_POST['mobile'] : '');
  $password_2 = mysqli_real_escape_string($db, $_POST['password_2']);

  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array
  if (empty($username)) { array_push($errors, "Username is required"); }
 
  if (empty($email)) { array_push($errors, "Email is required"); }
  if (empty($password_1)) { array_push($errors, "Password is required"); }
  if (empty($mobile)) { array_push($errors, "mobile is required"); }
  if ($password_1 != $password_2) {
	array_push($errors, "The two passwords do not match");
  }

  // first check the database to make sure 
  // a user does not already exist with the same username and/or email
  $user_check_query = "SELECT * FROM registration WHERE username='$username' OR email='$email' LIMIT 1";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);
  
  if ($user) { // if user exists
    if ($user['username'] === $username) {
      array_push($errors, "Username already exists");
    }

    if ($user['email'] === $email) {
      array_push($errors, "email already exists");
    }
  }

  // Finally, register user if there are no errors in the form
  if (count($errors) == 0) {
  	$password = md5($password_1);//encrypt the password before saving in the database

  	$query = "INSERT INTO registration (username, email,password,mobile,type) 
  			  VALUES('$username', '$email', '$password', '$mobile','pharmacy')";
    $query_run = mysqli_query($db, $query); 
    $_SESSION['status']="User Signed Up successfully";
      
      $_SESSION['status_code']="success";
      array_push($errors, "Successfully registered");
  
  }
  else{	$_SESSION['status'] = "You are not Successfully Sign Up";
  	$_SESSION['status_code'] = "error";
  	}
  
}
//add receptionist

if (isset($_POST['reg_rec'])) {
  // receive all input values from the form
  $username = mysqli_real_escape_string($db, $_POST['username']);
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
  $mobile = (isset($_POST['mobile']) ? $_POST['mobile'] : '');
  $password_2 = mysqli_real_escape_string($db, $_POST['password_2']);

  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array
  if (empty($username)) { array_push($errors, "Username is required"); }
 
  if (empty($email)) { array_push($errors, "Email is required"); }
  if (empty($password_1)) { array_push($errors, "Password is required"); }
  if (empty($mobile)) { array_push($errors, "mobile is required"); }
  if ($password_1 != $password_2) {
	array_push($errors, "The two passwords do not match");
  }

  // first check the database to make sure 
  // a user does not already exist with the same username and/or email
  $user_check_query = "SELECT * FROM registration WHERE username='$username' OR email='$email' LIMIT 1";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);
  
  if ($user) { // if user exists
    if ($user['username'] === $username) {
      array_push($errors, "Username already exists");
    }

    if ($user['email'] === $email) {
      array_push($errors, "email already exists");
    }
  }

  // Finally, register user if there are no errors in the form
  if (count($errors) == 0) {
  	$password = md5($password_1);//encrypt the password before saving in the database

  	$query = "INSERT INTO registration (username, email,password,mobile,type,department) 
  			  VALUES('$username', '$email', '$password', '$mobile','reception',3)";
    $query_run = mysqli_query($db, $query); 
    $_SESSION['status']="User Signed Up successfully";
      
      $_SESSION['status_code']="success";
      array_push($errors, "Successfully registered");
  
  }
  else{	$_SESSION['status'] = "You are not Successfully Sign Up";
  	$_SESSION['status_code'] = "error";
  	}
  
}

//Add accountant

if (isset($_POST['reg_acc'])) {
  // receive all input values from the form
  $username = mysqli_real_escape_string($db, $_POST['username']);
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
  $mobile = (isset($_POST['mobile']) ? $_POST['mobile'] : '');
  $password_2 = mysqli_real_escape_string($db, $_POST['password_2']);

  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array
  if (empty($username)) { array_push($errors, "Username is required"); }
 
  if (empty($email)) { array_push($errors, "Email is required"); }
  if (empty($password_1)) { array_push($errors, "Password is required"); }
  if (empty($mobile)) { array_push($errors, "mobile is required"); }
  if ($password_1 != $password_2) {
	array_push($errors, "The two passwords do not match");
  }

  // first check the database to make sure 
  // a user does not already exist with the same username and/or email
  $user_check_query = "SELECT * FROM registration WHERE username='$username' OR email='$email' LIMIT 1";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);
  
  if ($user) { // if user exists
    if ($user['username'] === $username) {
      array_push($errors, "Username already exists");
    }

    if ($user['email'] === $email) {
      array_push($errors, "email already exists");
    }
  }

  // Finally, register user if there are no errors in the form
  if (count($errors) == 0) {
  	$password = md5($password_1);//encrypt the password before saving in the database

  	$query = "INSERT INTO registration (username, email,password,mobile,type,department) 
  			  VALUES('$username', '$email', '$password', '$mobile','account',5)";
    $query_run = mysqli_query($db, $query); 
    $_SESSION['status']="User Signed Up successfully";
      
      $_SESSION['status_code']="success";
      array_push($errors, "Successfully registered");
  
  }
  else{	$_SESSION['status'] = "You are not Successfully Sign Up";
  	$_SESSION['status_code'] = "error";
  	}
  
}
//Add Laboratory

if (isset($_POST['reg_lab'])) {
  // receive all input values from the form
  $username = mysqli_real_escape_string($db, $_POST['username']);
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
  $mobile = (isset($_POST['mobile']) ? $_POST['mobile'] : '');
  $password_2 = mysqli_real_escape_string($db, $_POST['password_2']);

  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array
  if (empty($username)) { array_push($errors, "Username is required"); }
 
  if (empty($email)) { array_push($errors, "Email is required"); }
  if (empty($password_1)) { array_push($errors, "Password is required"); }
  if (empty($mobile)) { array_push($errors, "mobile is required"); }
  if ($password_1 != $password_2) {
	array_push($errors, "The two passwords do not match");
  }

  // first check the database to make sure 
  // a user does not already exist with the same username and/or email
  $user_check_query = "SELECT * FROM registration WHERE username='$username' OR email='$email' LIMIT 1";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);
  
  if ($user) { // if user exists
    if ($user['username'] === $username) {
      array_push($errors, "Username already exists");
    }

    if ($user['email'] === $email) {
      array_push($errors, "email already exists");
    }
  }

  // Finally, register user if there are no errors in the form
  if (count($errors) == 0) {
  	$password = md5($password_1);//encrypt the password before saving in the database

  	$query = "INSERT INTO registration (username, email,password,mobile,type,department) 
  			  VALUES('$username', '$email', '$password', '$mobile','laboratory',4)";
    $query_run = mysqli_query($db, $query); 
    $_SESSION['status']="User Signed Up successfully";
      
      $_SESSION['status_code']="success";
      array_push($errors, "Successfully registered");
  
  }
  else{	$_SESSION['status'] = "You are not Successfully Sign Up";
  	$_SESSION['status_code'] = "error";
  	}
  
}

//Add Schedule

if (isset($_POST['reg_time'])) {
  // receive all input values from the form
  $depart = mysqli_real_escape_string($db, $_POST['depart']);
  $username = mysqli_real_escape_string($db, $_POST['username']);
  $day = mysqli_real_escape_string($db, $_POST['day']);
  $room = mysqli_real_escape_string($db, $_POST['room']);
  $date = mysqli_real_escape_string($db, $_POST['date']);
  $start = mysqli_real_escape_string($db, $_POST['start']);
  $end = mysqli_real_escape_string($db, $_POST['end']);

  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array
  if (empty($username)) { array_push($errors, "Username is required"); }
  if (empty($depart)) { array_push($errors, "department is required"); }
  if (empty($day)) { array_push($errors, "day is required"); }
  if (empty($date)) { array_push($errors, "date is required"); }
  if (empty($room)) { array_push($errors, "room is required"); }
  if (empty($start)) { array_push($errors, "Start shift time is required"); }
  if (empty($end)) { array_push($errors, "End shift time is required"); }
  if ($start == $end) {
	array_push($errors, "The same time is not allowed");
  }

  // first check the database to make sure 
  // a user does not already exist with the same username timetable at the same day
  $user_check_query = "SELECT * FROM timetable WHERE username='$username' AND type='$depart'AND date='$date'AND day='$day' LIMIT 1";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);
  
  if ($user) { // if user exists
    if ($user['username'] === $username) {
      array_push($errors, "Username already exists");
    }

    if ($user['type'] === $depart) {
      array_push($errors, "depart already exists");
    }
    
    if ($user['date'] === $date) {
      array_push($errors, "date already exists");
    }
    if ($user['day'] === $day) {
      array_push($errors, "day already exists");
    }
  }

  // Finally, register user if there are no errors in the form
  if (count($errors) == 0) {
  	
  	$query = "INSERT INTO timetable(username,type,day,room,date,start, end) VALUES ('$username', (SELECT (depart_name) FROM department where id ='$depart'), '$day', '$room','$date','$start','$end')";
    $query_run = mysqli_query($db, $query); 
    $_SESSION['status']="User Signed Up successfully";
      
      $_SESSION['status_code']="success";
      array_push($errors, "Timetable Successfully generated");
  
  }
  else{	$_SESSION['status'] = "You are not Successfully Sign Up";
  	$_SESSION['status_code'] = "error";
    array_push($errors, "some error occured while registering");
    
  }
  
}


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
