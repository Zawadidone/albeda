<!DOCTYPE html>
<html>
<head>
</head>
<body>





    <form method="post" action="#">
        Geef een nummer om te vermenigvuldigen <input type="text" name="getal"><br>
        <input type="submit" value="Verzenden">
    </form>
    <?php
    if (isset($_POST['getal'])){
    error_reporting(0);
    $a = $_POST['getal'] ;

    $i=1;
    $k=1;
    while ( $i<=$a)
    {
        echo $i . " X " . $k ;
        $k = $k * $i;
        $i++;
        echo " = " . $k . "<br>";
    }
    }
    ?>

</body>
</html>
<?php
show_source(__FILE__);
?>
