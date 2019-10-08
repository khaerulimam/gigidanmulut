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
                                            <p>Silahkan isi identitas pasien untuk melakukan kosultasi</p>
                                        </h3>
                                    </p>
                                    <form action="<?php echo base_url(); ?>admin/pasien/<?=$pasien->id_pasien?>" method="post">
                                        <div class="form-group-inner">
                                            <div class="row">

                                                <div class="col-lg-4">
                                                    <label for="rm" class="">Nomor Rekam Medis</label>
                                                    <input id="rm" type="text" name="rm" maxlength="6" onkeypress="return event.charCode >= 48 && event.charCode <= 57" class="form-control" value="">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group-inner">
                                            <div class="row">
                                                <div class="col-lg-4">
                                                    <label for="nama" class="">Nama Pasien</label>
                                                    <input id="nama" type="text" name="nama_pasien" onkeypress="return event.charCode > 31 && event.charCode < 48 || event.charCode > 57" class="form-control" value="<?=$pasien->nama_pasien?>">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group-inner">
                                            <div class="row">
                                                <div class="col-lg-4">
                                                    <label class="">Jenis Kelamin</label>
                                                    <select class="form-control custom-select-value" name="jenis_kelamin">
                                                        <option value="l" <?php if($pasien->jenis_kelamin == 'l') echo "selected"; ?> >Laki-laki</option>
                                                        <option value="p" <?php if($pasien->jenis_kelamin == 'p') echo "selected";?>>Perempuan</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group-inner">
                                            <div class="row">
                                                <div class="col-lg-4">
                                                    <label for="tgl" class="">Tanggal Lahir</label>
                                                    <input id="tgl" name="tgl" type="date" class="form-control" value="<?=$pasien->tgl_lahir?>">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group-inner">
                                            <div class="row">
                                                <div class="col-lg-4">
                                                    <label for="umur" class="">Umur (tahun)</label>
                                                    <input id="umur" type="number" name="umur" onkeypress="return event.charCode >= 48 && event.charCode <= 57" class="form-control" value="<?=$pasien->umur?>">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group-inner">
                                            <div class="row">
                                                <div class="col-lg-4">
                                                    <label for="nama_kk" class="">Nama Kepala Keluarga</label>
                                                    <input id="nama_kk" type="text" name="nama_kk" onkeypress="return event.charCode > 31 && event.charCode < 48 || event.charCode > 57" class="form-control" value="<?=$pasien->nama_kk?>">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group-inner">
                                            <div class="row">
                                                <div class="col-lg-4">
                                                    <label class="">Alamat</label>
                                                    <textarea rows="3" name="alamat" type="text" class="form-control"><?=$pasien->alamat?></textarea>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group-inner">
                                            <div class="row">
                                                <div class="col-lg-4">
                                                    <label for="telp" class="">Nomor Telepon</label>
                                                    <input id="telp" type="text" name="nomor_telepon" maxlength="13" onkeypress="return event.charCode >= 48 && event.charCode <= 57" class="form-control" value="<?=$pasien->no_hp?>">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group-inner">
                                            <div class="login-btn-inner">
                                                <div class="row">
                                                    <div class="col-lg-4">
                                                        <div class="login-horizental cancel-wp pull-left">
                                                            <button class="btn btn-white" type="reset">Reset</button>
                                                            <input class="btn btn-sm btn-primary login-submit-cs" name="kirim" type="submit" value="Lanjutkan">
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
</div>
<?php $this->load->view('template_user/footer'); ?>