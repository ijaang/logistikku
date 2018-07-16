<!DOCTYPE html>
<html>
<head>
    <title>Pendaftaran Barang di Logistikku</title>
</head>

<body>
    <header>
        <h3>Pendaftaran Barang</h3>
        <h1>Logistikku</h1>
    </header>

    <h4>Menu</h4>
    <nav>
    <?php if(isset($_GET['status'])): ?>
    <p>
        <?php
            if($_GET['status'] == 'sukses'){
                echo "Pendaftaran barang baru berhasil!";
            } else {
                echo "Pendaftaran gagal!";
            }
        ?>
    </p>
<?php endif; ?>
        <ul>
            <li><a href="form-daftar-barang.php">Daftar Baru</a></li>
            <li><a href="list-barang.php">Cek Barang</a></li>
        </ul>
    </nav>

    </body>
</html>