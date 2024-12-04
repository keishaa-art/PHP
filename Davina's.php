<html>
<head>
    <title>biodata</title>
</head>
<body>
    <h1>Masukkan identitas diri<h1>
    <form action = <?php echo $_SERVER['PHP_SELF'];?>method="post">
    <pre>
        Isikan nama   : <input type="text" name="nama"/></td>
        Telepon       : <input type="text" name="telp"/></td>
        Hobi          : <input type="text" name="hobi"/></td>
        Alamat        : <input type="text" name="alamat"/></td>
        Agama         : <input type="text" name="agama"/></td>
        jenis kelamin : <input type="radio" name="jenis kelamin" value="cowok" />Cowok
        jenis kelamin : <input type="radio" name="jenis kelamin" value="cewek" />Cewek</td>
        Negara        : <select name="negara">
                        <option value="indonesia"> indonesia </option>
                        <option value="malaysia"> malaysia </option>
                        <option value="Thailand"> thailand </option>
                        <option value="Filipina"> filipina </option>
</select>
        <input type="submit" value="Tampilkan"/> <input type="reset" value="batalkan"/> <td><tr>
</pre>
</form>

<?php
    $nama = $_POST['nama'];
    $telp = $_POST['telp'];
    $hobi = $_POST['hobi'];
    $alamat = $_POST['alamat'];
    $agama = $_POST['agama'];
    $jenis = $_POST['jenis kelamin'];
    $negara = $_POST['negara'];
    ?>

    <?php
    if (!empty ($nama)){echo "Nama saya : $nama <br>";}
    if (!empty ($telp)){echo "Nomer telpon saya : $telp <br>";}
    if (!empty ($hobi)){echo "Hobi saya : $hobi <br>";}
    if (!empty ($alamat)){echo "Alamat saya : $alamat <br>";}
    if (!empty ($agama)){echo "Agama  saya : $agama <br>";}
    if (!empty ($jenis)){echo "saya : $nama <br>";}
    if (!empty ($negara)){echo "saya orang : $nama <br>";}


    ?>
</body>
</html>