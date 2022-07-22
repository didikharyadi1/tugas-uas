<?php
session_start();
if ($_SESSION['status'] != "sudah_login") {
 //melakukan pengalihan
 header("location:../login/login.php");
}
include "../config/koneksi.php";
$id_barang = $_GET['id_barang'];
$hapus_data_barang = mysqli_query($koneksi, "DELETE FROM tbl_barang where
id_barang=$id_barang");
if ($hapus_data_barang) {
 header('location:data_barang.php?pesan=Data Berhasil Di hapus');
} else {
 header('location:data_barang.php?pesan=Data Gagal Di hapus');
}