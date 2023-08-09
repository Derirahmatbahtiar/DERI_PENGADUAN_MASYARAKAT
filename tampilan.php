<?php

//PDO
$koneksi = new PDO("mysql:host=localhost; dbname=pengaduan-masyarakat","root", "");

$query = $koneksi->query("select * from pengaduan");
$data = $query->fetchALL();


//if($koneksi){
  //echo "koneksi berhasil";
//}else{
  //echo "koneksi gagal";
//}

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

    <table class="table">
      <thead>
        <tr>
          <th scope="col">id</th>
          <th scope="col">tanggal</th>
          <th scope="col">nik</th>
          <th scope="col">isi laporan</th>
          <th scope="col">foto</th>
          <th scope="col">status</th>
        </tr>

      <?php foreach($data as $pengaduan){?>

        <tr>
      <th scope="row">1</th>
      <td><?= $pengaduan["tgl_pengaduan"]?></td>
      <td><?= $pengaduan["nik"]?></td>
      <td><?= $pengaduan["isi_laporan"]?></td>

    </tr>
    <?php }?>

      
      </thead>
    </table>
  </div>
</body>
</html>