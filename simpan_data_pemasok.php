<?php
session_start();
if ($_SESSION['status'] != "sudah_login") {
 //melakukan pengalihan
 header("location:../login/login.php");
}
include "../config/koneksi.php";
$nama_pemasok = $_POST['nama_pemasok'];
$alamat_pemasok = $_POST['alamat_pemasok'];
$tlp_pemasok = $_POST['tlp_pemasok'];
$insert_data = mysqli_query($koneksi, "INSERT INTO tbl_pemasok
(nama_pemasok,alamat_pemasok,tlp_pemasok)
values ('$nama_pemasok','$alamat_pemasok','$tlp_pemasok')");
if ($insert_data) {
 header('location:data_pemasok.php?pesan=Data Berhasil Di simpan');
} else {
 header('location:data_pemasok.php?pesan=Data Gagal Di simpan');
}