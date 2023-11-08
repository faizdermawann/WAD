<?php   
require 'functions.php';
$resto = query("SELECT * FROM week7");
?>

<!DOCTYPE html>
<html lang="en">
    <head><title>WEEK 7 M FAIZUL ANWAR DERMAWAN</title></head>
    <body>
        <h1>Daftar Barang Toko Junesoka</h1>
        <a href="tambah.php">Tambah Data Barang</a>
        <br><br>
        <table border="1" cellpadding="10" cellspacing="0">
            <tr>
                <th>No.</th>
                <th>Gambar</th>
                <th>Nama Barang</th>
                <th>Kode Barang</th>
                <th>Harga Barang</th>
                <th>Aksi</th>
</tr>
<?php $i = 1;
        foreach($resto as $row) : ?>
        <tr>
            <td><?= $i ?></td>
            <td><img src="img/<?= $row["gambar"]; ?>" width="50"></td>
            <td><?= $row["namabarang"]; ?></td>
            <td><?= $row["kodebarang"]; ?></td>
            <td><?= $row["hargabarang"]; ?></td>
            <td>
                <a href="ubah.php?no=<?= $row["no"]; ?>" >Ubah</a> |
                <a href="hapus.php?no=<?= $row["no"]; ?>" onclick="
                return confirm('yakin');">Hapus</a>
            </td>
        </tr>
        <?php $i++; ?>
        <?php endforeach; ?>
    </table>
</body>