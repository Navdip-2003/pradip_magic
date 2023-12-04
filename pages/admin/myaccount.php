<?php
    include 'include/header.php';
    
    ?>

    <div class="d-flex">
        <div class="  hero-section-xr ms-auto">
            <div class="p-4">
                <div class="py-3">

                    <div class="row">
                         <?php 
             if (isset($_SESSION['admin_id'])) {
              $id = $_SESSION['admin_id'];
           $Selectquery ="SELECT * FROM admin_login where admin_id = $id";
           $query = mysqli_query($conn, $Selectquery);
            if($num = mysqli_num_rows($query)){ 
             
             while($row = mysqli_fetch_assoc($query)){
             
        ?>
                      

                        <div class="col-12 ">
                            <div class="">
                                <div class="card  d-xl-block">
                                    <div class="card-body p-0 px-4">

                                        <div class="row py-3 border-bottom">
                                            <div class="col-sm-3">
                                                <p class="mb-0 color-x1">User Namw</p>
                                            </div>
                                            <div class="col-sm-9">
                                                <p class="text-muted mb-0"><?php echo $row['admin_name']; ?></p>
                                            </div>
                                        </div>
                                        
                                        <div class="row py-3">
                                            <div class="col-sm-3">
                                                <p class="mb-0 color-x1">Email</p>
                                            </div>
                                            <div class="col-sm-9 d-flex justify-content-between">
                                                <p class="text-muted mb-0"><?php echo $row['admin_email']; ?></p>
                                                <p>
                                               <a href="Edit-profile.php?id=<?php echo $row['admin_id']; ?>"> <button class="btn bg-x1 border-1 py-2">Edit</button></a>
                                               <a href="admin_logout.php"> <button class="btn btn-bg-x1 py-2">Logout</button></a>
                                               </p></div>
                                        </div>
                                    </div>
                                </div>
                                
                               
                            </div>
                        </div>
                        <?php }}} ?>
                    </div>
                </div>
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


    <?php
    include 'include/footer.php';
    
    ?>