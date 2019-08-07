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
                        <h4> Pilihlah Pertanyaan Sesuai Dengan Gejala Yang Anda Alami</h4>
                        <div class="basic-login-form-ad">
                            <div class="row">
                                <div class="col-lg-12">

                                </div>
                                <div class="col-lg-12">
                                    <form action="<?php echo base_url(); ?>konsultasi/proses" method="post">
                                        <p>
                                            <h5>
                                                <!-- <b> -->
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
                                                                    <!-- <input type="number" class="form-control" min="0" max="1" placeholder="0 sampai 1"> -->
                                                                    <select class="form-control" name="tingkat[]">
                                                                        <option value="">Pilih Tingkat Keyakinan</option>
                                                                        <option value="0.2">Pasti Tidak (0,2)</option>
                                                                        <option value="0.3">Hampir tidak pasti (0,3)</option>
                                                                        <option value="0.4">Kemungkinan besar tidak (0,4)</option>
                                                                        <option value="0.5">Mungkin tidak (0,5)</option>
                                                                        <option value="0.6">Kemungkinan kecil(0,6)</option>
                                                                        <option value="0.7">Mungkin (0,7)</option>
                                                                        <option value="0.8">Kemungkinan besar (0,8)</option>
                                                                        <option value="0.9">Hampir pasti (0,9)</option>
                                                                        <option value="1">Pasti (1)</option>
                                                                    </select>
                                                                </div>
                                                                <input type="hidden" name="id_pasien" value="<?=$this->uri->segment('3')?>">
                                                                <div class="col-md-4 col-lg-4"></div>
                                                            </div>
                                                        </div>
                                                    <?php } ?>
                                                <!-- </b> -->
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