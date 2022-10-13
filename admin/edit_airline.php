<?php require 'partials/header.php';
  require 'partials/_navbar.php';
  require 'partials/_sidebar.php';
  $id = $_GET['id'];
  $airlines = $admin->fetchAirlines($id);
?>
<!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
         <!-- main page content goes here -->
         <div class="row ">
          
           <div class="col-md-12">
                <div class="card-body">
                  <h4 class="
                  card-title">Personal Information</h4>
                  <form class="form-sample" method="post" action="../handler/update.handler.php?name=airlines&id=<?php echo $id ?>">
                    <p class="card-description">
                      All Info Must Be Accurate
                    </p>

                    <?php foreach ($airlines as $data ): ?>
                    
                     <div class="row">
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Airline</label>
                          <div class="col-sm-9">
                            <input type="text" class="form-control" value="<?php echo strtoupper($data['Name']) ?>" name="Airline" >
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Location</label>
                          <div class="col-sm-9">
                            <select id="addlocation" name="Location" type="text" class="form-control" value="<?php echo strtoupper($data['Location']) ?>" placeholder="Enter Airline Location">
                                    <option>Select Location</option>
                                    <?php foreach ($getLocations as $key ): ?>
                                      <option <?php if ($data['Location'] == $key['states']): echo "selected";?>
                                        
                                      <?php endif ?>><?php echo $key['states'] ?></option>
                                      
                                    <?php endforeach ?>
                                  </select>
                          
                          </div>
                        </div>
                      </div>
                    </div>
                    
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Description</label>
                          <div class="col-sm-9">
                            <input class="form-control" name="Description" value="<?php echo strtoupper($data['Description']) ?>" >
                        </div>
                      </div>
                    </div>
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Motto</label>
                          <div class="col-sm-9">
                            <input type="text" class="form-control" value="<?php echo strtoupper($data['Motto']) ?>" name="Motto" >
                          </div>
                        </div>
                      </div>
                    </div>
                     
                 
                   

                      </div>
                    </div>
                    <?php endforeach ?>
                    <div class="row col-md-12">
                    <div class="text-center">
                      <button type="submit" name="update" class="btn btn-primary mr-2">Update</button>
                    </div>
                    </div>
                    
                  </form>
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
