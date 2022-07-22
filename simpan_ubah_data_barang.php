<?php
session_start();
if ($_SESSION['status'] != "sudah_login") {
 //melakukan pengalihan
 header("location:../login/login.php");
}
include "../config/koneksi.php";
$id_barang = $_POST['id_barang'];
$id_pemasok = $_POST['id_pemasok'];
$nama_barang = $_POST['nama_barang'];
$stok = $_POST['stok'];
$update_data = mysqli_query($koneksi, "UPDATE tbl_barang set
nama_barang='$nama_barang',stok='$stok' where id_barang=$id_barang");
if ($update_data) {
 header('location:data_barang.php?pesan=Data Berhasil Di Ubah');
} else {
 header('location:data_barang.php?pesan=Data Gagal Di Ubah');
}