<?php
session_start();
include_once 'dbconnect.php';
$Name = $_POST['Name'];
$Password = $_POST['Password'];
$cnf_Password = $_POST['cnf_Password'];
$Email = $_POST['Email'];
$Contect = $_POST['Contect'];
$sql ="INSERT INTO `user`( `name`, `contact`, `email`, `password`,`Confirm Password:`) VALUES ('$Name','$Contect','$Email','$Password','$cnf_Password')";

 if(mysqli_query($conn,$sql)){
	 	echo 'y'; 
 }
 else{
	 	 	echo 'n'; 
 }

?>