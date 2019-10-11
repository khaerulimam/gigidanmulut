<?php
defined('BASEPATH') or exit('No direct script access allowed');
class M_konsultasi extends CI_Model
{
    public function __construct()
    {
        $this->load->database();
    }

    //input pasien
    function inputpasien()
    {
        $rm = $this->input->post("rm");
        $n = $this->input->post("nama_pasien");
        $u = $this->input->post("umur");
        $nt = $this->input->post("nomor_telepon");
        $jk = $this->input->post("jenis_kelamin");
        $a = $this->input->post("alamat");
        $nmkk = $this->input->post("nama_kk");
        $tgl = $this->input->post("tgl");
        $data = array(
            'nama_pasien' => $n,
            'umur' => $u,
            "nama_kk" => $nmkk,
            "tgl_lahir" => $tgl,
            'no_hp' => $nt,
            'jenis_kelamin' => $jk,
            'alamat' => $a
        );
        $this->db->insert("tb_pasien", $data);
        $insert = $this->db->insert_id();
        $dtk = array(
            "rekam_medis" => $rm,
            "id_pasien" => $insert,
            "tanggal" => date("Y-m-d H:i:s"),
        );
        $this->db->insert("tb_konsultasi",$dtk);
        $this->session->set_userdata(array("rm" => $rm));
        return $insert;
    }

    function update_pasien($id){
        $rm = $this->input->post("rm");
        $n = $this->input->post("nama_pasien");
        $u = $this->input->post("umur");
        $nt = $this->input->post("nomor_telepon");
        $jk = $this->input->post("jenis_kelamin");
        $a = $this->input->post("alamat");
        $nmkk = $this->input->post("nama_kk");
        $tgl = $this->input->post("tgl");
        $data = array(
            'nama_pasien' => $n,
            'umur' => $u,
            "nama_kk" => $nmkk,
            "tgl_lahir" => $tgl,
            'no_hp' => $nt,
            'jenis_kelamin' => $jk,
            'alamat' => $a
        );
        $this->db->where('id_pasien',$id);
        $this->db->update("tb_pasien", $data);
        // $insert = $this->db->insert_id();
        $dtk = array(
            "rekam_medis" => $rm,
            "id_pasien" => $id,
            "tanggal" => date("Y-m-d H:i:s"),
        );
        $this->db->insert("tb_konsultasi",$dtk);
        $this->session->set_userdata(array("rm" => $rm));
        return $id;
    }

    function getGejala()
    {
        return $this->db->get('tb_gejala');
    }


    function getGroupPengetahuan($kd){
        // die(json_encode($kd));
        $query = $this->db->select('tb_penyakit.nama_diagnosa');
        $query = $this->db->join('tb_gejala','tb_gejala.kd_gejala = tb_relasi.kd_gejala','inner');
        $query = $this->db->join('tb_penyakit','tb_penyakit.kd_diagnosa = tb_relasi.kd_diagnosa','inner');
        $query = $this->db->where_in('tb_relasi.kd_gejala',$kd);        
        $query = $this->db->group_by('tb_relasi.kd_gejala');
        $query = $this->db->order_by('tb_relasi.kd_diagnosa');
        $query = $this->db->get('tb_relasi')->result_array();
        return $query;
    }

    function getKemungkinanPenyakit($kd){
        $query = $this->db->select('tb_penyakit.nama_diagnosa,tb_relasi.id');
        $query = $this->db->join('tb_gejala','tb_gejala.kd_gejala = tb_relasi.kd_gejala','inner');
        $query = $this->db->join('tb_penyakit','tb_penyakit.kd_diagnosa = tb_relasi.kd_diagnosa','inner');
        $query = $this->db->where_in('tb_gejala.kd_gejala',$kd);
        $query = $this->db->get('tb_relasi')->result_array();
        return $query;
    }

    function getListPenyakit($kd){
        $query = $this->db->join('tb_gejala','tb_gejala.kd_gejala = tb_relasi.kd_gejala','inner');
        $query = $this->db->join('tb_penyakit','tb_penyakit.kd_diagnosa = tb_relasi.kd_diagnosa','inner');
        $query = $this->db->where_in('tb_gejala.kd_gejala',$kd);
        $query = $this->db->get('tb_relasi')->result_array();
        return $query;
    }


}