
<?php 
require '../handler/class_includer.php';
require '../partials/header.php' ?>

<?php 
  if (isset($_POST['signin'])) {
    extract($_POST);
    $login = $admin->LoginAdmin($uname,md5($pword));
    if ($login == true) {
      $_SESSION['uname'] = $uname;
      header("Location: index.php");
    } else {
      $msg = "Incorrect Login Details";
    }
    
    
  } else {
    
  }
  

 ?>



    <div class="container-fluid page-body-wrapper full-page-wrapper" >
      <div class="content-wrapper d-flex align-items-center auth px-0"  style="background: url('../images/airplane1.jpg') ;">
        <div class="row w-100 mx-0">
          <div class="col-lg-4 mx-auto">
            <div class="auth-form-light text-left py-5 px-4 px-sm-5 mt-5 mb-5 ">
              <div class="brand-logo ">
                <div class="row ">
                  <div class="col-md-12">
                    
                     <h4 class="text-center"><span class="text-primary">Admin</span> <span class="text-danger">Login?</span></h4>
                     <p class="text-center">Welcome Admin to your login portal</p>
                     
                  </div>
                </div> 
              </div>
              <p class="text-danger text-center"><b><?php echo @$msg; ?></b></p>
                            
              <form class="pt-5 pb-5 mt-3" action="" method="post">
                <div class="form-group">
                  <input type="uname" name="uname" class="form-control form-control-lg" id="exampleInputEmail1" value="<?php echo  @$uname ?>"placeholder="Username" required>
                </div>
                <div class="form-group">
                  <input type="password" name="pword" class="form-control form-control-lg" id="exampleInputPassword1" placeholder="Password" required="">
                </div>
                <div class="mt-3">
                  <button class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn" name="signin" >SIGN IN</button>
                </div>
               
                
                
              </form>
            </div>
          </div>
        </div>
      </div>
      <!-- content-wrapper ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
<?php require 'partials/scripts.php'; ?>
</body>

</html>
