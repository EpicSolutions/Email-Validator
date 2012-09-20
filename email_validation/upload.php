<?php
/**************************************************************************************************
 * This script uploads the file to to the upload folder
 *************************************************************************************************/
if ( isset($_POST["submit"]) ) {
	if ( isset($_FILES["file"])) {
		// If there was an error uploading the file
		if ($_FILES["file"]["error"] > 0) {
			echo "Return Code: " . $_FILES["file"]["error"] . "<br />";
		}
		else {
		 	// If file already exists
		 	if (file_exists("upload/" . $_FILES["file"]["name"])) {
				echo $_FILES["file"]["name"] . " already exists. ";
		 	}
		 	else {
		    	//Store file in directory "upload" with the name of "uploaded_file.txt"
				$storagename = $_FILES['file']['name'];
				move_uploaded_file($_FILES["file"]["tmp_name"], "upload/" . $storagename);
				echo "Stored in: " . "upload/" . $_FILES["file"]["name"] . "<br />";
		    }
		 }
	} 
	else {
		echo "No file selected <br />";
	}
}