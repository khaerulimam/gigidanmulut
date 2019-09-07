<?php $this->load->view('template_admin/header_menusamping'); ?>

<!-- Breadcome start-->
<!-- <div class="admin-dashone-data-table-area" style="margin-top: 30px;">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="breadcome-list map-mg-t-40-gl shadow-reset">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
         
                            <ul class="breadcome-menu">
                                <li><a href="#">Home</a> <span class="bread-slash">/</span>
                                </li>
                                <li><span class="bread-blod">Dashboard/Data Gabungan</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> -->
<!-- Breadcome End-->
<!-- Data table area Start-->
<div class="admin-dashone-data-table-area" style="margin-top: 30px;">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="sparkline8-list shadow-reset tab-pane custom-inbox-message shadow-reset active">
                    <div class="">
                        <div class="main-sparkline8-hd">
                            <center>
                                <p><b>Data Relasi</b></p>
                            </center>
                           
                            <div class="table-responsive bootstrap">
                                <?php if ($this->session->flashdata('success')) : ?>
                                    <div class="alert alert-success wow fadeInLeft" data-wow-duration="2s" role="alert">
                                        <?php echo $this->session->flashdata('success'); ?>
                                    </div>
                                <?php endif; ?>
                                <table id="example" class="table table-striped table-bordered" style="width:100%">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Penyakit</th>
                                            <th>Gejala</th>
                                            <!-- <th>Nilai MB</th>
                                            <th>Nilai MD</th> -->
                                            <th>Pilihan</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $no = 1;
                                        foreach ($relasi as $row) { ?>
                                            <tr>
                                                <td><?php echo $no++; ?></td>
                                                <td>[<?php echo $row[0]['kd_diagnosa'] ?>] - <?php echo $row[0]['nama_diagnosa'] ?></td>
                                                <td>
                                                    <?php foreach($row as $sub_row){ ?>
                                                        <?php echo  $sub_row['nama_gejala'] . "<br>" ?>
                                                    <?php } ?>
                                                </td>
                                                <!-- <td><?php //echo $row->mb ?></td>
                                                <td><?php //echo $row->md ?></td> -->
                                                <!-- <td><center><img style="border-radius:100px;width:100px;height:100px" src="<?php echo base_url('assets/img/student/'), $achievement_item['photo'] ?>"/></center></td> -->
                                                <td><a href="<?php echo base_url('index.php/c_admincrud/vieweditrelasi/' . $row[0]['kd_diagnosa']); ?>"><button class="btn btn-success" type="reset">Ubah</button></a> | <a href="<?php echo base_url('index.php/c_admincrud/delrelasi/' . $row[0]['kd_diagnosa']); ?>"> <button class="btn btn-sm btn-white login-submit-cs" type="submit">Hapus</button></a></td>
                                            </tr>

                                        <?php } ?>

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