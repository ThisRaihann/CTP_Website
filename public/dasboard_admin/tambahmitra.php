<?php
include 'config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $nomor = $_POST['nomor'];

    $sql = "INSERT INTO mitra (nama, alamat, nomor) VALUES ('$nama', '$alamat', '$nomor')";

    if ($conn->query($sql) === TRUE) {
        echo "Mitra baru berhasil ditambahkan";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>
