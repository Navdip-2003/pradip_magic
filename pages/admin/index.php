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

                <div class="row row-cols-1 row-cols-sm-2  row-cols-xl-3 row-cols-xxl-4 g-3">

                    <!----deliverd order----->
                    <div class="col px-2">
                        <a href="">
                            <div class="card  p-3 card-hover-x">
                                <div class="d-flex">
                                    <div class="icon-logo blue-star d-flex justify-content-center align-items-center">
                                        <i class="fa-solid fa-user "></i>
                                    </div>
                                    <div class="ms-3">
                                        <p class="fw-semibold color-x1 mb-0">Total user</p>
                                        <p class="m-0 color-grey" id="ad-total-user">
											<?php 
											 $selectquery = mysqli_query($conn, "SELECT COUNT(*) as user_id FROM user_register");
                                             $row = mysqli_fetch_assoc($selectquery);
                                             echo $row['user_id'];
											?>
										</p>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>

                    <!----cancel order----->
                    <div class="col px-2">
                        <a href="">
                            <div class="card  p-3 card-hover-x">
                                <div class="d-flex">
                                    <div class="icon-logo blue-star d-flex justify-content-center align-items-center">
                                        <i class="fa-solid fa-user"></i>
                                    </div>
                                    <div class="ms-3">
                                        <p class="fw-semibold color-x1 mb-0">active user </p>
                                        <p class="m-0 color-grey" id="ad-active-user">
                                        <?php 
											 $selectquery = mysqli_query($conn, "SELECT COUNT(*) as user_id FROM user_register WHERE status = 'active'");
                                             $row = mysqli_fetch_assoc($selectquery);
                                             echo $row['user_id'];
											?>
										</p>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>

                    <!----processing order----->
                    <div class="col px-2">
                        <a href="">
                            <div class="card  p-3 card-hover-x">
                                <div class="d-flex">
                                    <div class="icon-logo blue-star d-flex justify-content-center align-items-center">
                                        <i class="fa-solid fa-ban"></i>
                                    </div>
                                    <div class="ms-3">
                                        <p class="fw-semibold color-x1 mb-0">Inactive user</p>
                                        <p class="m-0 color-grey" id="ad-inactive-user">
										<?php 
											 $selectquery = mysqli_query($conn, "SELECT COUNT(*) as user_id FROM user_register WHERE status = 'inactive'");
                                             $row = mysqli_fetch_assoc($selectquery);
                                             echo $row['user_id'];
											?>
											
										</p>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>

                    <!----processing order----->
                    <div class="col px-2">
                        <a href="">
                            <div class="card p-3 card-hover-x">
                                <div class="d-flex">
                                    <div class="icon-logo blue-star d-flex justify-content-center align-items-center">
                                        <i class="fa-solid fa-basket-shopping"></i>
                                    </div>
                                    <div class="ms-3">
                                        <p class="fw-semibold color-x1 mb-0">Total Products</p>
                                        <p class="m-0 color-grey" id="ad-total-products">
                                        <?php 
											 $selectquery = mysqli_query($conn, "SELECT COUNT(*) as product_id FROM product_page");
											 $row = mysqli_fetch_assoc($selectquery);
											 echo $row['product_id'];
											?>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>

                    <!----deliverd order----->
                    <div class="col px-2">
                        <a href="company_index.php">
                            <div class="card  p-3 card-hover-x">
                                <div class="d-flex">
                                    <div class="icon-logo blue-star d-flex justify-content-center align-items-center">
                                        <i class="fa-solid fa-user"></i>
                                    </div>
                                    <div class="ms-3">
                                        <p class="fw-semibold color-x1 mb-0">Total Company</p>
                                        <p class="m-0 color-grey" id="ad-total-company"><?php 
											 $selectquery = mysqli_query($conn, "SELECT COUNT(*) as id FROM admin_register");
                                             $row = mysqli_fetch_assoc($selectquery);
                                             echo $row['id'];
											?></p>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>

                    <!----cancel order----->
                    <div class="col px-2">
                        <a href="">
                            <div class="card  p-3 card-hover-x">
                                <div class="d-flex">
                                    <div class="icon-logo blue-star d-flex justify-content-center align-items-center">
                                        <i class="fa-solid fa-user"></i>
                                    </div>
                                    <div class="ms-3">
                                        <p class="fw-semibold color-x1 mb-0">Active Company</p>
                                        <p class="m-0 color-grey" id="ad-active-company">
										<?php 
											 $selectquery = mysqli_query($conn, "SELECT COUNT(*) as id FROM admin_register WHERE status = 'active'");
											 $row = mysqli_fetch_assoc($selectquery);
											 echo $row['id'];
											?>
										</p>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>

                    <!----processing order----->
                    <div class="col px-2">
                        <a href="">
                            <div class="card  p-3 card-hover-x">
                                <div class="d-flex">
                                    <div class="icon-logo blue-star d-flex justify-content-center align-items-center">
                                        <i class="fa-solid fa-ban"></i>
                                    </div>
                                    <div class="ms-3">
                                        <p class="fw-semibold color-x1 mb-0">Inactive Company</p>
                                        <p class="m-0 color-grey"id="ad-inactive-company">
										<?php 
											 $selectquery = mysqli_query($conn, "SELECT COUNT(*) as id FROM admin_register WHERE status = 'inactive'");
											 $row = mysqli_fetch_assoc($selectquery);
											 echo $row['id'];
											?>
										</p>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>

                    <!----processing order----->
                    <div class="col px-2">
                        <a href="">
                            <div class="card p-3 card-hover-x">
                                <div class="d-flex">
                                    <div class="icon-logo blue-star d-flex justify-content-center align-items-center">
                                        <i class="fa-solid fa-bag-shopping"></i>
                                    </div>
                                    <div class="ms-3">
                                        <p class="fw-semibold color-x1 mb-0">Total Order</p>
                                        <p class="m-0 color-grey" id="ad-total-order">
                                        <?php 
											 $selectquery = mysqli_query($conn, "SELECT COUNT(*) as payid FROM payments");
											 $row = mysqli_fetch_assoc($selectquery);
											 echo $row['payid'];
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
                                                        <p class="fw-semibold color-x1 mb-0">New Users</p>
                                                        <p class="m-0 color-grey"><?php 
										$selectquery = mysqli_query($conn, "SELECT COUNT(*) as user_id FROM user_register WHERE  `create_at` >= DATE_SUB( NOW(), INTERVAL 1 DAY)");
										$row = mysqli_fetch_assoc($selectquery);
										echo $row['user_id'];
										
											
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
                                                        <p class="fw-semibold color-x1 mb-0">New Company</p>
                                                        <p class="m-0 color-grey"><?php 
														$selectquery = mysqli_query($conn, "SELECT COUNT(*) as id FROM admin_register WHERE `create_at` >= DATE_SUB( NOW(), INTERVAL 1 DAY)");
														$row = mysqli_fetch_assoc($selectquery);
														 echo  $row['id'];
										                 	?></p>
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
                                                        <p class="fw-semibold color-x1 mb-0">New Orders</p>
                                                        <p class="m-0 color-grey"><?php 
														$selectquery = mysqli_query($conn, "SELECT COUNT(*) as track_order FROM payments WHERE  `order date` >= DATE_SUB( NOW(), INTERVAL 1 DAY)");
                                                        $row = mysqli_fetch_assoc($selectquery);
                                                        echo $row['track_order'];
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
                                                        <p class="fw-semibold color-x1 mb-0">Add Products</p>
                                                        <p class="m-0 color-grey">
														<?php 
														$selectquery = mysqli_query($conn, "SELECT COUNT(*) as product_id FROM product_page WHERE `create_at` >= DATE_SUB( NOW(), INTERVAL 1 DAY)");
														$row = mysqli_fetch_assoc($selectquery);
														 echo  $row['product_id'];
										                 	?>
														</p>
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
                        <h6 class="m-0 font-weight-bold color-x1">Total User Register</h6>
                    </div>
                    <div class="card-body" >      
                        <div class="table-responsive   "style="height:400px; overflow-y:scroll;">
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                               <thead>
                    <tr>
                        <th class="blue-star-2">Token Id</th>
                        <th class="blue-star-2">User Name</th>
                        <!-- <th class="blue-star-2">Last Name</th> -->
                        <th class="blue-star-2">Phone No</th>
                        <th class="blue-star-2">Email</th>
                        <th class="blue-star-2">Status</th>
                        <th class="blue-star-2">Date</th>
                        <!-- <th class="blue-star-2">view</th> -->
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th class=" ">Token Id</th>
                        <th class=" ">User Name</th>
                        <!-- <th class=" ">Last Name</th> -->
                        <th class=" ">Phone No</th>
                        <th class=" ">Email</th>
                        <th class=" ">Status</th>
                        <th class=" ">Date</th> 
                        <!-- <th class=" ">view</th>  -->
                    </tr>
                </tfoot>
                <tbody>
                <?php
                            $selectquery =mysqli_query($conn, "SELECT * FROM user_register");
                            if(mysqli_num_rows($selectquery) > 0){
                                        
                                    foreach($selectquery as $item){
                                    //  $order_id = $item['order_id'];
                                    //  $p_id = $item['pid'];
                        ?>
                                    
                    <tr>
                        <td> <?= $item['token']; ?></td>
                        <td><?= $item['fname']; ?>  <?= $item['lname']; ?></td>
                        <td><?= $item['phone']; ?></td>
                        <td><?= $item['email']; ?></td>
                        <td><?=  $item['status']; }  ?> </td>
                        <td><?= $item['create_at']; ?></td>
  
                    </tr>
                    <tr class="d-none"></tr>
                    <?php
                                        
                                    
                            }
                            
                        ?>
                        
                   
                   
                   
                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

            <!------------here stop---------->
            </div>
            <?php include 'include/footer.php'; ?>
        </div>
    </div>

    <!------------left nevbar ---------------------->


    <!----------small screen nevbar--------------->


    
