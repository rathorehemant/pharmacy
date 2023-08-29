<?php
session_start();
include_once 'dbconnect.php';
$loginmail = $_POST['loginmail'];
$loginPassword = $_POST['loginPassword'];
$sql = "SELECT * FROM `user` WHERE email ='$loginmail'";
	$qry=mysqli_query($conn,$sql);
	while($row=mysqli_fetch_array($qry)){
    $dbmail=$row['email'];
    $dbpass=$row['password'];
	if($loginmail== $dbmail&& $loginPassword==$dbpass){
		echo 'yes';
		$_SESSION['email']=$loginmail;

	}
	else{
		echo 'NO';
	}
	}
?>