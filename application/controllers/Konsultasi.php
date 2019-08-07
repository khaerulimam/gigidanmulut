<?php

class Konsultasi extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        if ($this->session->userdata('status') != "login") {
            redirect(base_url("admin/login"));
        }
        $this->load->model('m_admincrud');
        $this->load->model('m_konsultasi', 'konsultasi');
    }

    public function index($id)
    {
        $pasien = $this->m_admincrud->getWhere('id_pasien', $id);
        $pasien = $this->m_admincrud->getData('tb_pasien')->row();
        $gejala = $this->m_admincrud->getData('tb_gejala')->result();
        $data['datagejala'] = $gejala;
        $data['pasien'] = $pasien;
        // die(json_encode($data));
        $this->load->view('v_opsi', $data);
    }

    public function proses()
    {
        $id_p = $this->input->post('id_pasien');
        $gejala = $this->input->post('gejala');
        $tingkat = $this->input->post('tingkat');
        $gj = [];
        $penyakit = [];
        $a = 0;
        $cfhasil = [];
        $lp = $this->listPenyakit($gejala);
        $gp = $this->getPenyakit($gejala);

            $tingkat = array_filter($tingkat);
            // die(json_encode($tingkat));

            foreach ($tingkat as $key => $val) {
                // if ($val != "") {
                $gj[$gejala[$a]] = $val;
                // echo $gejala[$a]. " = ".$val."<br>";
                $gejala_p[$a] = $this->m_admincrud->getWhere('kd_gejala', $gejala[$a]);
                $gejala_p[$a] = $this->m_admincrud->getData('tb_gejala')->row();
                // }
                // echo $a . "<br>";
                $a++;
            }
            // die();
            // die(json_encode($gejala_p));
            // die(json_encode($id_p));
            // $i = 0;
            foreach ($gp as $key => $val) {
                $penyakit[$val['nama_diagnosa']][] = array(
                    "bobot" => $val['bobot'],
                    "tingkat" => $gj[$val['kd_gejala']],
                    "cf" => $val['bobot'] * $gj[$val['kd_gejala']]
                );
                // $i++;
            }
            // $k=0;
            foreach ($lp as $key => $val) {
                $j = 0;
                foreach ($penyakit[$val['nama_diagnosa']] as $key_p => $val_p) {
                    // var_dump($val_p);
                    // echo $val['nama_diagnosa'] . " CF(".$j.")" . "<br>";
                    // echo count($val_p) . "<br>";
                    // echo count($penyakit[$val['nama_diagnosa']])."<br>";
                    if (count($penyakit[$val['nama_diagnosa']]) == 1) {
                        $cfold = $val_p['cf'];

                        // echo $cfold  . "<br>";
                        $cfhasil[$val['nama_diagnosa']] = $cfold;
                        // echo $key_p . "<br>";    
                        // $cfold = $val_p['cf']+$val_p['cf'] * (1-$val_p['cf']);
                        // $cfhasil = $cfold * $val_p['cf'];
                        // echo $cfhasil . "<br>";
                    } else if (count($penyakit[$val['nama_diagnosa']]) > 1) {
                        if ($j == 0) {
                            // echo $penyakit[$val['nama_diagnosa']][$j+1]['cf'];
                            // var_dump($val_p);
                            $a = $j + 1;
                            $cfold = $val_p['cf'] + $penyakit[$val['nama_diagnosa']][$j + 1]['cf'] * (1 - $val_p['cf']);
                            // $penyakit[$val['nama_diagnosa']]['Perhitungan'][] = array(
                            //     "CFcombine".$a => $cfold
                            // );
                            $cfhasil[$val['nama_diagnosa']] = $cfold;
                            // echo $val_p['cf'] . " + " . $penyakit[$val['nama_diagnosa']][$j + 1]['cf'] . " * " . " 1 - " . $val_p['cf'] . " = ";
                            // echo $cfold . "<br>";
                            // $penyakit
                        } else {
                            if (isset($penyakit[$val['nama_diagnosa']][$j + 1])) {
                                // echo $cfold . " + " . $penyakit[$val['nama_diagnosa']][$j + 1]['cf'] . " * " . "( 1 - " . $cfold . ") = ";
                                $cfold = $cfold + $penyakit[$val['nama_diagnosa']][$j + 1]['cf'] * (1 - $cfold);
                                // echo $cfold . "<br>";
                                $a = $j + 1;
                                $cfhasil[$val['nama_diagnosa']] = $cfold;
                                // $penyakit[$val['nama_diagnosa']]['Perhitungan'][] = array(
                                //     "CFcombine".$a => $cfold
                                // );
                                // $cfnew = 
                                // $penyakit['nama_diagnosa']
                            }
                            // echo $val_p['cf'] . "<br>";
                        }
                        // echo $k . "<br>";
                    }
                    // echo "CF(".$j.")" . $val_p['cf']."<br>";
                    $j++;
                }
            }
            // die();
            // die(json_encode($penyakit));
            $cft = 0;
            $pt = null;
            foreach ($cfhasil as $key => $val) {
                if ($val > $cft) {
                    $cft = $val;
                    $pt = array_search($cft, $cfhasil);
                }
            }
            $dp = $this->m_admincrud->getWhere('nama_diagnosa', $pt);
            $dp = $this->m_admincrud->getData('tb_penyakit')->row();
            // die(json_encode($dp));
            $pasien = $this->m_admincrud->getWhere('id_pasien', $id_p);
            $pasien = $this->m_admincrud->getData('tb_pasien')->row();
            $data = array(
                "pasien" => $pasien,
                "hasil_seleksi" => $cfhasil,
                "detail_penyakit" => $dp,
                "gejala_pasien" => $gejala_p
            );
            // if ($cetak != null) {
                // $view = 'cetak_hasil';
                // $this->load->view($view, $data);
                // $this->_exportPDFP($view, $data, 'Bukti_Transaksi_');
            // } else {
                $this->load->view('v_hasil_seleksi', $data);
            // }
        }
        // die(json_encode($data));
    }

    private function listPenyakit($gejala)
    {
        $lp = $this->m_admincrud->select('tb_penyakit.nama_diagnosa');
        $lp = $this->m_admincrud->getDistinct();
        $lp = $this->m_admincrud->getJoin('tb_gejala', 'tb_relasi.kd_gejala = tb_gejala.kd_gejala', 'inner');
        $lp = $this->m_admincrud->getJoin('tb_penyakit', 'tb_penyakit.kd_diagnosa = tb_relasi.kd_diagnosa', 'inner');
        $lp = $this->m_admincrud->getWhere_in('tb_relasi.kd_gejala', $gejala);
        $lp = $this->m_admincrud->getData('tb_relasi')->result_array();
        return $lp;
    }

    private function getPenyakit($gejala)
    {
        $lp = $this->m_admincrud->select('tb_penyakit.nama_diagnosa,tb_gejala.kd_gejala,tb_gejala.bobot');
        $lp = $this->m_admincrud->getJoin('tb_gejala', 'tb_relasi.kd_gejala = tb_gejala.kd_gejala', 'inner');
        $lp = $this->m_admincrud->getJoin('tb_penyakit', 'tb_penyakit.kd_diagnosa = tb_relasi.kd_diagnosa', 'inner');
        $lp = $this->m_admincrud->getWhere_in('tb_relasi.kd_gejala', $gejala);
        $lp = $this->m_admincrud->getData('tb_relasi')->result_array();
        return $lp;
    }
}
