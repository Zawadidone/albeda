<?php
if(!isset($_REQUEST['id'])){
    header("Location: index.php");
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Zena Vuurwerk</title>
    <link rel="stylesheet" type="text/css" href="style.css">

</head>
<body>
<div style="width: 100%;">
    <div style="float: right;">
        <a href="viewCart.php"><img id="winkel" src="http://icon-park.com/imagefiles/shopping_cart_yellow.png"></a>
    </div>
    <a href="index.php"><img id="logo" src="http://www.vuurwerktwente.nl/imgs/logo-zena.png"></a>
</div>

<p>Bestelling Status</p>
<p>Je bestelling is bevestigd, Je bestellingsnummer is #<?php echo $_GET['id']; ?></p>
<p><a href="index.php">Klik hier om terug te gaan naar de winkel</a></p>


<footer>
    &copy zenavuurwerk.nl 2017
</footer>

</body>
</html>