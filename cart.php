<?php
include_once 'lcd.php';
if(!isset($_SESSION['email'])){
header('location:index.php');
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <title>Pharma &mdash; Colorlib Template</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link href="https://fonts.googleapis.com/css?family=Rubik:400,700|Crimson+Text:400,400i" rel="stylesheet">
  <link rel="stylesheet" href="fonts/icomoon/style.css">

  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/magnific-popup.css">
  <link rel="stylesheet" href="css/jquery-ui.css">
  <link rel="stylesheet" href="css/owl.carousel.min.css">
  <link rel="stylesheet" href="css/owl.theme.default.min.css">


  <link rel="stylesheet" href="css/aos.css">

  <link rel="stylesheet" href="css/style.css">

</head>

<body>

  <div class="site-wrap">


    <div class="site-navbar py-2">

      <div class="search-wrap">
        <div class="container">
          <a href="#" class="search-close js-search-close"><span class="icon-close2"></span></a>
          <form action="#" method="post">
            <input type="text" class="form-control" placeholder="Search keyword and hit enter...">
          </form>
        </div>
      </div>

      
    </div>

    <div class="bg-light py-3">
      <div class="container">
        <div class="row">
          <div class="col-md-12 mb-0">
            <a href="index.html">Home</a> <span class="mx-2 mb-0">/</span> 
            <strong class="text-black">Cart</strong>
          </div>
        </div>
      </div>
    </div>

    <div class='site-section'>
      <div class='container'>
	    <div class='row mb-5'> 
            <div class='site-blocks-table'>
              <table class='table table-bordered'>
                <thead>
				
				<h1 class="text-primary"> 
				&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				YOUR PRODUCT  </h1>
				
                  <tr>
				  
                    <th class='product-thumbnail'>Image</th>
                    <th class='product-name'>Product</th>
                    <th class='product-price'>Price</th>
                    <th class='product-quantity'>Quantity</th>
                    <th class='product-total'>Total</th>
                    <th class='product-remove'>Remove</th>
                  </tr>
                </thead>
		
                <tbody>
				<?php
				  include_once 'dbconnect.php';

		$email = $_SESSION['email'];
		$sql="SELECT * FROM `cart` WHERE user_email = '$email'";
		$result = mysqli_query($conn,$sql);
         $grand_total = 0;
		while($row = mysqli_fetch_array($result)) {
			$id = $row['id'];
		$image = $row['PRESCRIPTION'];
		$name = $row['Category Name'];
		$price = $row['Price'];
		$total = $row['total_Price'];
		$qty = $row['qty'];
        
		

		?>
                  <tr>
	
				  
				  <input type= "hidden" class = "pid" value = "<?=$id?>">
					
				  
                    <td class="product-thumbnail">
                      <img src =" <?= $image ?>" class="card-img-top" height="200" width="200">

                    </td>
                    <td class="product-name">
                      <h2 class="h5 text-black"><?= $name ?></h2>
                    </td>
                    <td><?= number_format($price,2);?></td>
					<input type="hidden" class="pprice" value="<?= $price ?>">
                    <td>					
                      <div class="input-group mb-3" style="max-width: 120px;">
					  <input type = "number" min = "1" max ="10" class= "form-control itemQty"  value = "<?=$qty?>">
					<!-- <div class="input-group-prepend">
                          <button class="btn btn-outline-primary js-btn-minus itemQty" type="button" value = ""&minus;</button>
                        </div>
                        <input type="text" class="form-control text-center" value="1" placeholder=""
                          aria-label="Example text with button addon" aria-describedby="button-addon1">
                        <div class="input-group-append">
                          <button class="btn btn-outline-primary js-btn-plus itemQty" type="button" value = ""&plus;</button>
                        </div>-->
                          
					
                      </div>
    
                    </td>
                    <td ><?= number_format($total,2);?></td>
                    <td><a href="action.php?remove=<?=$id ?>" class="btn btn-primary height-auto btn-sm" onclick = "return confirm('Are You Sure You Want To Remove?');">X</a></td>
                  </tr>
				 <?php
				 $grand_total += $total;
                	echo $grand_total; 
				 };?>
                </tbody>
              </table>
            </div>
        </div>
	
			
        <div class="row">
          <div class="col-md-6">
            <div class="row mb-5">
              
              <div class="col-md-6">
                <button class="btn btn-outline-primary btn-md btn-block"  onclick = "window.location = 'index.php'">Continue Shopping</button>
              </div>
            </div>
            
              
          </div>
          <div class='col-md-6 pl-5'>
            <div class='row justify-content-end'>
              <div class='col-md-7'>
                <div class='row'>
                  <div class='col-md-12 text-right border-bottom mb-5'>
                    <h3 class='text-black h4 text-uppercase'>Cart Totals</h3>
                  </div>
                </div>
                <div class='row mb-3'>
                  <div class='col-md-6'>
                    <span class='text-black'>Subtotal</span>
                  </div>
                  <div class='col-md-6 text-right'>
                    <strong class='text-black'><?= number_format($grand_total,2);?></strong>
                  </div>
                </div>
                <div class='row mb-5'>
                  <div class='col-md-6'>
                    <span class='text-black'>Total</span>
                  </div>
                  <div class='col-md-6 text-right'>
                    <strong class='text-black'><?= number_format($grand_total,2);?></strong>
                  </div>
                </div>
    
                <div class="row">
                  <div class="col-md-12">
				  <?= ($grand_total > 1) ? "<button class='btn btn-primary btn-lg btn-block' onclick='window.location=\"checkout.php\"'>Proceed To Checkout</button>" : "" ?>

				  
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
     </div>

		 

    <div class="site-section bg-secondary bg-image" style="background-image: url('images/bg_2.jpg');">
      <div class="container">
        <div class="row align-items-stretch">
          <div class="col-lg-6 mb-5 mb-lg-0">
            <a href="#" class="banner-1 h-100 d-flex" style="background-image: url('images/bg_1.jpg');">
              <div class="banner-1-inner align-self-center">
                <h2>Pharma Products</h2>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Molestiae ex ad minus rem odio voluptatem.
                </p>
              </div>
            </a>
          </div>
          <div class="col-lg-6 mb-5 mb-lg-0">
            <a href="#" class="banner-1 h-100 d-flex" style="background-image: url('images/bg_2.jpg');">
              <div class="banner-1-inner ml-auto  align-self-center">
                <h2>Rated by Experts</h2>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Molestiae ex ad minus rem odio voluptatem.
                </p>
              </div>
            </a>
          </div>
        </div>
      </div>
   </div>


    <footer class="site-footer">
      <div class="container">
        <div class="row">
          <div class="col-md-6 col-lg-3 mb-4 mb-lg-0">

            <div class="block-7">
              <h3 class="footer-heading mb-4">About Us</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eius quae reiciendis distinctio voluptates
                sed dolorum excepturi iure eaque, aut unde.</p>
            </div>

          </div>
          <div class="col-lg-3 mx-auto mb-5 mb-lg-0">
            <h3 class="footer-heading mb-4">Quick Links</h3>
            <ul class="list-unstyled">
              <li><a href="#">Supplements</a></li>
              <li><a href="#">Vitamins</a></li>
              <li><a href="#">Diet &amp; Nutrition</a></li>
              <li><a href="#">Tea &amp; Coffee</a></li>
            </ul>
          </div>

          <div class="col-md-6 col-lg-3">
            <div class="block-5 mb-5">
              <h3 class="footer-heading mb-4">Contact Info</h3>
              <ul class="list-unstyled">
                <li class="address">203 Fake St. Mountain View, San Francisco, California, USA</li>
                <li class="phone"><a href="tel://23923929210">+2 392 3929 210</a></li>
                <li class="email">emailaddress@domain.com</li>
              </ul>
            </div>


          </div>
        </div>
        <div class="row pt-5 mt-5 text-center">
          <div class="col-md-12">
            <p>
              <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
              Copyright &copy;
              <script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made
              with <i class="icon-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank"
                class="text-primary">Colorlib</a>
              <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            </p>
          </div>

        </div>
      </div>
    </footer>
  </div>

  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/jquery-ui.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/aos.js"></script>
    <script src="js/pharmacy.js"></script>
<script src="js/qty.js"></script>

  <script src="js/main.js"></script>

</body>

</html>