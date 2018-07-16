<?php
// menghubungkan mysql dengan php
$server = "localhost";
$user = "root";
$password = "";
$nama_database = "Logistikku";
// menggunakan fungsi "mysqli_connect" dengan parameter (server, user, password, namadb)
$db = mysqli_connect($server, $user, $password, $nama_database);
// lakukan pengecekan bila koneksi gagal terhubung
if( !$db ){
    die("Gagal terhubung dengan database: " . mysqli_connect_error());
}

?>