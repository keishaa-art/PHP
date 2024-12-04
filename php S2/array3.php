<?php
$produk1 = "Elemen berindeks 0 : PPLG";
$produk2 = "Elemen berindeks 1 : TJKT";
$produk3 = "Elemen berindeks 2 : TKR";
$produk4 = "Elemen berindeks 3 : TPM";
$produk5 = "Elemen berindeks 4 : TE";

echo "$produk1<br>";
echo "$produk2<br>";
echo "$produk3<br>";
echo "$produk4<br>";
echo "$produk5<br>";

?>

<!-- another script -->
<?php

$jurusan = ["Elemen berindeks 0 : Elektronika", "Elemen berindeks 1 : Listrik", "Elemen berindeks 2 : Otomotif", "Elemen berindeks 3
: Pariwisata", "Elemen berindeks 4 : Teknik jaringan Komputer"];

for($i=0; $i < count($jurusan); $i++){
    echo $jurusan[$i]."<br>";
}
?>