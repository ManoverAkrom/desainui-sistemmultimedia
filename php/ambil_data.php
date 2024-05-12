<?php
require "koneksi.php";

// Menampilkan Data

$no = 1;
$ambilData = mysqli_query($koneksi, "SELECT * FROM pesan2 ORDER BY submit DESC");

while ($tampil = mysqli_fetch_assoc($ambilData))
{
  echo 
  "
  <tr>
    <td>$no</td>
    <td>$tampil[nama]</td>
    <td>$tampil[email]</td>
    <td>$tampil[data_pesan]</td>
    <td>$tampil[submit]</td>
    <td>
    edit | hapus
    </td>
  </tr>
  ";
  $no++;
}

// <div class="book_shelf">
//     <h2>Daftar Pesan Masuk dari Database mySQL</h2>

//     <div id="unreadBooks" class="book_list">
//       <article class="book_item">
//         <h3>
//             $no
//             <span>$tampil[nama]</span>
//         </h3>
//         <h4>
//             $tampil[email] | 
//             <span>$tampil[submit]</span>
//         </h4>
//         <p>Tahun: 2002</p>
//         <p>$tampil[data_pesan]</p>

//         <div class="action">
//           <button class="green">selesai di Baca</button>
//           <button class="red">Hapus buku</button>
//         </div>
//       </article>

//     </div>
//   </div>  
  
?>