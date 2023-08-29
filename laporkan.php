<?php 

$koneksi = new PDO("mysql:host=localhost; dbname=pengaduan-masyarakat","root", "");


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

    <?php include "navbar.php"?>

    <br>

<div class="container">
    <br>
    <h3 style="text-align: center;">AJUKAN PENGADUAN ANDA</h3>
    <br>

    <form action="proses.php" method="POST" enctype="multipart/form-data">
        <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label">isi laporan</label>
            <input class="form-control" type="text" name="isi_laporan" placeholder="masukan pengaduan" aria-label="default input example">
        </div>

        <div class="mb-3">
            <label for="formFile" class="form-label" >masukan foto</label>
            <input class="form-control" type="file" id="formFile" name="foto" required>
        </div>

        <button class="btn btn-primary" type="submit">update</button>

        </form>
    </div>
</body>
</html>