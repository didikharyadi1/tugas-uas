<?php
session_start();
if ($_SESSION['status'] != "sudah_login") {
 //melakukan pengalihan
 header("location:../login/login.php");
}
include "../config/koneksi.php";
$id_pengerjaan = $_POST['id_pengerjaan'];
$id_proyek = $_POST['id_proyek'];
$id_barang = $_POST['id_barang'];
$volume_barang = $_POST['volume_barang'];
$tgl_order_barang = $_POST['tgl_order_barang'];
$update_data = mysqli_query($koneksi, "UPDATE tbl_pengerjaan_proyek set id_proyek='$id_proyek',id_barang='$id_barang',volume_barang='$volume_barang',tgl_order_barang='$tgl_order_barang where id_pengerjaan=$id_pengerjaan");
if ($update_data) {
 header('location:data_pengerjaan_proyek.php?pesan=Data Berhasil Di Ubah');
} else {
 header('location:data_pengerjaan_proyek.php?pesan=Data Gagal Di Ubah');
}