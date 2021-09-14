<?php 
// mengaktifkan session pada php
session_start();

// menghubungkan php dengan koneksi database
include '../config/koneksi.php';

// menangkap data yang dikirim dari form login
$instansi = $_POST['instansi'];
$deskripsi = $_POST['deskripsi'];

mysqli_query($koneksi, "INSERT INTO instansi (instansi, deskripsi) VALUES ('$instansi', '$deskripsi')");
$_SESSION['pamrh_flash_success'] = "Instansi Telah ditambahkan";
header('location:../main.php');

?>