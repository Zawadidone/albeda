<?php
include "dbconfig.php";
?>
<!DOCTYPE html>
<html>
<head>
    <title>Steden</title>
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
        <h3>Steden</h3>
        <h4>Winkel toevoegen</h4>

        <fieldset>
            <input placeholder="Stad"  type="text" name="naam" pattern="[A-Za-z]{1,100}" title="Stad" tabindex="3" required>
        </fieldset>
        <fieldset>
            <input placeholder="Populatie" type="number" pattern="[0-9]{1,100}" title="Populatie" name="populatie" tabindex="3" required>
        </fieldset>

        <fieldset>
            <button name="submit" type="submit" value="Toevoegen" id="contact-submit" data-submit="...Sending" tabindex="3">Voeg toe</button>
        </fieldset>
    </form>
</div>

<div class="containerwijzig" >

    <form id="contact" method="get" action="wijzig.php" >
        <?php
        $result = mysqli_query($db, 'select * from stad');
        ?>
        <h2>Wijzig</h2>
            <fieldset>
                <select name="id" required>
                <option value="" disabled selected>Selecteer</option>
                <?php
                $sql = "SELECT  * FROM stad ORDER BY 'naam'";
                if ($result->num_rows > 0)
                {
                    while($row = $result->fetch_assoc())
                    {
                        $id = $row["stad_id"];
                        ?>
                        <option name="id" type="text" tabindex="5" value="<?php echo $id?>"><?php echo $row["naam"] ?></option>

                    <?php }
                } ?>
                </select>
            </fieldset>
        <fieldset>
            <button type="submit" tabindex="6" value="Toevoegen" id="contact-submit" data-submit="...Sending" >Wijzig</button>
        </fieldset>
    </form>
</div>
<div class="containerdelete" >

    <form id="contact" method="get" action="verwijder.php" >
        <?php
        $result = mysqli_query($db, 'select * from stad');
        ?>
        <h2>Verwijder</h2>
        <fieldset>
            <select name="id" required>
                <option value="" disabled selected>Selecteer</option>
                <?php
                $sql = "SELECT  * FROM stad ORDER BY 'naam'";
                $result = $db->query($sql);
                if ($result->num_rows > 0)
                {
                    while($row = $result->fetch_assoc())
                    {
                        $id = $row["stad_id"];
                        ?>
                        <option name="id" tabindex="4" type="text" value="<?php echo $id?>"><?php echo $row["naam"] ?></option>

                    <?php }
                } ?>
            </select>
        </fieldset>
        <fieldset>
            <button type="submit" value="Toevoegen" tabindex="5" id="contact-submit" data-submit="...Sending" onclick="return confirm('Weetje zeker dat je dit record wilt verwijderen?')">Verwijder</button>
        </fieldset>
    </form>
</div>


<div class="container2" >
    <table id="contact">
        <tr>
            <td><a href="?sort=stad_id+DESC"><i><b>Sorteer op: Laatst toegevoegd</b></i></a></td>
        </tr>
        <tr>
                <td><a href="?sort=naam+ASC"><i><b>Stad</b></i></a></td>
                <td style="text-align:right;"><a href="?sort=populatie+DESC"><i><b>Populatie</b></i></a></td>
            </tr>
        <?php
        $order = "";
        $order = isset($_GET['sort'])?$_GET['sort']:'naam';
        $sql = "SELECT  * FROM stad ORDER BY $order";
        $result = $db->query($sql);
        if ($result->num_rows > 0)
        {
            while($row = $result->fetch_assoc())
            {
                $id = $row["stad_id"];
                ?>
            <tr>
                <td><?php  echo $row["naam"];?></td>
                <td style="text-align:right;"><?php echo $row["populatie"];?></td>
                <td style="text-align:right;"><?php echo "<a href=verwijder.php?id=$id onclick=\"return confirm('Weetje zeker dat je dit record wilt verwijderen?')\">Verwijderen</a>";?></td>
                <td style="text-align:right;"><?php echo "<a href=wijzig.php?id=$id>Wijzigen</a>";?> </td>
            </tr>
        <?php
            }
        }
        else
        {
            echo "<tr><td>Er zijn geen steden</td></tr>";
        }
        ?>
    </table>
</div>
<?php $db->close();
?>
<div style="bottom:100px;" id="lijn"><a name="lijn"></a></div>

</body>
</html>
