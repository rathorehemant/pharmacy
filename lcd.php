<?php

session_start();

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

 <link  rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" >
  <link rel="stylesheet" href="css/aos.css">

  <link rel="stylesheet" href="css/style.css">
  <style>
#chatIcon {
  position: fixed;
  bottom: 20px;
  right: 20px;
  width: 68px;
  height: 60px;
  background-color: #000;
  color: #fff;
  border-radius: 50%;
  display: flex;
  flex-direction: column;
  align-items: center;
  justify-content: center;
  cursor: pointer;
  z-index: 9;
}

#chatIcon i {
  font-size: 24px;
}

.chatIconText {
  font-size: 12px;
  margin-top: 5px;
  text-align: center;
}

</style>
   
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

      <div class="container">
        <div class="d-flex align-items-center justify-content-between">
          <div class="logo">
            <div class="site-logo">
              <a href="index.html" class="js-logo-clone">Pharma</a>
            </div>
          </div>
          <div class="main-nav d-none d-lg-block">
            <nav class="site-navigation text-right text-md-center" role="navigation">
              <ul class="site-menu js-clone-nav d-none d-lg-block">
                <li><a href="index.php">Home</a></li>
               
               
                <li><a href="about.php">About</a></li>
				 <li><a href="contact.php">Contact Us</a></li>

               <!-- <li><a href="contact.php">Contact</a></li>-->
              </ul>
            </nav>
          </div>
		  
		  
		  <?php
		if(isset($_SESSION['email'])){
			echo'
          <div class="icons">
            <a href="#" class="icons-btn d-inline-block js-search-open"><span class="icon-search"></span></a>
            <a href="cart.php" class="icons-btn d-inline-block bag">
						 
              <span class="icon-shopping-bag"></span>
              <span class="number"></span>
            </a>
            <a href="#" class="site-menu-toggle js-menu-toggle ml-3 d-inline-block d-lg-none"><span
                class="icon-menu"></span></a>
				 </div>
				  <div>
			<div class="main-nav d-none d-lg-block">
            <nav class="site-navigation text-right text-md-center" role="navigation">
              <ul class="site-menu js-clone-nav d-none d-lg-block">
				  <li class="has-children">
				<span><a href="#" class="text-primary">
					WELCOME</span>
				</a></h1>
				<ul class="dropdown">
                   
                    <li></li>
                    <li><a href="logout.php">Logout</a></li>
					<li><a href="profile.php">Profile</a></li>
					<li><a href="change_password.php">Change_Password</a></li>
					<li><a href="#">ALL_Booking</a></li>
					
					
                  </ul>
				  </ul>
            </nav>
          </div>
          </div>';
		   
		}

		else{
							echo'
			<span><a href="loginregister.php" class="text-primary">Register/Login</a></span>';

		}
		    
		  ?>
		  

        </div>
      </div>
    </div>
	<?php
if(isset($_SESSION['email'])){
	echo '<div id="chatIcon">
  <i class="fa fa-comments"></i>
  <span class="chatIconText">Ask Hemu</span>
</div>';
}
?>    
  
