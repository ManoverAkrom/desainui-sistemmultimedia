<?php
// Membuat Koneksi dengan Database

$host = "localhost";
$user = "root";
$pass = "";
$db = "akrom_desain_ui_db";

$koneksi = mysqli_connect($host,$user,$pass,$db);

// Cek Koneksi
// if(!$koneksi){
//   die("Gagal Terkoneksi");
// } else {
//   echo "Koneksi Berhasil";
// }
?>