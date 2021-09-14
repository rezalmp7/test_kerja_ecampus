<?php 
// mengaktifkan session pada php
session_start();

// menghubungkan php dengan koneksi database
include '../config/koneksi.php';

// menangkap data yang dikirim dari form login
$instansi = $_POST['instansi'];
$deskripsi = $_POST['deskripsi'];
$id = $_POST['id'];

mysqli_query($koneksi, "UPDATE instansi SET instansi='$instansi', deskripsi='$deskripsi' WHERE id='$id'");
$_SESSION['pamrh_flash_success'] = "Instansi Telah diedit";
header('location:../main.php');

?>

