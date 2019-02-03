
<?php
include "dbconfig.php";

$naam= mysqli_real_escape_string($db, $_POST["naam"]);
$populatie = mysqli_real_escape_string($db, $_POST["populatie"]);
$sql = "INSERT INTO stad(naam, populatie) VALUES ('$naam','$populatie')";


if ($db->query($sql) === TRUE){
    header('location:index.php?sort=stad_id+DESC');
} else {
    die("Error: " . $db->connect_error);
}
?>

