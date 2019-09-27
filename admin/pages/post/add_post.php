

<section class="content">
        <div class="container-fluid">
            
         <!-- Input -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                INPUT ARTIKEL ( as <?php echo "".$_SESSION["username"]."" ?> )
                                <small>Data kelengkapan komposisi produk</small>
                            </h2>
                        </div>
                        <div class="body">
                            <div class="row clearfix">
                              <form action="../controller/post/add.php" id="sign_in" method="POST">
                               <div id="addMoreAgain">
                                <div id="addMore">
                                 <div class="col-xs-12">
                                     <div class="input-group">
                                        <div class="form-line">
                                            <input type="text" name="title" class="form-control" placeholder="Judul Post" required>
                                        </div>
                                    </div>
                                    <div class="input-group">
                                        <div class="form-line">
                                            <textarea name="content" id="editor" cols="80" rows="5"></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="input-group">
                                        <span class="input-group-addon">
                                            <i class="material-icons">person</i>
                                        </span>
                                        <div class="form-line">
                                            <input type="text" name="author" class="form-control" placeholder="Author" value="<?php echo "".$_SESSION["username"]."" ?>">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <button id="add_post" class="btn btn-lg bg-cyan waves-effect" type="submit">TAMBAH</button>
                                    <a href="index.php?komposisi-produk" class="btn btn-lg bg-red waves-effect" id="back">BATAL</a>
                              </div>
                               </div>
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
    