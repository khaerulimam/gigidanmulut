<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Login | Adminpro - Admin Template</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- favicon
		============================================ -->
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">
    <!-- Google Fonts
		============================================ -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i,800" rel="stylesheet">
    <!-- Bootstrap CSS
		============================================ -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap.min.css">
    <!-- Bootstrap CSS
		============================================ -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/font-awesome.min.css">
    <!-- adminpro icon CSS
		============================================ -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/adminpro-custon-icon.css">
    <!-- meanmenu icon CSS
		============================================ -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/meanmenu.min.css">
    <!-- mCustomScrollbar CSS
		============================================ -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/jquery.mCustomScrollbar.min.css">
    <!-- animate CSS
		============================================ -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/animate.css">
    <!-- normalize CSS
		============================================ -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/normalize.css">
    <!-- form CSS
		============================================ -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/form.css">
    <!-- style CSS
		============================================ -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/style.css">
    <!-- responsive CSS
		============================================ -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/responsive.css">
    <!-- modernizr JS
		============================================ -->
    <script src="js/vendor/modernizr-2.8.3.min.js"></script>
</head>

<body class="materialdesign">
    <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
    <!-- Header top area start-->
    

            <!-- login Start-->
            <div class="login-form-area mg-t-30 mg-b-40">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-4"></div>
                        <form id="adminpro-form" method="post" action="<?php echo base_url();?>index.php/c_akses/aksi_login" class="adminpro-form">
                            <div class="col-lg-4">
                                <div class="login-bg" style="margin-top:80px !important;">
                                    <div class="row">
                                            <div class="col-lg-12">
                                            <div class="logo">
                                                <a href="#"><img src="img/logo/logo.png" alt="" />
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="login-title">
                                                <h1><b>Login</b> </h1>
                                                <?php if(isset($error)){echo $error;}; ?>
                                                <p>Silahkan login menggunakan username dan password anda</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-4">
                                            <div class="login-input-head">
                                                <p>Username</p>
                                            </div>
                                        </div>
                                        <div class="col-lg-8">
                                            <div class="login-input-area">
                                                <input type="text" name="username"  />
                                                <i class="fa fa-envelope login-user" aria-hidden="true"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-4">
                                            <div class="login-input-head">
                                                <p>Password</p>
                                            </div>
                                        </div>
                                        <div class="col-lg-8">
                                            <div class="login-input-area">
                                                <input type="password" name="password" />
                                                <i class="fa fa-lock login-user"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-8">

                                        </div>
                                        <div class="col-lg-4">
                                            <div class="login-button-pro">
                                                <!-- <button type="submit" class="login-button login-button-rg">Register</button> -->
                                                <button type="submit" style="margin-left:14px !important;" class="login-button login-button-lg">Log in</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                        <div class="col-lg-4"></div>
                    </div>
                </div>
            </div>
            <!-- login End-->
        </div>
    </div>
    <!-- jquery
		============================================ -->
        <script src="<?php echo base_url(); ?>assets/js/vendor/jquery-1.11.3.min.js"></script>
    <!-- bootstrap JS
		============================================ -->
    <script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
    <!-- meanmenu JS
		============================================ -->
    <script src="<?php echo base_url(); ?>assets/js/jquery.meanmenu.js"></script>
    <!-- mCustomScrollbar JS
		============================================ -->
    <script src="<?php echo base_url(); ?>assets/js/jquery.mCustomScrollbar.concat.min.js"></script>
    <!-- sticky JS
		============================================ -->
    <script src="<?php echo base_url(); ?>assets/js/jquery.sticky.js"></script>
    <!-- scrollUp JS
		============================================ -->
    <script src="<?php echo base_url(); ?>assets/js/jquery.scrollUp.min.js"></script>
    <!-- counterup JS
		============================================ -->
    <script src="<?php echo base_url(); ?>assets/js/counterup/jquery.counterup.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/counterup/waypoints.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/counterup/counterup-active.js"></script>
    <!-- peity JS
		============================================ -->
    <script src="<?php echo base_url(); ?>assets/js/peity/jquery.peity.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/peity/peity-active.js"></script>
    <!-- sparkline JS
		============================================ -->
    <script src="<?php echo base_url(); ?>assets/js/sparkline/jquery.sparkline.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/sparkline/sparkline-active.js"></script>
    <!-- flot JS
		============================================ -->
    <script src="<?php echo base_url(); ?>assets/js/flot/Chart.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/flot/flot-active.js"></script>
    <!-- map JS
		============================================ -->
    <script src="<?php echo base_url(); ?>assets/js/map/raphael.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/map/jquery.mapael.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/map/france_departments.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/map/world_countries.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/map/usa_states.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/map/map-active.js"></script>
    <!-- data table JS
		============================================ -->
    <script src="<?php echo base_url(); ?>assets/js/data-table/bootstrap-table.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/data-table/tableExport.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/data-table/data-table-active.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/data-table/bootstrap-table-editable.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/data-table/bootstrap-editable.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/data-table/bootstrap-table-resizable.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/data-table/colResizable-1.5.source.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/data-table/bootstrap-table-export.js"></script>
    <!-- main JS
		============================================ -->
    <script src="<?php echo base_url(); ?>assets/js/main.js"></script>
</body>

</html>