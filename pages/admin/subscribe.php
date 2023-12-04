
<?php
	include '../../php/config.php';
	include 'include/header.php';
	?>
    
   
    <!------------left nevbar end---------------------->

    <div class="d-flex">
        <div class="  hero-section-xr ms-auto">
            <div class="p-4">



      <?php 
      if (isset($_SESSION['msg'])) {
        echo $_SESSION['msg'];
        unset($_SESSION['msg']);
      }
      ?>         
 <!-- DataTales Example -->
 <div class="card mb-2 mt-2">
   
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered mb-0 text-center" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th class="blue-star-2">Id</th>
                        <th class="blue-star-2">User Name</th>
                        <th class="blue-star-2">Email</th>
                        <th class="blue-star-2">Delete</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th class=" ">Id</th>
                        <th class=" ">User Name</th>
                        <th class=" ">Email</th>
                        <th class=" ">Delete</th> 
                    </tr>
                </tfoot>
                <tbody>
                <?php
							$selectquery =mysqli_query($conn, "SELECT * FROM user_register,subscribe WHERE user_register.user_id = subscribe.user_id");
							if(mysqli_num_rows($selectquery) > 0){
									$no = 1;	
									foreach($selectquery as $item){
								

            
                        ?>
									
                    <tr>
                        <td><?php echo $no; ?></td>
                        <td><?= $item['fname']; ?> <?= $item['lname']; ?></td>
                        <td><?= $item['subscribe_email']; ?></td>
                        <td class="">
                        <form action="php_code.php" method="post">
                                                    <input type="hidden" name="subscribe_id" value=<?php echo $item['subscribe_id']; ?>>
                                                <button class="btn btn-bg-x1 p-2 px-4 m-1" name="delete_subscribe">
                                                    <i class="fa-solid fa-trash"></i>
                                                </button>
                                                </form>
                        </td>
                    </tr>
                    <tr class="d-none"><td></td></tr>
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


   <?php include 'include/footer.php' ?>