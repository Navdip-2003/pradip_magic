<!DOCTYPE html>
<html lang="en">
<head>
<?php
include 'links.php';
?>
    <title>Document</title>
</head>
<body>
<?php include('home_header.php');
 
// $product_id =  $row['product_id']; 

?>

<?php

// include('../../php/config.php');

// if (isset($_GET['id'])) {
//     $product_id = $_GET['id'];
//     $sql = "SELECT * FROM  product_page  WHERE product_id='$product_id'";
//     $result = mysqli_query($conn, $sql);
//     //    header('location:products.php');

//     $row = mysqli_fetch_assoc($result);

//     $product_name  = $row['product_name'];
//     $cat_id  = $row['cat_id'];
//     $price  = $row['price'];
//     $product_description  = $row['brand'];
//     $thumb  = $row['img'];
// }


?>
<?php

if (isset($_SESSION['msgg'])) {
    echo $_SESSION['msgg'];
  } else {
    // echo $_SESSION['msg'] = "You are logged out. please login again.";
  }
if (isset($_GET['id'])) {
        $product_id = $_GET['id'];
        echo $product_id;
			 $Selectquery ="SELECT * FROM product_page WHERE product_id='$product_id'";
	$query = mysqli_query($conn, $Selectquery);
	if($num = mysqli_num_rows($query)){
		
		while($row = mysqli_fetch_assoc($query)){
		
		?>


<div class="container-fuial">
<form action="header.php" method="post">
    <div class="row text-white">
        <div class="col-md-6 ">
            <img src=../company/uploads/<?php echo $row['img']; ?> alt="" class='img-fluid' style='height:500px;width:500px;'>
        </div>
        <div class="col-md-6 pt-5">
            <h3><b><?php echo $row['product_name']; ?></b></h3>
            <h2><b>₹<?php echo $row['price']; ?>.00</b></h2>
            <h6 class="text-dark"><?php echo $row['brand']; ?></h6>

            <div class="row">
                <div class="col-md-2 text-dark">
                    Quantity:
                </div>
                <div class="col-md-2">
                    <form action='../../php/addToProduct.php'>
                        <input type="hidden" name='id' value='<?php echo  $row['product_id']; ?>'>
                        <input type="number" min="1" style="margin-left: -31px;" class='form-control' name='pro_quentity' value="1">

                </div>

            </div>
            <div class="row ">
                <div class="col-md-12 category">

                    
                    <span class="text-dark">Categories - <a href="home.php?id=<?php echo  $row['product_id']; ?>"><?php echo $row["brand"] ?></a> </span>


                </div>
             
            </div>
            <input type="hidden" name="pro_id" value="<?php echo $row['product_id']; ?>">
          
            <div class="row mt-4">
                <div class="col-md-4">
                    <!-- <button type='submit' class="btn btn-default btn-xs pull-right  bg-x1">
                        <i class="fa fa-cart-arrow-down"></i> Add To Cart
                    </button> -->
                    <input type="submit" class="btn btn-default btn-xs pull-right  bg-x1" name="submit"  value="Add To Cart">
                </div>
            </div>
            


        </div>

    </div>


</form>



    <!-- <div class="tab mt-5">
        <button id='defaultOpen' class="tablinks" onclick="openCity(event, 'London')">Details </button>
        <button class="tablinks" onclick="openCity(event, 'Paris')">Reviews</button>
    </div>

    <div id="London" class="tabcontent bg-white">
        <p> <?php echo 'pradeep'; ?></p>

    </div>

    <div id="Paris" class="tabcontent bg-white">
        <h3>Reviews</h3>

    </div> -->
    <div class="card">
        <div class="card-header">
            Related Products

        </div>
        <div class="row">
            <div class="card-body ">

                <div class="mt-5">
                    <ul class="rig  d-flex ">

                        <?php
                        $sql_related = "SELECT * FROM  product_page where product_id != $product_id  order by rand() limit 3";
                        $result_related = mysqli_query($conn, $sql_related);

                        while ($row_related = mysqli_fetch_assoc($result_related)) {
                            ?>
                                <div class="row">
                            <li class="col-sm-12 col-md-6 col-lg-6 h-50" >
                                <a href="#"><img class="product-image" src="../company/uploads/<?php echo $row_related['img']; ?>" height="150px" width="150px"></a>
                                <h4><a href="single.php?id=<?php echo $row_related['product_id']?>"><?php echo $row_related['product_name']; ?></a></h4>

                                <p> <?php echo $row_related['brand']; ?> </p>
                                <div class="price"> <b><?php echo $row_related['price']; ?> </b></div>
                                <hr>
                                <div class="text-center">
                                    <a href="single.php?id=<?php echo $row_related['product_id']; ?>" class="btn btn-default btn-xs pull-left">
                                        <i class="fa fa-eye"></i> Details
                                    </a>
                                </div>
                            </li>
                            </div>
                        <?php

                        }
                    

                        ?>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <?php
    include 'footer.php';
    ?>





</body>
</html>

























</div>

<?php
        }}}
?>



<!-- <?php //include('inc/footer.php');  
        ?> -->