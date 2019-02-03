
<!DOCTYPE html>
<html>
<body>

<form action="" method="get">
Name: <input type="text" name="name"><br>
Woonplaats: <input type="text" name="woonplaats"><br>
E-mail: <input type="text" name="email"><br>
<input type="submit" value="verzenden">
</form>
Je naam is <?php echo $_GET["name"]; ?><br>
Je woont in <?php echo $_GET["woonplaats"]; ?><br>
Je e-mailadres <?php echo $_GET["email"]; ?><br>

</body>
</html>

