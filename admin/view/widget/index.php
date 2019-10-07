
<section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2>DASHBOARD</h2>
            </div>

            <!-- Widgets -->
            <div class="row clearfix">
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box bg-pink hover-expand-effect">
                        <div class="icon">
                            <i class="material-icons">playlist_add_check</i>
                        </div>
                        <div class="content">

                        <?php
						$queryspl = mysqli_query ($connect, "SELECT id_post, post_title, post_author, post_date, post_status, COUNT(id_post) as jumlah FROM surapati_posts");
						if($queryspl == false){
							die ("Terjadi Kesalahan : ". mysqli_error($connect));
						}

						while ($spl = mysqli_fetch_array ($queryspl)){
                            
                            echo "<div class='text'>ALL ARTICLE</div>
                            <div class='number count-to' data-from='0' data-to='' data-speed='15' data-fresh-interval='20'>$spl[jumlah]</div>
                            ";
                        }
                            ?>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box bg-cyan hover-expand-effect">
                        <div class="icon">
                            <i class="material-icons">person</i>
                        </div>
                        <div class="content">
                        <?php
						$queryspl = mysqli_query ($connect, "SELECT COUNT(id_user) as jumlah FROM surapati_user");
						if($queryspl == false){
							die ("Terjadi Kesalahan : ". mysqli_error($connect));
						}

						while ($spl = mysqli_fetch_array ($queryspl)){
                            
                            echo "<div class='text'>USERS</div>
                            <div class='number count-to' data-from='0' data-to='' data-speed='15' data-fresh-interval='20'>$spl[jumlah]</div>
                            ";
                        }
                            ?>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box bg-light-green hover-expand-effect">
                        <div class="icon">
                            <i class="material-icons">forum</i>
                        </div>
                        <div class="content">
                            <div class="text">NEW COMMENTS</div>
                            <div class="number count-to" data-from="0" data-to="243" data-speed="1000" data-fresh-interval="20"></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box bg-orange hover-expand-effect">
                        <div class="icon">
                            <i class="material-icons">person_add</i>
                        </div>
                        <div class="content">
                            <div class="text">NEW VISITORS</div>
                            <div class="number count-to" data-from="0" data-to="1225" data-speed="1000" data-fresh-interval="20"></div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Widgets -->
        </div>
    </section>