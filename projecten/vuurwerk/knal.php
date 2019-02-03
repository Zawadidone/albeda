<?php
include 'dbConfig.php';
?>
<!DOCTYPE html>
<html>
<head>
    <title>Zena Vuurwerk</title>
    <link rel="stylesheet" type="text/css" href="style.css">

</head>
<body>
<div style="width: 100%;">
    <div style="float: right;">
        <a href="viewCart.php"><img id="winkel" src="http://icon-park.com/imagefiles/shopping_cart_yellow.png"></a>
    </div>
    <a href="index.php"><img id="logo" src="http://www.vuurwerktwente.nl/imgs/logo-zena.png"></a>
</div>


<div id="links">
    <ul>
        <li><a href="index.php">Assortiment</a></li>
        <li><a href="knal.php">Knal Vuurwerk</a></li>
        <li><a href="sier.php">Sier Vuurwerk</a></li>
    </ul>
</div>

    <table>
        <caption><h1>Knal</h1></caption>
        <?php
        $sql ="SELECT * FROM products WHERE caterogie='knal' ORDER BY id";
        $result = $db->query($sql);

        if($result->num_rows > 0){
            while($row = $result->fetch_assoc()){
                $id=$row['id'];
                ?>
                <tr>
                    <td><?php echo "<a href=details.php?id=$id><img  src=".$row["url"]."></a>";?></td>
                    <td><?php echo $row["name"]; ?></td>
                    <td><?php echo $row["description"]; ?></td>
                    <td><?php echo '€'.$row["price"].' '; ?></td>
                    <td><a href="cartAction.php?action=addToCart&id=<?php echo $row["id"]; ?>">Bestellen</a></td>
                </tr>
            <?php } }else{ ?>
            <tr><td>Geen producten</td></tr>
        <?php } ?>
    </table>




<footer>
    &copy zenavuurwerk.nl 2017
</footer>


</body>
</html>