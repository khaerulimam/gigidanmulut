<?php $this->load->view('template_admin/header_menusamping'); ?>
           
            <!-- Breadcome start-->
            <div class="breadcome-area des-none">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="breadcome-list map-mg-t-40-gl shadow-reset">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                        <div class="breadcome-heading">
                                            <form role="search" class="">
												<input type="text" placeholder="Search..." class="form-control">
												<a href=""><i class="fa fa-search"></i></a>
											</form>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                        <ul class="breadcome-menu">
                                            <li><a href="#">Home</a> <span class="bread-slash">/</span>
                                            </li>
                                            <li><span class="bread-blod">Dashboard</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Breadcome End-->
            <!-- Data table area Start-->
            <div class="admin-dashone-data-table-area">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="sparkline8-list shadow-reset tab-pane custom-inbox-message shadow-reset active">
                                <div class="sparkline8-hd">
                                    <div class="main-sparkline8-hd">
                                        <center>
                                        <h2><b>Laporan Penyakit</b></h2>
                                        </center>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Data table area End-->
            <!-- Data table area Start-->
            <div class="admin-dashone-data-table-area">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                        <?php
                            foreach ($tampilpenyakit as $row) {
                        ?>
                            <div class="sparkline8-list shadow-reset tab-pane fade in animated zoomInDown custom-inbox-message shadow-reset active">    
                                <div class="sparkline8-hd" style="text-align: justify">
                                   <div class="row" style="margin:10px;">
                                       <div class="col-sm-2">
                                           <b>Kode</b>
                                       </div>
                                       <div class="col-sm-1">
                                           :
                                       </div>
                                       <div class="col-sm-6">
                                            <b><?php echo $row->kd_diagnosa; ?></b>
                                       </div>
                                   </div>
                                   <div class="row" style="margin:10px;">
                                    <div class="col-sm-2">
                                        <b>Nama Penyakit</b>
                                    </div>
                                    <div class="col-sm-1">
                                        :
                                    </div>
                                    <div class="col-sm-9" >
                                        <?php echo $row->nama_diagnosa; ?>
                                    </div>
                                </div>
                                <div class="row" style="margin:10px;">
                                    <div class="col-sm-2">
                                        <b>Definisi</b>
                                    </div>
                                    <div class="col-sm-1">
                                        :
                                    </div>
                                    <div class="col-sm-9">
                                        <?php echo $row->keterangan; ?>
                                    </div>
                                </div>
                                <div class="row" style="margin:10px;">
                                    <div class="col-sm-2">
                                        <b>Solusi</b>
                                    </div>
                                    <div class="col-sm-1">
                                        :
                                    </div>
                                    <div class="col-sm-9">
                                        <?php echo $row->solusi; ?>
                                    </div>
                                </div>
                                </div>
                            </div>
                            <?php
                            }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
            
<?php $this->load->view('template_admin/footer') ?>