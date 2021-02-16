<?php 

require_once "fetch_details.php";


?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <title>View Staff</title>
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
    <header class="app-header"><a class="app-header__logo" href="index.html"><?php echo $_SESSION['user']; ?></a>
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
          <p class="app-sidebar__user-name"><?php echo $firstname." ".$lastname;?></p>
          <p class="app-sidebar__user-designation"> <?php echo $role; ?></p>
        </div>
      </div>
      <ul class="app-menu">
        <li><a class="app-menu__item" href="register_staff.php"><i class="app-menu__icon fa fa-dashboard"></i><span class="app-menu__label"> Register New Staff</span></a></li>
        <li><a class="app-menu__item active" href="#"><i class="app-menu__icon fa fa-th-list"></i><span class="app-menu__label"> View Staff</span></a></li>
        <li><a class="app-menu__item" href="register_leave.php"><i class="app-menu__icon fa fa-book"></i><span class="app-menu__label"> Register Leave</span></a></li>
        <li><a class="app-menu__item" href="view_leave_req.php"><i class="app-menu__icon fa fa-th-list"></i><span class="app-menu__label"> View Leave Requests</span></a></li>


      </ul>
    </aside>
    <main class="app-content">
      <div class="app-title">
        <div>
          <h1><i class="fa fa-th-list"></i> Registered Staff</h1>
          <p>This is the list of registered staff</p>
        </div>
        <ul class="app-breadcrumb breadcrumb side">
          <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
          <li class="breadcrumb-item">Tables</li>
          <li class="breadcrumb-item active"><a href="#">View Staff</a></li>
        </ul>
      </div>
      <div class="row">
        <div class="col-md-12">
          <div class="tile">
            <div class="tile-body">
              <div class="table-responsive">
                <table class="table table-hover table-bordered" id="sampleTable">
                  <thead>
                    <tr>
                      <th>Email</th>
                      <th>Firstname</th>
                      <th>Lastname</th>
                      <th>Phone</th>
                      <th>Role</th>
                      <th>Operation</th>
                  </thead>
                  <tbody>

                  <?php

                      require_once "../functions/config.php";

                      $query = "SELECT * FROM users";

                      $result = $connection -> query($query);
 
                      if($result) {
                        while ($row = $result->fetch_assoc()) {
                            $id = $row['user_id'];
                            $email = $row['email'];
                            $firstname = $row['firstname'];
                            $lastname = $row['lastname'];
                            $phone = $row['phone'];
                            $role = $row['role'];
                            $started_at = $row['created_at'];
                            $gender = $row['gender'];

                            echo "
                            <tr>
                              <td>$email</td>                                                                                           
                              <td>$firstname</td>
                              <td>$lastname</td>
                              <td>$phone</td>
                              <td>$role</td>
                              <td>
                                <div class='tile-title-w-btn'>
                                  <div class='btn-group'><a class='btn btn-primary' data-toggle='modal' data-target='#myModal_$id' href='edit_staff.php'><i class='fa fa-lg fa-edit'></i></a><a class='btn btn-primary' id='demoSwal' href='#'><i class='fa fa-lg fa-trash'></i></a></div>
                                </div> 


                                <!-- Modal -->
                              <div id='myModal_$id' class='modal fade' role='dialog'>
                                  <div class='modal-dialog'>
                                  
                                  <!-- modal content -->
                                  <div class='modal-content'>
                                    <div class='modal-header'>
                                    <h4 class='modal-title'> Update Staff</h4>
                                      <button type='button' class='close' data-dismiss='modal'>&times;</button> 
                                      
                                    </div>
                                    <div class='modal-body'>
                      

                                    <div class='tile'>
                                      <div class='tile-body'>
                                        <form class='form-horizontal' method='post' action='register.php'>
                                          <div class='form-group row'>
                                            <label class='control-label col-md-3'>First Name</label>
                                            <div class='col-md-8'>
                                              <input class='form-control' type='text' name='firstname' required='required' placeholder=$firstname>
                                            </div>
                                          </div>
                                          <div class='form-group row'>
                                            <label class='control-label col-md-3'>Last Name</label>
                                            <div class='col-md-8'>
                                              <input class='form-control' type='text' name='lastname' required='required' name='lastname' placeholder=$lastname>
                                            </div>
                                          </div>
                                          <div class='form-group row'>
                                            <label class='control-label col-md-3'>Email</label>
                                            <div class='col-md-8'>
                                              <input class='form-control col-md-8' type='email' required='required' name='email' placeholder=$email>
                                            </div>
                                          </div>
                                          <div class='form-group row'>
                                            <label class='control-label col-md-3'>Phone</label>
                                            <div class='col-md-8'>
                                              <input class='form-control col-md-8' type='text' required='required' name='phone' placeholder='Enter phone number'>
                                            </div>
                                          </div>
                                          <div class='form-group row'>
                                            <label class='control-label col-md-3'>Role</label>
                                            <div class='col-md-8'>
                                              <input class='form-control col-md-8' type='text' required='required' name='role' placeholder=$role>
                                            </div>
                                          </div>
                    
                                          <div class='form-group row'>
                                            <label class='control-label col-md-3'>Gender</label>
                                            <div class='col-md-9'>
                                              <div class='form-check'>
                                                <label class='form-check-label'>

                                                  <input $gender == 'male' ? checked : '' class='form-check-input' type='radio' value='male' name='gender'>Male
                                                </label>
                                              </div>
                                              <div class='form-check'>
                                                <label class='form-check-label'>
                                                  <input $gender == 'female' ? checked : '' class='form-check-input' type='radio' value='female' name='gender'>Female
                                                </label>
                                              </div>
                                            </div>
                                          </div>

                                          <div class='tile-footer'>
                                            <div class='row'>
                                              <div class='col-md-8 col-md-offset-3'>
                                                <button class='btn btn-primary' type='submit' data-dismiss='modal' id='demoNotify' value='Register'><i class='fa fa-fw fa-lg fa-check-circle' ></i>Update</button>&nbsp;&nbsp;&nbsp;
                                            </div>
                                            </div>
                                          </div>
                                        </form>
                                      </div>
                                    </div>
                                  </div>

                                    <!--  Modal Footer -->

                                    <!-- </div>
                                    <div class='modal-footer'>
                                      <button type='button' class='btn btn-default' id = 'demoNotify' data-dismiss='modal'>Update</button>
                                    </div>
                                  </div> -->
                              
                                  </div>
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
    <script type="text/javascript" src="../js/plugins/bootstrap-notify.min.js"></script>
    <script type="text/javascript" src="../js/plugins/sweetalert.min.js"></script>
    <script type="text/javascript">
      $('#demoNotify').click(function(){
      	$.notify({
      		title: "Update Complete : ",
      		message: "Something cool is just updated!",
      		icon: 'fa fa-check' 
      	},{
      		type: "info"
      	});
      });
      $('#demoSwal').click(function(){
      	swal({
      		title: "Are you sure?",
      		text: "You will not be able to recover this imaginary file!",
      		type: "warning",
      		showCancelButton: true,
      		confirmButtonText: "Yes, delete it!",
      		cancelButtonText: "No, cancel plx!",
      		closeOnConfirm: false,
      		closeOnCancel: false
      	}, function(isConfirm) {
      		if (isConfirm) {
      			swal("Deleted!", "Your imaginary file has been deleted.", "success");
      		} else {
      			swal("Cancelled", "Your imaginary file is safe :)", "error");
      		}
      	});
      });
    </script>
    
    <!-- Data table plugin-->
    <script type="text/javascript" src="../js/plugins/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="../js/plugins/dataTables.bootstrap.min.js"></script>
    <script type="text/javascript">$('#sampleTable').DataTable();</script>
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