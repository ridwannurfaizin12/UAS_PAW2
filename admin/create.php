<?php
//include koneksi database

include './config.php';

// Menangkap data yang di kirim dari form
$nama = $_POST['nama'];
$no_ktp = $_POST['no_ktp'];
$no_telp = $_POST['no_telp'];
$tahun_masuk = $_POST['tahun_masuk'];
$massa_kerja= $_POST['massa_kerja'];

// Menginput data ke database
mysqli_query($koneksi, "insert into karyawan values('', '$nama', '$no_ktp', '$no_telpon','$tahun_masuk','$massa_kerja')");
// Mengembalikan ke halaman awal
header("location:./index.php");