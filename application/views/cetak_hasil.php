<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title><?= $title ?></title>
    <!-- <link href="<?php echo base_url(); ?>assets/admin/img/bakaranproject.png" rel="shortcut icon" /> -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/tabel.css">
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="keywords" content="Sakadesa" />
    <meta name="author" content="Willy" />
    <style>
        body,
        h2 {
            font-family: "Courier new";
        }

        h2,
        h3 {
            margin-bottom: 5px;
            margin-top: 0px;
        }

        .garis {
            height: 2px;
            background-color: #000;
            margin-bottom: 0px;
            margin-top: 10px;
        }

        hr {
            height: 0.5px;
            background-color: #000;
            margin-top: 5px;
        }
    </style>
</head>

<body style="font-family: 'Courier';">
    <div class="container">
        <p><b>Hasil Konsultasi</b></p>
        <div style="padding:0.5px; background-color:#000; margin-bottom:20px;"></div>
        <p><b>Data Pasien</b></p>
        <p>Nama : <?= $pasien->nama_pasien ?></p>
        <p>Jenis Kelamin : <?php if ($pasien->jenis_kelamin == "l") {
                                echo "Laki - Laki";
                            } else {
                                echo "Perempuan";
                            } ?></p>
        <p>Umur : <?= $pasien->umur ?></p>
        <p>Alamat : <?= $pasien->alamat ?></p>
        <p>Data Hasil diagnosa</p>
        <p><b>Gejala Terpilih</b></p>
        <table class="table table-bordered table-striped table-hover" style="vertical-align: central; margin-top: 20px;">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Kode Gejala</th>
                    <th>Nama Gejala</th>
                </tr>
            </thead>
            <?php
            $no = 1;
            foreach ($gejala_pasien as $key => $val) { ?>
                <tr>
                    <th><?= $no++ ?></th>
                    <td><?= $val->kd_gejala ?></td>
                    <td><?= $val->nama_gejala ?></td>
                </tr>
            <?php } ?>
        </table>
        <p><b>Hasil Analisa</b></p>
        <table class="table table-bordered table-striped table-hover" style="vertical-align: central; margin-top: 20px;">
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
                <?php } ?>
            </tbody>
        </table>
        <p><b>Kesimpulan</b></p>
        <p>Dari hasil perhitungan tersebut maka didapatkan nilai terbesar adalah <b><?= $p ?></b> dengan nilai <b><?= $cfhasil * 100 ?>%</b></p>
        <p><b>Solusi</b></p>
        <p><?= $detail_penyakit->solusi ?></p>
    </div>

    <script>
        //window.print();
    </script>
</body>

</html>