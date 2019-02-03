
<?php
	
	include_once 'dashheader.php';
	include_once 'dashmenu.php';
?>

	<div class="container-fluid">
	
		<h2>Student toevoegen &nbsp; <a href="edit.php">Studenten wijzigen</a></h2>
		<p>
			Voeg hier een nieuwe leerling toe.
		</p>

		<?php

			if(isset($_POST['add-student'])){
				$Naam = strip_tags($_POST['Naam']);
				$Last = strip_tags($_POST['Last']);
				$Pass = strip_tags($_POST['Pass']);
				$Type = 1; // 1 stands for student

				$hash_pass = password_hash($Pass, PASSWORD_DEFAULT);

				$query = "SELECT * FROM gebruikers WHERE Naam = '$Naam' AND Last = '$Last'";
				$result = $dbconn->query($query);

				$count = $result->num_rows;

				// Geen bestaande gebruiker match?
				// Dan kan de nieuwe gebruiker worden aangemaakt.
				if($count == 0){
					$query = "INSERT INTO gebruikers(Naam, Last, Pass, gebruikerType)
					VALUES('$Naam', '$Last', '$hash_pass', 1)";

					$nieuweGebruikerInDB = $dbconn->query($query);

					if($nieuweGebruikerInDB){
						?>
						<div class="alert alert-warning">
							Deze leerling is toegevoegd.
						</div>
						<?php
					}else{
						?>
						<div class="alert alert-warning">
							Er is iets misgegaan bij het toevoegen van de leerling.
						</div>
						<?php
					}
				}else{
					?>
					<div class="alert alert-warning">
						Deze gebruiker bestaat al!
					</div>
					<?php
				}
			}
		?>

		<form action="edit.php" method="post">
			<div>
				<input type="text" name="Naam" placeholder="Naam...">
			</div>
			<div>
				<input type="text" name="Last" placeholder="Achternaam...">
			</div>
			<div>
				<input type="password" name="Pass" placeholder="Wachtwoord...">
			</div>
			<div>
				<button type="submit" name="add-student">
					Leerling toevoegen
				</button>
			</div>
		</form>
	</div>
</body>
</html>