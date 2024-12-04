<?php

$harga = 151;

if ($harga > 159) {
    $hadiah = "Anda mendapatkan Kaos!";
} elseif($harga > 150){
    $hadiah = "Anda mendapatkan Hoodie!";
} elseif($harga > 200){
    $hadiah = "Anda mendapatkan Jumpsuit!";
} elseif($harga > 250){
    $hadiah = "Anda mendapatkan Motor! ";
} else {
    $hadiah = "SAYAAA";
}

echo "Harga Anda: $harga<br>";
echo "Hadiah: $hadiah";

?>