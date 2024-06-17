<?php
include 'includes/db_connect.php';

$id = $_GET['id'];
$sql = "SELECT * FROM Barang WHERE ID=$id";
$result = $koneksi->query($sql);
$row = $result->fetch_assoc();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Edit Barang</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <h1>Edit Barang</h1>
    <form action="proses_edit_barang.php" method="post">
        <input type="hidden" name="id" value="<?php echo $row['ID']; ?>">
        
        <label for="nama_barang">Nama Barang:</label><br>
        <input type="text" id="nama_barang" name="nama_barang" value="<?php echo $row['nama_barang']; ?>" required><br>

        <label for="jenis_barang">Jenis Barang:</label><br>
        <input type="text" id="jenis_barang" name="jenis_barang" value="<?php echo $row['jenis_barang']; ?>"><br>

        <label for="jumlah_barang">Jumlah:</label><br>
        <input type="number" id="jumlah_barang" name="jumlah_barang" value="<?php echo $row['jumlah_barang']; ?>" required><br>

        <label for="lokasi_gudang">Lokasi Gudang:</label><br>
        <input type="text" id="lokasi_gudang" name="lokasi_gudang" value="<?php echo $row['lokasi_gudang']; ?>"><br>

        <label for="harga_barang">Harga:</label><br>
        <input type="number" id="harga_barang" name="harga_barang" value="<?php echo $row['harga_barang']; ?>" step="0.01" required><br>

        <input type="submit" value="Simpan">
    </form>
</body>
</html>

<?php $koneksi->close(); ?>
