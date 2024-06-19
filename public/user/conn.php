<?php
session_start();
$koneksi = mysqli_connect("localhost", "root", "", "db_pemweb");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = mysqli_real_escape_string($koneksi, $_POST['email']);
    $password = mysqli_real_escape_string($koneksi, $_POST['password']);

    $query = "SELECT * FROM akun WHERE email='$email' AND password='$password'";
    $result = mysqli_query($koneksi, $query);
    $row = mysqli_fetch_assoc($result);

    if (mysqli_num_rows($result) == 1) {
        $_SESSION['email'] = $email;
        if ($row['password'] == 'admin') {
            header("Location: ../dasboard_admin/index.php");
        } else {
            header("Location: beranda.php");
        }
    } else {
        echo "Username or Password is incorrect.";
    }
}
?>
