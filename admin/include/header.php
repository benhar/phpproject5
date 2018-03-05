  <body class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper">
      <header class="main-header">
        <!-- Logo -->
        <a href="dashboard.php" class="logo">
          <!-- mini logo for sidebar mini 50x50 pixels -->
          <span class="logo-mini"><b><i class="fa fa-shopping-cart" aria-hidden="true"></i></b></span>
          <!-- logo for regular state and mobile devices -->
          <span class="logo-lg"><b>T</b> Shop<i class="fa fa-shopping-cart" aria-hidden="true"></i> </span>
        </a>
        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top">
          <!-- Sidebar toggle button-->
          <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
            <span class="sr-only">Toggle navigation</span>
          </a>

          <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
             
              <!-- User Account: style can be found in dropdown.less -->
              <li class="dropdown user user-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <img src="images/user2-160x160.jpg" class="user-image" alt="User Image">
                  <span class="hidden-xs">User Info <i class="fa fa-sort-desc" aria-hidden="true"></i></span>
                </a>
                <ul class="dropdown-menu">
                  <!-- User image -->
                  <li class="user-header">
                    <img src="images/user2-160x160.jpg" class="img-circle" alt="User Image">

                    <p>
                      Welcome : <?php echo $login_session; ?>
                      <small>Member since Feb. 2018</small>
                      <a href="profile.php" class="btn btn-info"><i class="fa fa-user"></i> View Profile</a>
                    </p>
                  </li>
                  <!-- Menu Footer-->
                  <li class="user-footer">
                    <div class="pull-right">
                      <a href="logout.php" class="btn btn-danger"><i class="fa fa-power-off"></i> Sign out</a>
                    </div>
                  </li>
                </ul>
              </li>
              <!-- Control Sidebar Toggle Button -->
              <li>
                <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
              </li>
            </ul>
          </div>
        </nav>
      </header>