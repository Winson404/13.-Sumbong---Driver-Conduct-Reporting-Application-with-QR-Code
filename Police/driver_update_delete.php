<!--****************************************************DELETE*********************************************************************** -->
<!-- Modal -->
<div class="modal fade" id="delete<?php echo $row['driver_Id']; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
       <div class="modal-header alert-info">
        <h5 class="modal-title" id="exampleModalLabel"><i class="fa-solid fa-id-card"></i> Delete driver's record</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true"><i class="fa-solid fa-circle-xmark"></i></span>
        </button>
      </div>
      <div class="modal-body">
        <form action="process_delete.php" method="POST">
          <input type="hidden" class="form-control" value="<?php echo $row['driver_Id']; ?>" name="driver_Id">
          <h6 class="text-center">Delete driver's record?</h6>
      </div>
      <div class="modal-footer alert-light">
        <button type="button" class="btn btn-secondary" data-dismiss="modal"><i class="fa-solid fa-ban"></i> Cancel</button>
        <button type="submit" class="btn btn-info" name="delete_driver"><i class="fa-solid fa-trash-can"></i> Delete</button>
      </div>
        </form>
    </div>
  </div>
</div>
<!-- ****************************************************END DELETE*********************************************************************** -->



<!-- ****************************************************UPDATE*********************************************************************** -->
<div class="modal fade" id="update<?php echo $row['driver_Id']; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg">
    <div class="modal-content">
      <div class="modal-header alert-info">
        <h5 class="modal-title" id="exampleModalLabel"><i class="fa-solid fa-user"></i> Create driver's info</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true"><i class="fa-solid fa-circle-xmark"></i></span>
        </button>
      </div>
      <div class="modal-body">
        <form action="process_update.php" method="POST" enctype="multipart/form-data" role="form">
          <input type="hidden" class="form-control" value="<?php echo $row['driver_Id']; ?>" name="driver_Id">
        <div class="row">

          <div class="col-lg-4">
              <div class="form-group">
                <label>First name</label>
                <input type="text" class="form-control form-control-sm"  placeholder="First name" name="firstname" required onkeyup="lettersOnly(this)" value="<?php echo $row['d_fname']; ?>">
              </div>
          </div>
          <div class="col-lg-4">
            <div class="form-group">
                <label>Middle name</label>
                <input type="text" class="form-control form-control-sm"  placeholder="Middle name" name="middlename" required onkeyup="lettersOnly(this)"  value="<?php echo $row['d_mname']; ?>">
            </div>
          </div>
          <div class="col-lg-4">
              <div class="form-group">
                <label>Last name</label>
                <input type="text" class="form-control form-control-sm"  placeholder="Last name" name="lastname" required onkeyup="lettersOnly(this)"  value="<?php echo $row['d_lname']; ?>">
              </div>
          </div>
          <div class="col-lg-8">
              <div class="form-group">
                <label>Address</label>
                <input type="text" class="form-control form-control-sm"  placeholder="Address" name="address" required  value="<?php echo $row['d_address']; ?>">
              </div>
          </div>
          <div class="col-lg-4">
              <div class="form-group">
                <label>License no.</label>
                <input type="text" class="form-control form-control-sm"  placeholder="License" name="license" required  value="<?php echo $row['d_license']; ?>">
              </div>
          </div>
          
      </div>
      </div>
      <div class="modal-footer alert-light">
        <button type="button" class="btn btn-secondary" data-dismiss="modal"><i class="fa-solid fa-ban"></i> Cancel</button>
        <button type="submit" class="btn btn-info" name="update_driver" id="policecreate"><i class="fa-solid fa-floppy-disk"></i> Submit</button>
      </div>
      </form>
    </div>
  </div>
</div>

<!-- ****************************************************END UPDATE*********************************************************************** -->


