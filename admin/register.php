<?php

    require_once "../functions/config.php";
    //fetch details
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $role = $_POST['role'];
    $gender = $_POST['gender'];
    $password = $_POST['lastname'];

    // Sql query
    $sql1 = "SELECT email FROM users WHERE email = '".$email."' ";
    $insert = "INSERT INTO users (email, firstname, phone, lastname, gender, password, role) 
    VALUES ('$email','$firstname', '$lastname', '$phone', '$gender', '$password', '$role')";

    $result1 = $connection->query($sql1);

    $row1 = mysqli_fetch_array($result1);

    if($row1 == 0) {

      //no user existing with same email
      $result2 = $connection->query($insert);

      if($result2 == 1){
        echo " <script> 
                  alert(\" Staff Added\");
              </script>";
        echo " <script> 
                  window.location=\"register_staff.php\"
              </script>";
      }
      else {
        echo " <script> 
            alert(\" Failed to Add Staff \");
        </script>
        ";
      }


    }else
    {
      echo 	"<script>
            alert(\"Staff already exist.\");
          </script>";
      echo "<script>window.location=\"register_staff.php\";</script>";
    }

    //close connection
    mysqli_close($connection);



?>