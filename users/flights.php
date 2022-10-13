<?php require 'partials/header.php';
	require 'partials/_navbar.php';
	require 'partials/_sidebar.php';
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
                    <h4 class="card-title">Flight's Booked</h4>
                    <button class="btn btn-primary btn-round ml-auto" data-toggle="modal" data-target="#addRowModal">
                      <i class="mdi mdi-magnify-plus"></i>
                      New Flight
                    </button>
                  </div>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table id="add-row" class="display table table-striped table-hover" >
                      <thead>
                        <tr>
                          <!-- <th>S/N</th> -->
                          <th>Date</th>
                          <th>Information</th>
                          <th>Seats</th>
                          <th>Booked</th>
                          <th>Available</th>
                          <th>Price</th>
                          <th style="width: 10%">Action</th>
                        </tr>
                      </thead>
                      
                      <tbody>
                      
                        <tr>
                          <td>April 24,2022</td>
                          <td>
                            <div class="col-sm-6">
                              <p>Airline :<b>Cebu Pacific</b></p>
                              <p><small>Airline :<b>Cebu Pacific</b></small></p>
                              <p><small>Location :<b>NAIA, Metro Manila - Mactan-Cebu Airport, Cebu</b></small></p>
                              <p><small>Departure :<b>Apr 09,2021 01:00 AM</b></small></p>
                              <p><small>Arrival :<b>Apr 09,2021 02:00 AM</b></small></p>
                              </div>
                          </td>
                          <td>100</td>
                           <td>0</td>
                           <td>0</td>
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
                     
                        
                        
                      </tbody>
                    </table>
                    
                    
                    
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


    <!-- Modal Content-->
                                  <div class="modal fade" id="addRowModal" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                        <div class="modal-header no-bd">
                          <h5 class="modal-title">
                            <span class="fw-mediumbold">
                            New</span> 
                            <span class="fw-light">
                              Row
                            </span>
                          </h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="modal-body">
                          <p class="small">Create an Airline </p>
                          <form method="POST" action="../handler/addAirlines.php?name=flights" >
                            
                            <div class="row">
                              <div class="col-sm-12">
                                <div class="form-group form-group-default">
                                  <label>Name</label>
                                  <select class="form-control" name="airline">
                                    <!-- To loop all the available flight here -->
                                    <option value='1'>Cebu</option>                                    
                                  </select>
                                </div>
                              </div>
                              <div class="col-md-6 pr-0">
                                <div class="form-group form-group-default">
                                  <label>Depature Date</label>
                                  <input id="addlocation" name="depart_date" type="date" class="form-control" value="" placeholder="Enter Airline Location">
                                </div>
                              </div>
                              <div class="col-md-6">
                                <div class="form-group form-group-default">
                                  <label>Depature Time</label>
                                  <input id="addUsername" name="depart_time" value="" type="time" class="form-control" placeholder="Enter Airline Description">
                                </div>
                              </div>
                              <div class="col-md-6 pr-0">
                                <div class="form-group form-group-default">
                                  <label>Arrival Date</label>
                                  <input id="addlocation" name="arrival_date" type="date" class="form-control" value="" placeholder="Enter Airline Location">
                                </div>
                              </div>
                              <div class="col-md-6">
                                <div class="form-group form-group-default">
                                  <label>Arrival Time</label>
                                  <input id="addUsername" name="arrival_time" value="" type="time" class="form-control" placeholder="Enter Airline Description">
                                </div>
                              </div>
                              <div class="col-md-6 pr-0">
                                <div class="form-group form-group-default">
                                  <label>Flight Destination</label>
                                  <input id="addlocation" name="Destination" type="text" class="form-control" value="" placeholder="Enter Flight Destination">
                                </div>
                              </div>
                              <div class="col-md-6">
                                <div class="form-group form-group-default">
                                  <label>Total Seats</label>
                                  <input id="addUsername" name="seats" value="" type="text" class="form-control" placeholder="Enter Available Seats">
                                </div>
                              </div>
                              
                            </div>
                          
                        </div>
                        <div class="modal-footer no-bd">
                          <button type="submit"  id="addRowButton" class="btn btn-primary">Add</button>
                          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                        </div>
                        </form>
                      </div>
                    </div>
                  </div>
                  <script type="text/javascript">
  $(document).ready(function() {

      // Add Row
      $('#add-row').DataTable({
        "pageLength": 10,
      });


    });
  
</script>