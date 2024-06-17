<?php
include 'config.php';

// Menerima data dari form
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Validasi input jika diperlukan
    $mitraId = $_POST["mitraId"];
    $nama = $_POST["nama"];
    $alamat = $_POST["alamat"];
    $nomor = $_POST["nomor"];
    
    // Menggunakan ID Mitra untuk mengupdate database
    $sql = "UPDATE mitra SET nama = '$nama', alamat = '$alamat', nomor = '$nomor' WHERE id_mitra = '$mitraId'";
    
    // Eksekusi query update
    if (mysqli_query($conn, $sql)) {
        echo "Data berhasil diupdate";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}
?>
