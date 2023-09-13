<?php 
	session_start();
	
	include('../phpqrcode/qrlib.php');
	include '../config.php';

if(isset($_POST['create_driver'])) {

	    $firstname       = $_POST['firstname'];
		$middlename      = $_POST['middlename'];
		$lastname        = $_POST['lastname'];
		$address         = $_POST['address'];
		$license         = $_POST['license'];

		$name = $firstname. ' ' .$middlename. ' ' .$lastname. ' | ' .$address. ' | ' .$license;
	    $path = '../images-qr-codes/';
	    $file = $path.uniqid().".png";

	    $ecc = 'L';
	    $pixel_Size = 10;
	    $frame_Size = 10;

	    $query="insert into drivers(d_fname, d_mname, d_lname, d_address, d_license, qr_code) values ('$firstname', '$middlename', '$lastname', '$address', '$license', '$file')";
	    if($conn->query($query)==true)
	    {
	        QRcode::png($name,$file,$ecc,$pixel_Size,$frame_Size);
	            $_SESSION['message'] = "Driver's information has been successfully saved!";
	        	$_SESSION['text'] = "Saved successfully!";
		        $_SESSION['status'] = "success";
				header("Location: driver.php");
	    }
	    else{
	       	    $_SESSION['message'] = "Something went wrong while saving the information.";
	       	    $_SESSION['text'] = "Please try again.";
		        $_SESSION['status'] = "error";
				header("Location: driver.php");
	    }
			

	}

?>