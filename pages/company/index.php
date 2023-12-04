<!-- <?php // session_start(); ?> -->
<?php

	// if(!isset($_SESSION['fname'])){
	// 	$_SESSION['msg'] = "please login";
	// 	header('location:../user/ulogin.php');
	// }
	include 'include/header.php';
	?>
<div class="d-flex">
    <div class="  hero-section-xr ms-auto">
        <div class="p-4">

            <div class="row row-cols-1 row-cols-sm-2  row-cols-xl-3  g-3">

                <!----deliverd order----->
                <div class="col px-2">
                    <a href="./deliver-order-table.php">
                        <div class="card  p-3 card-hover-x">
                            <div class="d-flex">
                                <div class="icon-logo blue-star d-flex justify-content-center align-items-center">
                                    <i class="fa-solid fa-bag-shopping "></i>
                                </div>
                                <div class="ms-3">
                                    <p class="fw-semibold color-x1 mb-0">Delivered Orders</p>
                                    <p class="m-0 color-grey">
                                        <?php 
                                            $ids = $_SESSION['id'];
											 $selectquery = mysqli_query($conn, "SELECT COUNT(*) as Status FROM payments,product_page WHERE payments.track_order='Completed' AND payments.Status='success' AND payments.pid = product_page.product_id AND product_page.company_id = '$ids'");
											 $row = mysqli_fetch_assoc($selectquery);
											 echo $row['Status'];
											?>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>

                <!----cancel order----->
                <div class="col px-2">
                    <a href="./returned-order-table.php">
                        <div class="card  p-3 card-hover-x">
                            <div class="d-flex">
                                <div class="icon-logo blue-star d-flex justify-content-center align-items-center">
                                    <i class="fa-solid fa-ban"></i>
                                </div>
                                <div class="ms-3">
                                    <p class="fw-semibold color-x1 mb-0">Cancel Orders</p>
                                    <p class="m-0 color-grey">
                                        <?php
                                            $ids = $_SESSION['id'];
										$selectquery = mysqli_query($conn, "SELECT COUNT(*) as track_order FROM payments,product_page WHERE payments.Status='cancel' AND payments.pid = product_page.product_id AND product_page.company_id = '$ids'");
                                         $row = mysqli_fetch_assoc($selectquery);
                                          echo  $row['track_order'];
										?>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>

                <!----processing order----->
                <div class="col px-2">
                    <a href="./Processing-order-table.php">
                        <div class="card  p-3 card-hover-x">
                            <div class="d-flex">
                                <div class="icon-logo blue-star d-flex justify-content-center align-items-center">
                                    <i class="fa-solid fa-truck"></i>
                                </div>
                                <div class="ms-3">
                                    <p class="fw-semibold color-x1 mb-0">Processing Orders</p>
                                    <p class="m-0 color-grey">
                                        <?php 
											 $selectquery = mysqli_query($conn, "SELECT COUNT(*) as track_order FROM payments,product_page WHERE payments.track_order='Panding' AND payments.pid = product_page.product_id AND product_page.company_id = '$ids'");
											 $row = mysqli_fetch_assoc($selectquery);
											 echo $row['track_order'];
											?>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>

                <!----processing order----->
               

                <!----deliverd order----->
                <div class="col px-2">
                    <a href="./Total-pro.php">
                        <div class="card  p-3 card-hover-x">
                            <div class="d-flex">
                                <div class="icon-logo blue-star d-flex justify-content-center align-items-center">
                                    <i class="fa-solid fa-basket-shopping"></i>
                                </div>
                                <div class="ms-3">
                                    <p class="fw-semibold color-x1 mb-0">Total Products</p>
                                    <p class="m-0 color-grey"><?php 
											 $selectquery = mysqli_query($conn, "SELECT COUNT(*) as track_order FROM payments,product_page WHERE payments.pid = product_page.product_id AND product_page.company_id = '$ids'");
											 $row = mysqli_fetch_assoc($selectquery);
											 echo $row['track_order'];
											?></p>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>

                <!----cancel order----->
                <div class="col px-2">
                    <a href="./Active-pro.php">
                        <div class="card  p-3 card-hover-x">
                            <div class="d-flex">
                                <div class="icon-logo blue-star d-flex justify-content-center align-items-center">
                                    <i class="fa-solid fa-basket-shopping"></i>
                                </div>
                                <div class="ms-3">
                                    <p class="fw-semibold color-x1 mb-0">Active Products</p>
                                    <p class="m-0 color-grey">
                                        <?php 
											 $selectquery = mysqli_query($conn, "SELECT COUNT(*) as trending FROM product_page  WHERE trending=1 AND delete_status = 'active' AND company_id = '$ids'");
											 $row = mysqli_fetch_assoc($selectquery);
											 echo $row['trending'];
											?>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>

                <!----processing order----->
                <div class="col px-2">
                    <a href="./OutFoStock-pro.php">
                        <div class="card  p-3 card-hover-x">
                            <div class="d-flex">
                                <div class="icon-logo blue-star d-flex justify-content-center align-items-center">
                                    <i class="fa-solid fa-basket-shopping"></i>
                                </div>
                                <div class="ms-3">
                                    <p class="fw-semibold color-x1 mb-0">Out Of Stock</p>
                                    <p class="m-0 color-grey">
                                        <?php 
											 $selectquery = mysqli_query($conn, "SELECT COUNT(*) as trending FROM product_page  WHERE trending=0 AND delete_status = 'active' AND company_id = '$ids'");
											 $row = mysqli_fetch_assoc($selectquery);
											 echo $row['trending'];
											?>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>

            </div>



            <div class="">
                <div class="mt-5 row justify-content-center">
                    <div class="col col-xxl-6 col-lg-11 col-xl-9 col-md-9 col-sm-11 col-12">
                        <!-----------weekly report----------->
                        <canvas id="barChart"></canvas>
                    </div>

                    <div class="col col-xxl-6 col-lg-11 col-xl-9 mt-4 mt-xxl-0 col-md-9 col-sm-11 col-12">
                        <div class="card  p-2 px-4 ">
                            <div class="d-flex pb-2 border-bottom">
                                <p class="m-auto color-x1 fw-semibold">Recent (24 hour's) Data</p>
                            </div>

                            <div class="row  row-cols-1 row-cols-sm-2 ">

                                <div class="col g-2 row border-end">
                                    <a href="" class="mt-0 mt-sm-auto ">
                                        <div class=" p-2 card-hover-x">
                                            <div class="d-flex">
                                                <div
                                                    class="icon-logo-1 blue-star d-flex justify-content-center align-items-center">
                                                    <i class="fa-solid fa-bag-shopping "></i>
                                                </div>
                                                <div class="ms-3">
                                                    <p class="fw-semibold color-x1 mb-0">New Orders</p>
                                                    <p class="m-0 color-grey" id="co-order"><?php 
										$selectquery = mysqli_query($conn, "SELECT COUNT(*) as track_order FROM payments,product_page WHERE payments.pid = product_page.product_id AND product_page.company_id = '$ids' AND `order date` >= DATE_SUB( NOW(), INTERVAL 1 DAY)");
										$row = mysqli_fetch_assoc($selectquery);
										echo $row['track_order'];
										
											
											?></p>
                                                </div>
                                            </div>
                                        </div>
                                    </a>

                                    <a href="">
                                        <div class="p-2 card-hover-x">
                                            <div class="d-flex">
                                                <div
                                                    class="icon-logo-1 blue-star d-flex justify-content-center align-items-center">
                                                    <i class="fa-solid fa-rotate-left"></i>
                                                </div>
                                                <div class="ms-3">
                                                    <p class="fw-semibold color-x1 mb-0">Retrun Orders</p>
                                                    <p class="m-0 color-grey" id="co-return"><?php 
														$selectquery = mysqli_query($conn, "SELECT COUNT(track_order) as completed_orders FROM payments WHERE Status='cancel' AND `order date` >= DATE_SUB( NOW(), INTERVAL 1 DAY)");
														$row = mysqli_fetch_assoc($selectquery);
														 echo  $row['completed_orders'];
										                 	?></p>
                                                </div>
                                            </div>
                                        </div>
                                    </a>

                                    <a href="">
                                        <div class="p-2 card-hover-x">
                                            <div class="d-flex">
                                                <div
                                                    class="icon-logo-1 blue-star d-flex justify-content-center align-items-center">
                                                    <i class="fa-solid fa-ban"></i>
                                                </div>
                                                <div class="ms-3">
                                                    <p class="fw-semibold color-x1 mb-0" >Cancel Orders</p>
                                                    <p class="m-0 color-grey" id="co-cancel">
                                                        <?php 
														$selectquery = mysqli_query($conn, "SELECT COUNT(*) as track_order FROM payments,product_page WHERE payments.Status='cancel' AND payments.pid = product_page.product_id AND product_page.company_id = '$ids' AND `order date` >= DATE_SUB( NOW(), INTERVAL 1 DAY)");
														$row = mysqli_fetch_assoc($selectquery);
														 echo  $row['track_order'];
										                 	?>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>

                                <!---------------second column--------------->
                                <div class="col g-2 row">
                                    <a href="" class="mt-0 mt-sm-auto ">
                                        <div class="ms-sm-1 p-2 card-hover-x">
                                            <div class="d-flex">
                                                <div
                                                    class="icon-logo-1 blue-star d-flex justify-content-center align-items-center">
                                                    <i class="fa-solid fa-star"></i>
                                                </div>
                                                <div class="ms-3">
                                                    <p class="fw-semibold color-x1 mb-0">Products Reviews</p>
                                                    <p class="m-0 color-grey"  id="co-review"><?php 
														$selectquery = mysqli_query($conn, "SELECT COUNT(*) as rating_id FROM rating WHERE `create_at` >= DATE_SUB( NOW(), INTERVAL 1 DAY)");
														$row = mysqli_fetch_assoc($selectquery);
														 echo  $row['rating_id'];
										                 	?></p>
                                                </div>
                                            </div>
                                        </div>
                                    </a>

                                    <a href="">
                                        <div class="ms-sm-1 p-2 card-hover-x">
                                            <div class="d-flex">
                                                <div
                                                    class="icon-logo-1 blue-star d-flex justify-content-center align-items-center">
                                                    <i class="fa-solid fa-bookmark"></i>
                                                </div>
                                                <div class="ms-3">
                                                    <p class="fw-semibold color-x1 mb-0">Save Products</p>
                                                    <p class="m-0 color-grey"  id="co-save">
                                                        <?php 
														$selectquery = mysqli_query($conn, "SELECT COUNT(*) as wish_id FROM wishlist,product_page WHERE  wishlist.product_id = product_page.product_id AND product_page.company_id = '$ids' AND wishlist.create_at >= DATE_SUB( NOW(), INTERVAL 1 DAY)");
														$row = mysqli_fetch_assoc($selectquery);
														 echo  $row['wish_id'];
										                 	?>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </a>

                                    <a href="">
                                        <div class="ms-sm-1 p-2 card-hover-x">
                                            <div class="d-flex">
                                                <div
                                                    class="icon-logo-1 blue-star d-flex justify-content-center align-items-center">
                                                    <i class="fa-solid fa-comment"></i>
                                                </div>
                                                <div class="ms-3">
                                                    <p class="fw-semibold color-x1 mb-0" >FeedBacks</p>
                                                    <p class="m-0 color-grey" id="co-feedback"><?php 
														$selectquery = mysqli_query($conn, "SELECT COUNT(*) as complaint_id FROM use_complaint WHERE `create_at` >= DATE_SUB( NOW(), INTERVAL 1 DAY)");
														$row = mysqli_fetch_assoc($selectquery);
														 echo  $row['complaint_id'];
										                 	?></p>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>


                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-------chart complete----->
            <!-- DataTales Example -->
            <div class="card shadow mb-3 mt-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold color-x1">DataTables Example</h6>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th class="blue-star-2">Order Id</th>
                                    <th class="blue-star-2">Name</th>
                                    <th class="blue-star-2">phno</th>
                                    <th class="blue-star-2">Email</th>
                                    <th class="blue-star-2">Order date</th>
                                    <th class="blue-star-2">Status</th>
                                    <th class="blue-star-2">Total</th>
                                    <th class="blue-star-2">view</th>
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <th class=" ">Order Id</th>
                                    <th class=" ">Name</th>
                                    <th class=" ">phno</th>
                                    <th class=" ">Email</th>
                                    <th class=" ">Order date</th>
                                    <th class=" ">Status</th>
                                    <th class=" ">Total</th>
                                    <th class=" ">view</th>
                                </tr>
                            </tfoot>
                            <tbody>
                                <?php   
                            $selectquery =mysqli_query($conn, "SELECT * FROM payments,product_page WHERE payments.pid = product_page.product_id AND product_page.company_id = '$ids' AND `order date` >= DATE_SUB( NOW(), INTERVAL 1 DAY)");
                            if(mysqli_num_rows($selectquery) > 0){
                                        
                                    foreach($selectquery as $item){
                                     $order_id = $item['order_id'];
                                     $p_id = $item['pid'];

                        $payid = $item['payid'];
                        $selectquery =mysqli_query($conn, "SELECT * FROM cart_order_item");
                        if(mysqli_num_rows($selectquery) > 0){
                                    
                                foreach($selectquery as $dat){
                                      
                                     $pid = $dat['pro_id'];}}
                        ?>

                                <tr>
                                    <td><?= $item['txnid']; ?></td>
                                    <td><?= $item['firstname']; ?> <?= $item['lastname']; ?></td>
                                    <td><?= $item['mobile']; ?></td>
                                    <td><?= $item['payer_email']; ?></td>
                                    
                                    <td><?= $item['order date']; ?></td>
                                    <td><span class="bg-process m-0 p-1 px-3 bor-r">processing</span></td>
                                    <td><?= $item['amount']; ?></td>
                                    <td class="d-flex"><a
                                            href="./view-order.php?order=<?php echo urlencode ($order_id); ?>&id=<?php echo urlencode ($payid); ?>"
                                            class="m-auto"><i class="fa-solid fa-eye color-x1 "></i></a></td>
                                </tr>
                                <tr class="d-none">
                                </tr>
                                <?php
                                        
                                    
                            }
                            }
                        ?>




                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <!------------here stop---------->
        </div>
        <?php include 'include/footer.php' ?>
     
    </div>
</div>

<!------------left nevbar ---------------------->


<!----------small screen nevbar--------------->



