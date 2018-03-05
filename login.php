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
  <form>
    <div class="row">
      <h4>Login Acount</h4>
      <div class="input-group input-group-icon">
        <input type="text" placeholder="User or Email"/>
        <div class="input-icon"><i class="fa fa-user"></i></div>
      </div>
      <div class="input-group input-group-icon">
        <input type="password" placeholder="Password"/>
        <div class="input-icon"><i class="fa fa-key"></i></div>
      </div>
    </div>
    
    <div class="row">
      <div class="input-group">
        <input type="checkbox" id="terms"/>
        <label for="terms">Re-member me</label>
      </div>
    </div>
    <div class="row">
    <!-- <div class="col-half"> -->
      <div class="input-group">
        <div class="col-third hen">
          <input type="submit" value="Log in"/>
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
