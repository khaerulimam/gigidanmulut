<?php $this->load->view('template_admin/header_menusamping'); ?>
<!-- Data table area Start-->
<div class="admin-dashone-data-table-area" style="margin-top:30px;">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="sparkline8-list shadow-reset tab-pane custom-inbox-message shadow-reset active">
                    <div >
                        <div class="main-sparkline8-hd">
                            
                           <div class="row">
                               <div class="col-md-12 col-lg-12">
                                   <div class="col-md-6 col-lg-6">
                                   <p><b>Masukan Gejala Penyakit</b></p><br>
                                   <form action="<?php echo base_url(); ?>index.php/c_admincrud/inputgejala" method="post">
                                <div class="form-group-inner">
                                    <div class="row">
                                      
                                        <div class="col-lg-9">
                                            <?php if ($codegejala == null) {
                                                ?>
                                                 <label class="">Kode</label>
                                                <input type="text" name="kode" readonly="readonly" class="form-control" value="G1">
                                            <?php
                                            } else {
                                                foreach ($codegejala as $key) {
                                                    $ht = substr($key->kd_gejala, 1, 2);
                                                    $ht++;
                                                }
                                                ?>
                                                 <label class="">Kode</label>
                                                <input type="text" name="kode" readonly="readonly" class="form-control" value="<?php echo "G", $ht; ?>">
                                            <?php
                                            }
                                            ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group-inner">
                                    <div class="row">
                                      
                                        <div class="col-lg-9">
                                        <label class="">Gejala</label>
                                            <input name="gejala" type="text" name="gejala" class="form-control" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group-inner">
                                    <div class="row">
                                       
                                        <div class="col-lg-9">
                                        <label class="">Bobot</label>
                                            <input name="bobot" type="number" class="form-control" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group-inner">
                                    <div class="row">
                                      
                                        <div class="col-lg-9">
                                        <label class="">Keterangan</label>
                                            <textarea rows="4" type="text" name="keterangan" class="form-control"></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group-inner">
                                    <div class="login-btn-inner">
                                        <div class="row">
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
        </div>
    </div>
</div>
<?php $this->load->view('template_admin/footer'); ?>