<?php
session_start();
if ($_SESSION['status'] != "sudah_login") {
 //melakukan pengalihan
 header("location:../login/login.php");
}
include "../config/koneksi.php";
$id_karyawan = $_POST['id_karyawan'];
$nama_karyawan = $_POST['nama_karyawan'];
$tlp = $_POST['tlp'];
$update_data = mysqli_query($koneksi, "UPDATE tbl_karyawan set
nama_karyawan='$nama_karyawan',tlp='$tlp' where id_karyawan=$id_karyawan");
if ($update_data) {
 header('location:data_karyawan.php?pesan=Data Berhasil Di Ubah');
} else {
 header('location:data_karyawan.php?pesan=Data Gagal Di Ubah');
}