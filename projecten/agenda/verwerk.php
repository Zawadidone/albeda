<?php
include "connect.php";
$sql = "INSERT INTO agenda (day, month, year, tijdstip, omschrijving, adres)
VALUES ('".$_POST["day"]."', '".$_POST["month"]."', '".$_POST["year"]."', '".$_POST["tijdstip"]."', '".$_POST["omschrijving"]."', '".$_POST["adres"]."' )";

if ($conn->query($sql) === TRUE) {
    header('location:index.php');
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}









$conn->close();
?>


