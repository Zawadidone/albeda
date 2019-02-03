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
<br>
<form method="POST" action="verwerkfeedback.php">
Naam 
<br>
<input type="text" name="naam" value="" required>
<br>
Achternaam
<br>
<input type="text" name="achternaam" value="" required>
<br>
Geslacht
<br>
Man<input type="checkbox" name="geslacht" value="Man">Vrouw<input type="checkbox" name="geslacht" value="Vrouw">
<br><br>
Feedback   
<br>
<input type="text"   name="feedback" value="" style="height:100px; width=100px; text-align:left; "  required>
<br><br>
<input type="submit" name="submit" value="Verzenden">
</form>
</body>
</html>