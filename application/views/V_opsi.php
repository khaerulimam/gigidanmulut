<?php //$this->load->view('template_user/header'); 
?>
<?php $this->load->view('template_admin/header_menusamping'); ?>

<!-- Basic Form Start -->
<div class="dual-list-box-area mg-b-40" style="margin-top:20px;">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="sparkline10-list shadow-reset">
                    <div class="sparkline10-graph">
                        <div class="basic-login-form-ad">
                            <div class="row">
                                <div class="col-lg-12">
                                    <form action="<?php echo base_url(); ?>konsultasi/proses" method="post">
                                        <p>
                                            <h5>
                                                <b>
                                                    <?php $no = 0;
                                                    foreach ($datagejala as $data) {
                                                        $no++;
                                                        ?>
                                                        <div class="row">
                                                            <div class="col-12">
                                                                <div class="form-check col-md-5 col-lg-5">
                                                                    <p>
                                                                        <?php echo $no . " . " ?>
                                                                        <input type="checkbox" name="gejala[]" value="<?=$data->kd_gejala?>" class="form-check-input" id="exampleCheck1">
                                                                        <label class="form-check-label" for="exampleCheck1">Apakah <?= $data->nama_gejala  ?> ?</label>
                                                                    </p>
                                                                </div>
                                                                <div class="form-group col-md-4 col-lg-4">
                                                                    <select class="form-control" name="tingkat[]">
                                                                        <option value="">Pilih Tingkat Keyakinan</option>
                                                                        <option value="-0.1">Pasti tidak (-0.1)</option>
                                                                        <option value="-0.8">Hampir tidak Pasti (-0.8)</option>
                                                                        <option value="-0.6">Kemungkinan Besar tidak (-0.6)</option>
                                                                        <option value="-0.4">Mungkin Tidak (-0.4)</option>
                                                                        <option value="0.2">Tidak Tahu (-0.2 - 0.2)</option>
                                                                        <option value="0.4">Mungkin (0.4)</option>
                                                                        <option value="0.6">Kemungkinan Besar (0.6)</option>
                                                                        <option value="0.8">Hampir Pasti (0.8)</option>
                                                                        <option value="1">Pasti (1)</option>
                                                                    </select>
                                                                </div>
                                                                <input type="hidden" name="id_pasien" value="<?=$this->uri->segment('3')?>">
                                                                <div class="col-md-4 col-lg-4"></div>
                                                            </div>
                                                        </div>
                                                    <?php } ?>
                                                </b>
                                            </h5>
                                        </p>
                                        <div class="form-group-inner">
                                            <div class="login-btn-inner">
                                                <div class="row">
                                                    <div class="col-lg-2" style="margin-left:-220px !important;"></div>
                                                    <div class="col-lg-4">
                                                        <div class="login-horizental cancel-wp pull-left">
                                                            <input name="kirim" class="btn btn-white" type="submit" value="Simpan">
                                                        </div>
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
    </div> <!-- Basic Form End-->
</div>
<?php //$this->load->view('template_user/footer'); 
?>
<?php $this->load->view('template_admin/footer'); ?>