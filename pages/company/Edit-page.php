<?php
    include 'include/header.php';
    
    ?>
    <div class="d-flex">
        <div class="  hero-section-xr ms-auto">
            <div class="p-4">
                
                <div class="card mt-2">
                    
                    <div class="row d-flex align-items-center justify-content-center h-100
                     row-cols-1 mx-sm-3 mx-md-5 row-cols-xl-2 px-lg-5 py-lg-3 p-xl-3 p-xxl-5 py-xxl-3 mx-lg-4 mx-xl-0">

                        <div class="col">
                            <img src="assets/img/vectors/Online resume-amico.svg" class="img-fluid " alt="Phone image">
                        </div>
    
                        <div class="col pe-4">

                            <!--------------------------------------------+ login form +------------------------------------>
                            <?php	
						$ids = $_SESSION['id'];

							$selectquery = "select * from admin_register where id={$ids}";
							$querys = mysqli_query($conn, $selectquery);
							$num = mysqli_num_rows($querys);
							$data = mysqli_fetch_array($querys);

							
					?>
                            <form class="mt-4 mb-4 mt-md-0 " action="code.php" method="post" enctype="multipart/form-data">
                                <p class="mb-4 tit">Edit Profile</Em></p>
                                <!-- Email input -->
                                <div class="form-outline mb-4">
                                    <input type="email" id="form1Example13" class="form-control " name="email" value="<?php echo $data['email'] ?>" />
                                    <label class="form-label" for="form1Example13">Email Address</label>
                                </div>

                                <!-- Email input -->
                                <div class="form-outline mb-4">
                                    <input type="number" id="form1Example13" class="form-control " name="mobile_no" value="<?php echo $data['mobile_no'] ?>"/>
                                    <label class="form-label" for="form1Example13">Mobile Number</label>
                                </div>
    
                                <!-- Email input -->
                                <div class="form-outline mb-4">
                                    <input type="email" id="form1Example13" class="form-control " value="<?php echo $data['gst_no'] ?>" disabled/>
                                    <label class="form-label" for="form1Example13">Gst No</label>
                                </div>

                                  <!-- Email input -->
                                  <div class="form-outline mb-4">
                                    <input type="text" id="form1Example13" class="form-control " name="bank_name" value="<?php echo $data['bank_name'] ?>" />
                                    <label class="form-label" for="form1Example13">Bank Name</label>
                                </div>

                                  <!-- Email input -->
                                  <div class="form-outline mb-4">
                                    <input type="number" id="form1Example13" class="form-control " name="account_no" value="<?php echo $data['Account_no'] ?>" />
                                    <label class="form-label" for="form1Example13">Account No</label>
                                </div>

                                <!-- Email input -->
                                <div class="form-outline mb-4">
                                    <textarea id="form1Example13"
                                        class=" mb-4 h-textarea-1 p-2 form-control" name="address"><?php echo $data['company_address']; ?></textarea>
                                    <label class="form-label" for="form1Example13">Home Address...</label>
                                </div>
    
    
    
                                <!-- Submit button -->
                                <button type="submit" class="btn bg-x1 btn-block" name="company_edit_profile">EDIT Profile</button>

                            </form>
                        </div>
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


   