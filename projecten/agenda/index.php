<html>
<head>
<title>
Agenda
</title>
<link type="text/css" rel="stylesheet" href="stylesheet.css"/>
<script type="text/javascript" src="http://code.jquery.com/jquery-1.8.2.js"></script>
</head>
<body>
<div>
<ul class="topnav" id="myTopnav">
  <li><a href="index.php">Agenda</a></li>
  <li><a href="feedback.php">Contact</a></li>
  <li class="icon">
    <a href="javascript:void(0);" onclick="myFunction()">&#9776;</a>
  </li>
</ul>

<form  method="POST" action="verwerk.php"> 
<table>
<tr><th>Datum</th><th>Tijdstip</th><th>Omschrijving</th><th>Adres</th></tr>
<tr>
<td>  
<select name="day" required>
<option value="">Day</option>
<?php for ($day = 1; $day <= 31; $day++) { ?>
<option value="<?php echo strlen($day)==1 ? '0'.$day : $day; ?>" ><?php echo strlen($day)==1 ? '0'.$day : $day; ?></option>
<?php } ?>
</select>
<select name="month" required>
<option value="">Month</option>
<?php for ($month = 1; $month <= 12; $month++) { ?>
<option value="<?php echo strlen($month)==1 ? '0'.$month : $month; ?>" ><?php echo strlen($month)==1 ? '0'.$month : $month; ?></option>
<?php } ?>
</select>
<select name="year" required>
<option value="">Year</option>
<?php for ($year = 2016; $year<=2116; $year++) { ?>
<option value="<?php echo $year; ?>"><?php echo $year; ?></option>
<?php } ?>
</select>
</td>
  
<td> 
Ochtend<input type="checkbox" name="tijdstip" value="Ochtend"/>  
Middag<input type="checkbox" name="tijdstijp" value="Middag"/>
Avond<input type="checkbox" name="tijdstip" value="Avond"/> 
</td>
<td>
<input type="text" name="omschrijving" value=""required>
</td>

<td>
<input type="text" name="adres" value="" placeholder="Straat, Stad"required>
</td> 
</tr>
  
<tr>
<td><input type="submit" name="submit" value="Verzenden"></td>
</tr>
</form>
</table>




<table>
<tr><th>Datum</th><th>Tijdstip</th><th>Omschrijving</th><th>Adres</th></tr>
<?php
error_reporting(1);
include "connect.php";
$sql = "SELECT  * FROM agenda";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
    	$id=$row['id'];
        echo "
		<tr>
		<td>". $row["day"]."-". $row["month"]."-". $row["year"]."</td>
		<td>". $row["tijdstip"]."</td>
		<td>". $row["omschrijving"]."</td>
		<td>". $row["adres"]."</td> 
		<td><a href=agendadelete.php?id=$id>Verwijderen</a></td>
		</tr><br>";
		
    }
} else {
    echo "<tr><td>Geen afspraken<td></tr>";
}


$conn->close();
?>
</table>
</div>
</body>
</html>