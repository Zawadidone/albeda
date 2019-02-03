<!DOCTYPE html>
<html>
<head><title>PHP opdracht 20</title>


</head>
<body>

<form method="get">
    <input type="text" name="tekst" required> <br>
    <input type="radio" name="keuze" value="1" required> Zet de ingevoerde tekst in hoofdletters. <br>
    <input type="radio" name="keuze" value="2" required> Zet de ingevoerde tekst in kleine letters.    <br>
    <input type="radio" name="keuze" value="3" required> Maak van de eerste letter een hoofdletter.    <br>
    <input type="radio" name="keuze" value="4" required> Laat elk woord met een hoofdletter beginnen. <br>
    <input type="submit" value="verzenden">
</form>

<?php
/*
form met tekstveld en vier radiobuttons
- maak alles hoofdletters
- maak alles kleine letters
- verander de eerste letter in een hoofdletter
- laat elk woord met een hoofdletter beginnen
*/

if(isset($_GET['tekst']) && isset($_GET['keuze'])) {
    if($_GET['keuze'] == "1") {
        echo  strtoupper($_GET['tekst']);
    }

    elseif($_GET['keuze'] == "2") {
        echo strtolower($_GET['tekst']);
    }

    elseif($_GET['keuze'] == "3") {
        echo ucfirst($_GET['tekst']);
    }

    elseif($_GET['keuze'] == "4") {
        echo ucwords($_GET['tekst']);
    }
}


?>


</body>

</html>

<?php
show_source(__FILE__);
?>
