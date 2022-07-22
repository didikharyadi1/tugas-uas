<?php
session_start();
if ($_SESSION['status'] != "sudah_login") {
 //melakukan pengalihan
 header("location:../login/login.php");
}
include "../config/koneksi.php";
$id_karyawan = $_GET['id_karyawan'];
$hapus_data_karyawan = mysqli_query($koneksi, "DELETE FROM tbl_karyawan where
id_karyawan=$id_karyawan");
if ($hapus_data_karyawan) {
 header('location:data_karyawan.php?pesan=Data Berhasil Di hapus');
} else {
 header('location:data_karyawan.php?pesan=Data Gagal Di hapus');
}