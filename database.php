<?php
//Connects to and selects the correct database
$mysqli = new mysqli('host', 'username', 'pw', 'db_name'); // Must modify to connect to db
if($mysqli->connect_errno) {
	printf("Connection Failed: %s\n", $mysqli->connect_error);
	exit;
}
?>
