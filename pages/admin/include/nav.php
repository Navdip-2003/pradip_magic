 <!---------nevbar---------->
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg  top-header px-lg-4 py-lg-3 position-sticky top-0 z-index">
        <!-- Container wrapper -->
        <div class="container-fluid">
            <!-- Toggle button -->
            <button class="navbar-toggler" id="eventX" type="button" data-mdb-toggle="collapse"
                data-mdb-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" ariaexpanded="false"
                value="false" aria-label="Toggle navigation" onclick="getX(this)">
                <i class="fas fa-bars color-x1"></i>
            </button>


            <!-- Collapsible wrapper -->
            <div class="collapse navbar-collapse " id="navbarSupportedContent">
                <!-- Navbar brand -->
                <div class="d-flex justify-content-center d-lg-block">
                    <a class="navbar-brand mt-2  mt-lg-0" href="#">
                        <img src="assets/img/magicpin-logo2.png" height="40" alt="MDB Logo" loading="lazy" />
                    </a>
                    <!-- Left links -->
                </div>


                <!-- <div class="d-flex m-auto justify-content-center mt-4 mt-lg-auto">
                    <div class=" m-auto">
                        <form action="" class="form-group">
                            <div class="d-flex search-x-round">
                                <input type="text" class="form-control rounded-0" placeholder="Search...">
                                <button class="btn bg-x1 rounded-0">search</button>
                            </div>

                        </form>
                    </div>
                </div> -->


            </div>


            <div class="d-lg-none" id="Sharp-X">
                <!-- Collapsible wrapper -->
                <div class="collapse navbar-collapse mt-4 " id="navbarSupportedContent">
                    <!-- Navbar brand -->

                    <!-- Left links -->
                    <div class="navbar-nav  mb-lg-0">

                        <div class="nav-item m-auto">
                            <button class="btn bg-x1" type="button" data-mdb-toggle="offcanvas"
                                data-mdb-target="#offcanvasExample" aria-controls="offcanvasExample">
                                menu option
                            </button>
                        </div>
                    </div>
                    <!-- Left links -->
                </div>

            </div>

            <!-- Collapsible wrapper -->

            <div class="d-flex ms-auto  my-lg-auto " id="targetX">
                <!-- Right elements -->
                <div class="d-flex align-items-center">

                    <!-- Avatar -->
                    <!-- <div class="dropdown">
                        <a class="dropdown-toggle d-flex align-items-center hidden-arrow" href="myaccount.php"
                            id="navbarDropdownMenuAvatar" role="button" data-mdb-toggle="dropdown"
                            aria-expanded="false"> -->
                            <?php 
                            if($_SESSION['admin_loggedin'] = true){
                              echo'  <div class="d-flex">
                                <a href="myaccount.php" class="m-0 me-2 a-col-x">My Account </a>
                            
                            </div>';
                            }
                            ?>
                          

                        
                </div>
                <!-- Right elements -->


            </div>


        </div>
        <!-- Container wrapper -->
    </nav>
    <!-- Navbar -->


    <!---------nevbar---------->