<!DOCTYPE html>
<html>
<head>

</head>
<body>

<form method="post" action="#">
Straal=<input type="number" name="getal1">
    <?php
    if (isset($_POST['getal1'])){
        $getal1 = $_POST['getal1'];
        $antwoord1 = 2 * 3.14159265359  * $getal1;
        echo "Omtrek = $antwoord1";
    }
    ?>
    Straal <input type="number" name="getal2">
    <?php
    if (isset($_POST['getal2'])){
        $getal2 = $_POST['getal2'];
        $antwoord2 = 3.14159265359 * $getal2;
        echo "Oppervlakte = $antwoord2";
    }
    ?>
    <input type="submit" value="Verzenden">
</form>

</body>
</html>
<?php
show_source(__FILE__);
?>
