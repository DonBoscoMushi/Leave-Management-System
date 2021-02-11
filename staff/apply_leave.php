<?php

  require_once "../functions/config.php";
  include_once "../admin/fetch_details.php";

  if (empty($_SESSION)){
    session_start();
  }

  
  if($_SESSION['sid'] == session_id() && $_SESSION['user'] = "Staff")
  {
    $user_id = $_SESSION['user_id'];
    ?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Apply Leave</title>
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
        <li><a class="app-menu__item " href="index.php"><i class="app-menu__icon fa fa-user"></i><span class="app-menu__label">Profile</span></a></li>
        
        <li><a class="app-menu__item active" href="#"><i class="app-menu__icon fa fa-file-code-o"></i><span class="app-menu__label">Apply Leave</span></a></li>
      </ul>
    </aside>
    <main class="app-content">
      <div class="app-title">
        <div>
          <h1><i class="fa fa-file-code-o"></i> Apply Leave</h1>
        </div>
        <ul class="app-breadcrumb breadcrumb">
          <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
          <li class="breadcrumb-item"><a href="#">Apply Leave</a></li>
        </ul>
      </div>

      <div class="tile">
            <div class="row">
              <div class="col-lg-6">
                <form>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Personal Particulars</label>
                    <input class="form-control" id="exampleInputName" type="name" aria-describedby="grace " placeholder="Enter name"><small class="form-text text-muted" id="name"></small>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Designation</label>
                    <input class="form-control" id="exampleInputPlace" type="name" placeholder="name">
                  </div>
                  <div class="form-group">
                    <label for="exampleSelect1">Department</label>
                    <input class="form-control" id="exampleDepartment" type="department name placeholder="department name>
                      
                      
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="exampleSelect2">The following members of my family</label>
                    <input class="form-control" id="exampleFamily" multiple="members">
                      
                    
                  </div>
                 
            <div class="tile-footer">
              <button class="btn btn-primary" type="submit">Submit</button>
            </div>
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
app
    <?php

  }

  ?>