<?php
session_start();
if (!isset($_SESSION['teller'])) { // bestaat de sessievariabele niet?
$_SESSION['teller'] = 0; // Dan wordt hij op 0 gesteld
} 
else {
$_SESSION['teller']++; // Zowel, dan wordt hij verhoogd
}

echo "U hebt de pagina ".$_SESSION['teller']."
keer bekeken";
show_source(__FILE__);
?>