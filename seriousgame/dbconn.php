<?php 
	
	$dbHost	= 'localhost';
	$dbUser = 'root';
	$dbPass = '';
	$dbName = 'seriousgame';
	
	/*
	$dbName = 'deb43619_melissa';
	$dbPass = 'Dolfijn123%';
	$dbUser	= 'deb43619_melissa';
	$dbHost = 'localhost';
	*/

	$dbconn = new MySQLi($dbHost, $dbUser, $dbPass, $dbName);

	if ($dbconn->connect_errno){
		die("ERROR : ->" .$dbconn->connect_error);
	}


?>