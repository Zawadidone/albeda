<!DOCTYPE html>
<html>
<head>

</head>
<body>
<form method="post" action="#">
    Voer een mile in <input type="text" name="getal"><br>
    <input type="submit" value="Verzenden">
</form>
<?php
if (isset($_POST['getal'])) {
    $getal = $_POST['getal'];
    for ($i = 1; $i <= $getal; $i++) {
        $getal = $_POST['getal'];
        $km = $i / 0.62137;
        echo "$i Mile = $km km<br>";

    }
}
?>

</body>
</html>

