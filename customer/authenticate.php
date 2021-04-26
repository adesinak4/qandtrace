<?php
   include("connection.php");
   session_start();
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      
      $email = mysqli_real_escape_string($conn,$_POST['email']);
      $mypassword = mysqli_real_escape_string($conn,$_POST['pass']);
      $hash_password = md5($mypassword);
      
      $sql = "SELECT * FROM customer WHERE mail = '$email' and password = '$hash_password'";
      $result = mysqli_query($conn,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      //$active = $row['active']; <===========(this code is not needed)
      
      $count = mysqli_num_rows($result);
      
      // If result matched $myusername and $mypassword, table row must be 1 row
		
      if($count == 1) {
         //session_register("myusername"); <===========(this code is not needed too)
         $_SESSION['email'] = $email;
          $_SESSION['fullname'] = $row["fullname"];
         header("location: homepage.php");
      }else {
          header("location: log%20in.php");
      }
   }
?>