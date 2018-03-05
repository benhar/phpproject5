<?php include'a_header.php';?>
<?php 
	
	$edit_id = $_GET['edit'];
	
	if($_POST){
	
		
		$sql = "UPDATE `category` SET `category` = '$_POST[category]' WHERE `id` = '$edit_id' ;";
		
		mysqli_query($con,$sql);
		
		$success = 1;
	}

?>





<?php if(isset($success) && $success == 1):?>
<div role="alert" class="alert alert-success">
      <strong>Well done!</strong> You successfully edit the user pages.
</div>
<?php endif;?>
<div class="row">
	<div class="col-sm-offset-1 col-lg-8">
	
		<?php 
			
			
			
			$result = mysqli_query($con,"SELECT * FROM category WHERE id = '$edit_id'");
			while($row = mysqli_fetch_array($result)) {	
		?>
	
		<form class="form-horizontal" method="post" action="edit_cat_page.php?edit=<?php echo $edit_id;?>" role="form">
		  
		  <div class="form-group">
			<label for="slug" class="col-sm-2 control-label">Category</label>
			<div class="col-sm-10">
			  <input type="text" class="form-control" id="category" value="<?php echo $row['category']?>" name="category" placeholder="category">
			</div>
		  </div>
		  
		  
		  <div class="form-group">
			<div class="col-sm-offset-2 col-sm-10">
			  <button type="submit" class="btn btn-default">Edit User</button>
			</div>
		  </div>
		</form>
		<?php };?>
	</div>
</div>


<?php include'a_footer.php';?>