<?php
    include_once("header_dashboard.php");
    $array = array('Home Services','Personal Care','Trucks','Cleaning Services','Personal Care','Motorsports');
?>
	<!-- Our Dashbord -->
	<section class="our-dashbord dashbord bgc-f9">
		<div class="container-fluid">
			<div class="row">
				<div class="col-xxl-10 offset-xxl-2 dashboard_grid_space">
                <!----INC SIDEBAR------>
                   <?php include_once("sidebar.php"); ?>
                <!-----END INC SIDEBAR----->
					<div class="row">
						<div class="col-xl-8">
              <div class="breadcrumb_content mb50">
                <h2 class="breadcrumb_title">Categories</h2>
                <p>Ready to jump back in!</p>
                <a href="add_category.php" class="btn btn-primary">Add Category</a>
              </div>
						</div>
					</div>
                  <div class="row">
                        <?php
                          if(isset($_SESSION['succes_sc'])){
                            ?>
                                <div class="alert alart_style_four alert-dismissible fade show" role="alert">
                                    <?php echo $_SESSION['succes_sc']; ?>
                                </div>
                            <?php
                            unset($_SESSION['succes_sc']);
                            }
                             if(isset($_SESSION['error_ocr'])){
                                ?>
                                    <div class="alert alart_style_three alert-dismissible fade show" role="alert">
                                        <?php echo $_SESSION['error_ocr']; ?>
                                    </div>
                                <?php
                                unset($_SESSION['error_ocr']);
                            }
                      ?>
                  </div>
                  <div class="row">
                    <table class="table">
                      <thead>
                        <tr>
                          <th scope="col">#</th>
                          <th scope="col">Category Title</th>
                          <th scope="col">Image</th>
                          <th scope="col">Type</th>
                          <th scope="col">Action</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php
                         if (isset($_GET['page_no']) && $_GET['page_no']!="") {
                                $page_no = $_GET['page_no'];
                            } else {
                                $page_no = 1;
                        }
                        $total_records_per_page = 10;                        
                        $offset = ($page_no-1) * $total_records_per_page;
                        $previous_page = $page_no - 1;
                        $next_page = $page_no + 1;
                        $result_count = mysqli_query(   $con,"SELECT COUNT(*) As total_records FROM `categories`");
                        $total_records = mysqli_fetch_array($result_count);
                        $total_records = $total_records['total_records'];
                        $total_no_of_pages = ceil($total_records / $total_records_per_page);
                        $second_last = $total_no_of_pages - 1; // total pages minus 1
                            
                            $select = "select * from categories  order by id asc LIMIT $offset, $total_records_per_page";
                            //$select = "select * from categories order by title asc";
                            $q_run =  mysqli_query($con,$select);
                            if(mysqli_num_rows($q_run)>0){
                                while($data =  mysqli_fetch_assoc($q_run)){
                                ?>
                                <tr>
                                  <th scope="row"><?php echo $data['id'] ?></th>
                                  <td><?php echo DBout($data['title']); ?></td>
                                  <td>
                                  <?php
                                  if($data['cat_image']!=""){
                                  ?>
                                  <img width="60" src="<?php echo getServerURL(); ?>cat_images/<?php echo $data['cat_image']; ?>" />
                                  <?php } ?>
                                  </td>
                                  <td><?php echo DBout($data['cat_type']); ?></td>
                                  <td>
                                  <a href="edit_category.php?id=<?php echo $data['id']; ?>" class="btn  btn-primary">Edit</a>
                                    <a onclick="return confirm_delete()" href="delete.php?cmd=category&id=<?php echo $data['id']; ?>" class="btn  btn-danger">Delete</a>
                                  </td>
                                </tr>
                                <?php
                                }
                            }
                        ?>
                        
                      </tbody>
                    </table>
                    <?php pagnination_btns($page_no,$previous_page,$total_no_of_pages,$next_page); ?>
                  </div>
				</div>
			</div>
		</div>
	</section>
<?php
include_once("footer.php");
?>