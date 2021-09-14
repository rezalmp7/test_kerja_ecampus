<?php 
// mengaktifkan session pada php
session_start();

// menghubungkan php dengan koneksi database
include '../config/koneksi.php';

$id_instansi = $_GET['id'];
mysqli_query($koneksi, "DELETE FROM instansi WHERE id = '$id_instansi'");
$_SESSION['pamrh_flash_success'] = "Akun Berhasil di hapus";
header('location:../main.php');

?>

