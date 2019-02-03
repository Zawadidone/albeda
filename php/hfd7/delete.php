<?php

$login = mysqli_connect("localhost", "", "", "");
?>
<?php
include 'connectprojectdatabase.php';
$id = $_GET['id'];
$sql = "DELETE FROM afbeeldingen WHERE id=$id";

if (mysqli_query($login, $sql)) {
				    header('Location: afbeeldingen.php');
} else {
				    echo "Fout" . mysqli_error($conn);
}

?>
