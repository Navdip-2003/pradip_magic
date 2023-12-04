<?php
    include 'include/header.php';
    
    ?>

    <div class="d-flex">
        <div class="  hero-section-xr ms-auto">
        <?php
    $id = $_GET['id'];
    $order_id = $_GET['order'];
    // $pro_que = $_GET['que'];
    // $pro_id = $_SESSION['id'];
  
              // $txn_id = $_SESSION['txnid'];
              $selectquery = mysqli_query($conn, "SELECT * FROM payments,product_page WHERE payments.payid = $id");
              if (mysqli_num_rows($selectquery) > 0) {
                if ($row = mysqli_fetch_array($selectquery)) {
                 
                  $datetime = $row['payment_date'];
                  $p_id = $row['pid'];
                        $payid = $row['payid'];
  $getOnlyDate = date('Y-m-d',strtotime($datetime));
              ?>
            <div class="p-4">
                <div class="d-flex">
                    <a href="./orders.php" class="color-x1">
                        <p><span class="me-2"><i class="fa-solid fa-arrow-left"></i></span>Back to Orders</p>
                    </a>
                </div>
                <!--------main section-------------->
                <div class="row row-cols-1 justify-content-center row-cols-xl-2 row-cols-md-2 row-cols-lg-1
                px-md-3 px-lg-5 p-xl-0 g-4">
                    <div class="col">
                        <div class="card border">
                            <div class="card-body p-5">

                                <p class="lead fw-bold mb-5 color-x1">Manage Order</p>

                                <div class="row">
                                    <div class="col mb-3">
                                        <p class="small text-muted mb-1">Date</p>
                                        <p><?php echo $getOnlyDate; ?></p>
                                    </div>
                                    <div class="col mb-3">
                                        <p class="small text-muted mb-1">Order No.</p>
                                        <p><?php echo $row['txnid']; ?></p>
                                    </div>
                                </div>
                               <?php if($row['quen'] != 0 ){?>
                                <div class="mx-n5 px-5 py-4" style="background-color: #f2f2f2;">
                                    <div class="row">
                                        <div class="col-md-8 col-lg-9">
                                            <p><?php echo $row['product_name']; ?></p>
                                        </div>
                                        <div class="col-md-4 col-lg-3">
                                            <p>₹<?php echo $row['price'] * $row['quen'] ?></p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-8 col-lg-9">
                                            <p class="mb-0">Shipping</p>
                                        </div>
                                        <div class="col-md-4 col-lg-3">
                                            <p class="mb-0">₹00.00</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="row my-4">
                                    <div class="col-md-4 offset-md-8 col-lg-3 offset-lg-9">
                                        <p class="lead fw-bold mb-0 color-x1">₹<?php echo $row['price'] * $row['quen'] ?></p>
                                    </div>
                                </div>
                                <?php
        }else{
        ?>
              <div class="mx-n5 px-5 py-4" style="background-color: #f2f2f2;">
              <?php
            $order_id = $_GET['order'];
            $selectquerycart = mysqli_query($conn, "SELECT * FROM cart_order_item,payments WHERE  payments.order_id = $order_id AND cart_order_item.order_id = $order_id");
                if (mysqli_num_rows($selectquerycart) > 0) {
                  $index_id = 0;
                  foreach ($selectquerycart as $data) {
                  $index_id++;?>
                                    <div class="row">
                                    
                                        <div class="col-md-8 col-lg-9">
                                            <p><?php echo $data['pro_name']; ?></p>
                                        </div>
                                        <div class="col-md-4 col-lg-3">
                                            <p>₹<?php echo $data['price'] * $data['que']; ?></p>
                                        </div>
                                    </div>
                                    <?php }} ?>
                                    <div class="row">
                                        <div class="col-md-8 col-lg-9">
                                            <p class="mb-0">Shipping</p>
                                        </div>
                                        <div class="col-md-4 col-lg-3">
                                            <p class="mb-0">₹00.00</p>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="row my-4">
                                    <div class="col-md-4 offset-md-8 col-lg-3 offset-lg-9">
                                        <p class="lead fw-bold mb-0 color-x1">₹<?php echo $data['amount'] ?>.00</p>
                                    </div>
                                    
                                </div>
                                <?php } ?>
                                <p class="lead fw-bold mb-3 pb-2 color-x1">Order Address</p>

                                <address>129,tapidarshan nana varachha surat,395006</address>

                               <div class="d-flex justify-content-between align-items-center">
                                 <p class="mb-0">View bill Recipt</p>
                                 <a href="./view-order.php?order=<?php echo urlencode ($order_id); ?>&id=<?php echo urlencode ($payid); ?>"><button class="btn btn-bg-x1 btn-sm">view</button></a>
                               </div>
                                
                            </div>
                        </div>
                    </div> 

                    <div class="col">
                        <div class=" border p-5 card shadow-0">
                            <div class="">
                                <div class="progress" style="height: 6px; border-radius: 16px;">
                                    <div class="progress-bar progress-bar-striped bg-x1" role="progressbar"
                                        style="width: 50%; border-radius: 16px; " aria-valuenow="65" aria-valuemin="0"
                                        aria-valuemax="100"></div>
                                </div>
                                <div class="d-flex justify-content-between mb-1 mt-1">
                                    <p class="text-muted mt-1 mb-0 ">Processing</p>
                                    <p class="text-muted mt-1 mb-0 ">Shipping</p>
                                    <p class="text-muted mt-1 mb-0 ">Delivered</p>
                                </div>
                            </div>

                            <form action="code.php" method="post" class="mt-4" >
                                <input type="hidden" name="pay_id" value="<?php echo $row['payid'] ?>">
                                <select class="form-control" name="order_complete">
                                  
                                    <option value="processing" >Processing</option>
                                    <option value="processing" >Shipping</option>
                                    <option value="Completed">Delivered</option>
                                  </select>
                                   <?php
                                   if($row['track_order'] == 'Completed'){
                                    echo '<button type="submit" class="btn btn-block bg-x1 mt-3" name="track_number" disabled="disabled" style="background-color: #D10024; color: white;">CHANGE STATUS</button>';
                                   }else{
                                    echo '<input type="submit" class="btn btn-block bg-x1 mt-3" name="track_number" value="CHANGE STATUS">';
                                   }
                                   ?>
                                   
                                  <!-- <input type="submit" class="btn btn-block bg-x1 mt-3" name="track_number" value="CHANGE STATUS"> -->
                            </form>

                        </div>

                    </div>

                </div>
                <!--------main section-------------->
            </div>
            <?php }} ?>
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

</body>

</html>