<?php include 'includes/db_connect.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Pencatatan Data Barang</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <h1>Daftar Barang</h1>

    <a href="tambah_barang.php">Tambah Barang</a>

    <table>
        <tr>
            <th>Nama Barang</th>
            <th>Jenis Barang</th>
            <th>Jumlah</th>
            <th>Lokasi Gudang</th>
            <th>Harga</th>
            <th>Aksi</th>
        </tr>

        <?php
        $sql = "SELECT * FROM Barang";
        $result = $koneksi->query($sql);

        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>".$row['nama_barang']."</td>";
                echo "<td>".$row['jenis_barang']."</td>";
                echo "<td>".$row['jumlah_barang']."</td>";
                echo "<td>".$row['lokasi_gudang']."</td>";
                echo "<td>".$row['harga_barang']."</td>";
                echo "<td><a href='edit_barang.php?id=".$row['ID']."'>Edit</a> | <a href='hapus_barang.php?id=".$row['ID']."'>Hapus</a></td>";
                echo "</tr>";
            }
        } else {
            echo "<tr><td colspan='6'>Tidak ada barang.</td></tr>";
        }
        ?>

    </table>

</body>
</html>

<?php $koneksi->close(); ?>
