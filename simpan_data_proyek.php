<?php
session_start();
if ($_SESSION['status'] != "sudah_login") {
 //melakukan pengalihan
 header("location:../login/login.php");
}
include "../config/koneksi.php";
$nama_proyek = $_POST['nama_proyek'];
$dana_proyek = $_POST['dana_proyek'];
$tgl_proyek = $_POST['tgl_proyek'];
$insert_data = mysqli_query($koneksi, "INSERT INTO tbl_proyek
(nama_proyek,dana_proyek,tgl_proyek)
values ('$nama_proyek','$dana_proyek','$tgl_proyek')");
if ($insert_data) {
 header('location:data_proyek.php?pesan=Data Berhasil Di simpan');
} else {
 header('location:data_proyek.php?pesan=Data Gagal Di simpan');
}