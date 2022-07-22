<?php
session_start();
if ($_SESSION['status'] != "sudah_login") {
 //melakukan pengalihan
 header("location:../login/login.php");
}
include "../config/koneksi.php";
$id_pengerjaan = $_GET['id_pengerjaan'];
$hapus_data_pengerjaan_proyek = mysqli_query($koneksi, "DELETE FROM tbl_pengerjaan_proyek where
id_pengerjaan=$id_pengerjaan");
if ($hapus_data_pengerjaan_proyek) {
 header('location:data_pengerjaan_proyek.php?pesan=Data Berhasil Di hapus');
} else {
 header('location:data_pengerjaan_proyek.php?pesan=Data Gagal Di hapus');
}