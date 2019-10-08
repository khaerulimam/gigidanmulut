<?php $this->load->view('template_admin/header_menusamping'); ?>
<div class="admin-dashone-data-table-area" style="margin-top:30px;">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="sparkline8-list shadow-reset tab-pane custom-inbox-message shadow-reset active">
                    <div class="">
                        <div class="main-sparkline8-hd">
                            <center>
                                <p style="margin-bottom:50px;"><b>Daftar Riwayat Konsultasi</b></p>
                            </center>
                            <!-- <div style="padding:0.5px; background-color:#000; margin-bottom:20px;"></div> -->
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
                                            <th>Rekam Medis</th>
                                            <th>Nama Pasien</th>
                                            <th>Tanggal Konsultasi</th>
                                            <th>Pilihan</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $no = 1;
                                        foreach ($riwayat as $row) {
                                            ?>
                                            <tr>
                                                <td><?php echo $no++ ?></td>
                                                <td><?php echo $row['rekam_medis']; ?></td>
                                                <td><?php echo $row['nama_pasien']; ?></td>
                                                <td><?php echo $row['tanggal'] ?></td>
                                                <!-- <td><center><img style="border-radius:100px;width:100px;height:100px" src="<?php echo base_url('assets/img/student/'), $achievement_item['photo'] ?>"/></center></td> -->
                                                <td>
                                                    <a href="<?=base_url()?>admin/detail/konsultasi?rm=<?=$row['rekam_medis']?>" class="btn btn-info">Detail</a>
                                                </td>
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