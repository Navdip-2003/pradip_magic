<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <?php include 'links.php'; ?>
  <title>my order</title>
</head>

<body>
  <!----------------------------------header section----------------------------------->
  <!-- HEADER -->
  <?php include 'home_header.php'; ?>
  <!-- /HEADER -->
  <!-------------------------------end of hedaer section------------------------------->

  <div class="container my-4">
    <div class=" ">
      <ul class="nav nav-tabs justify-content-center mb-3" id="ex1" role="tablist">
        <li class="nav-item " role="presentation">
          <button class="nav-link active" id="home-tab0" data-mdb-toggle="tab" data-mdb-target="#home0" type="button" role="tab" aria-controls="home" aria-selected="true">
            Track Orders
          </button>
        </li>
        <li class="nav-item" role="presentation">
          <button class="nav-link" id="profile-tab0" data-mdb-toggle="tab" data-mdb-target="#profile0" type="button" role="tab" aria-controls="profile" aria-selected="false">
          Shipping Orders
          </button>
        </li>
        <li class="nav-item" role="presentation">
          <button class="nav-link" id="contact-tab0" data-mdb-toggle="tab" data-mdb-target="#contact0" type="button" role="tab" aria-controls="contact" aria-selected="false">
            Cancel Orders
          </button>
        </li>
        <li class="nav-item" role="presentation">
          <button class="nav-link" id="contact-tab0" data-mdb-toggle="tab" data-mdb-target="#shipping0" type="button" role="tab" aria-controls="contact" aria-selected="false">
          Orders History
          </button>
        </li>
      </ul>
      <div class="tab-content" id="myTabContent0">
        <div class="tab-pane fade show active" id="home0" role="tabpanel" aria-labelledby="home-tab0">
          <!-------------------my orders---------------->


          <div class="row row-cols-1 row-cols-lg-2 row-cols-xl-3 m-3 g-3">

            <!-------order 1------------->
            <?php
            $user_id = $_SESSION['user_id'];
            $selectquery = mysqli_query($conn, "SELECT * FROM payments WHERE user_id = $user_id");
            if (mysqli_num_rows($selectquery) > 0) {
              foreach ($selectquery as $row) {
                  
                       if($row['track_order'] == 'Panding'){
            ?>
                <div class="col">


                  <div class="card card-stepper" style="border-radius: 16px;">
                    <div class="card-header p-4">
                      <div class="row">
                        <div class="col-xxl-7 col-12 col-sm-7 col-lg-12 d-flex">
                          <div class="m-auto m-xxl-0">
                            <p class="text-muted mb-2"> Order ID <span class="fw-bold text-body"><?php echo $row['txnid']; ?></span></p>
                            <p class="text-muted mb-0"> Place On <span class="fw-bold text-body"><?php echo $row['payment_date']; ?></span> </p>
                          </div>
                        </div>
                        <?php
                        $order_id = $row['order_id'];
                        $payid = $row['payid'];?>
                        <div class="col-xxl-5 col-12 col-sm-5 col-lg-12 p-3 pb-0 p-xxl-0 d-flex">
                          <a href="bill.php?order=<?php echo urlencode ($order_id); ?>&id=<?php echo urlencode ($payid); ?>" class="m-auto"><button class=" btn btn-bg-x1 btn-sm">View Details</button></a>
                        </div>
                      </div>
                    </div>
                    <div class="card-body p-4">

                    <div class="">
                            <div class="progress" style="height: 6px; border-radius: 16px;">
                                <div class="progress-bar progress-bar-striped bg-x1" role="progressbar"
                                    style="width: 12%; border-radius: 16px; " aria-valuenow="65" aria-valuemin="0"
                                    aria-valuemax="100" id="process-bar-x1"></div>
                            </div>
                            <div class="d-flex justify-content-between mb-1 mt-1">
                                <p class="text-muted mt-1 mb-0 ">Processing</p>
                                <p class="text-muted mt-1 mb-0 ">Shipping</p>
                                <p class="text-muted mt-1 mb-0 ">Delivered</p>
                            </div>
                        </div>
                    
                    

                      

                    </div>
                    <div class="card-footer p-3 px-4">
                      <div class="d-flex justify-content-between">

                        <p class="fw-bold my-auto"><span class="color-x1 ">Delivered !</span></p>
                        <div class="col-xxl-5 col-12 col-sm-5 col-lg-12 p-3 pb-0 p-xxl-0 d-flex">
                          <a href="cancel_o.php?id=<?php echo $row['payid']; ?>" class="m-auto"><button class=" btn btn-bg-x1 btn-sm">Cancel Order</button></a>
                        </div>

                      </div>
                    </div>
                  </div>

                </div>
            <?php }}
            } ?>



          </div>


          <!-------------------my orders---------------->
        </div>


        <div class="tab-pane fade" id="profile0" role="tabpanel" aria-labelledby="profile-tab0">
          <!------------------order history-------------->

          <div class="row row-cols-1 row-cols-lg-2 row-cols-xl-3 m-3 g-3">

            <!-------order 1------------->
            <?php
            $user_id = $_SESSION['user_id'];
            $selectquery = mysqli_query($conn, "SELECT * FROM payments WHERE user_id = $user_id");
            if (mysqli_num_rows($selectquery) > 0) {
              foreach ($selectquery as $row) {
                // $_SESSION['payid'] = $row['payid'];
                if($row['track_order'] == 'shipping'){
            ?>
                <div class="col">


                  <div class="card card-stepper" style="border-radius: 16px;">
                    <div class="card-header p-4">
                      <div class="row">
                        <div class="col-xxl-7 col-12 col-sm-7 col-lg-12 d-flex">
                          <div class="m-auto m-xxl-0">
                            <p class="text-muted mb-2"> Order ID <span class="fw-bold text-body"><?php echo $row['txnid']; ?></span></p>
                            <p class="text-muted mb-0"> Place On <span class="fw-bold text-body"><?php echo $row['payment_date']; ?></span> </p>
                          </div>
                        </div>
                        <?php
                        $order_id = $row['order_id'];
                        $payid = $row['payid'];?>
                        <div class="col-xxl-5 col-12 col-sm-5 col-lg-12 p-3 pb-0 p-xxl-0 d-flex">
                          <a href="bill.php?order=<?php echo urlencode ($order_id); ?>&id=<?php echo urlencode ($payid); ?>" class="m-auto"><button class=" btn btn-bg-x1 btn-sm">View Details</button></a>
                        </div>
                      </div>
                    </div>
                    <div class="card-body p-4">

                    <div class="">
                            <div class="progress" style="height: 6px; border-radius: 16px;">
                                <div class="progress-bar progress-bar-striped bg-x1" role="progressbar"
                                    style="width: 50%; border-radius: 16px; " aria-valuenow="65" aria-valuemin="0"
                                    aria-valuemax="100" id="process-bar-x1"></div>
                            </div>
                            <div class="d-flex justify-content-between mb-1 mt-1">
                                <p class="text-muted mt-1 mb-0 ">Processing</p>
                                <p class="text-muted mt-1 mb-0 ">Shipping</p>
                                <p class="text-muted mt-1 mb-0 ">Delivered</p>
                            </div>
                        </div>


                    </div>
                    <div class="card-footer p-3 px-4">
                      <div class="d-flex justify-content-between">

                      <p class="fw-bold my-auto"><span class="color-x1 ">Shipping !</span></p>

                      </div>
                    </div>
                  </div>

                </div>
            <?php }}
            } ?>



          </div>
          <!------------------order history-------------->
        </div>


        <div class="tab-pane fade" id="contact0" role="tabpanel" aria-labelledby="contact-tab0">  
          <!-------------------cancel order--------------->
          <div class="row row-cols-1 row-cols-lg-2 row-cols-xl-3 m-3 g-3">

            <!-------order 1------------->
            <?php
            $user_id = $_SESSION['user_id'];
            $selectquery = mysqli_query($conn, "SELECT * FROM payments WHERE user_id = $user_id");
            if (mysqli_num_rows($selectquery) > 0) {
              foreach ($selectquery as $row) {
                // $_SESSION['payid'] = $row['payid'];
                if($row['track_order'] == 'Completed' AND $row['Status'] == 'cancel'){
            ?>
                <div class="col">


                  <div class="card card-stepper" style="border-radius: 16px;">
                    <div class="card-header p-4">
                      <div class="row">
                        <div class="col-xxl-7 col-12 col-sm-7 col-lg-12 d-flex">
                          <div class="m-auto m-xxl-0">
                            <p class="text-muted mb-2"> Order ID <span class="fw-bold text-body"><?php echo $row['txnid']; ?></span></p>
                            <p class="text-muted mb-0"> Place On <span class="fw-bold text-body"><?php echo $row['payment_date']; ?></span> </p>
                          </div>
                        </div>
                        <?php
                        $order_id = $row['order_id'];
                        $payid = $row['payid'];?>
                        <div class="col-xxl-5 col-12 col-sm-5 col-lg-12 p-3 pb-0 p-xxl-0 d-flex">
                          <a href="bill.php?order=<?php echo urlencode ($order_id); ?>&id=<?php echo urlencode ($payid); ?>" class="m-auto"><button class=" btn btn-bg-x1 btn-sm">View Details</button></a>
                        </div>
                      </div>
                    </div>
                    <div class="card-body p-4">

                    <div class="">
                            <div class="progress" style="height: 6px; border-radius: 16px;">
                                <div class="progress-bar progress-bar-striped bg-x1" role="progressbar"
                                    style="width: 100%; border-radius: 16px; " aria-valuenow="65" aria-valuemin="0"
                                    aria-valuemax="100" id="process-bar-x1"></div>
                            </div>
                            <div class="d-flex justify-content-between mb-1 mt-1">
                                <p class="text-muted mt-1 mb-0 ">Processing</p>
                                <p class="text-muted mt-1 mb-0 ">Shipping</p>
                                <p class="text-muted mt-1 mb-0 ">Delivered</p>
                            </div>
                        </div>

                      

                    </div>
                    <div class="card-footer p-3 px-4">
                      <div class="d-flex justify-content-between">

                        <?php 
                        if($row['Status'] == 'success'){
                          echo '<p class="fw-bold my-auto"><span class="color-x1 ">Delivered</span></p>';
                        }else{
                          echo '<p class="fw-bold my-auto"><span class="color-x1 ">Order Canceled !</span></p>';
                        }
                        ?>
                      </div>
                    </div>
                  </div>

                </div>
            <?php }}
            } ?>



          </div>
          <!-------------------cancel order--------------->
        </div>
        <div class="tab-pane fade" id="shipping0" role="tabpanel" aria-labelledby="profile-tab0">
          <!------------------order history-------------->

          <div class="row row-cols-1 row-cols-lg-2 row-cols-xl-3 m-3 g-3">

            <!-------order 1------------->
            <?php
            $user_id = $_SESSION['user_id'];
            $selectquery = mysqli_query($conn, "SELECT * FROM payments WHERE user_id = $user_id");
            if (mysqli_num_rows($selectquery) > 0) {
              foreach ($selectquery as $row) {
                // $_SESSION['payid'] = $row['payid'];
                if($row['track_order'] == 'Completed'){
            ?>
                <div class="col">


                  <div class="card card-stepper" style="border-radius: 16px;">
                    <div class="card-header p-4">
                      <div class="row">
                        <div class="col-xxl-7 col-12 col-sm-7 col-lg-12 d-flex">
                          <div class="m-auto m-xxl-0">
                            <p class="text-muted mb-2"> Order ID <span class="fw-bold text-body"><?php echo $row['txnid']; ?></span></p>
                            <p class="text-muted mb-0"> Place On <span class="fw-bold text-body"><?php echo $row['payment_date']; ?></span> </p>
                          </div>
                        </div>
                        <?php
                        $order_id = $row['order_id'];
                        $payid = $row['payid'];?>
                        <div class="col-xxl-5 col-12 col-sm-5 col-lg-12 p-3 pb-0 p-xxl-0 d-flex">
                          <a href="bill.php?order=<?php echo urlencode ($order_id); ?>&id=<?php echo urlencode ($payid); ?>" class="m-auto"><button class=" btn btn-bg-x1 btn-sm">View Details</button></a>
                        </div>
                      </div>
                    </div>
                    <div class="card-body p-4">

                    <div class="">
                            <div class="progress" style="height: 6px; border-radius: 16px;">
                                <div class="progress-bar progress-bar-striped bg-x1" role="progressbar"
                                    style="width: 100%; border-radius: 16px; " aria-valuenow="65" aria-valuemin="0"
                                    aria-valuemax="100" id="process-bar-x1"></div>
                            </div>
                            <div class="d-flex justify-content-between mb-1 mt-1">
                                <p class="text-muted mt-1 mb-0 ">Processing</p>
                                <p class="text-muted mt-1 mb-0 ">Shipping</p>
                                <p class="text-muted mt-1 mb-0 ">Delivered</p>
                            </div>
                        </div>

                     

                    </div>
                    <div class="card-footer p-3 px-4">
                      <div class="d-flex justify-content-between">

                       <?php 
                        if($row['Status'] == 'success'){
                          echo '<p class="fw-bold my-auto"><span class="color-x1 ">Delivered</span></p>';
                        }else{
                          echo '<p class="fw-bold my-auto"><span class="color-x1 ">Order Canceled !</span></p>';
                        }
                        ?>

                      </div>
                    </div>
                  </div>

                </div>
            <?php }}
            } ?>



          </div>
          <!------------------order history-------------->
        </div>
      </div>
    </div>
  </div>

  <!--------------------------------------------------------------------------------------------->
  <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
    <div class="offcanvas-header">
      <h5 id="offcanvasRightLabel">Offcanvas right</h5>
      <button type="button" class="btn-close text-reset" data-mdb-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body">...</div>
  </div>
  <!--------------------------------------------------------------------------------------------->
  <?php include 'footer.php' ?>  
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.1.0/mdb.min.js"></script>
</body>

</html>