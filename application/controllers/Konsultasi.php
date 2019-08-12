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

    // public function index($id)
    // {
    //     $pasien = $this->m_admincrud->getWhere('id_pasien', $id);
    //     $pasien = $this->m_admincrud->getData('tb_pasien')->row();
    //     $gejala = $this->m_admincrud->getData('tb_gejala')->result();
    //     $data['datagejala'] = $gejala;
    //     $data['pasien'] = $pasien;
    //     // die(json_encode($data));
    //     $this->load->view('v_opsi', $data);
    // }
    public function index($id)
    {
        $g = $this->input->get('gejala');
        if ($g == null) {
            $gejala = $this->m_admincrud->getWhere('kd_gejala', 'G5');
            $gejala = $this->m_admincrud->getData('tb_gejala')->row();
        } else {
            $gejala = $this->m_admincrud->getWhere('kd_gejala', $g);
            $gejala = $this->m_admincrud->getData('tb_gejala')->row();
        }
        $data = array(
            "id_pasien" => $id,
            "gejala" => $gejala
        );
        // die(json_encode($this->session->userdata('gejala')));
        $this->load->view('v_konsultasi', $data);
    }

    public function proses_pertanyaan($id)
    {
        $g = $this->input->get('gejala');
        $j = $this->input->post('jawab');
        $t = $this->input->post('tingkat');
        // $i=0;
        if ($g == "G5") {
            if ($j == "ya") {
                $data = array(
                    "gejala" => $g,
                    "tingkat" => $t
                );
                $gj = $this->session->userdata('gejala');
                $gj[$g] = $data;
                $this->session->set_userdata('gejala', $gj);
                // die(json_encode($this->session->userdata('gejala')));
                redirect('admin/konsultasi/' . $id . "?gejala=G9");
            } else {
                redirect('admin/konsultasi/' . $id . "?gejala=G7");
            }
        } else if ($g == "G7") {
            if ($j == "ya") {
                // $i++;
                $data = array(
                    "gejala" => $g,
                    "tingkat" => $t
                );
                $gj = $this->session->userdata('gejala');
                $gj[$g] = $data;
                $this->session->set_userdata('gejala', $gj);
                // die(json_encode($this->session->userdata('gejala')));
                redirect('admin/konsultasi/' . $id . "?gejala=G6");
            } else {
                redirect('admin/konsultasi/' . $id . "?gejala=G8");
            }
        } else if ($g == "G9") {
            if ($j == "ya") {
                $data = array(
                    "gejala" => $g,
                    "tingkat" => $t
                );
                $gj = $this->session->userdata('gejala');
                $gj[$g] = $data;
                $this->session->set_userdata('gejala', $gj);
                // die(json_encode($this->session->userdata('gejala')));
                redirect('admin/konsultasi/' . $id . "?gejala=G3");
            } else {
                redirect('admin/konsultasi/' . $id . "?gejala=G3");
            }
        } else if ($g == "G3") {
            if ($j == "ya") {
                $data = array(
                    "gejala" => $g,
                    "tingkat" => $t
                );
                $gj = $this->session->userdata('gejala');
                $gj[$g] = $data;
                $this->session->set_userdata('gejala', $gj);
                // die(json_encode($this->session->userdata('gejala')));
                redirect('admin/konsultasi/' . $id . "?gejala=G10");
            } else {
                redirect('admin/konsultasi/' . $id . "?gejala=G1");
            }
        } else if ($g == "G10") {
            if ($j == "ya") {
                $data = array(
                    "gejala" => $g,
                    "tingkat" => $t
                );
                $gj = $this->session->userdata('gejala');
                $gj[$g] = $data;
                $this->session->set_userdata('gejala', $gj);
                // die(json_encode($this->session->userdata('gejala')));
                redirect('admin/konsultasi/' . $id . "?gejala=G15");
            } else {
                redirect('admin/konsultasi/' . $id . "?gejala=G15");
            }
        } else if ($g == "G15") {
            if ($j == "ya") {
                $data = array(
                    "gejala" => $g,
                    "tingkat" => $t
                );
                $gj = $this->session->userdata('gejala');
                $gj[$g] = $data;
                $this->session->set_userdata('gejala', $gj);
                $gejala = [];
                $tingkat = [];
                $i = 0;
                foreach ($this->session->userdata('gejala') as $key => $val) {
                    // echo $val['gejala'];
                    // echo $i . "<br>";
                    $gejala[$i] = $val['gejala'];
                    $tingkat[$i] = $val['tingkat'];
                    $i++;
                }
                // die(json_encode($this->session->userdata('gejala')));
                $this->perhitungan($id, $gejala, $tingkat);
            } else {
                redirect('admin/konsultasi/' . $id . "?gejala=G12");
            }
        } else if ($g == "G12") {
            if ($j == "ya") {
                $data = array(
                    "gejala" => $g,
                    "tingkat" => $t
                );
                $gj = $this->session->userdata('gejala');
                $gj[$g] = $data;
                $this->session->set_userdata('gejala', $gj);
                // die(json_encode($this->session->userdata('gejala')));
                redirect('admin/konsultasi/' . $id . "?gejala=G13");
            } else {
                redirect('admin/konsultasi/' . $id . "?gejala=G13");
            }
        } else if ($g == "G13") {
            if ($j == "ya") {
                $data = array(
                    "gejala" => $g,
                    "tingkat" => $t
                );
                $gj = $this->session->userdata('gejala');
                $gj[$g] = $data;
                $this->session->set_userdata('gejala', $gj);
                redirect('admin/konsultasi/' . $id . "?gejala=G14");
            } else {
                redirect('admin/konsultasi/' . $id . "?gejala=G14");
            }
        } else if ($g == "G1") {
            if ($j == "ya") {
                $data = array(
                    "gejala" => $g,
                    "tingkat" => $t
                );
                $gj = $this->session->userdata('gejala');
                $gj[$g] = $data;
                $this->session->set_userdata('gejala', $gj);
                redirect('admin/konsultasi/' . $id . "?gejala=G2");
            } else {
                redirect('admin/konsultasi/' . $id . "?gejala=G2");
            }
        } else if ($g == "G2") {
            if ($j == "ya") {
                $data = array(
                    "gejala" => $g,
                    "tingkat" => $t
                );
                $gj = $this->session->userdata('gejala');
                $gj[$g] = $data;
                $this->session->set_userdata('gejala', $gj);
                redirect('admin/konsultasi/' . $id . "?gejala=G4");
            } else {
                redirect('admin/konsultasi/' . $id . "?gejala=G4");
            }
        } else if ($g == "G8") {
            if ($j == "ya") {
                $data = array(
                    "gejala" => $g,
                    "tingkat" => $t
                );
                $gj = $this->session->userdata('gejala');
                $gj[$g] = $data;
                $this->session->set_userdata('gejala', $gj);
                $gejala = [];
                $tingkat = [];
                $i = 0;
                foreach ($this->session->userdata('gejala') as $key => $val) {
                    // echo $val['gejala'];
                    // echo $i . "<br>";
                    $gejala[$i] = $val['gejala'];
                    $tingkat[$i] = $val['tingkat'];
                    $i++;
                }
                $this->perhitungan($id, $gejala, $tingkat);
            } else {
                foreach ($this->session->userdata('gejala') as $key => $val) {
                    // echo $val['gejala'];
                    // echo $i . "<br>";
                    $gejala[$i] = $val['gejala'];
                    $tingkat[$i] = $val['tingkat'];
                    $i++;
                }
                $this->perhitungan($id, $gejala, $tingkat);
            }
        } else if ($g == "G4") {
            if ($j == "ya") {
                $data = array(
                    "gejala" => $g,
                    "tingkat" => $t
                );
                $gj = $this->session->userdata('gejala');
                $gj[$g] = $data;
                $this->session->set_userdata('gejala', $gj);
                $gejala = [];
                $tingkat = [];
                $i = 0;
                foreach ($this->session->userdata('gejala') as $key => $val) {
                    // echo $val['gejala'];
                    // echo $i . "<br>";
                    $gejala[$i] = $val['gejala'];
                    $tingkat[$i] = $val['tingkat'];
                    $i++;
                }
                $this->perhitungan($id, $gejala, $tingkat);
            } else {
                redirect('admin/konsultasi/' . $id . "?gejala=G11");
            }
        } else if ($g == "G11") {
            if ($j == "ya") {
                $data = array(
                    "gejala" => $g,
                    "tingkat" => $t
                );
                $gj = $this->session->userdata('gejala');
                $gj[$g] = $data;
                $this->session->set_userdata('gejala', $gj);
                $gejala = [];
                $tingkat = [];
                $i = 0;
                foreach ($this->session->userdata('gejala') as $key => $val) {
                    // echo $val['gejala'];
                    // echo $i . "<br>";
                    $gejala[$i] = $val['gejala'];
                    $tingkat[$i] = $val['tingkat'];
                    $i++;
                }
                $this->perhitungan($id, $gejala, $tingkat);
            } else {
                foreach ($this->session->userdata('gejala') as $key => $val) {
                    // echo $val['gejala'];
                    // echo $i . "<br>";
                    $gejala[$i] = $val['gejala'];
                    $tingkat[$i] = $val['tingkat'];
                    $i++;
                }
                $this->perhitungan($id, $gejala, $tingkat);
            }
        } else if ($g == "G14") {
            if ($j == "ya") {
                $data = array(
                    "gejala" => $g,
                    "tingkat" => $t
                );
                $gj = $this->session->userdata('gejala');
                $gj[$g] = $data;
                $this->session->set_userdata('gejala', $gj);
                $gejala = [];
                $tingkat = [];
                $i = 0;
                foreach ($this->session->userdata('gejala') as $key => $val) {
                    // echo $val['gejala'];
                    // echo $i . "<br>";
                    $gejala[$i] = $val['gejala'];
                    $tingkat[$i] = $val['tingkat'];
                    $i++;
                }
                $this->perhitungan($id, $gejala, $tingkat);
            } else {
                $i = 0;
                foreach ($this->session->userdata('gejala') as $key => $val) {
                    // echo $val['gejala'];
                    // echo $i . "<br>";
                    $gejala[$i] = $val['gejala'];
                    $tingkat[$i] = $val['tingkat'];
                    $i++;
                }
                $this->perhitungan($id, $gejala, $tingkat);
            }
        } else if ($g == "G6") {
            if ($j == "ya") {
                // $i++;
                $data = array(
                    "gejala" => $g,
                    "tingkat" => $t
                );
                $gj = $this->session->userdata('gejala');
                $gj[$g] = $data;
                $this->session->set_userdata('gejala', $gj);
                $gejala = [];
                $tingkat = [];
                $i = 0;
                foreach ($this->session->userdata('gejala') as $key => $val) {
                    // echo $val['gejala'];
                    // echo $i . "<br>";
                    $gejala[$i] = $val['gejala'];
                    $tingkat[$i] = $val['tingkat'];
                    $i++;
                }
                $this->perhitungan($id, $gejala, $tingkat);
            } else {
                $gejala = [];
                $tingkat = [];
                $i = 0;
                foreach ($this->session->userdata('gejala') as $key => $val) {
                    // echo $val['gejala'];
                    // echo $i . "<br>";
                    $gejala[$i] = $val['gejala'];
                    $tingkat[$i] = $val['tingkat'];
                    $i++;
                }
                $this->perhitungan($id, $gejala, $tingkat);
            }
        }
    }

    private function perhitungan($id_p, $gejala, $tingkat)
    {
        // if (count($gejala) == count($tingkat)) {
        $a = 0;
        $cfhasil = [];
        $lp = $this->listPenyakit($gejala);
        $gp = $this->getPenyakit($gejala);
        $gejala_p = [];
        // die(json_encode($gp));
        $pasien = $this->m_admincrud->getWhere('id_pasien', $id_p);
        $pasien = $this->m_admincrud->getData('tb_pasien')->row();
        $dtk = array(
            "id_pasien" => $pasien->id_pasien,
            "tanggal" => date("Y-m-d"),
        );
        $kon = $this->m_admincrud->insert('tb_konsultasi', $dtk);
        $id_kon = $this->m_admincrud->getInsertId();
        foreach ($tingkat as $key => $val) {
            // if ($val != "") {
            $gj[$gejala[$a]] = $val;
            // echo $gejala[$a]. " = ".$val."<br>";
            $gejala_p[$a] = $this->m_admincrud->getWhere('kd_gejala', $gejala[$a]);
            $gejala_p[$a] = $this->m_admincrud->getData('tb_gejala')->row();
            $data = array(
                "id_konsultasi" => $id_kon,
                "kd_gejala" => $gejala[$a],
                "tingkat" => $val
            );
            $this->m_admincrud->insert('tb_konsultasi_gejala', $data);
            unset($data);
            // die(json_encode($data));
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
                    // echo $cfold . "<br>";
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
        // echo "test";
        // die();
        // die(json_encode($gejala));
        $dtkp = [];
        $cft = 0;
        $pt = null;
        foreach ($cfhasil as $key => $val) {
            if ($val > $cft) {
                $cft = $val;
                $pt = array_search($cft, $cfhasil);
            }
            $kd_p = $this->m_admincrud->select('kd_diagnosa');
            $kd_p = $this->m_admincrud->getWhere('nama_diagnosa', $key);
            $kd_p = $this->m_admincrud->getData('tb_penyakit')->row();
            $dtkp[] = array(
                "kd_diagnosa" => $kd_p->kd_diagnosa,
                "nilai" => $val
            );
        }
        // die(json_encode($dtkp));
        $dp = $this->m_admincrud->getWhere('nama_diagnosa', $pt);
        $dp = $this->m_admincrud->getData('tb_penyakit')->row();
        // die(json_encode($dp));
        foreach ($dtkp as $key => $val) {
            $data = array(
                "id_konsultasi" => $id_kon,
                "kd_diagnosa" => $val['kd_diagnosa'],
                "nilai" => $val['nilai']
            );
            $this->m_admincrud->insert('tb_konsultasi_penyakit', $data);
            unset($data);
            // die(json_encode($data));
        }
        // $pen = $this->m_admincrud->insert()

        // die(json_encode($dtk));

        $data = array(
            "pasien" => $pasien,
            "hasil_seleksi" => $cfhasil,
            "detail_penyakit" => $dp,
            "gejala_pasien" => $gejala_p
        );
        // die(json_encode($data));
        // if ($cetak != null) {
        // $view = 'cetak_hasil';
        // $this->load->view($view, $data);
        // $this->_exportPDFP($view, $data, 'Bukti_Transaksi_');
        // } else {
        $this->load->view('v_hasil_seleksi', $data);
        $this->session->unset_userdata('gejala');
    }

    public function proses()
    {
        // if ($cetak == null) {
        if ($this->input->post('kirim')) {
            $id_p = $this->input->post('id_pasien');
            $gejala = $this->input->post('gejala');
            $tingkat = $this->input->post('tingkat');
            $gj = [];
            $penyakit = [];
            $tingkat = array_filter($tingkat);
            // die(json_encode($gejala));
            if ($gejala != null) {
                if (count($gejala) == count($tingkat)) {
                    $a = 0;
                    $cfhasil = [];
                    $lp = $this->listPenyakit($gejala);
                    $gp = $this->getPenyakit($gejala);
                    $gejala_p = [];
                    // die(json_encode($gp));
                    $pasien = $this->m_admincrud->getWhere('id_pasien', $id_p);
                    $pasien = $this->m_admincrud->getData('tb_pasien')->row();
                    $dtk = array(
                        "id_pasien" => $pasien->id_pasien,
                        "tanggal" => date("Y-m-d"),
                    );
                    $kon = $this->m_admincrud->insert('tb_konsultasi', $dtk);
                    $id_kon = $this->m_admincrud->getInsertId();
                    foreach ($tingkat as $key => $val) {
                        // if ($val != "") {
                        $gj[$gejala[$a]] = $val;
                        // echo $gejala[$a]. " = ".$val."<br>";
                        $gejala_p[$a] = $this->m_admincrud->getWhere('kd_gejala', $gejala[$a]);
                        $gejala_p[$a] = $this->m_admincrud->getData('tb_gejala')->row();
                        $data = array(
                            "id_konsultasi" => $id_kon,
                            "kd_gejala" => $gejala[$a],
                            "tingkat" => $val
                        );
                        $this->m_admincrud->insert('tb_konsultasi_gejala', $data);
                        unset($data);
                        // die(json_encode($data));
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
                                // echo $cfold . "<br>";
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
                    // echo "test";
                    // die();
                    // die(json_encode($gejala));
                    $dtkp = [];
                    $cft = 0;
                    $pt = null;
                    foreach ($cfhasil as $key => $val) {
                        if ($val > $cft) {
                            $cft = $val;
                            $pt = array_search($cft, $cfhasil);
                        }
                        $kd_p = $this->m_admincrud->select('kd_diagnosa');
                        $kd_p = $this->m_admincrud->getWhere('nama_diagnosa', $key);
                        $kd_p = $this->m_admincrud->getData('tb_penyakit')->row();
                        $dtkp[] = array(
                            "kd_diagnosa" => $kd_p->kd_diagnosa,
                            "nilai" => $val
                        );
                    }
                    // die(json_encode($dtkp));
                    $dp = $this->m_admincrud->getWhere('nama_diagnosa', $pt);
                    $dp = $this->m_admincrud->getData('tb_penyakit')->row();
                    // die(json_encode($dp));
                    foreach ($dtkp as $key => $val) {
                        $data = array(
                            "id_konsultasi" => $id_kon,
                            "kd_diagnosa" => $val['kd_diagnosa'],
                            "nilai" => $val['nilai']
                        );
                        $this->m_admincrud->insert('tb_konsultasi_penyakit', $data);
                        unset($data);
                        // die(json_encode($data));
                    }
                    // $pen = $this->m_admincrud->insert()

                    // die(json_encode($dtk));

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
                } else {
                    $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissable">
                                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                            <p>Tingkat keyakinan ada yang belum diisi. Silahkan dicek kembali</p></div>');
                    // $data['datagejala'] = $this->konsultasi->getGejala()->result();
                    // $this->load->view('v_opsi', $data);
                    redirect('admin/inputpasien/' . $id_p);
                }
            } else {
                $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissable">
                                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                            <p>Data Konsultasi belum diisi</p></div>');
                // $data['datagejala'] = $this->konsultasi->getGejala()->result();
                // $this->load->view('v_opsi', $data);
                redirect('admin/inputpasien/' . $id_p);
            }
        }
        // var_dump(json_encode($data));
    }

    public function cetak_hasil()
    {
        $id_p = $this->input->get('id');
        $tgl = date("Y-m-d");
        $pasien = $this->m_admincrud->getWhere('id_pasien', $id_p);
        $pasien = $this->m_admincrud->getData('tb_pasien')->row();
        $kon = $this->m_admincrud->getWhere('id_pasien', $id_p);
        $kon = $this->m_admincrud->getWhere('tanggal', $tgl);
        $kon = $this->m_admincrud->getData('tb_konsultasi')->row();
        // die(json_encode($kon));
        $gejala = $this->m_admincrud->select('tb_gejala.kd_gejala,tb_gejala.nama_gejala');
        $gejala = $this->m_admincrud->getJoin('tb_gejala', 'tb_konsultasi_gejala.kd_gejala = tb_gejala.kd_gejala', 'inner');
        $gejala = $this->m_admincrud->getWhere('id_konsultasi', $kon->id);
        $gejala = $this->m_admincrud->getData('tb_konsultasi_gejala')->result_array();

        // die(json_encode($gejala));

        $penyakit = $this->m_admincrud->select('tb_penyakit.nama_diagnosa,tb_konsultasi_penyakit.nilai');
        $penyakit = $this->m_admincrud->getJoin('tb_penyakit', 'tb_penyakit.kd_diagnosa = tb_konsultasi_penyakit.kd_diagnosa', 'inner');
        $penyakit = $this->m_admincrud->getWhere('id_konsultasi', $kon->id);
        $penyakit = $this->m_admincrud->getData('tb_konsultasi_penyakit')->result_array();

        $cft = 0;
        $pt = null;

        foreach ($penyakit as $key => $val) {
            if ($val['nilai'] > $cft) {
                $cft = $val['nilai'];
                $pt = $val['nama_diagnosa'];
            }
        }
        // die(json_encode($pt));
        $dp = $this->m_admincrud->getWhere('nama_diagnosa', $pt);
        $dp = $this->m_admincrud->getData('tb_penyakit')->row();

        $data = array(
            "pasien" => $pasien,
            "hasil_seleksi" => $penyakit,
            "detail_penyakit" => $dp,
            "nilai_tertinggi" => $cft,
            "title" => "Hasil Konsultasi",
            "gejala_pasien" => $gejala
        );
        // die(json_encode($data));
        $view = 'cetak_hasil';
        $this->load->view($view, $data);
        // $this->_exportPDFP($view, $data, 'Hasil_Seleksi_');
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

    private function _tgl_indo($tanggal)
    {
        $bulan = array(
            1 => 'Januari',
            'Februari',
            'Maret',
            'April',
            'Mei',
            'Juni',
            'Juli',
            'Agustus',
            'September',
            'Oktober',
            'November',
            'Desember',
        );

        $pecahkan = explode('-', $tanggal);
        return $pecahkan[0] . '-' . $bulan[(int) $pecahkan[1]] . '-' . $pecahkan[2];
    }

    private function _exportPDFL($view, $data, $title)
    {

        $tgl = $this->_tgl_indo(date('d-m-Y'));
        ini_set('memory_limit', '256M');
        $this->load->library('pdf');
        date_default_timezone_set('Asia/Jakarta');
        $t = date('G:i:s');
        $this->pdf->set_paper("A4", "landscape");
        $this->pdf->load_view($view, $data);
        $this->pdf->render();
        $canvas = $this->pdf->get_canvas();
        $font = Font_Metrics::get_font("Courier new", "bold");
        $d = date('d F Y');
        $canvas->page_text(25, 540, "___________________________________________________________________________________________________________________________________", $font, 10, array(0, 0, 0));
        $canvas->page_text(25, 540, "___________________________________________________________________________________________________________________________________", $font, 10, array(0, 0, 0));
        $canvas->page_text(27, 540, "___________________________________________________________________________________________________________________________________", $font, 10, array(0, 0, 0));
        $canvas->page_text(27, 540, "___________________________________________________________________________________________________________________________________", $font, 10, array(0, 0, 0));
        $canvas->page_text(30, 560, "Tanggal Cetak : $d, $t", $font, 10, array(0, 0, 0));
        $canvas->page_text(700, 560, " Halaman: {PAGE_NUM} dari {PAGE_COUNT}", $font, 10, array(0, 0, 0));
        $filename = "$title" . $tgl . "_" . $t;
        $this->pdf->stream($filename . '.pdf', ["Attachment" => 0]);
    }

    private function _exportPDFP($view, $data, $title)
    {

        $tgl = $this->_tgl_indo(date('d-m-Y'));
        ini_set('memory_limit', '256M');
        $this->load->library('pdf');
        date_default_timezone_set('Asia/Jakarta');

        $t = date('G:i:s', time() - 3600);
        $this->pdf->set_paper("A4", "portrait");
        $this->pdf->load_view($view, $data);
        $this->pdf->render();
        $canvas = $this->pdf->get_canvas();
        $font = Font_Metrics::get_font("Courier new", "bold");
        $d = date('d F Y');
        $canvas->page_text(25, 770, "_____________________________________________", $font, 20, array(0, 0, 0));
        $canvas->page_text(30, 800, "Tanggal Cetak : $d, $t", $font, 10, array(0, 0, 0));
        $canvas->page_text(455, 800, " Halaman: {PAGE_NUM} dari {PAGE_COUNT}", $font, 10, array(0, 0, 0));
        $filename = "$title" . $tgl . "_" . $t;
        $this->pdf->stream($filename . '.pdf', ["Attachment" => 0]);
    }
}
