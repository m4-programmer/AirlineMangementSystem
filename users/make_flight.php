<?php require 'partials/header.php';
	require 'partials/_navbar.php';
	require 'partials/_sidebar.php';

  // Handles flight result
  
  if (isset($_POST['find'])) {
    extract($_POST);
    $getSearchedFlightSchedules = $user->getSearchedFlightSchedules($from, $to);
  }
?>
<!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
         <!-- main page content goes here -->
        
          <!-- Table content Start-->
            <div class="col-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-header">
                  <div class="d-flex align-items-center">
                    <h4 class="card-title">Book a Flight</h4>
                   
                  </div>
                </div>
                <div class="card-body">
                  
                 <form class="container" method="post">
                   <div class="form-row">
                     <div class="form-group col">
                       <label></label>
                       <select name="from" class="form-control">
                        
                           <option>From</option>
                           <?php foreach ($getLocations as $data): ?>
                             <option><?php echo $data['states'] ?></option>
                           <?php endforeach ?>
                        
                       </select>
                     </div>
                     <div class="form-group col">
                       <label></label>
                       <select name="to" class="form-control">
                         <option>To</option>
                          <?php foreach ($getLocations as $data): ?>
                             <option><?php echo $data['states'] ?></option>
                           <?php endforeach ?>
                       </select>
                     </div>
                   </div>
                   <!-- To remove this section -->

                  <!--   <div class="form-row">
                     <div class="form-group col">
                       <label></label>
                       <input type="date" name="from_date" class="form-control">
                     </div>
                     <div class="form-group col">
                       <label></label>
                       <input type="date" name="to_date" class="form-control">
                     </div>
                   </div> -->
                   <div style="text-align: center;width: 100%;">
                     <button class="btn btn-primary find" name="find">Find FLight</button>
                   </div>
                 </form>

                 <!-- Display Fight result asynchronously using ajax -->
                 <div class="result">
                   <?php //print_r($getSearchedFlightSchedules) ?>
                    <div class="table-responsive">
                    <table id="add-row" class="display table table-striped table-hover" >
                      <thead>
                        <tr>
                          <!-- <th>S/N</th> -->
                          <th>S/N</th>
                          <th>Information</th>
                          <th>Departure</th>
                          <th>Arrival</th>
                          <th style="padding: 3px;margin: 0;">Destination</th>
                          <th style="padding: 3px;margin: 0;">Available Seats</th>
                          <th>Price</th>
                          <th  style="padding: 3px;margin: 0;">Action</th>
                        </tr>
                      </thead>
                      
                      <tbody>
                      <?php $sn = 1;
                      if (isset($getSearchedFlightSchedules)) {
                        
                      
                       foreach ($getSearchedFlightSchedules as $data): ?>
                        
                     
                        <tr>
                          <td><?php echo $sn++; ?></td>
                          <td>
                            <div class="col-sm-6">
                              
                              <p><small>Airline :<b><?php echo $data['Name'] ?></b></small></p>
                              <p><small>Location :<b><?php echo $data['Location'] ?></b></small></p>
                              
                              
                              </div>
                          </td>
                          <td style="padding: 3px;margin: 0;"><b><?php echo date('M d, Y h:i a',$data['Departure']) ?></td>
                            <td><b><?php echo date('M d, Y h:i a',$data['Arrival']) ?></td>
                          

                          
                            <td style="padding: 3px;margin: 0;"><b><?php echo $data['Flight_destination'] ?></b></td>
                           <td><?php echo $data['Seats'] ?></td>
                           <td>10000</td>
                          <td style="padding: 3px;margin: 0;">
                            <div class="form-button-action">
                              <button type="button" data-toggle="tooltip" title="" class="btn btn-primary btn-lg p-3" data-original-title="Edit Task">
                                <i class="mdi mdi-launch" style="color:blue"></i> Book now
                              </button>
                              <!-- <button type="button"  class="btn  btn-danger " >
                                
                                Delete
                              </button> -->

                              
                            </div>
                          </td>
                        </tr>
                      <?php endforeach; }?>
                        
                        
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