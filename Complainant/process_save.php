<?php 
	session_start();
	include '../config.php';


		if(isset($_POST['create_report'])) {

		$complainant_Id  = $_POST['complainant_Id'];
		$reportname      = $_POST['reportname'];
		$address         = $_POST['address'];
		$date_registered = date('Y-m-d');

		$save = mysqli_query($conn, "INSERT INTO report (reporter_Id, report_topic, incident_address, report_date) VALUES ('$complainant_Id', '$reportname', '$address', '$date_registered')");

    if($save) {
    		$_SESSION['message'] = "New report has been successfully saved!";
      		$_SESSION['text'] = "Saved successfully!";
      		$_SESSION['status'] = "success";
			header("Location: report.php");
    } else {
	        $_SESSION['message'] = "Something went wrong while saving the information.";
	        $_SESSION['text'] = "Please try again.";
	        $_SESSION['status'] = "error";
			header("Location: report.php");
    }

	}


?>