<?php require 'partials/header.php';
  require 'partials/_navbar.php';
  require 'partials/_sidebar.php';
?>
<!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
         <!-- main page content goes here -->
         <div class="row ">
          
           <div class="col-md-12">
                <div class="card-body">
                  <h4 class="card-title">Personal Information</h4>
                  <form class="form-sample" method="post" action="">
                    <p class="card-description">
                      All Info Must Be Accurate
                    </p><!-- <?php print_r($loggedUser) ?> -->

                    <?php foreach ($loggedUser as $data ): ?>
                    
                     <div class="row">
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Surname</label>
                          <div class="col-sm-9">
                            <input type="text" class="form-control" value="<?php echo strtoupper($data['Surname']) ?>" name="fname" disabled>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">First Name</label>
                          <div class="col-sm-9">
                            <input type="text" class="form-control" value="<?php echo strtoupper($data['Firstname']) ?>" name="lname" disabled>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Other Names</label>
                          <div class="col-sm-9">
                            <input type="text" class="form-control" value="<?php echo strtoupper($loggedUser[0]['Middlename']) ?>" name="oname" disabled>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Email</label>
                          <div class="col-sm-9">
                           <input type="email" class="form-control form-control-lg" id="exampleInputEmail1" placeholder="Email" value="<?php echo $loggedUser[0]['Email'] ?>" name="email" disabled>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Gender</label>
                          <div class="col-sm-9">
                            <input class="form-control" name="gender" value="<?php echo strtoupper($loggedUser[0]['Gender']) ?>" disabled>
                        </div>
                      </div>
                    </div>
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Date of Birth</label>
                          <div class="col-sm-9">
                            <input type="date" class="form-control" value="<?php echo strtoupper($loggedUser[0]['Dateofbirth']) ?>" name="dob" disabled>
                          </div>
                        </div>
                      </div>
                    </div>
                     
                  <div class="row">
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Phone Number</label>
                          <div class="col-sm-9">
                            <input class="form-control" name="phone_no" value="<?php echo strtoupper($loggedUser[0]['Phonenumber']) ?>" disabled>
                        </div>
                      </div>
                    </div>
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">User Identification Number</label>
                          <div class="col-sm-9">
                            <input type="text" class="form-control" value="<?php echo $loggedUser[0]['User_id'] ?>" disabled>
                          </div>
                        </div>
                      </div>
                    </div>

                    <h3 class="card-description">
                      Address
                    </h3>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Address 1</label>
                          <div class="col-sm-9">
                            <input type="text" class="form-control" name="address1" value="<?php echo strtoupper($loggedUser[0]['Address']) ?>">
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">State</label>
                          <div class="col-sm-9">
                            <input type="text" class="form-control" name="state1" value="<?php echo strtoupper($loggedUser[0]['State']) ?>">
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">City</label>
                          <div class="col-sm-9">
                            <input type="text" class="form-control" name="city1" value="<?php echo strtoupper($loggedUser[0]['City']) ?>">
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Country</label>
                          <div class="col-sm-9">
                            <input type="text" class="form-control" value="NIGERIA" name="country1" disabled>
                          </div>
                        </div>
                      </div>

                    </div>
                    <h3 class="card-description">
                      Next of Kin
                    </h3>
                      <div class="row">
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Name</label>
                          <div class="col-sm-9">
                            <input type="text" class="form-control" name="kname" value="<?php echo strtoupper($loggedUser[0]['Next_of_kin_name']) ?>" disabled>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">State</label>
                          <div class="col-sm-9">
                            <input type="text" class="form-control" name="state2" value="<?php echo strtoupper($loggedUser[0]['Next_of_kin_state']) ?>">
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Phone Number</label>
                          <div class="col-sm-9">
                            <input type="text" class="form-control" value="<?php echo strtoupper($loggedUser[0]['Next_of_kin_no']) ?>" placeholder="+234 xxx xxx xxx" name="phone_no1" disabled>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Email</label>
                          <div class="col-sm-9">
                            <input type="email" class="form-control" value="<?php echo $loggedUser[0]['Next_of_kin_email'] ?>" name="email1" disabled>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">City</label>
                          <div class="col-sm-9">
                            <input type="text" class="form-control" value="<?php echo strtoupper($loggedUser[0]['Next_of_kin_city']) ?>" name="city2">
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Country</label>
                          <div class="col-sm-9">
                            <input type="text" class="form-control" value="NIGERIA" name="country2" disabled>
                          </div>
                        </div>
                      </div>

                    </div> 

                      </div>
                    </div>
                    <?php endforeach ?>
                    <button type="submit" class="btn btn-primary mr-2">Submit</button>
                  </form>
                </div>
              </div>
         </div>
          
         
         
        </div>
        <!-- content-wrapper ends -->
       
        <!-- partial -->
      </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
  <?php require 'partials/scripts.php' ?>
