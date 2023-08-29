<?php 
session_start();

$UN = $_POST['username'];
$PW = $_POST['password'];

$koneksi = new pdo("mysql:host=localhost; dbname=pengaduan-masyarakat","root", "");

$query = $koneksi->query("select * from masyarakat where username='$UN' AND password='$PW' ");

$jumlahBaris = $query->rowCount();

if($jumlahBaris > 0){


    $data = $query->fetch();

    $_SESSION['nik'] = $data['nik'];
    $_SESSION['level'] = 'masyarakat';

header("location:tampilan.php");
}else{
    header("location:login.php");
}


?>