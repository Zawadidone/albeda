<!DOCTYPE html>
<html>
<head>
</head>
<body>





<form method="post" action="#">
    Geef een html, php of xml tag met woorden<input type="text" name="getal"><br>
    <input type="submit" value="Verzenden">
</form>
<?php
if (isset($_POST['getal'])){
    $tag = $_POST['getal'];
    echo strip_tags($tag);
}
?>

</body>
</html>
<?php
show_source(__FILE__);
?>
