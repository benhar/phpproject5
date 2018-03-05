<?php include('function/function.php'); ?>
<?php 

if(isset($_GET['delete'])){
	$delete_id = $_GET['delete'];
	mysqli_query($con,"DELETE FROM product WHERE id='$delete_id'");
	$success = 1;
}

$result = mysqli_query($con,"SELECT * FROM product");

?>

<div class="content-wrapper">
	<!-- Content Header (content-wrapper) -->
	<section class="col-lg-offset-1 col-lg-10 user_area">
		<div class="box">
			<div class="box-header">

				<?php if(isset($success) && $success == 1):?>
					<div role="alert" class="alert alert-warning">
						<strong>Well done!</strong> You successfully Delete the Product.
					</div>
				<?php endif;?>
				<div class="row">
					<div class="col-lg-12">

						<table class="table table-striped table-hover text-center">
							<thead>
								<tr>
									<th>#</th>
									<th>category</th>
									<th>Title</th>
									<th>Price</th>
									<th>Desc</th>
									<th>Avail</th>
									<th>Image</th>
									<th>Stock</th>
									<th colspan="2">Action</th>

								</tr>
							</thead>
							<tbody>
								<?php while($row = mysqli_fetch_array($result)) {	?>
								<tr>
									<td><?php echo $row['id']?></td>
									<td><?php echo $row['category']?></td>
									<td><?php echo $row['title']?></td>
									<td><?php echo $row['price']?></td>
									<td><?php echo substr(strip_tags($row['desc']),0,20)?></td>
									<td><?php echo $row['avail']?></td>
									<td><?php echo $row['image']?></td>
									<td><?php 

									if($row['avail'] == 1){					
										echo '<span class="label label-success">Available</span>';
									}else{
										echo '<span class="label label-warning">Out of Stock</span>';
									}

									?>
								</td>
								<td><a href="edit_pro_page.php?edit=<?php echo $row['id'];?>" class="btn btn-info">Edit</a></td>
								<td><a href="product_list.php?delete=<?php echo $row['id'];?>" class="btn btn-danger">Delete</a></td>
							</tr>

							<?php };?>
						</tbody>
					</table>


				</div>
			</div><!-- /row -->
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