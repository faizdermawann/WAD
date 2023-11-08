<?php
$conn = mysqli_connect("localhost:3308","root","","week7");

if (isset($_POST["submit"])){   
    if (tambah($_POST)> 0){
        echo "
            <script>
            alert('Sukses!');
            document.location.href = 'index.php';
            </script>
        ";
    } else {
        echo "
        <script>
        alert('Coba lagi masih gagal!');
        document.location.href = 'index.php';
        </script>
        ";
    }
};

?>


<!DOCTYPE html>
<head>
    <title>Tambah Data Toko Junesoka</title>
</head>
<body>
    <h1>Tambah Data Barang</h1>
    <form action="" method="post">
        <ul>
            <li>
                <label for="gambar">Gambar  :</label><br>
                <input type="text" name="gambar" id="gambar"><br>
            </li>
            <li>
                <label for="namabarang">Nama Barang :</label><br>
                <input type="text" name="namabarang" id="namabarang">
            </li>
            <li>
                <label for="kodebarang">Kode Barang :</label><br>
                <input type="text" name="kodebarang" id="kodebarang">
            </li>
            <li>
                <label for="hargabarang">Harga  :</label><br>
                <input type="text" name="hargabarang" id="hargabarang">
            </li>
            <br>
            <li>
                    <button type="submit" name="submit">Ubah Data</button>
            </li>
        </ul>
    </form>
</body>
</html>