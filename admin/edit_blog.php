<?php include('function/function.php'); ?>
<?php 
	$edit_id = $_GET['edit'];
	
	if($_POST){
	
		
		$sql = "UPDATE `blog` SET `title` = '$_POST[title]', `desc` = '$_POST[desc]' WHERE `id` = '$edit_id' ;";
		
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
							
						<?php
						$result = mysqli_query($con,"SELECT * FROM blog WHERE id = '$edit_id'");
						while($row = mysqli_fetch_array($result)) {	
						?>
							<div class="form-group">
								<label for="title" class="col-sm-2 control-label">Title</label>
								<div class="col-sm-10">
									<input type="text" class="form-control" required id="title" name="title" value="<?php echo $row['title']?>">
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

<!-- <script src="js/ckeditor/ckeditor.js"></script>
<script type="text/javascript">
	CKEDITOR.replace( 'editor1' );
</script> -->

<?php include('include/end.php'); ?>