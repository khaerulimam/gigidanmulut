<?php $this->load->view('template_admin/header_menusamping'); ?>
<!-- Data table area Start-->
<div class="admin-dashone-data-table-area" style="margin-top:60px;">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="sparkline8-list shadow-reset tab-pane custom-inbox-message shadow-reset active">
                    <div class="sparkline80-hd">
                        <div class="main-sparkline8-hd">
                            <p><b>Hasil Konsultasi</b></p>
                            <div style="padding:0.5px; background-color:#000; margin-bottom:20px;"></div>
                            <div class="row">
                                <div class="col-lg-12 col-md-12">
                                    <p class="col-lg-6 col-md-6"><b>Data Pasien</b></p>
                                    <p class="col-lg-6 col-md-6" style="text-align:right"><b>Nomor Rekam Medis</b></p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12 col-md-12">
                                    <p class="col-lg-2 col-md-2">Nama Pasien</p>
                                    <p class="col-lg-5 col-md-5"> <?= $pasien->nama_pasien ?></p>
                                    <p class="col-lg-5 col-md-5" style="text-align: right"> <b><?= $rm ?></b></p>
                                    <p class="col-lg-2 col-md-2">Jenis Kelamin </p>
                                    <p class="col-lg-10 col-md-10"><?php if ($pasien->jenis_kelamin == "l") {
                                                                        echo "Laki - Laki";
                                                                    } else {
                                                                        echo "Perempuan";
                                                                    } ?>
                                    </p>
                                    <p class="col-lg-2 col-md-2">Tanggal Lahir / Umur </p>
                                    <p class="col-lg-10 col-md-10"><?= date("d-m-Y", strtotime($pasien->tgl_lahir)) ." / " . $pasien->umur ?> Tahun</p>
                                    <p class="col-lg-2 col-md-2">Nama Kepala Keluarga</p>
                                    <p class="col-lg-10 col-md-10"> <?= $pasien->nama_kk ?></p>
                                    <p class="col-lg-2 col-md-2">Alamat </p>
                                    <p class="col-lg-10 col-md-10"> <?= $pasien->alamat ?></p>
                                    <p class="col-lg-2 col-md-2">No Telp</p>
                                    <p class="col-lg-10 col-md-10"> <?= $pasien->no_hp ?></p>
                                    <p class="col-lg-2 col-md-2">Waktu Pemeriksaan</p>
                                    <p class="col-lg-10 col-md-10"> <?= date("d-m-Y H:i:s",strtotime($konsultasi->tanggal)) ?></p>
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
                                    // if (isset($gejala)) {
                                        $no = 1;
                                        foreach ($gejala_pasien as $key => $val) { ?>
                                            <tr>
                                                <th scope="row"><?= $no++ ?></th>
                                                <td><?= $val->kd_gejala ?></td>
                                                <td><?= $val->nama_gejala ?></td>
                                            </tr>
                                        <?php }
                                        // } else { ?>
                                        <!-- <tr>
                                            <td colspan="3">Tidak ada gejala yang diderita</td>
                                        </tr> -->
                                    <!-- <?php //} ?> -->
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
                                    $cfhasil = 0;
                                    $p = null;
                                    // if ($hasil_seleksi == array()) {
                                        foreach ($hasil_seleksi as $key => $val) {
                                            if ($val > $cfhasil) {
                                                $cfhasil = $val;
                                                $p = array_search($cfhasil, $hasil_seleksi);
                                            } ?>
                                            <tr>
                                                <th scope="row"><?= $no++ ?></th>
                                                <td><?= $key ?></td>
                                                <td><?= $val ?></td>
                                            </tr>
                                    <?php }
                                    // }else{ ?>
                                        <!-- <tr>
                                            <td colspan="3"><?=$hasil_seleksi?></td>
                                        </tr> -->
                                    <!-- <?php //} ?> -->
                                </tbody>
                            </table>
                            <p><b>Kesimpulan</b></p>
                            <p>Dari hasil perhitungan tersebut maka dipastikan anda terkena penyakit <b><?= $penyakit_real ?></b> dengan nilai <b><?= $cfhasil * 100 ?>%</b></p>
                            <p><b>Solusi</b></p>
                            <p><?= $detail_penyakit->solusi ?></p>
                            <br>
                            <a href="<?= base_url('konsultasi/cetak_hasil?id=' . $pasien->id_pasien. '&rm='.$konsultasi->rekam_medis) ?>" target=_blank class="btn btn-info">Cetak Hasil</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $this->load->view('template_admin/footer'); ?>