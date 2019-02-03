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
    if ($getal<=50){
        $prijs=$getal*1.10;
        echo $prijs;
    }
    elseif($getal>=100) {
        $prijs=$getal*1.15;
        echo $prijs;
    }
    else{
        $prijs=$getal*1.12;
        echo $prijs;
    }


}
?>
</body>
</html>
<?php
show_source(__FILE__);
?>

