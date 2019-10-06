<?php $this->load->view('template_admin/header_menusamping'); ?>
<!-- Data table area Start-->
<div class="admin-dashone-data-table-area" style="margin-top:60px;">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="sparkline8-list shadow-reset tab-pane custom-inbox-message shadow-reset active">
                    <div class="sparkline80-hd">
                        <div class="main-sparkline8-hd">
                            <p><b>Hasil Konsultasi tanggal <?=$tglk?></b></p>
                            <div style="padding:0.5px; background-color:#000; margin-bottom:20px;"></div>
                            <p><b>Data Pasien</b></p>
                            <div class="row">
                                <div class="col-lg-12 col-md-12">
                                    <p class="col-lg-2 col-md-2">Nama </p>
                                    <p class="col-lg-10 col-md-10"> <?= $pasien->nama_pasien ?></p>
                                    <p class="col-lg-2 col-md-2">Jenis Kelamin </p>
                                    <p class="col-lg-10 col-md-10"><?php if ($pasien->jenis_kelamin == "l") {
                                                                        echo "Laki - Laki";
                                                                    } else {
                                                                        echo "Perempuan";
                                                                    } ?>
                                    </p>
                                    <p class="col-lg-2 col-md-2">Umur </p>
                                    <p class="col-lg-10 col-md-10"><?= $pasien->umur ?></p>
                                    <p class="col-lg-2 col-md-2">Alamat </p>
                                    <p class="col-lg-10 col-md-10"> <?= $pasien->alamat ?></p>
                                    <p class="col-lg-2 col-md-2">No Telp</p>
                                    <p class="col-lg-10 col-md-10"> <?= $pasien->no_hp ?></p>
                                </div>
                            </div>
                            <br>
                            <h4><b>Data Hasil diagnosa</b></h4>
                            <p><b>Gejala Terpilih</b></p>
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th scope="col">No</th>
                                        <th scope="col">Kode Gejala</th>
                                        <th scope="col">Nama Gejala</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $no = 1;
                                    foreach ($gejala_pasien as $key => $val) { ?>
                                        <tr>
                                            <th><?= $no++ ?></th>
                                            <td><?= $val['kd_gejala'] ?></td>
                                            <td><?= $val['nama_gejala'] ?></td>
                                        </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                            <p><b>Hasil Analisa</b></p>
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th scope="col">No</th>
                                        <th scope="col">Diagnosa</th>
                                        <th scope="col">Kepercayaan</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $no = 1;
                                    foreach ($hasil_seleksi as $key => $val) {
                                        ?>
                                        <tr>
                                            <th scope="row"><?= $no++ ?></th>
                                            <td><?= $val['nama_diagnosa'] ?></td>
                                            <td><?= $val['nilai'] ?></td>
                                        </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                            <p><b>Kesimpulan</b></p>
                            <p>Dari hasil perhitungan tersebut maka dipastikan anda terkena penyakit <b><?= $detail_penyakit->nama_diagnosa ?></b> dengan nilai <b><?= $nilai_tertinggi * 100 ?>%</b></p>
                            <p><b>Solusi</b></p>
                            <p><?= $detail_penyakit->solusi ?></p>
                            <br>
                            <a href="<?= base_url('konsultasi/cetak_hasil?id=' . $pasien->id_pasien) ?>" target=_blank class="btn btn-info">Cetak Hasil</a> atau <a href="<?= base_url('admin/konsultasi/' . $pasien->id_pasien) ?>" class="btn btn-info">Konsultasi</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $this->load->view('template_admin/footer'); ?>