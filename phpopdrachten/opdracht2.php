<!DOCTYPE html>
<html>
<head>

</head>
<body>
<?php
$time = date("g");
if ( ($time >= 6) && ($time <= 11) ) {
    echo ("Het is ") . date("g") . ("uur dus ochtend.");
} elseif ( ($time >= 12) &&  ($time <= 17) ) {
    echo ("Het is ") . date("g") . ("uur dus middag.");
} elseif ( ($time >= 18) && ($time <= 23) ) {
    echo ("Het is ") . date("g") . ("uur dus avond.");
} elseif ( ($time >= 0) && ($time <= 5) ) {
    echo ("Het is ") . date("g") . ("uur dus nacht.");
}
echo "<br><br>";
?>
</body>
</html>
<?php
show_source(__FILE__);
?>

