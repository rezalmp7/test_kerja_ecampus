<?php 
// mengaktifkan session pada php
session_start();

// menghubungkan php dengan koneksi database
include '../config/koneksi.php';

// menangkap data yang dikirim dari form login
$username = $_POST['username'];
$password = $_POST['password'];

$password_admin = md5($_POST['password']);

// menyeleksi data user dengan username dan password yang sesuai
$login_user = mysqli_query($koneksi,"select * from user where username='$username' and password='$password_admin'");
// menghitung jumlah data yang ditemukan
$cek_user = mysqli_num_rows($login_user);

// cek apakah username dan password di temukan pada database
if($cek_user > 0)
{
    $data = mysqli_fetch_assoc($login_user);

    // buat session login dan username
    $_SESSION['pamrh_id_admin'] = $data['id'];
    $_SESSION['pamrh_level'] = "admin";
    // alihkan ke halaman dashboard admin
    $_SESSION['bc_flash_success'] = "Selamat Datang ".$data['nama'];
    header("location:../main.php");
}
else {
    $_SESSION['bc_flash_error'] = "Data User Tidak ditemukan";
    header("location:../index.php");
}
?>