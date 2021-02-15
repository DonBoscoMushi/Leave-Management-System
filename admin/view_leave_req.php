<?php

  require_once "../functions/config.php";
  include_once "fetch_details.php";

  if (empty($_SESSION)){
    session_start();
  }

  
  if($_SESSION['sid'] == session_id() && $_SESSION['user'] == "Admin")
  {
    $user_id = $_SESSION['user_id'];

    ?>

<!DOCTYPE html>
    <html lang="en">
      <head>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Main CSS-->
        <link rel="stylesheet" type="text/css" href="../css/main.css">
        <!-- Font-icon css-->
        <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
      </head>
      <body class="app sidebar-mini">
        <!-- Navbar-->
        <header class="app-header"><a class="app-header__logo" font-family="Nunito" href="../index.html"><?php echo $_SESSION['user']; ?></a>
          <!-- Sidebar toggle button--><a class="app-sidebar__toggle" href="#" data-toggle="sidebar" aria-label="Hide Sidebar"></a>
          <!-- Navbar Right Menu-->
          <ul class="app-nav">
            <li class="app-search">
              <input class="app-search__input" type="search" placeholder="Search">
              <button class="app-search__button"><i class="fa fa-search"></i></button>
            </li>
            <!--Notification Menu-->
            
            <!-- User Menu-->
            <li class="dropdown"><a class="app-nav__item" href="#" data-toggle="dropdown" aria-label="Open Profile Menu"><i class="fa fa-user fa-lg"></i></a>
          <ul class="dropdown-menu settings-menu dropdown-menu-right">
            <li><a class="dropdown-item" href="profile.php"><i class="fa fa-user fa-lg"></i> Profile</a></li>
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
              <p class="app-sidebar__user-name"> <?php echo $firstname." ".$lastname; ?></p>
              <p class="app-sidebar__user-designation"><?php echo $role; ?></p>
            </div>
          </div>
          <ul class="app-menu">
            <li><a class="app-menu__item active" href="#"><i class="app-menu__icon fa fa-dashboard"></i><span class="app-menu__label"> Register New Staff</span></a></li>
            <li><a class="app-menu__item" href="view_staff.php"><i class="app-menu__icon fa fa-th-list"></i><span class="app-menu__label"> View Staff</span></a></li>
            <li><a class="app-menu__item" href="view_leave_req.php"><i class="app-menu__icon fa fa-th-list"></i><span class="app-menu__label"> View Leave Requests</span></a></li>


          </ul>
        </aside>
        <main class="app-content">
        <div class="app-title">
            <div>
            <h1><i class="fa fa-th-list"></i> Leave Requests</h1>
            <p>All Leave requests applications</p>
            </div>
            <ul class="app-breadcrumb breadcrumb side">
            <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
            <li class="breadcrumb-item">Tables</li>
            <li class="breadcrumb-item active"><a href="#">Data Table</a></li>
            </ul>
        </div>
        <div class="row">
            <div class="col-md-12">
            <div class="tile">
                <div class="tile-body">
                <table class="table table-hover table-bordered" id="sampleTable">
                    <thead>
                    <tr>
                        <th>email</th>
                        <th>Leave Type</th>
                        <th>Start Date</th>
                        <th>End Date</th>
                        <th>Date applied</th>
                        <th>Status</th>
                        <th>Operation</th>
                    </tr>
                    </thead>
                    <tbody>
                    

                    <?php

                        require_once "../functions/config.php";

                        $query = "SELECT * FROM leave_req";

                        $result = $connection -> query($query);

                        if($result) {
                        while ($row = $result->fetch_assoc()) {

                            $email = $row['email'];
                            $leave_type = $row['leave_type'];
                            $start_date = $row['start_date'];
                            $end_date = $row['end_date'];
                            $date_applied = $row['date_applied'];
                            $status = $row['status'];

                            echo "
                            <tr>
                                <td>$email</td>
                                <td>$leave_type</td>
                                <td>$start_date</td>
                                <td>$end_date</td>
                                <td>$date_applied</td>
                                <td>$status</td>
                                <td align='centre'>
                                <div class='tile-title-w-btn'>
                                    <div class='btn-group'><a class='btn btn-primary' href='#'><i class='fa fa-lg fa-edit'></i></a><a class='btn btn-primary' href='#'><i class='fa fa-lg fa-trash'></i></a></div>
                                </div>
                                </td>
                            </tr>
                            
                            ";
                        }
                        
                        $result->free();
                        }

                        mysqli_close($connection);
                    ?>
                    
                    </tbody>
                </table>
                </div>
            </div>
            </div>
        </div>
        </main>
        <!-- Essential javascripts for application to work-->
        <script src="../js/jquery-3.2.1.min.js"></script>
        <script src="../js/popper.min.js"></script>
        <script src="../js/bootstrap.min.js"></script>
        <script src="../js/main.js"></script>
        <!-- The javascript plugin to display page loading on top-->
        <script src="../js/plugins/pace.min.js"></script>
        <!-- Page specific javascripts-->
        <!-- Data table plugin-->
        <script type="text/javascript" src="../js/plugins/jquery.dataTables.min.js"></script>
        <script type="text/javascript" src="../js/plugins/dataTables.bootstrap.min.js"></script>
        <script type="text/javascript">$('#sampleTable').DataTable();</script>
        
    </body>
    </html>
    <?php
  }

  ?>
    
