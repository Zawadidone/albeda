<?php

include 'dbConfig.php';

include 'Cart.php';
$cart = new Cart;


if($cart->total_items() <= 0){
    header("Location: index.php");
}

$_SESSION['sessCustomerID'] = 1;


$query = $db->query("SELECT * FROM customers WHERE id = ".$_SESSION['sessCustomerID']);
$custRow = $query->fetch_assoc();
?>
<!DOCTYPE html>
<html>
<head>
    <title>Zena Vuurwerk</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
<div style="width: 100%;">
    <div style="float: right;">
        <a href="viewCart.php"><img id="winkel" src="http://icon-park.com/imagefiles/shopping_cart_yellow.png"></a>
    </div>
    <a href="index.php"><img id="logo" src="http://www.vuurwerktwente.nl/imgs/logo-zena.png"></a>
</div>


<table>
    <caption><h2>Bestelling</h2></caption>
        <tr>
            <th>Product</th>
            <th>Prijs</th>
            <th>Aantal</th>
            <th>Subtotaal</th>
            <th></th>
        </tr>


        <?php
        if($cart->total_items() > 0){
            //get cart items from session
            $cartItems = $cart->contents();
            foreach($cartItems as $item){
        ?>
        <tr>
            <td><?php echo $item["name"]; ?></td>
            <td><?php echo '&euro;'.$item["price"].' '; ?></td>
            <td><?php echo $item["qty"]; ?></td>
            <td><?php echo '&euro;'.$item["subtotal"].' '; ?></td>
<!--<a href="cartAction.php?action=updateCartItem&id=" class="btn btn-info"><i class="glyphicon glyphicon-refresh"></i></a>-->
            <td><a href="cartAction.php?action=removeCartItem&id=<?php echo $item["rowid"]; ?>"  onclick="return confirm('Weet je het zeker?')"><img src="http://www.iconarchive.com/download/i51281/awicons/vista-artistic/delete.ico" id="verwijder" alt=""></a></td>
            <?php } }else{ ?>
                <td><p>Winkelwagen is leeg.....</p></td>
            <?php } ?>

        </tr>
    <tr>
        <td><a href="index.php" class="btn btn-warning"><i></i> Ga door met winkelen</a></td>
        <td></td>
        <td></td>
        <td>Totaal:<?php echo '&euro;'.$cart->total().' '; ?></td>
        <td><a href="cartAction.php?action=placeOrder"><h3>Bestellen</h3></a></td>
    </tr>
    </table>



    <h3></h3>
    <h3></h3>
    <h3></h3>
   <h3></h3>

        <h4>Gegevens</h4>
        <p>Naam: <?php echo $custRow['name']; ?></p>
        <p>E-mail adres: <?php echo $custRow['email']; ?></p>
        <p>Telefoonnummer: <?php echo $custRow['phone']; ?></p>
        <p>Adres: <?php echo $custRow['address']; ?></p>

<footer>
    &copy zenavuurwerk.nl 2017
</footer>
</body>
</html>