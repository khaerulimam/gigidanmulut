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
                                        <p><b>Gejala per Penyakit</b></p>
                                                            <form action="<?php echo base_url() ?>index.php/c_admincrud/search_gejala">
                                                                <div class="form-group-inner">
                                                                    <div class="row">
                                                                        <div class="col-sm-1">
                                                                            <label class="">Penyakit</label>
                                                                        </div>
                                                                        <div class="col-sm-6">
                                                                            
                                                                            <select class="form-control custom-select-value" name="cari">
                                                                            <?php foreach($tampilsearch as $row){ ?>
                                                                            <option value="<?php echo $row->kd_diagnosa;?>">[<?php echo $row->kd_diagnosa;?>]-<?php echo $row->nama_diagnosa;?></option>
                                                                            <?php break; ?>
                                                                            <?php } ?>
                                                                            <?php foreach($tampilpenyakit as $row){ ?>
                                                                            <option value="<?php echo $row->kd_diagnosa;?>">[<?php echo $row->kd_diagnosa;?>]-<?php echo $row->nama_diagnosa;?></option>
                                                                                <?php } ?>
                                                                        </select>
                                                                    </div>
                                                                    </div>
                                                                    <div class="form-group-inner">
                                                                    <div class="login-btn-inner">
                                                                        <div class="row">
                                                                            <div class="col-lg-1"></div>
                                                                            <div class="col-lg-9">
                                                                                <div class="login-horizental cancel-wp pull-left">
                                                                                <button class="btn btn-sm btn-primary login-submit-cs" type="submit">Tampil</button>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="row" style="margin-top:20px !important;">
                                                                    <div class="col-sm-1">
                                                                        
                                                                                <label class="">Gejala</label>
                                                                                
                                                                            </div>
                                                                        <div class="col-sm-6" style="background-color:white !important;">
                                                                        
                                                                        <?php 
                                                                        if(count($tampilsearch) == 0){
                                                                            echo "belum ada relasi";
                                                                        }
                                                                        else{
                                                                        foreach($tampilsearch as $row){ ?>
                                                                        <div>- <?php echo $row->nama_gejala;?></div>
                                                                        <?php }
                                                                        } ?>
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