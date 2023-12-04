<?php
include '../../php/config.php';

if(isset($_POST['action'])){
	$sql = "SELECT p.* FROM product_page p JOIN category c ON p.cat_id = c.cat_id WHERE p.company_name != ''";

	if(isset($_POST['cat_name'])){
		$cat_name = implode("','", $_POST['cat_name']);
		$sql .="AND cat_name IN('".$cat_name."')";
	}

	if(isset($_POST['company_name'])){
		$company_name = implode("','", $_POST['company_name']);
		$sql .="AND company_name IN('".$company_name."')";
	}

    // Check if both minimum and maximum prices are set
	if(isset($_POST['min_price']) && isset($_POST['max_price'])){
		$min_price = $_POST['min_price'];
		$max_price = $_POST['max_price'];
		// Filter products between minimum and maximum price
		$sql .= " AND price BETWEEN $min_price AND $max_price";
	}

	$result = $conn->query($sql);
	$output='';

	if($result->num_rows>0){
		while($row=$result->fetch_assoc()){
            $max_price = $row['dis_price'];
            $min_price = $row['price'];
            $percent_increase = number_format((($max_price - $min_price) / $min_price) * 100 , 0);
			$output .='<div class="col">
			<form action="cartlist.php" method="post">
				<div class="card" >	
				  <div class="d-flex justify-content-between p-3">
					
					<p class="lead mb-0">Todays Combo Offer</p>
					<div
					  class="bg-x rounded-circle d-flex align-items-center justify-content-center shadow-1-strong"
					  style="width: 35px; height: 35px;">
					  <p class="text-white mb-0 small">X'.$percent_increase.'</p>
					</div>
				  </div>
				  <img src="../company/multi_images/'.$row['img'].'"
					class="card-img-top" alt="'.$row['product_name'].'" />
				  <div class="card-body">
					<div class="d-flex justify-content-between">
					  <p class="small"><a href="#!" class="text-muted">'.$row['brand'].'</a></p>
					  <p class="small text-danger"><s>₹'.$row['dis_price'].'</s></p>
					</div>
		
					<div class="d-flex justify-content-between mb-3">
					<a  href="single.php?id='. $row["product_id"].'" <h6 class="mb-0">'.$row['product_name'].'</h6></a>
					  <P class="text-dark mb-0">₹'.$row['price'].'.00</P>
					</div>
		
					
					<input type="hidden" name="pro_id" value="'.$row['product_id'].'">
				
			
					<div class=" d-flex justify-content-between mt-3">
					<button  class="btn btn-bg-x1" name="wi1" data-mdb-toggle="tooltip"
                    title="Move to the wish list">
                    <i class="fas fa-heart"></i>
                  </button>
					
						<input type="submit" class="btn btn-sm bg-x1" name="submit"  value="Add To Cart">
				
					  
					</div>
				  </div>
				</div>
				</form>
			  </div>';
		}
	}else{
		$output .= "<h3>No Products Found! </h3>";
	}
	echo $output;
}
?>