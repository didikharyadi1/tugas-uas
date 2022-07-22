<?php
session_start();
if ($_SESSION['status'] != "sudah_login") {
 //melakukan pengalihan
 header("location:../login/login.php");
}
include "../config/koneksi.php";
$id_pengerjaan = $_POST['id_pengerjaan'];
$id_karyawan = $_POST['id_karyawan'];
$insert_data = mysqli_query($koneksi, "INSERT INTO tbl_karyawan_proyek
(id_pengerjaan,id_karyawan)
values ('$id_pengerjaan','$id_karyawan')");
if ($insert_data) {
 header('location:data_karyawan_proyek.php?pesan=Data Berhasil Di simpan');
} else {
 header('location:data_karyawan_proyek.php?pesan=Data Gagal Di simpan');
}