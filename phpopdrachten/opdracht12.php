<!DOCTYPE html>
<html>
<head>

</head>
<body>
<?php
error_reporting(0);
echo "<br>Eerste waarde weg met Shift:<br>";

$lijst = array("Piet", "Jan", "Peter");
array_shift($lijst);
print_r($lijst);

echo "<br><br>Laatste waarde weg met Pop:<br>";
$lijst2 = array("Piet", "Jan", "Peter");
array_pop($lijst2);
print_r($lijst2);

echo "<br><br>Dubbele waarde weg halen met Unique:<br>";
$lijst3 = array("Piet", "Jan", "Peter", "Piet", "Jan", "Peter");
$lijstt3 = array_unique($lijst3);
print_r($lijstt3);

echo "<br><br>Aantal waardes in array tellen met Count:<br>";
$lijst4 = array("Piet", "Jan", "Peter");
echo count($lijst4);

echo "<br><br>A-Z met Sort:<br>";
$lijst5 = array("Piet", "Jan", "Peter");
sort($lijst5);
print_r($lijst5);

echo "<br><br>Z-A met Rsort:<br>";
$lijst6 = array("Piet", "Jan", "Peter");
rsort($lijst6);
print_r($lijst6);

echo "<br><br>Shuffelen met zwevende tapijten (Shuffle):<br>";
$lijst7 = array("Piet", "Jan", "Peter");
shuffle($lijst7);
print_r($lijst7);
?>

</body>
</html>

