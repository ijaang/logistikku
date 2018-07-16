<?php

include("config.php");

// cek apakah tombol daftar sudah diklik atau blum?
if(isset($_POST['daftar'])){

    // ambil data dari formulir
    $namabarang = $_POST['namabarang'];
    $asalbarang = $_POST['asalbarang'];
    $tujuanbarang = $_POST['tujuanbarang'];
    $dimensibarang = $_POST['dimensibarang'];
    $beratbarang = $_POST['beratbarang'];
    // buat query
    $sql = "INSERT INTO file_master_barang (namabarang, asalbarang, tujuanbarang, dimensibarang, beratbarang) VALUE ('$namabarang', '$asalbarang', '$tujuanbarang', '$dimensibarang', '$beratbarang')";
    $query = mysqli_query($db, $sql);

    // apakah query simpan berhasil?
    if( $query ) {
        // kalau berhasil alihkan ke halaman index.php dengan status=sukses
        header('Location: index.php?status=sukses');
    } else {
        // kalau gagal alihkan ke halaman indek.php dengan status=gagal
        header('Location: index.php?status=gagal');
    }


} else {
    die("Akses dilarang...");
}

?>