<div class="modal fade" id="done<?php echo $row['link_Id']; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
       <div class="modal-header alert-info">
        <h5 class="modal-title" id="exampleModalLabel"><i class="fa-solid fa-video"></i> Done meeting</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true"><i class="fa-solid fa-circle-xmark"></i></span>
        </button>
      </div>
      <div class="modal-body">
        <form action="process_update.php" method="POST">
          <input type="hidden" class="form-control" value="<?php echo $row['link_Id']; ?>" name="link_Id">
          <h6 class="text-center">Set meeting as <b>done</b>?</h6>
      </div>
      <div class="modal-footer alert-light">
        <button type="button" class="btn btn-secondary" data-dismiss="modal"><i class="fa-solid fa-ban"></i> Cancel</button>
        <button type="submit" class="btn btn-info" name="meeting_done"><i class="fa-solid fa-floppy-disk"></i> Confirm</button>
      </div>
        </form>
    </div>
  </div>
</div>