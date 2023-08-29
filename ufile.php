<?php
// Include the database configuration file
session_start();
include_once 'dbconnect.php';
$id = $_SESSION['id'];

$files=$_FILES['fileupload'];
$tmp_name=$files['tmp_name'];
$name=$files['name'];
$destination=$name;
		$destination = 'uploads/'.$files;
        move_uploaded_file($tmp_name,$destination);	
	  $UPDATE = "UPDATE `order_medicine` SET `image`='$destination' WHERE id ='$id'";
	 $qry = mysqli_query($conn,$UPDATE);
if($qry){
	 	echo 'y'; 
 }
 else{
	 	 	echo 'n'; 
 }
	 
 	 
	
 


	

?>
   
