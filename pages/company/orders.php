
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
                
                <!-- <div id="filters">
                <select name="fetchval" id="fetchval">
                    <option value="" disabled="" selected="">Select Filter</option>
                    <option value="7567159902">7567159902</option>
                    <option value="9997159902">9997159902</option>
                    <option value="5687159902">5687159902</option></select>
                </div> -->
  <!---------flter options---------->

<div class="px-2 mx-1">
    <div class="row row-cols-sm-2 row-cols-1 justify-content-center">
      
<?php

                        function phpfun(){
                         echo 'Selected Value:';
                        }
                    ?>
                    
                    
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
                    <!-- <form action="" method="post">
                        <div class="col px-4 py-4 d-flex border flex-column">

                            <div class="input-group ">
                                <div class="form-outline">
                                    <input id="search" type="search" class="form-control" name="searchbar" />
                                    <label class="form-label " for="form1">Search From Order Id</label>
                                </div>
                                <button class="btn bg-x1" name="searchbutton">
                                    <i class="fas fa-search"></i>
                                </button>
                            </div>

                        </div>
                    </form> -->
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
        <div class="container table-responsive">
            <table class="table table-bordered mb-0" id="mytable" width="100%" cellspacing="0">
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
                <tbody id="mytable">
                <?php
                            
                            $selectquery = "";
                            $search = trim($search);
                            $search = strtolower($search);
                            $ids = $_SESSION['id'];
                            if($search){
                                $selectquery = "select * from payments,product_page where txnid LIKE '%$search%' AND payments.pid = product_page.product_id AND product_page.company_id = '$ids'";
                            }
                            else{
                                
                                if($status){
                                    $selectquery ="SELECT * FROM payments,product_page WHERE payments.pid = product_page.product_id AND product_page.company_id = '$ids' AND payments.status = '$status' AND payments.track_order = '$order'";
                                }
                                else{
                                    $selectquery ="SELECT * FROM payments,product_page WHERE payments.pid = product_page.product_id AND product_page.company_id = '$ids'";
                                }
                                
                            }
							// $selectquery =mysqli_query($conn, "SELECT * FROM payments,product_page WHERE payments.pid = product_page.product_id AND product_page.company_id = '$ids'");
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
                        <td id="tds1"><?= $item['txnid']; ?></td>
                        <td  id="tds2"><?= $item['firstname']; ?> <?= $item['lastname']; ?></td>
                        <td  id="tds3"><?= $item['mobile']; ?></td>
                        <td  id="tds4"><?= $item['payer_email']; ?></td>
                        <td  id="tds5"><?= $item['order date']; ?></td>
                        <td  id="tds6">
                        <?php if($item['track_order'] == 'Panding'){
                            echo '<span class="bg-process m-0 p-1 px-3 bor-r">processing</span>';
                        }elseif($item['track_order'] == 'shipping' && $item['Status'] == 'success' ){
                            echo '<span class="bg-deliverd m-0 p-1 px-3 bor-r">shipping</span>';
                        }elseif($item['track_order'] == 'Completed' && $item['Status'] == 'success' ){
                            echo '<span class="bg-deliverd m-0 p-1 px-3 bor-r">delivered</span>';
                        }elseif($item['track_order'] == 'Completed' && $item['Status'] == 'cancel' ){
                            echo '<span class="bg-cancel m-0 p-1 px-3 bor-r">Cancelled</span>';
                        }
                            
                            ?>    
                        </td>
                        <td  id="tds7"><?= $item['amount']; ?></td>
                        <td class="d-flex"><a href="./Order-indetail.php?order=<?php echo urlencode ($order_id); ?>&id=<?php echo urlencode ($payid); ?>" class="m-auto"><i class="fa-solid fa-eye color-x1 "></i></a></td>
                    </tr>
                    <?php
										
									
							}
                            }
						?>
						
                   
                   
                   <tr class="d-none"><td></td></tr>
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

    <?php include 'include/footer.php' ?>
    <!-------------------------------------------------------------------------------------------->
    <!-- MDB -->
   

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!-- <script>
    let rowData = {};

    let tds1 = document.getElementById("tds1");
    let tds2 = document.getElementById("tds2");
    let tds3 = document.getElementById("tds3");
    let tds4 = document.getElementById("tds4");
    let tds5 = document.getElementById("tds5");
    let tds6 = document.getElementById("tds6");
    let tds7 = document.getElementById("tds7");

    console.log(tds1.innerHTML);
    console.log(tds2.innerHTML);
    console.log(tds3.innerHTML);
    console.log(tds4.innerHTML);
    console.log(tds5.innerHTML);
    console.log(tds6.innerHTML);
    console.log(tds7.innerHTML);

    rowData.order_id = tds1.innerHTML;
    rowData.u_name = tds2.innerHTML;
    rowData.u_mono = tds3.innerHTML;
    rowData.u_email = tds4.innerHTML;
    rowData.u_date = tds5.innerHTML;
    rowData.order_status = tds6.innerHTML;
    rowData.order_prince = tds7.innerHTML;

    console.log(rowData);
   </script> -->
        
    <script src="../js/sales.js"></script>
    <script src="../js/tables.js"></script>


    <script type="text/javascript">
        function getplayerrow(player) {
  var playerRow = "";
  if (player) {
    // const userphoto = player.photo ? player.photo : "default.png";
    playerRow = `<tr>
          <td class="align-middle"><img src="uploads/${userphoto}" class="img-thumbnail rounded float-left"></td>
          <td class="align-middle">${player.pname}</td>
          <td class="align-middle">${player.email}</td>
          <td class="align-middle">${player.phone}</td>
          <td class="align-middle">
            <a href="#" class="btn btn-success mr-3 profile" data-toggle="modal" data-target="#userViewModal"
              title="See Profile" data-id="${player.id}"> Details <i class="fa fa-address-card-o" aria-hidden="true"></i></a>
            <a href="#" class="btn btn-warning mr-3 edituser" data-toggle="modal" data-target="#userModal"
              title="Edit" data-id="${player.id}">Edit <i class="fa fa-pencil-square-o fa-lg"></i></a>
            <a href="#" class="btn btn-danger deleteuser" data-userid="14" title="Delete" data-id="${player.id}"> Delete <i
                class="fa fa-trash-o fa-lg"></i></a>
          </td>
        </tr>`;
  }
  return playerRow;
}

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
