<?php
session_start();


if(!isset($_SESSION['nik'])){
  header('location:login.php');
}


//PDO
$koneksi = new PDO("mysql:host=localhost; dbname=pengaduan-masyarakat","root", "");
$nik = $_SESSION['nik'];
 
   // echo $nik;//
    $query = $koneksi->query("select * from pengaduan where nik='$nik'");
    $data = $query->fetchAll();

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="bs/css/bootstrap.min.css">
</head>
<body>

  <?php include "navbar.php" ?>

    <div class="container">
    <br>
    <h3 style="text-align: center;">SELAMAT DATANG DI PENGADUAN MASYARAKAT</h3>
    <br>

    <table class="table">
      <thead>
        <tr>
          <th scope="col">id</th>
             <th scope="col">tanggal</th>
                <th scope="col">nik</th>
                <th scope="col">isi laporan</th>
             <th scope="col">bukti foto</th>
          <th scope="col">status</th>
          <th scope="col">edit pengaduan anda</th>
        </tr>

      <?php foreach($data as $pengaduan){?>

        <tr>

      <td><?= $pengaduan["id_pengaduan"]?></td>
      <td><?= $pengaduan["tgl_pengaduan"]?></td>
      <td><?= $pengaduan["nik"]?></td>
      <td><?= $pengaduan["isi_laporan"]?></td>
      <td><img style="width: 150px; height:auto;" src="image/<?= $pengaduan['foto']?>"></td>
      <td><?= $pengaduan["status"]?></td>
      <td><a href="edit_laporan.php?id=<?= $pengaduan['id_pengaduan']?>"><button type="button" class="btn btn-outline-info">update</button></a>
      <a href="proses_delete.php?id=<?= $pengaduan['id_pengaduan']?>"><button type="button" class="btn btn-outline-danger">delete</button></td></a>
 

    </tr>
    <?php }?>

      
      </thead>
    </table>
  </div>
</body>
</html>