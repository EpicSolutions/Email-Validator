<?php
/**************************************************************************************************
 * This script uploads the file to to the upload folder
 *************************************************************************************************/ 
if (isset($_POST["submit"])) {
	if (strlen($_FILES["file"]['name'])) {
		// If there was an error uploading the file
		if ($_FILES["file"]["error"] > 0) {
			echo "Return Code: " . $_FILES["file"]["error"] . "<br />";
		}
		else {
			// Set storage name
			$storagename = $_FILES['file']['name'];
		    //Store file in directory "upload" with the name of "uploaded_file.txt"
			move_uploaded_file($_FILES["file"]["tmp_name"], "upload/" . $storagename);
			echo $_FILES["file"]["name"] . " uploaded. ";
		 }
	} 
	else if (strlen($_POST["email"])) {
		$emails = array($_POST["email"]);
	}
	else {
		echo "No email or file selected <br />";
	}
}