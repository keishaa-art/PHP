<?php
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