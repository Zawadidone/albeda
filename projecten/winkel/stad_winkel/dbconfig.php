<?php
//Database details
$dbHost = 'localhost';
$dbUsername = '';
$dbPassword = '';
$dbName = '';


//Database connectie
$db =  new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

if ($db->connect_error) {
    die("Connection failed: " . $db->connect_error);

}
?>


