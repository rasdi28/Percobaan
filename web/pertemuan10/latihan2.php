<?php

$conf = mysqli_connect("localhost", "root", "", "mahasiswa");
$hasil = mysqli_query($conf, "SELECT *FROM mahasiswa");

//$x = mysqli_fetch_row($hasil); array numerik

//$x = mysqli_fetch_assoc($hasil); array assosiasi
$rows = [];
while ($row = mysqli_fetch_assoc($hasil)) {
  $rows[] = $row;
}

$mahasiswa = $rows;




?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Daftar Mahasiswa</title>
</head>

<body>
  <h3>Daftar Mahasiswa</h3>

  <table border="1" cellpadding="10" cellspacing="0">
    <tr>
      <th>#</th>
      <th>Gambar</th>
      <th>NPM</th>
      <th>Nama</th>
      <th>Email</th>
      <th>Jurusan</th>
      <th> Aksi </th>
    </tr>
    <tr>

      <?php $i = 1;
      foreach ($mahasiswa as $m) : ?>
        <td><?= $i++ ?></td>
        <td><img src="../img/<?= $m['Gambar']; ?>" width="60"></ td>
        <td><?= $m['NPM']; ?></td>
        <td><?= $m['Nama']; ?></td>
        <td><?= $m['Email']; ?></td>
        <td><?= $m['Jurusan']; ?></td>
        <td>
          <a href=""> ubah</a> | <a href="">Hapus </a>
        </td>
    </tr>


  <?php endforeach; ?>
  </table>


</body>

</html>