<?php
// Content of database.php
 
$mysqli = new mysqli('localhost', 'wustl_inst', 'wustl_inst', 'M5GROUP');
 
if($mysqli->connect_errno) {
	printf("Connection Failed: %s\n", $mysqli->connect_error);
	exit;
}

?>