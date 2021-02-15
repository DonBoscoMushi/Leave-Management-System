<?php 

echo "


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



        <!-- Modal -->
        <div id='myModal' class='modal fade' role='dialog'>
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



      </div>
      <div class='modal-footer'>
        <button type='button' class='btn btn-default' data-dismiss='modal'>Update</button>
      </div>
    </div>

    </div>
  </div>
  
  ";

?>