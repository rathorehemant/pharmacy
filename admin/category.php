
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
	$category=$_POST['category'];
	$description=$_POST['description'];
	$price = $_POST['price'];	
	$Stock = $_POST['Stock'];	
$name = $_FILES['file']['name'];
  $target_dir = "product/";
  $target_file = $target_dir . basename($_FILES["file"]["name"]);

$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
//$sql=mysqli_query($con,"insert into hey(categoryName,categoryDescription) values('$category','$description')");
//$insert = "INSERT INTO `product`( `product_name`, `description`, `price`) VALUES ('$category','$description','$price')";
$insert = "INSERT INTO `product`( `Category Name`, `Description`, `Price`, `PRESCRIPTION`,`Stock`) VALUES ('$category','$description','$price','$name','$Stock')";
 move_uploaded_file($_FILES['file']['tmp_name'],$target_dir.$name);

$row =mysqli_query($con,$insert);
        

if($row){
$_SESSION['msg']="Category Created !!";
}
else{
	echo "problem";
}
}

if(isset($_GET['del']))
		  {
		          mysqli_query($con,"delete from category where id = '".$_GET['id']."'");
                  $_SESSION['delmsg']="Category deleted !!";
		  }

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Admin| Category</title>
	<link type="text/css" href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<link type="text/css" href="bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">
	<link type="text/css" href="css/theme.css" rel="stylesheet">
	<link type="text/css" href="images/icons/css/font-awesome.css" rel="stylesheet">
	<link type="text/css" href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600' rel='stylesheet'>
	<style>

#wrapper
{
 text-align:center;
 margin:0 auto;
 padding:0px;
 width:995px;
}
#output_image
{
 max-width:300px;
}
</style>
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
								<h3>Category</h3>
							</div>
							<div class="module-body">

									<?php if(isset($_POST['submit']))
{?>
									<div class="alert alert-success">
										<button type="button" class="close" data-dismiss="alert">×</button>
									<strong>Well done!</strong>	<?php echo htmlentities($_SESSION['msg']);?><?php echo htmlentities($_SESSION['msg']="");?>
									</div>
<?php } ?>


									<?php if(isset($_GET['del']))
{?>
									<div class="alert alert-error">
										<button type="button" class="close" data-dismiss="alert">×</button>
									<strong>Oh snap!</strong> 	<?php echo htmlentities($_SESSION['delmsg']);?><?php echo htmlentities($_SESSION['delmsg']="");?>
									</div>
<?php } ?>

									<br />

			
    
									
<!--<form class="form-horizontal row-fluid" name="Category" method="post" action="ad_image_upload.php">-->
	<form action="#" method="post" enctype="multipart/form-data" onchange ="preview_image(event)" name="Category"class="form-horizontal row-fluid">
								
<div class="control-group">
<label class="control-label" for="basicinput">Category Name</label>
<div class="controls">
<input type="text" placeholder="Enter category Name"  name="category" class="span8 tip" required>
</div>
</div>


												<div class="control-group">
											<label class="control-label" for="basicinput">Description</label>
											<div class="controls">
												<textarea class="span8" name="description" rows="5" required></textarea>
											</div>
										</div>
										
										<div class="control-group">
											<label class="control-label" for="basicinput">Price</label>
											<div class="controls">
                                          <input type="text" placeholder="Enter Price"  name="price" class="span8 tip" required>
											</div>
										</div>
										<div class="control-group">
											<label class="control-label" for="basicinput">PRESCRIPTION</label>
											<div class="controls"id="wrapper">

                                           <input type='file' name='file' /><br><br>
 
										  	<img id="output_image"/><br><br>

											</div>
										</div>
											<label class="control-label" for="basicinput">In Stock</label>
											<div class="controls">
                                          <input type="text" placeholder="Enter Stock"  name="Stock" class="span8 tip" required>
											</div>
										</div>
    
	
											<div class="control-group">
											<div class="controls">
												<button type="submit" name="submit" class="btn">Create</button>
											</div>
										</div>
									</form>
							</div>
						</div>


	

							
										
										
										
								</table>
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
	<script src="scripts/datatables/jquery.dataTables.js"></script>
	<script>
		$(document).ready(function() {
			$('.datatable-1').dataTable();
			$('.dataTables_paginate').addClass("btn-group datatable-pagination");
			$('.dataTables_paginate > a').wrapInner('<span />');
			$('.dataTables_paginate > a:first-child').append('<i class="icon-chevron-left shaded"></i>');
			$('.dataTables_paginate > a:last-child').append('<i class="icon-chevron-right shaded"></i>');
		} );
		
		function preview_image(event) 
{
 var reader = new FileReader();
 reader.onload = function()
 {
  var output = document.getElementById('output_image');
  output.src = reader.result;
 }
 reader.readAsDataURL(event.target.files[0]);
}
	</script>
</body>
<?php } ?>
