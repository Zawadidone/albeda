
<?php
include "dbconfig.php";
$stad_id = $_POST["stad_id"];
$winkel_id = $_POST["winkel_id"];
$aantal_filialen = mysqli_real_escape_string($db,$_POST["aantal_filialen"]) ;

$sql = "INSERT INTO Stad_Winkel(stad_id, winkel_id, aantal_filialen) VALUES ('$stad_id','$winkel_id', '$aantal_filialen')";
$sqlcheck = "SELECT stad_id, winkel_id FROM Stad_Winkel WHERE stad_id = '$stad_id' AND winkel_id = '$winkel_id'";
$sqlcheckuitvoer = mysqli_query($db, $sqlcheck);


if (mysqli_num_rows($sqlcheckuitvoer) == 0)
{
    if ($db->query($sql) === TRUE) {
        header('location:index.php?sort=stad_id+DESC');
    } else {
        die("Error: " . mysqli_error($db));
    }
}
else
{
    $id = "SELECT * FROM Stad_Winkel WHERE stad_id = '$stad_id' AND winkel_id = '$winkel_id'";
    $result = $db->query($id);
    if ($row = $result->fetch_assoc())
    {
        $idrow = $row["id"];
        header("location:wijzig.php?id='$idrow'");
    }
}
?>

