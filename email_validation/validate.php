<?php
/**************************************************************************************************
 * This script runs the emails through the validator. It then creates 2 arrays.
 *************************************************************************************************/
require_once('email_validation/smtp_validateEmail.class.php');

// Arrays
$valid = array();
$invalid = array();

// Only run if there are emails to validate
if (isset($_POST["submit"]) && (strlen($_FILES["file"]['name']) || strlen($_POST['email']))) {
	// From
	$sender = 'test@codeplanetapps.com';
	// New validator
	$validator = new SMTP_validateEmail();
	// Debugging?
	$validator->debug = false;
	// Run validation
	$results = $validator->validate($emails, $sender);
	
	// Put the emails in the correct array
	foreach($results as $email=>$result) {
		if ($result)
			array_push($valid, $email);
		else
			array_push($invalid, $email);
	}
}
