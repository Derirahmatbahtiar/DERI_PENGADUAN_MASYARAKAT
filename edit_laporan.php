<?php 

$id = $_GET['id'];

$koneksi = new pdo("mysql:host=localhost; dbname=pengaduan-masyarakat","root", "");

$query = $koneksi->query("SELECT * FROM pengaduan WHERE id_pengaduan='$id'");

$data = $query->fetch();
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

<form action="proses_update.php?id=<?= $data['id_pengaduan']?>" method="POST">
    <div class="mb-3">
        <label for="exampleFormControlTextarea1" class="form-label">isi pengaduan</label>
        <textarea class="form-control" type="text" name="isi_laporan" required ><?php echo $data['isi_laporan']?></textarea>
    </div>

    <button class="btn btn-primary" type="submit">update</button>

    </form>
</div>
</body>
</html>