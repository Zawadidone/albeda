<?php
include "dbconfig.php";
error_reporting(0);
?>
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="projectstylesheet.css"/>
    <title>Wijzig Stad</title>
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
$id = mysqli_real_escape_string($db, $_GET['id']);
$sql = "SELECT  * FROM stad WHERE  stad_id = $id";
$result = $db->query($sql);
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        ?>
        <div class="container">
            <form id="contact" name="form"  method="post" action="verwerkwijzig.php" >
                <h3>Wijzig tabel: Stad</h3>
                <input type="hidden" value="<?php echo $id;?>" name="id">
                <fieldset>
                    Naam: <?php  echo $row["naam"]?> <input type="text" name="naam" pattern="[A-Za-z]{1,100}" title="Stad" value="<?php  echo $row["naam"]?>" required/><br>
                </fieldset>
                <fieldset>
                    Populatie: <?php echo $row["populatie"]?> <br><input type="number" name="populatie"  pattern="[0-9]{1,100}" title="Populatie" value="<?php echo $row["populatie"]?>" required/><br>
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

