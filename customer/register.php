<?php
include 'connection.php';
session_start();

// REGISTER USER
if (isset($_POST['submit'])) {
  // receive all input values from the form
    $fullname = mysqli_real_escape_string($conn, $_POST['fullname']);
  $email = mysqli_real_escape_string($conn, $_POST['email']);
  $password_1 = mysqli_real_escape_string($conn, $_POST['password']);
  $password_2 = mysqli_real_escape_string($conn, $_POST['re_password']);
    $address = mysqli_real_escape_string($conn, $_POST['address']);
    $state = mysqli_real_escape_string($conn, $_POST['state']);
    $tel = mysqli_real_escape_string($conn, $_POST['tel']);

  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array
  if (empty($email)) { array_push($errors, "Email is required"); }
  if (empty($password_1)) { array_push($errors, "Password is required"); }
  if ($password_1 != $password_2) {
	echo "The two passwords do not match";
  }
    else {
  // first check the database to make sure 
  // a user does not already exist with the same username and/or email
  $user_check_query = "SELECT * FROM customer WHERE mail='$email' LIMIT 1";
  $result = mysqli_query($conn, $user_check_query);
  /*$user = mysqli_fetch_assoc($result);*/
    $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
    
    $count = mysqli_num_rows($result);
    
      // Finally, register user if there are no errors in the form
  if ($count == 0) {
  	$password = md5($password_1);//encrypt the password before saving in the database
      $date = date("Y/m/d");
  	$query = "INSERT INTO customer (mail, password, fullname, address, state, tel, date) 
  			  VALUES('$email', '$password', '$fullname', '$address', '$state', '$tel', '$date')";
  	mysqli_query($conn, $query);
  	$_SESSION['email'] = $email;
    $_SESSION['fullname'] = $fullname;
  	$_SESSION['success'] = "You are now logged in";
      header("location: homepage.php");
  }
  
  else {
      echo "Email already exists";
    }
    }

}

?>