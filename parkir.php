<?php

$perjam =3;
$biaya;

for ($i=$perjam; $i>= 1 && $i<=3; $i--) {
  # code...
  $biaya = $perjam * 2000;
}

for ($i=$perjam;$i > 3; $i--) {
  # code...
  $biaya = $perjam * 1000;
}

echo $biaya;

if ($perjam > 3) {
  # code...
  $pertama = 6000;
  $kurang= $biaya - 3000;
  $hasil=$pertama +$kurang;
  echo $hasil;
}



 ?>
