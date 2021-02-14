<?php

require_once "../functions/config.php";

$firstname = "";
$lastname = "";
$role = "";
if (empty($_SESSION)){
    session_start();
  }
if($_SESSION['sid'] == session_id() && $_SESSION['user'] == "Admin")
{
  $user_id = $_SESSION['user_id'];
  $query1 = "SELECT * FROM users WHERE user_id = '".$user_id."'";

  $result2 = $connection -> query($query1);

  while($row1 = mysqli_fetch_array($result2)) {
    $firstname = $row1['firstname'];
    $lastname = $row1['lastname'];
    $role = $row1['role'];
    }
}

if($_SESSION['sid'] == session_id() && $_SESSION['user'] == "Staff")
{
  $user_id = $_SESSION['user_id'];
  $query1 = "SELECT * FROM users WHERE user_id = '".$user_id."'";

  $result2 = $connection -> query($query1);

  while($row1 = mysqli_fetch_array($result2)) {
    $firstname = $row1['firstname'];
    $lastname = $row1['lastname'];
    $role = $row1['role'];
    }
}

?>
