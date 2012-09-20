<?php
/**************************************************************************************************
 * This script parses the file into an array
 *************************************************************************************************/ 
if(strlen($_FILES["file"]['name'])) {
	// Open file
	$file = fopen('upload/' . $storagename, 'r');
	// Get first line
	$first = fgets($file, 4096);
	// Get comma position if exists
	$comma = strpos($first, ',');
	// Reset file
	fseek($file, 0);
	
	// If comma delimited
	if($comma) {
		// Convert file to array
		$emails = fgetcsv($file);
	}
	// If line delimited
	else {
		if($file) {
			while ($line = fgets($file, 4096)) {
				$line = rtrim($line,"\r\n");
				array_push($emails, $line);
			}
		}
	}
	// Close file
	fclose($file);
}
