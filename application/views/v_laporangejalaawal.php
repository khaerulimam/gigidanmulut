<?php $this->load->view('template_admin/header_menusamping'); ?>
            
             
            <!-- Data table area Start-->
            <div class="admin-dashone-data-table-area" style = "margin-top:60px;">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="sparkline8-list shadow-reset tab-pane custom-inbox-message shadow-reset active">
                                <div class="sparkline8-hd">
                                    <div class="main-sparkline8-hd">
                                        <p><b>Gejala per Penyakit</b></p>
                                        <div style="padding:0.5px; background-color:#000; margin-bottom:20px;"></div>
                                                            <form action="<?php echo base_url() ?>index.php/c_admincrud/search_gejala">
                                                                <div class="form-group-inner">
                                                                    <div class="row">
                                                                        <div class="col-sm-1">
                                                                            <label class="">Penyakit</label>
                                                                        </div>
                                                                        <div class="col-sm-6">
                                                                            
                                                                            <select class="form-control custom-select-value" name="cari">
                                                                            
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