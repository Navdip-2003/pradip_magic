<?php
// $search_value = $_POST["search"];

include '../../php/config.php';

if(isset($_POST['request'])){
    $request = $_POST['request'];

    $query = "SELECT * FROM payments WHERE mobile = '$request' ";
    $result = mysqli_query($conn, $query);
    $count = mysqli_num_rows($result);


?>

<table class="table">
    <?php
    if($count){ ?>

<thead>
                    <tr>
                        <th class="blue-star-2">Order Id</th>
                        <th class="blue-star-2">Name</th>
                        <th class="blue-star-2">phno</th>
                        <th class="blue-star-2">Email</th>
                        <th class="blue-star-2">Order date</th>
                        <th class="blue-star-2">Status</th>
                        <th class="blue-star-2">Total</th>
                        <th class="blue-star-2">view</th>
                    </tr>
            
                </thead>
                <?php  
    }
                    ?>
                <tfoot>
                    <tr>
                        <th class=" ">Order Id</th>
                        <th class=" ">Name</th>
                        <th class=" ">phno</th>
                        <th class=" ">Email</th>
                        <th class=" ">Order date</th>
                        <th class=" ">Status</th>
                        <th class=" ">Total</th> 
                        <th class=" ">view</th> 
                    </tr>
                </tfoot>
                <tbody class="container">
                <?php
                     
										
									// foreach($selectquery as $item){
                                        while($item = mysqli_fetch_assoc($result)){
									 
                        ?>
									
                    <tr>
                        <td><?= $item['txnid']; ?></td>
                        <td><?= $item['firstname']; ?> <?= $item['lastname']; ?></td>
                        <td><?= $item['mobile']; ?></td>
                        <td><?= $item['payer_email']; ?></td>
                        <td><?= $item['order date']; ?></td>
                        <td>
                        <?php if($item['track_order'] == 'Panding'){
                            echo '<span class="bg-process m-0 p-1 px-3 bor-r">processing</span>';
                        }elseif($item['track_order'] == 'Completed' && $item['Status'] == 'success' ){
                            echo '<span class="bg-deliverd m-0 p-1 px-3 bor-r">delivered</span>';
                        }elseif($item['track_order'] == 'Completed' && $item['Status'] == 'cancel' ){
                            echo '<span class="bg-cancel m-0 p-1 px-3 bor-r">Cancelled</span>';
                        }
                            
                            ?>    
                        </td>
                        <td><?= $item['amount']; ?></td>
                        <td class="d-flex"><a href="./Order-indetail.php?order=<?php echo urlencode ($order_id); ?>&id=<?php echo urlencode ($payid); ?>" class="m-auto"><i class="fa-solid fa-eye color-x1 "></i></a></td>
                    </tr>
                    <?php
										
									
							}
                            
						?>
						
                   
                   
                 
                </tbody>
</table>



<?php } ?>












<?php
// $sql = "SELECT * FROM payments WHERE txnid LIKE '%{$search_value}%'";
// $result = mysqli_query($conn, $sql) or die("SQL Query Failed.");
// $output = "";
// if(mysqli_num_rows($result) > 0){
//     $output = '<div class="card mb-2 mt-2">
   
//     <div class="card-body">
//         <div class="table-responsive">
//             <table class="table table-bordered mb-0" id="dataTable" width="100%" cellspacing="0">
//                 <thead>
//                     <tr>
//                         <th class="blue-star-2">Order Id</th>
//                         <th class="blue-star-2">Name</th>
//                         <th class="blue-star-2">phno</th>
//                         <th class="blue-star-2">Email</th>
//                         <th class="blue-star-2">Order date</th>
//                         <th class="blue-star-2">Status</th>
//                         <th class="blue-star-2">Total</th>
//                         <th class="blue-star-2">view</th>
//                     </tr>
//                 </thead>
//                 <tfoot>
//                     <tr>
//                         <th class=" ">Order Id</th>
//                         <th class=" ">Name</th>
//                         <th class=" ">phno</th>
//                         <th class=" ">Email</th>
//                         <th class=" ">Order date</th>
//                         <th class=" ">Status</th>
//                         <th class=" ">Total</th> 
//                         <th class=" ">view</th> 
//                     </tr>
//                 </tfoot>
//                 <tbody>';
//                 while($row = mysqli_fetch_assoc($result)){
//                     $output .= "<tr><td class='text-center'>{$row["txnid"]}</td></tr>";
//                 }
//                 $output .="</tbody>
//                 </table>
//                 ";

//                 mysqli_close($conn);
//                 echo $output;

// }else{
//     each "<h2>No record Found</h2>";
// }


?>
<!-- 

<div id="myTable_filter" class="dataTables_filter"><label>Search:<input type="search" class="form-control form-control-sm" placeholder="" aria-controls="myTable"></label></div>
    <table class="table table-bordered mb-0" id="myTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th class="blue-star-2">Order Id</th>
                            <th class="blue-star-2">Name</th>
                            <th class="blue-star-2">phno</th>
                            <th class="blue-star-2">Email</th>
                            <th class="blue-star-2">Order date</th>
                            <th class="blue-star-2">Status</th>
                            <th class="blue-star-2">Total</th>
                            <th class="blue-star-2">view</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th class=" ">Order Id</th>
                            <th class=" ">Name</th>
                            <th class=" ">phno</th>
                            <th class=" ">Email</th>
                            <th class=" ">Order date</th>
                            <th class=" ">Status</th>
                            <th class=" ">Total</th> 
                            <th class=" ">view</th> 
                        </tr>
                    </tfoot>
                <tbody id="mytable">
                <?php
                        //     $ids = $_SESSION['id'];
						// 	$selectquery =mysqli_query($conn, "SELECT * FROM payments,product_page WHERE payments.pid = product_page.product_id AND product_page.company_id = '$ids'");
						// 	if(mysqli_num_rows($selectquery) > 0){
										
						// 			foreach($selectquery as $item){
						// 			 $order_id = $item['order_id'];
                        //              $p_id = $item['pid'];

                        // $payid = $item['payid'];
                        // $selectquery =mysqli_query($conn, "SELECT * FROM cart_order_item");
                        // if(mysqli_num_rows($selectquery) > 0){
                                    
                        //         foreach($selectquery as $dat){
                                      
                        //              $pid = $dat['pro_id'];}}
                        ?>
									
                    <tr>
                        <td><?= // $item['txnid']; ?></td>
                        <td><?= // $item['firstname']; ?> <?= $item['lastname']; ?></td>
                        <td><?= // $item['mobile']; ?></td>
                        <td><?= // $item['payer_email']; ?></td>
                        <td><?= // $item['order date']; ?></td>
                        <td>
                        <?php
                        //  if($item['track_order'] == 'Panding'){
                        //     echo '<span class="bg-process m-0 p-1 px-3 bor-r">processing</span>';
                        // }elseif($item['track_order'] == 'Completed' && $item['Status'] == 'success' ){
                        //     echo '<span class="bg-deliverd m-0 p-1 px-3 bor-r">delivered</span>';
                        // }elseif($item['track_order'] == 'Completed' && $item['Status'] == 'cancel' ){
                        //     echo '<span class="bg-cancel m-0 p-1 px-3 bor-r">Cancelled</span>';
                        // }
                            
                            ?>    
                        </td>
                        <td><?= // $item['amount']; ?></td>
                        <td class="d-flex"><a href="./Order-indetail.php?order=<?php echo urlencode ($order_id); ?>&id=<?php echo urlencode ($payid); ?>" class="m-auto"><i class="fa-solid fa-eye color-x1 "></i></a></td>
                    </tr>
                    <?php
										
									
							// }
                            // }
						?>
						
                   
                   
                   <tr><td id="table-data"></td></tr>
                </tbody>
            </table>
</body>
</html> -->




<?php
$action = $_REQUEST['action'];

if (!empty($action)) {
    require_once 'include/Player.php';
    $obj = new Player();
}

if ($action == 'search') {
    $queryString = (!empty($_GET['searchQuery'])) ? trim($_GET['searchQuery']) : '';
    $results = $obj->searchPlayer($queryString);
    echo json_encode($results);
    exit();
}
?>