<?php
include 'dbConfig.php';
header("Location:index.php");
?>
<!DOCTYPE html>
<html>
<head>
<style>
    img{
        width:50px;
        height:50px;
    }
</style>
</head>
<body>
<?php
$id=$_GET['id'];
    $sql ="SELECT * FROM products WHERE id =$id";
    $result = $db->query($sql);

    if($result->num_rows > 0){
        while($row = $result->fetch_assoc()){

            ?>
            <tr>
                <td><a href="details.php?id=$id"><img  src="<?php echo $row["url"]; ?>"></a></td>
                <td><?php echo $row["name"]; ?></td>
                <td><?php echo $row["description"]; ?></td>
                <td><?php echo '€'.$row["price"].' '; ?></td>
                <td><a href="cartAction.php?action=addToCart&id=<?php echo $row["id"]; ?>">Bestellen</a></td>
            </tr>
        <?php } }else{ ?>
        <tr><td>Geen product gevonden </td></tr>
    <?php } ?>
</body>
</html>

