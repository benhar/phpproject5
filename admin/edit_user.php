<?php include('function/function.php'); ?>
<?php 

if(isset($_GET['delete'])){
	$delete_u_id = $_GET['delete'];
	mysqli_query($con,"DELETE FROM admin WHERE u_id='$delete_u_id'");
	$success = 1;
}

$edit_id = $_GET['edit'];

if($_POST){
	$sql = "UPDATE `admin` SET `username` = '$_POST[username]',`password` = '$_POST[password]' WHERE `u_id` = '$edit_id' ;";

	mysqli_query($con,$sql);

	$success = 2;
}
$result = mysqli_query($con,"SELECT * FROM admin");
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
					<a href="add_user.php" class="btn btn-success">Add user</a>
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
		</div>
	</section>
	<section class="col-lg-offset-1 col-lg-10 user_area">
		<div class="box box-solid">
			<div class="box-header ">
				<!-- tools box -->
				<h4><i class="fa fa-user"></i> Update User Information</h4>
				<?php if(isset($success) && $success == 2):?>
					<div role="alert" class="alert alert-success">
						<strong>Well done!</strong> You successfully edit the user.
					</div>
				<?php endif;?>
				<div class="row">
					<div class="col-sm-offset-1 col-lg-8 user_area">

						<?php 
						$result = mysqli_query($con,"SELECT * FROM admin WHERE u_id = '$edit_id'");
						while($row = mysqli_fetch_array($result)) {	
							?>

							<form class="form-horizontal" method="post" action="" role="form">
								<div class="form-group">
									<label for="username" class="col-sm-3 control-label">User Name </label>
									<div class="col-sm-9">
										<input type="text" class="form-control" id="username" value="<?php echo $row['username']?>" name="username" placeholder="User Name">
									</div>
								</div>
								<div class="form-group">
									<label for="slug" class="col-sm-3 control-label">Password</label>
									<div class="col-sm-9">
										<input type="text" class="form-control" id="Password" value="<?php echo $row['password']?>" name="password" placeholder="Password">
									</div>
								</div>


								<div class="form-group">
									<div class="col-sm-offset-3 col-sm-9">
										<button type="submit" class="btn btn-default">Update User</button>
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