
<?php
			if(isset($_POST['sign-up'])){

	$Naam = strip_tags($_POST['Naam']);
	$Last = strip_tags($_POST['Last']);
	$Pass = strip_tags($_POST['Pass']);
	$Type = strip_tags($_POST['gebruikerType']);

	$Naam = $dbconn->real_escape_string($Naam);
	$Last = $dbconn->real_escape_string($Last);
	$Pass = $dbconn->real_escape_string($Pass);

	$hash_pass = password_hash($Pass, PASSWORD_DEFAULT);

	$checkNaam = $dbconn->query("SELECT Naam, Last
								 FROM gebruikers
								 WHERE Naam = '$Naam' AND Last = '$Last'");

	$count = $checkNaam->num_rows;

	if($count == 0){
		 $query = "INSERT INTO gebruikers(Naam, Last, Pass, gebruikerType)
		 		   VALUES('$Naam', '$Last', '$hash_pass', $Type)";


		 	if($dbconn->query($query)){
				echo "<div class='message'>
		 				<span class='info'></span> &nbsp; Registratie succesvol!
		 			</div>";
		 	} else{

				echo "<div class='message'>
						<span class='info'></span> &nbsp; Error tijdens registratie
		 				</div>";
		 	}
	}else{

				echo "<div class='message'>
						<span class='info'></span> &nbsp; Sorry Voor- en Achternaam bestaan al.
					</div>";
	}

	$dbconn->close();
}