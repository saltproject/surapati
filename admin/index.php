<?php
session_start();
include "config/connection.php";

//Error Notifikasi
$Err = "";
if(isset ($_GET ["Err"]) && !empty ($_GET ["Err"])){
    switch ($_GET ["Err"]){
        case 1:
            $Err = "Username dan Password Kosong";
        break;
        case 2:
            $Err = "Username Kosong";
        break;
        case 3:
            $Err = "Password Kosong";
        break;
        case 4:
            $Err = "Password salah";
        break;
        case 5:
            $Err = "<div class='alert bg-pink alert-dismissible' role='alert'>
                                <button type='button' class='close' data-dismiss='alert' aria-label='close'><span aria-hidden='true'>&times;</span></button>
                               Username atau Password salah
                    </div>";
        break;
        case 6:
            $Err = "Maaf, Terjadi Kesalahan";
        break;
    }
}

// Notif
$Notif = "";
if(isset ($_GET["Notif"]) && !empty ($_GET["Notif"])){
    switch($_GET["Notif"]){
        case 1:
            $Notif = "User berhasil dibuat, silahkan Login";
        break;
    }
}
?>
<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>Sign In | Admin Panel</title>
    <!-- Favicon-->
    <link rel="icon" href="favicon.ico" type="image/x-icon">
    
    <!-- Font Face -->
    <link href="assets/css/font-face.css" rel="stylesheet" media="all">

    <!-- Google Fonts -->
    <link href="assets/css/material-icons.css" rel="stylesheet" type="text/css">

    <!-- Bootstrap Core Css -->
    <link href="assets/plugins/bootstrap/css/bootstrap.css" rel="stylesheet">

    <!-- Waves Effect Css -->
    <link href="assets/plugins/node-waves/waves.css" rel="stylesheet" />

    <!-- Animation Css -->
    <link href="assets/plugins/animate-css/animate.css" rel="stylesheet" />

    <!-- Custom Css -->
    <link href="assets/css/style.css" rel="stylesheet">
</head>

<body class="login-page">
    <div class="login-box">
        <div class="logo">
            <a href="javascript:void(0);"><b>Admin</b>Panel</a>
            <small>SaltProject - Admin Panel</small>
        </div>
        <div class="card">
            <div class="body">
                <form action="controller/verify.php" id="sign_in" method="POST">
                    <div class="msg">Sign in to start your session</div>
                    <div class="msg animated bounceIn"><?php echo $Err ?></div>
                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">person</i>
                        </span>
                        <div class="form-line">
                            <input type="text" class="form-control" name="username" placeholder="Username" required autofocus>
                        </div>
                    </div>
                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">lock</i>
                        </span>
                        <div class="form-line">
                            <input type="password" class="form-control" name="password" placeholder="Password" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-8 p-t-5">
                            <input type="checkbox" name="rememberme" id="rememberme" class="filled-in chk-col-cyan">
                            <label for="rememberme">Remember Me</label>
                        </div>
                        <div class="col-xs-4">
                            <button class="btn btn-block bg-cyan waves-effect" type="submit">SIGN IN</button>
                        </div>
                    </div>
                    <div class="row m-t-15 m-b--20">
                        <div class="col-xs-6">
                            <a href="forgot-password.html">Register Now!</a>
                        </div>
                        <div class="col-xs-6 align-right">
                            <a href="../index.php">< Back to Webpage</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Jquery Core Js -->
    <script src="assets/plugins/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core Js -->
    <script src="assets/plugins/bootstrap/js/bootstrap.js"></script>

    <!-- Waves Effect Plugin Js -->
    <script src="assets/plugins/node-waves/waves.js"></script>

    <!-- Validation Plugin Js -->
    <script src="assets/plugins/jquery-validation/jquery.validate.js"></script>

    <!-- Custom Js -->
    <script src="assets/js/admin.js"></script>
    <script src="assets/js/pages/examples/sign-in.js"></script>
</body>

</html>