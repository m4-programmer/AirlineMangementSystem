<nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
            <div class="navbar-brand-wrapper d-flex justify-content-center">
        <div class="navbar-brand-inner-wrapper d-flex justify-content-between align-items-center w-100">  
          <a class="navbar-brand brand-logo" href="index.php"><img src="http://localhost/airlines/images/logo.jpg" class="img img-rounded" style="border-radius: 40%" alt="logo"/></a>
          <a class="navbar-brand brand-logo-mini" href="index.php"><img src="http://localhost/airlines/images/logo-mini.svg" alt="logo"/></a>
          <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
            <span class="mdi mdi-sort-variant"></span>
          </button>
        </div>  
      </div>
      <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
      <ul class="navbar-nav navbar-nav-right">
          
          <li class="nav-item nav-profile dropdown">
            <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" id="profileDropdown">
              <img src="http://localhost/airlines/<?php echo $loggedUser[0]['User_img'] ?>" class="img img-rounded" style="height:50px;width:50px " alt="profile"/>
              <span class="nav-profile-name"><?php echo strtoupper($loggedUser[0]['Firstname']." ".$loggedUser[0]['Surname']) ?></span>
            </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="profileDropdown">
              <a class="dropdown-item" href="change_password.php">
                <i class="mdi mdi-settings text-primary"></i>
                Change Password
              </a>

              <a class="dropdown-item" href="logout.php">
                <i class="mdi mdi-logout text-primary"></i>
                Logout
              </a>
            </div>
          </li>
        </ul>
        <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
          <span class="mdi mdi-menu"></span>
        </button>
      </div>
    </nav>