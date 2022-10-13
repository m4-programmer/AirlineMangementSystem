<?php require '../partials/header.php' ?>

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
              <?php if (isset($_GET['err'])): ?>
              <p class="text-danger text-center"><b><?php echo $_GET['err']; ?></b></p>
              <?php endif ?>
              
              <form class="pt-5 pb-5 mt-3" action="../handler/login.handler.php" method="post">
                <div class="form-group">
                  <input type="email" name="email" class="form-control form-control-lg" id="exampleInputEmail1" value="<?php if(isset($_GET['email']))echo  $_GET['email'] ?>"placeholder="Email">
                </div>
                <div class="form-group">
                  <input type="password" name="pword" class="form-control form-control-lg" id="exampleInputPassword1" placeholder="Password">
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
<?php require '../partials/scripts.php'; ?>
</body>

</html>
