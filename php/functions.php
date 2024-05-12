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

// Mengambil Data dari Database
function query($query)
{
  global $koneksi;

  $result = mysqli_query($koneksi, $query);
  $rows = [];
  while ( $row = mysqli_fetch_assoc($result) )
  {
    $rows[] = $row;
  }
  return $rows;
}

// Menghapus Data
function hapus($id) {
  global $koneksi;
  mysqli_query($koneksi, "DELETE FROM pesan2 WHERE id = $id");
  return mysqli_affected_rows($koneksi);
}

// Mengedit Data terpilih
function ubah($data) {
  global $koneksi;

  // ambil data dari tiap elemen dalam form
  $id = $data["id"];
  $nama = htmlspecialchars($data["nama"]);
  $email = htmlspecialchars($data["email"]);
  $pesan = htmlspecialchars($data["pesan"]);
  $submit = htmlspecialchars($data["tanggalSubmit"]);

  // querry insert data
  $query = "UPDATE pesan2 SET
              nama = '$nama',
              email = '$email',
              data_pesan = '$pesan',
              submit = '$submit'
            WHERE id = $id
             ";

  mysqli_query($koneksi, $query);

  return mysqli_affected_rows($koneksi);
}

// Fungsi Pencarian
function cari($keyword) {
  $query = "SELECT * FROM pesan2
            WHERE
            nama LIKE '%$keyword%' OR
            email LIKE '%$keyword%' OR
            data_pesan LIKE '%$keyword%'
            ";
  return query($query);
}