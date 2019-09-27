<?php
include "../../config/koneksi.php";

$id_produk				           = $_POST["id_produk"];
$id_bahan_baku				       = $_POST["id_bahan_baku"];
$komposisi				           = $_POST["komposisi"];
$status				               = $_POST["status"];


if($edit = mysqli_query($konek, "UPDATE komposisi_produk SET id_produk='$id_produk', id_bahan_baku='$id_bahan_baku', komposisi='$komposisi', status='$status'
          WHERE komposisi='$komposisi'")){
		header("Location: ../../pages/index.php?komposisi-produk");
		exit();
	}
die ("Terdapat kesalahan : ". mysqli_error($konek));

?>