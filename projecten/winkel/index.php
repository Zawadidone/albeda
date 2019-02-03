<?php
include "dbconfig.php";
?>
<!DOCTYPE html>
<html>
<head>
    <title>Home</title>
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
<div style="top: 100px;">
    <div class="dropdown">
        <span class="dropdownbutton"><a style="color:white" href="#">Home</a></span>
    </div>
    <br>
    <div class="dropdown">
        <span class="dropdownbutton"><a style="color:white" href="stad">Steden</a></span>
    </div>
    <br>
    <div class="dropdown">
        <span class="dropdownbutton"><a style="color:white" href="stad_winkel">Stad Winkels</a></span>
    </div>
    <br>
    <div class="dropdown">
        <span class="dropdownbutton"><a style="color:white" href="winkel">Winkels</a></span>
    </div>
</div>
<div class="container" >

    <table id="contact">
        <tr>
            <td><h3>Stad Winkels</h3></td>
        </tr>
        <tr>
            <td><i><b>Winkels</b></i></td>
            <td style="text-align:right;"><i><b>Aantal Winkels</b></i></td>
        </tr>
        <?php
        $sql = "SELECT  * FROM Stad_Winkel ORDER BY winkel_id";
        $result = $db->query($sql);
        if ($result->num_rows > 0)
        {
            while($row = $result->fetch_assoc())
            {
                $id = $row["stad_id"];
                ?>
                <tr>
                    <td><?php  echo $row["winkel_id"];?></td>
                    <td style="text-align:right;"><?php echo $row["aantal_filialen"];?></td>
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
<!--</div>

<div class="container2" >-->
    <table id="contact">
            <tr>
                <td><h3>Steden</h3></td>
            </tr>
            <tr>
                <td><i><b>Stad</b></i></td>
                <td style="text-align:right;"><i><b>Populatie</b></i></td>
            </tr>
        <?php
        $sql = "SELECT  * FROM stad ORDER BY 'naam'";
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
<!--</div>

<!--<div class="container2" >-->

    <table id="contact">
        <tr>
            <td><h3>Winkels</h3></td>
        </tr>
        <tr>
            <td><i><b>Filliaal Afkorting</b></i></td>
            <td style="text-align:right;"><i><b>Filliaal Naam</b></i></td>
        </tr>
        <?php
        $sql = "SELECT  * FROM winkel ORDER BY 'winkel_naam'";
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
<div style="bottom:100px;" id="hayeckergelijn"><a name="hayeckergelijn"></a></div>
</body>
</html>
