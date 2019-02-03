<!DOCTYPE html>
<html>
<head>

</head>
<body>
<form method="post" action="#">
    Voer een nummer in <input type="text" name="getal"><br>
    <input type="submit" value="Verzenden">
</form>
<?php
if (isset($_POST['getal'])) {
   $getal = $_POST['getal'];
   for($i=1; $i<=$getal; $i++) {
       $getal = $_POST['getal'];
       $waarde = $waarde + $i;
       if($i<$getal){
           echo "$i + ";

       }
       else{

           echo " $i = $waarde";

       }

   }
}
?>

</body>
</html>

