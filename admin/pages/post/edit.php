<?php 
include '../config/koneksi.php';

$komposisi  = $_GET["komposisi"];

$queryproduk = mysqli_query($konek, "SELECT * FROM komposisi_produk WHERE komposisi='$komposisi' GROUP BY komposisi");
if($queryproduk == false){
  die ("Terjadi Kesalahan : ". mysqli_error($konek));
}
while($produk = mysqli_fetch_array($queryproduk)){

?>
<section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2>KOMPOSISI PRODUK</h2> 
            </div>
         <!-- Input -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card-add">
                        <div class="header">
                            <h2>
                                EDIT KOMPOSISI PRODUK
                                <small>Edit data kelengkapan komposisi produk</small>
                            </h2>
                            <ul class="header-dropdown m-r--5">
                                <li class="dropdown">
                                    <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                        <i class="material-icons">more_vert</i>
                                    </a>
                                    <ul class="dropdown-menu pull-right">
                                        <li><a href="javascript:void(0);">Action</a></li>
                                        <li><a href="javascript:void(0);">Another action</a></li>
                                        <li><a href="javascript:void(0);">Something else here</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="body">
                            <div class="row clearfix">
                              <form action="../controller/komposisi_produk/edit.php" id="sign_in" method="POST">
                                    <div class="col-sm-6">
                                            <select name="id_produk" class="form-control show-tick" " data-live-search="true">
                                                <?php
                                                include '../config/koneksi.php';
                                                
                                                $queryproduk = mysqli_query($konek, "SELECT * FROM produk");
                                                if($queryproduk == false){
                                                    die ("Terdapat Kesalahan : ". mysqli_error($konek));
                                                }
                                                while ($produk = mysqli_fetch_array($queryproduk)){
                                                    echo "<option value='$produk[id_produk]'>$produk[nama_produk]</option>";
                                                }
                                            ?>
                                            </select>
                                </div>
                                 <div class="col-sm-6">
                                            <select name="id_bahan_baku" class="form-control show-tick" " data-live-search="true">
                                                <?php
                                                include '../config/koneksi.php';
                                                
                                                $querybahanbaku = mysqli_query($konek, "SELECT * FROM bahan_baku");
                                                if($querybahanbaku == false){
                                                    die ("Terdapat Kesalahan : ". mysqli_error($konek));
                                                }
                                                while ($bahanbaku = mysqli_fetch_array($querybahanbaku)){
                                                    echo "<option value='$bahanbaku[id_bahan_baku]'>$bahanbaku[nama_bahan_baku]</option>";
                                                }
                                            ?>
                                            </select>
                                </div>
                                 <div class="col-sm-6">
                                     <div class="input-group">
                                        <span class="input-group-addon">
                                            <i class="material-icons">dns</i>
                                        </span>
                                        <div class="form-line">
                                            <input type="text" name="komposisi" class="form-control" placeholder="Komposisi" required>
                                        </div>
                                    </div>
                                </div>
                                 <div class="col-sm-6">
                                     <div class="input-group">
                                        <span class="input-group-addon">
                                            <i class="material-icons">bookmark</i>
                                        </span>
                                        <div class="form-line">
                                            <input type="text" name="status" class="form-control" placeholder="Status" required>
                                        </div>
                                    </div>
                                </div>
		                        <div class="col-md-12">
		                            <button id="edit_produk" class="btn btn-lg bg-gradient waves-effect" type="submit">EDIT</button>
		                            <a href="index.php?produk" class="btn btn-lg bg-gradient-red waves-effect">BATAL</a>
		                        </div>
                              </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Input -->
        </div>
    </section>
    <?php
      }
    ?>
    