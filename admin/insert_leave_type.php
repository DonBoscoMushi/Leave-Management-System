<?php    
    
    require_once "../functions/config.php";
    //fetch details
    $leavetypename = $_POST['leavetypename'];
    $leavedescription = $_POST['leavedescription'];
    $maxdays = $_POST['maxdays'];
    

    // Sql query
    $sql1 = "SELECT leave_type FROM registered_leave_type WHERE email = '".$leavetypename."' ";

    $insert = "INSERT INTO registered_leave_type (leave_type, leave_description, max_days) 
    VALUES ('$leavetypename','$leavedescription', '$maxdays')";

    $result1 = $connection->query($sql1);

    $row1 = mysqli_fetch_array($result1);

    if($row1 == 0) {

      //no leave type existing with same name
      $result2 = $connection->query($insert);

      if($result2 == 1){
        echo " <script> 
                  alert(\" New Leave Registered\");
              </script>";
        echo " <script> 
                  window.location=\"register_leave.php\"
              </script>";
      }
      else {
        echo " <script> 
            alert(\" Failed to Register Leave \");
        </script>
        ";
      }


    }else
    {
      echo 	"<script>
            alert(\" Leave already exists.\");
          </script>";
      echo "<script>window.location=\"register_leave.php\";</script>";
    }

    //close connection
    mysqli_close($connection);



?>