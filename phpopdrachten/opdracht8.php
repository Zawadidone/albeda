<!DOCTYPE html>
<html>
<head>

</head>
<body>
<?php
$steden = array("Rotterdam", "Amsterdam", "Den-Haag");
echo "$steden[0]<br>  $steden[1]<br>  $steden[2]";
?>
<form method="post" name="form">
    Naar welke stad wil je gaan <input type="text" name="stad"><br>
    <input type="submit" value="Verzenden">
</form>
<?php
if (isset($_POST['stad'])){
    $stad = $_POST['stad'];
    switch ($stad) {
        case 'Rotterdam':
            echo "Rotterdam is 10km vanaf Heerjansdam";
            break;
        case 'Amsterdam':
            echo "Amsterdam is 100km vanaf Heerjandsam";
            break;
        case 'Den-Haag':
            echo "Den-Haag is 50km vanaf Heerjansdam";
            break;
    }




}
?>
</body>
</html>
<?php
show_source(__FILE__);
?>

