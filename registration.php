<?php 
$db = mysqli_connect('localhost', 'root', '', 'e_shope');

  // initialize variables
  $id = 0;
  $fullname = "";
  $email = "";
  $address = "";
  $contact = "";
  $password = "";

  if (isset($_POST['save'])) {
    $fullname = $_POST['fullname'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    $contact = $_POST['contact'];
    $password = md5($_POST['password']);

    mysqli_query($db, "INSERT INTO registration (id, fullname, email, address, contact, password) VALUES (NULL, '$fullname', '$email', '$address', '$contact', '$password')"); 
    header('location: index.php');
  }
  // if($_POST){
//   $success = 1;
// }
?>


<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <title>Registration Form</title>
  
  <link rel="stylesheet" href="includes/normalize.min.css">
  <link rel='stylesheet prefetch' href='admin/css/font-awesome.min.css'>
  <link rel="stylesheet" href="includes/reg.css">

  
</head>

<body>

  
<div class="container">
  <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
    <div class="row">
      <h4>Account</h4>
      <div class="input-group input-group-icon">
        <input type="text" placeholder="Full Name" name="fullname" />
        <div class="input-icon"><i class="fa fa-user"></i></div>
      </div>
      <div class="input-group input-group-icon">
        <input type="email" placeholder="Email Adress" name="email" />
        <div class="input-icon"><i class="fa fa-envelope"></i></div>
      </div>
      <div class="input-group input-group-icon">
        <input type="text" placeholder="Your Address" name="address" />
        <div class="input-icon"><i class="fa fa-map-marker"></i></div>
      </div>
      <div class="input-group input-group-icon">
        <input type="text" placeholder="Contact" name="contact" />
        <div class="input-icon"><i class="fa fa-phone"></i></div>
      </div>
      <div class="input-group input-group-icon">
        <input type="password" placeholder="Password" name="password" />
        <div class="input-icon"><i class="fa fa-key"></i></div>
      </div>
    </div>
    <div class="row">
      <div class="col-half">
        <h4>Date of Birth</h4>
        <div class="input-group">
          <div class="col-third">
            <input type="text" placeholder="DD"/>
          </div>
          <div class="col-third">
            <input type="text" placeholder="MM"/>
          </div>
          <div class="col-third">
            <input type="text" placeholder="YYYY"/>
          </div>
        </div>
      </div>
      <div class="col-half">
        <h4>Gender</h4>
        <div class="input-group hen">
          <input type="radio" name="gender" value="male" id="gender-male"/>
          <label for="gender-male">Male</label>
          <input type="radio" name="gender" value="female" id="gender-female"/>
          <label for="gender-female">Female</label>
        </div>
      </div>
    </div>
    
    <div class="row">
      <h4>Terms and Conditions</h4>
      <div class="input-group">
        <input type="checkbox" id="terms"/>
        <label for="terms">I accept the terms and conditions for signing up to this service, and hereby confirm I have read the privacy policy.</label>
      </div>
    </div>
    <div class="row">
      <h4>Payment Details</h4>
      <div class="input-group hen">
        <input type="radio" name="payment-method" value="card" id="payment-method-card" checked="true"/>
        <label for="payment-method-card"><span><i class="fa fa-cc-visa"></i>Credit Card</span></label>
        <input type="radio" name="payment-method" value="paypal" id="payment-method-paypal"/>
        <label for="payment-method-paypal"> <span><i class="fa fa-cc-paypal"></i>Paypal</span></label>
      </div>
      <div class="input-group input-group-icon">
        <input type="text" placeholder="Card Number"/>
        <div class="input-icon"><i class="fa fa-credit-card"></i></div>
      </div>
      <div class="col-half">
        <div class="input-group input-group-icon">
          <input type="text" placeholder="Card CVC"/>
          <div class="input-icon"><i class="fa fa-user"></i></div>
        </div>
      </div>
      <div class="col-half">
        <div class="input-group">
          <select>
            <option>01 Jan</option>
            <option>02 Jul</option>
          </select>
          <select>
            <option>2018</option>
            <option>2019</option>
          </select>
        </div>
      </div>
    </div>
	<div class="row">
		<!-- <div class="col-half"> -->
			<div class="input-group">
        <div class="col-third hen">
				  <input type="submit" name="save" value="Submit"/>
        </div>
        <div class="col-third hen">
          <input type="reset" value="Reset"/>
        </div>
        <div class="col-third hen">
          <input type="button" value="Back" onclick="newDoc()"/>
        </div>
			</div>
		</div>
    <!-- </div> -->
  </form>
</div>
  <script src='includesjquery.min.js'></script>

  


<script>
function newDoc() {
    window.location.assign("index.php")
}
</script>

</body>

</html>
