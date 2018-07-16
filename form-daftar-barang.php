<!DOCTYPE html>
<html>
<head>
    <title>Formulir Pendaftaran Barang | Logistik KU</title>
</head>

<body>
    <header>
        <h3>Formulir Pendaftaran Barang</h3>
    </header>

    <form action="proses-pendaftaran.php" method="POST">

        <fieldset>

        
        <p>
            <label for="namabarang">Nama: </label>
            <input type="text" name="namabarang" placeholder="nama barang" />
        </p>
        <p>
            <label for="asalbarang">Asal: </label>
            <input type="text" name="asalbarang"  />
        </p>
        <p>
            <label for="tujuanbarang">Tujuan: </label>
            <input type="text" name="tujuanbarang"  />
        </p>
        <p>
            <label for="dimensibarang">Dimensi: </label>
            <input type="text" name="dimensibarang" placeholder="volume barang (m)" />
        </p>
        <p>
            <label for="beratbarang">Berat: </label>
            <input type="text" name="beratbarang" placeholder="berat barang (KG)" />
        </p>
        <p>
            <input type="submit" value="Daftar" name="daftar" />
        </p>

        </fieldset>

    </form>

    </body>
</html>
