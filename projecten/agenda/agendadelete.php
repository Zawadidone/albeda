<?php
include "connect.php";
// id ophalen
$id = $_GET['id'];

// sql delete een record op id
$sql = "DELETE FROM agenda  WHERE id=$id";



if ($conn->query($sql) === TRUE) {
header('location:index.php');   
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
?>