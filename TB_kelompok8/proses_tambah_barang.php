<?php
include 'includes/db_connect.php';

$nama_barang = $_POST['nama_barang'];
$jenis_barang = $_POST['jenis_barang'];
$jumlah_barang = $_POST['jumlah_barang'];
$lokasi_gudang = $_POST['lokasi_gudang'];
$harga_barang = $_POST['harga_barang'];

$sql = "INSERT INTO Barang (nama_barang, jenis_barang, jumlah_barang, lokasi_gudang, harga_barang) 
        VALUES ('$nama_barang', '$jenis_barang', $jumlah_barang, '$lokasi_gudang', $harga_barang)";

if ($koneksi->query($sql) === TRUE) {
    header("Location: index.php");
    exit();
} else {
    echo "Error: " . $sql . "<br>" . $koneksi->error;
}

$koneksi->close();
?>
