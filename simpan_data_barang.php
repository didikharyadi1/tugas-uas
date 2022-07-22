<?php
session_start();
if ($_SESSION['status'] != "sudah_login") {
 //melakukan pengalihan
 header("location:../login/login.php");
}
include "../config/koneksi.php";
$nama_barang = $_POST['nama_barang'];
$stok = $_POST['stok'];
$insert_data = mysqli_query($koneksi, "INSERT INTO tbl_barang
(nama_barang,stok)
values ('$nama_barang','$stok')");
if ($insert_data) {
 header('location:data_barang.php?pesan=Data Berhasil Di simpan');
} else {
 header('location:data_barang.php?pesan=Data Gagal Di simpan');
}