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
              </div>
            
                 <div class="card-body">
                   
                     <div class="row">
                       <div class="col-lg-12">
                         <h3 class="text-center">Hello, Reporter</h3>
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
                                $report = mysqli_query($conn, "SELECT report_Id from report");
                                $row_report = mysqli_num_rows($report);
                               ?>
                              <h3><?php echo $row_report; ?></h3>

                              <p>Total of Reported Reports</p>
                            </div>
                            <div class="icon">
                              <i class="fa-solid fa-chart-area"></i>
                            </div>
                            <a href="report.php" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                          </div>
                        </div>
                        
                      


               </div>
            </div>
         </div>
        </div>
      </div>
    </section>

  
  </div>
 
 <?php include 'footer.php'; ?>