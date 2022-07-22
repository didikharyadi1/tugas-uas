<?php
session_start();
if ($_SESSION['status'] != "sudah_login") {
 //melakukan pengalihan
 header("location:../login/login.php");
}
include "../layout/header.php";
include "../config/koneksi.php";
?>
<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
 <div
 class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
 <h1 class="h2">Form Tambah pengerjaan proyek</h1>
 </div>
 <!-- <canvas class="my-4 w-100" id="myChart" width="900" height="380">
</canvas> -->
 <!-- <h4>Data Jadwal Kegiatan</h4> -->
 <div class="table-responsive">
 <form action="simpan_data_pengerjaan_proyek.php" method="POST">
 <div class="col-6">
 <div class="mb-3">
 <label for="exampleFormControlInput1" class="form-label">id pengerjaan</label>
 <input type="text" name="id_pengerjaan" class="form-control">
 </div>
 <div class="mb-3">
 <label for="exampleFormControlTextarea1" class="form-label">id proyek</label>
 <input type="text" name="id_proyek" class="form-control">
 </div>
 <div class="mb-3">
 <label for="exampleFormControlTextarea1" class="form-label">id barang</label>
 <input type="text" name="id_barang" class="form-control">
 </div>
 <div class="mb-3">
 <label for="exampleFormControlTextarea1" class="form-label">volume barang</label>
 <input type="text" name="volume_barang" class="form-control">
 </div>
 <div class="mb-3">
 <label for="exampleFormControlTextarea1" class="form-label">tgl order barang</label>
 <input type="text" name="tgl_order_barang" class="form-control">
 </div>
 <div class="mb-3">
 <button type="submit" class="btn btn-sm btn-primary">
Simpan</button>
 </div>
 </div>
 </form>
 </div>
</main>
<?php
include "../layout/footer.php";
?>