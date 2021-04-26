<?php
include 'connection.php';
session_start();

$date = date("Y/m/d");
$code = uniqid("#");
    $email = $_SESSION['email'];
  

if (isset($_POST['submit'])) {
  $time = $_POST['time'];
    $to = $_SESSION['email'];
  $subject = "Confirmation";
  // Content-Type helps email client to parse file as HTML 
  // therefore retaining styles
  $headers = "MIME-Version: 1.0" . "\r\n";
  $headers = "Content-type:text/html;charset=UTF-8" . "\r\n";
$headers .= 'From: <support@qandtrace.com>' . "\r\n";
  $message = "This is to inform you that your reservation has been confirmed. View the details below to see your unique code.<br/>     Unique Code: ".$code."<br/>     Time: ".$time."<br/>     Date: ".$date."<br/>This unique code is what you'll use to identify and gain access to the stores as long as you show up at the alreay reserved time";
    mail($to, $subject, $message, $headers);
}

  if(isset($_POST['submit']))
{
  $store = $_POST['store'];
    $sql = "INSERT INTO $store (mail, time, date, uniquecode) VALUES ('".$email."','".$_POST["time"]."','".$date."','".$code."')";    
         
    $result = mysqli_query($conn,$sql);
}
 
         header("location: homepage.php");

?>