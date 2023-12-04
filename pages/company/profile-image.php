<?php
    include 'include/header.php';
    
    ?>

    <div class="d-flex">
        <div class="  hero-section-xr ms-auto">
            <div class="p-4">
                <div class="">
                    <a href="./myaccount.php" class="color-x1">
                        <p><span class="me-2"><i class="fa-solid fa-arrow-left"></i></span>Back to Profile</p>
                    </a>
                </div>
                <?php	
						$ids = $_SESSION['id'];

							$selectquery = "select * from admin_register where id={$ids}";
							$querys = mysqli_query($conn, $selectquery);
							$num = mysqli_num_rows($querys);
							$data = mysqli_fetch_array($querys);

							
					?>
                <form action="code.php" method="post" enctype="multipart/form-data">
                <div class="div-profile mt-4 d-flex justify-content-center align-items-center ">
                        
                    <div class="row justify-content-center align-items-center w-100 ">
                        <div class="col-12 col-md-10 col-xl-7 card  p-0">
                            <div class="">
                                <div>
                                    <div class="position-relative">

                                        <img src="company_logo/<?php echo $data['Image']; ?>" alt=""
                                            class="image-pro position-absolute top-100 mt-3 start-50 translate-middle" >

                                        <div class="card-bg card overflow-hidden">

                                            <div class="w-100 h-100 bg-black opacity-60">

                                            </div>
                                        </div>
                                    </div>

                                    <div class="card-cont card shadow-0">
                                        <div class="h-50  w-100"></div>
                                        <div class="d-flex h-50 justify-content-center align-items-center">
                                            
                                            <button class="btn btn-lg bg-x1 hei-x position-relative">
                                                <span class="position-absolute top-50 start-50 translate-middle">Upload</span>
                                                <input type="file" name="new_image" class="w-100 opacity-0" >
                                                <input type="hidden" name="image" value="<?php echo $data['Image']; ?>"><br>

                                            </button>
                                            <button class="btn btn-lg btn-bg-x1 bx hei-x" name="change_image" type="submit">Change</button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                   
                </div>
                </form>
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


    <!-------------------------------------------------------------------------------------------->
    <!-- MDB -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.2.0/mdb.min.js"></script>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->

    <script defer src="https://cdn.crop.guide/loader/l.js?c=LJMDXK+"></script>
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