<?php
include 'config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Ambil ID Mitra yang akan dihapus dari form
    $mitraId = $_POST["mitraId"];
    
    // Query untuk menghapus data dari tabel berdasarkan ID Mitra
    $conn = mysqli_connect("localhost", "root", "", "db_pemweb");
    $query = "DELETE FROM mitra WHERE id_mitra = '$mitraId'";
    
    // Eksekusi query
    if (mysqli_query($conn, $query)) {
        echo "Data berhasil dihapus.";
    } else {
        echo "Error: " . $query . "<br>" . mysqli_error($conn);
    }
}
?>
