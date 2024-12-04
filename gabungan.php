<?php

///Tugas Potongan Harga///
$total_belanja = 100000;
echo "Harga Anda = $total_belanja";
echo "<br>";
if($total_belanja>=100000){
  echo "Anda mendapatkan potongan harga 5%";
}

elseif($total_belanja>=250000){
    echo "Anda mendapatkan potongan harga 10%";
}

?>


<?php
///Tugas Keliling Lingkaran///
echo "Keliling Lingkaran :";
echo "<br>";
echo "Diameter = 14 cm";

echo "<br>";
$diameter = 14;
echo "<br>";

echo "jari jari = diameter dibagi 2";
$jarijari = 7;
echo "<br>";
echo "Rumus Keliling Lingkaran = 2 . 3,14 (22/7) . r";
echo "<br>";

$hasil = 2 * 22/7  * $jarijari;
echo "rumus keliling segitiga = 2 x 3,14 (22/7) x r";
echo "<br>";
echo  "hasil = 2 * 22/7 * $jarijari = $hasil cm";

?>