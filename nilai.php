<?php

$nama = "Luchinta";
$nim ="990534";
$kehadiran=14;
$tugas= 100;
$uas = 70;
$uts =50;

if ($kehadiran == 0 || $tugas == 0) {
  # code...
  echo "E";
}
else {
  $nilai1 = $tugas * 20/100;
  $nilai2 = $uas * 40/100;
  $nilai3 = $uts * 30/100;
  $nilai4 = $kehadiran * 10/100;
  $total  = $nilai1 + $nilai2 + $nilai3 + $nilai4;
}
echo $total."<br>";
switch (true) {
  case($total > 80 || $total == 100):
    # code...
    echo "A";
    break;
  case($total >= 71 || $total == 79):
    # code...
    echo "B";
    break;
  case($total >= 61 || $total == 70):
    # code...
    echo "C";
    break;
  case($total >= 50 || $total == 60):
    # code...
    echo "D";
    break;
  case($total < 50):
    # code...
    echo "E";
    break;
  default:
    # code...
    echo "Bukan Nilai";
    break;
}


 ?>
