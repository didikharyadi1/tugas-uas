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
$insert_data = mysqli_query($koneksi, "INSERT INTO tbl_pengerjaan_proyek
(id_pengerjaan,id_proyek,id_barang,volume_barang,tgl_order_barang)
values ('$id_pengerjaan','$id_proyek','$id_barang','$volume_barang','$tgl_order_barang')");
if ($insert_data) {
 header('location:data_pengerjaan_proyek.php?pesan=Data Berhasil Di simpan');
} else {
 header('location:data_pengerjaan_proyek.php?pesan=Data Gagal Di simpan');
}