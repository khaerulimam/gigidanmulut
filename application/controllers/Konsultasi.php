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

        $lp = $this->listPenyakit($gejala);
        $gp = $this->getPenyakit($gejala);

        foreach($tingkat as $key => $val){
            if($val != ""){
                $gj[$gejala[$a]] = $val;
            }
            $a++;
        }
        // die(json_encode($gj));
        foreach ($gp as $key => $val) {
            $penyakit[$val['nama_diagnosa']][$val['kd_gejala']]['bobot'] = $val['bobot'];
            $penyakit[$val['nama_diagnosa']][$val['kd_gejala']]['tingkat'] = $gj[$val['kd_gejala']];
            $penyakit[$val['nama_diagnosa']][$val['kd_gejala']]['cf'] = $val['bobot'] * $gj[$val['kd_gejala']];
        }

        foreach($penyakit as $key => $val){
            // var_dump($val);
        }
        // die();
        die(json_encode($penyakit));

        foreach ($gejala as $key) {
            // echo $key;
            $penyakit[] = $this->konsultasi->getKemungkinanPenyakit($key);
            for ($i = 0; $i < count($penyakit[$a]); $i++) {
                for ($j = 0; $j < count($gp); $j++) {
                    $np = $gp[$j]['nama_diagnosa'];
                    if ($penyakit[$a][$i]['nama_diagnosa'] == $np) {
                        $idKP[$np][] = $penyakit[$a][$i]['id'] . "<br>";
                    }
                }
            }
            $a++;
        }

        for ($h = 0; $h < count($gp); $h++) {
            $np = $gp[$h]['nama_diagnosa'];
            echo "<br/>Proses Penyakit " . $h . "." . $np . "<br/>==============<br/>";
            for ($x = 0; $x < count($idKP); $x++) {
                $dtKP = $this->konsultasi->getListPenyakit($idKP[$np][$x]);
                echo "<br/>proses " . $x . "<br/>------------------------------------<br/>";
                for ($i = 0; $i < count($dtKP); $i++) {
                    if (count($idKP) == 1) {
                        echo "Jumlah Gejala = " .
                            count($idKP[$np]) . "<br/>";
                    } else {
                        if ($x == 0) {
                            echo "Jumlah Gejala = " .
                                count($idKP[$np]) . "<br/>";
                        } else { }
                    }
                }
            }
        }


        die();
        die(json_encode($penyakit));
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
