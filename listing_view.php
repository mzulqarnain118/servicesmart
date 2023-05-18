<?php
    include_once("header.php");
    if(isset($_GET['id'])){
    $select = "select * from listings where id='".$_GET['id']."'  and is_active=1";
    $q_run =  mysqli_query($con,$select);
    if(mysqli_num_rows($q_run)>0){
        $data =  mysqli_fetch_assoc($q_run);
         mysqli_query($con,"update listings set visit_count=visit_count+1 where id='".$data['id']."'");
?>
  <!-- Agent Single Grid View -->
  <section class="our-agent-single bgc-f9 pb90 mt70-992 pt30">
    <div class="container">
      <div class="row mb30">
        <div class="col-xl-12">
          <div class="breadcrumb_content style2">
            <ol class="breadcrumb float-start">
            </ol>
          </div>
        </div>
      </div>
      <div class="row mb30">
        <div class="col-lg-7 col-xl-8">
          <div class="single_page_heading_content">
            <div class="car_single_content_wrapper">
              <ul class="car_info mb20-md">
                <?php
                
                    if(isset($data['listing_condition']) && $data['listing_condition']!=""){
                ?>
                <li class="list-inline-item"><a href="#"><b>Condition:</b> <?php echo $data['listing_condition']; ?></a></li>
                <?php
                   }
                ?>
                <li class="list-inline-item"><a href="#"><span class="flaticon-clock-1 vam"></span><?php echo date("Y-m-d H:i",strtotime($data['created_date'])); ?></a></li>
                <li class="list-inline-item"><a href="#"><span class="flaticon-eye vam"></span><?php echo $data['visit_count']+1; ?></a></li>
              </ul>
              <h2 class="title"><?php echo DBout($data['listing_title']); ?></h2>
                          </div>
          </div>
        </div>
        <div class="col-lg-5 col-xl-4">
          <div class="single_page_heading_content text-start text-lg-end">
            <div class="share_content">
              <?php
              if(isset($_SESSION['is_login'])){
                    if($data['user_id']==$_SESSION['user_id']){
                        ?>
                        <a class="btn btn-primary" href="admin/edit-listing.php?id=<?php echo $data['id']; ?>">Edit</a>       
                        <?php
                    }
                }
              ?>
            </div>
            <div class="price_content">
            <?php
                if(isset($data['price']) && $data['price']!=""){
            ?>
              <div class="price mt60 mb10 mt10-md"><h3><small class="mr15"></small>$<?php echo $data['price']; ?></h3></div>
              
              <?php
                }
              ?>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-8 col-xl-8">
          <div class="row">
            <div class="col-lg-12">
              <div class="single_product_grid single_page1">
                <div class="single_product_slider">
                  <div class="item">
                    <div class="sps_content">
                      <div class="thumb">
                        <div class="single_product">
                          <div class="single_item">
                            <div class="thumb">
                              <?php
                                if($data['is_sold']==1){                                
                                ?>
                                <div class="tags">SOLD</div>
                                <?php
                                }
                                $images_url = json_decode($data['images_url']);
                                if(count($images_url)>0){
                                    ?>
                                    <img class="img-fluid" src="<?php echo getServerURL(); ?>admin/listing_images/<?php echo $images_url[0]; ?>" alt="<?php echo $images_url[0]; ?>" />
                                    <style>
                                        .single_product_slider.owl-theme .owl-dots .owl-dot:first-child span{
                                              background-image: url("<?php echo getServerURL(); ?>admin/listing_images/<?php echo $images_url[0]; ?>");
                                              background-position: center center;
                                              background-size: cover;
                                              margin-bottom: 12px;
                                              display: none;
                                            }
                                    </style>
                                    <?php
                                }
                                ?>
                            </div>
                          </div>
               
                        </div>
                      </div>
                    </div>
                  </div>
                    
                    <?php
                        $images_url = json_decode($data['images_url']);
                        $i=2;
                        foreach($images_url as $key=>$val){
                            ?>
                            <div class="item">
                                <div class="sps_content">
                                  <div class="thumb">
                                    <div class="single_product">
                                      <div class="single_item">
                                        <div class="thumb">
                                        <?php
                                          if($data['is_sold']==1){                                
                                            ?>
                                            <div class="tags">SOLD</div>
                                            <?php
                                            }?>
                                          <img class="img-fluid" src="<?php echo getServerURL(); ?>admin/listing_images/<?php echo $val; ?>" alt="<?php echo $val; ?>" />
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                 <style>
                                  .single_product_slider.owl-theme .owl-dots .owl-dot:nth-child(<?php echo $i; ?>) span{
                                      background-image: url("<?php echo getServerURL(); ?>admin/listing_images/<?php echo $val; ?>");
                                      background-position: center center;
                                      background-size: cover;
                                      margin-bottom: 12px;
                                    }
                                  </style>
                              </div>
                             
                            <?php
                            $i++;
                        }
                    ?>
                  
                  
                  
                </div>
              </div>
            </div>
   

            <div class="col-lg-12">
              <div class="opening_hour_widgets p30 mt30">
                <div class="wrapper">
                  <h4 class="title">Overview</h4>
                <ul class="list-group">
                   
  <?php  
    if(isset($data['home_service_type']) && $data['home_service_type']!=NULL){
  ?>
  <li class="list-group-item d-flex justify-content-between align-items-start">
    <div class="me-auto">
      <div class="day"> Type</div>
    </div>
    <span class="schedule"><?php echo DBout($data['home_service_type']); ?>(Home Services)</span>
  </li>
  <?php
    }

    if(isset($data['cleaning_service_type']) && $data['cleaning_service_type']!=NULL){
  ?>
  <li class="list-group-item d-flex justify-content-between align-items-start">
    <div class="me-auto">
      <div class="day">Type</div>
    </div>
    <span class="schedule"><?php echo DBout($data['cleaning_service_type']); ?>(Cleaning Service)</span>
  </li>
  <?php
    }

    if(isset($data['personal_care_type']) && $data['personal_care_type']!=NULL){
  ?>
  <li class="list-group-item d-flex justify-content-between align-items-start">
    <div class="me-auto">
      <div class="day">Type</div>
    </div>
    <span class="schedule"><?php echo DBout($data['personal_care_type']); ?>(Personal Care)</span>
  </li>
  <?php
    }
  ?>
                  
</ul>

                </div>
              </div>
            </div>


            <?php
                if(isset($data['verification_file']) && $data['verification_file']!=""){
            ?>
            <div class="col-lg-12">
              <div class="listing_single_description mt30">
                <h4 class="mb30">Verification Sheet </h4>
                <img class="img-fluid" src="<?php echo getServerURL(); ?>admin/verifiied_docs/<?php echo $data['verification_file']; ?>" alt="<?php echo $data['verification_file']; ?>" />
              </div>
            </div>
            <?php
            }
            ?>
            <div class="col-lg-12">
              <div class="listing_single_description mt30">
                <h4 class="mb30">Description <span class="float-end body-color fz13">ID #<?php echo $data['id']; ?></span></h4>
                <p class="first-para">
                    <?php echo nl2br(DBout($data['description'])); ?>
                </p>
                
              </div>
            </div>
           
          </div>
        </div>
          <div class="sidebar_seller_contact">
            <div class="d-flex align-items-center mb30">
              <div class="flex-shrink-0">
                <img class="mr-3 author_img w60" src="images/team/avatar.png" alt="author.png">
              </div>
              <div class="flex-grow-1 ms-3">
                <?php
                
                $select = "select f_name,l_name,mobile_number from users where id='".mysqli_real_escape_string($con,$data['user_id'])."'";
                $q_run = mysqli_query($con,$select) or die(mysqli_error($con));
                $user_detail = mysqli_fetch_assoc($q_run);
                ?>
                <h5 class="mt0 mb5 fz16 heading-color fw600"><?php echo $user_detail['f_name']." ".$user_detail['l_name']; ?></h5>
                <?php
                if($user_detail['mobile_number']){
                    if(isset($_SESSION['is_login'])){
                ?>
                <p class="mb0 tdu"><span class="flaticon-phone-call pr5 vam"></span><a href="tel:<?php echo $user_detail['mobile_number']; ?>"><?php echo $user_detail['mobile_number']; ?></a></p>
                <?php
                    }
                }
                ?>
              </div>
              
            </div>
            <?php
                    if(!isset($_SESSION['is_login'])){
                        ?>
                        <div style="clear: both;"></div>
                        
                        <a href="login.php"><button type="button" class="btn btn-block btn-thm mt10 mb20">Login</button></a>
                        <?php
                    }
              ?>
          
          </div>
        </div>
      </div>
    </div>
  </section>
  
  <!-- Our Shopping Product -->
  <section class="our-shop pb100">
    <div class="container">
      <div class="row">
        <div class="col-md-8">
          <div class="main-title text-center text-md-start mb15-sm">
            <h2>Why Choose Us?</h2>
          </div>
        </div>
        <div class="col-md-4">
          <div class="text-center text-md-end mb30-sm">
            <a href="listings.php" class="more_listing">Show All Cars <span class="icon"><span class="fas fa-plus"></span></span></a>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-12">
          <div class="listing_item_4grid_slider nav_none">
            <?php
                $select = "select * from listings where is_active=1 order by RAND() LIMIT 8";
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
<?php
    }
    }
    include_once("footer.php");
?>