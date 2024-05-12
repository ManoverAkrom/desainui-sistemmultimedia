<?php
require "koneksi.php";

// Kirim Database

if (isset($_POST["submit"])) {

  // ambil data dari tiap elemen dalam form
  $nama = htmlspecialchars($_POST["nama"]);
  $email = htmlspecialchars($_POST["email"]);
  $pesan = htmlspecialchars($_POST["pesan"]);

  // querry insert data
  $query = "INSERT INTO `pesan2` (`nama`, `email`, `data_pesan`)
            VALUES
            ('$nama','$email','$pesan')
            ";

  mysqli_query($koneksi, $query);

  // Notifikasi Input Data
  
  if( mysqli_affected_rows($koneksi) > 0)
  {
    echo "
      <script>
        alert('Pesan berhasil terkirim!');
        document.location.href = '..';
      </script>
    ";
  } else {
    echo "
      <script>
        alert('Pesan tidak terkirim!');
        document.location.href = '..';
      </script>" . mysqli_error($koneksi);
  }
}
