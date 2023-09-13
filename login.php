<?php
    session_start();
    include 'config.php';
    
    if(isset($_SESSION['admin_Id'])) {
      header("Location: Admin/dashboard.php");
    } elseif(isset($_SESSION['complainant_Id'])) {
      header("Location: Complainant/dashboard.php");
    } elseif(isset($_SESSION['police_Id'])) {
      header("Location: Police/dashboard.php");
    } else {
?>

<!DOCTYPE html>
<html style="font-size: 16px;">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <title>SUMBONG | Login</title>
    <link rel="stylesheet" href="nicepage.css" media="screen">
<link rel="stylesheet" href="login.css" media="screen">
    <script class="u-script" type="text/javascript" src="jquery.js" defer=""></script>
    <script class="u-script" type="text/javascript" src="nicepage.js" defer=""></script>
    <meta name="generator" content="Nicepage 4.12.17, nicepage.com">
    <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i">
    <link id="u-page-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i">
    
    
    <script type="application/ld+json">
      {
      		"@context": "http://schema.org",
      		"@type": "Organization",
      		"name": "Driver Conduct Reporting Application"
      }
</script>
    <meta name="theme-color" content="#478ac9">
    <meta property="og:title" content="login">
    <meta property="og:description" content="">
    <meta property="og:type" content="website">
  </head>
  <body class="u-body u-xl-mode">
    <section class="u-clearfix u-image u-section-1" id="sec-9a9a" data-image-width="2500" data-image-height="1824">
      <div class="u-clearfix u-sheet u-valign-bottom-md u-valign-bottom-sm u-valign-bottom-xs u-sheet-1">
        <h1 class="u-align-center u-custom-font u-font-montserrat u-text u-text-custom-color-1 u-text-default u-text-1">
          <a class="u-border-none u-btn u-button-style u-hover-palette-1-light-1 u-palette-1-light-1 u-btn-1" href="index.html" data-page-id="645225668">SUMBONG</a>
        </h1>
        <div class="u-clearfix u-expanded-width-xs u-gutter-0 u-layout-wrap u-layout-wrap-1">
          <div class="u-layout" style="">
            <div class="u-layout-row" style="">
              <div class="u-align-left u-container-style u-layout-cell u-left-cell u-shape-rectangle u-size-60 u-size-xs-60 u-layout-cell-1" src="">
                <div class="u-container-layout u-valign-middle-md u-container-layout-1">
                  <div class="u-container-style u-grey-10 u-group u-radius-50 u-shape-round u-group-1" data-animation-name="customAnimationIn" data-animation-duration="1000" data-animation-delay="0" data-animation-direction="">
                    <div class="u-container-layout u-container-layout-2"><span class="u-file-icon u-icon u-text-black u-icon-1"><img src="images/6.png" alt=""></span>
                      <h3 class="u-align-center u-custom-font u-font-montserrat u-text u-text-black u-text-default u-text-2">SUMBONG</h3>
                      <div class="u-expanded-width u-form u-login-control u-form-1">
                        <form action="login_code.php" method="POST" class="u-clearfix u-form-custom-backend u-form-spacing-30 u-form-vertical u-inner-form" source="custom" name="form-3" style="padding: 0px;">
                          <div class="u-form-group u-form-name">
                            <label for="username-5b0a" class="u-form-control-hidden u-label u-label-1"></label>
                            <input type="email" placeholder="Enter your Username" id="username-5b0a" class="u-border-2 u-border-white u-input u-input-rectangle u-radius-43 u-white" required="" name="email">
                          </div>
                          <div class="u-form-group u-form-password">
                            <label for="password" class="u-form-control-hidden u-label u-label-2"></label>
                            <input type="password" placeholder="Enter your Password" id="password" name="password" class="u-border-2 u-border-white u-input u-input-rectangle u-radius-43 u-white" required="">
                          </div>
                          <div class="u-form-checkbox u-form-group">
                            <input type="checkbox" name="remember" value="On" id="remember" onclick="myFunction()">
                            <label for="remember" class="u-label u-label-3">Show password</label>
                          </div>
                          <div class="u-align-center u-form-group u-form-submit">
                            <input type="submit" value="Login" class="u-border-none u-btn u-btn-submit u-button-style u-hover-palette-1-light-1 u-palette-1-light-1 u-btn-2" name="login">
                          </div>
                          <p style="margin-left: 28px;">Don't have an account yet? <a href="register.php">Click here!</a></p>
                          <input type="hidden" value="" name="recaptchaResponse">
                        </form>
                      </div>
                      <!-- <p>Don't have an account yet?<a href=""> Register here</a></p> -->
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    
    
    <footer class="u-clearfix u-footer u-grey-80" id="sec-b30b"><div class="u-clearfix u-sheet u-sheet-1">
        <div class="u-clearfix u-expanded-width u-gutter-30 u-layout-wrap u-layout-wrap-1">
          <div class="u-gutter-0 u-layout">
            <div class="u-layout-row">
              <div class="u-align-left u-container-style u-layout-cell u-size-30 u-layout-cell-1">
                <div class="u-container-layout u-container-layout-1">
                  <p class="u-custom-font u-font-montserrat u-text u-text-default u-text-1">
                    <a class="u-active-none u-border-none u-btn u-button-link u-button-style u-hover-none u-none u-text-palette-1-light-1 u-btn-1" href="index.html" data-page-id="645225668">© 2022<span style="font-weight: 700;">
                        <span style="font-weight: 400;"></span>
                      </span> Driver Conduct Reporting Application
                    </a>
                  </p>
                  <p class="u-custom-font u-font-montserrat u-text u-text-2"><span class="u-file-icon u-icon"><img src="images/684908.png" alt=""></span>&nbsp;Calceta Street, Cogon District, Tagbilaran City, Bohol, Philippines
                  </p>
                </div>
              </div>
              <div class="u-align-left u-container-style u-layout-cell u-size-30 u-layout-cell-2">
                <div class="u-container-layout u-container-layout-2">
                  <p class="u-custom-font u-font-montserrat u-text u-text-3">All Rights Reserved.</p>
                  <a class="u-active-none u-border-none u-btn u-button-link u-button-style u-hover-none u-none u-text-body-color u-text-hover-custom-color-1 u-btn-2" href="index.html" data-page-id="645225668">
                    <span style="font-weight: 700;"></span>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div></footer>
  </body>
</html>



<script>
  function myFunction() {
  var x = document.getElementById("password");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}

</script>


<?php } ?>