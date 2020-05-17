<?php 
// mengaktifkan session php
session_start();

// menghubungkan dengan koneksi
include 'koneksi.php';

// menangkap data yang dikirim dari form
$username = $_POST['username'];
$password = $_POST['password'];

// menyeleksi data admin dengan username dan password yang sesuai
$data = mysqli_query($koneksi,"select * from tb_user where username='$username' and password='$password'");

// menghitung jumlah data yang ditemukan
$row = mysqli_fetch_assoc($data);

if($row['hak'] == 1){
	$_SESSION['username'] = $username;
	$_SESSION['status'] = "login";
	header("location:admin/index.php");
}else if($row['hak'] == 2){
	$_SESSION['username'] = $username;
	$_SESSION['status'] = "login";
	header("location:operator/index.php");
}else{
	header("location:index.php?pesan=gagal");
}
?>