<?php
session_start();
include_once 'dbconnect.php';
$email = $_SESSION['email'];
$sql ="SELECT c.*,b.* FROM cart c JOIN user_booking b ON(c.user_email=b.reg_email) WHERE reg_email='$email'";
$qry=mysqli_query($conn,$sql);
	while($row=mysqli_fetch_array($qry)){
		$id=$row['id'];
        $Category=$row['Category Name'];
		$Price=$row['Price'];
        $PRESCRIPTION=$row['PRESCRIPTION'];
		$qty=$row['qty'];
        $total_Price=$row['total_Price'];
		$user_email=$row['user_email'];
        $fname =$row['fname'];
		$last_name=$row['last_name'];
        $Address=$row['Address'];
		$appartment=$row['appartment'];
        $State=$row['State'];
		$Postal=$row['Postal / Zip'];
        $Email_Address=$row['Email Address'];
		$Phone=$row['Phone'];
        $Order_Notes=$row['Order Notes'];
        $reg_email=$row['reg_email'];
		$order_id = $row['order_id'];
		$sql2 = "INSERT INTO `all_booking`(`pid`, `Category Name`, `Price`, `PRESCRIPTION`, `qty`, `total_Price`, 
		`user_email`, `fname`, `last_name`, `Address`, `appartment`, `State`,
		`Postal / Zip`, `Email Address`, `Phone`, `Order Notes`, `reg_email`,`order_id`) 
		VALUES ('$id','$Category','$Price','$PRESCRIPTION','$qty','$total_Price','$user_email','$fname','$last_name','$Address','$appartment','$State','$Postal',' $Email_Address',
		'$Phone','$Order_Notes',' $reg_email','$order_id')";
		if(mysqli_query($conn,$sql2)){
			
			header('location:thanks.php');
		}
		else{
			header('location:checkout.php');
		}

	
	}
?>




</body>
</html>