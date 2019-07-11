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

                                            <p><h5>
                                            <b>Apakah anda mengalami gejala gusi berdarah?</b>
                                            </h5></p>
                                            <form action="<?php echo base_url();?>index.php/c_user/inputpasien" method="post">
                                                                <div class="form-group-inner">
                                                                    <div class="login-btn-inner">
                                                                        <div class="row">
                                                                            <div class="col-lg-2" style="margin-left:-220px !important;"></div>
                                                                            <div class="col-lg-4">
                                                                                <div class="login-horizental cancel-wp pull-left">
                                                                                    <button class="btn btn-white" type="reset">Ya</button>
                                                                                    <button class="btn btn-white" type="submit">Tidak</button>
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