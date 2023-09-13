<?php 

	session_start();
	include 'config.php';

	// ADMIN LOGIN
	if(isset($_POST['login'])) {
		$email    = $_POST['email'];
		$password = md5($_POST['password']);

		$check = mysqli_query($conn, "SELECT * FROM admin WHERE email='$email' AND password='$password' AND user_type='Admin'");
		if(mysqli_num_rows($check)===1) {

				$row = mysqli_fetch_array($check);
				if($row['email'] === $email && $row['password'] === $password) {
					$_SESSION['admin_Id'] = $row['admin_Id'];
					header("Location: Admin/dashboard.php");
				} else {
					echo '<script>alert ("Password is incorrect. Please try again.");
	                		window.history.go(-1);
	                	  </script>';
				}
			
		} else {
				
				// USER LOGIN
				$check2 = mysqli_query($conn, "SELECT * FROM police WHERE email='$email' AND password='$password' AND user_type='Police'");
                if(mysqli_num_rows($check2)===1) {

					$row = mysqli_fetch_array($check2);
					if($row['email'] === $email && $row['password'] === $password) {
						$_SESSION['police_Id'] = $row['police_Id'];
						header("Location: Police/dashboard.php");
					} else {
						echo '<script>alert ("Password is incorrect. Please try again.");
	                		window.history.go(-1);
	                	  </script>';
					}
					
				} else {
						// USER LOGIN
						$check2 = mysqli_query($conn, "SELECT * FROM complainants WHERE email='$email' AND password='$password' AND user_type='Complainant'");
		                if(mysqli_num_rows($check2)===1) {

							$row = mysqli_fetch_array($check2);
							if($row['email'] === $email && $row['password'] === $password) {
								$_SESSION['complainant_Id'] = $row['complainant_Id'];
								header("Location: Complainant/dashboard.php");
							} else {
								echo '<script>alert ("Password is incorrect. Please try again.");
	                		window.history.go(-1);
	                	  </script>';
							}
							
						} else {
								echo '<script>alert ("Password is incorrect. Please try again.");
	                		window.history.go(-1);
	                	  </script>';
		        		}
		         }
         }
	}
	

?>