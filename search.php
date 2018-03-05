<?php include'header.php';?>
  <div class="main">
    <div class="breadcrumbs">
      <ul>
        <li class="home"> <a title="Go to Home Page" href="index.php">Home</a> <span>/ </span> </li>
        <li> <strong><?php $_SERVER['SCRIPT_NAME'];?></strong> </li>
      </ul>
    </div>
    <div class="col-main">
      <div class="toolbar">
        <div class="t-right">&nbsp;</div>
        <div class="t-left">&nbsp;</div>
        <div class="tb">
          <div class="sorter">
            <p class="view-mode"> <strong class="grid" title="Grid">&nbsp;</strong> <a class="list" title="List" href="#">&nbsp;</a> </p>
            <div class="sort-by">
              <label>Sort By</label>
              <select>
                <option selected="selected" value=""> Position </option>
                <option value=""> Name </option>
                <option value=""> Price </option>
              </select>
              <a title="Set Descending Direction" href="#"><img class="v-middle" alt="Set Descending Direction" src="images/i_asc_arrow.gif" /></a> </div>
          </div>
          <div class="pager">
            <div class="pages"> <strong>Page:</strong>
              <ol>
                <li class="current">1</li>
                <li><a href="#">2</a></li>
                <li> <a title="Next" href="#" class="next i-next"> <img class="v-middle" alt="Next" src="images/pager_arrow_right.gif" /></a> </li>
              </ol>
            </div>
            <div class="limiter">
              <label>Show</label>
              <select>
                <option selected="selected" value=""> 6 </option>
                <option value=""> 12 </option>
                <option value=""> 18 </option>
              </select>
              per page </div>
          </div>
        </div>
      </div>
      <div class="category-top">&nbsp;</div>
	  
	  		<?php 
		
		if($_GET['q'])
			{
				$rec = $_GET['q'];
				$product = mysqli_query($con,"SELECT * FROM `product` WHERE `title` LIKE '%$rec%' OR `desc` LIKE '%$rec%' OR `price` LIKE '%$rec%' ");
			}
			else
			{
				$product = mysqli_query($con,"SELECT * FROM product LIMIT 10");
			}
			
			
		;?>
	  
      <div class="category-products">
        <div class="page-title">
          <h1>Search For <?php echo $rec;?></h1>
        </div>
        <ul class="products-grid first">
		
		

		<?php while($pro = mysqli_fetch_array($product)) {	?>
          <li class="item"> <a class="product-image" href="product.php?pro=<?php echo $pro['id'];?>"><img width="216" alt="<?php echo $pro['title'];?>" src="<?php echo $pro['image'];?>" /></a>
            <h2 class="product-name"><a href="product.php?pro=<?php echo $pro['id'];?>"><?php echo $pro['title'];?></a></h2>
            <div class="price-box"> <span class="regular-price"> <span class="price"><?php echo $pro['price'];?> TAKA</span> </span> </div>
            <div class="actions">
              <button class="button btn-cart" title="Add to Cart" type="button"><span><span>Add to Cart</span></span></button>
            </div>
          </li>
		  <?php };?>
		  
          <li class="clear"></li>
        </ul>

		
      </div>
      <div class="category-btm">&nbsp;</div>
    </div>
<?php include'sideber.php';?>
<?php include'footer.php';?>