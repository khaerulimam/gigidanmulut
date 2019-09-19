<?php //$this->load->view('template_user/header'); 
?>
<?php $this->load->view('template_admin/header_menusamping'); ?>

<!-- Basic Form Start -->
<div class="dual-list-box-area mg-b-40" style="margin-top:20px;">
    <div class="container-fluid">
        <div class="col-lg-12">
            <div class="sparkline8-list basic-res-b-30 shadow-reset">
                <div class="sparkline8-hd">
                    <div class="main-sparkline8-hd">
                        <center>
                            <h1>Jawablah pertanyaan dibawah ini !</h1>
                        </center>
                    </div>
                </div>
                <div class="sparkline8-graph">
                    <div class="basic-login-form-ad">
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="basic-login-inner">
                                    <div class="alert alert-info" role="alert">
                                        <p style="text-align: center; font-size: 25px;"><strong>Apakah anda mengalami gejala <?= $gejala->nama_gejala ?> ?</strong></p>
                                    </div>
                                    <form style="margin-top:100px" action="<?php echo base_url(); ?>konsultasi/proses_pertanyaan/<?= $id_pasien ?>?gejala=<?= $gejala->kd_gejala ?>" method="post">
                                        <div class="form-group-inner">
                                            <div class="login-btn-inner">
                                                <div class="row">
                                                    <!-- <div class="col-lg-2" style="margin-left:-220px !important;"></div> -->
                                                    <div class="col-lg-6">
                                                        <!-- <div class="login-horizontal cancel-wp pull-left"> -->
                                                        <center><input type="radio" class="radio" name="jawab" data-toggle="modal" data-target="#exampleModal" type="button">Ya</center>
                                                        <!-- </div> -->
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <!-- <input type="hidden" name="jawab" value="tidak"> -->
                                                        <center><input class="radio" name="jawab" type="radio" value="Tidak">Tidak</center>
                                                    </div>
                                                </div>
                                                <div class="row" style="margin-top:100px">
                                                    <div class="col-lg-12">
                                                        <center><input type="submit" name="kirim" class="btn btn-lg btn-success" value="Lanjutkan"></center>
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
        <?php //echo json_encode($this->session->flashdata('pesan'))  
        ?>

        <!-- <div class="row">
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
                                <form action="<?php echo base_url(); ?>konsultasi/proses_pertanyaan/<?= $id_pasien ?>?gejala=<?= $gejala->kd_gejala ?>" method="post">
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
    </div> -->
    </div>
</div>
<!-- Basic Form End-->
</div>
<!-- modal notice -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Hasil Diagnosa</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <?= $this->session->flashdata('pesan')['hasil_seleksi'] ?>
            </div>
            <div class="modal-footer">
                <a href="<?= base_url() ?>admin/konsultasi/<?= $this->session->flashdata('pesan')['pasien']->id_pasien ?>" class="btn btn-secondary">Konsultasi</a>
                <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
            </div>
        </div>
    </div>
</div>
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <form action="<?php echo base_url(); ?>konsultasi/proses_pertanyaan/<?= $id_pasien ?>?gejala=<?= $gejala->kd_gejala ?>" method="POST">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Seberapa yakin anda mengalami gejala tersebut?</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <select class="form-control" name="tingkat" id="select" required>
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
                    <!-- <button type="button" class="btn btn-secondary" data-dismiss="modal">Simpan</button> -->
                    <input type="submit" class="btn btn-primary" name="kirim" value="Simpan">
                </div>
            </div>
        </form>
    </div>
</div>
<?php $this->load->view('template_user/footer'); ?>
<?php if ($this->session->flashdata('pesan') != null) { ?>
    <script type="text/javascript">
        $(window).load(function() {
            $('#myModal').modal('show');
        });
    </script>
<?php } ?>
<script>
    $('#select').on('hide.bs.select', function() {
        $(this).trigger("focusout");
    });
</script>