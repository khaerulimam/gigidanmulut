<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Dashboard v.1.0 | Adminpro - Admin Template</title>
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
    <link rel="stylesheet" href="http://localhost/gigidanmulut/assets/css/bootstrap.min.css">
    <!-- Bootstrap CSS
		============================================ -->
    <link rel="stylesheet" href="http://localhost/gigidanmulut/assets/css/font-awesome.min.css">
    <!-- adminpro icon CSS
		============================================ -->
    <link rel="stylesheet" href="http://localhost/gigidanmulut/assets/css/adminpro-custon-icon.css">
    <!-- meanmenu icon CSS
		============================================ -->
    <link rel="stylesheet" href="http://localhost/gigidanmulut/assets/css/meanmenu.min.css">
    <!-- mCustomScrollbar CSS
		============================================ -->
    <link rel="stylesheet" href="http://localhost/gigidanmulut/assets/css/jquery.mCustomScrollbar.min.css">
    <!-- animate CSS
		============================================ -->
    <link rel="stylesheet" href="http://localhost/gigidanmulut/assets/css/animate.css">
    <!-- data-table CSS
		============================================ -->
    <link rel="stylesheet" href="http://localhost/gigidanmulut/assets/css/data-table/bootstrap-table.css">
    <link rel="stylesheet" href="http://localhost/gigidanmulut/assets/css/data-table/bootstrap-editable.css">
    <!-- normalize CSS
		============================================ -->
    <link rel="stylesheet" href="http://localhost/gigidanmulut/assets/css/normalize.css">
    <!-- charts C3 CSS
		============================================ -->
    <link rel="stylesheet" href="http://localhost/gigidanmulut/assets/css/c3.min.css">
    <!-- forms CSS
		============================================ -->
    <link rel="stylesheet" href="http://localhost/gigidanmulut/assets/css/form/all-type-forms.css">
    <!-- style CSS
		============================================ -->
    <link rel="stylesheet" href="http://localhost/gigidanmulut/assets/css/style.css">
    <!-- responsive CSS
		============================================ -->
    <link rel="stylesheet" href="http://localhost/gigidanmulut/assets/css/responsive.css">
    <!-- modernizr JS
		============================================ -->
    <script src="assets/js/vendor/modernizr-2.8.3.min.js"></script>
</head>

<body class="materialdesign">
    <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

    <!-- Header top area start-->
    <div class="wrapper-pro">
        <div class="left-sidebar-pro">
            <nav id="sidebar">
                <div class="sidebar-header">
                    <a href="#"><img src="img/message/1.jpg" alt="" />
                    </a>
                    <h3>UPTD</h3>
                    <p>Puskesmas Maos</p>
                    <strong>PM</strong>
                </div>
                <div style="margin-top:50px !important;" class="left-custom-menu-adp-wrap">
                    <ul class="nav navbar-nav left-sidebar-menu-pro">
                        <li class="nav-item">
                            <a href="<?php echo base_url('index.php/welcome');?>"><img src="http://localhost/gigidanmulut/assets/img/home.png" width="17px" height="17px"></i> <span class="mini-dn">Home</span> <span class="indicator-right-menu mini-dn"></span></a>
                        </li>
                        <li class="nav-item"><a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle"><img src="http://localhost/gigidanmulut/assets/img/caries.png" width="17px" height="17px"></i> <span class="mini-dn">Gejala</span> <span class="indicator-right-menu mini-dn"><i class="fa indicator-mn fa-angle-left"></i></span></a>
                            <div role="menu" class="dropdown-menu left-menu-dropdown animated flipInX">
                                <a href="<?php echo base_url();?>index.php/welcome/inbox" class="dropdown-item">Input Gejala</a>
                                <a href="<?php echo base_url();?>index.php/welcome/datagejala" class="dropdown-item">Data Gejala</a>
                                <a href="<?php echo base_url();?>index.php/welcome/laporangejala" class="dropdown-item">Laporan Gejala</a>
                                
                            </div>
                        </li>
                        <li class="nav-item"><a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle"><img src="http://localhost/gigidanmulut/assets/img/disease.png" width="17px" height="17px" style="margin-right:2px;"><span class="mini-dn">Penyakit</span> <span class="indicator-right-menu mini-dn"><i class="fa indicator-mn fa-angle-left"></i></span></a>
                            <div role="menu" class="dropdown-menu left-menu-dropdown animated flipInX">
                                <a href="<?php echo base_url();?>index.php/welcome/accordion" class="dropdown-item">Input Penyakit</a>
                                <a href="<?php echo base_url();?>index.php/welcome/datapenyakit" class="dropdown-item">Data Penyakit</a>
                                <a href="<?php echo base_url();?>index.php/welcome/laporanpenyakit" class="dropdown-item">Laporan Penyakit</a>
                                
                            </div>
                        </li>
                        <li class="nav-item"><a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle"><img src="http://localhost/gigidanmulut/assets/img/star.png" width="17px" height="17px"> <span class="mini-dn">Relasi</span> <span class="indicator-right-menu mini-dn"><i class="fa indicator-mn fa-angle-left"></i></span></a>
                            <div role="menu" class="dropdown-menu left-menu-dropdown animated flipInX">
                                <a href="<?php echo base_url();?>index.php/welcome/inputrelasi" class="dropdown-item">Input Relasi</a>
                                <a href="<?php echo base_url();?>index.php/welcome/datagabungan" class="dropdown-item">Data Gabungan</a>                            
                            </div>
                        </li>
                        <li class="nav-item">
                            <a href="<?php echo base_url();?>index.php/welcome/riwayatpasien" ><img src="http://localhost/gigidanmulut/assets/img/riwayat.png" width="17px" height="17px" > <span class="mini-dn">Riwayat Pasien</span> <span class="indicator-right-menu mini-dn"></span></a>
                        </li>

                        <li class="nav-item">
                            <a href="<?php echo base_url();?>index.php/welcome/change_password" ><img src="http://localhost/gigidanmulut/assets/img/password.png" width="17px" height="17px" style="margin-right:4px;"><span class="mini-dn">Ubah Password</span> <span class="indicator-right-menu mini-dn"></span></a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
        <div class="content-inner-all">
            <div class="header-top-area">
                <div class="fixed-header-top">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-1 col-md-6 col-sm-6 col-xs-12">
                                <button type="button" id="sidebarCollapse" class="btn bar-button-pro header-drl-controller-btn btn-info navbar-btn">
                                    <i class="fa fa-bars"></i>
                                </button>
                                <div class="admin-logo logo-wrap-pro">
                                    <a href="#"><img src="img/logo/log.png" alt="" />
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-1 col-sm-1 col-xs-12">
                               
                            </div>
                            <div class="col-lg-5 col-md-5 col-sm-6 col-xs-12">
                                <div class="header-right-info">
                                    <ul class="nav navbar-nav mai-top-nav header-right-menu">
                                        <li class="nav-item">
                                            <a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle">
                                                <span class="adminpro-icon adminpro-user-rounded header-riht-inf"></span>
                                                <span class="admin-name">Hy admin pakar</span>
                                                <span class="author-project-icon adminpro-icon adminpro-down-arrow"></span>
                                            </a>
                                            <ul role="menu" class="dropdown-header-top author-log dropdown-menu animated flipInX">
                                                <li><a href="#"><span class="adminpro-icon adminpro-user-rounded author-log-ic"></span>About</a>
                                                </li>
                                                <li><a href="<?php echo base_url();?>index.php/c_akses/logout"><span class="adminpro-icon adminpro-locked author-log-ic"></span>Log Out</a>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Header top area end-->