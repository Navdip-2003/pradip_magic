

<?php

include '../../php/config.php';



if(isset($_POST['rating_value'])){

    

if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}


    $user_id =$_SESSION['user_id'];
   $product_id = $_SESSION['review_product_id'];
    $rating_value = $_POST['rating_value'];
    $userName = $_POST['userName'];
    $userMessage = $_POST['userMessage'];

    
$sql = "INSERT INTO rating (product_id, user_id, name, rating, message)
VALUES ('$product_id', '$user_id', '$userName', '$rating_value', '$userMessage')";
$result = mysqli_query($conn, $sql);

}


if ($result) {
  echo "New Review Added Successfully";
  header("Location:single.php");
  unset($_SESSION['review_product_id']);
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);





if(isset($_POST['action'])){
  $avgRatings = 0;
  $avgUserRatings = 0;
  $totalReviews = 0;
  $totalRatings5 = 0;
  $totalRatings4 = 0;
  $totalRatings3 = 0;
  $totalRatings2 = 0;
  $totalRatings1 = 0;
  $ratingsList = array();
  $totalRatings_avg = 0;



  $sql = "SELECT * FROM rating ORDER BY rating_id DESC";
  $result = mysqli_query($conn, $sql);
 
  while($row = mysqli_fetch_assoc($result)) {
    $ratingsList[] = array(
      'review_id' => $row['rating_id'],
      'product_id' => $row['product_id'],
      'name' => $row['name'],
      'rating' => $row['rating'],
      'message' => $row['message'],
      'datetime' => $row['create_at']
    );
    if($row['rating'] == '5'){
      $totalRatings5++;
    }
    if($row['rating'] == '4'){
      $totalRatings4++;
    }
    if($row['rating'] == '3'){
      $totalRatings3++;
    }
    if($row['rating'] == '2'){
      $totalRatings2++;
    }
    if($row['rating'] == '1'){
      $totalRatings1++;
    }
    $totalReviews++;
    $totalRatings_avg = $totalRatings_avg + intval($row['rating']);  
  }
  $avgUserRatings = $totalRatings_avg / $totalReviews;

  $output = array( 
    'avgUserRatings' => number_format($avgUserRatings, 1),
    'totalReviews' => $totalReviews,
    'totalRatings5' => $totalRatings5,
    'totalRatings4' => $totalRatings4,
    'totalRatings3' => $totalRatings3,
    'totalRatings2' => $totalRatings2,
    'totalRatings1' => $totalRatings1,
    'ratingsList' => $ratingsList
  );

  echo json_encode($output);
}



// Query the total number of orders
$query = "SELECT COUNT(*) as total_orders FROM orders";
$result = mysqli_query($conn, $query);
$row = mysqli_fetch_assoc($result);

// Return the total number of orders as JSON
echo json_encode($row);

?>
