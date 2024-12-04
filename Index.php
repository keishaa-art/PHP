<?php 
$output = '';
$input  = ''; 
if (!empty($_POST)) {
    $input = $_POST['command'];
    $output = 'Nama kamu adalah '.$input;
} 
?>
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale-1.0">
   <title>Aplikasi Sederhana Input Outut</title>
 </head>
<body>
   <form action="" method="post">
         <label for= "command">Siapa Nama Kamu ?</label><br>
         <input type="text" name="command"><br>
         <input type="submit" value="Kirim">
   </form>
   <form action="" method="post">
         <label for= "command">kelas ?<label><br>
         <input type="text" kelas="command"><br>
         <input type="sumbit" value="kirim">
   </form>
   <form action="" method="post>
         <label for= "command">Alamat ?<label><br>
         <input type="text" alamat="command"><br>
         <input type="sumbit" value="command">
  </form>
<br>
   <?php echo $output ?>
</body> 
</html>