<?php
    include 'include/header.php';
    
    ?>

    <div class="d-flex">
        <div class="  hero-section-xr ms-auto">
          <div class="p-4">
            <div class="d-flex">
              <a href="./Products.html" class="color-x1"><p><span class="me-2"><i class="fa-solid fa-arrow-left"></i></span>Back to Products</p></a>
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
                      <div class="thumbnail_images ">
                        <ul id="thumbnail" class="d-block d-sm-flex d-md-block d-xl-flex ps-0">
                       
                            <div class="d-flex">
                            <?php if(isset($multipleImages[0])){?>
                                <li id="multiple_images">
                                <img onclick=changeImage(this) width='70px'  src="../admin/multi_images/<?php echo $row['img']; ?>">
											<?php
											foreach($multipleImages as $list){
			echo "<img onclick=changeImage(this) width='70px' src='../admin/".$pathh.$list."'/>";
											}
											?>
                                </li>
                                <?php } ?>
                            </div>
                        </ul>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="p-3 mt-1 right-side">
                      <div class="d-flex  align-items-center">
                      <h3><b><?php echo $row['product_name']; ?></b></h3> <span class="heart btnX "><i class=" fa-bookmark saveX class_chain fa-regular"></i></span>
            </div>
            <div class="mt-2 pr-3 ">
              <p><b><?php echo $row['subtitle']; ?></b></p>
            </div>
            <h3><b>₹<?php echo $row['price']; ?>.00</b></h3>
                      
                      <div class="mt-3"> <span class="fw-bold">Available :</span>
                        <span class="text-success">
                        <?php 
                                    if( $row['status'] == 0){ ?>
                                        <p class="small text-success">In Stack</p>
                                   <?php }else{?>
                                   <p class="small text-danger">Out of Stack</p>
                                   <?PHP } ?>
                        </span>
                      </div>
                      <div class="mt-2"> <span class="fw-bold">Sold by :</span>
                        <span class="">Nayka private limitade</span>
                      </div>
                      <div class="colors mt-3">
                        <div class="alert alert-primary p-2" role="alert">
                          Get Flat <?php echo $percent_increase ?>% Discount on first order.
                        </div>
                      </div>
                      <div class=" d-flex flex-row mt-4 gap-3">
                         <button class="btn btn-bg-x1 btn-lg">Delete</button>
                        <button class="btn bg-x1 btn-lg">Edit</button>
                      </div>
          
                    </div>
          
                    <div class="row mt-2 mb-3 px-4">
                      <div class="col-12  col-xl-6 d-flex m-2 m-xl-0">
                        <img src="../img/genuine.png" alt="" width="40px" height="40px">
                        <p class="m-auto ms-3 color-x">100% Genuine Products</p>
                      </div>
                      <div class="col-12 col-xl-6 d-flex m-2 m-xl-0">
                        <img src="../img/return-box.png" alt="" width="38px" height="38px">
                        <p class="m-auto ms-3 color-x">Easy Return Policy</p>
                      </div>
          
                    </div>
          
                  </div>
                </div>
                <?php }}} ?>
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
                        <div class="mb-4">
                          <span class="fw-bold">Description : </span>
                          <p class="mt-2"><span><i class="fa-solid fa-arrow-right color-x me-2"></i></span>Lancome Advanced
                            Genifique Face Serum is Lancome's #1 serum for all women, all ages, all skin types and tones. This
                            serum strengthens the skin's moisture barrier in one drop. A strong skin moisture barrier helps to
                            lock in hydration and defend against external aggressors including pollution, cold, and dry weather.
                            Formulated with 10% Bifidus Prebiotic, Hyaluronic Acid, and Vitamin Cg this anti-aging serum helps to
                            improve the look of dull skin and the signs of aging for visibly glowing skin.</p>
                          <p class="mt-2"><span><i class="fa-solid fa-arrow-right color-x me-2"></i></span>Lancome Advanced
                            Genifique Face Serum is Lancome's #1 serum for all women, all ages, all skin types and tones. This
                            serum strengthens the skin's moisture barrier in one drop. A strong skin moisture barrier helps to
                            lock in hydration and defend against external aggressors including pollution, cold, and dry weather.
                            Formulated with 10% Bifidus Prebiotic, Hyaluronic Acid, and Vitamin Cg this anti-aging serum helps to
                            improve the look of dull skin and the signs of aging for visibly glowing skin.</p>
                        </div>
          
                        <div class="mt-2"> <span class="fw-bold">Expiry Date : </span>
                          <span class="">January 2025</span>
                        </div>
                        <div class="mt-1"> <span class="fw-bold">Country of Origin :</span>
                          <span class=""> France</span>
                        </div>
                        <div class="mt-1"> <span class="fw-bold">Sold by :</span>
                          <span class="">Nayka private limitade</span>
                        </div>
                        <div class="mt-2"> <span class="fw-bold">Address :</span>
                          <span class="">Fapagau Et Compagnie 4, Rue Jules Vercruysse Fr-02430 Gauchy, France</span>
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
                            Lauryl Sulfate, Sodium Laureth Sulfate, Sodium Chloride, Cocamidopropyl Betaine, Glycol Distearate,
                            Dimethicone, Sodium Citrate, Citric Acid, Cocamide MEA, Sodium Xylenesulfonate, Fragrance/Parfum,
                            Sodium Benzoate, Panthenol, Glycerin, Salicylic Acid, Tetrasodium EDTA, Trisodium Ethylenediamine
                            Disuccinate, Guar Hydroxypropyltrimonium Chloride, Methylparaben, Sodium Hydroxide, Limonene, Benzyl
                            Salicylate, Hexyl Cinnamal, Linalool, Lycium Barbarum Fruit Extract, Oleic Acid, Lactic Acid,
                            Potassium Sorbate, Magnesium Nitrate, Methylchloroisothiazolinone, Magnesium Chloride,
                            Methylisothiazolinone</p>
                        </div>
                      </div>
                    </div>
                    <!-----------------------ing----------------------->
                  </div>
          
                 
                </div>
                <!-- Tabs content -->
             
          
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


    <!-------------------------------------------------------------------------------------------->
    <!-- MDB -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.2.0/mdb.min.js"></script>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF"
        crossorigin="anonymous"></script>
    <script src="../js/margin.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="../js/sales.js"></script>
    <script src="../js/tables.js"></script>
    <script src="../js/single_p.js"></script>
</body>

</html>