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

    public function cetak_hasil()
        /** 
            * function yang digunakan untuk mencetak hasil diagnosa atau konsultasi
            * function ini dipanggil pada view v_hasil_seleksi
            * pada button cetak hasil
        */
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
        $this->_exportPDFP($view, $data, 'Hasil_Seleksi_');
    }

    private function listPenyakit($pen, $gejala)
    {
        /**
         * function listPenyakit
         * digunakan dalam perhitungan untuk mendaptakan list penyakit sesuai dengan gejala yang diinputkan
         * return nama diagnosa
         */
        $lp = $this->m_admincrud->select('tb_penyakit.nama_diagnosa');
        $lp = $this->m_admincrud->getDistinct();
        $lp = $this->m_admincrud->getJoin('tb_gejala', 'tb_relasi.kd_gejala = tb_gejala.kd_gejala', 'inner');
        $lp = $this->m_admincrud->getJoin('tb_penyakit', 'tb_penyakit.kd_diagnosa = tb_relasi.kd_diagnosa', 'inner');
        $lp = $this->m_admincrud->getWhere_in('tb_relasi.kd_diagnosa', $pen);
        $lp = $this->m_admincrud->getWhere_in('tb_relasi.kd_gejala', $gejala);
        $lp = $this->m_admincrud->getData('tb_relasi')->result_array();
        return $lp;
    }


    //function forward chaining pendeteksi detail penyakit
    private function getPenyakit($gejala)
    {
        /**
         * function getPenyakit
         * digunakan untuk mendapatkan data detail list penyakit berdasarkan gejala yang diinputkan
         * return detail penyakit
         */
        $lp = $this->m_admincrud->select('tb_penyakit.kd_diagnosa,tb_penyakit.nama_diagnosa,tb_gejala.kd_gejala,tb_gejala.bobot');
        $lp = $this->m_admincrud->getJoin('tb_gejala', 'tb_relasi.kd_gejala = tb_gejala.kd_gejala', 'inner');
        $lp = $this->m_admincrud->getJoin('tb_penyakit', 'tb_penyakit.kd_diagnosa = tb_relasi.kd_diagnosa', 'inner');
        $lp = $this->m_admincrud->getWhere_in('tb_relasi.kd_gejala', $gejala);
        $lp = $this->m_admincrud->getData('tb_relasi')->result_array();
        return $lp;
    }

    private function getRealPenyakit($pen, $gejala)
    {
        /**
         * function getPenyakit
         * digunakan untuk mendapatkan data detail list penyakit berdasarkan gejala yang diinputkan
         * return detail penyakit
         */
        $lp = $this->m_admincrud->select('tb_penyakit.kd_diagnosa,tb_penyakit.nama_diagnosa,tb_gejala.kd_gejala,tb_gejala.bobot');
        $lp = $this->m_admincrud->getJoin('tb_gejala', 'tb_relasi.kd_gejala = tb_gejala.kd_gejala', 'inner');
        $lp = $this->m_admincrud->getJoin('tb_penyakit', 'tb_penyakit.kd_diagnosa = tb_relasi.kd_diagnosa', 'inner');
        $lp = $this->m_admincrud->getWhere_in('tb_relasi.kd_diagnosa', $pen);
        $lp = $this->m_admincrud->getWhere_in('tb_relasi.kd_gejala', $gejala);
        $lp = $this->m_admincrud->getData('tb_relasi')->result_array();
        return $lp;
    }


    private function _tgl_indo($tanggal)
    {
        /**
         * function tanggal untuk report pdf
         */
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

    private function _exportPDFP($view, $data, $title)
    {
        /**
         * function export pdf potrait mode
         * digunakan untuk mengexport data menjadi file pdf
         */
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

    public function index($id)
    {
        /**
         * function index digunakan untuk memanggil halaman pertanyaan dengan kode gejala g4 jika parameter null
         * jika parameter diisi maka akan memanggil halaman pertanyaan dengan kode gejala sesuai dengan isi parameter
         */
        $g = $this->input->get('gejala');
        if ($g == null) {
            $gejala = $this->m_admincrud->getWhere('kd_gejala', 'G4');
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
        /**
         * function proses pertanyaan ini digunakan untuk memproses input jawaban dari pasien
         * sesuai dengan pohon keputusan
         */
        $g = $this->input->get('gejala');   //gejala input
        $j = $this->input->post('jawab');   //jawaban input
        $t = $this->input->post('tingkat');  //tingkatan input terisi jika jawaban ya
        if ($g == "G5") {  //jika gejala G5
            if ($j == "ya") { //jika jawaban ya
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
                    $gejala[$i] = $val['gejala'];
                    $tingkat[$i] = $val['tingkat'];
                    $i++;
                }
                $this->perhitungan($id, $gejala, $tingkat);  //lakukan perhitungan
            } else { //jika jawaban tidak
                $i = 0;
                foreach ($this->session->userdata('gejala') as $key => $val) {
                    $gejala[$i] = $val['gejala'];
                    $tingkat[$i] = $val['tingkat'];
                    $i++;
                }
                $this->perhitungan($id, $gejala, $tingkat); //lakukan perhitungan
            }
        } else if ($g == "G7") { //jika gejala G7
            if ($j == "ya") { //jika jawaban ya
                $data = array(
                    "gejala" => $g,
                    "tingkat" => $t
                );
                $gj = $this->session->userdata('gejala');
                $gj[$g] = $data;
                $this->session->set_userdata('gejala', $gj);
                redirect('admin/konsultasi/' . $id . "?gejala=G8");  //redirect ke G8
            } else { //jika jawaban tidak
                redirect('admin/konsultasi/' . $id . "?gejala=G5"); //redirect ke G5
            }
        } else if ($g == "G9") { //jika gejala G9
            if ($j == "ya") { //jika jawaban ya
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
                    $gejala[$i] = $val['gejala'];
                    $tingkat[$i] = $val['tingkat'];
                    $i++;
                }
                $this->perhitungan($id, $gejala, $tingkat); //lakukan perhitungan
            } else { //jika jawaban tidak
                $i = 0;
                foreach ($this->session->userdata('gejala') as $key => $val) {
                    $gejala[$i] = $val['gejala'];
                    $tingkat[$i] = $val['tingkat'];
                    $i++;
                }
                $this->perhitungan($id, $gejala, $tingkat); //lakukan perhitungan
            }
        } else if ($g == "G3") { //jika gejala G3
            if ($j == "ya") { //jika jawaban ya
                $data = array(
                    "gejala" => $g,
                    "tingkat" => $t
                );
                $gj = $this->session->userdata('gejala');
                $gj[$g] = $data;
                $this->session->set_userdata('gejala', $gj);
                redirect('admin/konsultasi/' . $id . "?gejala=G2"); //redirect ke G2
            } else { //jika jawaban tidak
                redirect('admin/konsultasi/' . $id . "?gejala=G10");  //redirect ke G10
            }
        } else if ($g == "G10") { //jika gejala G10
            if ($j == "ya") { //jika jawaban ya
                $data = array(
                    "gejala" => $g,
                    "tingkat" => $t
                );
                $gj = $this->session->userdata('gejala');
                $gj[$g] = $data;
                $this->session->set_userdata('gejala', $gj);
                redirect('admin/konsultasi/' . $id . "?gejala=G11"); //redirect ke G11
            } else { //jika jawaban tidak
                $pasien = $this->m_admincrud->getWhere('id_pasien', $id);
                $pasien = $this->m_admincrud->getData('tb_pasien')->row();
                $data = array(
                    "pasien" => $pasien,
                    "hasil_seleksi" => "Tidak terdapat keluhan apapun, Maka gigi anda sehat dan baik baik saja",
                );
                $this->session->set_flashdata('pesan', $data);
                redirect('admin/konsultasi/' . $id . "?gejala=G10"); //redirect ke G10 dengan menampilkan notifikasi
            }
        } else if ($g == "G12") { //jika gejala G12
            if ($j == "ya") { //jika jawaban ya
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
                    $gejala[$i] = $val['gejala'];
                    $tingkat[$i] = $val['tingkat'];
                    $i++;
                }
                $this->perhitungan($id, $gejala, $tingkat); //lakukan perhitungan
            } else {  //jika jawaban tidak
                $i = 0;
                foreach ($this->session->userdata('gejala') as $key => $val) {
                    $gejala[$i] = $val['gejala'];
                    $tingkat[$i] = $val['tingkat'];
                    $i++;
                }
                $this->perhitungan($id, $gejala, $tingkat); //lakukan perhitungan
            }
        } else if ($g == "G1") { //jika Gejala G1
            if ($j == "ya") { //jika jawaban ya
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
                    $gejala[$i] = $val['gejala'];
                    $tingkat[$i] = $val['tingkat'];
                    $i++;
                }
                $this->perhitungan($id, $gejala, $tingkat); // lakukan perhitungan
            } else { // jika jawaban tidak
                $i = 0;
                foreach ($this->session->userdata('gejala') as $key => $val) {
                    $gejala[$i] = $val['gejala'];
                    $tingkat[$i] = $val['tingkat'];
                    $i++;
                }
                $this->perhitungan($id, $gejala, $tingkat); //lakukan perhitungan
            }
        } else if ($g == "G2") { // jika gejala G2
            if ($j == "ya") {  //jika jawaban ya
                $data = array(
                    "gejala" => $g,
                    "tingkat" => $t
                );
                $gj = $this->session->userdata('gejala');
                $gj[$g] = $data;
                $this->session->set_userdata('gejala', $gj);
                redirect('admin/konsultasi/' . $id . "?gejala=G1"); //redirect ke G1
            } else { //jika jawaban tidak
                $i = 0;
                foreach ($this->session->userdata('gejala') as $key => $val) {
                    $gejala[$i] = $val['gejala'];
                    $tingkat[$i] = $val['tingkat'];
                    $i++;
                }
                $this->perhitungan($id, $gejala, $tingkat); //Lakukan perhitungan
            }
        } else if ($g == "G8") {   //jika gejala G8
            if ($j == "ya") { // jika jawaban ya
                $data = array(
                    "gejala" => $g,
                    "tingkat" => $t
                );
                $gj = $this->session->userdata('gejala');
                $gj[$g] = $data;
                $this->session->set_userdata('gejala', $gj);
                redirect('admin/konsultasi/' . $id . "?gejala=G9");   //redirect ke G9
            } else {  // jika jawaban tidak
                $i = 0;
                foreach ($this->session->userdata('gejala') as $key => $val) {
                    $gejala[$i] = $val['gejala'];
                    $tingkat[$i] = $val['tingkat'];
                    $i++;
                }
                $this->perhitungan($id, $gejala, $tingkat);    //ini untuk melakukan perhitungan berlaku pada kondisi gejala yang sudah diujung sesuai dengan pohon keputusan
            }
        } else if ($g == "G4") {  //jika gejala G4
            if ($j == "ya") {  // jika jawaban ya
                $data = array(
                    "gejala" => $g,
                    "tingkat" => $t
                );
                $gj = $this->session->userdata('gejala');
                $gj[$g] = $data;
                $this->session->set_userdata('gejala', $gj);
                redirect('admin/konsultasi/' . $id . "?gejala=G6");  //redirect ke G6
            } else { // jika jawaban tidak
                redirect('admin/konsultasi/' . $id . "?gejala=G3"); //redirect ke G3
            }
        } else if ($g == "G11") { //jika gejala G11
            if ($j == "ya") {  // jika jawaban ya
                $data = array(
                    "gejala" => $g,
                    "tingkat" => $t
                );
                $gj = $this->session->userdata('gejala');
                $gj[$g] = $data;
                $this->session->set_userdata('gejala', $gj);
                redirect('admin/konsultasi/' . $id . "?gejala=G12"); //redirect ke G12
            } else {    // jika jawaban tidak
                redirect('admin/konsultasi/' . $id . "?gejala=G12"); //redirect ke G12
            }
        } else if ($g == "G6") {    ///jika gejala G6
            if ($j == "ya") {   //jika jawaban ya
                // $i++;
                $data = array(
                    "gejala" => $g,
                    "tingkat" => $t
                );
                $gj = $this->session->userdata('gejala');
                $gj[$g] = $data;
                $this->session->set_userdata('gejala', $gj);
                redirect('admin/konsultasi/' . $id . "?gejala=G7"); ///redirect ke G7
            } else {   // jika jawaban tidak
                $pasien = $this->m_admincrud->getWhere('id_pasien', $id);
                $pasien = $this->m_admincrud->getData('tb_pasien')->row();
                $data = array(
                    "pasien" => $pasien,
                    "hasil_seleksi" => "Gejala anda adalah gigi berlubang, gejala tersebut belum memenuhi kriteria untuk menentukan diagnosa penyakit, Silahkan konsultasi kembali",
                );
                $this->session->set_flashdata('pesan', $data);
                $this->session->unset_userdata('gejala');
                redirect('admin/konsultasi/' . $id . "?gejala=G6"); //redirect ke G6
            }
        }
    }

    //function utama perhitungan menggunakan certainty factor
    private function perhitungan($id_p, $gejala, $tingkat)
    {
        /**
         * function perhitungan 
         * digunakan untuk menghitung jawaban yang diinputkan
         * return atau hasil nilai penyakit
         */
        $a = 0;
        $cfhasil = [];
        $gp = $this->getPenyakit($gejala);
        $gpp = array();
        $pen = array();
        $query = array();
        if (count($gp) >= 1) {
            foreach ($gp as $key => $val) {
                $q = $this->m_admincrud->select('kd_gejala');
                $q = $this->m_admincrud->getWhere('kd_diagnosa', $val['kd_diagnosa']);
                $q = $this->m_admincrud->getData('tb_relasi')->result_array();
                foreach ($q as $keyy => $valu) {
                    $gpp[$val['kd_diagnosa']][] = $valu['kd_gejala'];
                }
            }
            foreach ($gpp as $keyay => $value) {     ///validasi penyakit minimal terkena berapa gejala 
                $diff[$keyay] = array_diff(array_unique($value), $gejala);
                if (empty($diff[$keyay])) {
                    $pen[] = $keyay;
                } else if (count($diff) >= 1) {
                    if (isset($diff['P1']) && count(array_unique($diff['P1'])) <= 1) {   //boleh 1 gejala jawabannya tidak
                        $pen[] = "P1";
                    } else if (isset($diff['P2']) && count(array_unique($diff['P2'])) >= 1) {   //boleh 1 gejala jawabannya tidak
                        $pen[] = "P2";
                    } else if (isset($diff['P3']) && count(array_unique($diff['P3'])) >= 1) {  //boleh lebih dari 1 gejala jawabannya tidak
                        $pen[] = "P3";
                    } else if (isset($diff['P4']) && count(array_unique($diff['P4'])) == 1) {  //boleh 1 gejala jawabannya tidak
                        $pen[] = "P4";
                    } else if (isset($diff['P5']) && count(array_unique($diff['P5'])) >= 1) {  //boleh 2 gejala jawabannya tidak
                        $pen[] = "P5";
                    } else if (isset($diff['P6']) && count(array_unique($diff['P6'])) >= 3) {  //boleh 1 gejala jawabannya tidak
                        $pen[] = "P6";
                    }
                }
            }
        }
        $lp = $this->listPenyakit($pen, $gejala);    //untuk mendapatkan list penyakit sesuai dengan gejala
        $gp = $this->getRealPenyakit($pen, $gejala); //untuk mendapatkan detail penyakit sesuai dengan gejala
        $gejala_p = [];
        $pasien = $this->m_admincrud->getWhere('id_pasien', $id_p);
        $pasien = $this->m_admincrud->getData('tb_pasien')->row();
        $dtk = array(
            "id_pasien" => $pasien->id_pasien,
            "tanggal" => date("Y-m-d"),
        );
        $kon = $this->m_admincrud->insert('tb_konsultasi', $dtk);   //input ke table konsultasi
        $id_kon = $this->m_admincrud->getInsertId();
        foreach ($tingkat as $key => $val) {
            $gj[$gejala[$a]] = $val;
            $gejala_p[$a] = $this->m_admincrud->getWhere('kd_gejala', $gejala[$a]);
            $gejala_p[$a] = $this->m_admincrud->getData('tb_gejala')->row();
            $data = array(
                "id_konsultasi" => $id_kon,
                "kd_gejala" => $gejala[$a],
                "tingkat" => $val
            );
            $this->m_admincrud->insert('tb_konsultasi_gejala', $data); //input ke table konsultasi gejala
            unset($data);
            $a++;
        }
        foreach ($gp as $key => $val) {                     //start mencari cf tunggal
            $penyakit[$val['nama_diagnosa']][] = array(
                "bobot" => $val['bobot'],
                "tingkat" => $gj[$val['kd_gejala']],
                "cf" => $val['bobot'] * $gj[$val['kd_gejala']]
            );
        }                                                   //end mencari cf tunggal


        foreach ($lp as $key => $val) {        // start mencari cf kombinasi
            $j = 0;
            foreach ($penyakit[$val['nama_diagnosa']] as $key_p => $val_p) {
                if (count($penyakit[$val['nama_diagnosa']]) == 1) {
                    $cfold = $val_p['cf'];
                    $cfhasil[$val['nama_diagnosa']] = $cfold;
                } else if (count($penyakit[$val['nama_diagnosa']]) > 1) {
                    if ($j == 0) {
                        $a = $j + 1;
                        $cfold = $val_p['cf'] + $penyakit[$val['nama_diagnosa']][$j + 1]['cf'] * (1 - $val_p['cf']);
                        $cfhasil[$val['nama_diagnosa']] = $cfold;
                    } else {
                        if (isset($penyakit[$val['nama_diagnosa']][$j + 1])) {
                            $cfold = $cfold + $penyakit[$val['nama_diagnosa']][$j + 1]['cf'] * (1 - $cfold);
                            $a = $j + 1;
                            $cfhasil[$val['nama_diagnosa']] = $cfold;
                        }
                    }
                }
                $j++;
            }
        }                               //end mencari cf kombinasi

        //proses menseleksi penyakit yang didapat
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
        $dp = $this->m_admincrud->getWhere('nama_diagnosa', $pt);
        $dp = $this->m_admincrud->getData('tb_penyakit')->row();
        foreach ($dtkp as $key => $val) {
            $data = array(
                "id_konsultasi" => $id_kon,
                "kd_diagnosa" => $val['kd_diagnosa'],
                "nilai" => $val['nilai']
            );
            $this->m_admincrud->insert('tb_konsultasi_penyakit', $data);    //input ke table konsultasi penyakit
            unset($data);
        }
        $penr = null;   ///untuk menyimpan hasil penseleksian penyakit
        $jml = 0;

        foreach ($cfhasil as $key => $val) {
            if ($val > $jml) {
                $jml = $val;
                $penr = $key;
            }
        }

        $dp = $this->m_admincrud->getWhere('nama_diagnosa', $penr);
        $dp = $this->m_admincrud->getData('tb_penyakit')->row();
        $data = array(
            "penyakit_real" => $dp->nama_diagnosa,   //nama penyakit hasil akhir 
            "pasien" => $pasien,     //detail pasien
            "hasil_seleksi" => $cfhasil,  //hasil seleksi (prosentase hasil)
            "detail_penyakit" => $dp,   //detail penyakit, solusi 
            "gejala_pasien" => $gejala_p   //gejala yang diinputkan
        );
        $this->load->view('v_hasil_seleksi', $data); //manggil view hasil seleksi disertai dengan data
        $this->session->unset_userdata('gejala');
    }

}
