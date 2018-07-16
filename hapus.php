<?php

include("config.php");

if( isset($_GET['kodebarang']) ){

    // ambil id dari query string
    $barang = $_GET['kodebarang'];

    // buat query hapus
    $sql = "DELETE FROM file_master_barang WHERE $kodebarang=kodebarang";
    $barang = mysqli_query($db, $sql);

    // apakah query hapus berhasil?
    if( $barang ){
        header('Location: list-barang.php');
    } else {
        die("gagal menghapus...");
    }

} else {
    die("akses dilarang...");
}

?>