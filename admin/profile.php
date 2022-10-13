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
                          <label class="col-sm-3 col-form-label">Full Name</label>
                          <div class="col-sm-9">
                            <input type="text" class="form-control" value="<?php echo strtoupper($data['name']) ?>" name="fname" >
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Username</label>
                          <div class="col-sm-9">
                            <input type="text" class="form-control"  value="<?php echo strtoupper($data['uname']) ?>" value="" name="uname"  placeholder="Username">
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Password</label>
                          <div class="col-sm-9">
                            <input type="text" class="form-control" value="<?php echo strtoupper($data['email']) ?>" name="email" >
                          </div>
                        </div>
                      </div>
                      
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Phone Number</label>
                          <div class="col-sm-9">
                            <input type="text" class="form-control"  name="Phone" placeholder="+234**********" maxlength="15" value="<?php echo $data['phone'] ?>" >
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
