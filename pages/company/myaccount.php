<?php
    include 'include/header.php';
    
    ?>

    <div class="d-flex">
        <div class="  hero-section-xr ms-auto">
            <div class="p-4">
                <div class="py-3">

                    <div class="row">
                         <?php 
             if (isset($_SESSION['id'])) {
              $id = $_SESSION['id'];
           $Selectquery ="SELECT * FROM admin_register where id = $id";
           $query = mysqli_query($conn, $Selectquery);
            if($num = mysqli_num_rows($query)){ 
             
             while($row = mysqli_fetch_assoc($query)){
             
        ?>
                        <div class="col-12 mb-4" >
                            <div class="card py-3">

                                <div class="d-flex flex-column flex-sm-row">
                                    <div class="m-sm-5 my-sm-4">
                                        <img src="company_logo/<?php echo $row['Image']; ?>" alt="avatar" class="rounded-circle img-fluid"
                                        style="width: 150px; height:150px;">
                                    </div>
                                    <div class="d-flex flex-column justify-content-center d-sm-block">
                                        <h5 class="my-3 color-x1 text-uppercase"><?php echo $row['company_name']; ?></h5>
                                    <p class="text-muted mb-1"><?php echo $row['email']; ?></p>
                                    <!-- <p class="text-muted mb-4">Prince@7778</p> -->
                                    <div class="d-flex justify-content-center mb-2">
                                       <a href="profile-image.php"> <button type="button" class="btn bg-x1">Change Image</button></a>
                                        <a href="admin_logout.php" type="button" class="btn btn-bg-x1 ms-1 py-2">Log Out</a>
                                    </div>
                                    </div>
                                </div>

                               
                            </div>

                          

                        </div>

                        <div class="col-12 ">
                            <div class="">
                                <div class="card  d-xl-block">
                                    <div class="card-body p-0 px-4">
                                        
                                        
                                        <div class="row py-3 border-bottom">
                                            <div class="col-sm-3">
                                                <p class="mb-0 color-x1">Email</p>
                                            </div>
                                            <div class="col-sm-9">
                                                <p class="text-muted mb-0"><?php echo $row['email']; ?></p>
                                            </div>
                                        </div>
                                        
                                        
                                        <div class="row py-3 border-bottom">
                                            <div class="col-sm-3">
                                                <p class="mb-0 color-x1">Mobile</p>
                                            </div>
                                            <div class="col-sm-9">
                                                <p class="text-muted mb-0"><?php echo $row['mobile_no']; ?></p>
                                            </div>
                                        </div>

                                        <div class="row py-3 border-bottom">
                                            <div class="col-sm-3">
                                                <p class="mb-0 color-x1">GST No</p>
                                            </div>
                                            <div class="col-sm-9">
                                                <p class="text-muted mb-0"><?php echo $row['gst_no']; ?></p>
                                            </div>
                                        </div>

                                        <div class="row py-3 border-bottom">
                                            <div class="col-sm-3">
                                                <p class="mb-0 color-x1">Bank Name</p>
                                            </div>
                                            <div class="col-sm-9">
                                                <p class="text-muted mb-0"><?php echo $row['bank_name']; ?></p>
                                            </div>
                                        </div>

                                        <div class="row py-3 border-bottom">
                                            <div class="col-sm-3">
                                                <p class="mb-0 color-x1">A/C No</p>
                                            </div>
                                            <div class="col-sm-9">
                                                <p class="text-muted mb-0"><?php echo $row['Account_no']; ?></p>
                                            </div>
                                        </div>
                                        
                                        <div class="row py-3">
                                            <div class="col-sm-3">
                                                <p class="mb-0 color-x1">Address</p>
                                            </div>
                                            <div class="col-sm-9 d-flex justify-content-between">
                                                <p class="text-muted mb-0"><?php echo $row['company_address']; ?></p>
                                               <a href="Edit-page.php?id=<?php echo $row['id']; ?>"> <button class="btn btn-bg-x1 py-2">Edit</button></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                               
                            </div>
                        </div>
                        <?php }}} ?>
                    </div>
                </div>
            </div>
            <?php
    include 'include/footer.php';
    
    ?>
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


  