<?php 

require_once "functions/config.php";

//start session
session_start();

//check if the user is already logged in, 
if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] == true){
  
  header("location:dashboard.php");
}
$username = $password = "";
$username_err = $password_err = "";

//when the form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST") {

  //validate the form
  if(empty(trim($_POST["username"]))){
    $username_err = "Please enter username.";
    echo $username_err;
     }else{
    // $myusername = mysqli_real_escape_string($conn, $_POST['username']);
    $username = trim($_POST["username"]);
  }

  if(empty(trim($_POST["password"]))){
    $password_err = "Please enter the password";
    echo $password_err;
  }else{
    // $mypassword = mysqli_real_escape_string($conn, $_POST['password']); 
    $password = trim($_POST["password"]);
  }
  // phpinfo();
  //validate the credentials
  if(empty($username_err) && empty($password_err)){

    // $sql = "SELECT username, password FROM users WHERE username = ?";
    $sql = "SELECT * FROM users WHERE email = '".$username."' AND password = '".$password."'";
    
    // $active = $row['active'];

    $result = $connection -> query($sql);

    $count = mysqli_num_rows($result);

    if($count){
      $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
      while($row){

        $role = $row['role'];
        $db_password = $row['password'];
        $user_id = $row['user_id'];
        
        if((!(strcmp($db_password, $password))) && $role == "Admin")
        {
          session_start();
          $_SESSION['sid'] = session_id();
          $_SESSION['user'] = $role;
          $_SESSION['user_id'] = $user_id;
          //Open dashboard
          header("Location: ../admin/register_staff.php");
        }
        else if ((!(strcmp($db_password, $password))) && $role == "Staff")
        {
          session_start();
          $_SESSION['sid'] = session_id();
          $_SESSION['user'] = $role;
          $_SESSION['user_id'] = $user_id;
          echo
          //Opens add_staff page if username and password matches
          header("Location: ../staff/index.php");
          //echo "staff";
        }
      }
    }else {
      $credentials_err = "Please check your credentials";
      echo $credentials_err;
    }

  }
}
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Main CSS-->
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
    <!-- Font-icon css-->
    <!-- <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"> -->
    <title>LMS</title>
  </head>
  <body>
    <section class="material-half-bg">
      <div class="cover"></div>
    </section>
    <section class="login-content">
      <div class="logo">
        <h1>Leave Management System</h1>
      </div>
      <div class="login-box">
        <form class="login-form" action="" method="post">
          <h3 class="login-head">SIGN IN</h3>
          <div class="form-group">
            <label class="control-label">USERNAME</label>
            <input class="form-control" type="text" name="username" required="required" placeholder="Email" autofocus>
          </div>
          <div class="form-group">
            <label class="control-label">PASSWORD</label>
            <input class="form-control" type="password" name="password" required="required" placeholder="Password">
          </div>
          <div class="for m-group">
            <div class="utility">
              <div class="animated-checkbox">
                <label>
                  <input type="checkbox"><span class="label-text">Stay Signed in</span>
                </label>
              </div>
              <p class="semibold-text mb-2"><a href="#" data-toggle="flip">Forgot Password ?</a></p>
            </div>
          </div>
          <div class="form-group btn-container">
            <button action="submit" value="Login" class="btn btn-primary btn-block">SIGN IN</button>
          </div>
          <div class="sweet-alert sa-error-container ">
          </div>
        </form>
        <form class="forget-form" action="index.html">
          <h3 class="login-head"><i class="fa fa-lg fa-fw fa-lock"></i>Forgot Password ?</h3>
          <div class="form-group">
            <label class="control-label">EMAIL</label>
            <input class="form-control" type="text" placeholder="Email">
          </div>
          <div class="form-group btn-container">
            <button class="btn btn-primary btn-block"><i class="fa fa-unlock fa-lg fa-fw"></i>RESET</button>
          </div>
          <div class="form-group mt-3">
            <p class="semibold-text mb-0"><a href="#" data-toggle="flip"><i class="fa fa-angle-left fa-fw"></i> Back to Login</a></p>
          </div>
        </form>
      </div>
    </section>
    <!-- Essential javascripts for application to work-->
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
    <!-- The javascript plugin to display page loading on top-->
    <script src="js/plugins/pace.min.js"></script>
    <script type="text/javascript">
      // Login Page Flipbox control
      $('.login-content [data-toggle="flip"]').click(function() {
      	$('.login-box').toggleClass('flipped');
      	return false;
      });
    </script>
  </body>
</html>