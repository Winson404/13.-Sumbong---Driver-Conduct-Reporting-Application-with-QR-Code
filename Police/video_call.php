<?php
    session_start();
    include '../config.php';
    
    if(isset($_SESSION['police_Id'])) {
    $id = $_SESSION['police_Id'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>SHS Track & Strand Decision Support System | Video Call</title>

  <!---FAVICON ICON FOR WEBSITE--->
  <link rel="shortcut icon" type="image/png" href="images/Shot_0.png">
    
  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <script src="https://kit.fontawesome.com/ba6fe04144.js" crossorigin="anonymous"></script>
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../css/fontawesome-free/css/all.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="../css/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../css/adminlte.min.css">

  <script src='https://meet.jit.si/external_api.js'></script>
</head>


<body class="hold-transition login-page container">
  
  <div class="login-box mb-5">
    
   <div class="card card-outline card-success  mt-5">
    
      <div class="card-header text-center">
        <a href="#" class="h1"><b>Video Call</b></a>
      </div>
      <div class="card-body">
        <p class="login-box-msg">Click <b>start</b> for new meeting</p>
          <h1 class="text-success text-center" style="font-size: 100px;"><i class="fa-solid fa-video"></i></h1>
        <div class="social-auth-links text-center mt-4">
          <button class="btn btn-block btn-success" type="button" id="start">Start</button>
          <hr>
          <p>Back to <a href="dashboard.php">main</a> page.</p>
        </div>

      </div>
      <div id="jitsi-container" style="position: absolute;top: -100px; left: -130px;">
        </div>
   </div>
  </div>

  <script>
        var button = document.querySelector('#start');
        var container = document.querySelector('#jitsi-container');
        var api = null;

        button.addEventListener('click', () => {
            var possible = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789';
            var stringLength = 30;

            function pickRandom() {
            return possible[Math.floor(Math.random() * possible.length)];
            }

        var randomString = Array.apply(null, Array(stringLength)).map(pickRandom).join('');

            var domain = "meet.jit.si";
            var options = {
                "roomName": randomString,
                "parentNode": container,
                "width": 600,
                "height": 600,
            };
            api = new JitsiMeetExternalAPI(domain, options);
        });

</script>

  <!-- jQuery -->
  <script src="../js/jquery.min.js"></script>
  <!-- Bootstrap 4 -->
  <script src="../js/bootstrap.bundle.min.js"></script>
  <!-- AdminLTE App -->
  <script src="../dist/js/adminlte.min.js"></script>
</body>
</html>


<?php
// ------------------------------CLOSING THE SESSION OF THE LOGGED IN USER WITH else statement----------//
    } else {
     header('Location: ../login.php');
    }
?>
