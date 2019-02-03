<!DOCTYPE html>
<html>
<head>
</head>
<body>





<form method="post" action="#">
    Geef een nummer <input type="nummer" name="nummer"><br>
    <input type="submit" value="Verzenden">
</form>
<?php
if (isset($_POST['nummer'])) {
    $nummer = $_POST['nummer'];
    if(is_numeric($nummer)){
        echo "Het is een nummer";
    }else{
        echo "Het is geen nummer";
    }
}
?>

</body>
</html>
<?php
show_source(__FILE__);
?>
