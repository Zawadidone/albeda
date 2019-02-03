<?php 

session_start();
require_once 'dbconn.php';

	//start sesh redirect to home if not exist;
	// if (!isset($_SESSION['userSession'])){
	// 	header("Location: home.php");
	// 	exit;
	// }

	//check logged in;
	if (isset($_POST['login'])){

		$Naam = strip_tags($_POST['Naam']);
		$Last = strip_tags($_POST['Last']);
		$Pass = strip_tags($_POST['Pass']);

		$Naam = $dbconn->real_escape_string($Naam);
		$Last = $dbconn->real_escape_string($Last);
		$Pass = $dbconn->real_escape_string($Pass);

		$query = "SELECT *
				FROM gebruikers 
				WHERE Naam = '$Naam' AND Last = '$Last'";

		$result = $dbconn->query($query); // thanks @ joa <3
		$row   = $result->fetch_array();
		$count = $result->num_rows; //if lastname,name and pass are correct, this returns 1 row

		if(password_verify($Pass, $row['Pass']) && $count == 1){
			$_SESSION['userSession'] = $row['ID'];
			header("Location: home.php");
			exit;
		} else{
			echo "<div class='danger'>
						<span class='info'></span>&nbsp; Voornaam en Achternaam niet correct!
					</div>";
		}
		$dbconn->close();

	}



	include_once 'sign-in.php';