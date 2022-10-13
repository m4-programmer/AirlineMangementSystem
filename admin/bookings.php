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
                  <h4 class="card-title">Bookings Table</h4>
                  <p class="card-description">
                    View all <label class="badge badge-danger">Bookings</label>
                  </p>
                  <div class="table-responsive">
                    <table id="add-row" class="display table table-striped table-hover" >
                      <thead>
                        <tr>
                          <!-- <th>S/N</th> -->
                          <th>User ID</th>
                          <th>Image</th>                        
                          <th>Full name</th>
                          <th>Airline</th>
                          <th>Flight Details</th>
                          <th>Price</th>
                          <th>Date Booked</th>
                          <th style="width: 10%">Action</th>
                        </tr>
                      </thead>
                      
                      <tbody>
                      <?php $sn = 1; foreach ($getBookings as $data): ?>
                        
                     
                        <tr>
                          <td><?php echo $sn++; ?></td>
                          <td>
                            
                              <img src="http://localhost/airlines/<?php //echo $data['User_img'] ?>images/faces/face5.jpg" alt="image"/>
                          </td>
                          <td><?php echo $data['Firstname']?></td>
                           <td>0</td>
                           <td><div class="col-sm-6">
                              <p>Destination :<b>Cebu Pacific</b></p>
                              <p>Departure Time: </p>
                              <p>Seat Number: 20</p>
                              </div></td>
                           <td></td>
                           <td>0</td>
                           
                          <td>
                            <div class="form-button-action">
                              <button type="button" data-toggle="tooltip" title="" class="btn  " data-original-title="Edit Task">
                                <i class="mdi mdi-launch" style="color:blue"></i>
                              </button>
                              <!-- <button type="button"  class="btn  btn-danger " >
                                
                                Delete
                              </button> -->

                              <button type="button" data-toggle="tooltip" title="" class="btn  " data-original-title="Remove">
                                <i class="mdi mdi-close" style="color:red"></i>
                              </button>
                            </div>
                          </td>
                        </tr>
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
<script type="text/javascript">
  $(document).ready(function() {

      // Add Row
      $('#add-row').DataTable({
        "pageLength": 10,
      });


    });
  
</script>
