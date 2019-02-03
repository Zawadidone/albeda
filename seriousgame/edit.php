<?php 
	include_once 'dashheader.php';
	include_once 'dashmenu.php';

?>

<div class="container-fluid">
	<h2><a href="add.php">Student toevoegen</a> &nbsp; Studenten wijzigen</h2>

	<p>Hier kunt u studenten wijzigen</p>

	<?php

		// Gebruiker wijzigen?
		if(isset($_POST['oudenaam'], $_POST['oudelast']) && !isset($_POST['actie'])){

			$Naam  = $_POST['oudenaam'];
			$Last  = $_POST['oudelast'];

			if(isset($_POST['Naam'], 
					 $_POST['Last'], 
					 $_POST['Pass'], 
					 $_POST['gebruikerType'])){

				$newnaam = strip_tags($_POST['Naam']);
				$newlast = strip_tags($_POST['Last']);
				$newPass = strip_tags($_POST['Pass']);
				$newType = strip_tags($_POST['gebruikerType']);

				$sql = "SELECT *
						FROM gebruikers
						WHERE Naam='$newnaam' AND Last='$newlast'";

				$result = $dbconn->query($sql);
				$count  = $result->num_rows;

				if($count == 0 || ($Naam == $newnaam && $Last == $newlast)){
					
					$updateQuery = "UPDATE gebruikers SET Naam = '$newnaam', Last = '$newlast',";
					$hash = password_hash($newPass, PASSWORD_DEFAULT);
					if($newPass != ''){
						$updateQuery .= "Pass='$hash',";
					}  
					$updateQuery .= "gebruikerType=$newType
				 				  	 WHERE Naam='$Naam' AND Last='$Last'";

				 	$dbconn->query($updateQuery);

				 	// Update mogelijk gewijzigde naam en achternaam
				 	$Naam = $newnaam;
				 	$Last = $newlast;

				 	echo "<br>";
				 	echo "Uw wijziging is doorgevoerd.";

				}else{
					echo "Fout: Deze naam en achternaam bestaan al.";
				}
			}

			$query = "SELECT * FROM gebruikers WHERE Naam='$Naam' AND Last='$Last'";

			$result= $dbconn->query($query);
			$count = $result->num_rows;

			if($count > 0){

				$row = $result->fetch_array();
			?>

			<form action="edit.php" method="post">
				<input type="hidden" name="oudenaam" value="<?php echo $Naam ?>">
				<input type="hidden" name="oudelast" value="<?php echo $Last ?>">
				<div>
					<input type="text" name="Naam" placeholder="Naam.." value="<?php echo $row['Naam'] ?>" required />
				</div>
				<div>
					<input type="text" name="Last" placeholder="Achternaam.." value="<?php echo $row['Last']?>" required />
 				</div>
 				<div>
 					<input type="password" name="Pass" placeholder="Voer nieuw wachtwoord in.."/>
 				</div>
 				<div>
 					<input type="radio" name="gebruikerType" value='1' <?php if($row['gebruikerType'] == 1){
 						echo "checked"; 
 						}?>> Student &nbsp;
					<input type="radio" name="gebruikerType" value='2' <?php if($row['gebruikerType'] == 2){
						echo "checked";
						}?>> Docent
 				</div>
 				<div>
 					<button type="submit">Wijzig</button> 
 				</div>
			</form>

			<p><a href="edit.php">Terug naar studentenoverzicht</a></p>
			<?php


			}else{
				echo 'Deze naam en achternaam bestaan niet.';
			}

		// Alle gebruikers weergeven
		}else{

			// Gebruiker verwijderen?
			if(isset($_POST['actie'])){

				$Naam = strip_tags($_POST['oudenaam']);
				$Last = strip_tags($_POST['oudelast']);

				if(!isset($_POST['zeker'])){
					?>
					Weet u zeker dat u de gebruiker <?php echo $Naam ?> <?php echo $Last ?>
					wilt verwijderen?
					<br>
					<form class='table-form' method='post'>
						<button class='table-button table-button-left' type='submit'>Akkoord</button>
						<input type='hidden' name='oudenaam' value='<?php echo $Naam ?>'/>
						<input type='hidden' name='oudelast' value='<?php echo $Last ?>'/>
						<input type='hidden' name='actie' value='delete'/>
						<input type='hidden' name='zeker' value='ja'/>
					</form><form class='table-form' method='post'>
						<button class='table-button table-button-right' type='submit'>Annuleren</button>
					</form>
					<br>
					<br>
					<?php
				}else{
					$query = "DELETE FROM gebruikers WHERE Naam='$Naam' AND Last='$Last'";

					$result = $dbconn->query($query);

					if($result){
						echo "De gebruiker $Naam $Last is verwijderd.<br><br>";
					}else{
						echo "Er is iets misgegaan.";
					}
				}
			}

			$query = "SELECT *
					  FROM gebruikers";

			$result = $dbconn->query($query);
			$count	= $result->num_rows;

			?>
			<table>
				<thead>
					<tr>
						<th>Naam</th>
						<th>Achternaam</th>
						<th>Gebruikertype</th>
						<th>Acties</th>
					</tr>
				</thead>
				<tbody>
				<?php
			while($row = $result->fetch_array()){
					echo "<tr>
							<td>{$row['Naam']}</td>
							<td>{$row['Last']}</td>
							<td>";

					if($row['gebruikerType'] == 1){
						echo "Student";
					}elseif($row['gebruikerType'] == 2){
						echo "Docent";
					}

					echo "</td>
							<td><form class='table-form' method='post'>
							<button class='table-button table-button-left' type='submit'>Wijzigen</button>
							<input type='hidden' name='oudenaam' value='{$row['Naam']}'/>
							<input type='hidden' name='oudelast' value='{$row['Last']}'/>
							</form><form class='table-form' method='post'>
							<button class='table-button table-button-right' type='submit'>Verwijderen</button>
							<input type='hidden' name='oudenaam' value='{$row['Naam']}'/>
							<input type='hidden' name='oudelast' value='{$row['Last']}'/>
							<input type='hidden' name='actie' value='delete'/>
							</form>
							</td>
						</tr>";


			}
			echo '</tbody>';
			echo '</table>';

		}




	?>
		
	


</div>