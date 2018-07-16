// kita mengimpor koneksi dari database(config.php) dengan perintah "include"
<?php include("config.php"); 
?>

<!DOCTYPE html>
<html>
<head>
    <title>List Barang di Logistikku</title>
</head>

<body>
    <header>
        <h3>Barang di Logistikku</h3>
    </header>

    <nav>
        <a href="form-daftar-barang.php">[+] Tambah Baru</a>
    </nav>

    <br>

    <table border="1">
    <thead>
        <tr>
            <th>Kode Barang</th>
            <th>Nama Barang</th>
            <th>Asal Barang</th>
            <th>Tujuan Barang</th>
            <th>Dimensi Barang</th>
            <th>Berat Barang</th>
            <th>Tindakan</th>
        </tr>
    </thead>
    <tbody>

        <?php
        // pengambilan data barang
        $sql = "SELECT * FROM file_master_barang";
        $query = mysqli_query($db, $sql);
        // diubah menjadi array menggunakan fungsi "mysqli_fetch_array"
        while($barang = mysqli_fetch_array($query)){
            echo "<tr>";

            echo "<td>".$barang['kodebarang']."</td>";
            echo "<td>".$barang['namabarang']."</td>";
            echo "<td>".$barang['asalbarang']."</td>";
            echo "<td>".$barang['tujuanbarang']."</td>";
            echo "<td>".$barang['dimensibarang']."</td>";
            echo "<td>".$barang['beratbarang']."</td>";

            echo "<td>";
            echo "<a href='form-edit.php?kodebarang=".$barang['kodebarang']."'>Edit</a> | ";
            echo "<a href='hapus.php?kodebarang=".$barang['kodebarang']."'>Hapus</a>";
            echo "</td>";

            echo "</tr>";
        }
        ?>

    </tbody>
    </table>

    <p>Total: <?php echo mysqli_num_rows($query) ?></p>

    </body>
</html>