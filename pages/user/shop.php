<?php
    $search = "";
    if(isset($_GET["product_name"])){
        $search = $_GET['product_name'];

    }
?>
<!doctype html>
<html lang="en">

<head>

    <?php include 'links.php'; ?>
    <title>User Registration</title>
</head>

<body>

    <?php include 'home_header.php'; ?>

    <div class="container my-4 mt-5">

        <div class="row">
            <div class="filer col-12 col-lg-3 ">
                <div class="card bg-x">
                    <div class=" d-flex p-2 justify-content-between align-content-center">
                        <p class="text-light mb-0 pb-0 m-lg-auto">Filters</p>


                        <a class="" data-mdb-toggle="offcanvas" href="#offcanvasExample" role="button"
                            aria-controls="offcanvasExample">
                            <img src="./img/sort.png" alt="" height="26px" width="26px" class="d-lg-none">
                        </a>
                    </div>
                </div>


                <!--------------------------------main filter-------------------------------------->
                <div class="accordion accordion-borderless " id="accordionFlushExampleX">

                    <!----------------category------------>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-headingOneX1">
                            <button class="accordion-button" type="button" data-mdb-toggle="collapse"
                                data-mdb-target="#flush-collapsecat" aria-expanded="true"
                                aria-controls="flush-collapseOneX">
                                Category
                            </button>
                        </h2>
                        <div id="flush-collapsecat" class="accordion-collapse collapse show"
                            aria-labelledby="flush-headingcat" data-mdb-parent="#accordionFlushExampleX">
                            <div class="accordion-body">
                                <ul class="list-group">
                                    <?php
                        $sql = "SELECT DISTINCT cat_name FROM category ORDER BY cat_name";
                        $result=mysqli_query($conn,$sql);
                        while($row = mysqli_fetch_assoc($result)){
                      ?>
                                    <li class="list-group-item">
                        <div class="form-check">
                          <label class="form-check-label">
                            <input type="checkbox" class="form-check-input product_check" value="<?= $row['cat_name']; ?>" id="cat_name"><?= $row['cat_name']; ?>
                          </label>
                        </div>
                      </li>
                                    <?php } ?>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <!----------------prince------------>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-headingOneX2">
                            <button class="accordion-button" type="button" data-mdb-toggle="collapse"
                                data-mdb-target="#flush-collapseprice" aria-expanded="true"
                                aria-controls="flush-collapseOneX">
                                Brands
                            </button>
                        </h2>
                        <div id="flush-collapseprice" class="accordion-collapse collapse show"
                            aria-labelledby="flush-headingOneX" data-mdb-parent="#accordionFlushExampleX">
                            <div class="accordion-body">
                                <ul class="list-group">
                                    <?php
                        $sql = "SELECT DISTINCT company_name FROM product_page ORDER BY company_name";
                        $result=mysqli_query($conn,$sql);
                        while($row = mysqli_fetch_assoc($result)){
                      ?>
                                    <li class="list-group-item">
                                        <div class="form-check">
                                            <label class="form-check-label">
                                                <input type="checkbox" class="form-check-input product_check"
                                                    value="<?= $row['company_name']; ?>"
                                                    id="company_name"><?= $row['company_name']; ?>
                                            </label>
                                        </div>
                                    </li>
                                    <?php } ?>
                                </ul>
                            </div>
                        </div>
                    </div>

                   
                </div>
                <!--------------------------------main filter end---------------------------------->
                <!------------------sub filter----------------------->




                <!------------------sub filter end----------------------->
            </div>

            <!--------------------------------products---------------------------------------->
            <div class="prodcts col-12 col-lg-9 pt-4 pt-lg-0">
                <h5 class="text-center" id="textchange">All Products</h5>
                <div class="text-center">
                    <img src="../../img/loader.gif" alt="loader" id="loader" width="200" style="display:none;"
                        srcset="">
                </div>
                <div class="row row-cols-xxl-3 row-cols-lg-2 row-cols-md-2 g-2 g-md-4 row-cols-1 row-cols-sm-2"
                    id="result">

                    <!------product------->
                    <?php
                    $Selectquery = "";
                    $search = trim($search);
                    $search = strtolower($search);
                    if($search){
                        $Selectquery = "select * from product_page where product_name LIKE '%$search%' OR company_name LIKE '%$search%'";
                    }
                    else{
                        $Selectquery = "select * from product_page WHERE delete_status = 'active'";
                    }
			//  $Selectquery ="SELECT * FROM product_page WHERE delete_status = 'active'";
	$query = mysqli_query($conn, $Selectquery);
	if($num = mysqli_num_rows($query)){
		
		while($row = mysqli_fetch_assoc($query)){
      $max_price = $row['dis_price'];
      $min_price = $row['price'];
      $percent_increase = number_format((($max_price - $min_price) / $min_price) * 100, 0);
		?>
                    <div class="col">
                        <form action="cartlist.php" method="post">
                            <div class="card">
                                <div class="d-flex justify-content-between p-3">

                                    <p class="lead mb-0">Today's Combo Offer</p>
                                    <div class="bg-x rounded-circle d-flex align-items-center justify-content-center shadow-1-strong"
                                        style="width: 35px; height: 35px;">
                                        <p class="text-white mb-0 small"><?php echo $percent_increase ?></p>
                                    </div>
                                </div>
                                <img src="../company/multi_images/<?php echo $row['img']; ?>" class="card-img-top"
                                    alt="<?php echo $row['product_name']; ?>" style="height:300px;"/>
                                <div class="card-body">
                                    <div class="d-flex justify-content-between">
                                        <p class="small"><a href="#!"
                                                class="text-muted"><?php echo $row['brand']; ?></a></p>
                                        <p class="small text-danger"><s>₹<?php echo $row['dis_price']; ?></s></p>
                                    </div>

                                    <div class="d-flex justify-content-between mb-3">
                                        <a href='single.php?id=<?php echo  $row["product_id"] ?>' <h6
                                            class="mb-0"><?php echo $row['product_name']; ?></h6></a>
                                        <P class="text-dark mb-0">₹<?php echo $row['price']; ?>.00</P>
                                    </div>


                                    <input type="hidden" name="pro_id" value="<?php echo $row['product_id']; ?>">
                                    <!-- <input type="hidden" name="pro_images" value="<?php //echo $row['img']; ?>">
					<input type="hidden" name="pro_name" value="<?php //echo $row['product_name']; ?>">
					<input type="hidden" name="pro_brand" value="<?php // echo $row['brand']; ?>">-->
                                    <input type="hidden" name="pro_quentity" value="1">
                                    <!-- <input type="hidden" name="pro_price" value="<?php // echo $row['price']; ?>">  -->

                                    <div class=" d-flex justify-content-between mt-3">
                                        <button class="btn btn-bg-x1" name="wi1" data-mdb-toggle="tooltip"
                                            title="Move to the wish list">
                                            <i class="fas fa-heart"></i>
                                        </button>

                                        <input type="submit" class="btn btn-sm bg-x1" name="submit" value="Add To Cart">
                                        <!-- <a   href='single.php?id=<?php //echo  $row["product_id"] ?>' class="btn btn-default btn-xs pull-left">
                        <i class="fa fa-eye"></i> Details
                    	 -->

                                    </div>
                                </div>
                            </div>
                        </form>
                    </div> <?php } }?>
                    <!------product end------->

                    <!------product------->

                </div>
                <!------product end------->





            </div>


            <!--------------------------------products end------------------------------------>
        </div>
    </div>

    </div>

    <!--------------------------------------------------------------------------------------------->
    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
        <div class="offcanvas-header">
            <h5 id="offcanvasRightLabel">Offcanvas right</h5>
            <button type="button" class="btn-close text-reset" data-mdb-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">...</div>
    </div>
    <!--------------------------------------------------------------------------------------------->
    <!-------------------------------this is the subscribe section----------------------->
    <!-- NEWSLETTER -->
    <div id="newsletter" class="section">
        <!-- container -->
        <div class="container">
            <!-- row -->
            <div class="row">
                <div class="col-md-12">
                    <div class="newsletter">
                        <p>Sign Up for the <strong>NEWSLETTER</strong></p>
                        <form class="row " action="header.php" method="post">
							<input class="input col-8" name="email" type="email" placeholder="Enter Your Email">
							<button class="newsletter-btn col-4" name="subscribe_btn"><i class="fa fa-envelope"></i> Subscribe</button>
						</form>
                        <ul class="newsletter-follow">
                            <li>
                                <a href="#"><i class="fa fa-facebook"></i></a>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-instagram"></i></a>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-pinterest"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- /row -->
        </div>
        <!-- /container -->
    </div>
    <!-- /NEWSLETTER -->
    <!-------------------------this is the end of the subscribe section------------------>
    <?php include 'footer.php' ?>
    <script src="../js/jquery-3.6.3.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <script src="../js/save_btn.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.1.0/mdb.min.js"></script>


    <script type="text/javascript">
    $(document).ready(function() {


        $(".product_check").click(function() {
            $("#loader").show();

            var action = 'data';
            var cat_name = get_filter_text('cat_name');
            var company_name = get_filter_text('company_name');

            $.ajax({
                url: 'filter_page.php',
                method: 'POST',
                data: {
                    action: action,
                    company_name: company_name,
                    cat_name: cat_name
                },
                success: function(response) {
                    console.log(response);
                    $("#result").html(response);
                    $("#loader").hide();
                    $("#textchange").text("Filtered Products");
                }
            });

        });

        function get_filter_text(text_id) {
            var filterData = [];
            $('#' + text_id + ':checked').each(function() {
                filterData.push($(this).val());
            });
            return filterData;
        }

    });
    </script>
</body>

</html>