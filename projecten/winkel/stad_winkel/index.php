<?php
include "dbconfig.php";
?>
<!DOCTYPE html>
<html>
<head>
    <title>Stad Winkels</title>
    <link rel="stylesheet" type="text/css" href="projectstylesheet.css"/>

</head>
<body>
<!--
<form name="form"  method="post" action="verwerk.php">
    Naam <input type="text" name="naam" required/><br>
    Populatie <input type="number" name="populatie" required/><br>
    <input type="submit" value="Toevoegen">
</form>
-->
<br>
<div style="top: 100px; max-width: 100px">
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
<div class="container" >
    <form id="contact" name="form"  method="post" action="verwerk.php" >
        <h3>Stad Winkels</h3>
        <h4>Aantal winkels per stad toevoegen</h4>
        <fieldset>
            <select name="winkel_id" required>
                <option value="" disabled selected>Selecteer</option>
                <?php
                $sql = "SELECT  * FROM winkel ORDER BY 'stad_id'";
                $result = $db->query($sql);
                if ($result->num_rows > 0)
                {
                    while($row = $result->fetch_assoc())
                    {

                        ?>
                        <option name="winkel_id" type="text" value="<?php echo $row["winkel_naam"] ?>"><?php echo $row["winkel_naam"] ?></option>

                    <?php }
                } ?>
            </select>
        </fieldset>
        <fieldset>
            <select name="stad_id" required>
                <option value="" disabled selected>Selecteer</option>
                <?php
                $sql = "SELECT  * FROM stad ORDER BY 'naam'";
                $result = $db->query($sql);
                if ($result->num_rows > 0)
                {
                    while($row = $result->fetch_assoc())
                    {
                        $id = $row["naam"];
                        ?>
                        <option name="stad_id" type="text" value="<?php echo $id?>"><?php echo $row["naam"] ?></option>

                    <?php }
                } ?>
            </select>
        </fieldset>
       <!-- <fieldset>
            <input placeholder="Naam Winkel" type="text" name="winkel_id" pattern="[A-Za-z]{1,100}" tabindex="3" required>
        </fieldset>-->
        <fieldset>
            <input placeholder="Aantal Winkels" type="number" name="aantal_filialen"  pattern="[0-9]{1,100}" tabindex="3" required>
        </fieldset>
        <fieldset>
            <button name="submit" type="submit" value="Toevoegen" tabindex="3">Verzenden</button>
        </fieldset>
    </form>
</div>

<div class="container2" >

    <table id="contact">
        <tr>
            <td><a href="?sort=stad_id+ASC"><i><b>Stad</b></i></a></td>
            <td><a href="?sort=winkel_id+ASC"><i><b>Winkels</b></i></a></td>
            <td style="text-align:right;"><a href="?sort=aantal_filialen+DESC"><i><b>Aantal winkels</b></i></a></a></td>
        </tr>
        <?php
        $order = "";
        $order = isset($_GET['sort'])?$_GET['sort']:'winkel_id';
        $sql = "SELECT  * FROM Stad_Winkel ORDER BY $order";
        $result = $db->query($sql);
        if ($result->num_rows > 0)
        {
            while($row = $result->fetch_assoc())
            {
                $id = $row["id"];
                ?>
                <tr>
                    <td><?php  echo $row["stad_id"];?></td>
                    <td><?php  echo $row["winkel_id"];?></td>
                    <td style="text-align:right;"><?php echo $row["aantal_filialen"];?></td>
                    <td style="text-align:right;"><?php echo "<a onclick=\"return confirm('Weetje zeker dat je dit record wilt verwijderen?')\" href=verwijder.php?id=$id>Verwijderen</a>";?></td>
                    <td style="text-align:right;"><?php echo "<a href=wijzig.php?id=$id>Wijzigen</a>";?> </td>
                </tr>
                <?php
            }
        }
        else
        {
            echo "<tr><td>Er zijn geen fillialen</td></tr>";
        }
        ?>
    </table>
</div>
<div class="containerwijzig">
    <form id="contact" method="get" action="wijzig.php" >
        <?php
        $result = mysqli_query($db, 'select * from Stad_Winkel');
        ?>
        <h2>Wijzig</h2>
        <fieldset>
            <select name="id" required>
                <option value="" disabled selected>Selecteer</option>
                <?php
                $sql = "SELECT  * FROM Stad_Winkel ORDER BY 'winkel_id'";
                $result = $db->query($sql);
                if ($result->num_rows > 0)
                {
                    while($row = $result->fetch_assoc())
                    {
                        $id = $row["id"];
                        ?>
                        <option name="id" type="text" value="<?php echo $id?>"><?php echo $row["winkel_id"]. " - " . $row["stad_id"] ?></option>

                    <?php }
                } ?>
            </select>
        </fieldset>
        <fieldset>
            <button type="submit" value="Toevoegen" id="contact-submit" data-submit="...Sending" >Wijzig</button>
        </fieldset>
    </form>
</div>
<div class="containerdelete">
    <form id="contact" method="get" action="verwijder.php" >
        <?php
        $result = mysqli_query($db, 'select * from Stad_Winkel');
        ?>
        <h2>Verwijder</h2>
        <fieldset>
            <select name="id" required>
                <option value="" disabled selected>Selecteer</option>
                <?php
                $sql = "SELECT  * FROM Stad_Winkel ORDER BY 'winkel_id'";
                $result = $db->query($sql);
                if ($result->num_rows > 0)
                {
                    while($row = $result->fetch_assoc())
                    {
                        $id = $row["id"];
                        ?>
                        <option name="id" type="text" value="<?php echo $id?>"><?php echo $row["winkel_id"]. " - " . $row["stad_id"]  ?></option>

                    <?php }
                } ?>
            </select>
        </fieldset>
        <fieldset>
            <button type="submit" value="Toevoegen" id="contact-submit" data-submit="...Sending" onclick="return confirm('Weetje zeker dat je dit record wilt verwijderen?')">Verwijder</button>
        </fieldset>
    </form>
</div>
<?php $db->close();
?>
<div style="bottom:100px;" id="lijn"><a name="lijn"></a></div>
</body>
</html>
