<?php require 'partials/header.php';
	require 'partials/_navbar.php';
	require 'partials/_sidebar.php';
?>
<style type="text/css">
  .unselectable {
    z-index: 99;
}
  a.jqte_tool_label.unselectable {
    height: auto !important;
    min-width: 4rem !important;
    padding:5px
}
</style>
<!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
         <!-- main page content goes here -->
      <div class="col-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">System Settings</h4>
                  <p class="card-description">
                    
                  </p>
                  <form class="forms-sample">
                    <div class="form-group">
                      <label for="exampleInputName1">System Name</label>
                      <input type="text" class="form-control" id="exampleInputName1" placeholder="Name">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail3">Email address</label>
                      <input type="email" class="form-control" id="exampleInputEmail3" placeholder="Email">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputContacts4">Contact</label>
                      <input type="text" class="form-control" id="exampleInputContacts4" placeholder="Contacts">
                    </div>
               
                    <div class="form-group">
                      <label>File upload</label>
                      <input type="file" name="img[]" class="file-upload-default">
                      <div class="input-group col-xs-12">
                        <input type="text" class="form-control file-upload-info" disabled="" placeholder="Upload Image">
                        <span class="input-group-append">
                          <button class="file-upload-browse btn btn-primary" type="button">Upload</button>
                        </span>
                      </div>
                    </div>
                 
                    <div class="form-group">
                      <label for="exampleTextarea1">About Content</label>
                      <textarea class="form-control text-jqte" id="exampleTextarea1" rows="6"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary mr-2">Submit</button>
                    <button class="btn btn-light">Cancel</button>
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

  <script type="text/javascript">
    $('.text-jqte').jqte();
  </script>