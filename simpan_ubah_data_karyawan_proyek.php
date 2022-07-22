<?php
session_start();
if ($_SESSION['status'] != "sudah_login") {
 //melakukan pengalihan
 header("location:../login/login.php");
}
include "../config/koneksi.php";
$id_pengerjaan = $_POST['id_pengerjaan'];
$id_karyawan = $_POST['id_karyawan'];
$update_data = mysqli_query($koneksi, "UPDATE tbl_karyawan_proyek set
id_karyawan='$id_karyawan' where id_pengerjaan=$id_pengerjaan");
if ($update_data) {
 header('location:data_karyawan_proyek.php?pesan=Data Berhasil Di Ubah');
} else {
 header('location:data_karyawan_proyek.php?pesan=Data Gagal Di Ubah');
}