<html>
<body>
Prijs 1 tot 5
<form type="GET">
<input type="number" name="number" required/>
<input type="submit" value="Zoeken">
</form>
<?php
$number = htmlentities($_GET['number']);

$artikelen = array(
				1 => "Fiets: 1euro",
				2 => "Auto: 2euro",
				3 => "Vliegtuig: 3euro",
				4 => "Spaceship: 4euro",
				5 => "Gebouw: 5euro",
);

echo $artikelen[$number];

?>
</body>
</html>
