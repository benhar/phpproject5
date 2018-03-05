<?php include'db.php';?>
<!DOCTYPE html>
<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>T-shop | welcome to our store</title>
  <link href="includes/style.css" rel="stylesheet" type="text/css" />
  <script type="text/javascript" src="includes/js/jquery.min.js"></script>
  <script type="text/javascript" src="includes/js/carousel.js"></script>
  <script type="text/javascript" src="includes/js/jquery.nivo.slider.pack.js"></script>
  <script type="text/javascript" src="includes/js/nivo.slider.setting.js"></script>
  <link href='includes/cloud-zoom/cloud-zoom.css' rel='stylesheet' type='text/css' />
  <script type="text/javascript" src="includes/cloud-zoom/cloud-zoom.1.0.2.min.js"></script>
  <script type="text/javascript">
   jQuery(function () {
    var tabContainers = jQuery('div.tabs > div');

    jQuery('div.tabs ul.tabNavigation a').click(function () {
     tabContainers.hide().filter(this.hash).show();

     jQuery('div.tabs ul.tabNavigation a').removeClass('active');
     jQuery(this).addClass('active');

     return false;
   }).filter(':first').click();
  });
</script>
</head>

<body>
  <div align="center" style="background:#FFF; padding:5px; position:fixed; color:#999; top:0; position:fixed; width:100%; z-index:10000;"><a href="index.php">Home</a> | <a href="category.php">Category</a> | <a href="#">Products</a> | <a href="blog.php">Blog</a></div>
  <div class="page">
    <div class="header-container">
      <div class="header">
        <div class="shopLinks">
          <ul class="links">
            <li class="first"><a title="My Account" href="registration.php">My Account</a></li>
            <!-- <li><a class="top-link-cart" title="My Cart" href="#">My Cart</a></li>
            <li><a class="top-link-checkout" title="Checkout" href="#">Checkout</a></li> -->
            <li class="last"><a title="Log In" href="login.php">Log In</a></li>
          </ul>
          <p class="welcome-msg">Welcome to our online store!<span>&nbsp;</span></p>
        </div>
        <h1 class="logo"><strong>T Shirt</strong><a class="logo" title="T-shop" href="index.php"><img alt="T-shop" src="images/logo.png" /></a></h1>
        <div class="quick-access">
          <div class="shoppingCart">
            <div class="block block-cart">
              <div class="block-content">
                <p class="empty">You have no items in your shopping cart.</p>
              </div>
            </div>
          </div>
          <div class="search">
            <form method="get" action="search.php" id="search_mini_form">
              <div class="form-search">
                <input type="text" class="input-text" value="<?php if(isset($_GET['q'])){echo $_GET['q'];};?>" name="q" id="search" />
                <button class="button" title="Search" type="submit"></button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
    <div class="nav-container">
      <ul id="nav">
        <li class="level-top first"> <a class="level-top" href="index.php"> <span>Home</span> </a></li>
        <?php $menu = mysqli_query($con,"SELECT * FROM category");?>
        <?php while($row = mysqli_fetch_array($menu)) {	?>
        <li class="level-top"> <a class="level-top" href="category.php?cat=<?php echo $row['id']?>"> <span><?php echo $row['category']?> </span> </a> </li>
        <?php };?>
        <li class="end"></li>
      </ul>
    </div>