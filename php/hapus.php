<?php
require '../php/functions.php';

$id = $_GET["id"];

if (hapus($id) > 0) {
  echo "
  <script>
    alert('Data Telah terhapus!');
    document.location.href = '../page/daftar_pesan.php';
  </script>
  ";
} else {
  echo "
  <script>
    alert('Galat, Data Belum Terhapus! Periksa Kembali Kodenya');
    document.location.href = '../page/daftar_pesan.php';
  </script>" . mysqli_error($conn);
}
