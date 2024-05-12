<?php
require '../php/functions.php';

// ambil data di URL
$id = $_GET["id"];

// query data berdasarkan id
$ubahData = query("SELECT * FROM pesan2 WHERE id = $id")[0];


// Ubah database
// cek tombol submit sudah ditekan
if ( isset($_POST["submit"]) ) {
  

  // Notifikasi Ubah Data
  if ( ubah($_POST) > 0 ) {
    echo "
      <script>
        alert('Pesan berhasil diubah!');
        document.location.href = 'daftar_pesan.php';
      </script>
    ";
  } else {
    echo "
      <script>
        alert('Pesan tidak berubah!');
        document.location.href = 'daftar_pesan.php';
      </script>" . mysqli_error($koneksi);
  }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Edit Pesan</title>
  <link rel="shortcut icon" href="../image/icon/ManDe.png" type="image/x-icon">

  <link rel="stylesheet" type="text/css" href="../css/styleDB.css ">
  <link rel="stylesheet" type="text/css" href="css/resp.css ">
</head>

<body>

  <main>
    <!-- Mengubah Data Terpilih -->
    <section class="input_section">
      <h2>Edit Pesan Terpilih</h2>

      <form id="inputBook" action="" method="post">
        <input type="text" name="id" value="<?= $ubahData["id"]; ?>">

        <div class="input">
          <label for="nama">Nama</label>
          <input type="text" name="nama" id="nama" required value="<?= $ubahData["nama"]; ?>">
        </div>
        <div class="input">
          <label for="inputBookAuthor">Email</label>
          <input id="inputBookAuthor" type="text" name="email" required value="<?= $ubahData["email"]; ?>">
        </div>
        <div class="input">
          <label for="inputBookYear">Pesan</label>
          <input id="inputBookYear" type="text" name="pesan" required value="<?= $ubahData["data_pesan"]; ?>">
        </div>
        <div class="input">
          <label for="inputBookIsComplete">Tanggal Submit</label>
          <input id="inputBookIsComplete" type="text" name="tanggalSubmit" required value="<?= $ubahData["submit"]; ?>">
        </div>
        <button id="bookSubmit" type="submit" name="submit">Ubah Data</button>
      </form>

    </section>

  </main>

  <footer>
    <div class="footer">
      @2023 Copyright by Manover | HTML, CSS, Javascript Native
    </div>
  </footer>
</body>

</html>