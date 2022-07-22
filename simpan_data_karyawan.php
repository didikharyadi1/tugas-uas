<?php
session_start();
if ($_SESSION['status'] != "sudah_login") {
 //melakukan pengalihan
 header("location:../login/login.php");
}
include "../config/koneksi.php";
$nama_karyawan = $_POST['nama_karyawan'];
$tlp = $_POST['tlp'];
$insert_data = mysqli_query($koneksi, "INSERT INTO tbl_karyawan
(nama_karyawan,tlp)
values ('$nama_karyawan','$tlp')");
if ($insert_data) {
 header('location:data_karyawan.php?pesan=Data Berhasil Di simpan');
} else {
 header('location:data_karyawan.php?pesan=Data Gagal Di simpan');
}