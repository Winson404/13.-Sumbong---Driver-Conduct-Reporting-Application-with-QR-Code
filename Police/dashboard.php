<title>Dashboard | Driver Conduct Reporting Application</title>

<?php include 'navbar.php'; ?>

  <div class="content-wrapper">


    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Dashboard</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dashboard</li>
            </ol>
          </div>
        </div>
      </div>
    </div>





    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row justify-content-center d-flex">
          <!-- left column -->
          <div class="col-lg-12">
            <!-- jquery validation -->
            <div class="card card-info">
              <div class="card-header">
                <h4>About Us</h4>
              </div>
            
                 <div class="card-body">
                   
                     <div class="row">
                       <div class="col-lg-9">
                         <p><b>"Driver Conduct Reporting Application"</b> is intended for city commuters or pedestrians as a medium of reporting and taking actions regarding city traffic incidents, violations, and lost belongings revolving around Tagbilaran City public utility vehicle and private vehicle drivers.</p>
                       </div>
                       <div class="col-lg-3">
                         <img src="../images/light.png" alt="" class="img-fluid">
                       </div>
                     </div>


                    


               </div>
            </div>
         </div>
        </div>
      </div>
    </section>



    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row justify-content-center d-flex">
          <!-- left column -->
          <div class="col-lg-12">
            <!-- jquery validation -->
            <div class="card">
              
            
                 <div class="card-body">
                    
                      <div class="row d-flex justify-content-center">
                        <div class="col-lg-3 col-6">
                          <div class="small-box bg-info">
                            <div class="inner">
                              <?php
                                $admin = mysqli_query($conn, "SELECT police_Id from police");
                                $row_admin = mysqli_num_rows($admin);
                               ?>
                              <h3><?php echo $row_admin; ?></h3>

                              <p>Total of Reports Received Today</p>
                            </div>
                            <div class="icon">
                              <i class="fa-solid fa-chart-area"></i>
                            </div>
                            <a href="admin.php" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                          </div>
                        </div>
                        
                        <div class="col-lg-3 col-6">
                          <div class="small-box bg-success">
                            <div class="inner">
                          
                              <h3>Start</h3>

                              <p>Video Call</p>
                            </div>
                            <div class="icon">
                              <i class="fa-solid fa-video"></i>
                            </div>
                            <a href="video_call.php" class="small-box-footer" target="_blank">Click to start <i class="fas fa-arrow-circle-right"></i></a>
                          </div>
                        </div>

                       <!--  <div class="col-lg-3 col-6">
                          <div class="small-box bg-danger">
                            <div class="inner">
                              <?php
                                // $users = mysqli_query($conn, "SELECT user_Id from users");
                                // $row_users = mysqli_num_rows($users);
                               ?>
                              <h3><?php //echo $row_users; ?></h3>

                              <p>Reporter lists</p>
                            </div>
                            <div class="icon">
                              <i class="ion ion-person-add"></i>
                            </div>
                            <a href="users.php" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                          </div>
                        </div>
                      </div> -->


               </div>
            </div>
         </div>
        </div>
      </div>
    </section>

  
  </div>
 
 <?php include 'footer.php'; ?>