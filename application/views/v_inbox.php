<?php $this->load->view('template_admin/header_menusamping'); ?>
            <!-- Data table area Start-->
            <div class="admin-dashone-data-table-area" style = "margin-top:60px;">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="sparkline8-list shadow-reset tab-pane fade in animated zoomInDown custom-inbox-message shadow-reset active">
                                <div class="sparkline8-hd">
                                    <div class="main-sparkline8-hd" >
                                        <p><b>Masukan Gejala Penyakit</b></p>
                                        <div style="padding:0.5px; background-color:#000; margin-bottom:20px;"></div>
                                                            <form action="<?php echo base_url();?>index.php/c_admincrud/inputgejala" method="post">
                                                                <div class="form-group-inner">
                                                                    <div class="row">
                                                                        <div class="col-lg-1">
                                                                            <label class="">Kode</label>
                                                                        </div>
                                                                        <div class="col-lg-9">
                                                                             <?php if ($codegejala==null){
                                                                                ?>
                                                                                 <input type="text" name="kode" readonly="readonly" class="form-control" value="G1">
                                                                                <?php
                                                                            }
                                                                            else{
                                                                            foreach ($codegejala as $key) {
                                                                                $ht = $key->id;
                                                                                $ht++;
                                                                            }
                                                                          
                                                                            ?>
                                                                            <input type="text" name="kode" readonly="readonly" class="form-control" value="<?php echo "G",$ht;?>">
                                                                            <?php
                                                                            
                                                                            }
                                                                            ?>
                                                                         </div>   
                                                                    </div>
                                                                </div>
                                                                <div class="form-group-inner">
                                                                    <div class="row">
                                                                        <div class="col-lg-1">
                                                                            <label class="">Gejala</label>
                                                                        </div>
                                                                        <div class="col-lg-9">
                                                                            <input name="gejala" type="text" name="gejala" class="form-control">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group-inner">
                                                                    <div class="row">
                                                                        <div class="col-lg-1">
                                                                            <label class="">Keterangan</label>
                                                                        </div>
                                                                        <div class="col-lg-9">
                                                                            <textarea rows="4" type="text" name="keterangan" class="form-control"></textarea>
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