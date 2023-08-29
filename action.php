<?php
session_start();
  include_once 'dbconnect.php';
 

    if(isset($_POST['id'])){
	 $id = $_POST['id'];
	 $pimage = $_POST['pimage'];
	 $pname = $_POST['pname'];
	 $pprice =$_POST['pprice'];
	  $puser =$_POST['puser'];
	  

	 $qty=1;
	 $rs = mysqli_query($conn,"SELECT * FROM `cart` WHERE user_email = '$puser' AND id ='$id'");
	 if(mysqli_num_rows($rs)>0){
		 $row = mysqli_fetch_assoc($rs);
		 $pid = $row['id'];
		 echo '<div class="alert alert-danger" role="alert">
  <strong>SORRY Your Item "'.$pname.'"  already Add in Cart ;</strong> 
</div>';
		 }
		 else{
      mysqli_query($conn,"INSERT INTO `cart`(`id`, `Category Name`, `Price`, `PRESCRIPTION`, `qty`, `total_Price`,`user_email`) VALUES ('$id','$pname','$pprice',' $pimage','$qty','$pprice','$puser')");
		
		 echo '<div class="alert alert-success" role="alert">
  <strong>CONGRATS Your Item "'.$pname.'" Add in Cart Succesfully;</strong> 
</div>';
		 }
	 }
	
	if(isset($_GET['cartItem']) && isset($_GET['cartItem']) == 'cart_item'){
	 $puse =$_SESSION['email'];

		$stmt =$conn->prepare("SELECT * FROM `cart` WHERE user_email = '$puse'");	
		$stmt->execute();
		$stmt->store_result();
		$row =$stmt->num_rows;
			 echo $row;
	 }
	  if(isset($_GET['remove'])){
	$id = $_GET['remove'];
	$sql="DELETE  FROM `cart` WHERE id = '$id'";
       $result = mysqli_query($conn,$sql);
	   header('location:cart.php');
	
}

if(isset($_POST['qty'])){
	$pid = $_POST['pid'];
	$pprice =  $_POST['pprice'];
	$qty = $_POST['qty'];
	$tprice = $qty*$pprice;
	$sql = "UPDATE `cart` SET `qty`='$qty',`total_Price`='$tprice' WHERE id = '$pid'";
	$result = mysqli_query($conn,$sql);
	}
	

?>