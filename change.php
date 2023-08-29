<?php
session_start();
include_once 'dbconnect.php';
$user = $_SESSION['email'];
$old_pass = $_POST['old_pass'];
$new_pass = $_POST['new_pass'];
$ret_pass = $_POST['ret_pass'];


$rs = mysqli_query($conn, "SELECT  * FROM user WHERE email='$user' && 	password='$old_pass'");
if(mysqli_num_rows($rs)>0){
	$row = mysqli_fetch_assoc($rs);
		$pass = $row['password'];
		if($old_pass == $pass ){
			mysqli_query($conn, "UPDATE `user` SET `password`='$new_pass',`Confirm Password:`='$ret_pass' WHERE email='$user '");
			echo 'y';
		}else{
			echo 'n';
		}
}else{
	echo 'no';
}

?>
