<?php $this->load->view('template_admin/header_menusamping'); ?>
            
            <!-- Breadcome start-->
            <div class="breadcome-area des-none">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="breadcome-list map-mg-t-40-gl shadow-reset">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                        <div class="breadcome-heading">
                                            <form role="search" class="">
												<input type="text" placeholder="Search..." class="form-control">
												<a href=""><i class="fa fa-search"></i></a>
											</form>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                        <ul class="breadcome-menu">
                                            <li><a href="#">Home</a> <span class="bread-slash">/</span>
                                            </li>
                                            <li><span class="bread-blod">Dashboard</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Breadcome End-->
            <!-- Data table area Start-->
            <div class="admin-dashone-data-table-area" style = "margin-top:55px;">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="sparkline8-list shadow-reset tab-pane custom-inbox-message shadow-reset active">
                                <div class="">
                                    <div class="main-sparkline8-hd">
                                        <p style="font-size:20px;"><b>Ubah Password</b></p>
                                        
                                             <?php if ($this->session->flashdata('success')): ?>
			                                 <div class="alert alert-success wow fadeInLeft" data-wow-duration="2s" role="alert">
			                                 <?php echo $this->session->flashdata('success'); ?>
                                        </div>
                                        <?php endif; ?>
                                                <?php if(isset($error)){echo $error;}; ?>
                                                            <form action="<?php echo base_url();?>index.php/c_Form/aksi_gantipassword" method="post">
                                                                <div class="form-group-inner">
                                                                    <div class="row">
                                                                        <div class="col-lg-2">
                                                                            <label class="">Password Lama</label>
                                                                        </div>
                                                                        <div class="col-lg-3">
                                                                            
                                                                            <input type="password" name="old_pass"  class="form-control">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group-inner">
                                                                    <div class="row">
                                                                        <div class="col-lg-2">
                                                                            <label class="">Password Baru</label>
                                                                        </div>
                                                                        <div class="col-lg-3">
                                                                            <input type="password" name="new_pass" class="form-control">
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="form-group-inner">
                                                                    <div class="row">
                                                                        <div class="col-lg-2">
                                                                            <label class="">Confirm Password</label>
                                                                        </div>
                                                                        <div class="col-lg-3">
                                                                            <input type="password" name="confirm_pass" class="form-control">
                                                                        </div>
                                                                    </div>
                                                                </div>                                                                                                           
                                                                <div class="form-group-inner">
                                                                    <div class="login-btn-inner">
                                                                        <div class="row">
                                                                            <div class="col-lg-2"></div>
                                                                            <div class="col-lg-3">
                                                                                <div class="login-horizental cancel-wp pull-left">
                                                                                    <button class="btn btn-white" type="reset">Reset</button>
                                                                                    <input value="Ganti" class="btn btn-sm btn-primary login-submit-cs" type="submit" name="change_pass">
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
<?php $this->load->view('template_admin/footer') ?>