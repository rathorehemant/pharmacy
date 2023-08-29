
    

[<!DOCTYPE html>
<html lang="en">

<head>
  <title>Pharma &mdash; Colorlib Template</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


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


    <?php include 'lcd.php'?>

    <div class="bg-light py-3">
      <div class="container">
        <div class="row">
          <div class="col-md-12 mb-0">
            <a href="index.html">Home</a> <span class="mx-2 mb-0">/</span>
            <strong class="text-black">Contact</strong>
          </div>
        </div>
      </div>
    </div>

    <div class="site-section">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <h2 class="h3 mb-5 text-black">Billing Details</h2>
          </div>
          <div class="col-md-12">
    
            
			<form   METHOD="post"  >
    
              <div class="p-3 p-lg-5 border">
			   
                <div class="form-group row">
				<p>
				<div id= "submit_output"></div>
				</p>
                  <div class="col-md-6">
                    <label for="c_fname" class="text-black">First Name <span class="text-danger">*</span></label>
                    <input type="text" class="form-control" id="name" name="name" autocomplete="off">
					
					<h2 class="text-danger" id ="userfirst"><h2>


                  </div>
				  
                  <div class="col-md-6">
                    <label for="c_lname" class="text-black">Last Name <span class="text-danger">*</span></label>
                    <input type="text" class="form-control" id="lname" name="lname">
					<h2 class="text-danger" id ="userlast"><h2>


                  </div>
                </div>
                <div class="form-group row">
                  <div class="col-md-6">
                    <label for="c_email" class="text-black">Email <span class="text-danger">*</span></label>
                    <input type="text" class="form-control" id="email" name="email" placeholder="">
					
					<h2 class="text-danger" id ="useremail"><h2>


                  </div>
				  <div class="col-md-6">
                    <label for="c_email" class="text-black">CONTACT <span class="text-danger">*</span></label>
                    <input type="number" class="form-control" id="contact" name="contact" placeholder="">
					
					<h2 class="text-danger" id ="usercontact"><h2>


                  </div>
                </div>
                
               
    
                <div class="form-group row">
                  <div class="col-md-6">
                    <label for="c_message" class="text-black">STATE<span class="text-danger">*</span></label>
                    <input type ="text"  name="state" id="state"  class="form-control">
					
					<h2 class="text-danger" id ="userstate"><h2>


                  </div>
				  <div class="col-md-6">
                    <label for="c_message" class="text-black">CITY<span class="text-danger">*</span></label>
                    <input type ="text"  name="city" id="city"  class="form-control">
					
					<h2 class="text-danger" id ="usercity"><h2>

                  </div>
				  
                </div>
				 <div class="form-group row">
				<div class="col-md-6">
                  <label for="c_message" class="text-black">ADDRESS<span class="text-danger">*</span></label>
                    <input type ="text"  name="address" id="address"  class="form-control">
					
					<h2 class="text-danger" id ="useradd"><h2>

                  </div>
				  <div class="col-md-6">
                  <label for="c_message" class="text-black">POSTAL_ZIP<span class="text-danger">*</span></label>
                    
					<input type ="number"  name="postal_zip" id="postal_zip"  class="form-control">
					
					<h2 class="text-danger" id ="userzi"><h2>

                  </div>
				  </div>
				  
			

           
	</div>
	</div>
	</div>
	<br>
	
                <div class="form-group row">
				&nbsp;&nbsp;&nbsp;
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				 <div class="col-lg-2">
                     <input type="button" class="btn btn-primary btn-lg btn-block" value="Order" name="submit" id = "submit" onclick ="order()"><br>
					 
					<h2 class="text-danger" id ="cerror"><h2>
                  </div>
                </div>
              </div>
			 

            </form>
          </div>
          
        </div>
      </div>
    </div>



    <div class="site-section bg-primary">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <h2 class="text-white mb-4">Offices</h2>
          </div>
          <div class="col-lg-4">
            <div class="p-4 bg-white mb-3 rounded">
              <span class="d-block text-black h6 text-uppercase">New York</span>
              <p class="mb-0">203 Fake St. Mountain View, San Francisco, California, USA</p>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="p-4 bg-white mb-3 rounded">
              <span class="d-block text-black h6 text-uppercase">London</span>
              <p class="mb-0">203 Fake St. Mountain View, San Francisco, California, USA</p>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="p-4 bg-white mb-3 rounded">
              <span class="d-block text-black h6 text-uppercase">Canada</span>
              <p class="mb-0">203 Fake St. Mountain View, San Francisco, California, USA</p>
            </div>
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
    <script src="js/pharmacy.js"></script>



 
  
 

</body>

</html>




