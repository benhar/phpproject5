<?php include('function/function.php'); ?>
<?php 

if(isset($_GET['delete'])){
	$delete_id = $_GET['delete'];
	mysqli_query($con,"DELETE FROM category WHERE id='$delete_id'");
	$success = 1;
}

$edit_id = $_GET['edit'];
	
	if($_POST){
	
		
		$sql = "UPDATE `category` SET `category` = '$_POST[category]' WHERE `id` = '$edit_id' ;";
		
		mysqli_query($con,$sql);
		
		$success = 2;
	}


$result = mysqli_query($con,"SELECT * FROM category");

?>


<div class="content-wrapper">
	<!-- Content Header (content-wrapper) -->
	<section class="col-lg-offset-1 col-lg-10 user_area">
		<div class="box">
			<div class="box-title">
				<div class="part-left">
					<h3><i class="fa fa-users" aria-hidden="true"></i> All User Information</h3>
				</div>
				<div class="part-right">
					<a href="category.php" class="btn btn-success">Add category</a>
				</div>
			</div>
			<div class="fix"></div>
			<div class="box-header">
				<?php if(isset($success) && $success == 1):?>
					<div role="alert" class="alert alert-warning">
						<strong>Well done!</strong> You successfully Delete the user.
					</div>
				<?php endif;?>
				<div class="row">
					<div class="col-lg-12">
						<div class="box-body">
							<table id="example1" class="table table-bordered table-striped">
								<thead>
									<tr>
										<th>Category</th>
										<th>Edit</th>
										<th>Delete</th>

									</tr>
								</thead>
								<tbody>
									<?php while($row = mysqli_fetch_array($result)) {	?>
									<tr>
										
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
		</div>
	</section>
	<section class="col-lg-offset-1 col-lg-10 user_area">
		<div class="box box-solid">
			<div class="box-header ">
				<!-- tools box -->
				<h4><i class="fa fa-category"></i> Update Category</h4>
				<?php if(isset($success) && $success == 2):?>
					<div role="alert" class="alert alert-success">
						<strong>Well done!</strong> You successfully Update the Category.
					</div>
				<?php endif;?>
				<div class="row">
					<div class="col-sm-offset-1 col-lg-8 user_area">

						<?php 
						$result = mysqli_query($con,"SELECT * FROM category WHERE id = '$edit_id'");
						while($row = mysqli_fetch_array($result)) {	
							?>

							<form class="form-horizontal" method="post" action="" role="form">
								<div class="form-group">
									<label for="category" class="col-sm-3 control-label">category </label>
									<div class="col-sm-9">
										<input type="text" class="form-control" id="category" value="<?php echo $row['category']?>" name="category" placeholder="User Name">
									</div>
								</div>
								<div class="form-group">
									<div class="col-sm-offset-3 col-sm-9">
										<button type="submit" class="btn btn-default">Update Cat</button>
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
	include('include/end.php');
	?>
<!-- ./footer -->