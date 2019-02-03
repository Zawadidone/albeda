<?php
include 'Cart.php';
$cart = new Cart;
?>
<!DOCTYPE html>
<html>

<head>
    <title>Zena Vuurwerk</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script>
    function updateCartItem(obj,id){
        $.get("cartAction.php", {action:"updateCartItem", id:id, qty:obj.value}, function(data){
            if(data == 'ok'){
                location.reload();
            }else{
                alert('Winkelwagen updaten werkt niet probeer het nog een keer');
            }
        });
    }
    </script>
    <style>
        input[type="number"]{width: 20%;}
    </style>
</head>
<body>
<div style="width: 100%;">
    <div style="float: right;">
        <a href="viewCart.php"><img id="winkel" src="http://icon-park.com/imagefiles/shopping_cart_yellow.png"></a>
    </div>
    <a href="index.php"><img id="logo" src="http://www.vuurwerktwente.nl/imgs/logo-zena.png"></a>
</div>


<table>
  <caption><h2>Winkelwagen</h2></caption>
<tr>
<th>Product</th>
<th>Prijs</th>
<th>Aantal</th>
<th>Subtotaal</th>
<th></th>
</tr>
<?php
if($cart->total_items() > 0){
$cartItems = $cart->contents();
foreach($cartItems as $item){
?>
<tr>
<td><?php echo $item["name"]; ?></td>
<td><?php echo '&euro;'.$item["price"].''; ?></td>
<td><input type="number"   value="<?php echo $item["qty"]; ?>" onchange="updateCartItem(this, '<?php echo $item["rowid"]; ?>')"></td>
<td><?php echo '&euro;'.$item["subtotal"].' '; ?></td>
<td>          
<a href="cartAction.php?action=removeCartItem&id=<?php echo $item["rowid"]; ?>"  onclick="return confirm('Weet je het zeker?')"><img id="verwijder" src="http://www.iconarchive.com/download/i51281/awicons/vista-artistic/delete.ico" alt=""></a>
</td>
    <?php } }else{ ?>
        <td><p>Winkelwagen is leeg.....</p></td>
    <?php } ?>

</tr>
    <tr></tr>
<tr>
    <td><a href="index.php">Ga door met winkelen</a></td>
    <td></td><td></td>
    <td>Totaal:<?php echo '&euro;'.$cart->total().' '; ?></td>
<td></td>
    <td><a href="checkout.php"><b>Bestellen</b></a></td>
</tr>
</table>


<footer>
    &copy zenavuurwerk.nl 2017
</footer>
</body>
</html>