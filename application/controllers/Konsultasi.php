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
        $a=0;
        foreach($gejala as $key_g){
            $gj[$a]=$key_g;
            $data[$a]['id_pasien']=$id_p;
            $data[$a]['gejala'] = $key_g;
            $a++;
        }
        $i = 0;
        foreach ($tingkat as $key) {
            if ($key != "") {
                $data[$i]['tingkat'] = $key;
            }
            $i++;
        }


        // $data = array(
        //     "gejala" => $gejala,
        //     "tingkat" => $tingkat
        // );

        die(json_encode($gj));
    }
}
