<!-- ****************************************************DELETE*********************************************************************** -->
<!-- Modal -->
<div class="modal fade" id="delete<?php echo $row['report_Id']; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
       <div class="modal-header alert-info">
        <h5 class="modal-title" id="exampleModalLabel"><i class="fa-solid fa-chart-area"></i> Delete report</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true"><i class="fa-solid fa-circle-xmark"></i></span>
        </button>
      </div>
      <div class="modal-body">
        <form action="process_delete.php" method="POST">
          <input type="hidden" class="form-control" value="<?php echo $row['report_Id']; ?>" name="report_Id">
          <h6 class="text-center">Delete report?</h6>
      </div>
      <div class="modal-footer alert-light">
        <button type="button" class="btn btn-secondary" data-dismiss="modal"><i class="fa-solid fa-ban"></i> Cancel</button>
        <button type="submit" class="btn btn-info" name="delete_report"><i class="fa-solid fa-trash-can"></i> Delete</button>
      </div>
        </form>
    </div>
  </div>
</div>
<!-- ****************************************************END DELETE*********************************************************************** -->



<!-- ****************************************************UPDATE*********************************************************************** -->
<div class="modal fade" id="update<?php echo $row['report_Id']; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
    <div class="modal-content">
      <div class="modal-header alert-info">
        <h5 class="modal-title" id="exampleModalLabel"><i class="fa-solid fa-chart-area"></i> Update report</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true"><i class="fa-solid fa-circle-xmark"></i></span>
        </button>
      </div>
      <div class="modal-body">
        <form action="process_update.php" method="POST" enctype="multipart/form-data">
            <input type="hidden" class="form-control" value="<?php echo $row['report_Id']; ?>" name="report_Id">
            <div class="form-group">
                <label>Report</label>
                <input type="text" class="form-control form-control-sm"  placeholder="Report name" name="reportname" required onkeyup="lettersOnly(this)" value="<?php echo $row['report_topic']; ?>">
            </div>
         
            <div class="form-group">
                <label>Incident Address</label>
                <input type="text" class="form-control form-control-sm"  placeholder="Incident address" name="address" required value="<?php echo $row['incident_address']; ?>">
            </div>

            <div class="form-group">
              <?php                           
                  $gender  = mysqli_query($conn, "SELECT DISTINCT status FROM report");
                  $id = $row['report_Id'];
                  $all_gender = mysqli_query($conn, "SELECT * FROM report  where report_Id = '$id' ");
                  $row = mysqli_fetch_array($all_gender);
              ?>
              <label>Status</label>
              <select class="custom-select custom-select-sm" name="status" required>
                  <option selected disabled>Select status</option>
                  <option value="Pending">Pending</option>
                  <option value="Received">Received</option>
                  <option value="Action made">Action made</option>
               </select> 
            </div>
          
      </div>
      <div class="modal-footer alert-light">
        <button type="button" class="btn btn-secondary" data-dismiss="modal"><i class="fa-solid fa-ban"></i> Cancel</button>
        <button type="submit" class="btn btn-info" name="update_report" id="usercreate"><i class="fa-solid fa-floppy-disk"></i> Submit</button>
      </div>
      </form>
    </div>
  </div>
</div>

<!-- ****************************************************END UPDATE*********************************************************************** -->




<!-- ****************************************************VIEW*********************************************************************** -->
<div class="modal fade" id="view<?php echo $row['report_Id']; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
    <div class="modal-content">
      <div class="modal-header alert-info">
        <h5 class="modal-title" id="exampleModalLabel"><i class="fa-solid fa-chart-area"></i> Report information</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true"><i class="fa-solid fa-circle-xmark"></i></span>
        </button>
      </div>
      <div class="modal-body">
        <form action="process_save.php" method="POST" enctype="multipart/form-data">

            <div class="form-group">
                <label>Report</label>
                <input type="text" class="form-control form-control-sm"  placeholder="Report name" name="reportname" required onkeyup="lettersOnly(this)" value="<?php echo $row['report_topic']; ?>" readonly>
            </div>
         
            <div class="form-group">
                <label>Incident Address</label>
                <input type="text" class="form-control form-control-sm"  placeholder="Incident address" name="address" required value="<?php echo $row['incident_address']; ?>" readonly>
            </div>

            <div class="form-group">
                <label>Report Status</label>
                <input type="text" class="form-control form-control-sm"  placeholder="Incident address" name="address" required value="<?php echo $row['status']; ?>" readonly>
            </div>

            <div class="form-group">
                <label>Date reported</label>
                <input type="date" class="form-control form-control-sm"  placeholder="Incident address" name="address" required value="<?php echo $row['report_date']; ?>" readonly>
            </div>
          
      </div>
      <div class="modal-footer alert-light">
        <button type="button" class="btn btn-secondary" data-dismiss="modal"><i class="fa-solid fa-ban"></i> Cancel</button>
        <button type="button" class="btn btn-info" data-dismiss="modal" data-toggle="modal" data-target="#update<?php echo $row['report_Id']; ?>"><i class="fa-solid fa-floppy-disk"></i> Update</button>
      </div>
      </form>
    </div>
  </div>
</div>
<!-- ****************************************************END VIEW*********************************************************************** -->