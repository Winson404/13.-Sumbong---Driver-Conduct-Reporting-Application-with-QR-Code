<?php 
	session_start();
	include '../config.php';



    if(isset($_POST['update_report'])) {

    $report_Id       = $_POST['report_Id'];
		$reportname      = $_POST['reportname'];
		$address         = $_POST['address'];
		// $status 				 = $_POST['status'];

		$save = mysqli_query($conn, "UPDATE report SET report_topic='$reportname', incident_address='$address' WHERE report_Id='$report_Id'");

	    if($save) {
		    	$_SESSION['message'] = "Report has been successfully updated!";
		        $_SESSION['text'] = "Updated successfully!";
		        $_SESSION['status'] = "success";
				header("Location: report.php");
	    } else {
		        $_SESSION['message'] = "Something went wrong while updating the information.";
		        $_SESSION['text'] = "Please try again.";
		        $_SESSION['status'] = "error";
				header("Location: report.php");
	    }

	}





	if(isset($_POST['meeting_done'])) {

		$link = $_POST['link_Id'];

		$delete = mysqli_query($conn, "DELETE FROM video_links WHERE link_Id='$link'");
		if($delete) {
		    	$_SESSION['message'] = "Meeting was set as done";
		        $_SESSION['text'] = "Updated successfully!";
		        $_SESSION['status'] = "success";
				header("Location: video_call_links.php");
	    } else {
		        $_SESSION['message'] = "Something went wrong while updating the information.";
		        $_SESSION['text'] = "Please try again.";
		        $_SESSION['status'] = "error";
				header("Location: video_call_links.php");
	    }
	}

?>