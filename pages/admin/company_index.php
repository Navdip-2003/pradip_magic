<?php
    include 'include/header.php';

    $search = "";
    if(isset($_POST["searchbutton"])){
            $search = $_POST['searchbar'];
            // header("Location:shop.php?product_name=$searchValue");
            
            
            
    }
    
    ?>

    <div class="d-flex">
        <div class="  hero-section-xr ms-auto">
            <div class="p-4">

                <div class="d-flex">
                    <!-- <a href="./dashbord.html" class="color-x1"><p><span class="me-2"><i class="fa-solid fa-arrow-left"></i></span>Back to Deshbord</p></a> -->
                    <?php echo "<a href=\"javascript:history.go(-1)\"  class='color-x1'><p><span class='me-2'><i
                            class='fa-solid fa-arrow-left'></i></span>Back to Deshbord</p></a>"; ?>
                </div>
  <!---------flter options---------->


  <div class="px-2 mx-1">
    <div class="row row-cols-sm-2 row-cols-1 justify-content-center">
      
    
        
        <!-- <div class="col border px-4 py-4 d-flex align-items-center">
            
            <div class="w-100">
                <div class="dropdown form-control d-flex justify-content-center" id="filters">
                    <a
                      class="text-black dropdown-toggle shadow-0 "
                      href="#"
                      role="button"
                      id="dropdownMenuLink"
                      data-mdb-toggle="dropdown"
                      aria-expanded="false"
                    >
                     <span id="valueX">Order Status</span>
                    </a>
                  
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                    <a href="Processing-order-table.php"> <li class="dropdown-item get-vel" onclick="change(this)">Processing</li></a>
                    <a href="deliver-order-table.php"> <li class="dropdown-item get-vel" onclick="change(this)">Delivered</li></a>
                    <a href="returned-order-table.php"> <li class="dropdown-item get-vel" onclick="change(this)">Canceled</li></a>
                    </ul>
                    
                  </div>
            </div>
           
        </div> -->
        <div class="col px-4 py-4 d-flex border flex-column">
            
            <div class="input-group " >
            <div class="form-outline">
            <form class="row bx" method="post">
                <input class="input col bx" placeholder="Search from company name" name="searchbar">
                <button class="search-btn col-2" name="searchbutton">Search</button>
              </form>
            <!-- <button id="search-button" type="button" class="btn bg-x1">
              <i class="fas fa-search"></i>
            </button> -->
          </div>
        </div>
    </div>
</div>
               
 <!-- DataTales Example -->
 <div class="card mb-2 mt-2">
   
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered mb-0 text-center" id="dataTable" width="100%" cellspacing="0">
            <thead>
                    <tr>
                        <th class="blue-star-2">Company Id</th>
                        <th class="blue-star-2">Name</th>
                        <th class="blue-star-2">phno</th>
                        <th class="blue-star-2">Email</th>
                        <th class="blue-star-2">Image</th>
                        <th class="blue-star-2">Address</th>
                        <th class="blue-star-2">GST No</th>
                        <th class="blue-star-2">Bank name</th>
                        <th class="blue-star-2">Account No</th>
                        <th class="blue-star-2">Status</th>
                        <th class="blue-star-2">Date</th>
                        <!-- <th class="blue-star-2">view</th> -->
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th class=" ">Company Id</th>
                        <th class=" ">Name</th>
                        <th class=" ">phno</th>
                        <th class=" ">Email</th>
                        <th class=" ">Image</th>
                        <th class=" ">Address</th>
                        <th class=" ">GST No</th>
                        <th class=" ">Bank name</th>
                        <th class=" ">Account No</th> 
                        <th class=" ">Status</th> 
                        <th class=" ">Date</th> 
                    </tr>
                </tfoot>
                <tbody>
                <?php
                 $selectquery = "";
                 $search = trim($search);
                 $search = strtolower($search);
                 if($search){
                     $selectquery = "select * from admin_register where company_name LIKE '%$search%'";
                 }
                 else{
							$selectquery = "SELECT * FROM admin_register";
                 }
                 $query = mysqli_query($conn, $selectquery);
							if(mysqli_num_rows($query) > 0){
										$no = 1;
                                        
									foreach($query as $item){
									
                        ?>
									
                    <tr>
                    <td><?php echo $no; ?></td>
                        <td><?= $item['company_name']; ?> </td>
                        <td><?= $item['mobile_no']; ?></td>
                        <td><?= $item['email']; ?></td>
                        <td>
                            <img src="../company/company_logo/<?= $item['Image']; ?>"  alt="company_logo" style="width:50px" srcset="">
                        </td>
                       
                    
                        <td><?= $item['company_address']; ?></td>
                        <td><?= $item['gst_no']; ?></td>
                        <td><?= $item['bank_name']; ?></td>
                        <td><?= $item['Account_no']; ?></td>
                        <form action="php_code.php" method="post">
                            <input type="hidden" name="company_id" value="<?= $item['id']; ?>">
                            <input type="hidden" name="company_status" value="active">
                        <td><button name="change_status" class="btn btn-bg-x1 border-x1"><?= $item['status']; ?></button></td>
                        </form>
                        <!-- <span class="bg-deliverd m-0 p-1 px-3 bor-r">delivered</span> -->
                        <td><?= $item['create_at']; ?></td>
                    </tr>
                    <tr class="d-none"></tr>
                    <?php
						$no++;		
									
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
    
</body>

</html>