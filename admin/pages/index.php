<?php
    session_start();
    (isset($_SESSION['id_user']));
    (isset($_SESSION['name']));
    include "../config/connection.php";
    include "../controller/auth_user.php";
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>Admin Panel</title>
        <!-- Favicon-->
    <link rel="icon" href="../favicon.ico" type="image/x-icon">

    <!-- Font Face -->
    <link href="../assets/css/font-face.css" rel="stylesheet" media="all">

    <!-- Font Face -->
    <link href="../../assets/css/font-face.css" rel="stylesheet" media="all">

    <!-- Google Fonts -->
    <link href="../assets/css/material-icons.css" rel="stylesheet" type="text/css">

    <!-- Awesome Fonts -->
    <link href="../assets/css/flaticon.css" rel="stylesheet" type="text/css">

     <!-- JQuery DataTable Css -->
    <link href="../assets/plugins/jquery-datatable/skin/bootstrap/css/dataTables.bootstrap.css" rel="stylesheet">

    <!-- Bootstrap Spinner Css -->
    <link href="../assets/plugins/jquery-spinner/css/bootstrap-spinner.css" rel="stylesheet">

    <!-- Bootstrap Core Css -->
    <link href="../assets/plugins/bootstrap/css/bootstrap.css" rel="stylesheet">

    <!-- Waves Effect Css -->
    <link href="../assets/plugins/node-waves/waves.css" rel="stylesheet" />

    <!-- Bootstrap Select Css -->
    <link href="../assets/plugins/bootstrap-select/css/bootstrap-select.css" rel="stylesheet" />

    <!-- Sweetalert Css -->
    <link href="../assets/plugins/sweetalert/sweetalert.css" rel="stylesheet" />

    <!-- Animation Css -->
    <link href="../assets/plugins/animate-css/animate.css" rel="stylesheet" />

    <!-- Bootstrap Material Datetime Picker Css -->
    <link href="../assets/plugins/bootstrap-material-datetimepicker/css/bootstrap-material-datetimepicker.css" rel="stylesheet" />

    <!-- Custom Css -->
    <link href="../assets/css/style.css" rel="stylesheet">

    <!-- AdminBSB Themes. You can choose a theme from css/themes instead of get all themes -->
    <link href="../assets/css/themes/all-themes.css" rel="stylesheet" />
</head>

<body class="theme-light-blue">
    <!-- Overlay For Sidebars -->
    <div class="overlay"></div>
    <!-- #END# Overlay For Sidebars -->
    <!-- Search Bar -->
    <div class="search-bar">
        <div class="search-icon">
            <i class="material-icons">search</i>
        </div>
        <input type="text" placeholder="START TYPING...">
        <div class="close-search">
            <i class="material-icons">close</i>
        </div>
    </div>
    <!-- #END# Search Bar -->

    <!-- Top Bar -->
    <nav class="navbar">
        <div class="container-fluid">
            <div class="navbar-header">
                <a href="javascript:void(0);" class="navbar-toggle ls-closed collapsed waves-effect" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false"></a>
                <a href="javascript:void(0);" class="bars" style="margin-bottom: 50px;"></a>
                <a style="margin-left: 20px;" class="navbar-brand" href="#">ADMIN PANEL</a>
            </div>
            <div class="collapse navbar-collapse" id="navbar-collapse">
                <ul class="nav navbar-nav navbar-right">
                    
                </ul>
            </div>
            </div>
        </div>
    </nav>
    <!-- #Top Bar -->

    <!-- Menuju Menu Sesuai Hak Akses -->
    <?php 

    if($_SESSION['id_user'] == 1 ) {
        require('../view/menu/admin.php');
    }else if ($_SESSION['id_user'] == 2 ) {
        require('../view/menu/user.php');
    }else if ($_SESSION['id_user'] == 5 ) {
        require('../view/menu/gudangmenu.php');
    }else if ($_SESSION['id_user'] == 6 ) {
        require('../view/menu/purchasingmenu.php');
    }

    ?>
    
    <!-- Routing Menu -->
    <?php
    if (isset($_GET['pengeluaran_produk'])){
          include "../pages/pengeluaran_produk/pengeluaran_produk.php";

      }else if (isset($_GET['post'])){
         include "../pages/post/index.php";
      }else if (isset($_GET['add_post'])){
         include "../pages/post/add_post.php";
      }else if (isset($_GET['-'])){
         include "../pages/post/index.php";
      }else{
          include "../view/widget/index.php";
      }
      ?>

    <!-- Jquery Core Js -->
    <script src="../assets/plugins/jquery/jquery.min.js"></script>

    <!-- Editor Core Js -->
    <script src="../assets/plugins/ckeditor/ckeditor.js"></script>

    <!-- Sparkline Chart Plugin Js -->
    <script src="../assets/plugins/jquery-sparkline/jquery.sparkline.js"></script>

    <!-- Flot Charts Plugin Js -->
    <script src="../assets/plugins/flot-charts/jquery.flot.js"></script>
    <script src="../assets/plugins/flot-charts/jquery.flot.resize.js"></script>
    <script src="../assets/plugins/flot-charts/jquery.flot.pie.js"></script>
    <script src="../assets/plugins/flot-charts/jquery.flot.categories.js"></script>
    <script src="../assets/plugins/flot-charts/jquery.flot.time.js"></script>

    <!-- Editor Core Js -->
    <script src="../assets/plugins/tinymce/tinymce.js"></script>

    <!-- Autosize Plugin Js -->
    <script src="../assets/plugins/autosize/autosize.js"></script>

    <!-- Moment Plugin Js -->
    <script src="../assets/plugins/momentjs/moment.js"></script>

    <!-- Bootstrap Material Datetime Picker Plugin Js -->
    <script src="../assets/plugins/bootstrap-material-datetimepicker/js/bootstrap-material-datetimepicker.js"></script>

    <!-- Bootstrap Core Js -->
    <script src="../assets/plugins/bootstrap/js/bootstrap.js"></script>

    <!-- Select Plugin Js -->
    <script src="../assets/plugins/bootstrap-select/js/bootstrap-select.js"></script>

    <!-- Slimscroll Plugin Js -->
    <script src="../assets/plugins/jquery-slimscroll/jquery.slimscroll.js"></script>

    <!-- Validation Plugin Js -->
    <script src="../assets/plugins/jquery-validation/jquery.validate.js"></script>

    <!-- JQuery Steps Plugin Js -->
    <script src="../assets/plugins/jquery-steps/jquery.steps.js"></script>

    <!-- Validation Plugin Js -->
    <script src="../assets/plugins/scrollreveal/scrollreveal.min.js"></script>

    <!-- Jquery Spinner Plugin Js -->
    <script src="../assets/plugins/jquery-spinner/js/jquery.spinner.js"></script>

    <!-- Waves Effect Plugin Js -->
    <script src="../assets/plugins/node-waves/waves.js"></script>

    <!-- Select Plugin Js -->
    <script src="../assets/plugins/bootstrap-select/js/bootstrap-select.js"></script>

    <!-- Jquery Spinner Plugin Js -->
    <script src="../assets/plugins/jquery-spinner/js/jquery.spinner.js"></script>

    <!-- Jquery DataTable Plugin Js -->
    <script src="../assets/plugins/jquery-datatable/jquery.dataTables.js"></script>
    <script src="../assets/plugins/jquery-datatable/skin/bootstrap/js/dataTables.bootstrap.js"></script>
    <script src="../assets/plugins/jquery-datatable/jquery.dataTables.js"></script>
    <script src="../assets/plugins/jquery-datatable/skin/bootstrap/js/dataTables.bootstrap.js"></script>
    <script src="../assets/plugins/jquery-datatable/extensions/export/dataTables.buttons.min.js"></script>
    <script src="../assets/plugins/jquery-datatable/extensions/export/buttons.flash.min.js"></script>
    <script src="../assets/plugins/jquery-datatable/extensions/export/jszip.min.js"></script>
    <script src="../assets/plugins/jquery-datatable/extensions/export/pdfmake.min.js"></script>
    <script src="../assets/plugins/jquery-datatable/extensions/export/vfs_fonts.js"></script>
    <script src="../assets/plugins/jquery-datatable/extensions/export/buttons.html5.min.js"></script>
    <script src="../assets/plugins/jquery-datatable/extensions/export/buttons.print.min.js"></script>

    <!-- SweetAlert Plugin Js -->
    <script src="../assets/plugins/sweetalert/sweetalert.min.js"></script>

    <!-- Jquery CountTo Plugin Js -->
    <script src="../assets/plugins/jquery-countto/jquery.countTo.js"></script>

    <!-- Custom Js -->
    <script src="../assets/js/admin.js"></script>
    <script src="../assets/js/pages/forms/form-wizard.js"></script>
    <script src="../assets/js/pages/tables/jquery-datatable.js"></script>
    <script src="../assets/js/pages/examples/sign-in.js"></script>
    <script src="../assets/js/pages/forms/basic-form-elements.js"></script>
    <script src="../assets/js/pages/forms/advanced-form-elements.js"></script>
    <script src="../assets/js/pages/forms/form-wizard.js"></script>
    <script src="../assets/js/pages/ui/tooltips-popovers.js"></script>

    <!-- Demo Js -->
    <script src="../assets/js/demo.js"></script>
<script>
    
    tinymce.init({
        selector: 'textarea#editor',
    });

</script>
<script>
    $(function () {
    //Tooltip
    $('[data-toggle="tooltip"]').tooltip({
        container: 'body'
    });

    //Popover
    $('[data-toggle="popover"]').popover();
})
</script>
<script>
        jQuery(document).ready(function($){
            $('.delete-link').on('click',function(){
                var getLink = $(this).attr('href');
                swal({
                        title: "PERHATIAN !",
                        text: "Anda yakin akan menghapus data ?",
                        type: "warning",
                        html: true,
                        confirmButtonColor: '#DD6B55',
                        confirmButtonText: 'Hapus',
                        showCancelButton: true,
                        cancelButtonText: 'Jangan',
                        closeOnConfirm: true
                        },function(){
                        swal("Deleted!", "Your imaginary file has been deleted!", "success");
                        window.location.href = getLink
                    })
                return false;
            });
        });
</script>
<script>
        jQuery(document).ready(function($){
            $('.lanjut-link').on('click',function(){
                var getLink = $(this).attr('href');
                swal({
                        title: "PERHATIAN !",
                        text: "Pelanggan sudah membayar ?",
                        type: "warning",
                        html: true,
                        confirmButtonColor: '#03A9F4',
                        confirmButtonText: 'Ya',
                        showCancelButton: true,
                        cancelButtonText: 'Belum',
                        closeOnConfirm: true
                        },function(){
                        swal("Deleted!", "Your imaginary file has been deleted!", "success");
                        window.location.href = getLink
                    })
                return false;
            });
        });
    </script>

</body>

</html>
<?php
    mysqli_close($connect);
    ob_end_flush();
?>