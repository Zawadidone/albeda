<?php
include "dbconfig.php";
$winkel_id = mysqli_real_escape_string($db, $_POST["winkel_id"]) ;
$aantal_filialen = mysqli_real_escape_string($db, $_POST["aantal_filialen"]) ;
$id = mysqli_real_escape_string($db, $_POST["id"]);




$sql = "UPDATE Stad_Winkel
SET winkel_id = '$winkel_id', aantal_filialen = '$aantal_filialen'
WHERE stad_id = $id";

if ($db->query($sql) === TRUE) {
    header('location:index.php');
} else {
    die("Error: " . $db->connect_error);
}

$db->close();
?>


