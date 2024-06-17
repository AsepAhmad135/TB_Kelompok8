<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "data";

// Buat koneksi
$koneksi = new mysqli($servername, $username, $password, $dbname);

// Cek koneksi
if ($koneksi->connect_error) {
    die("Koneksi gagal: " . $koneksi->connect_error);
}
?>
