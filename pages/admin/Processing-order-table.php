
<?php
    include 'include/header.php';
    
    
    $search = "";
    if(isset($_POST["searchbutton"])){
            $search = $_POST['searchbar'];
            // header("Location:shop.php?product_name=$searchValue");
            
            
            
    }


    $status = "";
    if(isset($_GET['status'])){
        $status = $_GET['status'];
        
        $sql = "select * from payments where status = '$status'";

    }
    ?>
    <div class="d-flex">
        <div class="  hero-section-xr ms-auto">
            <div class="p-4">

             
            
  <!---------flter options---------->

<div class="px-2 mx-1">
    <div class="row  row-cols-sm-2 row-cols-1 justify-content-center">
   
        
        <div class="col border px-4 py-4 d-flex align-items-center">
            
        <div class="w-100">
                <div class="dropdown form-control d-flex justify-content-center">
                    <a
                      class="text-black dropdown-toggle shadow-0 "
                      href="#"
                      role="button"
                      id="dropdownMenuLink"
                      data-mdb-toggle="dropdown"
                      aria-expanded="false"
                    >
                     <span id="valueX">Processing</span>
                    </a>
                  
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                    <a href="Processing-order-table.php"> <li class="dropdown-item get-vel" onclick="change(this)">Processing</li></a>
                    <a href="deliver-order-table.php"> <li class="dropdown-item get-vel" onclick="change(this)">Delivered</li></a>
                    <a href="returned-order-table.php"> <li class="dropdown-item get-vel" onclick="change(this)">Canceled</li></a>
                    </ul>
                  </div>
            </div>
           
        </div>
        <form action="" method="post">
                        <div class="col px-4 py-4 d-flex border flex-column">

                            <div class="input-group " style="height:35px">
                                <div class="form-outline" >
                                    <input id="search" type="search" class="form-control " name="searchbar" />
                                    <label class="form-label " for="form1">Search From Order Id</label>
                                </div>
                                <button class="btn bg-x1 h-100" name="searchbutton">
                                    <i class="fas fa-search "></i>
                                </button>
                            </div>

                        </div>
                    </form>
    </div>
</div>
               
 <!-- DataTales Example -->
 <div class="card mb-2 mt-2">
   
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered mb-0" id="dataTable" width="100%" cellspacing="0">
            <thead>
                    <tr>
                        <th class="blue-star-2">Order Id</th>
                        <th class="blue-star-2">Name</th>
                        <th class="blue-star-2">phno</th>
                        <th class="blue-star-2">Email</th>
                        <!-- <th class="blue-star-2">Items</th> -->
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
                        <!-- <th class=" ">Items</th> -->
                        <th class=" ">Order date</th>
                        <th class=" ">Status</th>
                        <th class=" ">Total</th> 
                        <th class=" ">view</th> 
                    </tr>
                </tfoot>
                <tbody>
                <?php
                 $selectquery = "";
                 $search = trim($search);
                 $search = strtolower($search);
                 if($search){
                     $selectquery = "select * from payments where txnid LIKE '%$search%'";
                 }
                 else{
                    //  $ids = $_SESSION['id'];
                     // if($status){
                     //     $selectquery ="SELECT * FROM payments,product_page WHERE payments.pid = product_page.product_id AND product_page.company_id = '$ids' AND payments.track_order = '$status'";
                     // }
                     // else{
                         $selectquery ="SELECT * FROM payments WHERE payments.track_order = 'Panding'";
                     // }
                     
                 }
							// $selectquery =mysqli_query($conn, "SELECT * FROM payments WHERE payments.track_order = 'Panding'");
                            $selectquery_run = mysqli_query($conn, $selectquery);
                            if(mysqli_num_rows($selectquery_run) > 0){
										
									foreach($selectquery_run as $item){
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
                        <td><span class="bg-process m-0 p-1 px-3 bor-r">Processing</span></td>
                        <!-- <span class="bg-deliverd m-0 p-1 px-3 bor-r">delivered</span> -->
                        <td><?= $item['amount']; ?></td>
                        <td class="d-flex"><a href="./view-order.php?order=<?php echo urlencode ($order_id); ?>&id=<?php echo urlencode ($payid); ?>" class="m-auto"><i class="fa-solid fa-eye color-x1 "></i></a></td>
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
  
    <?php include 'include/footer.php' ?>

    <script src="../js/margin.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="../js/sales.js"></script>
    <script src="../js/tables.js"></script>
    
</body>

</html>