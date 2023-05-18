<?php
include_once('config.php');
include_once('function.php');

 $filename_array = explode("/",$_SERVER['PHP_SELF']);
 $filename = $filename_array[1]; // GET THE FILE NAME LIKE INDEX.php
if(isset($filename)){
    if($filename=="login.php" || $filename=="signup.php"){
        if(isset($_SESSION['is_login'])){
            header("location: index.php");
        }
    }
}
    $bike_cats = array();
    $bike_qry = mysqli_query($con,"select id from categories where cat_type='Personal Care'");
    while($data_cat =  mysqli_fetch_assoc($bike_qry)){
        $bike_cats[] = $data_cat['id'];
    }
    $bike_cats = implode(',',$bike_cats);
    
    $boat_cats = array();
    $boat_qry = mysqli_query($con,"select id from categories where cat_type='Cleaning Services'");
    while($data_cat =  mysqli_fetch_assoc($boat_qry)){
        $boat_cats[] = $data_cat['id'];
    }
    $boat_cats = implode(',',$boat_cats);
    
    $trucks_cats = array();
    $truck_qry = mysqli_query($con,"select id from categories where cat_type='Trucks'");
    while($data_cat =  mysqli_fetch_assoc($truck_qry)){
        $trucks_cats[] = $data_cat['id'];
    }
    $trucks_cats = implode(',',$trucks_cats);
    
    $inc_cats = array();
    $inc_qry = mysqli_query($con,"select id from categories where cat_type='Home Services'");
    while($data_cat =  mysqli_fetch_assoc($inc_qry)){
        $inc_cats[] = $data_cat['id'];
    }
    $inc_cats = implode(',',$inc_cats);
    
    $inc_motor = array();
    $inc_qry = mysqli_query($con,"select id from categories where cat_type='Motorsports'");
    while($data_cat =  mysqli_fetch_assoc($inc_qry)){
        $inc_motor[] = $data_cat['id'];
    }
    $inc_motor = implode(',',$inc_motor);
    
    
?>
<!DOCTYPE html>
<html dir="ltr" lang="en">
<!-- Mirrored from creativelayers.net/themes/voiture-html/ by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 14 Nov 2022 07:55:03 GMT -->
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="keywords" content="auto, car, car dealer, car dealership, car listing, cars, classified, dealership, directory, listing, modern, motors, responsive">
<meta name="description" content="BERMUDA SERVICING MART">
<meta name="CreativeLayers" content="ATFN">
<!-- css file -->
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/style.css">
<!-- Responsive stylesheet -->
<link rel="stylesheet" href="css/responsive.css">
<!-- Title -->
<title>BERMUDA SERVICING MART</title>
<!-- Favicon -->
<link href="images/favicon.ico" sizes="128x128" rel="shortcut icon" type="image/x-icon" />
<link href="images/favicon.ico" sizes="128x128" rel="shortcut icon" />

<script src="https://kit.fontawesome.com/a9174587ea.js" crossorigin="anonymous"></script>
<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<div class="wrapper ovh">
  <div class="preloader"></div>
  <!-- Sidebar Panel Start -->
  <div class="listing_sidebar">
    <div class="siderbar_left_home pt20">
      <a class="sidebar_switch sidebar_close_btn float-end" href="#">X</a>
      <div class="footer_contact_widget mt100">
        <h3 class="title">Quick contact info</h3>
        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis Theme natoque penatibus et magnis dis parturient montes, nascetur.</p>
      </div>
      <div class="footer_contact_widget">
        <h5 class="title">CONTACT</h5>
        <div class="footer_phone">+1 441 747 1683</div>
        <p>hello@voiture.com</p>
      </div>
      <div class="footer_about_widget">
        <h5 class="title">OFFICE</h5>
        <p>152 Northshore Road,<br /> Permoke, Bermuda HM11</p>
      </div>
      <div class="footer_contact_widget">
        <h5 class="title">OPENING HOURS</h5>
        <p>Business Hours: 24/7 <br /> Payment  and Support Hours: 09:00am - 06:30pm</p>
      </div>
    </div>
  </div>
  <!-- Sidebar Panel End -->
  
  <!-- header top -->
  <div class="header_top dn-992 <?php if(isset($filename) && $filename=="index.php"){ echo ""; }else{ echo "home3_style"; } ?>">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-xl-8">
          <div class="header_top_contact_opening_widget text-center text-md-start">
            <ul class="mb0">
              <li class="list-inline-item"><a href="#"><span class="flaticon-phone-call"></span>1-800-458-56987</a></li>
              <li class="list-inline-item"><a href="#"><span class="flaticon-map"></span>152 Northshore Road, Permoke, Bermuda HM11</a></li>
              <li class="list-inline-item"><a href="#"><span class="flaticon-clock"></span>Business Hours: 24/7 </a></li>
            </ul>
          </div>
        </div>
        <div class="col-lg-4 col-xl-4">
          <div class="header_top_social_widgets text-center text-md-end">
            <ul class="m0">
              <li class="list-inline-item"><a href="#"><span class="fab fa-facebook-f"></span></a></li>
              <li class="list-inline-item"><a href="#"><span class="fab fa-twitter"></span></a></li>
              <li class="list-inline-item"><a href="#"><span class="fab fa-instagram"></span></a></li>
              <li class="list-inline-item"><a href="#"><span class="fab fa-linkedin"></span></a></li>
              <?php
              if(!isset($_SESSION['is_login'])){
              ?>
              <li class="list-inline-item"><a href="login.php" >Login</a>
              <li class="list-inline-item"><a href="signup.php" >Register</a></li>
              <?php
              }else if(isset($_SESSION['is_login'])){
                ?>
                    <li class="list-inline-item"><a href="admin/dashboard.php" >My Dashboard</a></li>
                    <li class="list-inline-item"><a href="logout.php" >Logout</a></li>
                <?php      
              }
              ?>
              <!--<li class="list-inline-item"><a href="#" data-bs-toggle="modal" data-bs-target="#logInModal">Login</a></li>
              <li class="list-inline-item"><a href="#" data-bs-toggle="modal" data-bs-target="#logInModal">Register</a></li>-->
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
  
  <!-- Main Header Nav -->
  <header class="header-nav  main-menu <?php if(isset($filename) && $filename=="index.php"){ echo "transparent"; }else{ echo "home3_style"; } ?>" >
    <!-- Ace Responsive Menu -->
    <!-- //TODO HOME NAV BACKGROUND -->
<?php
$currentURL = $_SERVER['REQUEST_URI'];

if (substr($currentURL, -9) == 'index.php') {
    $navStyle = '';
} else {
    $navStyle = 'style="background-color:#f85c1e;"';
}
?>

<nav <?php echo $navStyle; ?>>
         <div class="container posr "> 
        <!-- Menu Toggle btn-->
        <div class="menu-toggle">
          <button type="button" id="menu-btn">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
        </div>
        <a href="index.php" class="navbar_brand float-start dn-md">
            <?php
                 if(isset($filename) && $filename=="index.php"){
            ?>
          <img class="logo1 img-fluid" loading="lazy" src="images/site_logo.png" style="width: 180px; margin-top: 30px;" alt="header-logo.svg">
          <?php
          }else{
          ?>
            <img class="logo1 img-fluid" loading="lazy" src="images/color_logo.png" style="width: 120px;" alt="site_logo">
          <?php
          }
          ?>
          <img class="logo2 img-fluid" loading="lazy" src="images/color_logo.png" style="width: 110px;" alt="site_logo">
				</a>
        <!-- Responsive Menu Structure-->
        <ul id="respMenu" class="ace-responsive-menu text-end" data-menu-style="horizontal">
          <li> <a href="index.php"><span class="title">Home</span></a> </li>
          <li> <a href="HomeServices.php"><span class="title">Home Services</span></a>
            <!-- Level Two-->
            <ul>
             <?php
              $inc_qry = mysqli_query($con,"select id,title from categories where cat_type='Home Services' order by title asc");
                while($data_cat =  mysqli_fetch_assoc($inc_qry)){
                    if($data_cat['title']=="New Home Services"){
                        echo '<li> <a href="new.php" >New Home Services</a></li>';
                    }else if($data_cat['title']=="Used Home Services"){
                        echo '<li> <a href="HomeServices.php?condition=Used" >Used Home Services</a></li>';
                    }else{
                     echo "<li> <a href='HomeServices.php?category_id=".$data_cat['id']."' >".DBout($data_cat['title'])."</a></li>";   
                    }
                }
              ?>
            </ul>
          </li>
          
           <li> <a href="CleaningServices.php"><span class="title">Cleaning Services</span></a>
            <!-- Level Two-->
            <ul>
              <?php
              $inc_qry = mysqli_query($con,"select id,title from categories where cat_type='Cleaning Services' order by title asc");
                while($data_cat =  mysqli_fetch_assoc($inc_qry)){
                    if($data_cat['title']=="New Cleaning Services"){
                        echo '<li> <a href="CleaningServices.php?condition=New" >New Cleaning Services</a></li>';
                    }else if($data_cat['title']=="Used Cleaning Services"){
                        echo '<li> <a href="CleaningServices.php?condition=Used" >Used Cleaning Services</a></li>';
                    }else{
                     echo "<li> <a href='CleaningServices.php?category_id=".$data_cat['id']."' >".DBout($data_cat['title'])."</a></li>";   
                    }
                }
              ?>
            </ul>
          </li>

           <li> <a href="PersonalCare.php"><span class="title">Personal Care</span></a>
            <!-- Level Two-->
            <ul>
              <?php
              $inc_qry = mysqli_query($con,"select id,title from categories where cat_type='Personal Care' order by title asc");
                while($data_cat =  mysqli_fetch_assoc($inc_qry)){
                    if($data_cat['title']=="New Personal Care"){
                        echo '<li> <a href="PersonalCare.php?condition=New" >New Personal Care</a></li>';
                    }else if($data_cat['title']=="Used Home Services"){
                        echo '<li> <a href="PersonalCare.php?condition=Used" >Used Personal Care</a></li>';
                    }else{
                     echo "<li> <a href='PersonalCare.php?category_id=".$data_cat['id']."' >".DBout($data_cat['title'])."</a></li>";   
                    }
                }
              ?>
            </ul>
          </li>
          

          <!-- <li> <a href="motorsports_listings.php"><span class="title">Motorsports</span></a>
            <ul>
               <?php
              $inc_qry = mysqli_query($con,"select id,title from categories where cat_type='Motorsports' order by title asc");
                while($data_cat =  mysqli_fetch_assoc($inc_qry)){
                     echo "<li> <a href='motorsports_listings.php?category_id=".$data_cat['id']."' >".DBout($data_cat['title'])."</a></li>";   
                }
              ?>
            </ul>
          </li>
          <li> <a href="PersonalCare.php" ><span class="title">Personal Care</span></a>
             <ul>
                  <li> <a href="PersonalCare.php?type=Home Services" >Car Personal Care</a></li>
                  <li> <a href="PersonalCare.php?type=Personal Care" >Bike Personal Care</a></li>
                  <li> <a href="PersonalCare.php?type=Cleaning Services" >Cleaning Services Personal Care</a></li>
                  <li> <a href="PersonalCare.php?type=Trucks" >Trucks Personal Care</a></li>
                  <li> <a href="PersonalCare.php?type=Motorsports" >Motorsports Personal Care</a></li>
             </ul>
          </li>
          <li> <a href="HomeServices.php"><span class="title">Services</span></a> -->
            <!-- <ul>
                 <li> <a href="HomeServices.php?type=AutomobileMaintenance">Automobile maintenance </a></li>
                <li> <a href="HomeServices.php?type=Carwash">Carwash/Detailing </a></li>
                <li> <a href="HomeServices.php?type=AutomobileSpareParts">Automobile Spare Parts</a></li>
                <li> <a href="HomeServices.php?type=BoatMaintenance">Boat maintenance</a></li>
                <li> <a href="HomeServices.php?type=BoatingSpareParts">Boating spare parts</a></li>
                <li> <a href="HomeServices.php?type=PropellerRepair">Propeller repair</a></li>
                <li> <a href="HomeServices.php?type=Fiberglass">Fiberglass/Gelcoat Repair</a></li>
                <li> <a href="HomeServices.php?type=BikeMaintenance">Bike maintenance</a></li>
                <li> <a href="HomeServices.php?type=Painting">Painting</a></li>
                <li> <a href="HomeServices.php?type=Tinting">Tinting</a></li>
                <li> <a href="HomeServices.php?type=Stereo">Stereo</a></li>
                <li> <a href="HomeServices.php?type=Graphics/signage/flags">Graphics/signage/flags</a></li>
                <li> <a href="HomeServices.php?type=Tires">Tires</a></li>
                <li> <a href="HomeServices.php?type=FuelStations">Fuel stations</a></li>
                <li> <a href="HomeServices.php?type=ChromePlating">Chrome plating / Laser Cleaning /powder coating</a></li>
                                <li> <a href="HomeServices.php?type=Mobile_Tire_Repair">Mobile Tire Repair</a></li>
                <li> <a href="HomeServices.php?type=Towing_Services">Towing Services</a></li>
            </ul>
          </li> -->
          <li class="nav-item dropdown">
          <a  href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            +Add
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <li class="add_listing"><a href="admin/addHomeServices.php">+ Add Home Services</a></li>
<li class="add_listing"><a href="admin/addCleaningServices.php">+ Add Cleaning Services</a></li>          <li class="add_listing"><a href="admin/addPersonalCare.php">+ Add Personal Care</a></li>

        </ul>
        </li>

          <li class="sidebar_panel"><a class="sidebar_switch pt0" href="#"><span></span></a></li>
        </ul>
      </div>
    </nav>
  </header>
  
  
  <!-- Main Header Nav For Mobile -->
  <div id="page" class="stylehome1 h0">
    <div class="mobile-menu">
      <div class="header stylehome1">
        <div class="mobile_menu_bar">
          <a class="menubar" href="#menu"><small>Menu</small><span></span></a>
        </div>
        <div class="mobile_menu_main_logo"><a href="index.php"><img class="nav_logo_img img-fluid" src="images/color_logo.png" style="width: 75px;" alt="images/header-logo2.png"></a></div>
      </div>
    </div>
    <!-- /.mobile-menu -->
    <nav id="menu" class="stylehome1">
      <ul>
        <li><a href="index.php">Home</a>
        </li>
        <li> <a href="HomeServices.php"><span class="title">Home Services</span></a>
            <!-- Level Two-->
            <ul>
             <?php
              $inc_qry = mysqli_query($con,"select id,title from categories where cat_type='Home Services' order by title asc");
                while($data_cat =  mysqli_fetch_assoc($inc_qry)){
                  /*if(isset($_GET['category_id']) && $_GET['category_id'] == $data_cat['id']){
                        echo "<option selected='selected' value='".$data_cat['id']."'>".DBout($data_cat['title'])."</option>";
                    }*/
                    if($data_cat['title']=="New Home Services"){
                        echo '<li> <a href="new.php" >New Home Services</a></li>';
                    }else if($data_cat['title']=="Used Home Services"){
                        echo '<li> <a href="HomeServices.php?condition=Used" >Used Home Services</a></li>';
                    }else{
                     echo "<li> <a href='HomeServices.php?category_id=".$data_cat['id']."' >".DBout($data_cat['title'])."</a></li>";   
                    }
                }
              ?>
            </ul>
          </li>
            <li> <a href="PersonalCare.php"><span class="title">Personal Care</span></a>
            <!-- Level Two-->
            <ul>
              <!--
              <li> <a href="PersonalCare.php?condition=New" >New Personal Care</a></li>
              <li> <a href="PersonalCare.php?condition=Used" >Used Personal Care</a></li> -->
              <?php
              $inc_qry = mysqli_query($con,"select id,title from categories where cat_type='Personal Care' order by title asc");
                while($data_cat =  mysqli_fetch_assoc($inc_qry)){
                  /*if(isset($_GET['category_id']) && $_GET['category_id'] == $data_cat['id']){
                        echo "<option selected='selected' value='".$data_cat['id']."'>".DBout($data_cat['title'])."</option>";
                    }*/
                    if($data_cat['title']=="New Personal Care"){
                        echo '<li> <a href="PersonalCare.php?condition=New" >New Personal Care</a></li>';
                    }else if($data_cat['title']=="Used Home Services"){
                        echo '<li> <a href="PersonalCare.php?condition=Used" >Used Personal Care</a></li>';
                    }else{
                     echo "<li> <a href='PersonalCare.php?category_id=".$data_cat['id']."' >".DBout($data_cat['title'])."</a></li>";   
                    }
                }
              ?>
            </ul>
          </li>
          
           <li> <a href="CleaningServices.php"><span class="title">Cleaning Services</span></a>
            <!-- Level Two-->
            <ul>
              <!--<li> <a href="CleaningServices.php?condition=New" >New Cleaning Services</a></li>
              <li> <a href="CleaningServices.php?condition=Used" >Used Cleaning Services</a></li>-->
              <?php
              $inc_qry = mysqli_query($con,"select id,title from categories where cat_type='Cleaning Services' order by title asc");
                while($data_cat =  mysqli_fetch_assoc($inc_qry)){
                  /*if(isset($_GET['category_id']) && $_GET['category_id'] == $data_cat['id']){
                        echo "<option selected='selected' value='".$data_cat['id']."'>".DBout($data_cat['title'])."</option>";
                    }*/
                    if($data_cat['title']=="New Cleaning Services"){
                        echo '<li> <a href="CleaningServices.php?condition=New" >New Cleaning Services</a></li>';
                    }else if($data_cat['title']=="Used Cleaning Services"){
                        echo '<li> <a href="CleaningServices.php?condition=Used" >Used Cleaning Services</a></li>';
                    }else{
                     echo "<li> <a href='CleaningServices.php?category_id=".$data_cat['id']."' >".DBout($data_cat['title'])."</a></li>";   
                    }
                }
              ?>
            </ul>
          </li>
          <!-- <li> <a href="trucks_listings.php"><span class="title">Trucks</span></a>
            <ul>
               <?php
              $inc_qry = mysqli_query($con,"select id,title from categories where cat_type='Trucks' order by title asc");
                while($data_cat =  mysqli_fetch_assoc($inc_qry)){
                     echo "<li> <a href='trucks_listings.php?category_id=".$data_cat['id']."' >".DBout($data_cat['title'])."</a></li>";   
                }
              ?>
            </ul>
          </li>
          <li> <a href="motorsports_listings.php"><span class="title">Motorsports</span></a>
            <ul>
               <?php
              $inc_qry = mysqli_query($con,"select id,title from categories where cat_type='Motorsports' order by title asc");
                while($data_cat =  mysqli_fetch_assoc($inc_qry)){
                     echo "<li> <a href='motorsports_listings.php?category_id=".$data_cat['id']."' >".DBout($data_cat['title'])."</a></li>";   
                }
              ?>
            </ul>
          </li>
          <li> <a href="PersonalCare.php" ><span class="title">Personal Care</span></a>
             <ul>
                  <li> <a href="PersonalCare.php?type=Home Services" >Car Personal Care</a></li>
                  <li> <a href="PersonalCare.php?type=Personal Care" >Bike Personal Care</a></li>
                  <li> <a href="PersonalCare.php?type=Cleaning Services" >Cleaning Services Personal Care</a></li>
                  <li> <a href="PersonalCare.php?type=Trucks" >Trucks Personal Care</a></li>
                  <li> <a href="PersonalCare.php?type=Motorsports" >Motorsports Personal Care</a></li>
             </ul>
          </li>
          <li> <a href="HomeServices.php"><span class="title">Services</span></a> 
            <ul>
                <li> <a href="HomeServices.php?type=AutomobileMaintenance">Automobile maintenance </a></li>
                <li> <a href="HomeServices.php?type=Carwash">Carwash/Detailing </a></li>
                <li> <a href="HomeServices.php?type=AutomobileSpareParts">Automobile Spare Parts</a></li>
                <li> <a href="HomeServices.php?type=BoatMaintenance">Boat maintenance</a></li>
                <li> <a href="HomeServices.php?type=BoatingSpareParts">Boating spare parts</a></li>
                <li> <a href="HomeServices.php?type=PropellerRepair">Propeller repair</a></li>
                <li> <a href="HomeServices.php?type=Fiberglass">Fiberglass/Gelcoat Repair</a></li>
                <li> <a href="HomeServices.php?type=BikeMaintenance">Bike maintenance</a></li>
                <li> <a href="HomeServices.php?type=Painting">Painting</a></li>
                <li> <a href="HomeServices.php?type=Tinting">Tinting</a></li>
                <li> <a href="HomeServices.php?type=Stereo">Stereo</a></li>
                <li> <a href="HomeServices.php?type=Graphics/signage/flags">Graphics/signage/flags</a></li>
                <li> <a href="HomeServices.php?type=Tires">Tires</a></li>
                <li> <a href="HomeServices.php?type=FuelStations">Fuel stations</a></li>
                <li> <a href="HomeServices.php?type=ChromePlating">Chrome plating / Laser Cleaning /powder coating</a></li>
                <li> <a href="HomeServices.php?type=Mobile_Tire_Repair">Mobile Tire Repair</a></li>
                <li> <a href="HomeServices.php?type=Towing_Services">Towing Services</a></li>
            </ul>
          </li>-->
          <li class="add_listing"><a href="admin/addHomeServices.php">+ Add Home Services</a></li>
          <li class="add_listing"><a href="admin/addPersonalCare.php">+ Add Personal Care</a></li>
<li class="add_listing"><a href="admin/addCleaningServices.php">+ Add Cleaning Services</a></li>
          <?php
              if(!isset($_SESSION['is_login'])){
              ?>
              <li ><a href="login.php" >Login</a>
              <li ><a href="signup.php" >Register</a></li>
              <?php
              }else if(isset($_SESSION['is_login'])){
                ?>
                    <li ><a href="admin/dashboard.php" >My Dashboard</a></li>
                    <li ><a href="logout.php" >Logout</a></li>
                <?php      
              }
              ?>
        <!-- Only for Mobile View -->
        <li class="mm-add-listing">
          <span class="border-none">
            <span class="mmenu-contact-info">
              <span class="phone-num"><i class="flaticon-map"></i> <a href="#">152 Northshore Road, Permoke, Bermuda HM11</a></span>
              <span class="phone-num"><i class="flaticon-phone-call"></i> <a href="#">1-800-458-56987</a></span>
              <span class="phone-num"><i class="flaticon-clock"></i> <a href="#">Business Hours: 24/7<br/>Payment and Support Hours: 09:00am - 06:30pm </a></span>
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
  <?php
    include_once("login_register_popup.php");
  ?>