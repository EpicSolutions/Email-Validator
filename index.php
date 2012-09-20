<?php
require_once('email_validation/smtp_validateEmail.class.php');
require_once('email_validation/upload.php');

/*
// the email to validate
$emails = array('rbmalzone1955@gmail.com', 'user2@example.com');
// an optional sender
$sender = 'user@yourdomain.com';
// instantiate the class
$SMTP_Validator = new SMTP_validateEmail();
// turn on debugging if you want to view the SMTP transaction
$SMTP_Validator->debug = true;
// do the validation
$results = $SMTP_Validator->validate($emails, $sender);
 */
?>
<!DOCTYPE html>
<html>
<head>
	
</head>
<body>
	<table width="600">
<form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="post" enctype="multipart/form-data">

<tr>
<td width="20%">Select file</td>
<td width="80%"><input type="file" name="file" id="file" /></td>
</tr>

<tr>
<td>Submit</td>
<td><input type="submit" name="submit" /></td>
</tr>

</form>
</table>
</body>
</html>