<!DOCTYPE html>
<html lang="en">
<head>
    <?php require 'partials/header.php' ?>

    <div class="container-fluid page-body-wrapper full-page-wrapper" >
      <div class="content-wrapper d-flex align-items-center auth px-0"  style="background: url('../images/airplane1.jpg') ;height: 100% ">
        <div class="row w-100 mx-0">
          <div class="col-lg-4 mx-auto">
            <div class="auth-form-light text-left py-5 px-4 px-sm-5">
              <div class="brand-logo ">
                <div class="row ">
                  <div class="col-md-4">
                    <img src="../images/logo.jpg" class="img img-responsive ml-n4 pl-n5" style="border-radius: 50%" alt="logo" height="100" width="50px">
                  </div>   
                  <div class="col-md-8 pl-5 mt-4">
                     <h4 class=""><span class="text-primary">Need New</span> <span class="text-danger">Password?</span></h4>
                     <h5 class="font-weight-light"><b></b></h5>
                  </div>
                </div> 
              </div>
              <h4>Hello! let's get started</h4>
              <h6 class="font-weight-light"></h6>
              <?php if (isset($_GET['err'])): ?>
              <?php endif ?>
              <form class="pt-3" action="../handler/change_password.handler.php" method="post">
                <div class="form-group">
                  <input type="password" name="opwrd" class="form-control form-control-lg" id="exampleInputEmail1" value="" placeholder="Old Password">
                </div>
                <div class="form-group">
                  <input type="password" name="npwrd" class="form-control form-control-lg" id="exampleInputPassword1" placeholder="New Password">
                </div>
                <div class="form-group">
                  <input type="password" name="cpwrd" class="form-control form-control-lg" id="exampleInputPassword1" placeholder="Confirm Password">
                </div>
                <div class="mt-3">
                  <button class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn" name="change" >Change Password</button>
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

 <!--    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/change_password.css">
    <title>Login</title>
</head>
<body>
    <div class="all">
        <img src="images/airplane2.jpg" alt="Tulip Travels">
        <div class="welcome"><p>Welcome To Tulip Travels!</p>The Way You Want It</div>
        <div class="form">
            <form action="" method="POST">
                <fieldset>
                    <legend>Change Password</legend>
                    <label>Old Password:<br>
                        <input type="text" name="username" placeholder="Enter Old Password" required>
                     </label><br><br>
                    <label>New Password:
                        <input type="password" name="password" placeholder="Enter New Password" required>
                    </label><br><br>
                   <label>Confirm New Password:
                        <input type="password" name="password" placeholder="Enter New Password" required>
                    </label><br><br>
                    <button name="submit">Change</button>
                </fieldset>
            </form>
        </div>
    </div> -->
<!-- </body>
</html> -->