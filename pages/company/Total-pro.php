<?php
    include 'include/header.php';
    
    ?>

    <div class="d-flex">
        <div class="  hero-section-xr ms-auto">
           <div class="p-4">
            
            <div class="d-flex p-3 card mb-4">
              <h2 class="m-auto">Total Products</h2>
            </div>
               <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-2 row-cols-xl-3 row-cols-xxl-4 g-3 g-lg-4 px-4 px-sm-0">
               <?php
               $ids = $_SESSION['id'];
             $Selectquery ="SELECT * FROM product_page  WHERE delete_status = 'active' AND company_id = '$ids'";
    $query = mysqli_query($conn, $Selectquery);
    if($num = mysqli_num_rows($query)){
        
        while($row = mysqli_fetch_assoc($query)){
          $max_price = $row['dis_price'];
          $min_price = $row['price'];
          $percent_increase = number_format((($max_price - $min_price) / $min_price) * 100, 0);
        ?>
                    <!------product------->
                    <div class="col">
                        <div class="card">
                          <div class="d-flex justify-content-between p-3">
                            <p class="lead mb-0">Today's Combo Offer</p>
                            <div
                              class="bg-x1 rounded-circle d-flex align-items-center justify-content-center shadow-1-strong"
                              style="width: 35px; height: 35px;">
                              <p class="text-white mb-0 small">-<?php echo $percent_increase ?></p>
                            </div>
                          </div>
                          <img src="multi_images/<?php echo $row['img']; ?>"
                            class="card-img-top" alt="Laptop" style="height:300px;"/>
                          <div class="card-body">
                            
                
                            <div class="d-flex justify-content-between mb-3">
                              <!-- <h5 class="mb-0"><?php // echo $row['product_name']; ?></h5> -->
                               <h5 class="mb-0"><?php echo $row['product_name']; ?></h5>
                              <h5 class="text-dark mb-0"><?php echo $row['price']; ?></h5>
                            </div>
                            <div class="d-flex justify-content-between">
                                <p class="small"><a href="#!" class="text-muted">Stock</a></p>

                                <!-- <p class="small text-success"><?= $row['status'] == '0'? "In Stack":"Out of Stack" ?></p> -->
                                <?php 
                                    if( $row['status'] == 0){ ?>
                                        <p class="small text-success">In Stack</p>
                                   <?php }else{?>
                                   <p class="small text-danger">Out of Stack</p>
                                   <?PHP } ?>
                              </div>
                            
                             <div class="d-flex justify-content-end">
                                <!---------------edit button---------------------->
                                <a href="edit-product.php?id=<?php echo  $row["product_id"] ?>"> <button class="btn btn-bg-x1 p-2 px-4 m-1"><i class="fa-solid fa-pen-to-square edit-text-button"></i></button></a>
                                <!---------------edit button---------------------->
                                <a href="Single-product.php?id=<?php echo  $row["product_id"] ?>"> <button class="btn bg-x1 border-1 p-2 px-4 m-1 border"><i class="fa-solid fa-eye edit-text-button"></i></button></a>
                             </div> 

                          </div>
                        </div>
                      </div>
                      <?php }} ?>
                        <!------product end------->

                         <!------product------->
                    
                      </div>
                        <!------product end------->

                        

                        <!-------row complete----->
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