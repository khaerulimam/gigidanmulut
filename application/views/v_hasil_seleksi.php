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
                            <p><b>Data Pasien</b></p>
                            <p>Nama : <?=$pasien->nama_pasien?></p>
                            <p>Jenis Kelamin : <?php if($pasien->jenis_kelamin == "l"){echo "Laki - Laki";}else{echo "Perempuan";}?></p>
                            <p>Umur : <?=$pasien->umur?></p>
                            <p>Alamat : <?=$pasien->alamat?></p>
                            <p><b>Data Hasil diagnosa</b></p>
                            <?php 
                            $cfhasil = 0;
                            $p = null;
                            foreach($hasil_seleksi as $key => $val){ 
                                // $cfhasil = 0;
                                if($val > $cfhasil){
                                    $cfhasil = $val;
                                    $p = array_search ($cfhasil, $hasil_seleksi);
                                }
                                ?>
                                <p> <?=$key?> : <?=$val?> </p>
                            <?php } ?>
                            <p><b>Kesimpulan</b></p>
                            <p>Dari hasil perhitungan tersebut maka didapatkan nilai terbesar adalah <b><?=$p?></b> dengan nilai <b><?=$cfhasil * 100?>%</b></p>
                            <p><b>Solusi</b></p>
                            <p><?=$detail_penyakit->solusi?></p>
                            <br>
                            <a href="" class="btn btn-info">Cetak Hasil</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $this->load->view('template_admin/footer'); ?>