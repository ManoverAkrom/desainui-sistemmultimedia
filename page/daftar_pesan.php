<?php
require '../php/functions.php';
$pesan = query("SELECT * FROM pesan2 ORDER BY submit DESC");

// Jika tombol cari diklik menimpa $pesan
if( isset($_POST["cari"]) ) {
  $pesan = cari($_POST["keyword"]);
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Manover's Inbox</title>
  <link rel="shortcut icon" href="../image/icon/ManDe.png" type="image/x-icon">

  <link rel="stylesheet" type="text/css" href="../css/styleDB.css ">
  <link rel="stylesheet" type="text/css" href="css/resp.css ">
</head>

<body>

  <!-- Model BookShelf -->
  <section id="modelBookshelf">
    <div class="book_shelf">
      <h2>Daftar Pesan Masuk dari Database mySQL</h2>

      <!-- Form Pencarian -->
      <section class="search_section">
        <form id="searchBook" action="" method="post">
          <label for="searchBookTitle">Cari pesan :</label>
          <input name="keyword" type="text" placeholder="masukkan keyword pencarian.." autocomplete="off">
          <button id="searchSubmit" type="submit" name="cari">Cari</button>
          <span id="searchSubmit"><a href="daftar_pesan.php">Refresh</a></span>
        </form>
      </section>

      <!-- Tampilkan data buku -->
      <div id="unreadBooks" class="book_list">
        <?php foreach ($pesan as $row) : ?>

          <article class="book_item">
            <h2><?= $row["nama"]; ?></h2>
            <h4>
              <?= $row["email"]; ?> |
              <span><?= $row["submit"]; ?></span>
            </h4>
            <p>" <?= $row["data_pesan"]; ?> "</p>

            <div class="action">
              <a href="../page/edit_pesan.php?id=<?= $row["id"]; ?>" class="green"> Edit </a>
              <a href="../php/hapus.php?id=<?= $row["id"]; ?>" class="red" onclick="return confirm('Yakin untuk menghapus?');"> Hapus </a>
            </div>
          </article>

        <?php endforeach ?>
      </div>
    </div>
  </section>

  <!-- Model Tabel -->
  <section id="easyView">
    <div class="tabelDB">
      <h1>Daftar Pesan Masuk</h1>
      <table border="1" cellpadding="10" cellspacing="0">
        <tr>
          <th>No</th>
          <th>Nama</th>
          <th>Email</th>
          <th>Pesan</th>
          <th>Tanggal</th>
          <th>action</th>
        </tr>

        <?php $i = 1; ?>
        <?php foreach ($pesan as $row) : ?>

          <tr>
            <td><?= $i; ?></td>
            <td><?= $row["nama"]; ?></td>
            <td><?= $row["email"]; ?></td>
            <td><?= $row["data_pesan"]; ?></td>
            <td><?= $row["submit"]; ?></td>
            <td>
              <a href="">edit</a> | <a href="">hapus</a>
            </td>
          </tr>

          <?php $i++; ?>
        <?php endforeach ?>
      </table>
    </div>
  </section>

  <!-- Model Custom -->
  <!-- <section id="superView">

    <div class="dataPesan">
      <div class="headerPesan">
        <h2>Data Pesan Masuk</h2>
        <div class="filter">
          <input type="text" id="filter" name="filter" placeholder="Masukkan kata kunci">
        </div>
        <div class="sort">
          <input type="text" id="sort" name="sort" placeholder="Filter Berdasarkan">
        </div>
      </div>

      <div class="daftarPesan">
        <div class="pesan">
          <h3>Nama</h3>
          <h4>email</h4>
          <p>pesan</p>
        </div>
        <div class="control">
          <input type="checkbox" id="xd">
          <button>Tandai Sudah Baca</button>
          <button>Edit</button>
          <button>Hapus</button>
        </div>
      </div>
    </div>
  </section> -->

  <footer>
    <div class="footer">
      @2023 Copyright by Manover | HTML, CSS, Javascript Native
    </div>
  </footer>

</body>

</html>