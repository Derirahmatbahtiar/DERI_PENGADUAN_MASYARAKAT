<?php 
include "navbar.php";

$id = $_GET['id'];

$koneksi = new pdo("mysql:host=localhost; dbname=pengaduan-masyarakat","root", "");
$query = $koneksi->query("DELETE FROM pengaduan WHERE id_pengaduan='$id'");

    header('location:tampilan.php');


?>