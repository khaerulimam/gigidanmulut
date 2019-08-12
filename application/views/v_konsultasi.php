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

                                    <p>
                                        <h5>
                                            <b>Apakah anda mengalami gejala <?= $gejala->nama_gejala ?> ?</b>
                                        </h5>
                                    </p>
                                    <form action="<?php echo base_url(); ?>konsultasi/proses_pertanyaan/<?=$id_pasien?>?gejala=<?=$gejala->kd_gejala?>" method="post">
                                        <div class="form-group-inner">
                                            <div class="login-btn-inner">
                                                <div class="row">
                                                    <div class="col-lg-2" style="margin-left:-220px !important;"></div>
                                                    <div class="col-lg-4">
                                                        <div class="login-horizental cancel-wp pull-left">
                                                            <button class="btn btn-white" data-toggle="modal" data-target="#exampleModal" type="button">Ya</button>
                                                            <input type="hidden" name="jawab" value="tidak">
                                                            <input class="btn btn-white" name="kirim" type="submit" value="tidak">
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
<!-- Basic Form End-->
</div>
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <form action="<?php echo base_url(); ?>konsultasi/proses_pertanyaan/<?=$id_pasien?>?gejala=<?=$gejala->kd_gejala?>" method="POST">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Seberapa yakin anda mengalami gejala tersebut?</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <select class="form-control" name="tingkat">
                        <option value="">Pilih Tingkat Keyakinan</option>
                        <option value="0.2">Kemungkinan kecil(0,2)</option>
                        <option value="0.4">Mungkin (0,4)</option>
                        <option value="0.6">Kemungkinan besar (0,6)</option>
                        <option value="0.8">Hampir pasti (0,8)</option>
                        <option value="1">Pasti (1)</option>
                    </select>
                    <input type="hidden" name="jawab" value="ya">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                    <input type="submit" class="btn btn-primary" name="kirim" value="Simpan">
                </div>
            </div>
        </form>
    </div>
</div>
<?php $this->load->view('template_user/footer'); ?>