
<?php

	// if(!isset($_SESSION['fname'])){
	// 	$_SESSION['msg'] = "please login";
	// 	header('location:../user/ulogin.php');
	// }
	include '../../php/config.php';
	include 'include/header.php';
	?>
<div class="d-flex" id="container">
	<div class="  hero-section-xr ms-auto">
	<div class="row">
		<div class="col-md-12">
			<div class="card">
				<div class="card-header">
					<h4>Categories</h4>
				</div>
				<div class="card-body" id="products_table"></div>
				<table class="table table-bordered table-striped text-center">
					<thead>
						<tr>
							<th>ID</th>
							<th>Name</th>
							<th>Image</th>
							<th>Status</th>
							<th colspan="2">Action</th>
						</tr>
					</thead>
					<tbody>
						<?php
							$selectquery =mysqli_query($conn, "SELECT * FROM product_page");
							if(mysqli_num_rows($selectquery) > 0){
										
									foreach($selectquery as $item)
									{$_SESSION['product_id'] = $item['product_id'];
										?>
											<tr>
												<td><?= $item['product_id']; ?></td>
												<td><?= $item['product_name']; ?></td>
												<td>
														<img src="multi_images/<?= $item['img']; ?>" height="50px" width="50px" alt="<?= $item['product_name']; ?>" srcset="">
												</td>
												<td>
													<?= $item['status'] == '0'? "Visible":"Hidden" ?>
												</td>
												<td>
													<a href="edit-product.php?id=<?= $item['product_id']; ?>" class="btn btn-primary">Edit</a>
													</td>
													<td>
												 <form action="code.php" method="post">
														
													<button type="button" class="btn btn-danger delete_product_btn" value="<?= $item['product_id']; ?>">Delete</button>
													</form>
												</td>
											</tr>
										<?php
									}
							}else{
								echo 'no records found';
							} 
							
						?>
						
					</tbody>
				</table>
			</div>
		</div>
	</div>
	</div>
</div>
<?php include 'include/footer.php'; ?>