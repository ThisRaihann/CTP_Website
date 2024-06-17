<?php
include 'config.php';

$conn = mysqli_connect("localhost", "root", "", "db_pemweb");
$query = "SELECT * FROM mitra";
$result = mysqli_query($conn, $query);

// Perulangan untuk menampilkan data dari hasil query
while ($row = mysqli_fetch_assoc($result)) {
    echo "<tr>";
    echo "<td>" . $row['id_mitra'] . "</td>";
    echo "<td>" . $row['nama'] . "</td>";
    echo "<td>" . $row['alamat'] . "</td>";
    echo "<td>" . $row['nomor'] . "</td>";
    echo "</tr>";
}
?>
