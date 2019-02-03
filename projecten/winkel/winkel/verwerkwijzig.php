<?php
include "dbconfig.php";

$winkel_id = mysqli_real_escape_string($db,$_POST["winkel_id"]);
$winkel_naam = mysqli_real_escape_string($db,$_POST["winkel_naam"]);
$id = mysqli_real_escape_string($db,$_POST["id"]);

$sql = "UPDATE winkel
SET winkel_id = '$winkel_id', winkel_naam = '$winkel_naam'
WHERE winkel_id = '$id'";

if ($db->query($sql) === TRUE) {
    header('location:index.php');
} else {
    die("Error: " . $db->connect_error);
}

$db->close();
?>


