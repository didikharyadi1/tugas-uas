<?php
session_start();
if ($_SESSION['status'] != "sudah_login") {
//melakukan pengalihan
header("location:../login/login.php");
}
include "../layout/header.php";
include "../config/koneksi.php";
$id = $_GET['id_proyek'];
$queri = mysqli_query($koneksi, "SELECT * FROM tbl_proyek where id_proyek=$id");
$rs = mysqli_fetch_assoc($queri);
?>
<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
<div

class="d-flex justify-content-between flex-wrap flex-md-nowrap align-
items-center pt-3 pb-2 mb-3 border-bottom">
<h1 class="h2">Form Ubah proyek</h1>

</div>
<!-- <canvas class="my-4 w-100" id="myChart" width="900" height="380">
</canvas> -->
<!-- <h4>Data Jadwal Kegiatan</h4> -->
<div class="table-responsive">
<form action="simpan_ubah_data_proyek.php" method="POST">
<div class="col-6">
<div class="mb-3">

<label for="exampleFormControlInput1" class="form-
label">Nama proyek</label>

<input type="text" name="nama_proyek" value="<?php echo
$rs['nama_proyek']; ?>" class="form-control">
</div>
<div class="mb-3">

<label for="exampleFormControlTextarea1" class="form-
label">dana proyek</label>

<input type="text" name="dana_proyek" value="<?php echo
$rs['dana_proyek']; ?>" class="form-control">

<input type="text" name="tgl_proyek" value="<?php echo
$rs['tgl_proyek']; ?>" class="form-control">
</div>
<div class="mb-3">
<input type="hidden" name="id_proyek" value="<?php echo
$rs['id_proyek']; ?>" class="form-control">
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