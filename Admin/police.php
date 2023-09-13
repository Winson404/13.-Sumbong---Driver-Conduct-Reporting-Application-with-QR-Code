<title>Police Officers | Driver Conduct Reporting Application</title>


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
            <h1>Police Officers </h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="dashboard.php">Home</a></li>
              <li class="breadcrumb-item active">Police Officers </li>
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

                  <?php if(isset($_SESSION['success'])) { ?> 
                      <h3 class="alert card-title position-absolute py-2 alert-success rounded p-1" role="alert" style="right: 20px; box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;"><?php echo $_SESSION['success']; ?></h3>
                  <?php unset($_SESSION['success']); } ?>


                  <?php if(isset($_SESSION['invalid']) && isset($_SESSION['error'])) { ?>
                      <h3 class="alert card-title position-absolute py-2 alert-danger rounded p-1" role="alert" style="right: 20px; box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;"><?php echo $_SESSION['invalid']; ?> <?php echo $_SESSION['error']; ?></h3>
                  <?php unset($_SESSION['invalid']);  unset($_SESSION['error']);  } ?>


                  <?php  if(isset($_SESSION['exists'])) { ?>
                      <h3 class="alert card-title position-absolute py-2 alert-danger rounded p-1" role="alert" style="right: 20px; box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;"><?php echo $_SESSION['exists']; ?></h3>
                  <?php unset($_SESSION['exists']); } ?>
                  
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Image</th>
                    <th>Full name</th>
                    <th>Gender</th>
                    <th>Email</th>
                    <th>Contact</th>
                    <th>Actions</th>
                  </tr>
                  </thead>
                  <tbody id="users_data">
                    <tr>
                      <?php 
                        $sql = mysqli_query($conn, "SELECT * FROM police");
                        while ($row = mysqli_fetch_array($sql)) {
                      ?>
                        <td>
                            <img src="../images-police/<?php echo $row['image']; ?>" alt="" width="50">
                        </td>
                        <td><?php echo ' '.$row['p_fname'].' '.$row['p_mname'].' '.$row['p_lname'].' '.$row['p_suffix'].' '; ?></td>
                        <td><?php echo $row['gender']; ?></td>
                        <td><?php echo $row['email']; ?></td>
                        <td><?php echo $row['contact']; ?></td>
                        <td>
                            <div class="dropdown dropleft">
                                  <button class="btn btn-secondary btn-sm dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-expanded="false"> Options </button>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                      <button type="button" class="btn btn-primary dropdown-item" data-toggle="modal" data-target="#view<?php echo $row['police_Id']; ?>">View</button>
                                      <button type="button" class="btn btn-primary dropdown-item" data-toggle="modal" data-target="#update<?php echo $row['police_Id']; ?>">Update</button>
                                      <button type="button" class="btn btn-primary dropdown-item" data-toggle="modal" data-target="#password<?php echo $row['police_Id']; ?>">Change password</button>
                                      <button type="button" class="btn btn-primary dropdown-item" data-toggle="modal" data-target="#delete<?php echo $row['police_Id']; ?>">Delete</button>
                                </div>
                            </div>
                        </td> 
                    </tr>

                    <?php include 'police_update_delete.php'; } ?>

                  </tbody>
                  <tfoot>
                      <tr>
                        <th>Image</th>
                        <th>Full name</th>
                        <th>Email</th>
                        <th>Address</th>
                        <th>Gender</th>
                        <th>Actions</th>
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


 <?php include 'police_add.php';  ?>
 <?php include 'footer.php'; ?>


