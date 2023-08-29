<?php
session_start();
include_once 'dbconnect.php';
$order = rand();
$order2 = rand();
$order_id = $order.$order2;
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$address = $_POST['address'];
$app = $_POST['app'];
$state = $_POST['state'];
$postal_zip= $_POST['postal_zip'];
$email_address = $_POST['email_address'];
$phone = $_POST['phone'];
$notes = $_POST['notes'];
$user = $_SESSION['email'];



$sql = "INSERT INTO `user_booking`( `fname`, `last_name`, `Address`,
 `appartment`, `State`, `Postal / Zip`, `Email Address`, `Phone`,
 `Order Notes`,`reg_email`,`order_id` ) VALUES (
 '$fname','$lname','$address','$app','$state',
 '$postal_zip','$email_address','$phone','$notes','$user','$order_id')";
 if( mysqli_query($conn,$sql)){
 echo 'y';
	 
 }else{
	 echo 'n';
 }

?>
