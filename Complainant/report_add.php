<!-- ****************************************************CREATE*********************************************************************** -->
<div class="modal fade" id="add_user" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
    <div class="modal-content">
      <div class="modal-header alert-info">
        <h5 class="modal-title" id="exampleModalLabel"><i class="fa-solid fa-chart-area"></i> Create report</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true"><i class="fa-solid fa-circle-xmark"></i></span>
        </button>
      </div>
      <div class="modal-body">
        <form action="process_save.php" method="POST" enctype="multipart/form-data">
            <input type="hidden" class="form-control" name="complainant_Id" value="<?php echo $id; ?>">
            <div class="form-group">
                <label>Report</label>
                <input type="text" class="form-control form-control-sm"  placeholder="Report name" name="reportname" required onkeyup="lettersOnly(this)">
            </div>
         
            <div class="form-group">
                <label>Incident Address</label>
                <input type="text" class="form-control form-control-sm"  placeholder="Incident address" name="address" required >
            </div>
          
      </div>
      <div class="modal-footer alert-light">
        <button type="button" class="btn btn-secondary" data-dismiss="modal"><i class="fa-solid fa-ban"></i> Cancel</button>
        <button type="submit" class="btn btn-info" name="create_report" id="usercreate"><i class="fa-solid fa-floppy-disk"></i> Submit</button>
      </div>
      </form>
    </div>
  </div>
</div>

<script>
    function lettersOnly(input) {
      var regex = /[^a-z ]/gi;
      input.value = input.value.replace(regex, "");
    }
</script>
<!-- ****************************************************END CREATE*********************************************************************** -->







