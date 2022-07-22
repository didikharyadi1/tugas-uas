<?php
session_start();
if ($_SESSION['status'] != "sudah_login") {
 //melakukan pengalihan
 header("location:../login/login.php");
}
include "../config/koneksi.php";
$id_pemasok = $_GET['id_pemasok'];
$hapus_data_pemasok = mysqli_query($koneksi, "DELETE FROM tbl_pemasok where
id_pemasok=$id_pemasok");
if ($hapus_data_pemasok) {
 header('location:data_pemasok.php?pesan=Data Berhasil Di hapus');
} else {
 header('location:data_pemasok.php?pesan=Data Gagal Di hapus');
}