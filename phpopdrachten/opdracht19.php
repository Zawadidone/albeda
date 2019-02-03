<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <title>
    </title>
</head>
<body>

<form action="" method="post">
    <input type="text" value="" name="add" required/><br/>
    <input type="submit" value="Toevoegen" name="submit"/>
</form></br>
<a href="opdracht19.php?knop=schudden">Schudden</a></br>
<a href="opdracht19.php?knop=az">Sorteren</a></br>
<a href="opdracht19.php?knop=wissen">Session verwijderen</a></br></br>

<?php
// Maak een array met sessie
error_reporting(E_ALL ^ E_NOTICE);
if(!$_SESSION['lijst']){
    $_SESSION['lijst'] = array();
}

// Controleer met isset of de Post niet leeg is en trim dit valide.
if (isset($_POST['add']) && trim($_POST['add']) != '') {

// Voeg variable toe.
    $veld = trim($_POST['add']);

    // Controleer of er geen dezelfde items zijn.
    if (!in_array($veld, $_SESSION['lijst'], true)) {

        // voeg toe aan de sessie
        $_SESSION['lijst'][] = $veld;

        //controleren of het gelukt is..
        if (!in_array($veld, $_SESSION['lijst'], true)) {
            echo "Niet toegevoegd <br />";
        } else {
            //echo "<br/>Toegevoegd: ";
        }
    } else {
        echo "</br>Dit item bestaat al.";
    }
}

// Laat alles uit de array zien, als de array niet leeg is.
if (!empty($_SESSION['lijst'])) {
    echo "<h2>Winkelmand</h2>";

// Haal alle waarden op uit de array.
    foreach ($_SESSION['lijst'] as $values) {
        echo "$values <br />";
    }
}

// De shuffle knop.
if(isset($_GET['knop'])) {
    if($_GET['knop'] == "schudden") {
        // shuffle voor willekeurig.
        shuffle($_SESSION['lijst']);
    }
}
// De sorteer knop.
if(isset($_GET['knop'])) {
    if($_GET['knop'] == "az") {
        // sort het weergeven van de functie.
        sort($_SESSION['lijst']);
    }
}

// De sessie wissen knop.
if(isset($_GET['knop'])) {
    if($_GET['knop'] == "wissen") {
        $_SESSION = array();
        session_destroy();
        echo "Alle sessievariabelen zijn verwijderd.";

// Terug sturen naar het begin.
        header('Refresh: 3; url=arraysession.php');
    }
}

?>

</body>
</html>
<?php
show_source(__FILE__);
?>
