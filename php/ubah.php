<?php
require '../php/functions.php';

// ambil data di URL
$id = $GET["id"];

// query data berdasarkan id
$pesan = query("SELECT * FROM pesan2 WHERE id = $id");


// Ubah database
if (isset($_POST["submit"])) {
  

  // Notifikasi Input Data
  if ( ubah($_POST) > 0 ) {
    echo "
      <script>
        alert('Pesan berhasil terkirim!');
        document.location.href = '..';
      </script>
    ";
  } else {
    echo "
      <script>
        alert('Pesan berhasil terkirim!');
        document.location.href = '..';
      </script>" . mysqli_error($koneksi);
  }
}

?>