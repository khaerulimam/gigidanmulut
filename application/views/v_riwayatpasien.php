<?php $this->load->view('template_admin/header_menusamping'); ?>
            <!-- Breadcome start-->
            <div class="breadcome-area mg-b-30 small-dn">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="breadcome-list map-mg-t-40-gl shadow-reset">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
										<div class="breadcome-heading">
											</div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                        <ul class="breadcome-menu">
                                            <li><a href="#"><span class="bread-blod">Home</span></a>
                                            </li>
                                            <!-- <li><span class="bread-blod">Dashboard</span>
                                            </li> -->
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Breadcome End-->
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
                                        <p><b>Daftar Riwayat Pasien</b></p>
                                        </center>
                                        <div class="table-responsive bootstrap">
                                            <table id="example" class="table table-striped table-bordered" style="width:100%">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama Pasien</th>
                                        <th>Tempat Tanggal Lahir</th>
                                        <th>Asal</th>
                                        <th>Penyakit</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>Anton</td>
                                        <td></td>
                                        <td></td>
                                        <!-- <td><center><img style="border-radius:100px;width:100px;height:100px" src="<?php echo base_url('assets/img/student/'),$achievement_item['photo']?>"/></center></td> -->
                                        <td><a data-toggle="modal" data-target="#myModal"><img src="./img/edit.png" height="20px;" width="20px;"/>    </a>   |   <a href="#">    <img src="./img/delete.png" height="20px;" width="20px;"/></a></td>
                                    </tr>

                                    <tr>
                                        <td>2</td>
                                        <td>Budi</td>
                                        <td></td>
                                        <td></td>
                                        <!-- <td><center><img style="border-radius:100px;width:100px;height:100px" src="<?php echo base_url('assets/img/student/'),$achievement_item['photo']?>"/></center></td> -->
                                        <td><a data-toggle="modal" data-target="#myModal"><img src="./img/edit.png" height="20px;" width="20px;"/>    </a>   |   <a href="#">    <img src="./img/delete.png" height="20px;" width="20px;"/></a></td>
                                    </tr>

                                    <tr>
                                        <td>3</td>
                                        <td>Dodi</td>
                                        <td></td>
                                        <td></td>
                                        <!-- <td><center><img style="border-radius:100px;width:100px;height:100px" src="<?php echo base_url('assets/img/student/'),$achievement_item['photo']?>"/></center></td> -->
                                        <td><a data-toggle="modal" data-target="#myModal"><img src="./img/edit.png" height="20px;" width="20px;"/>    </a>   |   <a href="#">    <img src="./img/delete.png" height="20px;" width="20px;"/></a></td>
                                    </tr>

                                    <tr>
                                        <td>4</td>
                                        <td>Joni</td>
                                        <td></td>
                                        <td></td>
                                        <!-- <td><center><img style="border-radius:100px;width:100px;height:100px" src="<?php echo base_url('assets/img/student/'),$achievement_item['photo']?>"/></center></td> -->
                                        <td><a data-toggle="modal" data-target="#myModal"><img src="./img/edit.png" height="20px;" width="20px;"/>    </a>   |   <a href="#">    <img src="./img/delete.png" height="20px;" width="20px;"/></a></td>
                                    </tr>

                                    <tr>
                                        <td>5</td>
                                        <td>Iqbal</td>
                                        <td></td>
                                        <td></td>
                                        <!-- <td><center><img style="border-radius:100px;width:100px;height:100px" src="<?php echo base_url('assets/img/student/'),$achievement_item['photo']?>"/></center></td> -->
                                        <td><a data-toggle="modal" data-target="#myModal"><img src="./img/edit.png" height="20px;" width="20px;"/>    </a>   |   <a href="#">    <img src="./img/delete.png" height="20px;" width="20px;"/></a></td>
                                    </tr>

                                    <tr>
                                        <td>6</td>
                                        <td>Bagus</td>
                                        <td></td>
                                        <td></td>
                                        <!-- <td><center><img style="border-radius:100px;width:100px;height:100px" src="<?php echo base_url('assets/img/student/'),$achievement_item['photo']?>"/></center></td> -->
                                        <td><a data-toggle="modal" data-target="#myModal"><img src="./img/edit.png" height="20px;" width="20px;"/>    </a>   |   <a href="#">    <img src="./img/delete.png" height="20px;" width="20px;"/></a></td>
                                    </tr>

                                    <tr>
                                        <td>7</td>
                                        <td>Fajar</td>
                                        <td></td>
                                        <td></td>
                                        <!-- <td><center><img style="border-radius:100px;width:100px;height:100px" src="<?php echo base_url('assets/img/student/'),$achievement_item['photo']?>"/></center></td> -->
                                        <td><a data-toggle="modal" data-target="#myModal"><img src="./img/edit.png" height="20px;" width="20px;"/>    </a>   |   <a href="#">    <img src="./img/delete.png" height="20px;" width="20px;"/></a></td>
                                    </tr>

                                    <tr>
                                        <td>8</td>
                                        <td>Fahmi</td>
                                        <td></td>
                                        <td></td>
                                        <!-- <td><center><img style="border-radius:100px;width:100px;height:100px" src="<?php echo base_url('assets/img/student/'),$achievement_item['photo']?>"/></center></td> -->
                                        <td><a data-toggle="modal" data-target="#myModal"><img src="./img/edit.png" height="20px;" width="20px;"/>    </a>   |   <a href="#">    <img src="./img/delete.png" height="20px;" width="20px;"/></a></td>
                                    </tr>

                                    <tr>
                                        <td>9</td>
                                        <td>Alif</td>
                                        <td></td>
                                        <td></td>
                                        <!-- <td><center><img style="border-radius:100px;width:100px;height:100px" src="<?php echo base_url('assets/img/student/'),$achievement_item['photo']?>"/></center></td> -->
                                        <td><a data-toggle="modal" data-target="#myModal"><img src="./img/edit.png" height="20px;" width="20px;"/>    </a>   |   <a href="#">    <img src="./img/delete.png" height="20px;" width="20px;"/></a></td>
                                    </tr>

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
<?php $this->load->view('template_admin/footer') ?>