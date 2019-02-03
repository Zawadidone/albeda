<?php
include "dbconfig.php";

$id = mysqli_real_escape_string($db, $_POST["id"]);
$naam = mysqli_real_escape_string($db, $_POST["naam"]);
$populatie = mysqli_real_escape_string($db, $_POST["populatie"]);

$sql = "UPDATE stad 
SET naam = '$naam', populatie = '$populatie'
WHERE stad_id = $id";

if ($db->query($sql) === TRUE) {
    header('location:index.php');
} else {
    die("Error: " . $db->connect_error);
}

$db->close();
?>


