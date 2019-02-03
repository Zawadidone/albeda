<?php
for ($t=1; $t<=10; $t++){
    echo "$t<br>";
}
for($nr=1; $nr<=10; $nr++){
    $tafel=10;
  $uitkomst=$tafel*$nr;
  echo " $tafel x $nr = $uitkomst <br>";
}

#Ze doen hetzelfde
for($tafel=1; $tafel<=10; $tafel++)
for($nr=1; $nr<=10; $nr++){
   $uitkomst=$tafel*$nr;
   echo "$tafel x $nr = $uitkomst <br>";
  
}
show_source(__FILE__);
?>