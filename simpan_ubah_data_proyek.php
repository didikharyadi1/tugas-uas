<?php
session_start();
if ($_SESSION['status'] != "sudah_login") {
 //melakukan pengalihan
 header("location:../login/login.php");
}
include "../config/koneksi.php";
$id_proyek = $_POST['id_proyek'];
$nama_proyek = $_POST['nama_proyek'];
$dana_proyek = $_POST['dana_proyek'];
$tgl_proyek = $_POST['tgl_proyek'];
$update_data = mysqli_query($koneksi, "UPDATE tbl_proyek set
nama_proyek='$nama_proyek',dana_proyek='$dana_proyek',tgl_proyek='$tgl_proyek' where id_proyek=$id_proyek");
if ($update_data) {
 header('location:data_proyek.php?pesan=Data Berhasil Di Ubah');
} else {
 header('location:data_proyek.php?pesan=Data Gagal Di Ubah');
}