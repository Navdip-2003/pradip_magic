<?php
    include 'include/header.php';
    
    ?>


    <div class="d-flex">
        <div class="  hero-section-xr ms-auto">
            <div class="p-4">
                <div class=" ">
                    <ul class="nav nav-tabs justify-content-center mb-3" id="ex1" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="contact-tab0" data-mdb-toggle="tab" data-mdb-target="#contact0"
                                type="button" role="tab" aria-controls="contact" aria-selected="false" aria-selected="true">
                                Give Replay
                            </button>
                        </li>
                    </ul>
                    <!-- <div class="tab-content" id="myTabContent0">
                        <div class="tab-pane fade" id="contact0" role="tabpanel" aria-labelledby="contact-tab0"> -->
                            <!-------------------write complaint--------------->
                            <div class="container my-4 my-lg-0">
                                <section class=" ">
                                    <div class="container  h-100 my-2  card card-registration">
                                        <div class="row d-flex align-items-center justify-content-center h-100 ">
                                            <div class="col-md-9 col-lg-9 col-xl-6 pt-lg-0">
                                                <img src="assets/img/vectors/Contact us-pana.svg" class="img-fluid "
                                                    alt="Phone image">
                                            </div>
                                            <div class="col-md-8 col-lg-9 col-xl-6 mt-2 mt-xl-0 px-4">

                                                    <?php 
                                                    if(isset($_GET['id'])){
                                                        $id = $_GET['id'];
                                                        $company_name = $_GET['name'];
                                                    }
                                                    ?>
                                                <!--------------------------------------------+ cancel form +------------------------------------>
                                                <p class="mb-3 tit">Write Replay</p>
                                                <form class="w-100" action="php_code.php" method="POST">
                                                    <!-- Name input -->
                                           
                                                        <input type="hidden" name="customer_id" value="<?php echo $id ?>">
                                                        <input type="hidden" name="company_name" value="<?php echo $company_name ?>">
                                                       

                                                    <!-- Email input -->
                                                    <div class="form-outline mb-4">
                                                        <input type="text" name="subject" id="form4Example2" class="form-control" />
                                                        <label class="form-label" for="form4Example2">
                                                            Subject
                                                        </label>
                                                    </div>


                                                    <!-- Email input -->
                                                    <div class="form-outline mb-4">
                                                        <input type="text" name="email" id="form4Example2" class="form-control" />
                                                        <label class="form-label" for="form4Example2">Email Id
                                                        </label>
                                                    </div>

                                                  <div class="mb-4">
                                                    <textarea name="description" placeholder="Write description" id="" class="form-control h-textarea"></textarea>
                                                  </div>

                                                    <!-- Submit button -->
                                                    <button type="submit" name="replay_submit" 
                                                        class="btn bg-x1 btn-block mb-4">Send</button>
                                                </form>


                                            </div>


                                        </div>
                                    </div> 
                            </div>
                            </section>
                        </div>

                        <!-------------------write complaint--------------->
                    <!-- </div>
                </div> -->
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

</body>

</html>