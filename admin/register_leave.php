<?php

  require_once "../functions/config.php";
  include_once "../admin/fetch_details.php";

  if (empty($_SESSION)){
    session_start();
  }

  
  if($_SESSION['sid'] == session_id() && $_SESSION['user'] = "Admin")
  {
    $user_id = $_SESSION['user_id'];
    ?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Staff - Profile</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Main CSS-->
    <link rel="stylesheet" type="text/css" href="../css/main.css">
    <!-- Font-icon css-->
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  </head>
  <body class="app sidebar-mini">
    <!-- Navbar-->
    <header class="app-header"><a class="app-header__logo" href="index.php"><?php echo $_SESSION['user']; ?></a>
      <!-- Sidebar toggle button--><a class="app-sidebar__toggle" href="#" data-toggle="sidebar" aria-label="Hide Sidebar"></a>
      <!-- Navbar Right Menu-->
      <ul class="app-nav">
        <li class="app-search">
          <input class="app-search__input" type="search" placeholder="Search">
          <button class="app-search__button"><i class="fa fa-search"></i></button>
        </li>

        <!-- User Menu-->
        <li class="dropdown"><a class="app-nav__item" href="#" data-toggle="dropdown" aria-label="Open Profile Menu"><i class="fa fa-user fa-lg"></i></a>
          <ul class="dropdown-menu settings-menu dropdown-menu-right">
            <li><a class="dropdown-item" href="#"><i class="fa fa-user fa-lg"></i> Profile</a></li>
            <li><a class="dropdown-item" href="../logout.php"><i class="fa fa-sign-out fa-lg"></i> Logout</a></li>
          </ul>
        </li>
      </ul>
    </header>
    <!-- Sidebar menu-->
    <div class="app-sidebar__overlay" data-toggle="sidebar"></div>
    <aside class="app-sidebar">
      <div class="app-sidebar__user">
        <div>
          <p class="app-sidebar__user-name"><?php echo $firstname." ".$lastname;?></p>
          <p class="app-sidebar__user-designation"> <?php echo $role; ?></p>
        </div>
      </div>
      <ul class="app-menu">
            <li><a class="app-menu__item " href="register_staff.php"><i class="app-menu__icon fa fa-dashboard"></i><span class="app-menu__label"> Register New Staff</span></a></li>
            <li><a class="app-menu__item" href="view_staff.php"><i class="app-menu__icon fa fa-th-list"></i><span class="app-menu__label"> View Staff</span></a></li>
            <li><a class="app-menu__item active" href="#"><i class="app-menu__icon fa fa-th-list"></i><span class="app-menu__label"> Register Leave</span></a></li>

      </ul>
    </aside>
    <main class="app-content">
      <div class="app-title">
        <div>
          <h1><i class="fa fa-file-code-o"></i> Register Leave</h1>
        </div>
        <ul class="app-breadcrumb breadcrumb">
          <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
          <li class="breadcrumb-item"><a href="#">Register Leave</a></li>
        </ul>
      </div>
      <div class="row">
            
            <div class="col-md-6">
              <div class="tile">
                  <h3 class="tile-title" style="text-align: center;"><i class="fa fa-edit"></i> Register New Leave</h3>
                  <div class="tile-body">
                    <form class="form-horizontal" method="post" action="register.php">
                      <div class="form-group row">
                        <label class="control-label col-md-3">Leave Type</label>
                        <div class="col-md-8">
                          <input class="form-control" type="text" name="leavetypename" required="required" placeholder="Enter Leave Type">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="control-label col-md-3">Leave Description</label>
                        <div class="col-md-8">
                          <input class="form-control" type="text" name="leavedescription" required="required" name="leavedescription" placeholder="Enter the description of the Leave Type">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="control-label col-md-3">Maximum Number of Days Allowed</label>
                        <div class="col-md-8">
                          <input class="form-control col-md-8" type="number" onkeypress="return event.charCode >= 48" min="1" required="required" name="maxdays" placeholder="Enter maximum days for this Leave Type">
                        </div>
                      </div>
                      <div class="tile-footer">
                    <div class="row">
                      <div class="col-md-8 col-md-offset-3">
                        <button class="btn btn-primary" type="submit" value="Register"><i class="fa fa-fw fa-lg fa-check-circle" ></i>Register</button>&nbsp;&nbsp;&nbsp;<a class="btn btn-secondary" href="#"><i action="reset"class="fa fa-fw fa-lg fa-times-circle"></i>Cancel</a>
                      </div>
                    </div>
                  </div>
                    </form>
                  </div>
                </div>
            </div>
                  <div class="clearix"></div>
          </div>



    </main>
    <!-- Essential javascripts for application to work-->
    <script src="../js/jquery-3.3.1.min.js"></script>
    <script src="../js/popper.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/main.js"></script>
    <!-- The javascript plugin to display page loading on top-->
    <script src="../js/plugins/pace.min.js"></script>
    <!-- Page specific javascripts-->
    <!-- Google analytics script-->
    <script type="text/javascript">
      if(document.location.hostname == 'pratikborsadiya.in') {
      	(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      	(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      	m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      	})(window,document,'script','//www.google-analytics.com/analytics.js','ga');
      	ga('create', 'UA-72504830-1', 'auto');
      	ga('send', 'pageview');
      }
    </script>
  </body>
</html>

<?php
  }

  ?>