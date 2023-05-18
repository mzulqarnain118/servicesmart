
<?php
header("Cache-Control: no-store");
    include_once("header.php");
?>
    <style>
.accordions {
  background-color: #F85C1E;
  color: #fff;
  cursor: pointer;
  padding: 18px;
  width: 32%;
  border: none;
  text-align: center;
  outline: none;
  font-size: 15px;
  transition: 0.4s;
  border-bottom: 1px solid #f7f7f7;
  float: left;
  margin: 0 5px 5px 0;
}

.accord_tab .active, .accordions:hover {
  background-color: #F68D46 
}

.panel_1 {
  padding: 0 18px;
  display: none;
  background-color: white;
  overflow: hidden;
}
.accord_tab .pinls{
    padding: 0 18px;
      display: none;
      background-color: white;
      overflow: hidden;
    display: none;
}
@media (max-width: 400px){
    .accordions {
        width: 31%;
        padding: 15px;
    }
}
</style>
  <!-- Home Design -->
  <section class="home-one bg-home1">
    <div class="container">
      <div class="row posr" style="display: inherit;">
        <div class="col-lg-10 m-auto">
          <div class="home_content home1_style">
            <div class="home-text text-center mb30">
                <div class="col-lg-12 accord_tab">
                    <center><img class="logo1 img-fluid" loading="lazy" src="images/site_logo.png" style="width: 75%;" alt="header-logo.svg"/></center>
                </div>
              <h2 class="title"><span class="aminated-object1"><img class="objects" src="images/home/_title-bottom-border.svg" alt=""></span>Bermuda Servicing Mart</h2>
              <p class="para">Bermuda's Online Marketplace for your Service Needs</p>
            </div>
             <div class="advance_search_panel">
              <div class="row">
                <div class="col-lg-12 accord_tab">
                        <button class="accordions" onclick="change_tab(1)">Home Services</button>
                        <button class="accordions" onclick="change_tab(2)">Personal Care</button>
                        <button class="accordions" onclick="change_tab(3)">Cleaning Services</button>
                        <div class="panel_1 pinls">
                              <?php include_once('HomeServices_tab.php'); ?>
                        </div>
                        <!--Bikes--->
                        
                        <div class="panel_2 pinls">
                                 <?php include_once('PersonalCare_tab.php'); ?>
                        </div>
                        <!--Boats--->
                        
                        <div class="panel_3 pinls">
                             <?php include_once('SmartHome_tab.php'); ?>
                        </div>
                       
                </div>
                <div class="col-lg-12 accord_tab">
                     <!--TRUCKS--->
                        <!-- <button class="accordions" onclick="change_tab(4)">Trucks</button>
                        <button class="accordions" onclick="change_tab(5)">Motorsports</button>
                        <button class="accordions" onclick="change_tab(6)">Personal Care</button>
                        <button class="accordions" onclick="change_tab(7)">Services</button> -->

                        <div class="panel_4 pinls">
                            <?php include_once('trucks_tab.php'); ?>
                        </div>
                        <!--Motorsports--->
                        
                        <div class="panel_5 pinls">
                          <?php include_once('motorsports_tab.php'); ?>
                        </div>
                        <!--Personal Care--->
                        
                        <div class="panel_6 pinls">
                          <?php include_once('PersonalCare_tab.php'); ?>
                        </div>

                          <!--Services--->
                        
                        <div class="panel_7 pinls">
                          <?php include_once('HomeServices_tab.php'); ?>
                        </div>
                </div>
                <div class="col-lg-12 desktop_tab" >
                  <ul class="nav nav-pills justify-content-center" id="pills-tab" role="tablist">
                    <li class="nav-item" role="presentation">
                      <button class="nav-link active" id="pills-allstatus-tab" data-bs-toggle="pill" data-bs-target="#pills-allstatus" type="button" role="tab" aria-controls="pills-allstatus" aria-selected="true">Home Services</button>
                    </li>
                    <li class="nav-item" role="presentation">
                      <button class="nav-link" id="pills-SmartHome_tab-tab" data-bs-toggle="pill" data-bs-target="#pills-SmartHome_tab" type="button" role="tab" aria-controls="pills-SmartHome_tab" aria-selected="false">Personal Care</button>
                    </li>
                    <li class="nav-item" role="presentation">
                      <button class="nav-link " id="pills-PersonalCare_tab-tab" data-bs-toggle="pill" data-bs-target="#pills-PersonalCare_tab" type="button" role="tab" aria-controls="pills-PersonalCare_tab" aria-selected="false">Cleaning Services</button>
                    </li>
                    <!-- <li class="nav-item" role="presentation">
                      <button class="nav-link " id="pills-trucks-tab" data-bs-toggle="pill" data-bs-target="#pills-trucks" type="button" role="tab" aria-controls="pills-trucks" aria-selected="false">Trucks</button>
                    </li>
                    <li class="nav-item" role="presentation">
                      <button class="nav-link " id="pills-motorsports-tab" data-bs-toggle="pill" data-bs-target="#pills-motorsports" type="button" role="tab" aria-controls="pills-motorsports" aria-selected="false">Motorsports</button>
                    </li>
                    <li class="nav-item" role="presentation">
                      <button class="nav-link " id="pills-accesssories-tab" data-bs-toggle="pill" data-bs-target="#pills-accesssories" type="button" role="tab" aria-controls="pills-accesssories" aria-selected="false">Personal Care</button>
                    </li>
                      <li class="nav-item" role="presentation">
                      <button class="nav-link " id="pills-services-tab" data-bs-toggle="pill" data-bs-target="#pills-services" type="button" role="tab" aria-controls="pills-services" aria-selected="false">Services</button>
                    </li> -->
                  </ul>
                  <div class="adss_bg_stylehome1">
                    <div class="tab-content" id="pills-tabContent">
                      <div class="tab-pane fade show active" id="pills-allstatus" role="tabpanel" aria-labelledby="pills-allstatus-tab">
                            <?php include('HomeServices_tab.php'); ?>
                      </div>
                      <div class="tab-pane fade" id="pills-PersonalCare_tab" role="tabpanel" aria-labelledby="pills-PersonalCare_tab-tab">
                                <?php include('PersonalCare_tab.php'); ?>
                      </div>
                      <div class="tab-pane fade" id="pills-SmartHome_tab" role="tabpanel" aria-labelledby="pills-SmartHome_tab-tab">
                                <?php include('SmartHome_tab.php'); ?>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Car Category -->
  <section class="car-category mobile_space bgc-f9 z-2 pb100">
    <div class="container">
      <div class="row icons_box_home" >
        
                <div class="col-6 col-sm-6 col-md-4 col-lg col-xl wow fadeInUp " data-wow-duration="1s" data-wow-delay="0.1s">
                  <div class="category_item imageBorder">
                    <a href="HomeServices.php">
                    <div class="thumb  ">
                      <img  loading="lazy" src="images/icon/home-service.webp" alt=""/>
                    </div>
                    <div class="details">
                      <p class="title">Home Services</p>
                    </div>
                    </a>
                  </div>
                </div>
                  
               
                 <div class="col-6 col-sm-6 col-md-4 col-lg col-xl wow fadeInUp " data-wow-duration="1s" data-wow-delay="0.1s">
                  <div class="category_item imageBorder">
                  <a href="CleaningServices.php">
                    <div class="thumb ">
                      <img  loading="lazy" src="images/icon/smartHome.png" alt=""/>
                    </div>
                    <div class="details">
                      <p class="title">Cleaning Services</p>
                    </div>
                    </a>
                  </div>
                </div>

                   <div class="col-6 col-sm-6 col-md-4 col-lg col-xl wow fadeInUp " data-wow-duration="1s" data-wow-delay="0.1s">
                  <div class="category_item imageBorder" >
                  <a href="PersonalCare.php">
                    <div class="thumb ">
                      <img  loading="lazy" src="images/icon/card-personal-care.png" alt=""/>
                    </div>
                    <div class="details" style="margin-top:5px;">
                      <p class="title">Personal Care</p>
                    </div>
                  </a>
                  </div>
                </div>
                <!-- <div class="col-6 col-sm-6 col-md-4 col-lg col-xl wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.1s">
                  <div class="category_item">
                  <a href="trucks_listings.php">
                    <div class="thumb">
                      <img loading="lazy" src="images/icon/truck.png" alt=""/>
                    </div>
                    <div class="details">
                      <p class="title">Truck</p>
                    </div>
                  </a>
                  </div>
                </div>
                <div class="col-6 col-sm-6 col-md-4 col-lg col-xl wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.1s">
                  <div class="category_item">
                  <a href="motorsports_listings.php">
                    <div class="thumb">
                      <img loading="lazy" src="images/icon/motor_sports1.png" alt=""/>
                    </div>
                    <div class="details">
                      <p class="title">Motorsports</p>
                    </div>
                  </a>
                  </div>
                </div>
                <div class="col-6 col-sm-6 col-md-4 col-lg col-xl wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.1s">
                  <div class="category_item">
                  <a href="PersonalCare.php">
                    <div class="thumb">
                      <img loading="lazy" src="images/icon/accs.jpg" alt=""/>
                    </div>
                    <div class="details">
                      <p class="title">Personal Care</p>
                    </div>
                    </a>
                  </div>
                </div>
                <div class="col-6 col-sm-6 col-md-4 col-lg col-xl wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.1s">
                  <div class="category_item">
                                      <a href="HomeServices.php">
                    <div class="thumb">
                      <img loading="lazy" src="images/icon/services.jpg" alt=""/>
                    </div>
                    <div class="details">
                      <p class="title"><a href="#">Services</a></p>
                    </div>
                    </a>
                  </div>
                </div> -->
      </div>
    </div>
  </section>

   <!-- Featured Product  -->
  <section class="featured-product">
    <div class="container featured_container">
      <div class="row justify-content-center">
        <div class="col-lg-8">
          <div class="main-title text-center">
            <h2>Featured Listings</h2>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-12">
          <div class="popular_listing_sliders row">
            <!-- Nav tabs -->
            <div class="nav nav-tabs col-lg-12 justify-content-center" role="tablist" style="height: auto;">
              <button class="nav-link active" id="nav-HomeServices-tab" data-bs-toggle="tab" data-bs-target="#nav-HomeServices" role="tab" aria-controls="nav-HomeServices" aria-selected="false">Home Services</button>
              <button class="nav-link" id="nav-smart-home-tab" data-bs-toggle="tab" data-bs-target="#nav-smart-home" role="tab" aria-controls="nav-smart-home" aria-selected="false">Cleaning Services</button>
                         <button class="nav-link" id="nav-PersonalCare-tab" data-bs-toggle="tab" data-bs-target="#nav-PersonalCare" role="tab" aria-controls="nav-PersonalCare" aria-selected="false">Personal Care</button>

            </div>
            <!-- Tab panes -->
            <div class="tab-content col-lg-12" id="nav-tabContent">
              
              <div class="tab-pane fade show active" id="nav-HomeServices" role="tabpanel" aria-labelledby="nav-HomeServices-tab">
                <div class="row">
                <?php
                  $select = "select * from listings where is_active=1 and featured=1 and listing_type=0 order by id asc LIMIT 8";
                  $q_run =  mysqli_query($con,$select);
                    if(mysqli_num_rows($q_run)>0){
                        while($data =  mysqli_fetch_assoc($q_run)){
                            $images_url = json_decode($data['images_url']);
                        ?>
                        <div class="col-sm-12 col-xl-3">
                        <a href="listing_view.php?id=<?php echo $data['id']; ?>">
                            <div class="car-listing" style="border: 1px solid #F85C1E;">
                              <div class="thumb">
                               <?php
                                if($data['is_sold']==1){                                
                                ?>
                                <div class="tag">SOLD</div>
                                <?php
                                }
                                if(count($images_url)>0){                                
                                ?>
                                <img loading="lazy" style="width: 100%; max-width: 100%; height: auto;" src="<?php echo getServerURL(); ?>admin/listing_images/<?php echo $images_url[0]; ?>" alt="<?php echo $images_url[0]; ?>" />
                                <?php
                                }else{
                                ?>
                                <img loading="lazy" src="images/listing/1.jpg" alt="1.jpg">
                                <?php
                                }
                                ?>
                                <div class="thmb_cntnt2">
                                </div>
                                <div class="thmb_cntnt3">
                                </div>
                              </div>
                              <div class="details">
                                <div class="wrapper">
                                  <?php
                                        if(isset($data['price']) && $data['price']!=""){
                                    ?>
                                  <h5 class="price">$<?php echo $data['price']; ?> <i class="fa-solid fa-shield-check" style="color: green;"></i></h5>
                                  <?php
                                    }
                                  ?>
                                  <h6 class="title"><?php echo DBout($data['listing_title']); ?></h6>
                                </div>
                                <div class="listing_footer">
                                  <ul class="mb0">
                                  <?php
                                    if(isset($data['mileage']) && $data['mileage']!=0){    
                                    ?>
                                    <li class="list-inline-item"><a href="#"><span class="flaticon-road-perspective me-2"></span><?php echo $data['mileage']; ?></a></li>
                                    <?php
                                    }
                                    if(isset($data['transmission']) && $data['transmission']!=""){    
                                    ?>
                                    <li class="list-inline-item"><a href="#"><span class="flaticon-gear me-2"></span><?php echo $data['transmission']; ?></a></li>
                                    <?php
                                    }
                                    ?>
                                    <li class="list-inline-item"><a href="#"><span class="flaticon-eye vam me-2"></span><?php echo $data['visit_count']; ?></a></li>
                                  </ul>
                                </div>
                              </div>
                            </div>
                            </a>
                        </div>
                        <?php
                        }
                    }
                  ?>
                </div>
                
                <div class="row mt20">
                    <div class="col-lg-12">
                      <div class="text-center">
                        <a href="HomeServices.php" class="more_listing">Show All Home Services <span class="icon"><span class="fas fa-plus"></span></span></a>
                      </div>
                    </div>
                  </div>
              </div>


               <div class="tab-pane fade" id="nav-PersonalCare" role="tabpanel" aria-labelledby="nav-PersonalCare-tab">
                <div class="row">
                <?php
                  $select = "select * from listings where is_active=1 and featured=1 and listing_type=2 order by id asc LIMIT 8";
                  $q_run =  mysqli_query($con,$select);
                    if(mysqli_num_rows($q_run)>0){
                        while($data =  mysqli_fetch_assoc($q_run)){
                            $images_url = json_decode($data['images_url']);
                        ?>
                        <div class="col-sm-12 col-xl-3">
                        <a href="listing_view.php?id=<?php echo $data['id']; ?>">
                            <div class="car-listing" style="border: 1px solid #F85C1E;">
                              <div class="thumb">
                               <?php
                                if($data['is_sold']==1){                                
                                ?>
                                <div class="tag">SOLD</div>
                                <?php
                                }
                                if(count($images_url)>0){                                
                                ?>
                                <img loading="lazy" style="width: 100%; max-width: 100%; height: auto;" src="<?php echo getServerURL(); ?>admin/listing_images/<?php echo $images_url[0]; ?>" alt="<?php echo $images_url[0]; ?>" />
                                <?php
                                }else{
                                ?>
                                <img loading="lazy" src="images/listing/1.jpg" alt="1.jpg">
                                <?php
                                }
                                ?>
                                <div class="thmb_cntnt2">
                                </div>
                                <div class="thmb_cntnt3">
                                </div>
                              </div>
                              <div class="details">
                                <div class="wrapper">
                                  <?php
                                        if(isset($data['price']) && $data['price']!=""){
                                    ?>
                                  <h5 class="price">$<?php echo $data['price']; ?> <i class="fa-solid fa-shield-check" style="color: green;"></i></h5>
                                  <?php
                                    }
                                  ?>
                                  <h6 class="title"><?php echo DBout($data['listing_title']); ?></h6>
                                </div>
                                <div class="listing_footer">
                                  <ul class="mb0">
                                  <?php
                                    if(isset($data['mileage']) && $data['mileage']!=0){    
                                    ?>
                                    <li class="list-inline-item"><a href="#"><span class="flaticon-road-perspective me-2"></span><?php echo $data['mileage']; ?></a></li>
                                    <?php
                                    }
                                    if(isset($data['transmission']) && $data['transmission']!=""){    
                                    ?>
                                    <li class="list-inline-item"><a href="#"><span class="flaticon-gear me-2"></span><?php echo $data['transmission']; ?></a></li>
                                    <?php
                                    }
                                    ?>
                                    <li class="list-inline-item"><a href="#"><span class="flaticon-eye vam me-2"></span><?php echo $data['visit_count']; ?></a></li>
                                  </ul>
                                </div>
                              </div>
                            </div>
                            </a>
                        </div>
                        <?php
                        }
                    }
                  ?>
                </div>
                
                <div class="row mt20">
                    <div class="col-lg-12">
                      <div class="text-center">
                        <a href="PersonalCare.php" class="more_listing">Show All Personal Care <span class="icon"><span class="fas fa-plus"></span></span></a>
                      </div>
                    </div>
                  </div>
              </div>



                  <div class="tab-pane fade" id="nav-smart-home" role="tabpanel" aria-labelledby="nav-smart-home-tab">
                <div class="row">
                <?php
                  $select = "select * from listings where is_active=1 and featured=1 and listing_type=1 order by id asc LIMIT 8";
                  $q_run =  mysqli_query($con,$select);
                    if(mysqli_num_rows($q_run)>0){
                        while($data =  mysqli_fetch_assoc($q_run)){
                            $images_url = json_decode($data['images_url']);
                        ?>
                        <div class="col-sm-12 col-xl-3">
                        <a href="listing_view.php?id=<?php echo $data['id']; ?>">
                            <div class="car-listing" style="border: 1px solid #F85C1E;">
                              <div class="thumb">
                               <?php
                                if($data['is_sold']==1){                                
                                ?>
                                <div class="tag">SOLD</div>
                                <?php
                                }
                                if(count($images_url)>0){                                
                                ?>
                                <img loading="lazy" style="width: 100%; max-width: 100%; height: auto;" src="<?php echo getServerURL(); ?>admin/listing_images/<?php echo $images_url[0]; ?>" alt="<?php echo $images_url[0]; ?>" />
                                <?php
                                }else{
                                ?>
                                <img loading="lazy" src="images/listing/1.jpg" alt="1.jpg">
                                <?php
                                }
                                ?>
                                <div class="thmb_cntnt2">
                                </div>
                                <div class="thmb_cntnt3">
                                </div>
                              </div>
                              <div class="details">
                                <div class="wrapper">
                                  <?php
                                        if(isset($data['price']) && $data['price']!=""){
                                    ?>
                                  <h5 class="price">$<?php echo $data['price']; ?> <i class="fa-solid fa-shield-check" style="color: green;"></i></h5>
                                  <?php
                                    }
                                  ?>
                                  <h6 class="title"><?php echo DBout($data['listing_title']); ?></h6>
                                </div>
                                <div class="listing_footer">
                                  <ul class="mb0">
                                  <?php
                                    if(isset($data['mileage']) && $data['mileage']!=0){    
                                    ?>
                                    <li class="list-inline-item"><a href="#"><span class="flaticon-road-perspective me-2"></span><?php echo $data['mileage']; ?></a></li>
                                    <?php
                                    }
                                    if(isset($data['transmission']) && $data['transmission']!=""){    
                                    ?>
                                    <li class="list-inline-item"><a href="#"><span class="flaticon-gear me-2"></span><?php echo $data['transmission']; ?></a></li>
                                    <?php
                                    }
                                    ?>
                                    <li class="list-inline-item"><a href="#"><span class="flaticon-eye vam me-2"></span><?php echo $data['visit_count']; ?></a></li>
                                  </ul>
                                </div>
                              </div>
                            </div>
                            </a>
                        </div>
                        <?php
                        }
                    }
                  ?>
                </div>
                
                <div class="row mt20">
                    <div class="col-lg-12">
                      <div class="text-center">
                        <a href="CleaningServices.php" class="more_listing">Show All Cleaning Services <span class="icon"><span class="fas fa-plus"></span></span></a>
                      </div>
                    </div>
                  </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  
  

   <!-- Top Rated  Services  -->
  <section class="featured-product">
    <div class="container featured_container">
      <div class="row justify-content-center">
        <div class="col-lg-8">
          <div class="main-title text-center">
            <h2>Top-Rated Services</h2>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-12">
          <div class="popular_listing_sliders row">
            <!-- Nav tabs -->
            <div class="nav nav-tabs col-lg-12 justify-content-center" role="tablist" style="height: auto;">
              <button class="nav-link active" id="proVerified-HomeServices-tab" data-bs-toggle="tab" data-bs-target="#proVerified-HomeServices" role="tab" aria-controls="proVerified-HomeServices" aria-selected="false">Home Services</button>
              <button class="nav-link" id="proVerified-smart-home-tab" data-bs-toggle="tab" data-bs-target="#proVerified-smart-home" role="tab" aria-controls="proVerified-smart-home" aria-selected="false">Cleaning Services</button>
                          <button class="nav-link" id="proVerified-PersonalCare-tab" data-bs-toggle="tab" data-bs-target="#proVerified-PersonalCare" role="tab" aria-controls="proVerified-PersonalCare" aria-selected="false">Personal Care</button>
            </div>
            <!-- Tab panes -->
            <div class="tab-content col-lg-12" id="nav-tabContent">
              
              <div class="tab-pane fade show active" id="proVerified-HomeServices" role="tabpanel" aria-labelledby="proVerified-HomeServices-tab">
                <div class="row">
                <?php
                  $select = "select * from listings where is_active=1 and pro_verified=1 and listing_type=0 order by id asc LIMIT 8";
                  $q_run =  mysqli_query($con,$select);
                    if(mysqli_num_rows($q_run)>0){
                        while($data =  mysqli_fetch_assoc($q_run)){
                            $images_url = json_decode($data['images_url']);
                        ?>
                        <div class="col-sm-12 col-xl-3">
                        <a href="listing_view.php?id=<?php echo $data['id']; ?>">
                            <div class="car-listing" style="border: 1px solid #F85C1E;">
                              <div class="thumb">
                               <?php
                                if($data['is_sold']==1){                                
                                ?>
                                <div class="tag">SOLD</div>
                                <?php
                                }
                                if(count($images_url)>0){                                
                                ?>
                                <img loading="lazy" style="width: 100%; max-width: 100%; height: auto;" src="<?php echo getServerURL(); ?>admin/listing_images/<?php echo $images_url[0]; ?>" alt="<?php echo $images_url[0]; ?>" />
                                <?php
                                }else{
                                ?>
                                <img loading="lazy" src="images/listing/1.jpg" alt="1.jpg">
                                <?php
                                }
                                ?>
                                <div class="thmb_cntnt2">
                                </div>
                                <div class="thmb_cntnt3">
                                </div>
                              </div>
                              <div class="details">
                                <div class="wrapper">
                                  <div style="display:flex;justify-content:space-between">
                                  <?php
                                        if(isset($data['price']) && $data['price']!=""){
                                    ?>
                                  <h5 class="price">$<?php echo $data['price']; ?> <i class="fa-solid fa-shield-check" style="color: green;"></i>
                                        </h5>
                                  <?php
                                    }
                                  ?>
                              <h5 style="color: black;">
    <?php
    if($data['pro_verified']==1){
        echo '<span style="font-style: italic; font-size: 24px; font-family: YourChosenFont;">Pro</span> Verified';
    } else {
        echo "";
    }
    ?>
</h5>

                                  </div>
                                  <h6 class="title"><?php echo DBout($data['listing_title']); ?></h6>
                                </div>
                                <div class="listing_footer">
                                  <ul class="mb0">
                                  <?php
                                    if(isset($data['mileage']) && $data['mileage']!=0){    
                                    ?>
                                    <li class="list-inline-item"><a href="#"><span class="flaticon-road-perspective me-2"></span><?php echo $data['mileage']; ?></a></li>
                                    <?php
                                    }
                                    if(isset($data['transmission']) && $data['transmission']!=""){    
                                    ?>
                                    <li class="list-inline-item"><a href="#"><span class="flaticon-gear me-2"></span><?php echo $data['transmission']; ?></a></li>
                                    <?php
                                    }
                                    ?>
                                    <li class="list-inline-item"><a href="#"><span class="flaticon-eye vam me-2"></span><?php echo $data['visit_count']; ?></a></li>
                                  </ul>
                                </div>
                              </div>
                            </div>
                            </a>
                        </div>
                        <?php
                        }
                    }
                  ?>
                </div>
                
                <div class="row mt20">
                    <div class="col-lg-12">
                      <div class="text-center">
                        <a href="HomeServices.php" class="more_listing">Show All Home Services <span class="icon"><span class="fas fa-plus"></span></span></a>
                      </div>
                    </div>
                  </div>
              </div>


               <div class="tab-pane fade" id="proVerified-PersonalCare" role="tabpanel" aria-labelledby="proVerified-PersonalCare-tab">
                <div class="row">
                <?php
                  $select = "select * from listings where is_active=1 and pro_verified=1 and listing_type=2 order by id asc LIMIT 8";
                  $q_run =  mysqli_query($con,$select);
                    if(mysqli_num_rows($q_run)>0){
                        while($data =  mysqli_fetch_assoc($q_run)){
                            $images_url = json_decode($data['images_url']);
                        ?>
                        <div class="col-sm-12 col-xl-3">
                        <a href="listing_view.php?id=<?php echo $data['id']; ?>">
                            <div class="car-listing" style="border: 1px solid #F85C1E;">
                              <div class="thumb">
                               <?php
                                if($data['is_sold']==1){                                
                                ?>
                                <div class="tag">SOLD</div>
                                <?php
                                }
                                if(count($images_url)>0){                                
                                ?>
                                <img loading="lazy" style="width: 100%; max-width: 100%; height: auto;" src="<?php echo getServerURL(); ?>admin/listing_images/<?php echo $images_url[0]; ?>" alt="<?php echo $images_url[0]; ?>" />
                                <?php
                                }else{
                                ?>
                                <img loading="lazy" src="images/listing/1.jpg" alt="1.jpg">
                                <?php
                                }
                                ?>
                                <div class="thmb_cntnt2">
                                </div>
                                <div class="thmb_cntnt3">
                                </div>
                              </div>
                              <div class="details">
                                <div class="wrapper">
                                  <?php
                                        if(isset($data['price']) && $data['price']!=""){
                                    ?>
                                  <h5 class="price">$<?php echo $data['price']; ?> <i class="fa-solid fa-shield-check" style="color: green;"></i></h5>
                                  <?php
                                    }
                                  ?>
                                  <h6 class="title"><?php echo DBout($data['listing_title']); ?></h6>
                                </div>
                                <div class="listing_footer">
                                  <ul class="mb0">
                                  <?php
                                    if(isset($data['mileage']) && $data['mileage']!=0){    
                                    ?>
                                    <li class="list-inline-item"><a href="#"><span class="flaticon-road-perspective me-2"></span><?php echo $data['mileage']; ?></a></li>
                                    <?php
                                    }
                                    if(isset($data['transmission']) && $data['transmission']!=""){    
                                    ?>
                                    <li class="list-inline-item"><a href="#"><span class="flaticon-gear me-2"></span><?php echo $data['transmission']; ?></a></li>
                                    <?php
                                    }
                                    ?>
                                    <li class="list-inline-item"><a href="#"><span class="flaticon-eye vam me-2"></span><?php echo $data['visit_count']; ?></a></li>
                                  </ul>
                                </div>
                              </div>
                            </div>
                            </a>
                        </div>
                        <?php
                        }
                    }
                  ?>
                </div>
                
                <div class="row mt20">
                    <div class="col-lg-12">
                      <div class="text-center">
                        <a href="PersonalCare.php" class="more_listing">Show All Personal Care <span class="icon"><span class="fas fa-plus"></span></span></a>
                      </div>
                    </div>
                  </div>
              </div>



                  <div class="tab-pane fade" id="proVerified-smart-home" role="tabpanel" aria-labelledby="proVerified-smart-home-tab">
                <div class="row">
                <?php
                  $select = "select * from listings where is_active=1 and pro_verified=1 and listing_type=1 order by id asc LIMIT 8";
                  $q_run =  mysqli_query($con,$select);
                    if(mysqli_num_rows($q_run)>0){
                        while($data =  mysqli_fetch_assoc($q_run)){
                            $images_url = json_decode($data['images_url']);
                        ?>
                        <div class="col-sm-12 col-xl-3">
                        <a href="listing_view.php?id=<?php echo $data['id']; ?>">
                            <div class="car-listing" style="border: 1px solid #F85C1E;">
                              <div class="thumb">
                               <?php
                                if($data['is_sold']==1){                                
                                ?>
                                <div class="tag">SOLD</div>
                                <?php
                                }
                                if(count($images_url)>0){                                
                                ?>
                                <img loading="lazy" style="width: 100%; max-width: 100%; height: auto;" src="<?php echo getServerURL(); ?>admin/listing_images/<?php echo $images_url[0]; ?>" alt="<?php echo $images_url[0]; ?>" />
                                <?php
                                }else{
                                ?>
                                <img loading="lazy" src="images/listing/1.jpg" alt="1.jpg">
                                <?php
                                }
                                ?>
                                <div class="thmb_cntnt2">
                                </div>
                                <div class="thmb_cntnt3">
                                </div>
                              </div>
                              <div class="details">
                                <div class="wrapper">
                                  <?php
                                        if(isset($data['price']) && $data['price']!=""){
                                    ?>
                                  <h5 class="price">$<?php echo $data['price']; ?> <i class="fa-solid fa-shield-check" style="color: green;"></i></h5>
                                  <?php
                                    }
                                  ?>
                                  <h6 class="title"><?php echo DBout($data['listing_title']); ?></h6>
                                </div>
                                <div class="listing_footer">
                                  <ul class="mb0">
                                  <?php
                                    if(isset($data['mileage']) && $data['mileage']!=0){    
                                    ?>
                                    <li class="list-inline-item"><a href="#"><span class="flaticon-road-perspective me-2"></span><?php echo $data['mileage']; ?></a></li>
                                    <?php
                                    }
                                    if(isset($data['transmission']) && $data['transmission']!=""){    
                                    ?>
                                    <li class="list-inline-item"><a href="#"><span class="flaticon-gear me-2"></span><?php echo $data['transmission']; ?></a></li>
                                    <?php
                                    }
                                    ?>
                                    <li class="list-inline-item"><a href="#"><span class="flaticon-eye vam me-2"></span><?php echo $data['visit_count']; ?></a></li>
                                  </ul>
                                </div>
                              </div>
                            </div>
                            </a>
                        </div>
                        <?php
                        }
                    }
                  ?>
                </div>
                
                <div class="row mt20">
                    <div class="col-lg-12">
                      <div class="text-center">
                        <a href="CleaningServices.php" class="more_listing">Show All Cleaning Services <span class="icon"><span class="fas fa-plus"></span></span></a>
                      </div>
                    </div>
                  </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  
  <!-- Delivery Divider -->
  <section class="deliver-divider bg-img1" style="background-image: url('images/background/afterListings.jpg') !important; ">
    <div class="container">
      <div class="row">
        <!-- <div class="col-lg-12">
          <div class="posr">
            <div class="home1_divider_video_pop">
              <div class="video_popup_icon">
                <a class="video_popup_btn popup-img popup-youtube" href="https://www.youtube.com/watch?v=R7xbhKIiw4Y">
                  <span class="flaticon-play"></span>
                </a>
              </div>
            </div>
          </div>
        </div> -->
        <div class="col-md-9 col-xl-5">
          <div class="home1_divider_content">
            <h2 class="title">Your Desired Outcome is Just a Call Away</h2>
            <p class="para">Bermuda Servicing Mart provides a range of home services, including home services, personal care and smart home solutions. Our team of professionals is committed to delivering reliable and affordable solutions to meet your needs. Contact us to schedule an appointment and let us take care of the hard work for you.</p>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Our Popular Listing -->
  <section class="popular-listing pb80">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 offset-lg-3">
          <div class="main-title text-center">
            <h2 class="text-white">Popular Listings</h2>
          </div>
        </div>
      </div>
      <div class="col-lg-12">
        <div class="home1_popular_listing">
          <div class="listing_item_4grid_slider dots_none">
            <?php
                $select = "select * from listings where is_active=1 and home_service_type=0  and popular=1 order by RAND() LIMIT 8";
                $q_run =  mysqli_query($con,$select);
                if(mysqli_num_rows($q_run)>0){
                while($data =  mysqli_fetch_assoc($q_run)){
                $images_url = json_decode($data['images_url']);
                ?>
            <div class="item">
            <a href="listing_view.php?id=<?php echo $data['id']; ?>">
              <div class="car-listing">
                <div class="thumb">
                 <?php
                    if($data['is_sold']==1){                                
                    ?>
                    <div class="tag">SOLD</div>
                    <?php
                    }
                    if(count($images_url)>0){                                
                    ?>
                    <img  loading="lazy" style="width: 100%; max-width: 100%; height: auto;" src="<?php echo getServerURL(); ?>admin/listing_images/<?php echo $images_url[0]; ?>" alt="<?php echo $images_url[0]; ?>" />
                    <?php
                    }
                    ?>
                  <div class="thmb_cntnt2">
                    <!--<ul class="mb0">
                      <li class="list-inline-item"><a class="text-white" href="#"><span class="flaticon-photo-camera mr3"></span> 22</a></li>
                      <li class="list-inline-item"><a class="text-white" href="#"><span class="flaticon-play-button mr3"></span> 3</a></li>
                    </ul>-->
                  </div>
                  <div class="thmb_cntnt3">
                    <!--<ul class="mb0">
                      <li class="list-inline-item"><a href="#"><span class="flaticon-shuffle-arrows"></span></a></li>
                      <li class="list-inline-item"><a href="#"><span class="flaticon-heart"></span></a></li>
                    </ul>-->
                  </div>
                </div>
                <div class="details">
                  <div class="wrapper">
                      <?php
                        if(isset($data['price']) && $data['price']!=""){
                    ?>
                    <h5 class="price">$<?php echo $data['price']; ?></h5>
                  <?php
                    }
                  ?>
                    <h6 class="title"><?php echo DBout($data['listing_title']); ?></h6>
                      <div class="listign_review">
                        <ul class="mb0">
                          <!--<li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                          <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                          <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                          <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                          <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                          <li class="list-inline-item"><a href="#">4.7</a></li>-->
                          <!-- <li class="list-inline-item">(684 reviews)</li> -->
                        </ul>
                      </div>
                  </div>
                        <div class="listing_footer">
                          <ul class="mb0">
                              <?php
                                if(isset($data['mileage']) && $data['mileage']!=""){    
                                ?>
                                <li class="list-inline-item"><a href="#"><span class="flaticon-road-perspective me-2"></span><?php echo $data['mileage']; ?></a></li>
                                <?php
                                }
                                if(isset($data['transmission']) && $data['transmission']!=""){    
                                ?>
                                <li class="list-inline-item"><a href="#"><span class="flaticon-gear me-2"></span><?php echo $data['transmission']; ?></a></li>
                                <?php
                                }
                                ?>
                                <li class="list-inline-item"><a href="#"><span class="flaticon-eye vam me-2"></span><?php echo $data['visit_count']; ?></a></li>
                                <!--<li class="list-inline-item"><a href="#"><span class="flaticon-gas-station me-2"></span>Diesel</a></li>-->
                                <!--<li class="list-inline-item"><a href="#"><span class="flaticon-gear me-2"></span>Automatic</a></li>-->
                              </ul>
                        </div>
                </div>
              </div>
              </a>
            </div>
            <?php
                }
            }
            ?>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Funfact -->
  <section class="our-funfact pt100 pb0">
    <div class="container">
      <div class="row">
        <div class="col-sm-6 col-lg-3 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.1s">
          <div class="funfact_one text-center">
            <div class="details">
              <div class="timer">27600</div>
              <p class="ff_title">Pro-Vistors Per Day
</p>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-lg-3 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.3s">
          <div class="funfact_one text-center">
            <div class="details">
              <div class="timer">6500</div>
              <p class="ff_title">Total Services</p>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-lg-3 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.5s">
          <div class="funfact_one text-center">
            <div class="details">
              <div class="timer">8230</div>
              <p class="ff_title">Total Services Provided</p>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-lg-3 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.7s">
          <div class="funfact_one text-center">
            <div class="details">
              <div class="timer">5250</div>
              <p class="ff_title">Vistors Per Day</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>


<style>
.models_car,.models_bike,.models_boat,.models_truck{
    
}

</style>
  
<?php
    include_once("footer.php");
?>
<script>
$(document).ready(function() {
    $('.selectpicker_1').selectpicker();
});
function select_make_by_model(id,type){
    
    if(type=='car'){
        jQuery('.modelscar .models_car').attr("disabled",'dispabled');
        jQuery('.modelscar .model_car_'+id).removeAttr('disabled');
        
    }else if(type=='bike'){
        jQuery('.model_bike .models_bike').attr("disabled",'dispabled');
        jQuery('.model_bike .model_bike_'+id).removeAttr('disabled');
    }else if(type=='boat'){
        jQuery('#model_boats .models_boat').attr("disabled",'dispabled');
        jQuery('#model_boats .model_boat_'+id).removeAttr('disabled');
        
    }else if(type=='truck'){
        jQuery('#model_truck .models_truck').attr("disabled",'dispabled');
        jQuery('#model_truck .model_truck_'+id).removeAttr('disabled');
    }
    else if(type=='motorsports'){
        jQuery('#model_motorsports .models_motorsports').attr("disabled",'dispabled');
        jQuery('#model_motorsports .model_motorsports_'+id).removeAttr('disabled');
    }   
  
}
function select_make_by_model_car(id,type){
    if(type=='car'){
        //jQuery('.modelscar .models_car').css("display","none");
        jQuery('.modelscar .models_car').attr("disabled",'dispabled');
        jQuery('.modelscar .model_car_'+id).removeAttr('disabled');
        
    }
}
</script>