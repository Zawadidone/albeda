<?php
function omgekeerd()
{
    $t = "ABC";
    $e = strlen($t);

    for ($a = $e; $a >= 0; $a--) {
        echo substr($t, $a, 1);
    }
}
$a="ABC";
echo "<br>";
echo omgekeerd();
show_source(__FILE__);
?>