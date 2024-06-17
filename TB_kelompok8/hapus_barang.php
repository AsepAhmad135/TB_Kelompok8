<?php
include 'includes/db_connect.php';

$id = $_GET['id'];
$sql = "DELETE FROM Barang WHERE ID=$id";

if ($koneksi->query($sql) === TRUE) {
    header("Location: index.php");
    exit();
} else {
    echo "Error: " . $sql . "<br>" . $koneksi->error;
}

$koneksi->close();
?>
