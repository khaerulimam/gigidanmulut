<?php $this->load->view('template_user/header'); ?>
           
            
        
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

                                            <p><h3>
                                            <b>Silahkan isi identitas anda untuk melakukan kosultasi</b>
                                            </h3></p>
                                            <div style="padding:1px; background-color:#000; margin-bottom:20px; margin-right:55%;"></div>

                                            <form action="<?php echo base_url();?>index.php/c_user/inputpasien" method="post">
                                                                <div class="form-group-inner">
                                                                    <div class="row">
                                                                        <div class="col-lg-4">
                                                                            <label class="">Nama Pasien</label>
                                                                        </div>
                                                                        <div class="col-lg-4" style="margin-left:-100px !important;">
                                                                        
                                                                            <input type="text" name="nama_pasien" class="form-control" value="">
                                                                            
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group-inner">
                                                                    <div class="row">
                                                                        <div class="col-lg-4">
                                                                            <label class="">Umur</label>
                                                                        </div>
                                                                        <div class="col-lg-4" style="margin-left:-100px !important;">
                                                                            <input type="text" name="umur" class="form-control">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group-inner">
                                                                    <div class="row">
                                                                        <div class="col-lg-4">
                                                                            <label class="">Nomor Telepon</label>
                                                                        </div>
                                                                        <div class="col-lg-4" style="margin-left:-100px !important;">
                                                                            <input type="text" name="nomor_telepon" class="form-control">
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="form-group-inner">
                                                                    <div class="row">
                                                                        <div class="col-lg-4">
                                                                            <label class="">Jenis Kelamin</label>
                                                                        </div>
                                                                        <div class="col-lg-4" style="margin-left:-100px !important;">
                                                                        <select class="form-control custom-select-value" name="jenis_kelamin">
                             
                                                                                 <option value="l">Laki-laki</option>
                                                                                 <option value="p">Perempuan</option>
                                                
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="form-group-inner">
                                                                    <div class="row">
                                                                        <div class="col-lg-4">
                                                                            <label class="">Alamat</label>
                                                                        </div>
                                                                        <div class="col-lg-4" style="margin-left:-100px !important;">
                                                                            <textarea rows="4" name="alamat" type="text" class="form-control"></textarea>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                
                                                                <div class="form-group-inner">
                                                                    <div class="login-btn-inner">
                                                                        <div class="row">
                                                                            <div class="col-lg-4" style="margin-left:-100px !important;"></div>
                                                                            <div class="col-lg-4">
                                                                                <div class="login-horizental cancel-wp pull-left">
                                                                                    <button class="btn btn-white" type="reset">Reset</button>
                                                                                    <button class="btn btn-sm btn-primary login-submit-cs" type="submit">Lanjutkan</button>
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