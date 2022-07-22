<?php
session_start();
if ($_SESSION['status'] != "sudah_login") {
 //melakukan pengalihan
 header("location:../login/login.php");
}
include "../config/koneksi.php";
$id_pemasok = $_POST['id_pemasok'];
$nama_pemasok = $_POST['nama_pemasok'];
$alamat_pemasok = $_POST['alamat_pemasok'];
$tlp_pemasok = $_POST['tlp_pemasok'];
$update_data = mysqli_query($koneksi, "UPDATE tbl_pemasok set
nama_pemasok='$nama_pemasok',alamat_pemasok='$alamat_pemasok',tlp_pemasok='$tlp_pemasok' where id_pemasok=$id_pemasok");
if ($update_data) {
 header('location:data_pemasok.php?pesan=Data Berhasil Di Ubah');
} else {
 header('location:data_pemasok.php?pesan=Data Gagal Di Ubah');
}