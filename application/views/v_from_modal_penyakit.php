<?php $this->load->view('template_admin/header_menusamping'); ?>
           
            <!-- Breadcome start-->
            <div class="admin-dashone-data-table-area" style = "margin-top:60px;">
            <div class="breadcome-area des-none">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="breadcome-list map-mg-t-40-gl shadow-reset">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                        <div class="breadcome-heading">
                                           
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
                            <div class="sparkline8-list shadow-reset tab-pane fade in animated zoomInDown custom-inbox-message shadow-reset active">
                                <div class="sparkline8-hd">
                                    <div class="main-sparkline8-hd">
                                        <p><b>Masukan Data Penyakit</b></p>
                                        <?php echo form_open('c_admincrud/vieweditpenyakit/'.$penyakit->kd_diagnosa); ?>
                                                                <div class="form-group-inner">
                                                                    <div class="row">
                                                                        <div class="col-lg-1">
                                                                            <label class="">Kode</label>
                                                                        </div>
                                                                        <div class="col-lg-9">
                                                                            
                                                                            <input type="text" name="kode" readonly="readonly" class="form-control" value="<?php echo $penyakit->kd_diagnosa;?>">
                                                                           
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group-inner">
                                                                    <div class="row">
                                                                        <div class="col-lg-1">
                                                                            <label class="">Penyakit</label>
                                                                        </div>
                                                                        <div class="col-lg-9">
                                                                            <input type="text" name="penyakit" class="form-control" value="<?php echo $penyakit->nama_diagnosa;?>" >
                                                                            
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group-inner">
                                                                    <div class="row">
                                                                        <div class="col-lg-1">
                                                                            <label class="">Definisi</label>
                                                                        </div>
                                                                        <div class="col-lg-9">
                                                                            <textarea rows="4" type="text" name="definisi" class="form-control"><?php echo $penyakit->keterangan;?></textarea>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group-inner">
                                                                    <div class="row">
                                                                        <div class="col-lg-1">
                                                                            <label class="">Solusi</label>
                                                                        </div>
                                                                        <div class="col-lg-9">
                                                                            <textarea rows="4" name="solusi" type="text" class="form-control"><?php echo $penyakit->solusi;?></textarea>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                
                                                                <div class="form-group-inner">
                                                                    <div class="login-btn-inner">
                                                                        <div class="row">
                                                                            <div class="col-lg-1"></div>
                                                                            <div class="col-lg-9">
                                                                                <div class="login-horizental cancel-wp pull-left">
                                                                                <input class="btn btn-sm btn-primary login-submit-cs" <?php echo form_submit('submit', 'Simpan'); ?> 
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <?php echo form_close(); ?>
                                         
                                       
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
<?php $this->load->view('template_admin/footer'); ?>   