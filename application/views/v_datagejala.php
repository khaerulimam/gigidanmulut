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
            <div class="admin-dashone-data-table-area">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="sparkline8-list shadow-reset tab-pane fade in animated zoomInDown custom-inbox-message shadow-reset active">
                                <div class="sparkline8-hd">
                                    <div class="main-sparkline8-hd">
                                        <center>
                                        <p><b>Daftar Semua Gejala</b></p>
                                        </center>
                                        <div style="padding:0.5px; background-color:#000; margin-bottom:20px;"></div>
                                        <div class="table-responsive bootstrap">
                                        <?php if ($this->session->flashdata('success')): ?>
			                                 <div class="alert alert-success wow fadeInLeft" data-wow-duration="2s" role="alert">
			                                 <?php echo $this->session->flashdata('success'); ?>
                                        </div>
                                        <?php endif; ?>
                                            <table id="example" class="table table-striped table-bordered" style="width:100%">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Kode Gejala</th>
                                        <th>Nama Gejala</th>
                                        <th>Keterangan</th>
                                        <th>Pilihan</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php
                                     $nomor = 1;
                                    foreach ($tampilgejala as $row) {
                                ?>
                                    <tr>
                                        <td><?php echo $nomor++;?></td>
                                        <td><?php echo $row->kd_gejala;?></td>
                                        <td><?php echo $row->nama_gejala;?></td>
                                        <td><?php echo $row->keterangan;?></td>
                                        <!-- <td><center><img style="border-radius:100px;width:100px;height:100px" src="<?php echo base_url('assets/img/student/'),$achievement_item['photo']?>"/></center></td> -->
                                        <td><a href="<?php echo base_url('index.php/c_admincrud/vieweditgejala/'.$row->kd_gejala); ?>"  ><img src="./img/edit.png" height="20px;" width="20px;"/></a>   |   <a href="<?php echo base_url('index.php/c_admincrud/delgejala/'.$row->kd_gejala); ?>">    <img src="./img/delete.png" height="20px;" width="20px;"/></a></td>
                                    </tr>
                                <?php 
                                }
                                ?>
                                    </tbody>
                                <tfoot>
                                    </tfoot>
                            </table>
                                        </div>
                                      
                                    </div>
                                </div>
                                </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Data table area End-->
        </div>
    </div>
<?php $this->load->view('template_admin/footer'); ?>