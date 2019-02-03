<?php
include "dbconfig.php";
error_reporting(0);
?>
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="projectstylesheet.css"/>
    <title>Wijzig Stad Winkels</title>
</head>
<body>
<br>
<div style="top: 100px;">
    <div class="dropdown">
        <span class="dropdownbutton"><a style="color:white" href="../">Home</a></span>
    </div>
    <br>
    <div class="dropdown">
        <span class="dropdownbutton"><a style="color:white" href="../stad/">Steden</a></span>
    </div>
    <br>
    <div class="dropdown">
        <span class="dropdownbutton"><a style="color:white" href="../stad_winkel/">Stad Winkels</a></span>
    </div>
    <br>
    <div class="dropdown">
        <span class="dropdownbutton"><a style="color:white" href="../winkel/">Winkels</a></span>
    </div>
</div>
<?php
$id = $_GET['id'];
$sql = "SELECT  * FROM Stad_Winkel WHERE  id = $id";
$result = $db->query($sql);
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        ?>
        <div class="container">
            <form id="contact" name="form"  method="post" action="verwerkwijzig.php" >
                <h3>Wijzig Populatie: Stad Winkels</h3>
                <input type="hidden" value="<?php echo $id;?>" name="id">
                <fieldset>
                    Stad ID: <?php  echo $row["winkel_id"]?><br>
                </fieldset>
                <fieldset>
                    Stad: <?php  echo $row["stad_id"]?><br>
                </fieldset>
                <fieldset>
                    Populatie: <br> Van: <?php echo $row["aantal_filialen"]?> <br> Naar: <input type="number" name="aantal_filialen" value="<?php echo $row["aantal_filialen"]?>" required/><br>
                </fieldset>
                <fieldset>
                    <button name="submit" type="submit" value="Wijzigen" data-submit="...Sending">Wijzig</button>
                </fieldset>
            </form>
        </div>
        <?php
    }
}
else {
    echo "Er is geen stad die je kan wijzigen";
}

$db->close();
?>
</body>
</html>


