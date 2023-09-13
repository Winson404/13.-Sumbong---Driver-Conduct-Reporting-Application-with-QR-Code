<?php 
	session_start();
	include '../config.php';

	// DELETE ACCOUNT
	if(isset($_POST['delete_account'])) {
		$police_Id = $_POST['police_Id'];

		$delete = mysqli_query($conn, "DELETE FROM police WHERE police_Id='$police_Id'");
		if($delete) {

			header("Location: ../logout.php");
	      } else {
	        $_SESSION['message'] = "Something went wrong while deleting the record";
	        $_SESSION['text'] = "Please try again.";
	        $_SESSION['status'] = "error";
			header("Location: dashboard.php");
	      }
	}



	// DELETE COMPLAINANT
	if(isset($_POST['delete_complainant'])) {
		$complainant_Id = $_POST['complainant_Id'];

		$delete = mysqli_query($conn, "DELETE FROM complainants WHERE complainant_Id='$complainant_Id'");
		if($delete) {
	      	$_SESSION['message'] = "Complainant information has been deleted!";
	        $_SESSION['text'] = "Deleted successfully!";
	        $_SESSION['status'] = "success";
			header("Location: complainant.php");
	      } else {
	        $_SESSION['message'] = "Something went wrong while deleting the record";
	        $_SESSION['text'] = "Please try again.";
	        $_SESSION['status'] = "error";
			header("Location: complainant.php");
	      }
	}



	// DELETE REPORT
	if(isset($_POST['delete_report'])) {
		$report_Id = $_POST['report_Id'];

		$delete = mysqli_query($conn, "DELETE FROM report WHERE report_Id='$report_Id'");
		 if($delete) {
	      	$_SESSION['message'] = "Report information has been deleted!";
	        $_SESSION['text'] = "Deleted successfully!";
	        $_SESSION['status'] = "success";
			header("Location: report.php");
	      } else {
	        $_SESSION['message'] = "Something went wrong while deleting the record";
	        $_SESSION['text'] = "Please try again.";
	        $_SESSION['status'] = "error";
			header("Location: report.php");
	      }
	}




	// DELETE DRIVER
	if(isset($_POST['delete_driver'])) {

		$driver_Id = $_POST['driver_Id'];

		$delete = mysqli_query($conn, "DELETE FROM drivers WHERE driver_Id='$driver_Id'");
		 if($delete) {
	      	$_SESSION['message'] = "Driver's information has been deleted!";
	        $_SESSION['text'] = "Deleted successfully!";
	        $_SESSION['status'] = "success";
			header("Location: driver.php");
	      } else {
	        $_SESSION['message'] = "Something went wrong while deleting the record";
	        $_SESSION['text'] = "Please try again.";
	        $_SESSION['status'] = "error";
			header("Location: driver.php");
	      }
	}



?>