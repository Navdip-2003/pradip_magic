<?php
    include 'include/header.php';
    
    ?>

    <div class="d-flex">
        <div class="  hero-section-xr ms-auto">
          <div class="p-4">
            <div class="d-flex">
              <a href="./Total-pro.php" class="color-x1"><p><span class="me-2"><i class="fa-solid fa-arrow-left"></i></span>Back to Products</p></a>
           </div>
            <div class="card">
              <?php 
              if (isset($_GET['id'])) {
                $product_id = $_GET['id'];
                // $_SESSION['review_product_id'] = $product_id;
                // echo $product_id;
               $Selectquery ="SELECT * FROM product_page WHERE product_id='$product_id'";
          $query = mysqli_query($conn, $Selectquery);
          if($num = mysqli_num_rows($query)){
            
            while($row = mysqli_fetch_assoc($query)){
              $_SESSION['total'] = $row['price'];
              $max_price = $row['dis_price'];
        $min_price = $row['price'];
        $percent_increase = number_format((($max_price - $min_price) / $min_price) * 100, 0);
              // $pid = $row['product_id'];
              // $quentity = $_POST['product_quentity'];
              
              $resMultipleImages=mysqli_query($conn,"select product_images from product_images where product_id='$product_id'");
              $multipleImages=[];
              if(mysqli_num_rows($resMultipleImages)>0){
                while($rowMultipleImages=mysqli_fetch_assoc($resMultipleImages)){
                  $multipleImages[]=$rowMultipleImages['product_images'];
                }
              }
              $pathh = "multi_images/";
            ?>
             
                <div class="row g-0">
                  <div class="col-md-6 border-end">
                    <div class="d-flex flex-column justify-content-center">
                      <div class="main_image"> <img src="multi_images/<?php echo $row['img']; ?>" id="main_product_image" width="350">
                      </div>

                      <div class="thumbnail_images mt-5">
                        <ul id="thumbnail" class="d-block d-sm-flex d-md-block d-xl-flex ps-0">
                       
                            <div class="d-flex">
                            <?php if(isset($multipleImages[0])){?>
                                <div id="multiple_images">
                                <img onclick=changeImage(this) width='70px'  src="../company/multi_images/<?php echo $row['img']; ?>">
											<?php
											foreach($multipleImages as $list){
			echo "<img onclick=changeImage(this) width='70px' src='../company/".$pathh.$list."'/>";
											}
											?>
                                </div>
                                <?php } ?>
                            </div>
                        </ul>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="p-3 mt-1 right-side">
                      <div class="d-flex  align-items-center">
                      <h3><b><?php echo $row['product_name']; ?></b></h3>
            </div>
            <div class="mt-2 pr-3 ">
              <p><b><?php echo $row['subtitle']; ?></b></p>
            </div>
            <h3><b>₹<?php echo $row['price']; ?>.00</b></h3>
                      
                      <div class="mt-3 d-flex align-items-center"> <span class="fw-bold">Available :</span>
                        <span class="text-success ms-2">
                        <?php 
                                    if( $row['status'] == 0){ ?>
                                        <p class="small text-success mb-0">In Stack</p>
                                   <?php }else{?>
                                   <p class="small text-danger mb-0">Out of Stack</p>
                                   <?PHP } ?>
                        </span>
                      </div>
                      <div class="mt-2"> <span class="fw-bold">Sold by :</span>
                        <span class="">Nayka private limitade</span>
                      </div>
                      <div class=" mt-3">
                        <div class=" car  p-2" style="background-color:lightblue;border-radius:5px" role="alert">
                          Get Flat <?php echo $percent_increase ?>% Discount on first order.
                        </div>

                      </div>
                      <div class=" d-flex flex-row mt-4 gap-3">
                      <form action="code.php" method="post">
                        <!-- <input type="hidden" name="product_id" value="<?php // echo $row['product_id']; ?>">
                        <input type="hidden" name="company_id" value="<?php // echo $row['Company_id']; ?>">
                        <input type="hidden" name="company_name" value="<?php // echo $row['company_name']; ?>">
                        <input type="hidden" name="dis_price" value="<?php // echo $row['dis_price']; ?>">
                        <input type="hidden" name="sell_price" value="<?php // echo $row['price']; ?>">
                        <input type="hidden" name="product_name" value="<?php // echo $row['product_name']; ?>">
                        <input type="hidden" name="img" value="<?php // echo $row['img']; ?>">
                        <input type="hidden" name="cat_id" value="<?php // echo $row['cat_id']; ?>">
                        <input type="hidden" name="description" value="<?php // echo $row['description']; ?>">
                        <input type="hidden" name="country" value="<?php // echo $row['country']; ?>">
                        <input type="hidden" name="subtitle" value="<?php // echo $row['subtitle']; ?>">
                        <input type="hidden" name="ingredients" value="<?php // echo $row['Ingredients']; ?>">
                        <input type="hidden" name="address" value="<?php // echo $row['Address']; ?>">
                        <input type="hidden" name="expiry_date" value="<?php // echo $row['expiry_date']; ?>"> -->
														<input type="hidden" name="delete_stauts" value="inactive">
                            <button type="button" class="btn btn-bg-x1 btn-lg delete_product_btn" value="<?php echo $row['product_id']; ?>">Delete</button>
                            </form>
                        <a  href="edit-product.php?id=<?php echo $product_id ?>" class="btn bg-x1 btn-lg">Edit</a>
                      </div>
          
                    </div>
          
                    <div class="row mt-2 mb-3 px-4">
                      <div class="col-12  col-xl-6 d-flex m-2 m-xl-0">
                        <img src="assets/img/genuine.png" alt="" width="40px" height="40px">
                        <p class="m-auto ms-3 color-x">100% Genuine Products</p>
                      </div>
                      <div class="col-12 col-xl-6 d-flex m-2 m-xl-0">
                        <img src="assets/img/return-box.png" alt="" width="38px" height="38px">
                        <p class="m-auto ms-3 color-x">Easy Return Policy</p>
                      </div>
          
                    </div>
          
                  </div>
                </div>
                
                <!--------------------here product section complete----------------------->
                <!--------------------here discription------------------>
                <!-- Tabs navs -->
                <ul class="nav nav-tabs nav-fill mt-3 px-4" id="ex1" role="tablist">
                  <li class="nav-item" role="presentation">
                    <a class="nav-link active" id="ex2-tab-1" data-mdb-toggle="tab" href="#ex2-tabs-1" role="tab"
                      aria-controls="ex2-tabs-1" aria-selected="true">Description</a>
                  </li>
                  <li class="nav-item" role="presentation">
                    <a class="nav-link" id="ex2-tab-2" data-mdb-toggle="tab" href="#ex2-tabs-2" role="tab"
                      aria-controls="ex2-tabs-2" aria-selected="false">Ingredients</a>
                  </li>
                 
                </ul>
                <!-- Tabs navs -->
          
                <!-- Tabs content -->
                <div class="tab-content" id="ex2-content">
                  <div class="tab-pane fade show active" id="ex2-tabs-1" role="tabpanel" aria-labelledby="ex2-tab-1">
                    <!-----------------------description----------------------->
                    <div class="px-4">
                      <div class="des-sec mb-4">
                        <div class="mb-4 mt-4">
                          <span class="fw-bold">Description : </span>
                          <p class="mt-2"><span><i class="fa-solid fa-arrow-right color-x me-2"></i></span><?php echo $row['description']; ?></p>
                        </div>
          
                        <div class="mt-2"> <span class="fw-bold">Expiry Date : </span>
                          <span class=""><?php echo $row['expiry_date']; ?></span>
                        </div>
                        <div class="mt-1"> <span class="fw-bold">Country of Origin :</span>
                          <span class=""> <?php echo $row['country']; ?></span>
                        </div>
                        <div class="mt-1"> <span class="fw-bold">Sold by :</span>
                          <span class=""><?php echo $row['company_name']; ?></span>
                        </div>
                        <div class="mt-2"> <span class="fw-bold">Address :</span>
                          <span class=""><?php echo $row['Address']; ?></span>
                        </div>
          
                      </div>
                    </div>
                    <!-----------------------description----------------------->
                  </div>
          
                  <div class="tab-pane fade" id="ex2-tabs-2" role="tabpanel" aria-labelledby="ex2-tab-2">
                    <!-----------------------ing----------------------->
                    <div class="px-4">
                      <div class="des-sec mb-4">
                        <div>
                          <span class="fw-bold"> Ingredients : </span>
                          <p class="mt-2"><span><i class="fa-solid fa-arrow-right color-x me-2"></i></span>Water/Aqua/Eau, Sodium
                          <?php echo $row['Ingredients']; ?></p>
                        </div>
                      </div>
                    </div>
                    <!-----------------------ing----------------------->
                  </div>
          
                 
                </div>
                <!-- Tabs content -->
             
                <?php }}} ?>
              </div>
          </div>
        </div>
    </div>

    <!------------left nevbar ---------------------->


    <!----------small screen nevbar--------------->


    <div class="offcanvas offcanvas-start wide-x" tabindex="-1" id="offcanvasExample"
        aria-labelledby="offcanvasExampleLabel">


        <!---------smaller left nevbar----------->
        <div class="left-x-nev header d-lg-none">

            <div class="offcanvas-header d-flex ">
                <div class="close-cx ms-auto">
                    <button type="button" class="btn bg-x1 btn-sm button-cx p-0 " data-mdb-dismiss="offcanvas"><i
                            class="fa-solid fa-xmark"></i></button>
                </div>
            </div>
            <div class="p-4 pt-0">
                <a href="">
                    <div class="d-flex p-3 border-bottom  hover-x">
                        <p class="m-auto">Dashbord</p>
                    </div>
                </a>
                <a href="">
                    <div class="d-flex p-3 border-bottom  hover-x">
                        <p class="m-auto">Orders</p>
                    </div>
                </a>
                <a href="">
                    <div class="d-flex p-3 border-bottom  hover-x">
                        <p class="m-auto">Dashbord</p>
                    </div>
                </a>
                <a href="">
                    <div class="d-flex p-3 border-bottom  hover-x">
                        <p class="m-auto">Dashbord</p>
                    </div>
                </a>
                <a href="">
                    <div class="d-flex p-3 border-bottom  hover-x">
                        <p class="m-auto">Dashbord</p>
                    </div>
                </a>
                <a href="">
                    <div class="d-flex p-3 border-bottom  hover-x">
                        <p class="m-auto">Dashbord</p>
                    </div>
                </a>
            </div>
        </div>

    </div>
    <?php include 'include/footer.php'; ?>