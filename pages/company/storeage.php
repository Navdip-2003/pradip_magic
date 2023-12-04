<div class="row">
		<div class="col-md-12">
			<div class="card">
				<div class="card-header">
					<h4>Categories</h4>
				</div>
				<div class="card-body"></div>
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
						$ids = $_SESSION['id'];
							$selectquery =mysqli_query($conn, "SELECT * FROM category WHERE company_id = '$ids'");
							if(mysqli_num_rows($selectquery) > 0){
									foreach($selectquery as $item)
									{
										?>
											<tr>
												<td><?= $item['cat_id']; ?></td>
												<td><?= $item['cat_name']; ?></td>
												<td>
														<img src="uploads/<?= $item['image']; ?>" height="50px" width="50px" alt="<?= $item['cat_name']; ?>" srcset="">
												</td>
												<td>
													<?= $item['status'] == '0'? "Visible":"Hidden" ?>
												</td>
												<td>
													<a href="edit-category.php?id=<?= $item['cat_id']; ?>" class="btn btn-primary">Edit</a>
													</td>
													<td>
													<!-- <form action="code.php" method="post">
														<input type="hidden" name="category_id" value="<?= $item['cat_id']; ?>"> -->
													<button type="submit" class="btn btn-danger delete_category_btn" value="<?= $item['cat_id']; ?>">Delete</button>
													<!-- </form> -->
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
    