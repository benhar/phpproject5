<?php include('function/function.php'); ?>
<?php

if($_POST){
	$sql = "INSERT INTO `category`(`id`, `category`) VALUES (NULL, '$_POST[category]');";
		mysqli_query($con,$sql);
		
		$success = 1;
	}


$edit_id = $_GET['edit'];
	
	if($_POST){
		$sql = "UPDATE `category` SET `category` = '$_POST[category]' WHERE `id` = '$edit_id' ;";
		mysqli_query($con,$sql);
		
		$success = 2;
	}

if(isset($_GET['delete'])){
	$delete_id = $_GET['delete'];
	mysqli_query($con,"DELETE FROM category WHERE id='$delete_id'");
	$success = 3;
}

?>



<div class="content-wrapper">
	<!-- Content Header (content-wrapper) -->
	<section class="col-lg-offset-1 col-lg-10 user_area">
		<div class="box">
			<div class="box-header">
				<?php if(isset($success) && $success == 1):?>
					<div role="alert" class="alert alert-success">
						<strong>Well done!</strong> You successfully add this category.
					</div>
				<?php endif;?>
				<?php if(isset($success) && $success == 2):?>
					<div role="alert" class="alert alert-info">
						<strong>Well done!</strong> You successfully add this Update.
					</div>
				<?php endif;?>
				<?php if(isset($success) && $success == 3):?>
					<div role="alert" class="alert alert-warning">
						<strong>Well done!</strong> You successfully add this Delete.
					</div>
				<?php endif;?>
				<div class="row">
					<div class="col-sm-offset-1 col-lg-8">
						<form class="form-horizontal" method="post" action="<?php echo   $_SERVER['PHP_SELF']; ?>" role="form">
							<div class="form-group">
								<label for="category" class="col-sm-2 control-label">Category</label>
								<div class="col-sm-10">
									<input type="text" class="form-control" id="category" name="category" value="<?php echo $row['category']?>" placeholder="category">
								</div>
							</div>
							<div class="form-group">
								<div class="col-sm-offset-2 col-sm-10">
									<button type="submit" class="btn btn-default">Add category</button>
								</div>
							</div>
						</form>

					</div>
				</div>

				<?php $category = mysqli_query($con,"SELECT * FROM category");?>

				<div class="row">
					<div class="col-lg-6">

						<table class="table table-striped table-hover">
							<thead>
								<tr>
									<th>#</th>
									<th>Category</th>
									<th></th>
									<th></th>
								</tr>
							</thead>
							<tbody>
								<?php while($row = mysqli_fetch_array($category)) {	?>
								<tr>
									<td><?php echo $row['id']?></td>
									<td><?php echo $row['category']?></td>
									<td><a href="edit_cat.php?edit=<?php echo $row['id'];?>" class="btn btn-info">Edit</a></td>
									<td><a href="category.php?delete=<?php echo $row['id'];?>" class="btn btn-danger">Delete</a></td>
								</tr>

								<?php };?>
							</tbody>
						</table>


					</div>
				</div>
			</div>
		</div>
	</section>
</div>

<!-- footer -->
<?php include('include/footer.php'); 
include('include/bottom_link.php');
include('include/end.php');
?>
<!-- ./footer -->