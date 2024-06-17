<?php
include 'includes/db_connect.php';

$id = $_POST['id'];
$nama_barang = $_POST['nama_barang'];
$jenis_barang = $_POST['jenis_barang'];
$jumlah_barang = $_POST['jumlah_barang'];
$lokasi_gudang = $_POST['lokasi_gudang'];
$harga_barang = $_POST['harga_barang'];

$sql = "UPDATE Barang SET nama_barang='$nama_barang', jenis_barang='$jenis_barang', jumlah_barang=$jumlah_barang, lokasi_gudang='$lokasi_gudang', harga_barang=$harga_barang WHERE ID=$id";

if ($koneksi->query($sql) === TRUE) {
    header("Location: index.php");
    exit();
} else {
    echo "Error: " . $sql . "<br>" . $koneksi->error;
}

$koneksi->close();
?>
