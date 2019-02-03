<?php
//email controle
function valid_name ($str) {
 return    (preg_match ('/^[A-Za-z. -]+2$/', $str));
}
$naam = "davincigmail.com2";
if (valid_name($naam)==1) {
    echo "True";
}
else {
    echo "False";
}
?>
<br>

<?php
//postcode controlle 4letter 2cijfers
function name ($str) {
 return    (preg_match ('/^[0-9]{4,}[A-Z]{2,}$/', $str));
}
$naam = "299AB";
if (name($naam)==1) {
    echo "True";
}
else {
    echo "False";
}
show_source(__FILE__);
?>






