<?php include('function/function.php'); ?>
<?php 

if($_POST){
	
		//echo '<pre>';
		//print_r($_FILES);

	
	$allowedExts = array("gif", "jpeg", "jpg", "png");
	$temp = explode(".", $_FILES["pro_image"]["name"]);
	$extension = end($temp);

	if ((($_FILES["pro_image"]["type"] == "image/gif")
		|| ($_FILES["pro_image"]["type"] == "image/jpeg")
		|| ($_FILES["pro_image"]["type"] == "image/jpg")
		|| ($_FILES["pro_image"]["type"] == "image/pjpeg")
		|| ($_FILES["pro_image"]["type"] == "image/x-png")
		|| ($_FILES["pro_image"]["type"] == "image/png"))
		&& ($_FILES["pro_image"]["size"] < 200000)
		&& in_array($extension, $allowedExts)) {
		if ($_FILES["pro_image"]["error"] > 0) {
			echo "Return Code: " . $_FILES["pro_image"]["error"] . "<br>";
		} else {
			//echo "Upload: " . $_FILES["pro_image"]["name"] . "<br>";
			//echo "Type: " . $_FILES["pro_image"]["type"] . "<br>";
			//echo "Size: " . ($_FILES["pro_image"]["size"] / 1024) . " kB<br>";
			//echo "Temp file: " . $_FILES["pro_image"]["tmp_name"] . "<br>";
			if (file_exists("../product/" . $_FILES["pro_image"]["name"])) {
				echo $_FILES["pro_image"]["name"] . " already exists. ";
			} else {
				move_uploaded_file($_FILES["pro_image"]["tmp_name"],
					"../product/" . $_FILES["pro_image"]["name"]);
				$image = "product/" . $_FILES["pro_image"]["name"];
			}
		}
	} else {
		echo "Invalid file";
	}
	
	$desc = $_POST['desc'];

	$sql = "INSERT INTO `product` (`id`, `category`, `title`, `price`, `desc`,  `avail`, `image`) VALUES (NULL, '$_POST[category]', '$_POST[title]', '$_POST[price]', '$_POST[desc]', '$_POST[avail]', '$image');";
		//echo $sql;
		//exit();
	mysqli_query($con,$sql);

	$success = 1;
	header('location: product_list.php');
}

?>




<div class="content-wrapper">
	<!-- Content Header (content-wrapper) -->
	<section class="col-lg-offset-1 col-lg-10 user_area">
		<div class="box">
			<div class="box-title">
				<div class="pull-left">
					<h3><i class="fa fa-cart-plus"></i> Add a new product</h3>
				</div>
				<div class="pull-right">
					<a href="add_product.php" class="btn btn-success"><i class="fa fa-cart-plus"></i> Add New</a>
				</div>
			</div>
			<div class="box-header user_area">
				<div class="row">
					<?php if(isset($success) && $success == 1):?>
						<div role="alert" class="alert alert-success">
							<strong>Well done!</strong> You successfully add the Shirt.
						</div>
					<?php endif;?>
					<div class="col-sm-offset-1 col-lg-8">
						<form class="form-horizontal" method="post" action="<?php echo   $_SERVER['PHP_SELF']; ?>" enctype="multipart/form-data" role="form">
							<div class="form-group">
								<label for="menu" class="col-sm-2 control-label">Category</label>
								<div class="col-sm-10">

									<select name="category" required class="form-control">
										<option value="">Select</option>
										<?php $menu = mysqli_query($con,"SELECT * FROM category");?>
										<?php while($row = mysqli_fetch_array($menu)) {	?>
										<option value="<?php echo $row['id']?>"><?php echo $row['category']?></option>
										<?php };?>
									</select>
								</div>
							</div>
							<div class="form-group">
								<label for="title" class="col-sm-2 control-label">Title</label>
								<div class="col-sm-10">
									<input type="text" class="form-control" required id="title" name="title" placeholder="title">
								</div>
							</div>
							<div class="form-group">
								<label for="price" class="col-sm-2 control-label">Price</label>
								<div class="col-sm-10">
									<input type="text" class="form-control" required id="price" name="price" placeholder="price">
								</div>
							</div>
							<div class="form-group">
								<label for="desc" class="col-sm-2 control-label">Desc</label>
								<div class="col-sm-10">
									<textarea name="desc" id="editor1" required placeholder="Description" cols="30" rows="10" class="form-control"></textarea>
								</div>
							</div>

							<div class="form-group">
								<div class="col-sm-offset-2 col-sm-10">
									<div class="radio">
										<label>
											<input type="radio" required name="avail" id="optionsRadios1" value="1" checked>
											Available
										</label>
									</div>
									<div class="radio">
										<label>
											<input type="radio" required name="avail" id="optionsRadios2" value="0">
											Out of Stock
										</label>
									</div>
								</div>
							</div>

							<div class="form-group">
								<div class="col-sm-offset-2 col-sm-10">
									<label for="exampleInputFile">Shirt Image</label>
									<input type="file" name="pro_image" id="exampleInputFile">
									<p class="help-block"></p>
								</div>
							</div>
							<div class="form-group">
								<div class="col-sm-offset-2 col-sm-10">
									<button type="submit" class="btn btn-default">Add Product</button>
								</div>
							</div>
						</form>
					</div>
				</div><!-- /row -->
			</div>
		</div>
	</section>
</div>


<!-- footer -->
<?php include('include/footer.php'); 
include('include/bottom_link.php');
?>
<!-- ./footer -->

 <!-- <script src="js/ckeditor/ckeditor.js"></script>
<script type="text/javascript">
	CKEDITOR.replace( 'editor1' );
</script> -->

<?php include('include/end.php'); ?>