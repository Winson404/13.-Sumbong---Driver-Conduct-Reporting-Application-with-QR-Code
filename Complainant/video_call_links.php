<title>Video call | Driver Conduct Reporting Application</title>


<?php 
  include 'navbar.php';
  include '../sweetalert_messages.php'; 
?>

   <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row">
          <div class="col-sm-6">
            <h1>Video call</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="dashboard.php">Home</a></li>
              <li class="breadcrumb-item active">Video call</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <div class="d-flex">
                  <button type="button" class="btn btn-info" data-toggle="modal" data-target="#add_user"><i class="bi bi-plus-circle"></i> Add</button>

                  
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Police name</th>
                    <th>Link address</th>
                    <th>Time sent</th>
                    <th>Action</th>
                    <th>Status</th>
                  </tr>
                  </thead>
                  <tbody id="users_data">
                    <tr>
                      <?php 
                        $sql = mysqli_query($conn, "SELECT * FROM video_links JOIN police ON video_links.police_Id=police.police_Id");
                        while ($row = mysqli_fetch_array($sql)) {
                      ?>
                        <td><?php echo ' '.$row['p_fname'].' '.$row['p_mname'].' '.$row['p_lname'].' '.$row['p_suffix'].' '; ?></td>
                        <td><?php echo $row['link_address']; ?></td>
                        <td><?php echo $row['time_sent']; ?></td>
                        <td>
                            <a href="<?php echo $row['link_address']; ?>" class="btn btn-success" target="_blank">JOIN</a>
                        </td>
                        <td>
                          <?php if($row['status'] == 'Not done'): ?>
                            <span type="button" class="badge badge-warning rounded-pill p-1" data-toggle="modal" data-target="#done<?php echo $row['link_Id']; ?>">Set as Done</span>
                          <?php else: ?>
                            <span class="badge badge-info rounded-pill p-1"><?php echo $row['status']; ?></span>
                          <?php endif; ?>
                        </td>
                    </tr>

                    <?php 
                    include 'video_call_links_delete.php';
                      } 
                    ?>

                  </tbody>
                  <tfoot>
                      <tr>
                        <th>Police name</th>
                        <th>Link address</th>
                        <th>Time sent</th>
                        <th>Action</th>
                        <th>Status</th>
                      </tr>
                  </tfoot>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>


 <footer class="main-footer mt-5">
    <strong>Copyright &copy; 2022 <a href="#">Driver Conduct Reporting Application</a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> 3.2.0
    </div>
  </footer>

</div><!-- ./wrapper -->



<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script> -->

<!-- TOASTER -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>


<!-- jQuery -->
<script src="../js/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="../js/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="../js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<!-- <script src="../js/Chart.min.js"></script> -->
<!-- Sparkline -->
<!-- <script src="../js/sparkline.js"></script> -->
<!-- JQVMap -->
<!-- <script src="../js/jquery.vmap.min.js"></script> -->
<!-- <script src="../js/jquery.vmap.usa.js"></script> -->
<!-- jQuery Knob Chart -->
<!-- <script src="../js/jquery.knob.min.js"></script> -->
<!-- daterangepicker -->
<!-- <script src="../js/moment.min.js"></script> -->
<!-- <script src="../js/daterangepicker.js"></script> -->
<!-- Tempusdominus Bootstrap 4 -->
<!-- <script src="../js/tempusdominus-bootstrap-4.min.js"></script> -->
<!-- Summernote -->
<!-- <script src="../js/summernote-bs4.min.js"></script> -->
<!-- overlayScrollbars -->
<!-- <script src="../js/jquery.overlayScrollbars.min.js"></script> -->
<!-- AdminLTE App -->
<script src="../js/adminlte.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../js/demo.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<!-- <script src="../js/dashboard.js"></script> -->
<!-- Toastr -->
<script src="../js/toastr/toastr.min.js"></script>
<!-- DataTables  & Plugins -->
<script src="../js/jquery.dataTables.min.js"></script>
<script src="../js/dataTables.bootstrap4.min.js"></script>
<script src="../js/dataTables.responsive.min.js"></script>
<script src="../js/responsive.bootstrap4.min.js"></script>
<script src="../js/dataTables.buttons.min.js"></script>
<script src="../js/buttons.bootstrap4.min.js"></script>
<script src="../js/jszip.min.js"></script>
<script src="../js/pdfmake.min.js"></script>
<script src="../js/vfs_fonts.js"></script>
<script src="../js/buttons.html5.min.js"></script>
<script src="../js/buttons.print.min.js"></script>
<script src="../js/buttons.colVis.min.js"></script>


<!-- jquery-validation -->
<!-- <script src="js/jquery.validate.min.js"></script>
<script src="js/additional-methods.min.js"></script> -->


<script>
  $(document).ready(function() {  

    $(".nav > li").click(function() {  
        $(".nav li").removeClass("active");
        $(this).addClass("active");
    });
    
});
</script>

 <script>
  //-----------------------------ALERT TIMEOUT-------------------------//
  $(document).ready(function() {
      setTimeout(function() {
          $('.alert').hide();
      } ,5000);
  });
  //-----------------------------END ALERT TIMEOUT---------------------//
 </script>

</body>
</html>




