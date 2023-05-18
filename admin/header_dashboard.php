<?php
include_once('../config.php');
include_once('../function.php');
 $filename_array = explode("/",$_SERVER['PHP_SELF']);
 $filename = $filename_array[2]; // GET THE FILE NAME LIKE INDEX.php
if(isset($filename)){
    $files = array("dashboard.php");
    if(in_array($filename,$files)){
        if(!isset($_SESSION['is_login'])){
            header("location: ../login.php");
        }
    }
    
        if(!isset($_SESSION['is_login'])){
            header("location: ../login.php");
        }
} 
?>
<!DOCTYPE html>
<html dir="ltr" lang="en">
<!-- Mirrored from creativelayers.net/themes/voiture-html/page-dashboard.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 14 Nov 2022 07:56:14 GMT -->
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="keywords" content="auto, car, car dealer, car dealership, car listing, cars, classified, dealership, directory, listing, modern, motors, responsive">
<meta name="description" content="BERMUDA SERVICING MART">
<meta name="CreativeLayers" content="ATFN">
<!-- css file -->
<link rel="stylesheet" href="../css/bootstrap.min.css">
<link rel="stylesheet" href="../css/fileuploader.css">
<link rel="stylesheet" href="../css/style.css">
<link rel="stylesheet" href="../css/dashbord_navitaion.css">
<!-- Responsive stylesheet -->
<link rel="stylesheet" href="../css/responsive.css">
<!-- Title -->
<title>BERMUDA SERVICING MART</title>
<!-- Favicon -->
<link href="../images/favicon.ico" sizes="128x128" rel="shortcut icon" type="image/x-icon" />
<link href="../images/favicon.ico" sizes="128x128" rel="shortcut icon" />

<script src="https://kit.fontawesome.com/a9174587ea.js" crossorigin="anonymous"></script>
<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<div class="wrapper">
	<div class="preloader"></div>
  
  <!-- header top -->
  <div class="header_top home3_style dashbord_style dn-992">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-8 col-xl-7">
          <div class="header_top_contact_opening_widget text-center text-md-start">
            <ul class="mb0">
              <li class="list-inline-item"><a href="#"><span class="flaticon-phone-call"></span>1-800-458-56987</a></li>
              <li class="list-inline-item"><a href="#"><span class="flaticon-map"></span>152 Northshore Road, Permoke, Bermuda HM11</a></li>
              <li class="list-inline-item"><a href="#"><span class="flaticon-clock"></span>Mon - Fri 8:00 - 18:00</a></li>
            </ul>
          </div>
        </div>
        <div class="col-lg-4 col-xl-5">
          <div class="header_top_social_widgets text-center text-md-end">
            <ul class="m0">
              <li class="list-inline-item"><a href="#"><span class="fab fa-facebook-f"></span></a></li>
              <li class="list-inline-item"><a href="#"><span class="fab fa-twitter"></span></a></li>
              <li class="list-inline-item"><a href="#"><span class="fab fa-instagram"></span></a></li>
              <li class="list-inline-item"><a href="#"><span class="fab fa-linkedin"></span></a></li>
               <?php
                  if(!isset($_SESSION['is_login'])){
                  ?>
                  <li class="list-inline-item"><a href="../login.php" >Login</a>
                  <li class="list-inline-item"><a href="../signup.php" >Register</a></li>
                  <?php
                  }else if(isset($_SESSION['is_login'])){
                    ?>
                        <li class="list-inline-item"><a href="../index.php" >Home</a></li>
                        <li class="list-inline-item"><a href="../logout.php" >Logout</a></li>
                    <?php      
                  }
                  ?>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
  
  <!-- Main Header Nav -->
  <header class="header-nav menu_style_home_one home3_style dashbord_style main-menu">
    <!-- Ace Responsive Menu -->
    <nav class="posr"> 
      <div class="container-fluid"> 
        <!-- Menu Toggle btn-->
        <div class="menu-toggle">
          <button type="button" id="menu-btn">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
        </div>
        <a href="../index.php" class="navbar_brand float-start dn-md">
          <img class="logo1 img-fluid" src="../images/color_logo.png" style="width: 110px;" alt="header-logo2.png">
          <img class="logo2 img-fluid" src="../images/color_logo.png" style="width: 110px;" alt="header-logo2.svg">
        </a>
        <!-- Responsive Menu Structure-->
        <ul id="respMenu" class="ace-responsive-menu menu_list_custom_code wa text-end" data-menu-style="horizontal">
          <li> <a href="../index.php"><span class="title">Home</span></a>
            <!-- Level Two-->
            <!--<ul>
              <li><a href="index-2.html">Home V1</a></li>
              <li><a href="index2.html">Home V2</a></li>
              <li><a href="index3.html">Home V3</a></li>
              <li><a href="index4.html">Home V4</a></li>
              <li><a href="index5.html">Home V5</a></li>
              <li><a href="index6.html">Home V6</a></li>
              <li><a href="index7.html">Home V7</a></li>
            </ul>-->
          </li>
          <!--
          <li> <a href="#"><span class="title">Explore</span></a>
            
            <ul>
              <li> <a href="#">User Info</a> 
                <ul>
                  <li><a href="page-dashboard.html">Dashboard</a></li>
                  <li><a href="page-dashboard-profile.html">Profile</a></li>
                  <li><a href="page-dashboard-listing.html">My Listing</a></li>
                  <li><a href="page-dashboard-favorites.html">Favorites</a></li>
                  <li><a href="page-dashboard-add-listings.html">Add Listing</a></li>
                  <li><a href="page-dashboard-messages.html">Messages</a></li>
                  <li><a href="page-login.html">Logout</a></li>
                </ul>
              </li>
              <li><a href="page-user-profile.html">User Profile</a></li>
            </ul>
          </li>
          <li> <a href="#"><span class="title">Listing</span></a>
            <ul>
              <li> <a href="#">Listing Styles</a> 
                <ul>
                  <li><a href="page-list-v1.html">Listing v1</a></li>
                  <li><a href="page-list-v2.html">Listing v2</a></li>
                  <li><a href="page-list-v3.html">Listing v3</a></li>
                  <li><a href="page-list-v4.html">Listing v4</a></li>
                  <li><a href="page-list-v5.html">Listing v5</a></li>
                  <li><a href="page-list-v6.html">Listing v6</a></li>
                  <li><a href="page-list-v7.html">Listing v7</a></li>
                </ul>
              </li>
              <li> <a href="#">Listing Map</a> 
                <ul>
                  <li><a href="page-list-v8.html">Map v1</a></li>
                  <li><a href="page-list-v9.html">Map v2</a></li>
                  <li><a href="page-list-v10.html">Map v3</a></li>
                </ul>
              </li>
              <li> <a href="#">Listing Single</a> 
                <ul>
                  <li><a href="page-car-single-v1.html">Single V1</a></li>
                  <li><a href="page-car-single-v2.html">Single V2</a></li>
                  <li><a href="page-car-single-v3.html">Single V3</a></li>
                  <li><a href="page-car-single-v4.html">Single V4</a></li>
                  <li><a href="page-car-single-v5.html">Single V5</a></li>
                  <li><a href="page-car-single-v6.html">Single V6</a></li>
                </ul>
              </li>
              <li><a href="page-dashboard-add-listings.html">New Listing</a></li>
            </ul>
          </li>
          <li> <a href="#"><span class="title">Blog</span></a>
            <ul>
              <li><a href="page-blog-grid.html">Blog Grid</a></li>
              <li><a href="page-blog-list.html">Blog List</a></li>
              <li><a href="page-blog-single.html">Blog Single</a></li>
            </ul>
          </li>
          <li> <a href="#"><span class="title">Shop</span></a>
            <ul>
              <li><a href="page-shop.html">Shop</a></li>
              <li><a href="page-shop-cart.html">Cart</a></li>
              <li><a href="page-shop-checkout.html">Checkout</a></li>
              <li><a href="page-shop-complete-order.html">Complete Order</a></li>
              <li><a href="page-shop-single.html">Single</a></li>
              <li><a href="page-user-profile.html">User Profile</a></li>
            </ul>
          </li>
          <li> <a href="#"><span class="title">Pages</span></a>
            <ul>
              <li><a href="page-about.html">About Us</a></li>
              <li><a href="page-calculator.html">Calculator</a></li>
              <li><a href="page-compare.html">Compare</a></li>
              <li><a href="page-contact.html">Contact</a></li>
              <li><a href="page-error.html">404 Page</a></li>
              <li><a href="page-faq.html">Faq</a></li>
              <li><a href="page-login.html">Login</a></li>
              <li><a href="page-pricing.html">Pricing</a></li>
              <li><a href="page-register.html">Register</a></li>
              <li><a href="page-service.html">Service</a></li>
              <li><a href="page-terms.html">Terms and Conditions</a></li>
              <li><a href="page-ui-element.html">UI Elements</a></li>
            </ul>
          </li>-->
          <li class="add_listing"><a href="addHomeServices.php">+ Add Home Services</a></li>
          <li class="add_listing"><a href="addCleaningServices.php">+ Add Cleaning Services</a></li>
          <li class="add_listing"><a href="addPersonalCare.php">+ Add Personal Care</a></li>

          <!--<li><a class="favorite" href="#"><span class="body-color flaticon-heart-1 fz18"><sup class="badge">2</sup></span></a></li>
          <li><a class="notification" href="#"><span class="body-color flaticon-bell fz16"></span></a></li>-->
          <li class="user_setting">
            <div class="dropdown">
              <a class="btn dropdown-toggle" href="#" data-bs-toggle="dropdown">
                <img class="rounded-circle mr10" src="../images/team/avatar.png" style="width: 50px;" alt="avatar.png"> 
                <span class="dn-1366"> <?php echo $_SESSION['name']." ".$_SESSION['lastname']; ?> <span class="fas fa-angle-down ml5"></span></span>
              </a>
              <div class="dropdown-menu">
                <div class="user_set_header">
                  <img class="float-start" src="../images/team/avatar.png" style="width: 50px;" alt="avatar.png">
                  <p><?php echo $_SESSION['name']." ".$_SESSION['lastname']; ?> <br>
                  <span class="address"><?php echo $_SESSION['user_email']; ?></span></p>
                </div>
                <div class="user_setting_content">
                  <a class="dropdown-item <?php if($filename=="my_profile.php"){ echo "active"; } ?>" href="my_profile.php">My Profile</a>
                  <!--<a class="dropdown-item" href="#">Messages</a>-->
                  <a class="dropdown-item <?php if($filename=="my_listing.php"){ echo "active"; } ?>" href="my_listing.php">My Listing</a>
                  <!--<a class="dropdown-item" href="#">Help</a>-->
                  <a class="dropdown-item" href="../logout.php">Log out</a>
                </div>
              </div>
            </div>
          </li>
        </ul>
      </div>
    </nav>
  </header>
  <!-- Modal -->
  <div class="sign_up_modal modal fade" id="logInModal" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body container p60">
          <div class="row">
            <div class="col-lg-12">
              <ul class="sign_up_tab nav nav-tabs" id="myTab" role="tablist">
                <li class="nav-item">
                  <a class="nav-link active" id="home-tab" data-bs-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Login</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" id="profile-tab" data-bs-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Register</a>
                </li>
              </ul>
            </div>
          </div>
          <div class="tab-content container p0" id="myTabContent">
            <div class="row mt30 tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
              <div class="col-lg-12">
                <div class="login_form">
                  <p>New to Home Services.com? <a href="page-register.html">Sign up.</a> Are you a dealer?</p>
                  <form action="#">
                    <div class="mb-2 mr-sm-2">
                      <label class="form-label">Username or email address  *</label>
                      <input type="text" class="form-control">
                    </div>
                    <div class="form-group mb5">
                      <label class="form-label">Password  *</label>
                      <input type="password" class="form-control">
                    </div>
                    <div class="custom-control custom-checkbox">
                      <input type="checkbox" class="custom-control-input" id="exampleCheck3">
                      <label class="custom-control-label" for="exampleCheck3">Remember me</label>
                      <a class="btn-fpswd float-end" href="#">Lost your password?</a>
                    </div>
                    <button type="submit" class="btn btn-log btn-thm mt5">Sign in</button>
                  </form>
                </div>
              </div>
            </div>
            <div class="row mt30 tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
              <div class="col-lg-12">
                <div class="sign_up_form">
                  <p>Already have a profile? <a href="page-login.html">Sign in.</a></p>
                  <form action="#">
                    <div class="row">
                      <div class="col-lg-6">
                        <div class="form-group">
                          <label class="form-label">First Name</label>
                          <input type="text" class="form-control">
                        </div>
                      </div>
                      <div class="col-lg-6">
                        <div class="form-group">
                          <label class="form-label">Last Name</label>
                          <input type="text" class="form-control">
                        </div>
                      </div>
                      <div class="col-lg-12">
                        <div class="form-group">
                          <label class="form-label">Email</label>
                          <input type="email" class="form-control">
                        </div>
                      </div>
                      <div class="col-lg-6">
                        <div class="form-group mb20">
                          <label class="form-label">Password</label>
                          <input type="password" class="form-control">
                        </div>
                      </div>
                      <div class="col-lg-6">
                        <div class="form-group mb20">
                          <label class="form-label">Confirm Password</label>
                          <input type="password" class="form-control">
                        </div>
                      </div>
                    </div>
                    <button type="submit" class="btn btn-signup btn-thm mb0">Sign Up</button>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  
  <!-- Main Header Nav For Mobile -->
  <div id="page" class="stylehome1 h0">
    <div class="mobile-menu">
      <div class="header stylehome1">
        <div class="mobile_menu_bar">
          <a class="menubar" href="#menu"><small>Menu</small><span></span></a>
        </div>
        <div class="mobile_menu_main_logo"><a href="../index.php"><img style="width: 75px;" class="nav_logo_img img-fluid" src="../images/color_logo.png" alt="../images/color_logo.png"/></a></div>
      </div>
    </div>
    <!-- /.mobile-menu -->
    <nav id="menu" class="stylehome1">
      <ul>
       
        <!-- Only for Mobile View -->
        <li class="mm-add-listing">
          <span class="border-none">
            <span class="mmenu-contact-info">
              <span class="phone-num"><i class="flaticon-map"></i> <a href="#">152 Northshore Road, Permoke, Bermuda HM11</a></span>
              <span class="phone-num"><i class="flaticon-phone-call"></i> <a href="#">1-800-458-56987</a></span>
              <span class="phone-num"><i class="flaticon-clock"></i> <a href="#">Business Hours: 24/7<br/>Payment and Support Hours: 09:00am - 06:30pm</a></span>
            </span>
            <span class="social-links">
              <a href="#"><span class="fab fa-facebook-f"></span></a>
              <a href="#"><span class="fab fa-twitter"></span></a>
              <a href="#"><span class="fab fa-instagram"></span></a>
              <a href="#"><span class="fab fa-youtube"></span></a>
              <a href="#"><span class="fab fa-pinterest"></span></a>
            </span>
          </span>
        </li>
      </ul>
    </nav>
  </div>