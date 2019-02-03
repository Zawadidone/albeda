<?php

include "connect.php";


$sql = "INSERT INTO Feedback (naam, achternaam, geslacht, feedback)
VALUES ('".$_POST["naam"]."', '".$_POST["achternaam"]."', '".$_POST["geslacht"]."', '".$_POST["feedback"]."')";

if ($conn->query($sql) === TRUE) {
	echo "Je wordt doorgestuurd naar de website";

header( "refresh:5;url=index.php" );

    
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}


?>