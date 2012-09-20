<?php
$host = 'localhost';
$dbname = 'email_validation';
$user = 'email_validation';
$pass = 'LQ7sKGY8AvDLNSjR';

try {
	$db = new PDO("mysql:host=$host,dbname=$dbname", $user, $pass);
}
catch (PDOException $e) {
	echo $e->getMessage();
}
