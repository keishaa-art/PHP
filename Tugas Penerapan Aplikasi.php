<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Penerapan Aplikasi</title>
</head>
<body>
   <h1>Gaji Karyawan</h1>
   <form action ="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
   <pre>
   Gaji Jabatan : <input type="number" name="Gaji Jabatan"></td>
   </pre>
   </form>

<?php
$manager : 5000000;
$marketing : 4000000;
$hrd : 4500000;
$it : 4000000;
?>

<?php
$Gaji_Jabatan = $_POST['Gaji Jabatan']; 
?>

<?php
if (!empty ($Gaji_Jabatan)){echo " Gaji Jabatan : $Gaji_Jabatan <br>";}
?>a

</body>
</html>