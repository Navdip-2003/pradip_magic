
<?php
	include '../../php/config.php';
	include 'include/header.php';

    $search = "";
    if(isset($_POST["searchbutton"])){
            $search = $_POST['searchbar'];
            // header("Location:shop.php?product_name=$searchValue");
            
            
            
    }


    $status = "";
    $order = "";
    if(isset($_GET['status']) && isset($_GET['order'])){
        $status = $_GET['status'];
        $order = $_GET['order'];
        
        $sql = "select * from payments where status = '$status' AND track_order = '$order'";

    }
	?>
    
   
    <!------------left nevbar end---------------------->

    <div class="d-flex">
        <div class="  hero-section-xr ms-auto">
            <div class="p-4">
  <!---------flter options---------->

  <div class="px-2 mx-1">
    <div class="row row-cols-sm-2 row-cols-1 justify-content-center">
      
    <div class="col px-4 py-4 d-flex border flex-column">
    <form name="orderstatusform" class="w-100" method="post" action="">
                            <select name="orders" class="form-control" id="orderstatus"  onchange="check(this.value)">
                                    <option value="" selected>Order status</option>
                                    <option value="success&order=Panding" <?php if   ($status=="success" && $order=="Panding") echo 'selected="selected"'; ?>>processing</option>
                                    <option value="success&order=shipping" <?php if  ($status=="success" && $order=="shipping") echo 'selected="selected"'; ?>>shipping</option>
                                    <option value="success&order=Completed" <?php if ($status=="success" && $order=="Completed") echo 'selected="selected"'; ?>>devliered</option>
                                    <option value="cancel&order=Completed" <?php if ($status=="cancel" && $order=="Completed") echo 'selected="selected"'; ?>>cancel order</option>
                            </select>
                            
                    </form>

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
                 $selectquery = "";
                 $search = trim($search);
                 $search = strtolower($search);
                //  $ids = $_SESSION['id'];
                 if($search){
                     $selectquery = "select * from payments where txnid LIKE '%$search%'";
                 }
                 else{
                     
                     if($status){
                         $selectquery ="SELECT * FROM payments WHERE status = '$status' AND track_order = '$order'";
                     }
                     else{
                         $selectquery ="SELECT * FROM payments";
                     }
                     
                 }
							// $selectquery =mysqli_query($conn, "SELECT * FROM payments");
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
                        <td>
                        <?php if($item['track_order'] == 'Panding'){
                            echo '<span class="bg-process m-0 p-1 px-3 bor-r">processing</span>';
                        }elseif($item['track_order'] == 'shipping' ){
                            echo '<span class="bg-process m-0 p-1 px-3 bor-r">shipping</span>';
                        }elseif($item['track_order'] == 'Completed' && $item['Status'] == 'success' ){
                            echo '<span class="bg-deliverd m-0 p-1 px-3 bor-r">delivered</span>';
                        }elseif($item['track_order'] == 'Completed' && $item['Status'] == 'cancel' ){
                            echo '<span class="bg-cancel m-0 p-1 px-3 bor-r">Cancelled</span>';
                        }
                            
                            ?>    
                        </td>
                        <td><?= $item['amount']; ?></td>
                        <td class="d-flex"><a href="./view-order.php?order=<?php echo urlencode ($order_id); ?>&id=<?php echo urlencode ($payid); ?>" class="m-auto"><i class="fa-solid fa-eye color-x1 "></i></a></td>
                    </tr>
                    <tr class="d-none"></tr>
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
    <script type="text/javascript">
        function check(str){
let findq = window.location.href.indexOf
let finalQ = window.location.href.substr(0,findq);
// alert(finalQ);
// alert(window.location.href);
let newUrl = finalQ + `?status=${str}`;
window.location.replace(newUrl);


// window.reload();
}
        </script>
</body>

</html>