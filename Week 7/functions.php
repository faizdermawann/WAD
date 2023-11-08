<?php 

$conn = mysqli_connect('localhost:3308', 'root', '', 'week7'); 

function query($query) {
    global $conn;
    $result = mysqli_query($conn,$query);
    $rows = [];
    while($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
return $rows;
}

function tambah($data) {
    global $conn;
    $gambar = $data["gambar"];
    $namabarang = $data["namabarang"];
    $kodebarang = $data["kodebarang"];
    $hargabarang = $data["hargabarang"];
    

    $query = "INSERT INTO week7
        VALUES
        ('','$namabarang', '$kodebarang', '$hargabarang','$gambar')
        ";
    mysqli_query($conn, $query); 

    return mysqli_affected_rows($conn);
}

function hapus($no) {
    global $conn;
    mysqli_query($conn, "DELETE FROM week7 WHERE no = $no");
    return mysqli_affected_rows($conn);
}

function ubah($data) {
    global $conn;

    $no = $data["no"];
    $gambarbarang = $data["gambar"];
    $namabarang = $data["namabarang"];
    $kodebarang = $data["kodebarang"];
    $hargabarang = $data["hargabarang"];

    $query = "UPDATE week7 SET
            gambar = '$gambar'
            namabarang = '$namabarang',
            kodebarang = '$kodebarang',
            hargabarang = '$hargabarang',
            WHERE no = $no
            ";
    mysqli_query($conn, $query); 

    return mysqli_affected_rows($conn);   
}
?>