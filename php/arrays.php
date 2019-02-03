<?php
#De drie namen printen
$namen=array('Jan', 'Piet', 'Klaas');
for($n=0; $n<=3; $n++)
{
  echo "$namen[$n]<br>";
}
$hoi=1;
#Namen, cijfers, gemiddelde en verschil printen
$namen=array('Jan', 'Piet', 'Klaas');
$cijfers=array(6, 8, 9);
$som=0;
$aantal=count($cijfers);
for($n=0;  $n<$aantal; $n++){
  $som=$som+$cijfers[$n];
}
$gem=$som/$aantal;

  echo "Het gemiddelde van de klas is $gem <br>";

 
for($n=0;  $n<$aantal; $n++)
{
  $gemcijfer=$gem-$cijfers[$n];
 echo "$namen[$n]  $cijfers[$n] $gem  $gemcijfer<br>";
}

#Alle cijfers boven de 7 printen

$naam=array('Jan', 'Piet', 'Klaas');
$cijfer=array(6, 8, 9);
$som=0;
$aantal=count($cijfer);

for($a=0; $a<$aantal; $a++){
	$som=$som+$cijfer[$a];
}
$gem=$som/$aantal;

for($a=0; $a<$aantal; $a++){
	$verschil=$cijfer[$a]-$gem;
	if($cijfer[$a]>=7){
		echo "$naam[$a], $cijfer[$a], $gem, $verschil<br>";
	}
}


#cijfers groter dan 5 optellen
#cijfers groter dan 5 in nieuwe array
$cijfers=array(2,3,6,7,8,12,4);
$aantal=count($cijfers);
$new=array();

for($c=0; $c<$aantal; $c++){if($cijfers[$c]>5){
      $new[$c]=$cijfers[$c];
    }
  else{
      $new[$c]="";
    }
  echo"$new[$c]<br>";


}
show_source(__FILE__);
?>

  

 
