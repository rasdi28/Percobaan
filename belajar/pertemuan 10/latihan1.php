<?php 
  //koneksi database
  $conf = mysqli_connect ('localhost','root','','15120');

  // query isi tabel
  $result = mysqli_query ($conf,"SELECT * FROM MAHASISWA");

  //ubah data kedalam array
 var_dump($result);

  //tampung ke variable

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
      <th> Jurusan </th>
      <th> Aksi </th>
    </tr>
    <td>1</td>
    <td> <img src="img/Capture.PNG" ></td>
    <td> 15120 </td>
    <td>rasdi</td>
    <td> rasdi@gmail.com </td>
    <td> Teknik Informatika</td>
    <td> 
    <a href= ""> ubah </a> | <a href = ""> Delete </a>
    </td>
  </table>

</body>

</html>