
<?php
include 'config.php';
//  session_start();
// if(isset($_GET['id'])){

//     if(isset($_GET['quantity'])){
//         $quantity = $_GET['quantity'];
//     }else{
//         $quantity = 1;
//     }
//      $id = $_GET['id'];

//    $_SESSION['cart'][$id] = array('quantity' => $quantity);
//    if($_SESSION['cart'] == null){
//     $_SESSION['cart'] = "add product";
//    }
//     header('location:../pages/user/addtocart.php');

//    echo '<pre>';
//    print_r($_SESSION['cart']);
//    echo '</pre>';
//  }
$ids = $_GET['id'];

$selectquery = "select * from product_page where product_id={$ids}";
$querys = mysqli_query($conn, $selectquery);
$num = mysqli_num_rows($querys);
$row = mysqli_fetch_array($querys);



if (isset($_POST['submit_update'])) {

    $idss = $_GET['id'];
    $quentity = $_POST['pro_quentity'];
    
    $updatequery = "update product_page set description='$quentity' where product_id=$idss";
    $query = mysqli_query($conn, $updatequery);

    if($query){
        ?>
            <script>
                alert("record updated successfully");
                location.replace("../pages/user/checkout.php");
            </script>
        <?php
    }else{
        ?>
            <script>
                alert("record not updated");
                location.replace("../pages/user/home.php");
            </script>
        <?php
    }

    
}

?>