<?php 

include_once 'view_staff.php';


?>

<!DOCTYPE html>
<html lang='en'>
  <head>
  
  
  
  
  </head>

  <body>
  
  <!-- Modal -->
  <div id='myModal' class='modal fade' role='dialog'>
    <div class='modal-dialog'>
    
    <!-- modal content -->
    <div class='modal-content'>
      <div class='modal-header'>
        
        <button type='button' class='close' data-dismiss='modal'>&times;</button> 
        <h4 class='modal-title'> Update Staff</h4>
      </div>
      <div class='modal-body'>
        <p>I fucking made it</p>
      </div>
      <div class='modal-footer'>
        <button type='button' class='btn btn-default' data-dismiss='modal'>Update</button>
      </div>
    </div>

    </div>
  </div>
  
  

                <div class='tile'>
                  <h3 class='tile-title' style='text-align: center;'><i class='fa fa-edit'></i> Register New Staff</h3>
                  <div class='tile-body'>
                    <form class='form-horizontal' method='post' action='register.php'>
                      <div class='form-group row'>
                        <label class='control-label col-md-3'>First Name</label>
                        <div class='col-md-8'>
                          <input class='form-control' type='text' name='firstname' required='required' placeholder='Enter first name'>
                        </div>
                      </div>
                      <div class='form-group row'>
                        <label class='control-label col-md-3'>Last Name</label>
                        <div class='col-md-8'>
                          <input class='form-control' type='text' name='lastname' required='required' name='lastname' placeholder='Enter last name'>
                        </div>
                      </div>
                      <div class='form-group row'>
                        <label class='control-label col-md-3'>Email</label>
                        <div class='col-md-8'>
                          <input class='form-control col-md-8' type='email' required='required' name='email' placeholder='Enter email address'>
                        </div>
                      </div>
                      <div class='form-group row'>
                        <label class='control-label col-md-3'>Role</label>
                        <div class='col-md-8'>
                          <input class='form-control col-md-8' type='text' required='required' name='role' placeholder='Enter Role'>
                        </div>
                      </div>

                      <div class='form-group row'>
                        <label class='control-label col-md-3'>Gender</label>
                        <div class='col-md-9'>
                          <div class='form-check'>
                            <label class='form-check-label'>
                              <input class='form-check-input' type='radio' value='male' name='gender'>Male
                            </label>
                          </div>
                          <div class='form-check'>
                            <label class='form-check-label'>
                              <input class='form-check-input' type='radio' value='female' name='gender'>Female
                            </label>
                          </div>
                        </div>
                      </div>
                      <div class='tile-footer'>
                    <div class='row'>
                      <div class='col-md-8 col-md-offset-3'>
                        <button class='btn btn-primary' type='submit' value='Register'><i class='fa fa-fw fa-lg fa-check-circle' ></i>Register</button>&nbsp;&nbsp;&nbsp;<a class='btn btn-secondary' href='#'><i action='reset'class='fa fa-fw fa-lg fa-times-circle'></i>Cancel</a>
                      </div>
                    </div>
                  </div>
                    </form>
                  </div>
                </div>
            </div>





  </body>

</html>