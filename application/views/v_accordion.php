<?php $this->load->view('template_admin/header_menusamping'); ?>
            <!-- Breadcome start-->
            <div class="breadcome-area mg-b-30 small-dn">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="breadcome-list map-mg-t-40-gl shadow-reset">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
										<div class="breadcome-heading">
											</div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                        <ul class="breadcome-menu">
                                            <li><a href="#"><span class="bread-blod">Home</span></a>
                                            </li>
                                            <!-- <li><span class="bread-blod">Dashboard</span>
                                            </li> -->
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Breadcome End-->
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
                                <div class="sparkline8-hd">
                                    <div class="main-sparkline8-hd">
                                        <p><b>Masukan Data Penyakit</b></p>
                                                            <form action="<?php echo base_url();?>index.php/c_admincrud/inputpenyakit" method="post">
                                                                <div class="form-group-inner">
                                                                    <div class="row">
                                                                        <div class="col-lg-1">
                                                                            <label class="">Kode</label>
                                                                        </div>
                                                                        <div class="col-lg-9">
                                                                            <?php 
                                                                            foreach ($codepenyakit as $key) {
                                                                            $ht = substr($key->kd_diagnosa, 1) + 1;  
                                                                            ?>
                                                                            <input type="text" name="kode" readonly="readonly" class="form-control" value="<?php echo "P",$ht;?>">
                                                                            <?php
                                                                            }
                                                                            ?>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group-inner">
                                                                    <div class="row">
                                                                        <div class="col-lg-1">
                                                                            <label class="">Penyakit</label>
                                                                        </div>
                                                                        <div class="col-lg-9">
                                                                            <input type="text" name="penyakit" class="form-control">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group-inner">
                                                                    <div class="row">
                                                                        <div class="col-lg-1">
                                                                            <label class="">Definisi</label>
                                                                        </div>
                                                                        <div class="col-lg-9">
                                                                            <textarea rows="4" type="text" name="definisi" class="form-control"></textarea>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group-inner">
                                                                    <div class="row">
                                                                        <div class="col-lg-1">
                                                                            <label class="">Solusi</label>
                                                                        </div>
                                                                        <div class="col-lg-9">
                                                                            <textarea rows="4" name="solusi" type="text" class="form-control"></textarea>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                
                                                                <div class="form-group-inner">
                                                                    <div class="login-btn-inner">
                                                                        <div class="row">
                                                                            <div class="col-lg-1"></div>
                                                                            <div class="col-lg-9">
                                                                                <div class="login-horizental cancel-wp pull-left">
                                                                                    <button class="btn btn-white" type="reset">Reset</button>
                                                                                    <button class="btn btn-sm btn-primary login-submit-cs" type="submit">Simpan</button>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </form>
                                         
                                       
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php $this->load->view('template_admin/footer'); ?>