<?php
include '../../php/config.php';

if(isset($_POST['add_category_btn']))
{
	$name = $_POST['name'];
	$company_id = $_SESSION['id'];
	$description = $_POST['description'];
	// $meta_title = $_POST['meta_title'];
	// $meta_description = $_POST['meta_description'];
	// $meta_keywords = $_POST['meta_keywords'];
	// $status = isset($_POST['status']) ? '1':'0';
	// $popular = isset($_POST['popular']) ? '1':'0';

	$image = $_FILES['image']['name'];

	$path = "uploads";

	$image_ext = pathinfo($image, PATHINFO_EXTENSION);
	$filename = time().'.'.$image_ext;

	$cate_query = "INSERT INTO category(cat_name,company_id,description,image)
	VALUES ('$name','$company_id','$description','$filename') ";
	$cate_query_run = mysqli_query($conn, $cate_query);
	if($cate_query_run){
		move_uploaded_file($_FILES['image']['tmp_name'], $path.'/'.$filename);
		$_SESSION['msg'] = "Add Category Successfully";
		header("Location:category.php");
	}else{
		$_SESSION['msg'] = "some thing is wrong ";
		header("Location:category.php");
	}
}
elseif(isset($_POST['update_category_btn'])){
	$category_id = $_POST['category_id'];
	$name = $_POST['name'];
	// $slug = $_POST['slug'];
	$description = $_POST['description'];


	$new_image = $_FILES['image']['name'];
	$old_image = $_POST['old_image'];

	if($new_image != "")
	{
		$update_filename = $new_image;
	}
	else
	{
		$update_filename = $old_image;
	}
	$path = "uploads";
	$update_query = "UPDATE category SET cat_name='$name',description='$description',image='$update_filename' WHERE cat_id='$category_id'";
	$update_query_run = mysqli_query($conn, $update_query);
	if($update_query_run)
	{
		if($_FILES['image']['name'] != "")
		{
			move_uploaded_file( $_FILES['image']['tmp_name'], $path.'/'.$new_image);
			if(file_exists("uploads/".$old_image))
			{
				unlink("uploads/".$old_image);
			}
		}
		$_SESSION['msg'] = "Category Updated Successfully";
		header("Location:category.php");
	}
	else
	{
		$_SESSION['msg'] = "some thing went wrong";
		header("Location:edit-category.php?id=$category_id");
	}
}
elseif(isset($_POST['delete_category_btn']))
{
	$cat_id = mysqli_real_escape_string($conn, $_POST['cat_id']);

	$category_query = "SELECT * FROM category WHERE cat_id=$cat_id";
	$category_query_run = mysqli_query($conn, $category_query);
	$category_data = mysqli_fetch_array($category_query_run);
	$image = $category_data['image'];

	$delete_query = "DELETE FROM category WHERE cat_id=$cat_id";
	$delete_query_run = mysqli_query($conn, $delete_query);

	if($delete_query_run)
	{
		if(file_exists("uploads/".$image))
			{
				unlink("uploads/".$image);
			}
		// $_SESSION['msg'] = "Category Deleted Successfully";
		// header("Location:category.php?id=$category_id");
		echo 200;
	}else{
		// $_SESSION['msg'] = "ASome Thing Went Wrong";
		// header("Location:category.php?id=$category_id");
		echo 500;
	}
}

elseif(isset($_POST['add_product_btn']))
{
	$company_id = $_SESSION['id'];
	$category_id = $_POST['category_id'];
	$name = $_POST['name'];
	$company = $_POST['company'];
	$description = $_POST['description'];
	$origanal_price = $_POST['origanal_price'];
	$selling_price = $_SESSION['price'] = $_POST['selling_price'];
	$company_name = $_SESSION['company_name'];
	$country = $_POST['country'];
	$subtitle = $_POST['subtitle'];
	$edate = $_POST['edate'];
	$ingredients = $_POST['ingredients'];
	$address = $_POST['address'];
	$status = isset($_POST['status']) ? '1':'0';
	$trending = isset($_POST['trending']) ? '1':'0';

	$images = $_FILES['image']['name'];

	$path = "uploads";
	$pathh = $_SESSION['path'] = "multi_images";

	$image_ext = pathinfo($images, PATHINFO_EXTENSION);
	$filename = time().'.'.$image_ext;

	$product_query = "INSERT INTO product_page(Company_id,company_name,dis_price,price,product_name,cat_id,description,country,subtitle,expiry_date,Ingredients,Address,status,trending,delete_status,img)
	VALUES ('$company_id','$company_name','$origanal_price','$selling_price','$name','$category_id','$description','$country','$subtitle','$edate','$ingredients','$address','$status','$trending','active','$filename') ";
	$product_query_run = mysqli_query($conn, $product_query);
	$id=mysqli_insert_id($conn);

	
	foreach($_FILES['product_images']['name'] as $key=>$val){
		$image=$_FILES['product_images']['name'][$key];
					mysqli_query($conn,"insert into product_images(product_id,product_images) values('$id','$image')");
	
						move_uploaded_file($_FILES['product_images']['tmp_name'][$key], $pathh.'/'.$image);
					}
	if($product_query_run){
		move_uploaded_file($_FILES['image']['tmp_name'], $pathh.'/'.$filename);
		$_SESSION['msg'] = "Add Product Successfully";
		header("Location:Total-pro.php");
	}else{
		$_SESSION['msg'] = "some thing is wrong ";
		header("Location:Total-pro.php");
	}
}
elseif(isset($_POST['update_product_btn']))
{
	$product_id = $_POST['product_id'];
	$category_id = $_POST['category_id'];
	$name = $_POST['name'];
	$country = $_POST['country'];
	$subtitle = $_POST['subtitle'];
	$description = $_POST['description'];
	$origanal_price = $_POST['origanal_price'];
	$selling_price = $_POST['selling_price'];
	$edate = $_POST['edate'];
	$ingredients = $_POST['ingredients'];
	$address = $_POST['address'];
	$status = isset($_POST['status']) ? '1':'0';
	$trending = isset($_POST['trending']) ? '1':'0';

	$new_image = $_FILES['image']['name'];
	$old_image = $_POST['old_image'];
	

	$path  = "uploads";
	$pathh = "multi_images";


	

	$image_ext = pathinfo($image, PATHINFO_EXTENSION);
	$filename = time().'.'.$image_ext;
	if($new_image != "")
	{
		$update_filename = $new_image;
	}
	else
	{
		$update_filename = $old_image;
	}
	$path = "uploads";
	$update_query = "UPDATE product_page SET cat_id='$category_id',product_name='$name',country='$country',description='$description',dis_price='$origanal_price',price='$selling_price',expiry_date='$edate',Ingredients='$ingredients',Address='$address',status='$status',trending='$trending',img='$update_filename' WHERE product_id='$product_id'";
	$update_query_run = mysqli_query($conn, $update_query);
	// $id=mysqli_insert_id($conn);

	foreach($_FILES['product_images']['name'] as $key=>$val){
		if($_FILES['product_images']['name'][$key]!=''){
			if(isset($_POST['product_images_id'][$key])){
				$image=$_FILES['product_images']['name'][$key];
				$old_product_image = $_POST['old_product_images'][$key];
				move_uploaded_file($_FILES['product_images']['tmp_name'][$key],$pathh.'/'.$image);
			 $update_product_query = mysqli_query($conn,"update product_images set product_images='$image' where id='".$_POST['product_images_id'][$key]."'");
			 if($update_product_query){
				if(file_exists("multi_images/".$old_product_image))
			{
				unlink("multi_images/".$old_product_image);
			}
			 }
			}else{
				$image=$_FILES['product_images']['name'][$key];
				move_uploaded_file($_FILES['product_images']['tmp_name'][$key],$pathh.'/'.$image);
				mysqli_query($conn,"insert into product_images(product_id,product_images) values('$product_id','$image')");
			}
			
		}
	}

	if($update_query_run)
	{
		if($_FILES['image']['name'] != "")
		{
			move_uploaded_file( $_FILES['image']['tmp_name'], $pathh.'/'.$new_image);
			if(file_exists("multi_images/".$old_image))
			{
				unlink("multi_images/".$old_image);
			}
		}
		$_SESSION['msg'] = "Product Updated Successfully";
		header("Location:Total-pro.php");
	}
	else
	{
		$_SESSION['msg'] = "some thing went wrong";
		header("Location:edit-product.php?id=$product_id");
	}
}
elseif(isset($_POST['delete_product_btn']))
{
	$product_id = mysqli_real_escape_string($conn, $_POST['product_id']);
	// $delete_status = $_POST['delete_stauts'];
	// $product_query = "SELECT * FROM product_page WHERE product_id=$product_id";
	// $product_query_run = mysqli_query($conn, $product_query);
	// $product_data = mysqli_fetch_array($product_query_run);
	// $image = $product_data['img'];

	$delete_query = "UPDATE product_page SET delete_status = 'inactive' WHERE product_id=$product_id";
	$delete_query_run = mysqli_query($conn, $delete_query);

	if($delete_query_run)
	{
		// if(file_exists("multi_images/".$image))
		// 	{
		// 		unlink("multi_images/".$image);
		// 	}
		// $_SESSION['msg'] = "product Deleted Successfully";
		// header("Location:product.php?id=$product_id");
		echo 200;
	}else{
		// $_SESSION['msg'] = "ASome Thing Went Wrong";
		// header("Location:product.php?id=$product_id");
		echo 500;
	}
}elseif(isset($_POST['admin_submit'])){
	$email = $_POST['email'];
	$password = $_POST['password'];

	$search_email = "SELECT * FROM admin_register WHERE email = '$email'";
	$query = mysqli_query($conn,$search_email);

	$email_row = mysqli_num_rows($query);
// echo "<pre>";
// print_r($email_row);
	if($email_row > 0){
		$email_pass = mysqli_fetch_assoc($query);
		
		$pass = $email_pass['password'];
		
	
		
		$pass_verify = password_verify($password, $pass);
		if($pass_verify){
			$_SESSION['loggedin'] = true;
		
			$_SESSION['admin_email'] = $email_pass['email'];
			$_SESSION['id'] = $email_pass['id'];
			$_SESSION['company_name'] = $email_pass['company_name'];
			// $_SESSION['role_as'] = $email_pass['role_as'];
			// $role_as = $_SESSION['role_as'];
			

			

			if($_SESSION['status'] == 'inactive' && $_SESSION['status'] == 'panding' && $email != null){
				header("Location:../pages/user/ulogin.php?error=Please verify Email ..");
				exit();
			}

			// if($role_as == 1){
			// 	header('location:../pages/admin/index.php');
			// }else{
				
				if(isset($_POST['rememberme'])){
					setcookie('emailcookie',$email,time()+86400);
					setcookie('passwordcookie',$password,time()+86400);
					header('location:../company/index.php');
				}else{
					
					header('location:../company/index.php');

				}
		}else{
			$_SESSION['msg'] = 'Invalid Possword';
			header("Location:../company/admin-login.php");
		exit();
		}
	}else{
		$_SESSION['msg'] = 'Invalid Email';
			header("Location:../company/admin-login.php");
		exit();
	}

	}elseif(isset($_POST['forget_pwd_button'])) {
		$email = mysqli_real_escape_string($conn, $_POST['email']);
		
		$selectquery = "SELECT * FROM admin_register WHERE email = '$email'";
		$query = mysqli_query($conn, $selectquery);
	
		$row = mysqli_num_rows($query);
		if ($row) {	
	
			$fnamedata= mysqli_fetch_array($query);
	
			// $fname = $fnamedata['fname'];
			$token = $fnamedata['token'];
	
							$subject = "Password Reset";
							// $body = $data;
							$body = "Hi,  Click here too resert your password http://localhost/pradip%20git/pro_magic/pages/company/admin-set-password.php?token=$token ";
							// $body = "your opt is ".$otp;
							$headers = "From: pd12911291@gmail.com";
							$headers .= "MIME-Version: 1.0\r\n";
							$headers .= "Content-type: text/html\r\n";
	
							if (mail($email, $subject, $body, $headers)) {
								$_SESSION['msg'] = "Ckeck you mail to reset your password $email ";
								header("Location:../company/admin-login.php");
							} else {
								echo "Email sending failed...";
							}
							// End email verify code
						} else {
							header("Location:../company/admin-forgot.php?error=No Email Found");
							exit();
						}
					
		}elseif(isset($_POST['replay_submit'])){
	$company_id = $_SESSION['id'];
	$customer_id = $_POST['customer_id'];
	$user_id = $_POST['user_id'];
	$customer_name = $_POST['customer_name'];
	$subject = $_POST['subject'];
	$email = $_POST['email'];
	$description = $_POST['description'];

	$compaint_query = "INSERT INTO replay_complaint(company_id,user_id,compaint_id,customer_name,re_subject,re_email,re_description) VALUES ('$company_id','$user_id','$customer_id','$customer_name','$subject','$email','$description')";
	$compaint_query_run = mysqli_query($conn, $compaint_query);

	if($compaint_query_run){
		
		?>
		<script>
					alert("Replay Send Successfully");
					location.replace("FeedBack.php");
				</script>
		<?php
	}else{
		?>
		<script>
					alert("some thing is wrong");
					location.replace("FeedBack.php");
				</script>
		<?php
	}
}elseif(isset($_POST['company_submit'])) {
	$company_name = mysqli_real_escape_string($conn, $_POST['company_name']);
	$company_id = mysqli_real_escape_string($conn, $_POST['company_id']);
	$gst_no = mysqli_real_escape_string($conn, $_POST['gst_no']);
	$bank_name = mysqli_real_escape_string($conn, $_POST['bank_name']);
	$bank_no = mysqli_real_escape_string($conn, $_POST['bank_no']);
	$mobile = mysqli_real_escape_string($conn, $_POST['mobile']);
	$company_email = mysqli_real_escape_string($conn, $_POST['company_email']);
	$password = mysqli_real_escape_string($conn, $_POST['password']);
	$cpassword = mysqli_real_escape_string($conn, $_POST['cpassword']);

	$pass = password_hash($password, PASSWORD_BCRYPT);
	$cpass = password_hash($cpassword, PASSWORD_BCRYPT);

	$image = $_FILES['image']['name'];

	$path = "company_logo";

	$image_ext = pathinfo($image, PATHINFO_EXTENSION);
	$filename = time().'.'.$image_ext;

	$token = bin2hex(random_bytes(15));



	$selectquery = "SELECT * FROM admin_register WHERE gst_no = '$gst_no' and email = '$company_email'";
	$query = mysqli_query($conn, $selectquery);

	$row = mysqli_num_rows($query);
	$email_pass = mysqli_fetch_assoc($query);

	$_SESSION['company_name'] = $email_pass['company_name'];

	if ($row > 0) {
		$_SESSION['msg'] = "Email and GST Number Is Already Register..!";
		header("Location:admin-registration.php");
		exit();
	} else {     //      echo 'Password should be at least 8 characters in length and should include at least one upper case letter, one number, and one special character.';
		if ($company_id != "" && $bank_name != "" && $bank_no != "" ) {
			if ($password === $cpassword) {	
				if(strlen($mobile) == 10 && strlen($bank_no) == 12) {	
					$insertquery = "INSERT INTO admin_register(company_name, company_id, gst_no, Image, email, mobile_no, bank_name, Account_no, password, cpassword, token, status) VALUES('$company_name','$company_id','$gst_no','$filename','$company_email','$mobile','$bank_name','$bank_no','$pass','$cpass','$token','inactive')";
					$query = mysqli_query($conn, $insertquery);
					// header("location:http://localhost/project%20ecommrce/php/userregi_email.php?id='$email'");

					if ($query) {
						// Email verify code
						$subject = "Simple Email Test via PHP";
						// $body = $data;
						$body = "Hi, $company_name. Click here too activate your account http://localhost/pradip%20git/pro_magic/pages/company/company_active.php?token=$token ";
						// $body = "your opt is ".$otp;
						$headers = "From: pd12911291@gmail.com";
						$headers .= "MIME-Version: 1.0\r\n";
						$headers .= "Content-type: text/html\r\n";

						if (mail($company_email, $subject, $body, $headers)) {
							move_uploaded_file($_FILES['image']['tmp_name'], $path.'/'.$filename);
							$_SESSION['msg'] = "Ckeck you mail to activate your account $email ";
							header("Location:admin-login.php");
						} else {
							move_uploaded_file($_FILES['image']['tmp_name'], $path.'/'.$filename);
							$_SESSION['msg'] = "Email sending failed...";
							header("Location:admin-registration.php");
						exit();
						}
						// End email verify code
					} else {
						$_SESSION['msg'] = "Data Not Inserted..!";
						header("Location:admin-registration.php");
						exit();
					}
				} else {
					$_SESSION['msg'] = "Please Enter Invalid Number";
					header("Location:admin-registration.php");
					exit();
				}
			} else {	
				$_SESSION['msg'] = "Password Is Not Match..!";
				header("Location:admin-registration.php");
				exit();
			}
		} else {
			$_SESSION['msg'] = "Please Fill The Form..!";
			header("Location:admin-registration.php");
			exit();
		}
	}

	
}elseif(isset($_POST['company_edit_profile'])){
	$id = $_SESSION['id'];
	$email = $_POST['email'];
	$mobile_no = $_POST['mobile_no'];
	$bank_name = $_POST['bank_name'];
	$account_no = $_POST['account_no'];
	$address = $_POST['address'];

	$update_profile_query = "update admin_register set email='$email', mobile_no = '$mobile_no', bank_name = '$bank_name', Account_no = '$account_no', company_address = '$address' where id = '$id'";
	$update_profile_query_run = mysqli_query($conn, $update_profile_query);
if($update_profile_query_run){
	$_SESSION['msg'] = "Profile Updated Successfully";
		header("Location:myaccount.php");
}else{
	$_SESSION['msg'] = "some thing went wrong";
		header("Location:myaccount.php");
}

}elseif(isset($_POST['change_image'])){
	$id = $_SESSION['id'];
	$new_image = $_FILES['new_image']['name'];
	$old_image = $_POST['image'];

	if($new_image != "")
	{
		$update_filename = $new_image;
	}
	else
	{
		$update_filename = $old_image;
	}
	$path = "company_logo";
	
	$update_profile_query = "update admin_register set Image='$update_filename' where id = '$id'";
	$update_profile_query_run = mysqli_query($conn, $update_profile_query);
if($update_profile_query_run){
	if($_FILES['new_image']['name'] != "")
		{
			move_uploaded_file( $_FILES['new_image']['tmp_name'], $path.'/'.$new_image);
			if(file_exists("company_logo/".$old_image))
			{
				unlink("company_logo/".$old_image);
			}	 
			 header("Location:myaccount.php");
	  
    }else{
		$_SESSION['msg'] = "some thing went wrong";
  header("Location:myaccount.php");
    }

}
}elseif(isset($_POST['track_number'])){
$pay_id = $_POST['pay_id'];
$status = $_POST['order_complete'];

// $selectquery = mysqli_query($conn, "SELECT * FROM payments,product_page WHERE payments.payid = $pay_id AND product_page.product_id = payments.pid");
// // if (mysqli_num_rows($selectquery) > 0) 
//   $row = mysqli_fetch_array($selectquery);
   
// 	$datetime = $row['payment_date'];
// 	$p_id = $row['pid'];
// 		  $payid = $row['payid'];

$update_ststus_query = "update payments set track_order='$status' where payid = '$pay_id'";
	$update_ststus_query_run = mysqli_query($conn, $update_ststus_query);
	if($update_ststus_query_run){
		echo  "status Updated Successfully";
			header("Location:orders.php");
	}else{
		echo  "some thing went wrong";
			header("Location:orders.php");
	}
}elseif(isset($_POST['delete_complaint_replay'])){
	$complaint_replay_id = $_POST['complaint_replay_id'];

	
	$delete_query = "DELETE FROM replay_complaint WHERE replay_id=$complaint_replay_id";
	$delete_query_run = mysqli_query($conn, $delete_query);

	if($delete_query_run){
		$_SESSION['msg'] = " Replay Delete successflly";
		header("Location:FeedBack.php");
	}else{
		$_SESSION['msg'] = "some thing went wrong";
		header("Location:FeedBack.php");
	}
}

?>