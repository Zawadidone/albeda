<?php

function email($email)
{

	if(filter_var($email, FILTER_VALIDATE_EMAIL))
	{
		return $email;
	} 
	else
	{
		return False;
	}
}
	
$email = @email(htmlentities($_GET['email']));
$titel = @htmlentities($_GET['titel']);
$body = @htmlentities($_GET['body']);	
		
?>
<html>
<body>
<form method='get'>
	Email:<input type='email' name='email' required><br>
	Titel:<input type='text' name='titel' required><br>
	Body<input type='text' name='body' required><br>
	<input type='submit' value='verzenden'><br>
</form>
<br>

Visualisatie van de e-mail
<br>
<?php

echo "Onderwerp:<br>$titel<br><br>";

echo "Ontvanger:<br>$email<br><br>";

echo "Body van e-mail:<br>$body<br><br>";

?>

</body>
</html>
