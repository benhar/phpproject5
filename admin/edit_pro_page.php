<?php include('function/function.php'); ?>
<?php 
	$edit_id = $_GET['edit'];

if($_POST){
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
	
	$desc = $_POST['edit'];

	$sql = "UPDATE `product`.`product` SET `category` = '$_POST[category]',`title` = '$_POST[title]',`price` = '$_POST[price]',`desc` = '$_POST[desc]',`avail` = '$_POST[avail]',`image` = '$_POST[image]' WHERE `product`.`id` = '$edit_id' ;";

	// echo $sql;
	// exit();
	mysqli_query($con,$sql);

	$success = 1;
}

?>


<div class="content-wrapper">
	<!-- Content Header (content-wrapper) -->
	<section class="col-lg-offset-1 col-lg-10 user_area">
		<div class="box">
			<div class="box-header">
				<?php if(isset($success) && $success == 1):?>
					<div role="alert" class="alert alert-success">
						<strong>Well done!</strong> You successfully add the Shirt.
					</div>
				<?php endif;?>
				<div class="row">
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
							<?php
						$result = mysqli_query($con,"SELECT * FROM product WHERE id = '$edit_id'");
						while($row = mysqli_fetch_array($result)) {	
						?>
							<div class="form-group">
								<label for="title" class="col-sm-2 control-label">Title</label>
								<div class="col-sm-10">
									<input type="text" class="form-control" required id="title" name="title" value="<?php echo $row['title']?>">
								</div>
							</div>
							<div class="form-group">
								<label for="price" class="col-sm-2 control-label">Price</label>
								<div class="col-sm-10">
									<input type="text" class="form-control" required id="price" name="price" value="<?php echo $row['price']?>" placeholder="price">
								</div>
							</div>
							<div class="form-group">
								<label for="desc" class="col-sm-2 control-label">Desc</label>
								<div class="col-sm-10">
									<textarea name="desc" id="editor1" required placeholder="Description" cols="30" rows="10" class="form-control"><?php echo $row['desc']?></textarea>
								</div>
							</div>

							<div class="form-group">
								<div class="col-sm-offset-2 col-sm-10">
									<div class="radio">
										<label>
											<input type="radio" required name="avail" id="optionsRadios1" value="0" checked>
											Available
										</label>
									</div>
									<div class="radio">
										<label>
											<input type="radio" required name="avail" id="optionsRadios2" value="1">
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
									<button type="submit" class="btn btn-default">Edit Product</button>
								</div>
							</div>
						</form>
					<?php };?>
					</div>
				</div>
			</div>
		</div>
	</section>
</div>

<!-- footer -->
<?php include('include/footer.php'); 
include('include/bottom_link.php');
?>
<!-- ./footer -->

<script src="js/ckeditor/ckeditor.js"></script>
<script type="text/javascript">
	CKEDITOR.replace( 'editor1' );
</script>

<?php include('include/end.php'); ?>