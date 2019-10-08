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
                                    <?php //$this->session->flashdata('pesan') ?>
                                    <p>
                                        <h3>
                                            <p>Konsultasi Pasien</p>
                                        </h3>
                                    </p>
                                    <form action="<?php echo base_url(); ?>admin/konsultasi" method="post">
                                        <div class="form-group-inner">
                                            <div class="row">
                                                <div class="col-lg-4">
                                                    <label for="rm" class="">Nomor Rekam Medis</label>
                                                    <input id="rm" type="text" name="rm" onkeypress="return event.charCode >= 48 && event.charCode <= 57" class="form-control" value="">
                                                </div>
                                                <div class="login-btn-inner" style="margin-top:5px;">
                                                    <div class="row">
                                                        <div class="col-lg-4">
                                                            <div class="login-horizental cancel-wp pull-left">
                                                                <input class="btn btn-sm btn-primary login-submit-cs" name="cari" type="submit" value="Cari">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                    <p>
                                        Pasien Baru Klik Tombol dibawah ini<br>
                                        <a href="<?=base_url()?>admin/konsultasi/daftar" class="btn btn-md btn-info">Daftar</a>
                                    </p>
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
<div style="margin-bottom:290px"></div>
<!-- modal notice -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Hasil Pencarian</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <?= $this->session->flashdata('pesan')['rekam_medis'] ?>
            </div>
            <div class="modal-footer">
                <!-- <a href="<?= base_url() ?>admin/konsultasi/<?= $this->session->flashdata('pesan')['pasien']->id_pasien ?>" class="btn btn-secondary">Konsultasi</a> -->
                <!-- <button type="button" class="btn btn-primary">OK</button> -->
            </div>
        </div>
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