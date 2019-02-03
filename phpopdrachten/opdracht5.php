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
    if ($getal & 1){
        echo "Getal is oneven";
    }
    else{
        echo "Getal is even";
    }

}
?>
</body>
</html>
<?php
show_source(__FILE__);
?>

