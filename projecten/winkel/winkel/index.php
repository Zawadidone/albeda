<?php
include "dbconfig.php";
?>
<!DOCTYPE html>
<html>
<head>
    <title>Winkels</title>
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
        <h3>Winkels</h3>
        <h4>Filliaal toevoegen</h4>

        <fieldset>
            <input placeholder="Filliaal Afkorting" type="text" name="winkel_id" pattern="[A-Za-z]{1,100}" tabindex="3" required>
        </fieldset>
        <fieldset>
            <input placeholder="Filliaal naam" type="text" name="winkel_naam" pattern="[A-Za-z]{1,100}" tabindex="3" required>
        </fieldset>
        <fieldset>
            <button name="submit" type="submit" value="Toevoegen" tabindex="3" >Verzenden</button>
        </fieldset>
    </form>
</div>
<div class="containerwijzig">
    <form id="contact" method="get" action="wijzig.php" >
        <?php
        $result = mysqli_query($db, 'select * from winkel');
        ?>
        <h2>Wijzig</h2>
        <fieldset>
            <select name="id" required>
                <option value="" disabled selected>Selecteer</option>
                <?php
                $sql = "SELECT  * FROM winkel ORDER BY 'winkel_naam'";
                $result = $db->query($sql);
                if ($result->num_rows > 0)
                {
                    while($row = $result->fetch_assoc())
                    {
                        $id = $row["winkel_id"];
                        ?>
                        <option name="id" type="text" value="<?php echo $id?>"><?php echo $row["winkel_naam"] ?></option>

                    <?php }
                } ?>
            </select>
        </fieldset>
        <fieldset>
            <button type="submit" value="Toevoegen" id="contact-submit" data-submit="...Sending">Wijzig</button>
        </fieldset>
    </form>
</div>
<div class="containerdelete">
    <form id="contact" method="get" action="verwijder.php" >
        <?php
        $result = mysqli_query($db, 'select * from winkel');
        ?>
            <h2>Verwijder</h2>
            <fieldset>
                <select name="id" required>
                    <option value="" disabled selected>Selecteer</option>
                    <?php
                    $sql = "SELECT  * FROM winkel ORDER BY 'winkel_naam'";
                    $result = $db->query($sql);
                    if ($result->num_rows > 0)
                    {
                        while($row = $result->fetch_assoc())
                        {
                            $id = $row["winkel_id"];
                            ?>
                            <option name="id" type="text" value="<?php echo $id?>"><?php echo $row["winkel_naam"] ?></option>

                        <?php }
                    } ?>
                </select>
            </fieldset>
        <fieldset>
            <button type="submit" value="Toevoegen" id="contact-submit" data-submit="...Sending" onclick="return confirm('Weetje zeker dat je dit record wilt verwijderen?')">Verwijder</button>
        </fieldset>
    </form>
</div>
<div class="container2" >

    <table id="contact">
        <tr>
            <td><a href="?sort=winkel_id+ASC"><i><b>Filliaal Afkorting</b></i></a></td>
            <td style="text-align:right;"><a href="?sort=winkel_naam+ASC"><i><b>Filliaal Naam</b></i></a></td>
        </tr>
        <?php
        $order="";
        $order = isset($_GET['sort'])?$_GET['sort']:'winkel_id';
        $sql = "SELECT  * FROM winkel ORDER BY $order";
        $result = $db->query($sql);
        if ($result->num_rows > 0)
        {
            while($row = $result->fetch_assoc())
            {
                $id = $row["winkel_id"];
                ?>
                <tr>
                    <td><?php  echo $row["winkel_id"];?></td>
                    <td style="text-align:right;"><?php echo $row["winkel_naam"];?></td>
                    <td style="text-align:right;"><?php echo "<a href=verwijder.php?id=$id onclick=\"return confirm('Weetje zeker dat je dit record wilt verwijderen?')\">Verwijderen</a>";?></td>
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
<?php $db->close();
?>
<div style="bottom:100px;" id="lijn"><a name="lijn"></a></div>
</body>
</html>





