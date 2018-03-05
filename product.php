<?php include'header.php';?>

<?php 

if(isset($_GET['pro'])){
 $pro_duct = $_GET['pro'];
}else{
 $pro_duct = 1;

}

$product = mysqli_query($con,"SELECT * FROM product WHERE id = '$pro_duct'");?>
<?php while($pro = mysqli_fetch_array($product)) {	
 
 $category = $pro['category'];
 
 ?>
 <div class="main">
  <div class="breadcrumbs">
    <ul>
      <li class="home"> <a title="Go to Home Page" href="index.php">Home</a> <span>/ </span> </li>
      <li> <strong><?php echo $pro['title'];?></strong> </li>
    </ul>
  </div>
  <div class="col-main1">
    <div class="top-full">&nbsp;</div>
    <div class="product-view">
      <div class="product-essential">
        <div class="product-img-box">
          <p class="product-image product-image-zoom"> <a href='<?php echo $pro['image'];?>' class = 'cloud-zoom' id='zoom1' rel="position: 'inside'"> <img src="<?php echo $pro['image'];?>" width="354" height="354" alt="<?php echo $pro['title'];?>" /> </a> </p>
          <div class="more-views">
            <ul>
              <li><a href='<?php echo $pro['image'];?>' class='cloud-zoom-gallery' rel="useZoom: 'zoom1', smallImage: '<?php echo $pro['image'];?>' "> <img src="<?php echo $pro['image'];?>" alt = "<?php echo $pro['title'];?>"/></a></li>
            </ul>
          </div>
        </div>
        <div class="product-shop">
          <div class="product-name">
            <h1><?php echo $pro['title'];?></h1>
          </div>
          <div class="ratings">
            <div class="rating-box">
              <div style="width: 70%;" class="rating"></div>
            </div>
            <p class="rating-links"> <a href="#">2 Review(s)</a> <span class="separator">|</span> <a href="#">Add Your Review</a> </p>
          </div>
          <div class="short-description">
            <div class="std"><?php echo $pro['desc'];?></div>
          </div>
          <div class="p-box-top"></div>
          <div class="p-box">
            <p class="availability in-stock">Availability: <span>In stock</span></p>
            <div class="price-box"> <span id="product-price-174" class="regular-price"> <span class="price"><?php echo $pro['price'];?> TAKA</span></span> </div>
            <div id="product-options-wrapper" class="product-options"> 
              <dl class="last">
                <dt>
                  <label class="required"><em>*</em>Color</label>
                </dt>
                <dd>
                  <div class="input-box">
                    <select class="required-entry super-attribute-select" >
                      <option value="">Choose an Option...</option>
                      <option value="22">Green</option>
                    </select>
                  </div>
                </dd>
                <dt>
                  <label class="required"><em>*</em>Shirt Size</label>
                </dt>
                <dd class="last">
                  <div class="input-box">
                    <select class="required-entry super-attribute-select">
                      <option>Choose an Option...</option>
                      <option>ML</option>
                      <option>XL</option>
                    </select>
                  </div>
                </dd>
              </dl>
              <p class="required">* Required Fields</p>
            </div>
            <div class="product-options-bottom">
              <div class="add-to-cart">
                <label>Qty:</label>
                <input type="text" class="input-text qty" title="Qty" value="1" maxlength="12" />
                <button class="button btn-cart" title="Add to Cart" type="button" onclick="newDoc()"><span><span>Add to Cart</span></span></button>
              </div>
              <ul class="add-to-links">
                <li><a class="link-wishlist" href="#">Add to Wishlist</a></li>
                <li><a class="link-compare" href="#">Add to Compare</a></li>
              </ul>
              <div class="shareButton">
                <p class="email-friend"><a href="#">Email to a Friend</a></p>
                <!-- AddThis Button BEGIN -->
                <div class="addthis_toolbox addthis_default_style "> <a class="addthis_button_preferred_1"></a> <a class="addthis_button_preferred_2"></a> <a class="addthis_button_preferred_3"></a> <a class="addthis_button_preferred_4"></a> <a class="addthis_button_compact"></a> <a class="addthis_counter addthis_bubble_style"></a> </div>
                <script type="text/javascript" src="http://s7.addthis.com/js/250/addthis_widget.js#pubid=xa-4ec8e9992c395916"></script> 
                <!-- AddThis Button END --> 
              </div>
            </div>
          </div>
          <div class="p-box-btm"></div>
        </div>
        <div class="clear"></div>
      </div>
    </div>
    <div class="btm-full">&nbsp;</div>
    <div class="top-full">&nbsp;</div>
    <div class="product-collateral tabs">
      <ul class="product-tabs tabNavigation">
        <li id="product_tabs_description"><a href="#tab1"><span>Product Description</span></a></li>
        <li id="product_tabs_additional"><a href="#tab2"><span>Additional Information</span></a></li>
        <li id="product_tabs_product.tags"><a href="#tab3"><span>Product Tags</span></a></li>
      </ul>
      <div class="product-tabs-content" id="tab1">
        <h2>Details</h2>
        <div class="std">
          <?php echo $pro['desc'];?>
        </div>
      </div>
      <div id="tab2" class="product-tabs-content">
        <h2>Additional Information</h2>
        <table id="product-attribute-specs-table" class="data-table">
          <col width="25%" />
          <col />
          <tbody>
            <tr class="first last odd">
              <th class="label">Price</th>
              <td class="data last"><?php echo $pro['price'];?> TAKA</td>
            </tr>
          </tbody>
        </table>
      </div>
      <div id="tab3" class="product-tabs-content">
        <div class="box-collateral box-tags">
          <h2>Product Tags</h2>
          <h3>Other people marked this product with these tags:</h3>
          <ul class="product-tags" id="product-tags_cc06c0ede520d643871e5d1be471df02">
            <li class="first"><a href="#">young</a> (3)</li>
            <li><a href="#">hip</a> (3)</li>
            <li><a href="#">cool</a> (6)</li>
            <li><a href="#">green</a> (3)</li>
            <li><a href="#">bones</a> (3)</li>
            <li><a href="#">SEXY</a> (8)</li>
            <li><a href="#">tight</a> (3)</li>
            <li><a href="#">tina</a> (1)</li>
            <li><a href="#">Hohoho</a> (3)</li>
            <li class="last"><a href="#">cool t-shirt</a> (3)</li>
          </ul>
          <div class="form-add">
            <label>Add Your Tags:</label>
            <div class="input-box">
              <input type="text" id="productTagName" name="productTagName" class="input-text required-entry" />
            </div>
            <button onclick="submitTagForm()" class="button" title="Add Tags" type="button"> <span> <span>Add Tags</span> </span> </button>
          </div>
          <p class="note">Use spaces to separate tags. Use single quotes (') for phrases.</p>
        </div>
      </div>
    </div>
    <?php };?>
    <div class="btm-full">&nbsp;</div>
    <div class="top-full">&nbsp;</div>
    <div class="box-collateral box-up-sell">
      <h2>You may also be interested in the following product(s)</h2>
      <table id="upsell-product-table" class="products-grid">
        <tbody>
          <tr class="first last odd">
           <?php $product2 = mysqli_query($con,"SELECT * FROM product WHERE category = '$category' AND id != '$pro_duct'  LIMIT 0 , 3 ");?>
           <?php while($pro2 = mysqli_fetch_array($product2)) {	?>
           <td><div class="up-border"> <a class="product-image" href="product.php?pro=<?php echo $pro2['id'];?>"><img height="216" width="216" alt="<?php echo $pro2['title'];?>" src="<?php echo $pro2['image'];?>" /></a>
            <h3 class="product-name"><a href="product.php?pro=<?php echo $pro2['id'];?>"><?php echo $pro2['title'];?></a></h3>
            <div class="price-box"> <span class="regular-price"> <span class="price"><?php echo $pro2['price'];?> TAKA</span> </span> </div>
          </div></td>
          <?php };?>
        </tr>
      </tbody>
    </table>
  </div>
  <div class="btm-full"></div>
</div>
</div>
</div>
<div class="clear"></div>
<script>
function newDoc() {
    window.location.assign("registration.php")
}
</script>
<?php include'footer.php'?>