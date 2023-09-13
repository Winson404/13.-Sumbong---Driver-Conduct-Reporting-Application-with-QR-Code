<?php 


	session_start();
	include 'config.php';

	// SAVE USER
	if(isset($_POST['register'])) {

		$firstname       = $_POST['firstname'];
		$middlename      = $_POST['middlename'];
		$lastname        = $_POST['lastname'];
		$suffix          = $_POST['suffix'];
		$gender          = $_POST['gender'];
		$dob             = $_POST['dob'];
		$age             = $_POST['age'];
		$address         = $_POST['address'];
		$email           = $_POST['email'];
		$contact         = $_POST['contact'];
		$password        = md5($_POST['password']);
		$cpassword       = md5($_POST['cpassword']);
		$date_registered = date('Y-m-d');


		$check_email = mysqli_query($conn, "SELECT * FROM complainants WHERE email='$email'");
		if(mysqli_num_rows($check_email) > 0 ) {
			$_SESSION['exists']  = "Email is already taken.";
            header("Location: register.php");
		} else {

			$save = mysqli_query($conn, "INSERT INTO complainants (c_fname, c_mname, c_lname, c_suffix, gender, dob, age, address, email, contact, password, date_registered) VALUES ('$firstname', '$middlename', '$lastname', '$suffix', '$gender', '$dob', '$age', '$address', '$email', '$contact', '$password', '$date_registered')");

      if($save) {
      	$_SESSION['message'] = "Complainant information has been successfully saved!";
        $_SESSION['text'] = "Saved successfully!";
        $_SESSION['status'] = "success";
				header("Location: register.php");
      } else {
        $_SESSION['message'] = "Something went wrong while saving the information.";
        $_SESSION['text'] = "Please try again.";
        $_SESSION['status'] = "error";
				header("Location: register.php");
      }

		}

	}


?>