
<?php
include "dbconfig.php";

$winkel_id = mysqli_real_escape_string($db,$_POST["winkel_id"]);
$winkel_naam = mysqli_real_escape_string($db,$_POST["winkel_naam"]);
$sql = "INSERT INTO winkel(winkel_id, winkel_naam) VALUES ('$winkel_id','$winkel_naam')";


if ($db->query($sql) === TRUE){
    header('location:index.php?sort=winkel_id+ASC');
} else {
    die("Error: " . $db->connect_error);
}
?>

