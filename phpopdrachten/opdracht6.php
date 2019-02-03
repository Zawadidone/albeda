<!DOCTYPE html>
<html>
<head>

</head>
<body>
<form method="post" name="form">
    <input type="number" name="getal">
    <input type="submit" value="Verzenden">
</form>

<?php
if (isset($_POST['getal'])) {
    $getal=$_POST['getal'];
    if ($getal % 3 == 0){
        echo"Het getal is deelbaar door 3";
    }
    elseif($getal % 4 == 0){
        echo"Het getal is deelbaar door 4";
    }
    else{
        echo "Het is niet deelbaar door 3 en 4";
    }

}
?>

</body>
</html>
<?php
show_source(__FILE__);
?>

