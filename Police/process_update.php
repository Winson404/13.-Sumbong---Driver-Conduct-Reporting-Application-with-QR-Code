<?php 

	session_start();
	include '../config.php';

	if(isset($_POST['add_link_complainant'])) {

		$complainant_Id = $_POST['complainant_Id'];
		$police_Id      = $_POST['police_Id'];
		$link           = $_POST['link'];
		$time           = date('H:i');

		$fetch = mysqli_query($conn, "SELECT * FROM video_links WHERE complainant_Id='$complainant_Id' AND police_Id='$police_Id'");
		if(mysqli_num_rows($fetch) > 0) {

			$update = mysqli_query($conn, "UPDATE video_links SET link_address='$link', time_sent='$time' WHERE complainant_Id='$complainant_Id' AND police_Id='$police_Id'");
			if($update) {
				$_SESSION['message'] = "Link address has been sent.";
		        $_SESSION['text'] = "Successfully sent";
		        $_SESSION['status'] = "success";
				header("Location: complainant.php");
			} else {
				$_SESSION['message'] = "Something went wrong while updating the record.";
		        $_SESSION['text'] = "Please try again.";
		        $_SESSION['status'] = "error";
				header("Location: complainant.php");	
			}
		} else {
			$insert = mysqli_query($conn, "INSERT INTO video_links (police_Id, complainant_Id, link_address, time_sent) VALUES ('$police_Id', '$complainant_Id', '$link', '$time')");
			if($insert) {
				$_SESSION['message'] = "Link address has been sent.";
		        $_SESSION['text'] = "Successfully sent";
		        $_SESSION['status'] = "success";
				header("Location: complainant.php");
			} else {
				$_SESSION['message'] = "Something went wrong while updating the record.";
		        $_SESSION['text'] = "Please try again.";
		        $_SESSION['status'] = "error";
				header("Location: complainant.php");
			}
		}
	}










	if(isset($_POST['update_driver'])) {

		$driver_Id       = $_POST['driver_Id'];
	    $firstname       = $_POST['firstname'];
		$middlename      = $_POST['middlename'];
		$lastname        = $_POST['lastname'];
		$address         = $_POST['address'];
		$license         = $_POST['license'];

			
		$update = mysqli_query($conn, "UPDATE drivers SET d_fname='$firstname', d_mname='$middlename', d_lname='$lastname', d_address='$address', d_license='$license' WHERE driver_Id='$driver_Id'");

	    if($update)
	    {
	            $_SESSION['message'] = "Driver's information has been successfully updated!";
	        	$_SESSION['text'] = "Updated successfully!";
		        $_SESSION['status'] = "success";
				header("Location: driver.php");
	    }
	    else{
	       	    $_SESSION['message'] = "Something went wrong while updating the information.";
	       	    $_SESSION['text'] = "Please try again.";
		        $_SESSION['status'] = "error";
				header("Location: driver.php");
	    }
			

	}
?>