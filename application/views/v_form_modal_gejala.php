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
                                        <p><b>Edit Gejala Penyakit</b></p>
                                            <?php echo form_open('c_admincrud/vieweditgejala/'.$gejala->kd_gejala); ?>
                                                           
                                                                <div class="form-group-inner">
                                                                    <div class="row">
                                                                        <div class="col-lg-1">
                                                                            <label class="">Kode</label>
                                                                        </div>
                                                                        <div class="col-lg-9">
                                                                           
                                                                            <input type="text" name="kode" class="form-control" value="<?php echo $gejala->kd_gejala;?>" readonly="readonly">
                                                                           
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group-inner">
                                                                    <div class="row">
                                                                        <div class="col-lg-1">
                                                                            <label class="">Gejala</label>
                                                                        </div>
                                                                        <div class="col-lg-9">
                                                                            <input value="<?php echo $gejala->nama_gejala;?>" type="text" name="gejala" class="form-control">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group-inner">
                                                                    <div class="row">
                                                                        <div class="col-lg-1">
                                                                            <label class="">Keterangan</label>
                                                                        </div>
                                                                        <div class="col-lg-9">
                                                                            <textarea rows="4" type="text" name="keterangan" class="form-control"><?php echo $gejala->keterangan;?></textarea>
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