<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class c_user extends CI_Controller {

function __construct()
{
	parent::__construct();
	$this->load->helper('url');
	$this->load->model('m_konsultasi');
	$this->load->model('m_admincrud');
	$this->load->library('form_validation');
} 
function index()
{
	$this->load->view('v_homepage');
	
}	
public function login()
{
	$this->load->view('v_login');
}	
// konsultasi
function halaman_konsultasi()
{
	$rm = $this->input->post('rm');
	if($this->input->post('cari')){
		$data = $this->m_admincrud->getWhere('tb_konsultasi.rekam_medis',$rm);
		$data = $this->m_admincrud->getJoin('tb_pasien','tb_pasien.id_pasien = tb_konsultasi.id_pasien','inner');
		$data = $this->m_admincrud->getData('tb_konsultasi')->row();

		$tglk = $data->tanggal;

		$tgl = date("Y-m-d");
        $pasien = $this->m_admincrud->getWhere('id_pasien', $data->id_pasien);
        $pasien = $this->m_admincrud->getData('tb_pasien')->row();
        $kon = $this->m_admincrud->getWhere('id_pasien', $data->id_pasien);
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
            "penyakit_real" => $dp->nama_diagnosa,   //nama penyakit hasil akhir 
			"pasien" => $pasien,     //detail pasien
			"tglk" => $tglk,
            "hasil_seleksi" => $penyakit,  //hasil seleksi (prosentase hasil)
			"detail_penyakit" => $dp,   //detail penyakit, solusi 
			"nilai_tertinggi" => $cft,
            "gejala_pasien" => $gejala   //gejala yang diinputkan
        );
        // die(json_encode($data));
        $view = 'v_hasil_cari';
        $this->load->view($view, $data);
		// die(json_encode($data));
	}else{
		$this->load->view('v_halaman_konsultasi');
	}
}

function tambah_pasien(){
	$this->load->view('v_form_pasien');
}

// input pasien
function inputpasien(){
	$this->form_validation->set_rules('nama_pasien','Nama Pasien','required');
	$this->form_validation->set_rules('umur','Umur Pasien','required');
	$this->form_validation->set_rules('nomor_telepon','Nomor Telphone Pasien','required');
	$this->form_validation->set_rules('jenis_kelamin','Jenis Kelamin Pasien','required');
	$this->form_validation->set_rules('alamat','Alamat Pasien','required');
	if($this->form_validation->run() == false){
		$this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissable">
										<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
										<p>Data Pasien ada yang belum diisi. Silahkan dicek kembali</p></div>');
		$this->load->view('v_halaman_konsultasi');
	}else{
		$q=$this->m_konsultasi->inputpasien();
		// die(json_encode($this->session->userdata()));
		// redirect(base_url(''));
		redirect(base_url('admin/konsultasi/'.$q));
	}
}

//opsi pertanyaan
function opsi($q)
{
	$data['datagejala']= $this->m_konsultasi->getGejala()->result();
	$this->load->view('v_opsi',$data);
}

//penyakit abses
function abses()
{
	$this->load->view('v_abses');
}

//penyakit kalkulus
function kalkulus()
{
	$this->load->view('v_kalkulus_gigi');
}

//penyakit karis gigi
function karies_gigi()
{
	$this->load->view('v_karies');
}
}
	
