<?php
defined('BASEPATH') or exit('No direct script access allowed');
class M_admincrud extends CI_Model
{
    public function __construct()
    {
        $this->load->database();
    }

    //gejala
    public function get_seluruhgejala()
    {
        $q = $this->db->order_by('id', 'asc');
        return $q = $this->db->get('tb_gejala')->result();
    }

    public function get_codegejala()
    {
        $this->db->select('kd_gejala');
        $this->db->from('tb_gejala');
        $this->db->order_by("id", "desc");
        $this->db->limit(1);
        $query = $this->db->get();
        return $query->result();
    }

    public function inputgejala()
    {
        $k = $this->input->post("kode");
        $n = $this->input->post("gejala");
        $b = $this->input->post('bobot');
        $ket = $this->input->post("keterangan");
        $data = array(
            'kd_gejala' => $k,
            'nama_gejala' => $n,
            'bobot' => $b,
            'keterangan' => $ket
        );
        $this->db->insert("tb_gejala", $data);
    }

    function updategejala($id)
    {
        $k = $this->input->post("kode");
        $n = $this->input->post("gejala");
        $b = $this->input->post('bobot');
        $ket = $this->input->post("keterangan");
        $data = array(
            'kd_gejala' => $k,
            'nama_gejala' => $n,
            'bobot' => $b,
            'keterangan' => $ket
        );
        $this->db->where('kd_gejala', $id);
        $this->db->update('tb_gejala', $data);
    }

    public function delgejala($id)
    {
        $this->db->delete("tb_gejala", ["kd_gejala" => $id]);
    }


    public function get_gejala_id($id)
    {
        return $this->db->get_where('tb_gejala', array('kd_gejala' => $id))->row();
    }

    //penyakit
    public function get_seluruhpenyakit()
    {
        return $this->db->get('tb_penyakit')->result();
    }

    public function get_codepenyakit()
    {
        $this->db->from('tb_penyakit');
        $this->db->order_by("kd_diagnosa", "desc");
        $this->db->limit(1);
        $query = $this->db->get();
        return $query->result();
    }

    function updatepenyakit($id)
    {
        $k = $this->input->post("kode");
        $p = $this->input->post("penyakit");
        $d = $this->input->post("definisi");
        $s = $this->input->post("solusi");
        $data = array(
            'kd_diagnosa' => $k,
            'nama_diagnosa' => $p,
            'keterangan' => $d,
            'solusi' => $s
        );
        $this->db->where('kd_diagnosa', $id);
        $this->db->update('tb_penyakit', $data);
    }

    public function inputpenyakit()
    {
        $k = $this->input->post("kode");
        $p = $this->input->post("penyakit");
        $d = $this->input->post("definisi");
        $s = $this->input->post("solusi");
        $data = array(
            'kd_diagnosa' => $k,
            'nama_diagnosa' => $p,
            'keterangan' => $d,
            'solusi' => $s
        );
        $this->db->insert("tb_penyakit", $data);
    }

    public function delpenyakit($id)
    {
        $this->db->delete("tb_penyakit", ["kd_diagnosa" => $id]);
    }

    public function get_penyakit_id($id)
    {
        return $this->db->get_where('tb_penyakit', array('kd_diagnosa' => $id))->row();
    }

    //relasi
    //input_relasi
    public function input_relasi()
    {
        $p = $this->input->post("daftar_penyakit");
        $g = $this->input->post("daftar_gejala");
        $mb = $this->input->post("nilai_mb");
        $md = $this->input->post("nilai_md");
        $data = array(
            'kd_diagnosa' => $p,
            'kd_gejala' => $g,
            'mb' => $mb,
            'md' => $md
        );
        $this->db->insert("tb_relasi", $data);
    }

    public function select($col)
    {
        $query = $this->db->select($col);
        return $query;
    }

    public function getDistinct(){
        $query = $this->db->distinct();
        return $query;
    }

    public function insert($table, $data)
    {
        return $this->db->insert($table, $data);
    }

    function getInsertId(){
        return $this->db->insert_id();
    }

    public function update($where, $table, $data)
    {
        $this->db->where($where);
        return $this->db->update($table, $data);
    }

    public function getJoin($table,$con,$type){
        $query = $this->db->join($table, $con, $type);
        return $query;
    }

    function getWhere($col, $kon)
    {
        $query = $this->db->where($col, $kon);
        return $query;
    }

    function getWhere_in($col,$kon){
        $query = $this->db->where_in($col,$kon);
        return $query;
    }

    function getData($table)
    {
        $query = $this->db->get($table);
        return $query;
    }

    public function insert_multiple($table, $data)
    {
        $query = $this->db->insert_batch($table, $data);
        return $query;
    }

    public function update_multiple($table, $data, $id)
    {
        $query = $this->db->update_batch($table, $data, $id);
        return $query;
    }

    public function delete($col, $condition, $table)
    {
        $query = $this->db->where($col, $condition);
        $query = $this->db->delete($table);
        return $query;
    }

    //tampil_relasi_datagabungan
    public function tampil_relasi()
    {
        $this->db->select('tb_relasi.id,tb_relasi.kd_diagnosa,tb_penyakit.nama_diagnosa,tb_relasi.kd_gejala,tb_gejala.nama_gejala');
        $this->db->from('tb_relasi');
        $this->db->join('tb_penyakit', 'tb_relasi.kd_diagnosa = tb_penyakit.kd_diagnosa');
        $this->db->join('tb_gejala', 'tb_relasi.kd_gejala = tb_gejala.kd_gejala');
        $this->db->order_by('tb_relasi.kd_diagnosa', 'ASC');
        $query = $this->db->get();
        return $query;
    }

    public function check_relasi($table, $where)
    {
        return $this->db->get_where($table, $where);
    }

    public function delrelasi($id)
    {
        $this->db->delete("tb_relasi", ["id" => $id]);
    }
    public function get_relasi_id($id)
    {
        return $this->db->get_where('tb_relasi', array('id' => $id))->row();
    }

    //edit_relasi
    function updaterelasi($id)
    {
        $p = $this->input->post("daftar_penyakit");
        $g = $this->input->post("daftar_gejala");
        $mb = $this->input->post("nilai_mb");
        $md = $this->input->post("nilai_md");
        $data = array(
            'kd_diagnosa' => $p,
            'kd_gejala' => $g,
            'mb' => $mb,
            'md' => $md
        );
        $this->db->where('id', $id);
        $this->db->update('tb_relasi', $data);
    }

    //dapatkan gejala per penyakit
    public function get_keyword()
    {
        $cari = $this->input->GET('cari', true);
        $query = $this->db->query("SELECT tb_relasi.kd_diagnosa,tb_penyakit.nama_diagnosa,tb_relasi.kd_gejala,tb_gejala.nama_gejala FROM tb_relasi INNER JOIN tb_penyakit ON tb_relasi.kd_diagnosa=tb_penyakit.kd_diagnosa JOIN tb_gejala on tb_relasi.kd_gejala=tb_gejala.kd_gejala 
      WHERE tb_relasi.kd_diagnosa LIKE '%$cari%'");
        return $query->result();
    }

    //tampil data psien
    public function data_pasien()
    {
        $this->db->select('tb_riwayat_pasien.id_pasien, tb_pasien.nama_pasien,tb_pasien.umur,tb_pasien.no_hp,tb_pasien.jenis_kelamin,tb_pasien.alamat, tb_riwayat_pasien.gejala,tb_riwayat_pasien.penyakit,tb_riwayat_pasien.CF');
        $this->db->from('tb_pasien');
        $this->db->join('tb_riwayat_pasien', 'tb_pasien.id_pasien= tb_riwayat_pasien.id_pasien');
        $this->db->order_by('tb_pasien.id_pasien', 'ASC');
        $query = $this->db->get();
        return $query->result();
    }

    //delete riwayat pasien
    public function delriwayat_pasien($id)
    {
        $this->db->delete("tb_riwayat_pasien", ["id_pasien" => $id]);
    }
}