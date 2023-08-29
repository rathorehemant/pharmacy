<?php
session_start();
include_once 'dbconnect.php';
$name = $_POST['name'];
 $lname =$_POST['lname'];
  $email =$_POST['email'];
   $mo =$_POST['contact'];
  $state= $_POST['state'];
  $city= $_POST['city'];
  $address= $_POST['address'];
  $postal_zip= $_POST['postal_zip'];
  
$sql = "INSERT INTO `order_medicine`(`fname`, `lname`, `email`, `contact`, `state`, `city`, `address`, `postal_zip`) VALUES ('$name','$lname','$email','$mo','$state', '$city', '$address','$postal_zip')";
 if(mysqli_query($conn,$sql)){
 $id = mysqli_insert_id($conn);
	 $_SESSION['id'] = $id;
	 	echo 'y'; 
	

 }
 else{
	 	 	echo 'n'; 
 }
 
?>