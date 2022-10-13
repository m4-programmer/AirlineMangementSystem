
<?php require 'partials/header.php';

//  print($a = time());
// echo '<br>'.date('D m Y ', $a);
// echo(strlen($a))
  ?>
    <div class="container-fluid page-body-wrapper full-page-wrapper">
      <div class="content-wrapper d-flex align-items-center auth px-0"  style="background: url('images/airplane1.jpg') ;height: 100%;background-size: cover;background-repeat: no-repeat; ">
        <div class="row w-100 mx-0">
          <div class="col-lg-8 mx-auto">
            <div class="auth-form-light text-left py-5 px-4 px-sm-5" style="background-color: #dde">
              <div class="brand-logo bg-warning">
                <div class="row ">
                  <div class="col-md-4">
                    <img src="images/logo.jpg" style="border-radius: 50%" alt="logo" height="100">
                  </div>   
                  <div class="col-md-8 mt-4">
                     <h4 class=""><span class="text-primary">New</span> <span class="text-danger">here?</span></h4>
                     <h5 class="font-weight-light"><b>Signing up is easy. It only takes a few steps</b></h5>
                  </div>
                </div>
                
               
              </div>
              
              <form class="pt-3" action="handler/register.handler.php" method="post" enctype="multipart/form-data">
                
                <?php if (isset($_GET['err'])): ?>
                  <p class="text-danger text-center"><b><?php echo $_GET['err']; ?></b></p>
                  <?php endif ?>
                     <form class="form-sample">
                    <h3 class="card-description">
                      Personal info
                    </h3>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Surname</label>
                          <div class="col-sm-9">
                            <input type="text" class="form-control" value="<?php if(isset($_GET['fname']))echo  $_GET['fname'] ?>" placeholder="Surname" name="fname">
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">First Name</label>
                          <div class="col-sm-9">
                            <input type="text" class="form-control" value="<?php if(isset($_GET['lname']))echo  $_GET['lname'] ?>" placeholder="First Name" name="lname">
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Other Names</label>
                          <div class="col-sm-9">
                            <input type="text" class="form-control" value="<?php if(isset($_GET['oname']))echo  $_GET['oname'] ?>" placeholder="Other Name" name="oname">
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Email</label>
                          <div class="col-sm-9">
                           <input type="email" class="form-control form-control-lg" id="exampleInputEmail1" placeholder="Email" value="<?php if(isset($_GET['email']))echo  $_GET['email'] ?>" name="email">
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Gender</label>
                          <div class="col-sm-9">
                            <select class="form-control" placeholder="Select Gender" name="gender">
                              <option value="0">Select Gender</option>
                              <option <?php if ( isset($_GET['gender']) and $_GET['gender'] == 'male'):  ?>
                                selected
                              <?php endif ?> value="male">Male</option>
                              <option <?php if ( isset($_GET['gender'])and $_GET['gender'] == 'female'):  ?>
                                selected
                              <?php endif ?>  value="female">Female</option>
                            </select>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Date of Birth</label>
                          <div class="col-sm-9">
                            <input type="date" class="form-control" value="<?php if(isset($_GET['dob']))echo  $_GET['dob'] ?>" placeholder="dd/mm/yyyy" name="dob">
                          </div>
                        </div>
                      </div>
                    </div>
                    <!-- Row for Password -->
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Password</label>
                          <div class="col-sm-9">
                            <input type="password" class="form-control" placeholder="Enter Password" name="pword">
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Confirm Password</label>
                          <div class="col-sm-9">
                           <input type="password" class="form-control form-control-lg" id="" placeholder="Confirm Password" name="cpword">
                          </div>
                        </div>
                      </div>
                    </div>
                    <!-- End of Row for Password -->
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Phone Number</label>
                          <div class="col-sm-9">
                            <input class="form-control" value="<?php if(isset($_GET['phone_no']))echo  $_GET['phone_no'] ?>" placeholder="+234 xxx xxx xxx" name="phone_no">
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group row">
                           <label class="col-sm-3 col-form-label">Upload Image</label>
                           <div class="col-sm-9">
                          <input type="file" name="img" class="form-control fil-upload-default" required>
                          </div>
                            <!-- <div class="input-group ">
                            <input type="text" class="form-control file-upload-info" disabled placeholder="Upload Image">
                            <span class="input-group-append">
                              <button class="file-upload-browse btn btn-primary" type="button">Upload</button>
                            </span>
                            </div> -->
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
                            <input type="text" class="form-control" name="address1" value="<?php if(isset($_GET['address1']))echo  $_GET['address1'] ?>">
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">State</label>
                          <div class="col-sm-9">
                            <input type="text" class="form-control" name="state1" value="<?php if(isset($_GET['state1']))echo  $_GET['state1'] ?>">
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">City</label>
                          <div class="col-sm-9">
                            <input type="text" class="form-control" name="city1" value="<?php if(isset($_GET['city1']))echo  $_GET['city1'] ?>">
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Country</label>
                          <div class="col-sm-9">
                            <input type="text" class="form-control" value="Nigeria" name="country1">
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
                            <input type="text" class="form-control" name="kname" value="<?php if(isset($_GET['kname']))echo  $_GET['kname'] ?>">
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">State</label>
                          <div class="col-sm-9">
                            <input type="text" class="form-control" name="state2" value="<?php if(isset($_GET['state2']))echo  $_GET['state2'] ?>">
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Phone Number</label>
                          <div class="col-sm-9">
                            <input type="text" class="form-control" value="<?php if(isset($_GET['phone_no1']))echo  $_GET['phone_no1'] ?>" placeholder="+234 xxx xxx xxx" name="phone_no1">
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Email</label>
                          <div class="col-sm-9">
                            <input type="email" class="form-control" value="<?php if(isset($_GET['email1']))echo  $_GET['email'] ?>" name="email1">
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">City</label>
                          <div class="col-sm-9">
                            <input type="text" class="form-control" value="<?php if(isset($_GET['city2']))echo  $_GET['city2'] ?>" name="city2">
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Country</label>
                          <div class="col-sm-9">
                            <input type="text" class="form-control" value="Nigeria" name="country2">
                          </div>
                        </div>
                      </div>

                    </div> 
                  
                    <div class="text-center">
                      <button name="signup" class="btn  btn-primary" >SIGN UP</button>
                    </div>
                  
                <div class="text-center mt-4 font-weight-light">
                  Already have an account? <a href="login.php" class="text-primary">Login</a>
                </div>
                   
                  </form>
          </div>
        </div>
      </div>
      <!-- content-wrapper ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
 <?php require 'partials/scripts.php'; ?>
</body>

</html>
