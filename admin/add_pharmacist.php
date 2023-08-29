
<?php
session_start();
include('include/config.php');
if(strlen($_SESSION['alogin'])==0)
	{	
header('location:index.php');
}
else{
date_default_timezone_set('Asia/Kolkata');// change according timezone
$currentTime = date( 'd-m-Y h:i:s A', time () );


if(isset($_POST['submit']))
{
	$pid =$_POST['pid'];
	$name =$_POST['name'];
	$password = $_POST['password'];
	$email =$_POST['email'];
	$contact =$_POST['contact'];
	$add =$_POST['address'];
	$state =$_POST['state'];
	$sql = "INSERT INTO `pharmacist`(`pid`, `name`, `password`, `email`, `contact`, `address`, `state`) VALUES ('$pid','$name','$password','$email','$contact','$add','$state')";
$qry=mysqli_query($con,$sql);
if($sql){
$_SESSION['msg']="New Pharmacist Add Suceesfully !!";
}
else
{
$_SESSION['msg']=" Error Occur While Add New Data.....Try After Some Time!!";
}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Admin| Change Password</title>
	<link type="text/css" href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<link type="text/css" href="bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">
	<link type="text/css" href="css/theme.css" rel="stylesheet">
	<link type="text/css" href="images/icons/css/font-awesome.css" rel="stylesheet">
	<link type="text/css" href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600' rel='stylesheet'>
	<script type="text/javascript">
function valid()
{
if(document.chngpwd.password.value=="")
{
alert("Current Password Filed is Empty !!");
document.chngpwd.password.focus();
return false;
}
else if(document.chngpwd.newpassword.value=="")
{
alert("New Password Filed is Empty !!");
document.chngpwd.newpassword.focus();
return false;
}
else if(document.chngpwd.confirmpassword.value=="")
{
alert("Confirm Password Filed is Empty !!");
document.chngpwd.confirmpassword.focus();
return false;
}
else if(document.chngpwd.newpassword.value!= document.chngpwd.confirmpassword.value)
{
alert("Password and Confirm Password Field do not match  !!");
document.chngpwd.confirmpassword.focus();
return false;
}
return true;
}
</script>
</head>
<body>
<?php include('include/header.php');?>

	<div class="wrapper">
		<div class="container">
			<div class="row">
<?php include('include/sidebar.php');?>				
			<div class="span9">
					<div class="content">

						<div class="module">
							<div class="module-head">
								<h3>ADD NEW PHARMACIST</h3>
							</div>
							<div class="module-body">

									<?php if(isset($_POST['submit']))
{?>
									<div class="alert alert-success">
										<button type="button" class="close" data-dismiss="alert">×</button>
										<?php echo htmlentities($_SESSION['msg']);?><?php echo htmlentities($_SESSION['msg']="");?>
									</div>
<?php } ?>
									<br />

			<form class="form-horizontal row-fluid" name="chngpwd" method="post" onSubmit="return valid();">
									
<div class="control-group">
<label class="control-label" for="basicinput">PID</label>
<div class="controls">
<input type="text" placeholder="Enter Pharmacist Id"  name="pid" class="span8 tip" required>
</div>
</div>


<div class="control-group">
<label class="control-label" for="basicinput">NAME</label>
<div class="controls">
<input type="text" placeholder="Enter Pharmacist Name"  name="name" class="span8 tip" required>
</div>
</div>

<div class="control-group">
<label class="control-label" for="basicinput">Password</label>
<div class="controls">
<input type="password" placeholder="Enter Pharmacist Password"  name="password" class="span8 tip" required>
</div>
</div>
<div class="control-group">
<label class="control-label" for="basicinput">Email</label>
<div class="controls">
<input type="email" placeholder="Enter Pharmacist Email"  name="email" class="span8 tip" required>
</div>
</div>
<div class="control-group">
<label class="control-label" for="basicinput">Contact</label>
<div class="controls">
<input type="number" placeholder="Enter Pharmacist contact"  name="contact" class="span8 tip" required>
</div>
</div>
<div class="control-group">
<label class="control-label" for="basicinput">Address</label>
<div class="controls">
<input type="text" placeholder="Enter Pharmacist Address"  name="address" class="span8 tip" required>
</div>
</div>
<div class="control-group">
<label class="control-label" for="basicinput">State</label>
<div class="controls">
<input type="text" placeholder="Enter Pharmacist state"  name="state" class="span8 tip" required>
</div>
</div>







										

										<div class="control-group">
											<div class="controls">
												<button type="submit" name="submit" class="btn">Submit</button>
											</div>
										</div>
									</form>
							</div>
						</div>

						
						
					</div><!--/.content-->
				</div><!--/.span9-->
			</div>
		</div><!--/.container-->
	</div><!--/.wrapper-->

<?php include('include/footer.php');?>

	<script src="scripts/jquery-1.9.1.min.js" type="text/javascript"></script>
	<script src="scripts/jquery-ui-1.10.1.custom.min.js" type="text/javascript"></script>
	<script src="bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
	<script src="scripts/flot/jquery.flot.js" type="text/javascript"></script>
</body>
<?php } ?>