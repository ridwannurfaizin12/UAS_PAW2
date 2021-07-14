<?php

//koneksi database merupakan password phpmyadmin
$koneksi = mysqli_connect("localhost", "root", "", "crud_karyawan");

//cek koneksi database apabila error
if (mysqli_connect_error()) {
    echo "Koneksi database gagal: " . mysqli_connect_error();
}

?>