<?php
function avg($cijfer1, $cijfer2,&$uitkomst){

  $uitkomst=$cijfer1+$cijfer2;
  echo "$uitkomst<br>";
}
$cijfer1=7;
$cijfer2=5;
$uitkomst=0;
avg($cijfer1, $cijfer2, $uitkomst);
  echo $uitkomst;


function cijfers($c){
  $aantal=count($c);
$totaal=0;
  for($n=0;  $n<$aantal; $n++){
      $totaal=$totaal+$c[$n];
    }


  $gemcijfer=$totaal/$aantal;
  return $gemcijfer;
  
}
$c=array(4,3,4,5);
$i=cijfers($c);
  echo $i;
show_source(__FILE__);
?>

