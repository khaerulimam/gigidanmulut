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
                            <div class="sparkline8-list shadow-reset tab-pane fade in animated zoomInDown custom-inbox-message shadow-reset active">
                            <?php if ($this->session->flashdata('error')): ?>
			                                 <div class="alert alert-danger wow fadeInLeft" data-wow-duration="2s" role="alert">
			                                 <?php echo $this->session->flashdata('error'); ?>
                                        </div>
                                        <?php endif; ?>
                                <div class="sparkline8-hd">
                                    <div class="main-sparkline8-hd">
                                        <center>
                                        <h2><b>Relasi Gejala dan Penyakit</b></h2>
                                        </center>
                                    </div>
                                </div>
                                <?php echo form_open('c_admincrud/vieweditrelasi/'.$relasi->id); ?>
                                <div class="sparkline8-hd" style="text-align: justify">
                                    <p> <b>
                                        Nama Penyakit
                                    </b>
                                    </p>
                                    <p>
                                       
                                            <select class="form-control custom-select-value" name="daftar_penyakit" readonly="readonly"> 
                                            <option value="<?php echo $relasi->kd_diagnosa; ?>">[<?php echo $relasi->kd_diagnosa; ?>]</option>
                                            <!-- <?php foreach($tampilpenyakit as $row){ ?>
                                                    <option value="<?php echo $row->kd_diagnosa; ?>">[<?php echo $row->kd_diagnosa; ?>] - <?php echo $row->nama_diagnosa; ?></option>
                                            <?php } ?>         -->
                                            </select>
                                        
                                    </p>
                                        
                                   
                                       
                            </div>
                            <div class="sparkline8-hd" style="text-align: justify; margin-top:-20px !important;">
                                    <p> <b>
                                        Gejala
                                    </b>
                                    </p>
                                    <p>
                                        
                                            <select class="form-control custom-select-value" name="daftar_gejala" readonly="readonly">
                                            <option value="<?php echo $relasi->kd_gejala; ?>">[<?php echo $relasi->kd_gejala; ?>]</option>
                                            <!-- <?php foreach($tampilgejala as $row){ ?>
                                                    <option value="<?php echo $row->kd_gejala; ?>">[<?php echo $row->kd_gejala; ?>] - <?php echo $row->nama_gejala; ?></option>
                                            <?php } ?> -->
                                            </select>
                                       
                                    </p>
                                        
                                   
                                       
                            </div>
                            <div class="sparkline8-hd" style="text-align: justify; margin-top:-20px !important;">
                                    <p> <b>
                                        MB
                                    </b>
                                    </p>
                                    <p style="padding-right:90%; !important;">
                                        <input required="numeric" value="<?php echo $relasi->mb; ?>" type="text" name="nilai_mb" class="form-control">
                                    </p>
                                        
                                   
                                       
                            </div>
                            <div class="sparkline8-hd" style="text-align: justify; margin-top:-20px !important;">
                                    <p> <b>
                                        MD
                                    </b>
                                    </p>
                                    <p style="padding-right:90%; !important;">
                                        <input required="numeric" value="<?php echo $relasi->md; ?>" type="text" name="nilai_md" class="form-control">
                                    </p>
                                        
                                   
                                       
                            </div>
                            <div class="sparkline8-hd" style="text-align: justify; margin-top:-20px !important;">
                                <button class="btn btn-white" type="reset">Reset</button>
                                <input style="background-color:#ff9966 !important;" class="btn btn-sm btn-primary login-submit-cs" <?php echo form_submit('submit', 'Simpan'); ?>          
                            </div>
                            <?php echo form_close(); ?>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Data table area End-->
        </div>
    </div>
    <?php $this->load->view('template_admin/footer'); ?>