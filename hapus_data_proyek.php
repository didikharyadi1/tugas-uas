<?php
session_start();
if ($_SESSION['status'] != "sudah_login") {
 //melakukan pengalihan
 header("location:../login/login.php");
}
include "../config/koneksi.php";
$id_proyek = $_GET['id_proyek'];
$hapus_data_proyek = mysqli_query($koneksi, "DELETE FROM tbl_proyek where
id_proyek=$id_proyek");
if ($hapus_data_proyek) {
 header('location:data_proyek.php?pesan=Data Berhasil Di hapus');
} else {
 header('location:data_proyek.php?pesan=Data Gagal Di hapus');
}