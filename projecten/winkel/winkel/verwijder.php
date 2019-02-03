
<?php
include "dbconfig.php";
// id ophalen
$id = mysqli_real_escape_string($db, $_GET['id']);

// sql delete een record op id

$sql = "DELETE FROM winkel WHERE winkel_id = '$id'";


if ($db->query($sql) === TRUE) {
    header('location:index.php');
} else {
    die("Error: " . $db->connect_error);
}


$db->close();
?>


