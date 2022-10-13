 <?php require 'partials/header.php';
  require 'partials/_navbar.php';
  require 'partials/_sidebar.php';
?>
 <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
         <!-- holds main content of page -->
          <div class="row">
             <div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Users Table</h4>
                  <p class="card-description">
                    View all users<label class="badge badge-danger">Users</label>
                  </p>
                  <div class="table-responsive">
                    <table class="table table-striped">
                      <thead>
                        <tr>
                          <th>User</th>
                          <th>User Id</th>                        
                          <th>Full name</th>
                          <th>Gender</th>
                          <th>Email</th>
                          <th>Phone Number</th>
                          <th>Address</th>
                          <th>Date Joined</th>
                        </tr>
                      </thead>
                      <tbody>
                        <!-- start foreach statement here -->
                        <?php foreach ($loggedUsers as $data): ?>
                          
                        
                        <tr>
                          <td class="py-1"> <!-- this is for user picture -->
                            <img src="http://localhost/airlines/<?php echo $data['User_img'] ?>" alt="image"/>
                          </td>
                          <td>
                            <?php echo $data['User_id'] ?>
                          </td>
                          <td> <!-- this is for user Name, Concatenate the names here -->
                            <?php echo strtoupper( $data['Firstname']." ". $data['Surname']." ". $data['Middlename']) ?>
                          </td>
                          <td>
                            <?php echo  $data['Gender'] ?>
                          </td>
                          <td>
                            <?php echo  $data['Email'] ?>
                          </td>
                          <td>
                            <?php echo  $data['Phonenumber'] ?>
                          </td>
                           <td>
                            <?php echo  $data['Address'].', '. $data['State'] ?>
                          </td>
                           <td>
                            <?php echo  date('M d Y', strtotime($data['Created_at'])) ?>
                          </td>
                        </tr>
                        <!-- End for each stament here -->
                        <?php endforeach ?>
                      </tbody>
                    </table>
                  </div>
                </div>
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
