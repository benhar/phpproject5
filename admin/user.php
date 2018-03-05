<?php include('function/function.php'); ?>
<?php 

if(isset($_GET['delete'])){
	$delete_u_id = $_GET['delete'];
	mysqli_query($con,"DELETE FROM admin WHERE u_id='$delete_u_id'");
	$success = 1;
}

$result = mysqli_query($con,"SELECT * FROM admin");

?>

<div class="content-wrapper">
	<!-- Content Header (content-wrapper) -->
	<section class="col-lg-offset-1 col-lg-10 user_area">
		<div class="box">
			<div class="box-title">
				<div class="pull-left">
					<h3><i class="fa fa-users" aria-hidden="true"></i> All User Information</h3>
				</div>
				<div class="pull-right">
					<a href="add_user.php" class="btn btn-success">Add user</a>
				</div>
			</div>
			<div class="fix"></div>
			<div class="box-header ">
				<?php if(isset($success) && $success == 1):?>
					<div role="alert" class="alert alert-warning">
						<strong>Well done!</strong> You successfully Delete the user.
					</div>
				<?php endif;?>
				<div class="row">
					<div class="col-lg-12">

						<table class="table table-striped table-hover">
							<thead>
								<tr>
									<th>#</th>
									<th>User Name</th>
									<th>Password</th>
									<th>Edit</th>
									<th>Delete</th>
									
								</tr>
							</thead>
							<tbody>
								<?php while($row = mysqli_fetch_array($result)) {	?>
								<tr>
									<td><?php echo $row['u_id']?></td>
									<td><?php echo $row['username']?></td>
									<td><?php echo $row['password']?></td>
									<td><a href="edit_user.php?edit=<?php echo $row['u_id'];?>" class="btn btn-info">Edit</a></td>
									<td><a href="user.php?delete=<?php echo $row['u_id'];?>" class="btn btn-danger">Delete</a></td>
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