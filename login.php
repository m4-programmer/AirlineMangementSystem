<?php require 'partials/header.php' ?>

    <div class="container-fluid page-body-wrapper full-page-wrapper" >
      <div class="content-wrapper d-flex align-items-center auth px-0"  style="background: url('images/airplane1.jpg') ;height: 100% ">
        <div class="row w-100 mx-0">
          <div class="col-lg-4 mx-auto">
            <div class="auth-form-light text-left py-5 px-4 px-sm-5">
              <div class="brand-logo ">
                <div class="row ">
                  <div class="col-md-4">
                    <img src="images/logo.jpg" class="img img-responsive ml-n4 pl-n5" style="border-radius: 50%" alt="logo" height="100" width="50px">
                  </div>   
                  <div class="col-md-8 pl-5 mt-4">
                     <h4 class=""><span class="text-primary">New</span> <span class="text-danger">here?</span></h4>
                     <h5 class="font-weight-light"><b>Signing up is easy. It only takes a few steps</b></h5>
                  </div>
                </div> 
              </div>
              <h4>Hello! let's get started</h4>
              <h6 class="font-weight-light">Sign in to continue.</h6>
              <?php if (isset($_GET['err'])): ?>
              <p class="text-danger text-center"><b><?php echo $_GET['err']; ?></b></p>
              <?php endif ?>
              
              <form class="pt-3" action="handler/login.handler.php" method="post">
                <div class="form-group">
                  <input type="email" name="email" class="form-control form-control-lg" id="exampleInputEmail1" value="<?php if(isset($_GET['email']))echo  $_GET['email'] ?>"placeholder="Email">
                </div>
                <div class="form-group">
                  <input type="password" name="pword" class="form-control form-control-lg" id="exampleInputPassword1" placeholder="Password">
                </div>
                <div class="mt-3">
                  <button class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn" name="signin" >SIGN IN</button>
                </div>
                <div class="my-2 d-flex justify-content-between align-items-center">
                  <div class="form-check">
                    <label class="form-check-label text-muted">
                      <input type="checkbox" class="form-check-input">
                      Keep me signed in
                    </label>
                  </div>
                  <a href="#" class="auth-link text-black">Forgot password?</a>
                </div>
                
                <div class="text-center mt-4 font-weight-light">
                  Don't have an account? <a href="register.php" class="text-primary">Create</a>
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
