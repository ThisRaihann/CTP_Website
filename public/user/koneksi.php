<?php
$host="localhost";
$username="root";
$password="";
$namaDB="db_pemweb";
$mysqli = new mysqli($host, $username, $password, $namaDB);

if($mysqli -> connect_errno){
    echo "Failed to connect to MySql : " . $mysqli -> connect_error;
    exit();
} else {
    echo "";
}
?>