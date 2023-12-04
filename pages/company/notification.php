<?php
    include 'include/header.php';
    
    ?>

    <div class="d-flex">
        <div class="  hero-section-xr ms-auto">
            <div class="p-4 ">

                <div class="row justify-content-center">
                    <div class="col-12 col-md-10 card p-4">
                        <canvas id="line-chart"></canvas>
                    </div>
                </div>

                <div class="row justify-content-center mt-4">
                    <div class="col-12 col-md-10 card p-4 ">
                        <div class="card d-flex justify-content-center blue-star p-3 fw-bold mb-4">
                            NOTIFICATION
                        </div>
                        <form action="">
                            <div>
                                <div class="mb-3 ">
                                    <label for="exampleInputEmail1" class="form-label color-x1">Subject</label>
                                    <div class="row px-1">
                                        <div class="col-12 col-md-6 col-lg-8 col-xl-6">
                                            <input type="text" class="form-control form-control-lg " id="exampleInputEmail1"
                                            aria-describedby="emailHelp">
                                        </div>
                                       
                                    </div>
                                </div>
                            </div>
                            <div class="row px-1">
                                <label for="exampleInputEmail1" class="form-label color-x1">Description</label>
                                <textarea name="" class="form-control text-area col-12"></textarea>
                            </div>


                    </div>
                </div>

                <div class="row justify-content-center mt-4">
                    <div class="col-12 col-md-10 card p-4 ">
                        <div class="mb-3">
                            <div class="d-flex flex-column flex-md-row">
                                <div class="d-flex">
                                    <input type="checkbox" name="" id="" class="check-box">
                                <p class="m-0 ms-2">Select all users of the list</p>
                                </div>
                                <button class="btn btn-sm bg-x1 ms-3" type="submit">Send</button>
                            </div>
                        </div>
                        <div class="table-responsive" id="tbody-x">
                            <table class="table table-bordered mb-0 " id="dataTable" width="100%" cellspacing="0">
                                <thead class="position-sticky ">
                                    <tr>
                                        <th class="blue-star-2">Select</th>
                                        <th class="blue-star-2">Name</th>
                                        <th class="blue-star-2">phno</th>
                                        <th class="blue-star-2">Email</th>
                                        <th class="blue-star-2">Send</th>

                                    </tr>
                                </thead>
                                <tfoot>
                                    <tr>
                                        <th class="">Select</th>
                                        <th class="">Name</th>
                                        <th class="">phno</th>
                                        <th class="">Email</th>
                                        <th class="">Send</th>

                                    </tr>
                                </tfoot>
                                <tbody class="tbody-x" id="tbody-x">
                                    <!------one user------->
                                    <tr class="">
                                        <td class="td-data"><span
                                                class="h-100 d-flex align-items-center justify-content-center">
                                                <input type="checkbox" name="" id="" class="check-box">
                                            </span>
                                        </td>
                                        <td class="td-data"><span
                                                class="h-100 d-flex align-items-center justify-content-center">
                                                Prince desai
                                            </span>
                                        </td>
                                        <td class="td-data"><span
                                                class="h-100 d-flex align-items-center justify-content-center">
                                                9978847345
                                            </span>
                                        </td>
                                        <td class="td-data"><span
                                                class="h-100 d-flex align-items-center justify-content-center">
                                                desaiprince958@gmail.com
                                            </span>
                                        </td>
                                        <td class="td-data"><span
                                                class="h-100 d-flex align-items-center justify-content-center">
                                                <button type="submit" class="btn btn-bg-x1 btn-sm px-4 fsg m-0"><i
                                                        class="fa-solid fa-paper-plane"></i></button>
                                            </span>
                                        </td>

                                    </tr>

                                    <!------one user------->
                                    <tr class="">
                                        <td class="td-data"><span
                                                class="h-100 d-flex align-items-center justify-content-center">
                                                <input type="checkbox" name="" id="" class="check-box">
                                            </span>
                                        </td>
                                        <td class="td-data"><span
                                                class="h-100 d-flex align-items-center justify-content-center">
                                                Prince desai
                                            </span>
                                        </td>
                                        <td class="td-data"><span
                                                class="h-100 d-flex align-items-center justify-content-center">
                                                9978847345
                                            </span>
                                        </td>
                                        <td class="td-data"><span
                                                class="h-100 d-flex align-items-center justify-content-center">
                                                desaiprince958@gmail.com
                                            </span>
                                        </td>
                                        <td class="td-data"><span
                                                class="h-100 d-flex align-items-center justify-content-center">
                                                <button type="submit" class="btn btn-bg-x1 btn-sm px-4 fsg m-0"><i
                                                        class="fa-solid fa-paper-plane"></i></button>
                                            </span>
                                        </td>

                                    </tr>

                                    <!------one user------->
                                    <tr class="">
                                        <td class="td-data"><span
                                                class="h-100 d-flex align-items-center justify-content-center">
                                                <input type="checkbox" name="" id="" class="check-box">
                                            </span>
                                        </td>
                                        <td class="td-data"><span
                                                class="h-100 d-flex align-items-center justify-content-center">
                                                Prince desai
                                            </span>
                                        </td>
                                        <td class="td-data"><span
                                                class="h-100 d-flex align-items-center justify-content-center">
                                                9978847345
                                            </span>
                                        </td>
                                        <td class="td-data"><span
                                                class="h-100 d-flex align-items-center justify-content-center">
                                                desaiprince958@gmail.com
                                            </span>
                                        </td>
                                        <td class="td-data"><span
                                                class="h-100 d-flex align-items-center justify-content-center">
                                                <button type="submit" class="btn btn-bg-x1 btn-sm px-4 fsg m-0"><i
                                                        class="fa-solid fa-paper-plane"></i></button>
                                            </span>
                                        </td>

                                    </tr>

                                    <!------one user------->
                                    <tr class="">
                                        <td class="td-data"><span
                                                class="h-100 d-flex align-items-center justify-content-center">
                                                <input type="checkbox" name="" id="" class="check-box">
                                            </span>
                                        </td>
                                        <td class="td-data"><span
                                                class="h-100 d-flex align-items-center justify-content-center">
                                                Prince desai
                                            </span>
                                        </td>
                                        <td class="td-data"><span
                                                class="h-100 d-flex align-items-center justify-content-center">
                                                9978847345
                                            </span>
                                        </td>
                                        <td class="td-data"><span
                                                class="h-100 d-flex align-items-center justify-content-center">
                                                desaiprince958@gmail.com
                                            </span>
                                        </td>
                                        <td class="td-data"><span
                                                class="h-100 d-flex align-items-center justify-content-center">
                                                <button type="submit" class="btn btn-bg-x1 btn-sm px-4 fsg m-0"><i
                                                        class="fa-solid fa-paper-plane"></i></button>
                                            </span>
                                        </td>

                                    </tr>

                                    <!------one user------->
                                    <tr class="">
                                        <td class="td-data"><span
                                                class="h-100 d-flex align-items-center justify-content-center">
                                                <input type="checkbox" name="" id="" class="check-box">
                                            </span>
                                        </td>
                                        <td class="td-data"><span
                                                class="h-100 d-flex align-items-center justify-content-center">
                                                Prince desai
                                            </span>
                                        </td>
                                        <td class="td-data"><span
                                                class="h-100 d-flex align-items-center justify-content-center">
                                                9978847345
                                            </span>
                                        </td>
                                        <td class="td-data"><span
                                                class="h-100 d-flex align-items-center justify-content-center">
                                                desaiprince958@gmail.com
                                            </span>
                                        </td>
                                        <td class="td-data"><span
                                                class="h-100 d-flex align-items-center justify-content-center">
                                                <button type="submit" class="btn btn-bg-x1 btn-sm px-4 fsg m-0"><i
                                                        class="fa-solid fa-paper-plane"></i></button>
                                            </span>
                                        </td>

                                    </tr>

                                    <!------one user------->
                                    <tr class="">
                                        <td class="td-data"><span
                                                class="h-100 d-flex align-items-center justify-content-center">
                                                <input type="checkbox" name="" id="" class="check-box">
                                            </span>
                                        </td>
                                        <td class="td-data"><span
                                                class="h-100 d-flex align-items-center justify-content-center">
                                                Prince desai
                                            </span>
                                        </td>
                                        <td class="td-data"><span
                                                class="h-100 d-flex align-items-center justify-content-center">
                                                9978847345
                                            </span>
                                        </td>
                                        <td class="td-data"><span
                                                class="h-100 d-flex align-items-center justify-content-center">
                                                desaiprince958@gmail.com
                                            </span>
                                        </td>
                                        <td class="td-data"><span
                                                class="h-100 d-flex align-items-center justify-content-center">
                                                <button type="submit" class="btn btn-bg-x1 btn-sm px-4 fsg m-0"><i
                                                        class="fa-solid fa-paper-plane"></i></button>
                                            </span>
                                        </td>

                                    </tr>
                                </tbody>

                            </table>

                            </form>
                        </div>
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
    <script src="assets/js/margin.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="assets/js/notification.js"></script>


</body>

</html>