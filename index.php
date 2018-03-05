<?php include'header.php';?>

  <div class="home">
    <div id="slider-wrapper">
      <div id="slider" class="nivoSlider">
        <?php $slider = mysqli_query($con,"SELECT * FROM slider");?>
        <?php while($sli = mysqli_fetch_array($slider)) {  ?>
          <a href="#">
            <img src="<?php echo $sli['image'];?>" alt="<?php echo $sli['title'];?>" />
          </a>
       <?php };?> 
      </div>
    </div>
    <div class="special">
      <ul>
        <li class="sblock"><a href="#"><img src="images/slider/special-01.jpg" alt="" /></a></li>
        <li class="sblock"><a href="#"><img src="images/slider/special-02.jpg" alt="" /></a></li>
        <li class="sblock"><a href="#"><img src="images/slider/special-03.jpg" alt="" /></a></li>
      </ul>
    </div>
  </div>
  <div class="home-products">
    <div id="carousel_container">
      <div id="left_scroll"><a class="left_arrow" href="javascript:slide(&quot;left&quot;);"></a></div>
      <div class="c-left">&nbsp;</div>
      <div id="carousel_inner">
        <ul style="left: -290px;" id="carousel_ul" class="products-grid first last odd">
		
		<?php $product = mysqli_query($con,"SELECT * FROM product");?>
		<?php while($pro = mysqli_fetch_array($product)) {	?>
          <li class="item">
            <div>
              <a class="product-image" title="<?php echo $pro['title'];?>" href="product.php?pro=<?php echo $pro['id'];?>">
                <img height="216" width="216" alt="<?php echo $pro['title'];?>" src="<?php echo $pro['image'];?>" />
              </a>
              <h2 class="product-name">
                <a title="<?php echo $pro['title'];?>" href="product.php?pro=<?php echo $pro['id'];?>"><?php echo $pro['title'];?>
                </a>
              </h2>
            </div>
          </li>
		  <?php };?>
		  
        </ul>
      </div>
      <div class="c-right">&nbsp;</div>
      <div id="right_scroll"><a class="right_arrow" href="javascript:slide(&quot;right&quot;);"></a></div>
      <input type="hidden" value="5000" id="hidden_auto_slide_seconds" />
    </div>
  </div>
</div>

<?php include'footer.php'?>
