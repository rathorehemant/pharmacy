<?php
session_start();
include_once 'dbconnect.php';
date_default_timezone_set('Asia/Kolkata');
$date = date('d-m-Y:H:i');
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$email = $_POST['email'];
$contact = $_POST['contact'];
$select1 = $_POST['select1'];
$message = $_POST['message'];




$sql = "INSERT INTO `user_response`( `first_name`, `last_name`, `email`, `subject`, `massege`, `response_date`, `contact`) VALUES ('$fname','$lname','$email','$select1','$message ','$date','$contact')";
 if( mysqli_query($conn,$sql)){
 echo 'y';
	 
 }else{
	 echo 'n';
 }

?>
