<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>SUMBONG | Register</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="css/fontawesome-free/css/all.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="css/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="css/adminlte.min.css">
</head>
<body class="hold-transition register-page">
<div class="register-box"  style="width: 70%;">
  <div class="card card-outline card-primary mt-5 mb-5" >
    <div class="card-header text-center">
      <a href="../../index2.html" class="h1"><b>SUMBONG</b></a>
    </div>
    <div class="card-body">
      <p class="login-box-msg">Complainant registration</p>

      <form action="register_code.php" method="post">

        <div class="row">
          <div class="col-lg-3">
            <label for="">First name</label>
              <div class="input-group mb-3">
                <input type="text" class="form-control" placeholder="First name" name="firstname" required>
              </div>
          </div>
          <div class="col-lg-3">
            <label for="">Middle name</label>
              <div class="input-group mb-3">
                <input type="text" class="form-control" placeholder="Middle name" name="middlename" required>
              </div>
          </div>
          <div class="col-lg-3">
            <label for="">Last name</label>
              <div class="input-group mb-3">
                <input type="text" class="form-control" placeholder="Last name" name="lastname" required>
              </div>
          </div>
          <div class="col-lg-3">
            <label for="">Suffix</label>
              <div class="input-group mb-3">
                <input type="text" class="form-control" placeholder="Suffix" name="suffix">
              </div>
          </div>
          <div class="col-lg-4">
            <label for="">Gender</label>
              <div class="input-group mb-3">
                <select class="custom-select" name="gender" required>
                    <option selected disabled>Select gender</option>
                    <option value="Male">Male</option>
                    <option value="Female">MFemale</option>
                </select> 
              </div>
          </div>

          <div class="col-lg-4">
            <label for="">Date of birth</label>
              <div class="input-group mb-3">
                <input type="date" class="form-control" placeholder="Date of birth" name="dob" required>
              </div>
          </div>
          <div class="col-lg-4">
            <label for="">Age</label>
              <div class="input-group mb-3">
                <input type="number" class="form-control" placeholder="Age" name="age" required>
              </div>
          </div>
          
          <div class="col-lg-12">
            <label for="">Address</label>
              <div class="input-group mb-3">
                <input type="text" class="form-control" placeholder="Address" name="address" required>
              </div>
          </div>
          <div class="col-lg-6">
            <label for="">E-mail</label>
              <div class="input-group mb-3">
                <input type="email" class="form-control" placeholder="E-mail" name="email" required>
              </div>
          </div>
          <div class="col-lg-6">
            <label for="">Contact number</label>
              <div class="input-group mb-3">
                <input type="number" class="form-control" placeholder="Contact number" name="contact" required>
              </div>
          </div>
          <div class="col-lg-6">
            <label for="">Password</label>
              <div class="input-group mb-3">
                <input type="password" class="form-control" placeholder="Password" name="password" id="police_password" required>
              </div>
          </div>
          <div class="col-lg-6">
            <label for="">Confirm password</label>
              <div class="input-group">
                <input type="password" class="form-control" placeholder="Confirm password" name="cpassword" id="police_cpassword" onkeyup="police_validate_password()" required>

              </div>
              <small id="wrong_pass_alert"></small>
          </div>
          <div class="col-lg-12 mt-3">
            <button class="btn btn-primary" name="register" type="submit" id="policecreate">Submit</button>
            <hr>
          </div>
        </div>
      </form>

      <a href="login.php" class="text-center">Already have an account? <a href="login.php">Click here!</a></a>
    </div>
    <!-- /.form-box -->
  </div><!-- /.card -->
</div>
<!-- /.register-box -->


<!-- jQuery -->
<script src="js/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
</body>
</html>

<?php include 'sweetalert_messages.php'; ?>
<script>
    function police_validate_password() {

      var pass = document.getElementById('police_password').value;
      var confirm_pass = document.getElementById('police_cpassword').value;
      if (pass != confirm_pass) {
        document.getElementById('wrong_pass_alert').style.color = 'red';
        document.getElementById('wrong_pass_alert').innerHTML = 'X Password did not matched!';
        document.getElementById('policecreate').disabled = true;
        document.getElementById('policecreate').style.opacity = (0.4);
      } else {
        document.getElementById('wrong_pass_alert').style.color = 'green';
        document.getElementById('wrong_pass_alert').innerHTML = '✓ Password matched!';
        document.getElementById('policecreate').disabled = false;
        document.getElementById('policecreate').style.opacity = (1);
      }
    }


</script>