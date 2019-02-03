<?php
//Database details
$dbHost = 'localhost';
$dbUsername = 'root';
$dbPassword = 'asdf';
$dbName = 'school';


//Database connectie
$db =  new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

if ($db->connect_error) {
    die("Connection failed: " . $db->connect_error);

}
?>


