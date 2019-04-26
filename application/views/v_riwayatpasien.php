<?php $this->load->view('template_admin/header_menusamping'); ?>
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
                                        <div style="padding:0.5px; background-color:#000; margin-bottom:20px;"></div>
                                        <div class="table-responsive bootstrap">
                                            <table id="example" class="table table-striped table-bordered" style="width:100%">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama Pasien</th>
                                        <th>Umur</th>
                                        <th>Nomor Telepon</th>
                                        <th>Jenis Kelamin</th>
                                        <th>Alamat</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach($pasien as $row){
                                        $no=1;?>
                                    <tr>
                                        <td><?php echo $no++;?></td>
                                        <td><?php echo $row->nama_pasien;?> </td>
                                        <td><?php echo $row->umur;?> </td>
                                        <td><?php echo $row->no_hp;?> </td>
                                        <td><?php echo $row->jenis_kelamin;?> </td>
                                        <td><?php echo $row->alamat;?> </td>
                                        <!-- <td><center><img style="border-radius:100px;width:100px;height:100px" src="<?php echo base_url('assets/img/student/'),$achievement_item['photo']?>"/></center></td> -->
                                      
                                        <td><a data-toggle="modal" data-target="#myModal"><img src="./img/edit.png" height="20px;" width="20px;"/>    </a>   |   <a href="#">    <img src="./img/delete.png" height="20px;" width="20px;"/></a></td>
                                    </tr>
                                    <?php
                                     } ?>
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