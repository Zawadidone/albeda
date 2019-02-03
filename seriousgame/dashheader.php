<?php

	require_once("dbconn.php");

  session_start();

//store identifier in session.
	$user_id = $_SESSION['userSession'];

	$result = $dbconn->query("SELECT * FROM gebruikers WHERE ID = $user_id");
  $count = $result->num_rows;

  if($count == 1){
    $row = $result->fetch_array();
    $Naam = $row['Naam'];
    $Last = $row['Last'];
    $Type = $row['gebruikerType'];
  }else{
    header('Location: index.php');
  }


?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script type="text/javascript" src="jquery-1.11.3-jquery.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="css/typicons.min.css" type="text/css"  />
<link href="https://fonts.googleapis.com/css?family=Dosis:700" rel="stylesheet">
<link rel="stylesheet" href="style.css?<?php echo date('YmdHis') ?>" type="text/css"  />
<title>welcome - <?php echo $Naam . ' ' . $Last; ?></title>
</head>

<body>