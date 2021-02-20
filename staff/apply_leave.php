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
      <div class="row col-md-12">
            
              <div class="col-lg-6">
                <form>
                <div class="form-group">
          <div class="tile">
            <h3 class="tile-title">Apply</h3>
            <div class="tile-body">
              <form class="form-horizontal">
                <div class="form-group row">
                  <label class="control-label col-md-3">Name</label>
                  <div class="col-md-8">
                    <input class="form-control" type="text" placeholder="Enter full name">
                  </div>
                </div>
                <div class="form-group row">
                  <label class="control-label col-md-3">Email</label>
                  <div class="col-md-8">
                    <input class="form-control col-md-8" type="email" placeholder="Enter email address">
                  </div>
                </div>
                <div class="form-group row">
                  <label class="control-label col-md-3">Department</label>
                  <div class="col-md-8">
                    <textarea class="form-control" rows="4" placeholder="Enter your depatment"></textarea>
                  </div>
                </div>
                <div class="form-group row">
                  <label class="control-label col-md-3">Gender</label>
                  <div class="col-md-9">
                    <div class="form-check">
                      <label class="form-check-label">
                        <input class="form-check-input" type="radio" name="gender">Male
                      </label>
                    </div>
                    <div class="form-check">
                      <label class="form-check-label">
                        <input class="form-check-input" type="radio" name="gender">Female
                      </label>
                    </div>
                  </div>
                </div>
                 





                  <div class="form-group">
                  <label for="leave_type" ><span>Leave Type <span class="required"></span></span>
                  <select name="leave_type" id="leave_type">
		 	<option value="Casual Leave">Casual Leave</option><option value="New">New</option><option value="Newest">Newest</option><option value="Sick Leave">Sick Leave</option><option value="Weekend Leave">Weekend Leave</option>       

  </select>
                    
                    <select name="leave_type" id="leave_type">
		 	<?PHP
           		while ($row = mysqli_fetch_array($result))
            	{
                	$leave_type = $row['leave_type'];
                	echo "<option value=\"".$leave_type."\">".$leave_type."</option>";
            	}
          	?>
          	</select>
                    </label>

                    
                 
    
    <div class="multiple_days_leave" >     
        <label for="start_date" ><span>Start Date <span class="required"></span></span>
        	<input type="date" name="start_date" id="start_date" onchange="total_days()" />
        </label>
        
        <label for="end_date" ><span>End Date <span class="required"></span></span>
        	<input type="date" name="end_date" id="end_date" onchange="total_days()" />
        </label>
   	</div>
    
    <div class="leave_requested_days" >     
        <label for="days_requested" ><span>Days Requested </span>
        	<input type="text" name="days_requested" id="days_requested" readonly="true" placeholder="No. of Days"/>
        </label>
   	</div>
                  

<style type="text/css">
body {
	margin-left: 0px;
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
	background-image: url(../images/bg.gif);
}
</style>
<link href="../style.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="../jquery.js"></script>
<script>
	function total_days()
	{
		var start_date = document.getElementById("start_date");
		var end_date = document.getElementById("end_date");
		var start_day = new Date(start_date.value);
		var end_day = new Date(end_date.value);
		var milliseconds_per_day = 1000 * 60 * 60 * 24;
	
		var millis_between = end_day.getTime() - start_day.getTime();
		var days = millis_between / milliseconds_per_day;
	
		// Round down.
		//alert( Math.floor(days));
		
		var total_days = (Math.floor(days)) + 1;
		var combined = total_days;
		//alert(combined);
		//document.getElementById("date").value = (Math.floor(days)) ;
		var days_requested = document.getElementById('days_requested');
		days_requested.value = combined;
	}
	
	$(document).ready(function(){
        $('input[type="radio"]').click(function(){
            if($(this).attr("value")=="one_day"){
                $(".multiple_days_leave").hide();
                $(".one_day_leave").show();
				$(".leave_type").show();
				$(".leave_requested_days").hide();
				$(".button").show();
            }
            if($(this).attr("value")=="multiple_days"){
                $(".one_day_leave").hide();
                $(".multiple_days_leave").show();
				$(".leave_type").show();
				$(".leave_requested_days").show();
				$(".button").show();
            }
        });
    });
	
	$(document).ready(function(){
    if(!$("input[type=radio][name='leave_duration']:checked").val())
	{
		 $(".one_day_leave").hide();
         $(".multiple_days_leave").hide();
		 $(".leave_type").hide();
		 $(".leave_requested_days").hide();
		 $(".button").hide();
	}
});
</script>
</head>

<body>
		 

    
    
    
    </form>
  </div>
 
</body>
</html>
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