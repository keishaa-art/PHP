<html>
    <head>
    <title> Form Bio data </title>
</head>
<body>
    <h1> Masukan Identitas diri </h1>
    <form action ="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
    <pre>
    Isikan nama     : <input type="text" name="nama"  /> </td>
    Isikan no.tlp   : <input type="text" name="telp"  /> </td>
    Isikan alamat   : <textarea name="alamat" row="5" cols="40" /> </textarea><br>
    Isikan jk       : <input type="radio" name="jk" value="pria" /> pria
                      <input type="radio" name="jk" value="perempuan" /> perempuan </td>
    Isikan hobi     : <input type="checkbox" name="hobi" value="Tidur" /> Tidur
                      <input type="checkbox" name="hobi" value="Makan" /> Makan 
                      <input type="checkbox" name="hobi" value="Main Hp" /> Main Hp </td>
    Isikan Agama    : <select name="agama">
                      <option value="Islam"> Islam </option>
                      <option value="Protestan"> Protestan </option>  
                      <option value="Hindu"> Hindu </option> 
                      <option value="Buddha"> Buddha </option>  
                      <option value="Katholik"> Katholik </option>     
    <input type="submit" value="Tampilkan"/> <input type="reset" value="batalkan" /> </td><tr>
</pre>
</form>

<?php
$nama = $_POST['nama'];
$telp = $_POST['telp'];
$alamat = $_POST['alamat'];
$jk = $_POST['jk'];
$hobi = $_POST['hobi'];
$agama = $_POST['agama'];
?>

<?php
if (!empty ($nama)){echo " Nama saya : $nama <br>";}
if (!empty ($telp)){echo " No Telepon saya : $telp <br>";}
if (!empty ($alamat)){echo " Alamat Saya : $alamat <br>";}
if (!empty ($jk)){echo " JK Saya : $jk <br>";}
if (!empty ($hobi)){echo " Hobi Saya : $hobi <br>";}
if (!empty ($agama)){echo " Agama Saya : $agama <br>";}
?>
</body>
</html>