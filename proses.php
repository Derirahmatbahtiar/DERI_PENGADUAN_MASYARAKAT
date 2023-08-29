<?php 
session_start();
include "navbar.php";

//isi data
$isi = $_POST['isi_laporan'];
$tanggal = date('y-m-d');

//foto atau files
$nama_foto = $_FILES['foto']['name'];
$asal_foto = $_FILES['foto']['tmp_name'];
$nik = $_SESSION['nik'];

//koneksi database
$koneksi = new PDO("mysql:host=localhost; dbname=pengaduan-masyarakat","root", "");

//query insert
$koneksi->query("insert into pengaduan values('', '$tanggal', '$nik', '$isi', '$nama_foto', '0')" );

move_uploaded_file($asal_foto, "image/$nama_foto");

header("location:tampilan.php");

?>