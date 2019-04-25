<?php
defined('BASEPATH') OR exit ('No direct script access allowed');
class M_konsultasi extends CI_Model{
    public function __construct()
    {
        $this->load->database();
    }
    
    //input pasien
    public function inputpasien()
    {
        $n = $this->input->post("nama_pasien");
        $u = $this->input->post("umur");
        $nt = $this->input->post("nomor_telepon");
        $jk = $this->input->post("jenis_kelamin");
        $a = $this->input->post("alamat");
		$data = array(
			'nama_pasien' => $n,
            'umur' => $u,
            'no_hp' => $nt,
            'jenis_kelamin' => $jk,
            'alamat' => $a
        );
        $this->db->insert("tb_pasien", $data);
    }
}