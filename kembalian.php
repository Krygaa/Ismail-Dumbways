<?php

$uang = 200000;
$belanja = 110500;

$kurang = $uang - $belanja;

for ($i=0; $kurang > 50000 ; $i++) {
  # code...
  $kurang = $kurang - 50000;

}

for ($x=0; $kurang > 20000 ; $x++) {
  # code...
  $kurang = $kurang - 20000;
}

for ($y=0; $kurang > 10000 ; $y++) {
  # code...
  $kurang = $kurang - 10000;
}

for ($w=0; $kurang > 5000 ; $w++) {
  # code...
  $kurang = $kurang - 5000;
}


echo "50.000 = ".$i."<br>";
echo "20.000 = ".$x."<br>";
echo "10.000 = ".$y."<br>";
echo "5.000 = ".$w."<br>";
echo "Disumbangkan =".$kurang;


 ?>
