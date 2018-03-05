<?php include'header.php';?>
<div class="main">
  <div class="breadcrumbs">
    <ul>
      <li class="home"> <a title="Go to Home Page" href="index.php">Home</a> <span>/ </span> </li>
      <li> <strong>Blog</strong> </li>
    </ul>
  </div>
  <div class="col-main1">
    <div class="top-full">&nbsp;</div>
    <?php $blog = mysqli_query($con,"SELECT * FROM blog");?>
    <?php while($row = mysqli_fetch_array($blog)) { ?>
    <div class="m-full">
      <h1><?php echo $row['title'];?></h1>
      <br />
      <img src="<?php echo $row['image'];?>" alt="">
      <br />
      <p><?php echo $row['desc'];?></p> <br />
       
    </div>
    <?php };?>
    <div class="btm-full">&nbsp;</div>
  </div>
</div>
<?php include'footer.php'?>