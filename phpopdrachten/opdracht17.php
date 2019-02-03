<!DOCTYPE html>
<html>
<head>

</head>
<body>

<?php
session_start();
if (!isset($_SESSION['teller'])) { // bestaat de sessievariabele dan gebeurt er niks
}
else {
    // Zowel, dan wordt hij verhoogd
    $_SESSION['teller']++;
}

echo "U hebt de pagina ".$_SESSION['teller']."
keer bekeken";


show_source(__FILE__);
?>
</body>
</html>

