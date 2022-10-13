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
                    <h4 class="card-title">Airline List</h4>
                    <button class="btn btn-primary btn-round ml-auto" data-toggle="modal" data-target="#addRowModal">
                      <i class="mdi mdi-magnify-plus"></i>
                      New Airline
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
                          <th>Airline</th>
                          <th>Location</th>
                          <th>Description</th>
                          <th>Motto</th>
                          
                          <th style="width: 5%">Action</th>
                        </tr>
                      </thead>
                      
                      <tbody>
                      <?php foreach ($airlines as $data):
                        $dat = $data['created_at'];
                        $date = strtotime($dat);
                        $time = date('M d, Y', $date);
                       ?>
                        
                      
                        <tr>
                          <td><?php echo $time ?></td>
                          <td>
                            <div class="col-sm-6">
                              <p>Airline :<b><?php echo $data['Name'] ?></b></p>
                              
                              </div>
                          </td>
                          <td><?php echo $data['Location'] ?></td>
                           <td><?php echo $data['Description'] ?></td>
                           <td><?php echo $data['Motto'] ?></td>
                           
                          <td>
                            <div class="form-button-action">
                              <a href="edit_airline.php?id=<?php echo $data['Id'] ?>" type="button" data-toggle="tooltip" title="" class="btn  " data-original-title="Edit Task">
                                <i class="mdi mdi-launch" style="color:blue"></i>
                              </a>
                              <!-- <button type="button"  class="btn  btn-danger " >
                                
                                Delete
                              </button> -->

                              <a href="../handler/delete.handler.php?name=delete_airlines&id=<?php echo $data['Id']?>" type="button" data-toggle="tooltip" title="" class="btn  " data-original-title="Remove">
                                <i class="mdi mdi-close" style="color:red"></i>
                              </a>
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
                          <form method="POST" action="../handler/addAirlines.php?name=airlines" >
                            
                            <div class="row">
                              <div class="col-sm-12">
                                <div class="form-group form-group-default">
                                  <label>Name</label>
                                  <input id="addName" name="name" type="text" class="form-control" value="" placeholder="Enter Airline Name">
                                </div>
                              </div>
                              <div class="col-md-6 pr-0">
                                <div class="form-group form-group-default">
                                  <label>Location</label>
                                  <select id="addlocation" name="location" type="text" class="form-control" value="" placeholder="Enter Airline Location">
                                    <option>Select Location</option>
                                    <?php foreach ($getLocations as $key ): ?>
                                      <option><?php echo $key['states'] ?></option>
                                      
                                    <?php endforeach ?>
                                  </select>
                                </div>
                              </div>
                              <div class="col-md-6">
                                <div class="form-group form-group-default">
                                  <label>Description</label>
                                  <input id="addUsername" name="description" value="" type="text" class="form-control" placeholder="Enter Airline Description">
                                </div>
                              </div>
                              <div class="col-sm-12">
                                <div class="form-group form-group-default">
                                  <label>Motto</label>
                                  <input id="addPassword" name="motto" type="text" class="form-control"  placeholder="Enter Airline Motto">
                                </div>
                              </div>
                            </div>
                          
                        </div>
                        <div class="modal-footer no-bd">
                          <button type="submit"  id="addRowButton" class="btn btn-primary" name="add">Add</button>
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