<?php include('function/function.php'); ?>
<?php 

if($_POST){
	
	$sql = "INSERT INTO `admin`(`u_id`, `username`, `password`) VALUES (NULL, '$_POST[username]', '$_POST[password]');";

	mysqli_query($con,$sql);
	header('location: index.php');
	$success = 1;
}

?>




<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<section class="col-lg-offset-1 col-lg-10 user_area">
		<div class="box">
			<div class="box-header ">
				<!-- tools box -->
				<h3><i class="fa fa-users" aria-hidden="true"></i> Add User Information</h3>
				<?php if(isset($success) && $success == 1):?>
					<div role="alert" class="alert alert-success">
						<strong>Well done!</strong> You successfully add the user.
					</div>
				<?php endif;?>
				<div class="row">
					<div class="col-sm-offset-2 col-lg-7 user_area">
						<form class="form-horizontal" method="post" action="<?php echo   $_SERVER['PHP_SELF']; ?>" role="form">
							<div class="form-group">
								<label for="username" class="col-sm-3 control-label">User Name</label>
								<div class="col-sm-9">
									<input type="text" class="form-control" id="username" name="username" placeholder="Add Your User Name" required>
								</div>
							</div>
							<div class="form-group">
								<label for="slug" class="col-sm-3 control-label">Email Address</label>
								<div class="col-sm-9">
									<input type="email" class="form-control" id="email" name="email" placeholder="Add Your Email" required>
								</div>
							</div>
							<div class="form-group">
								<label for="slug" class="col-sm-3 control-label">Password</label>
								<div class="col-sm-9">
									<input type="password" class="form-control" id="password" name="password" placeholder="Add Your Password" required>
								</div>
							</div>
							<div class="form-group">
								<label for="slug" class="col-sm-3 control-label">User Photo</label>
								<div class="col-sm-9">
									<input type="file" id="file" name="file">
								</div>
							</div>
							<div class="form-group">
								<div class="col-sm-offset-3 col-sm-8">
									<button type="submit" class="btn btn-success">Add User</button>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- right col -->
</div>

<!-- footer -->
<?php include('include/footer.php'); 
include('include/bottom_link.php');
include('include/end.php');
?>
<!-- ./footer -->